//IS-INVALID FIELDS - DYNAMIC
// Define an array of input field IDs
const inputIds = ["firstname", "lastname", "userstation", "user_name", "bday", "email", "contact", "sex", "rank"];

// Loop through the array and add event listeners to each element
inputIds.forEach(id => {
  const element = document.getElementById(id);

  // Add "click" event listener to element
  element.addEventListener("click", function() {
    // Remove "is-invalid" class and red border borderColor
    element.classList.remove("is-invalid");
    element.style.borderColor = "";
  });

  // Add "blur" event listener to element
  element.addEventListener("blur", function() {
    // Add "is-invalid" class and red border color if element is empty or invalid
    if (element.value === "" || (element.type === "date" && isNaN(Date.parse(element.value))) || (element.type === "select-one" && element.selectedIndex === 0)) {
      element.classList.add("is-invalid");
      element.style.borderColor = "red";
    }
  });
});

//MOBILE NUMBER
const fields = [
  {
    id: 'contact',
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


//ADDING USER
$(document).ready(function(){
  $('#proceed').on("click", function(){
    var admin_id = $('#admin_id').val();
    var firstname = $('#firstname').val();
    var middlename = $('#middlename').val();
    var lastname = $('#lastname').val();
    var userstation = $('#userstation').val();
    var user_name = $('#user_name').val();
    var bday = $('#bday').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    var sex = $('#sex').val();
    var rank = $('#rank').val();
    var husername = $('#husername').val();

      document.getElementById("firstname").className = "form-control";
      document.getElementById("lastname").className = "form-control";
      document.getElementById("userstation").className = "form-control";
      document.getElementById("user_name").className = "form-control";
      document.getElementById("bday").className = "form-control";
      document.getElementById("email").className = "form-control";
      document.getElementById("contact").className = "form-control";
      document.getElementById("sex").className = "form-control";
      document.getElementById("rank").className = "form-control";

    if(husername == 0 && firstname != '' && lastname != '' && userstation !=null && user_name !='' && bday !='' && email !='' && contact !='' && sex !=null && rank !=null){
      $.ajax({
        url:'user_account/addUser',
        type: 'post',
        data: {
            firstname : firstname,
            middlename : middlename,
            lastname : lastname,
            userstation : userstation,
            user_name : user_name,
            bday : bday,
            email : email,
            contact : contact,
            sex : sex,
            rank : rank
        },
         cache: false,
         success: function(server_reply) {
          console.log(server_reply);
          if(server_reply == "success"){
            window.location = "enrollment";
          }
          else{
            Swal.fire(
              'Error!',
              'There seems to be a problem.',
              'error'
            )
          }
          
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    }
    else{
      if(firstname==''){
        document.getElementById("firstname").className = "form-control is-invalid";
      }
      if(lastname==''){
        document.getElementById("lastname").className = "form-control is-invalid";
      }
      if(userstation==null){
        document.getElementById("userstation").className = "form-control is-invalid";
      }
      if(user_name ==''){
        document.getElementById("user_name").className = "form-control is-invalid";
      }
      if(bday ==''){
        document.getElementById("bday").className = "form-control is-invalid";
      }
      if(email ==''){
        document.getElementById("email").className = "form-control is-invalid";
      }
      if(contact ==''){
        document.getElementById("contact").className = "form-control is-invalid";
      }
      if(sex ==null){
        document.getElementById("sex").className = "form-control is-invalid";
      }
      if(rank ==null){
        document.getElementById("rank").className = "form-control is-invalid";
      }
    }

  });
});

//CHECKING DUPLICATE USERNAME
$(document).ready(function(){
  $('#user_name').on("keyup", function(){
    var user_name = $('#user_name').val();
      $.ajax({
        url:'user_account/checkUsername',
        type: 'post',
        data: {
            user_name : user_name
        },
         cache: false,
         success: function(server_reply) {
          if(server_reply=="LIKE"){
            document.getElementById("user_name").className = "form-control is-invalid";
            document.getElementById("warn").textContent = "Username is already taken";
            document.getElementById("un").textContent = "";
            document.getElementById("star").textContent = "";
            document.getElementById("husername").value = "1";
          }
          else{
            document.getElementById("user_name").className = "form-control";
            document.getElementById("warn").textContent = "";
            document.getElementById("un").textContent = " Username";
            document.getElementById("star").textContent = " *";
            document.getElementById("husername").value = "0";
          }
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });

  });
});


//CHECKING DUPLICATE EMAIL
$(document).ready(function(){
  $('#email').on("keyup", function(){
    var email = $('#email').val();
      $.ajax({
        url:'user_account/checkEmail',
        type: 'post',
        data: {
            email : email
        },
         cache: false,
         success: function(server_reply) {
          if(server_reply=="LIKE"){
            document.getElementById("email").className = "form-control is-invalid";
            document.getElementById("warning").textContent = "Email Address is already taken";
            document.getElementById("unEmail").textContent = "";
            document.getElementById("start").textContent = "";
            document.getElementById("hemail").value = "1";
          }
          else{
            document.getElementById("email").className = "form-control";
            document.getElementById("warning").textContent = "";
            document.getElementById("unEmail").textContent = "Email Address";
            document.getElementById("start").textContent = " *";
            document.getElementById("hemail").value = "0";
          }
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });

  });
});