var isEnrollmentSuccessful = false;
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
        this.thumb_finger = [];
        this.rthumb_finger = [];
        this.rindex_finger = [];
        this.rmiddle_finger = [];
        this.rring_finger = [];
        this.rpinky_finger = [];
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

    addThumbFingerSample(sample){
        this.thumb_finger.push(sample);
    }

    addRthumbFingerSample(sample){
        this.rthumb_finger.push(sample);
    }

    addRindexFingerSample(sample){
        this.rindex_finger.push(sample);
    }

    addRmiddleFingerSample(sample){
        this.rmiddle_finger.push(sample);
    }

    addRringFingerSample(sample){
        this.rring_finger.push(sample);
    }

    addRpinkyFingerSample(sample){
        this.rpinky_finger.push(sample);
    }

    generateFullHand(){
        let id = this.id;
        let index_finger = this.index_finger;
        let middle_finger = this.middle_finger;
        let ring_finger = this.ring_finger;
        let pinky_finger = this.pinky_finger;
        let thumb_finger = this.thumb_finger;
        let rthumb_finger = this.rthumb_finger;
        let rindex_finger = this.rindex_finger;
        let rmiddle_finger = this.rmiddle_finger;
        let rring_finger = this.rring_finger;
        let rpinky_finger = this.rpinky_finger;
        return JSON.stringify({id, index_finger, middle_finger, ring_finger, pinky_finger, thumb_finger, rthumb_finger, rindex_finger, rmiddle_finger, rring_finger, rpinky_finger});
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
    // showMessage("beginIdentification");
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
    // showNextNotEnrolledItem();
    // showMessage("beginCapture");
}

