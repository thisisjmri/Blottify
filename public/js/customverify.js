let currentFormat = Fingerprint.SampleFormat.Intermediate;

let FingerprintSdkTest = (function () {
    function FingerprintSdkTest() {
        let _instance = this;
        this.operationToRestart = null;
        this.acquisitionStarted = false;
        // instantiating the fingerprint sdk here
        this.sdk = new Fingerprint.WebApi;
        this.sdk.onDeviceConnected = function (e) {
            // Detects if the device is connected for which acquisition started
            showMessage("Scan Appropriate Finger on the Reader", "success");
        };
        this.sdk.onDeviceDisconnected = function (e) {
            // Detects if device gets disconnected - provides deviceUid of disconnected device
            showMessage("Device is Disconnected. Please Connect Back");
        };
        this.sdk.onCommunicationFailed = function (e) {
            // Detects if there is a failure in communicating with U.R.U web SDK
            showMessage("Communication Failed. Please Reconnect Device")
        };
        this.sdk.onSamplesAcquired = function (s) {
            // Sample acquired event triggers this function
            storeSample(s);
        };
        this.sdk.onQualityReported = function (e) {
            // Quality of sample acquired - Function triggered on every sample acquired
            //document.getElementById("qualityInputBox").value = Fingerprint.QualityCode[(e.quality)];
        }
    }

    // this is were finger print capture takes place
    FingerprintSdkTest.prototype.startCapture = function () {
        if (this.acquisitionStarted) // Monitoring if already started capturing
            return;
        let _instance = this;
        // showMessage("capturing");
        this.operationToRestart = this.startCapture;
        this.sdk.startAcquisition(currentFormat, "").then(function () {
            _instance.acquisitionStarted = true;

            //Disabling start once started
            //disableEnableStartStop();

        }, function (error) {
            showMessage(error.message);
        });
    };
    
    FingerprintSdkTest.prototype.stopCapture = function () {
        if (!this.acquisitionStarted) //Monitor if already stopped capturing
            return;
        let _instance = this;
        // showMessage("stop capture");
        this.sdk.stopAcquisition().then(function () {
            _instance.acquisitionStarted = false;

            //Disabling stop once stopped
            //disableEnableStartStop();

        }, function (error) {
            showMessage(error.message);
        });
    };

    FingerprintSdkTest.prototype.getInfo = function () {
        let _instance = this;
        return this.sdk.enumerateDevices();
    };

    FingerprintSdkTest.prototype.getDeviceInfoWithID = function (uid) {
        let _instance = this;
        return  this.sdk.getDeviceInfo(uid);
    };
    
    return FingerprintSdkTest;
})();


class Reader{
    constructor(){
        this.reader = new FingerprintSdkTest();
        this.selectFieldID = null;
        this.currentStatusField = null;
        /**
         * @type {Hand}
         */
        this.currentHand = null;
    }

    readerSelectField(selectFieldID){
        this.selectFieldID = selectFieldID;
    }

    setStatusField(statusFieldID){
        this.currentStatusField = statusFieldID;
    }

    displayReader(){
        let readers = this.reader.getInfo();  // grab available readers here
        let id = this.selectFieldID;
        let selectField = document.getElementById(id);
        selectField.innerHTML = `<option>Select Fingerprint Reader</option>`;
        readers.then(function(availableReaders){  // when promise is fulfilled
            if(availableReaders.length > 0){
                for(let reader of availableReaders){
                    selectField.innerHTML += `<option value="${reader}" selected>${reader}</option>`;
                }
                let kind = document.getElementById("kind").value;
                if(kind == "enroll"){
                    beginCapture();
                }
                else{
                    captureForIdentify();
                }
            }
            else{
                showMessage("Please Connect the Fingerprint Reader");
                var timer;
                clearTimeout(timer);
                timer = setTimeout(function(){
                    beginIdentification();
                },3000);
            }
        })
    }
}

class Hand{
    constructor(){
        this.id = 0;
        this.index_finger = [];
        this.middle_finger = [];
        this.ring_finger = [];
        this.pinky_finger = [];
    }

