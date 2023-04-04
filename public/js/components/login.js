$(document).ready(function(){
  $('#login').on("click", function(){
    var username = $('#username').val();
    var password = $('#password').val();
      document.getElementById("username").className = "form-control form-control-lg";
      document.getElementById("password").className = "form-control form-control-lg";


    if(username == '' && password == ''){
      document.getElementById("username").className = "form-control form-control-lg is-invalid";
      document.getElementById("password").className = "form-control form-control-lg is-invalid";
    }
    else if(username==''){
      document.getElementById("username").className = "form-control form-control-lg is-invalid";
    }
    else if(password==''){
      document.getElementById("password").className = "form-control form-control-lg is-invalid";
    }
    else{ 
      $.ajax({
        url:'login/run',
        type: 'post',
        data: {
            username : username,
            password : password
        },
         cache: false,
         success: function(server_reply) {
          console.log(server_reply);
          if(server_reply == 'VALID'){
            window.location = "biometric";
          }
          else if(server_reply == 'NOT FOUND'){
            Swal.fire(
              'Not Found!',
              'The username you entered isn’t connected to an account.',
              'error'
            )
          }
          else if(server_reply == '1'){
            Swal.fire(
              'Ooops!',
              'The password you’ve entered is incorrect. Attempts remaining: '+server_reply,
              'error'
            )
          }
          else if(server_reply == '2'){
            Swal.fire(
              'Ooops!',
              'The password you’ve entered is incorrect. Attempts remaining: '+server_reply,
              'error'
            )
          }
          else if(server_reply == '3'){
            Swal.fire(
              'Ooops!',
              'The password you’ve entered is incorrect. Attempts remaining: '+server_reply,
              'error'
            )
          }
          else if(server_reply == '4'){
            Swal.fire(
              'Ooops!',
              'The password you’ve entered is incorrect. Attempts remaining: '+server_reply,
              'error'
            )
          }
          else if(server_reply == 'INACTIVE'){
            Swal.fire(
              'Ooops!',
              'Your account has been disabled.',
              'error'
            ).then((value)=>{
              if (value){
                window.location='login';
              }
            });
          }
          else if(server_reply == 'LOCKED'){
            Swal.fire(
              'Your account has been locked!',
              'Kindly verify your account using OTP by clicking the Forget Password.',
              'error'
            )
          }
          else{
            Swal.fire(
              'Error!',
              'There seems to be a problem.',
              'error'
            ).then((value)=>{
              if (value){
                window.location='login';
              }
            });
          }
         },
         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    }

  });
});

$(document).ready(function(){
  $('#password').keypress(function(){
    var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        var link = document.getElementById('login');
        link.click();
      }
  });

  $('#username').keypress(function(){
    var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        var link = document.getElementById('login');
        link.click();
      }
  });
});