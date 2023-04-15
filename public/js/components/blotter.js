var no = document.getElementById("no");
var drugs = document.getElementById("drugs");
var liquor = document.getElementById("liquor");
var others = document.getElementById("others");
var brgy_incident = document.getElementById("brgy_incident");
    var for_bincident = 0;
var a_civil = document.getElementById("a_civil");
    var for_acivil = 0;
var a_sex = document.getElementById("a_sex");
    var for_asex = 0;
var c_influence = document.getElementById("b_influence");
var c_civil = document.getElementById("c_civil");
    var for_civil2 = 0;
var c_sex = document.getElementById("c_sex");
    var for_sex2 = 0;    
var dt_incident = document.getElementById("dt_incident");
var d_dtincident = document.getElementById("d_dtincident");

b_influence.setAttribute("disabled", true);


//DATE_INCIDENT_CURRENT TIME AND DATE_DISABLED
  const datetimeInput = document.getElementById('dt_reported');
  const today = new Date();
  const year = today.getFullYear();
  let month = today.getMonth() + 1;
  if (month < 10) {
    month = '0' + month;
  }
  let day = today.getDate();
  if (day < 10) {
    day = '0' + day;
  }
  let hours = today.getHours();
  if (hours < 10) {
    hours = '0' + hours;
  }
  let minutes = today.getMinutes();
  if (minutes < 10) {
    minutes = '0' + minutes;
  }
  const currentDatetime = `${year}-${month}-${day}T${hours}:${minutes}`;
  datetimeInput.value = currentDatetime;


no.addEventListener("change", function() {
  if (no.checked) {
    drugs.setAttribute("disabled", true);
    liquor.setAttribute("disabled", true);
    others.setAttribute("disabled", true);
    drugs.checked = false;
    liquor.checked = false;
    others.checked = false;
    document.getElementById("b_influence").value = "";
    b_influence.setAttribute("disabled", true);
  } else {
    drugs.removeAttribute("disabled");
    liquor.removeAttribute("disabled");
    others.removeAttribute("disabled");
  }
});

others.addEventListener("change", function() {
  if (others.checked) {
    b_influence.removeAttribute("disabled");
  } else {
    b_influence.setAttribute("disabled", true);
    document.getElementById("b_influence").value = "";
  }
});

dt_incident.addEventListener("input", () => { // CHANGE FORMAT
    console.log("dt_incident");
    var datetimeValue = dt_incident.value;
    var date = new Date(datetimeValue);
    var formattedDate = `${date.getFullYear()}-${padNumber(date.getMonth() + 1)}-${padNumber(date.getDate())} ${padNumber(date.getHours())}:${padNumber(date.getMinutes())}:${padNumber(date.getSeconds())}`;
    
    function padNumber(number) {
      return number.toString().padStart(2, '0');
    }

    d_dtincident.value = formattedDate;
});

brgy_incident.addEventListener("change", (event) => { 
    for_bincident = 1;

  console.log(`Selected option: ${event.target.value}`);
  console.log(for_bincident);
  // Do something when the dropdown value changes
});

a_civil.addEventListener("change", (event) => { 
    for_acivil = 1;

  console.log(`Selected option: ${event.target.value}`);
  console.log(for_acivil);
  // Do something when the dropdown value changes
});

a_sex.addEventListener("change", (event) => { 
    for_asex = 1;

  console.log(`Selected option: ${event.target.value}`);
  console.log(for_asex);
  // Do something when the dropdown value changes
});

c_civil.addEventListener("change", (event) => { 
    for_civil2 = 1;

  console.log(`Selected option: ${event.target.value}`);
  console.log(for_ccivil);
  // Do something when the dropdown value changes
});

c_sex.addEventListener("change", (event) => { 
    for_sex2 = 1;

  console.log(`Selected option: ${event.target.value}`);
  console.log(for_sex2);
  // Do something when the dropdown value changes
});