function captureForIdentify() {
    if(!readyForIdentify()){
        return;
    }
    myReader.currentHand = new Hand();
    storeUserID();
    myReader.reader.startCapture();
    // showNextNotEnrolledItem();
    // showMessage("captureForIdentify");
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
    // showMessage("readyForIdentify");
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
    let thumbFingers = document.getElementById("thumbFingers");
    let rthumbFingers = document.getElementById("rthumbFingers");
    let rindexFingers = document.getElementById("rindexFingers");
    let rmiddleFingers = document.getElementById("rmiddleFingers");
    let rringFingers = document.getElementById("rringFingers");
    let rpinkyFingers = document.getElementById("rpinkyFingers");
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

    if (thumbFingers){
        for(let thumbfingerElement of thumbFingers.children){
            thumbfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (rthumbFingers){
        for(let rthumbfingerElement of rthumbFingers.children){
            rthumbfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (rindexFingers){
        for(let rindexfingerElement of rindexFingers.children){
            rindexfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (rmiddleFingers){
        for(let rmiddlefingerElement of rmiddleFingers.children){
            rmiddlefingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (rringFingers){
        for(let rringfingerElement of rringFingers.children){
            rringfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
        }
        document.getElementById("group1").setAttribute("fill", "#000000");
        document.getElementById("group2").setAttribute("fill", "#000000");
        document.getElementById("group3").setAttribute("fill", "#000000");
        document.getElementById("group4").setAttribute("fill", "#000000");
    }

    if (rpinkyFingers){
        for(let rpinkyfingerElement of rpinkyFingers.children){
            rpinkyfingerElement.innerHTML = `<span title="not_enrolled"></span>`;
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

    if (nextElementID === "rpinkyfinger4") {
        document.getElementById("addbio").removeAttribute("disabled");
    }


    if(nextElementID !== "" && markup){
        let nextElement = document.getElementById(nextElementID);
        nextElement.innerHTML = markup;
    }
}

// removed because of the UI
// function showNextNotEnrolledItem(){
//     showMessage("showNextNotEnrolledItem");
//     let nextElementID = getNextNotEnrolledID();
//     let markup = null;
//     if(nextElementID.startsWith("index") || nextElementID.startsWith("verification")){
//         markup = `<span title="not_enrolled"></span>`;
//     }

//     if(nextElementID.startsWith("middle")){
//         markup = `<span title="not_enrolled"></span>`;
//     }

//     if(nextElementID !== "" && markup){
//         let nextElement = document.getElementById(nextElementID);
//         nextElement.innerHTML = markup;
//     }
// }

/**
 * @returns {string}
 */
function getNextNotEnrolledID(){
    // showMessage("getNextNotEnrolledID");
    let indexFingers = document.getElementById("indexFingers");
    let middleFingers = document.getElementById("middleFingers");
    let ringFingers = document.getElementById("ringFingers");
    let pinkyFingers = document.getElementById("pinkyFingers");
    let thumbFingers = document.getElementById("thumbFingers");
    let rthumbFingers = document.getElementById("rthumbFingers");
    let rindexFingers = document.getElementById("rindexFingers");
    let rmiddleFingers = document.getElementById("rmiddleFingers");
    let rringFingers = document.getElementById("rringFingers");
    let rpinkyFingers = document.getElementById("rpinkyFingers");
    let verifyFingers = document.getElementById("verificationFingers");

    let enrollUserId = document.getElementById("userID").value;
    let verifyUserId = document.getElementById("userIDVerify").value;

    let indexFingerElement = findElementNotEnrolled(indexFingers);
    let middleFingerElement = findElementNotEnrolled(middleFingers);
    let ringFingerElement = findElementNotEnrolled(ringFingers);
    let pinkyFingerElement = findElementNotEnrolled(pinkyFingers);
    let thumbFingerElement = findElementNotEnrolled(thumbFingers);
    let rthumbFingerElement = findElementNotEnrolled(rthumbFingers);
    let rindexFingerElement = findElementNotEnrolled(rindexFingers);
    let rmiddleFingerElement = findElementNotEnrolled(rmiddleFingers);
    let rringFingerElement = findElementNotEnrolled(rringFingers);
    let rpinkyFingerElement = findElementNotEnrolled(rpinkyFingers);
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

    if (thumbFingerElement !== null && enrollUserId !== ""){
        return thumbFingerElement.id;
    }

    if (rthumbFingerElement !== null && enrollUserId !== ""){
        return rthumbFingerElement.id;
    }

    if (rindexFingerElement !== null && enrollUserId !== ""){
        return rindexFingerElement.id;
    }

    if (rmiddleFingerElement !== null && enrollUserId !== ""){
        return rmiddleFingerElement.id;
    }

    if (rringFingerElement !== null && enrollUserId !== ""){
        return rringFingerElement.id;
    }

    if (rpinkyFingerElement !== null && enrollUserId !== ""){
        return rpinkyFingerElement.id;
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
        return;
    }

    if(nextElementID.startsWith("middle")){
        myReader.currentHand.addMiddleFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("ring")){
        myReader.currentHand.addRingFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("pinky")){
        myReader.currentHand.addPinkyFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("thumb")){
        myReader.currentHand.addThumbFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("rthumb")){
        myReader.currentHand.addRthumbFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("rindex")){
        myReader.currentHand.addRindexFingerSample(sampleData);
        showSampleCaptured();
        return;
    }

    if(nextElementID.startsWith("rmiddle")){
        myReader.currentHand.addRmiddleFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("rring")){
        myReader.currentHand.addRringFingerSample(sampleData);
        showSampleCaptured();
    }

    if(nextElementID.startsWith("rpinky")){
        myReader.currentHand.addRpinkyFingerSample(sampleData);
        showSampleCaptured();
    }
}

function serverEnroll() {
    showMessage("serverEnroll");
    if (!readyForEnroll()) {
        return;
    }

    let successMessage = "Enrollment Successful!";
    let failedMessage = "Enrollment Failed!";
    let data = JSON.parse(myReader.currentHand.generateFullHand());
    let indexMiddleData = {id: data.id, index_finger: data.index_finger, middle_finger: data.middle_finger};
    let ringPinkyData = {id: data.id, index_finger: data.ring_finger, middle_finger: data.pinky_finger};
    let thumbsData = {id: data.id, index_finger: data.thumb_finger, middle_finger: data.rthumb_finger};
    let rindexMiddleData = {id: data.id, index_finger: data.rindex_finger, middle_finger: data.rmiddle_finger};
    let rringPinkyData = {id: data.id, index_finger: data.rring_finger, middle_finger: data.rpinky_finger};
    let allData = {id: data.id, index_finger: data.index_finger, middle_finger: data.middle_finger, ring_finger: data.ring_finger, pinky_finger: data.pinky_finger, thumb_finger: data.thumb_finger, rthumb_finger: data.rthumb_finger, rindex_finger: data.rindex_finger, rmiddle_finger: data.rmiddle_finger, rring_finger: data.rring_finger, rpinky_finger: data.rpinky_finger};

    let firstPayload = JSON.stringify(indexMiddleData);
    let secondPayload = JSON.stringify(ringPinkyData);
    let thirdPayload = JSON.stringify(thumbsData);
    let fourthPayload = JSON.stringify(rindexMiddleData);
    let fifthPayload = JSON.stringify(rringPinkyData);
    let allPayload = JSON.stringify(allData);
    let payload1 = `data=${firstPayload}`;
    let payload2 = `data=${secondPayload}`;
    let payload3 = `data=${thirdPayload}`;
    let payload4 = `data=${fourthPayload}`;
    let payload5 = `data=${fifthPayload}`;
    let payload0 = `data=${allPayload}`;
    let guard = 0;

    let ffxhttp = new XMLHttpRequest();
    ffxhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            if (this.responseText === "success") {
                let xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        if (this.responseText === "success") {
                            // enroll the second batch of fingerprints after the first batch is successful
                            console.log("success in firstbatch");
                            let secondXhttp = new XMLHttpRequest();
                            secondXhttp.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    if (this.responseText === "success") {
                                        console.log("success in secondbatch");
                                        let thirdXhttp = new XMLHttpRequest();

                                        thirdXhttp.onreadystatechange = function() {
                                            if (this.readyState === 4 && this.status === 200) {
                                                if (this.responseText === "success") {
                                                    console.log("success in thirdbatch");
                                                    let fourthXhttp = new XMLHttpRequest();

                                                    fourthXhttp.onreadystatechange = function() {
                                                        if (this.readyState === 4 && this.status === 200) {
                                                            if (this.responseText === "success") {
                                                                console.log("success in fourthbatch");
                                                                let fifthXhttp = new XMLHttpRequest();

                                                                fifthXhttp.onreadystatechange = function() {
                                                                    if (this.readyState === 4 && this.status === 200) {
                                                                        if (this.responseText === "success") {
                                                                            console.log("success in fifthbatch");
                                                                            showMessage(successMessage, "success");
                                                                            // isEnrollmentSuccessful = true;
                                                                            // window.location = "user_account";
                                                                        } else {
                                                                            guard = 1;
                                                                            showMessage(`${failedMessage} ${this.responseText}`);
                                                                        }
                                                                    }

                                                                    if (guard == 1) {
                                                                        let user_id = data.id;
                                                                        delt(user_id);
                                                                    }
                                                                };

                                                                fifthXhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                                                                fifthXhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                                fifthXhttp.send(payload5);
                                                            } else {
                                                                guard = 1;
                                                                showMessage(`${failedMessage} ${this.responseText}`);
                                                            }
                                                        }

                                                        if (guard == 1) {
                                                            let user_id = data.id;
                                                            delt(user_id);
                                                        }
                                                    };

                                                    fourthXhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                                                    fourthXhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                                    fourthXhttp.send(payload4);
                                                } else {
                                                    guard = 1;
                                                    showMessage(`${failedMessage} ${this.responseText}`);
                                                }
                                            }

                                            if (guard == 1) {
                                                let user_id = data.id;
                                                delt(user_id);
                                            }
                                        };

                                        thirdXhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                                        thirdXhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                        thirdXhttp.send(payload3);
                                    } else {
                                        guard = 1;
                                        showMessage(`${failedMessage} ${this.responseText}`);
                                    }
                                }

                                if (guard == 1) {
                                    let user_id = data.id;
                                    delt(user_id);
                                }
                            };

                            secondXhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                            secondXhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            secondXhttp.send(payload2);
                        } else {
                            showMessage(`${failedMessage} ${this.responseText}`);
                        }
                    }
                };

                xhttp.open("POST", "/BLOTTIFY/public/core/enroll.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(payload1);
            }
            else{
                console.log(`${this.responseText}`)
            }
        }
    };

    ffxhttp.open("POST", "/BLOTTIFY/public/core/customduplicate.php", true);
    ffxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ffxhttp.send(payload0);
}

function delt(data){
    let user_id = data;
    let delxhttp = new XMLHttpRequest();
    delxhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            if (this.responseText === "success") {
                console.log("success in delt");
                clearCapture();
                var timer;
                clearTimeout(timer);
                timer = setTimeout(function(){
                    beginEnrollment();
                },3000);
            } else {
                console.log("failed in delete");
            }
        }
    };

    delxhttp.open("POST", "/BLOTTIFY/public/core/delt.php", true);
    delxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    delxhttp.send(`user_id=${user_id}`);
}


function serverIdentify() {
    showMessage("serverIdentify");
    if(!readyForIdentify()){
        return;
    }

    let detailElement = document.getElementById("userDetails");
    let successMessage = "Identification Successful!";
    let failedMessage = "Identification Failed! Try again";

    let data = JSON.parse(myReader.currentHand.generateFullHand());
    let indexMiddleData = {id: data.id, index_finger: data.index_finger, middle_finger: data.middle_finger};

    let firstPayload = JSON.stringify(indexMiddleData);
    let payload = `data=${firstPayload}`;

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200){
            if(this.responseText !== null && this.responseText !== ""){
                let response = JSON.parse(this.responseText);
                if(response !== "failed" && response !== null){
                    showMessage(successMessage, "success");
                    var id = document.getElementById("userIDVerify").value;
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
                    showMessage(failedMessage);
                    clearCapture();
                    var timer;
                    clearTimeout(timer);
                    timer = setTimeout(function(){
                        beginIdentification();
                    },3000);
                }
            }
        }
    };

    xhttp.open("POST", "/BLOTTIFY/public/core/verify.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(payload);
}

//---------

// Set a flag variable to indicate if enrollment is successful
// var isEnrollmentSuccessful = false;

// Function to handle enrollment
// function enroll() {
//   // Perform enrollment logic here
//   // If enrollment is successful, set isEnrollmentSuccessful to true
//   isEnrollmentSuccessful = true;
// }

// Function to disable onbeforeunload event when enrollment is successful
// function disableOnBeforeUnload() {
//   window.onbeforeunload = null;
// }

// // Attach onbeforeunload event to window
// window.onbeforeunload = function(event) {
//   // Check if enrollment is successful
//   if (isEnrollmentSuccessful) {
//     // Disable onbeforeunload event and redirect to another page
//     disableOnBeforeUnload();
//     window.location = "user_account";
//   } else {
//     // Prevent the user from leaving the current page
//     event.preventDefault();
//     event.returnValue = '';
//     navigator.sendBeacon("/BLOTTIFY/public/core/cancelEnrollment.php");
//   }
// };