    addIndexFingerSample(sample){
        this.index_finger.push(sample);
    }

    addMiddleFingerSample(sample){
        this.middle_finger.push(sample);
    }

    addRingFingerSample(sample){
        this.ring_finger.push(sample);
    }

    addPinkyFingerSample(sample){
        this.pinky_finger.push(sample);
    }

    generateFullHand(){
        let id = this.id;
        let index_finger = this.index_finger;
        let middle_finger = this.middle_finger;
        let ring_finger = this.ring_finger;
        let pinky_finger = this.pinky_finger;
        return JSON.stringify({id, index_finger, middle_finger, ring_finger, pinky_finger});
    }
}

let myReader = new Reader();

function beginEnrollment(){
    setReaderSelectField("enrollReaderSelect");
    myReader.setStatusField("enrollmentStatusField");
    // showMessage("beginEnrollment");
}

function beginIdentification(){
    setReaderSelectField("verifyReaderSelect");
    myReader.setStatusField("verifyIdentityStatusField");
    showMessage("beginIdentification");
}

function setReaderSelectField(fieldName){
    myReader.readerSelectField(fieldName);
    myReader.displayReader();
}

function showMessage(message, message_type="error"){
    console.log(message);
    let types = new Map();
    types.set("success", 'text-danger');
    types.set("error", 'text-danger');
    let statusFieldID = myReader.currentStatusField;
    if(statusFieldID){
        let statusField = document.getElementById(statusFieldID);
        statusField.innerHTML = `<p>${message}</p>`;
    }
}

function beginCapture(){
    if(!readyForEnroll()){
        return;
    }
    myReader.currentHand = new Hand();
    storeUserID();  // for current user in Hand instance
    myReader.reader.startCapture();
    showNextNotEnrolledItem();
    // showMessage("beginCapture");
}

function captureForIdentify() {
    if(!readyForIdentify()){
        return;
    }
    myReader.currentHand = new Hand();
    storeUserID();
    myReader.reader.startCapture();
    showNextNotEnrolledItem();
    showMessage("captureForIdentify");
}

/**
 * @returns {boolean}
 */
function readyForEnroll(){
    // showMessage("readyForEnroll");
    return ((document.getElementById("userID").value !== "") && (document.getElementById("enrollReaderSelect").value !== "Select Fingerprint Reader"));
}

/**
* @returns {boolean}
*/
function readyForIdentify() {
    showMessage("readyForIdentify");
    return ((document.getElementById("userIDVerify").value !== "") && (document.getElementById("verifyReaderSelect").value !== "Select Fingerprint Reader"));
}

function clearCapture(){
    clearInputs();
    clearPrints();
    clearHand();
    myReader.reader.stopCapture();
}

function clearInputs(){
    let id = myReader.selectFieldID;
    let selectField = document.getElementById(id);
    selectField.innerHTML = `<option>Select Fingerprint Reader</option>`;
}

