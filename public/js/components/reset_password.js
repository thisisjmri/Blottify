$(document).ready(function(){

const resend = document.getElementById("resend");
const timer = document.getElementById("timer");

let remainingTime = localStorage.getItem("remainingTime");
let endTime = localStorage.getItem("endTime");
if (remainingTime && endTime) {
  let timeDiff = endTime - Date.now();
  if (timeDiff > 0) {
    let count = Math.floor(timeDiff / 1000);
    startTimer(count);
    resend.disabled = true;
  } else {
    localStorage.removeItem("remainingTime");
    localStorage.removeItem("endTime");
  }
}

resend.addEventListener("click", function() {
  if (!resend.disabled) {
    // disable the button
    resend.disabled = true;

    // set a timer to re-enable the button after 5 seconds (5000 milliseconds)
    let count = 180;
    let endTime = Date.now() + count * 1000;
    localStorage.setItem("endTime", endTime);
    startTimer(count);
  } else {
    // show remaining time
    startTimer(remainingTime);
  }
});

function startTimer(count) {
  let interval = setInterval(function() {
    count--;
    if (count <= 0) {
      clearInterval(interval);
      resend.disabled = false;
      localStorage.removeItem("remainingTime");
      localStorage.removeItem("endTime");
      timer.innerHTML = "";
    } else {
      localStorage.setItem("remainingTime", count);
      timer.innerHTML = Math.floor(count);
    }
  }, 1000);
}






  $('#resend').on("click", function(){
    $.ajax({
      url:'reset_password/emailOTP_second_attempt',
      type: 'post',
       cache: false,
       success: function(server_reply) {
        console.log(server_reply);
       },
       error: function(xhr, status, error) {
       alert('Cannot do action: '+console.error(xhr));
       }
    });

  });
});

$(document).ready(function(){
  $('#confirm').on("click", function(){
    var inpotp = $('#inpotp').val();
      document.getElementById("inpotp").className = "form-control form-control-lg";


    if(inpotp==''){
      document.getElementById("inpotp").className = "form-control form-control-lg is-invalid";
    }
    else{ //(stname != '' && staddress != '')
      $.ajax({
        url:'reset_password/checkOTP',
        type: 'post',
        data: {
            data : inpotp
        },
         success: function(response) {
          
          if (response==1) {
            console.log(response);
            window.location="change_password";
          }
          else {
              console.log(response);
            Swal.fire({
                title: 'Oops!',
                text: 'Wrong OTP.',
                icon: 'warning',
            })
          }
        },

         error: function(xhr, status, error) {
         alert('Cannot do action: '+console.error(xhr));
         }
      });
    }

  });
});