//REFLECT PLACE OF INCIDENT ON ITEM D
// $(document).ready(function(){
//     $('#brgy_incident').on("change", function(){
//         var id = $('#brgy_incident').val();
//         var place_incident = $('#place_incident').val();
//         if(id != null){
//             $.ajax({
//                 url:'blotter/getBrgy',
//                 type: 'post',
//                 data: {
//                     id : id
//                 },
//                 cache: false,
//                 success: function(server_reply) {
//                     document.getElementById("d_pincident").value = place_incident +", "+ server_reply;
//                 },
//                 error: function(xhr, status, error) {
//                     alert('Cannot do action: '+console.error(xhr));
//                 }
//             });
//         }
//     });
//     $('#place_incident').on("keyup", function(){
//         var id = $('#brgy_incident').val();
//         var place_incident = $('#place_incident').val();
//         $.ajax({
//             url:'blotter/getBrgy',
//             type: 'post',
//             data: {
//                 id : id
//             },
//             cache: false,
//             success: function(server_reply) {
//                 document.getElementById("d_pincident").value = place_incident +", "+ server_reply;
//             },
//             error: function(xhr, status, error) {
//                 alert('Cannot do action: '+console.error(xhr));
//             }
//         });
//     });
//     $('#type_incident').on("change", function(){
//         var id = $('#type_incident').val();
//         $.ajax({
//             url:'blotter/getTypeOfIncident',
//             type: 'post',
//             data: {
//                 id : id
//             },
//             cache: false,
//             success: function(server_reply) {
//                 document.getElementById("d_type").value = server_reply;
//             },
//             error: function(xhr, status, error) {
//                 alert('Cannot do action: '+console.error(xhr));
//             }
//         });
//     });
// });



$(document).ready(function(){
    assignIRF();
    function assignIRF() {
        $.ajax({
            url:'blotter/getIRFID',
            type: 'post',
            cache: false,
            success: function(server_reply) {
                if (!isNaN(server_reply)) {
                    $('#irfid').val(server_reply);
                } else {
                    alert(server_reply);
                }
            },
            error: function(xhr, status, error) {
                alert('Cannot do action: ' + console.error(xhr));
            }
        });
    }
});





// //ASSIGNING IRF ID
// $(document).ready(function(){
// 	assignIRF();
// 	function assignIRF() {
// 		$.ajax({
// 			url:'blotter/getIRFID',
// 			type: 'post',
// 			 cache: false,
// 			 success: function(server_reply) {
// 			  if(!isNaN(server_reply)){
// 		            document.getElementById("irfid").value = server_reply;
// 		      }else{
// 		        alert(server_reply);
// 		      }
// 			 },
// 			 error: function(xhr, status, error) {
// 			 alert('Cannot do action: '+console.error(xhr));
// 			 }
// 		});
// 	}
// });


  // const phoneInput = document.getElementById('phone');
  // phoneInput.addEventListener('input', () => {
  //   phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');
  // });