function clearPrints(){//
    let indexFingers = document.getElementById("indexFingers");
    let middleFingers = document.getElementById("middleFingers");
    let ringFingers = document.getElementById("ringFingers");
    let pinkyFingers = document.getElementById("pinkyFingers");
    let verifyFingers = document.getElementById("verificationFingers");

    if (indexFingers){
        for(let indexfingerElement of indexFingers.children){
            indexfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (middleFingers){
        for(let middlefingerElement of middleFingers.children){
            middlefingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (ringFingers){
        for(let ringfingerElement of ringFingers.children){
            ringfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (pinkyFingers){
        for(let pinkyfingerElement of pinkyFingers.children){
            pinkyfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (verifyFingers){
        for(let finger of verifyFingers.children){
            finger.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }
}

function clearHand(){
    myReader.currentHand = null;
}

function showSampleCaptured(){
    // showMessage("showSampleCaptured");
    let nextElementID = getNextNotEnrolledID();
    console.log("neID: "+nextElementID);
    let markup = null;
    if(nextElementID.startsWith("verification")){
        markup = `<span title="enrolled"></span>`;
        document.getElementById("group1").setAttribute("fill", "#17e83d");
        document.getElementById("group2").setAttribute("fill", "#17e83d");
        document.getElementById("group3").setAttribute("fill", "#17e83d");
        document.getElementById("group4").setAttribute("fill", "#17e83d");
    }
    if(nextElementID.endsWith("1")){
        markup = `<span title="enrolled"></span>`;
        document.getElementById("group1").setAttribute("fill", "#17e83d");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if(nextElementID.endsWith("2")){
        markup = `<span title="enrolled"></span>`;
        document.getElementById("group2").setAttribute("fill", "#17e83d");
    }

    if(nextElementID.endsWith("3")){
        markup = `<span title="enrolled"></span>`;
        document.getElementById("group3").setAttribute("fill", "#17e83d");
    }

    if(nextElementID.endsWith("4")){
        markup = `<span title="enrolled"></span>`;
        document.getElementById("group4").setAttribute("fill", "#17e83d");
    }

    if(nextElementID !== "" && markup){
        let nextElement = document.getElementById(nextElementID);
        nextElement.innerHTML = markup;
    }
}

// removed because of the UI
function showNextNotEnrolledItem(){
    // showMessage("showNextNotEnrolledItem");
    let nextElementID = getNextNotEnrolledID();
    let markup = null;
    if(nextElementID.startsWith("index") || nextElementID.startsWith("verification")){
        markup = `<span title="not_enrolled"></span>`;
    }

    if(nextElementID.startsWith("middle")){
        markup = `<span title="not_enrolled"></span>`;
    }

    if(nextElementID.startsWith("ring")){
        markup = `<span title="not_enrolled"></span>`;
    }

    if(nextElementID.startsWith("pinky")){
        markup = `<span title="not_enrolled"></span>`;
    }

    if(nextElementID !== "" && markup){
        let nextElement = document.getElementById(nextElementID);
        nextElement.innerHTML = markup;
    }
}

/**
 * @returns {string}
 */
function getNextNotEnrolledID(){
    
    let indexFingers = document.getElementById("indexFingers");
    let middleFingers = document.getElementById("middleFingers");
    let ringFingers = document.getElementById("ringFingers");
    let pinkyFingers = document.getElementById("pinkyFingers");
    let verifyFingers = document.getElementById("verificationFingers");

    let enrollUserId = document.getElementById("userID").value;
    let verifyUserId = document.getElementById("userIDVerify").value;

    let indexFingerElement = findElementNotEnrolled(indexFingers);
    let middleFingerElement = findElementNotEnrolled(middleFingers);
    let ringFingerElement = findElementNotEnrolled(ringFingers);
    let pinkyFingerElement = findElementNotEnrolled(pinkyFingers);
    let verifyFingerElement = findElementNotEnrolled(verifyFingers);

    //assumption is that we will always start with
    //indexfinger and run down to middlefinger
    if (indexFingerElement !== null && enrollUserId !== ""){
        return indexFingerElement.id;
    }

    if (middleFingerElement !== null && enrollUserId !== ""){
        return middleFingerElement.id;
    }

    if (ringFingerElement !== null && enrollUserId !== ""){
        return ringFingerElement.id;
    }

    if (pinkyFingerElement !== null && enrollUserId !== ""){
        return pinkyFingerElement.id;
    }

    if (verifyFingerElement !== null && verifyUserId !== ""){
        return verifyFingerElement.id;
    }
    serverIdentify();
    return "";
}

/**
 * 
 * @param {Element} element
 * @returns {Element}
 */
function findElementNotEnrolled(element){
    // showMessage("findElementNotEnrolled");
    // showMessage(element);
    if (element){
        for(let fingerElement of element.children){
            if(fingerElement.firstElementChild.title === "not_enrolled"){
                return fingerElement;
            }
        }
    }

    return null;
}

function storeUserID(){
    // showMessage("storeUserID");
    let enrollUserId = document.getElementById("userID").value;
    let identifyUserId = document.getElementById("userIDVerify").value;
    myReader.currentHand.id = enrollUserId !== "" ? enrollUserId : identifyUserId;
}

function storeSample(sample){
    // showMessage("storeSample");
    let samples = JSON.parse(sample.samples);
    let sampleData = samples[0].Data;

    let nextElementID = getNextNotEnrolledID();

    if(nextElementID.startsWith("index") || nextElementID.startsWith("verification")){
        myReader.currentHand.addIndexFingerSample(sampleData);
        showSampleCaptured();
        showNextNotEnrolledItem();
        return;
    }

    if(nextElementID.startsWith("middle")){
        myReader.currentHand.addMiddleFingerSample(sampleData);
        showSampleCaptured();
        showNextNotEnrolledItem();
    }

    if(nextElementID.startsWith("ring")){
        myReader.currentHand.addRingFingerSample(sampleData);
        showSampleCaptured();
        showNextNotEnrolledItem();
    }

    if(nextElementID.startsWith("pinky")){
        myReader.currentHand.addPinkyFingerSample(sampleData);
        showSampleCaptured();
        showNextNotEnrolledItem();
    }
}

function serverEnroll(){
    // showMessage("serverEnroll");
    if(!readyForEnroll()){
        return;
    }

    let successMessage = "Enrollment Successful!";
    let failedMessage = "Enrollment Failed!";
    let data = JSON.parse(myReader.currentHand.generateFullHand());
    let indexMiddleData = {id: data.id, index_finger: data.index_finger, middle_finger: data.middle_finger};
    let ringPinkyData = {id: data.id, index_finger: data.ring_finger, middle_finger: data.pinky_finger};

    let firstPayload = JSON.stringify(indexMiddleData);
    let secondPayload = JSON.stringify(ringPinkyData);
    let payload1 = `data=${firstPayload}`;
    let payload2 = `data=${secondPayload}`;
    
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200){
            if(this.responseText === "success"){
                // showMessage(successMessage, "success");
                // enroll the second batch of fingerprints after the first batch is successful
                let secondXhttp = new XMLHttpRequest();

                secondXhttp.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200){
                        if(this.responseText === "success"){
                            showMessage(successMessage, "success");
                        }
                        else{
                            showMessage(`${failedMessage} ${this.responseText}`);
                        }
                    }
                };

                secondXhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                secondXhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                secondXhttp.send(payload2);
            }
            else{
                showMessage(`${failedMessage} ${this.responseText}`);
            }
        }
    };

    xhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(payload1);
}

function serverIdentify() {
    showMessage("serverIdentify");
    if(!readyForIdentify()){
        return;
    }
    console.log("inside");
    let detailElement = document.getElementById("userDetails");
    let successMessage = "Identification Successful!";
    let failedMessage = "Identification Failed!";

    let data = JSON.parse(myReader.currentHand.generateFullHand());
    let indexMiddleData = {id: data.id, index_finger: data.index_finger, middle_finger: data.middle_finger};

    let firstPayload = JSON.stringify(indexMiddleData);
    let payload = `data=${firstPayload}`;

    var id = document.getElementById("userIDVerify").value;
    
                let xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200){
                        if(this.responseText !== null && this.responseText !== ""){
                            console.log(this.responseText);
                            let response = JSON.parse(this.responseText);
                            if(response !== "failed" && response !== null){
                                showMessage(successMessage, "success");
                                console.log("verified");
                                $.ajax({
                                    url:'biometric/addLogs',
                                    type: 'post',
                                    data: {
                                        id : id
                                    },
                                     cache: false,
                                     success: function(server_reply) {
                                        console.log(server_reply);
                                        window.location = server_reply;
                                     },
                                     error: function(xhr, status, error) {
                                     alert('Cannot do action: '+console.error(xhr));
                                     }
                                });
                            }
                            else {
                                showMessage(`${failedMessage} ${this.responseText}`);
                            }
                        }
                    }
                };

                xhttp.open("POST", "/BLOTTIFY/public/core/verify.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(payload);
}