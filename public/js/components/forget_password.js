$(document).ready(function(){
  $('#proceed').on("click", function(){
    var eemail = $('#eemail').val();
      document.getElementById("eemail").className = "form-control form-control-lg";


    if(eemail==''){
      document.getElementById("eemail").className = "form-control form-control-lg is-invalid";
    }
    else{ //(stname != '' && staddress != '')
      $.ajax({
        url:'forget_password/checkEmail',
        type: 'post',
        data: {
            eemail : eemail
        },
        success: function(response) {
            if (response=="0") {
              console.log(response);
              Swal.fire({
                icon: 'error',
                title: 'Oops!',
                text: 'Email does not exist.',
              })
            }
            else {
              console.log(response);
              $(document).ready(function(){
              $.ajax({
                url:'forget_password/emailOTP_first_attempt',
                type: 'post',
                 cache: false,
                 success: function(server_reply) {
                     console.log(server_reply);
                  window.location="reset_password";
                 },
                 error: function(xhr, status, error) {
                 alert('Cannot do action: '+console.error(xhr));
                 }
              });
                
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