//CHECKING ITEM A
$(document).ready(function(){
    $('#proceedB').on("click", function(){
        //ITEM A
        var irfid = $('#irfid').val();
        var type_incident = $('#type_incident').val();
        var copyFor = $('#copyFor').val();
        var dt_reported = $('#dt_reported').val();
        var dt_incident = $('#dt_incident').val();
        var place_incident = $('#place_incident').val();
        var brgy_incident = $('#brgy_incident').val();
        var a_lastname = $('#a_lastname').val();
        var a_firstname = $('#a_firstname').val();
        var a_middlename = $('#a_middlename').val();
        var a_nickname = $('#a_nickname').val();
        var a_citizenship = $('#a_citizenship').val();
        var a_sex = $('#a_sex').val();
        var a_civil = $('#a_civil').val();
        var a_bday = $('#a_bday').val();
        var a_age = $('#a_age').val();
        var a_pob = $('#a_pob').val();
        var a_mobilephone = $('#a_mobilephone').val();
        var a_currentadd = $('#a_currentadd').val();
        var a_currentvill = $('#a_currentvill').val();
        var a_currentbrgy = $('#a_currentbrgy').val();
        var a_currentcity = $('#a_currentcity').val();
        var a_currentprov = $('#a_currentprov').val();
        var a_otheradd = $('#a_otheradd').val();
        var a_othervill = $('#a_othervill').val();
        var a_otherbrgy = $('#a_otherbrgy').val();
        var a_othercity = $('#a_othercity').val();
        var a_otherprov = $('#a_otherprov').val();
        var a_occupation = $('#a_occupation').val();
        var a_idcard = $('#a_idcard').val();



        var itemA = ["irfid","type_incident","dt_reported","dt_incident","place_incident","brgy_incident","a_lastname","a_firstname","a_sex","a_civil","a_bday","a_age","a_currentadd","a_currentvill","a_currentbrgy","a_currentcity","a_currentprov","a_idcard"];
        for(var k=0; k<itemA.length;k++){
            document.getElementById(itemA[k]).className = "form-control";
        }

        if(irfid !='' && type_incident !='' && dt_reported !='' &&  dt_incident !='' && place_incident !='' && brgy_incident !='' && 
            a_lastname !='' && a_firstname !='' && a_sex !='' && a_civil !='' && a_bday !='' && a_age !='' && a_currentadd !='' &&
            a_currentvill !='' && a_currentbrgy !='' && a_currentcity !='' && a_currentprov !='' && a_idcard !='' && for_acivil == 1 !='' && for_asex == 1 !='' && for_bincident == 1 !=''){
            document.getElementById("checkerA").value = "1";
        }
        else{
            document.getElementById("checkerA").value = "0";
            for(var j=0; j<itemA.length;j++){
                var b = document.getElementById(itemA[j]).value;
                if (b === ''){
                    var a = document.getElementById(itemA[j]);
                    a.classList.add("is-invalid");
                }     
            }
        }
    });
});


const fields = [
  {
    id: 'a_mobilephone',
    pattern: /^[0-9]{11}$/,
    errorText: 'Please enter a valid 11-digit mobile number starting with "09".'
  },
  {
    id: 'b_mobilephone',
    pattern: /^[0-9]{11}$/,
    errorText: 'Please enter a valid 11-digit mobile number starting with "09".'
  },
  {
    id: 'c_mobilephone',
    pattern: /^[0-9]{11}$/,
    errorText: 'Please enter a valid 11-digit mobile number starting with "09".'
  }
];

fields.forEach(function(field) {
  const inputField = document.getElementById(field.id);
  inputField.addEventListener('input', function() {
    const value = inputField.value.trim();
    if (!value.match(field.pattern)) {
      inputField.classList.add('is-invalid');
      inputField.nextElementSibling.textContent = field.errorText;
    } else {
      inputField.classList.remove('is-invalid');
      inputField.nextElementSibling.textContent = '';
    }
  });
});

//IS-INVALID FIELDS - DYNAMIC
// Define an array of input field IDs
const inputIds = ["type_incident", "dt_incident", "place_incident", "brgy_incident", "a_lastname", "a_firstname", "a_bday", "a_idcard", "a_civil", "a_sex", "a_age", "a_currentadd", "a_currentvill", "a_currentbrgy", "a_currentvill", "a_currentbrgy", "a_currentcity", "a_currentprov", "c_lastname", "c_firstname", "c_bday", "c_civil", "c_sex", "c_age", "c_currentadd", "c_currentvill", "c_currentbrgy", "c_currentcity", "c_currentprov", "d_narrative" ];

// Loop through the array and add event listeners to each element
inputIds.forEach(id => {
  const element = document.getElementById(id);

  // Add "click" event listener to element
  element.addEventListener("click", function() {
    // Remove "is-invalid" class and red border color
    element.classList.remove("is-invalid");
    element.style.borderColor = "";
  });

  // Add "blur" event listener to element
  element.addEventListener("blur", function() {
    // Add "is-invalid" class and red border color if element is empty or invalid
    if (element.value === "" || (element.type === "number" && isNaN(element.value)) || (element.type === "date" && isNaN(Date.parse(element.value))) || (element.type === "select-one" && element.selectedIndex === 0)) {
      element.classList.add("is-invalid");
      element.style.borderColor = "red";
    }
  });
});



