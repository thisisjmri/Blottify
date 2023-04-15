//ADDING STATION
$(document).ready(function(){
  $('#stsave').on("click", function(){
    var stname = $('#stname').val();
    var staddress = $('#staddress').val();
    var sttype = $('#sttype').val();
    var stanumber = $('#stanumber').val();
      document.getElementById("stname").className = "form-control form-control-lg";
      document.getElementById("staddress").className = "form-control form-control-lg";
      document.getElementById("sttype").className = "form-control form-control-lg";
      document.getElementById("stanumber").className = "form-control form-control-lg";


    if(stname == '' && staddress == '' && sttype ==''){
      document.getElementById("stname").className = "form-control form-control-lg is-invalid";
      document.getElementById("staddress").className = "form-control form-control-lg is-invalid";
      document.getElementById("sttype").className = "form-control form-control-lg is-invalid";
      document.getElementById("stanumber").className = "form-control form-control-lg is-invalid";
    }
    else if(stname==''){
      document.getElementById("stname").className = "form-control form-control-lg is-invalid";
    }
    else if(staddress==''){
      document.getElementById("staddress").className = "form-control form-control-lg is-invalid";
    }
    else if(stanumber==''){
      document.getElementById("stanumber").className = "form-control form-control-lg is-invalid";
    }
    else{ //(stname != '' && staddress != '')
      $.ajax({
        url:'user_account/addStation',
        type: 'post',
        data: {
            stname : stname,
            staddress : staddress,
            sttype : sttype,
            stanumber : stanumber
        },
         cache: false,
         success: function(server_reply) {
          alert(server_reply);
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    }

  });
});

//ADDING USER
$(document).ready(function(){
  $('#proceed').on("click", function(){
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

    if(husername == 0 && firstname != '' && lastname != '' && userstation !=null && user_name !='' && bday !='' && email !='' && contact !='' && sex !=null && rank !=''){
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
          if(server_reply=="success"){
            // window.location = "enrollment";
          }
          else{
            Swal.fire(
              'Error!',
              'Email is already taken.',
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
      if(rank ==''){
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