//CHECKING ITEM B
$(document).ready(function(){
    $('#proceedC').on("click", function(){
        document.getElementById("checkerA").value = "2";
    });
});

//CHECKING ITEM C
$(document).ready(function(){
    $('#proceedD').on("click", function(){
        //ITEM C
        var c_lastname = $('#c_lastname').val();
        var c_firstname = $('#c_firstname').val();
        var c_middlename = $('#c_middlename').val();
        var c_nickname = $('#c_nickname').val();
        var c_citizenship = $('#c_citizenship').val();
        var c_sex = $('#c_sex').val();
        var c_civil = $('#c_civil').val();
        var c_bday = $('#c_bday').val();
        var c_age = $('#c_age').val();
        var c_pob = $('#c_pob').val();
        var c_mobilephone = $('#c_mobilephone').val();
        var c_currentadd = $('#c_currentadd').val();
        var c_currentvill = $('#c_currentvill').val();
        var c_currentbrgy = $('#c_currentbrgy').val();
        var c_currentcity = $('#c_currentcity').val();
        var c_currentprov = $('#c_currentprov').val();
        var c_otheradd = $('#c_otheradd').val();
        var c_othervill = $('#c_othervill').val();
        var c_otherbrgy = $('#c_otherbrgy').val();
        var c_othercity = $('#c_othercity').val();
        var c_otherprov = $('#c_otherprov').val();
        var c_occupation = $('#c_occupation').val();
        var c_workadd = $('#c_workadd').val();
        var a_lastname = $('#a_lastname').val();
        var a_firstname = $('#a_firstname').val();
        var a_middlename = $('#a_middlename').val();
        var type_incident = $('#type_incident').val();
        var place_incident = $('#place_incident').val();
        var brgy_incident = $('#brgy_incident').val();

        var itemC = ["c_lastname","c_firstname","c_sex","c_civil","c_bday","c_age","c_currentadd","c_currentvill","c_currentbrgy","c_currentcity","c_currentprov"]
        for(var k=0; k<itemC.length;k++){
            document.getElementById(itemC[k]).className = "form-control";
        }

        if(c_lastname !='' && c_firstname !='' && c_sex !='' && c_civil !='' && c_bday !='' && c_age !='' && c_currentadd !='' && c_currentvill !='' && 
            c_currentbrgy !='' && c_currentcity !='' && c_currentprov !='' && for_civil2 == 1 !='' && for_sex2 == 1 !=''){
            document.getElementById('d_reporting').value = a_lastname+", "+a_firstname+" "+a_middlename;
            if(brgy_incident != null){
                $.ajax({
                    url:'blotter/getBrgy',
                    type: 'post',
                    data: {
                        brgy_incident : brgy_incident
                    },
                    cache: false,
                    success: function(server_reply) {
                        document.getElementById("d_pincident").value = place_incident +", "+ server_reply;
                    },
                    error: function(xhr, status, error) {
                        alert('Cannot do action: '+console.error(xhr));
                    }
                });
                $.ajax({
                    url:'blotter/getTypeOfIncident',
                    type: 'post',
                    data: {
                        type_incident : type_incident
                    },
                    cache: false,
                    success: function(server_reply) {
                        document.getElementById("d_type").value = server_reply;
                    },
                    error: function(xhr, status, error) {
                        alert('Cannot do action: '+console.error(xhr));
                    }
                });
            }
            document.getElementById("checkerA").value = "3";
        }
        else{
            document.getElementById("checkerA").value = "0";
            for(var j=0; j<itemC.length;j++){
                var b = document.getElementById(itemC[j]).value;
                if (b == ''){
                    var a = document.getElementById(itemC[j]);
                    a.classList.add("is-invalid");
                }
            }
        }
    });
});

//ADDING BLOTTER
$(document).ready(function(){
    $('#saveblotter').on("click", function(){

      console.log("uwu");
      	//ITEM A
      	var irfid = $('#irfid').val();
        var type_incident = $('#type_incident').val();
        var copyFor = $('#copyFor').val();
        var dt_reported = $('#dt_reported').val();
        var dt_incident = $('#dt_incident').val();
        var place_incident = $('#place_incident').val();
        var brgy_incident = $('#brgy_incident').val();
        var a_lastname = $('#a_lastname').val();
        var a_firstname = $('#a_firstname').val();
        var a_middlename = $('#a_middlename').val();
        var a_nickname = $('#a_nickname').val();
        var a_citizenship = $('#a_citizenship').val();
        var a_sex = $('#a_sex').val();
        var a_civil = $('#a_civil').val();
        var a_bday = $('#a_bday').val();
        var a_age = $('#a_age').val();
        var a_pob = $('#a_pob').val();
        var a_mobilephone = $('#a_mobilephone').val();
        var a_currentadd = $('#a_currentadd').val();
        var a_currentvill = $('#a_currentvill').val();
        var a_currentbrgy = $('#a_currentbrgy').val();
        var a_currentcity = $('#a_currentcity').val();
        var a_currentprov = $('#a_currentprov').val();
        var a_otheradd = $('#a_otheradd').val();
        var a_othervill = $('#a_othervill').val();
        var a_otherbrgy = $('#a_otherbrgy').val();
        var a_othercity = $('#a_othercity').val();
        var a_otherprov = $('#a_otherprov').val();
        var a_occupation = $('#a_occupation').val();
        var a_idcard = $('#a_idcard').val();

        //ITEM B
        var b_lastname = $('#b_lastname').val();
        var b_firstname = $('#b_firstname').val();
        var b_middlename = $('#b_middlename').val();
        var b_nickname = $('#b_nickname').val();
        var b_citizenship = $('#b_citizenship').val();
        var b_sex = $('#b_sex').val();
        var b_civil = $('#b_civil').val();
        var b_bday = $('#b_bday').val();
        var b_age = $('#b_age').val();
        var b_pob = $('#b_pob').val();
        var b_mobilephone = $('#b_mobilephone').val();
        var b_currentadd = $('#b_currentadd').val();
        var b_currentvill = $('#b_currentvill').val();
        var b_currentbrgy = $('#b_currentbrgy').val();
        var b_currentcity = $('#b_currentcity').val();
        var b_currentprov = $('#b_currentprov').val();
        var b_otheradd = $('#b_otheradd').val();
        var b_othervill = $('#b_othervill').val();
        var b_otherbrgy = $('#b_otherbrgy').val();
        var b_othercity = $('#b_othercity').val();
        var b_otherprov = $('#b_otherprov').val();
        var b_occupation = $('#b_occupation').val();
        var b_relation = $('#b_relation').val();
        var b_influence = $('#b_influence').val();

        var no = document.getElementById("no");
        var drugs = document.getElementById("drugs");
        var liquor = document.getElementById("liquor");
        var others = document.getElementById("others");

        var selectedInfluence = [];

        if (no.checked) {
          selectedInfluence.push(no.value);
        }
        if (drugs.checked) {
          selectedInfluence.push(drugs.value);
        }
        if (liquor.checked) {
          selectedInfluence.push(liquor.value);
        }
        if (others.checked) {
          selectedInfluence.push(b_influence);
        }

        var influence = selectedInfluence.join(", ");
        console.log(influence);

        //ITEM C
        var c_lastname = $('#c_lastname').val();
        var c_firstname = $('#c_firstname').val();
        var c_middlename = $('#c_middlename').val();
        var c_nickname = $('#c_nickname').val();
        var c_citizenship = $('#c_citizenship').val();
        var c_sex = $('#c_sex').val();
        var c_civil = $('#c_civil').val();
        var c_bday = $('#c_bday').val();
        var c_age = $('#c_age').val();
        var c_pob = $('#c_pob').val();
        var c_mobilephone = $('#c_mobilephone').val();
        var c_currentadd = $('#c_currentadd').val();
        var c_currentvill = $('#c_currentvill').val();
        var c_currentbrgy = $('#c_currentbrgy').val();
        var c_currentcity = $('#c_currentcity').val();
        var c_currentprov = $('#c_currentprov').val();
        var c_otheradd = $('#c_otheradd').val();
        var c_othervill = $('#c_othervill').val();
        var c_otherbrgy = $('#c_otherbrgy').val();
        var c_othercity = $('#c_othercity').val();
        var c_otherprov = $('#c_otherprov').val();
        var c_occupation = $('#c_occupation').val();
        var c_workadd = $('#c_workadd').val();

        //ITEM D
        var d_narrative = $('#d_narrative').val();
        var d_policeuser = $('#d_policeuser').val();

        var form_data = new FormData();
        form_data.append("irfid", document.getElementById('irfid').value);
        form_data.append("type_incident", document.getElementById('type_incident').value);
        form_data.append("copyFor", document.getElementById('copyFor').value);
        form_data.append("dt_reported", document.getElementById('dt_reported').value);
        form_data.append("dt_incident", document.getElementById('dt_incident').value);
        form_data.append("place_incident", document.getElementById('place_incident').value);
        form_data.append("brgy_incident", document.getElementById('brgy_incident').value);
        form_data.append("a_lastname", document.getElementById('a_lastname').value);
        form_data.append("a_firstname", document.getElementById('a_firstname').value);
        form_data.append("a_middlename", document.getElementById('a_middlename')?.value || '');
        form_data.append("a_nickname", document.getElementById('a_nickname')?.value || '');
        form_data.append("a_citizenship", document.getElementById('a_citizenship')?.value || '');
        form_data.append("a_sex", document.getElementById('a_sex').value);
        form_data.append("a_civil", document.getElementById('a_civil').value);
        form_data.append("a_bday", document.getElementById('a_bday').value);
        form_data.append("a_age", document.getElementById('a_age').value);
        form_data.append("a_pob", document.getElementById('a_pob')?.value || '');
        form_data.append("a_mobilephone", document.getElementById('a_mobilephone')?.value || '');
        form_data.append("a_currentadd", document.getElementById('a_currentadd').value);
        form_data.append("a_currentvill", document.getElementById('a_currentvill').value);
        form_data.append("a_currentbrgy", document.getElementById('a_currentbrgy').value);
        form_data.append("a_currentcity", document.getElementById('a_currentcity').value);
        form_data.append("a_currentprov", document.getElementById('a_currentprov').value);
        form_data.append("a_otheradd", document.getElementById('a_otheradd')?.value || '');
        form_data.append("a_othervill", document.getElementById('a_othervill')?.value || '');
        form_data.append("a_otherbrgy", document.getElementById('a_otherbrgy')?.value || '');
        form_data.append("a_othercity", document.getElementById('a_othercity')?.value || '');
        form_data.append("a_otherprov", document.getElementById('a_otherprov')?.value || '');
        form_data.append("a_occupation", document.getElementById('a_occupation')?.value || '');
        form_data.append("a_idcard", document.getElementById('a_idcard').value);
        form_data.append("b_lastname", document.getElementById('b_lastname')?.value || '');
        form_data.append("b_firstname", document.getElementById('b_firstname')?.value || '');
        form_data.append("b_middlename", document.getElementById('b_middlename')?.value || '');
        form_data.append("b_nickname", document.getElementById('b_nickname')?.value || '');
        form_data.append("b_citizenship", document.getElementById('b_citizenship')?.value || '');
        form_data.append("b_sex", document.getElementById('b_sex')?.value || '');
        form_data.append("b_civil", document.getElementById('b_civil')?.value || '');
        form_data.append("b_bday", document.getElementById('b_bday')?.value || '');
        form_data.append("b_age", document.getElementById('b_age')?.value || '');
        form_data.append("b_pob", document.getElementById('b_pob')?.value || '');
        form_data.append("b_mobilephone", document.getElementById('b_mobilephone')?.value || '');
        form_data.append("b_currentadd", document.getElementById('b_currentadd')?.value || '');
        form_data.append("b_currentvill", document.getElementById('b_currentvill')?.value || '');
        form_data.append("b_currentbrgy", document.getElementById('b_currentbrgy')?.value || '');
        form_data.append("b_currentcity", document.getElementById('b_currentcity')?.value || '');
        form_data.append("b_currentprov", document.getElementById('b_currentprov')?.value || '');
        form_data.append("b_otheradd", document.getElementById('b_otheradd')?.value || '');
        form_data.append("b_othervill", document.getElementById('b_othervill')?.value || '');
        form_data.append("b_otherbrgy", document.getElementById('b_otherbrgy')?.value || '');
        form_data.append("b_othercity", document.getElementById('b_othercity')?.value || '');
        form_data.append("b_otherprov", document.getElementById('b_otherprov')?.value || '');
        form_data.append("b_occupation", document.getElementById('b_occupation')?.value || '');
        form_data.append("b_relation", document.getElementById('b_relation')?.value || '');
        form_data.append("b_influence", influence);
        form_data.append("c_lastname", document.getElementById('c_lastname').value);
        form_data.append("c_firstname", document.getElementById('c_firstname').value);
        form_data.append("c_middlename", document.getElementById('c_middlename')?.value || '');
        form_data.append("c_nickname", document.getElementById('c_nickname')?.value || '');
        form_data.append("c_citizenship", document.getElementById('c_citizenship')?.value || '');
        form_data.append("c_sex", document.getElementById('c_sex').value);
        form_data.append("c_civil", document.getElementById('c_civil').value);
        form_data.append("c_bday", document.getElementById('c_bday').value);
        form_data.append("c_age", document.getElementById('c_age').value);
        form_data.append("c_pob", document.getElementById('c_pob')?.value || '');
        form_data.append("c_mobilephone", document.getElementById('c_mobilephone')?.value || '');
        form_data.append("c_currentadd", document.getElementById('c_currentadd').value);
        form_data.append("c_currentvill", document.getElementById('c_currentvill').value);
        form_data.append("c_currentbrgy", document.getElementById('c_currentbrgy').value);
        form_data.append("c_currentcity", document.getElementById('c_currentcity').value);
        form_data.append("c_currentprov", document.getElementById('c_currentprov').value);
        form_data.append("c_otheradd", document.getElementById('c_otheradd')?.value || '');
        form_data.append("c_othervill", document.getElementById('c_othervill')?.value || '');
        form_data.append("c_otherbrgy", document.getElementById('c_otherbrgy')?.value || '');
        form_data.append("c_othercity", document.getElementById('c_othercity')?.value || '');
        form_data.append("c_otherprov", document.getElementById('c_otherprov')?.value || '');
        form_data.append("c_occupation", document.getElementById('c_occupation')?.value || '');
        form_data.append("c_workadd", document.getElementById('c_workadd')?.value || '');
        // form_data.append("d_type", document.getElementById('d_type').value);
        // form_data.append("d_pincident", document.getElementById('place_incident').value);
        form_data.append("d_narrative", document.getElementById('d_narrative').value);
        // form_data.append("d_reporting", document.getElementById('d_reporting').value);
        // form_data.append("d_police", document.getElementById('d_police').value);
        // form_data.append("d_rank", document.getElementById('d_rank').value);
        form_data.append("d_policeuser", document.getElementById('d_policeuser').value);
        // form_data.append("d_entrynum", document.getElementById('d_entrynum').value);

        var itemD = ["d_narrative","d_policeuser"];
        for(var k=0; k<itemD.length;k++){
            document.getElementById(itemD[k]).className = "form-control text-center";
        }

        if(d_narrative !='' && d_policeuser != ''){
            $.ajax({
                url:'blotter/saveBlotter',
                dataType: 'text',
                type: 'post',
                data: form_data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if(data=="success"){
                        alert("Blotter added successfully");
                    }
                    else{
                        console.log(data);
                    }
                },
                error: function(xhr, status, error) {
                    alert('Cannot do action: '+console.error(xhr));
                }
            });
        }
        else{
            document.getElementById("checkerA").value = "0";
            for(var j=0; j<itemD.length;j++){
                var b = document.getElementById(itemD[j]).value;
                if (b == ''){
                    var a = document.getElementById(itemD[j]);
                    a.classList.add("is-invalid");
                }
            }
        }
    });
});