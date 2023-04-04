<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com


 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. 
-->

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL;?>public/img/police_tagum.png">
  <link rel="icon" type="image/png" href="<?php echo URL;?>public/img/police_tagum.png">
  <title>
    Blottify
  </title>
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <!-- Nucleo Icons -->
  <link href="<?php echo URL;?>public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo URL;?>public/css/soft-design-system.css?v=1.0.9" rel="stylesheet" />
  <link href="<?php echo URL;?>public/css/custom.css" rel="stylesheet" />
</head>
<body class="sign-in-illustration">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
}
</style>

  <section>
    <div class="col-md-12 col-lg-4 my-3 mx-4 position-absolute">
    <div class="navbar-header">
    </button>
    <h4 class="font-weight-bolder text-bold">Blottify</h4>
    </div>
    </div>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Create new password</h4>
                <!-- <p style="font-size: 15px;" class="mb-0">Enter the code we sent to your email address.</p> -->
              </div>
              <div class="card-body" style="font-family: 'Quicksand'">
                <form role="form">
                  <div class="mb-3">
                    <input type="password" id="npass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-lg" placeholder="New password" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div id="message">
                    <h6>Password must contain the following:</h6>
                    <p id="letter" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>number</b></p>
                    <p id="length" class="invalid px-4 pt-1" style="font-size: 12px;">Minimum <b>8 characters</b></p>
                  </div>
                  <div class="mb-3">
                    <input type="password" id="cnpass" class="form-control form-control-lg" placeholder="Confirm new password" aria-label="Email" aria-describedby="email-addon" required>
                  </div>
                  <div class="text-center">
                    <button type="button" id="changee" class="btn btn-lg bg-gradient-warning btn-lg w-100 mt-4 mb-0">Reset Password</button>
                  </div>

                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  <a>Already have an account</a>
                  <a href="<?php echo URL;?>index" class="text-warning text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-warning h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="<?php echo URL;?>public/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-50 mb-2 position-relative z-index-2" src="<?php echo URL;?>public/img/illustrations/books-pile.png">
              </div>
              <h3 class="mt-4 text-white font-weight-bolder">One Data. One Tagum</h3>
              <p class="text-white">Neque porro quisquam est qui dolorem <br> ipsum quia dolor sit amet, consectetur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- jQuery -->
  <script src="<?php echo URL;?>public/plugins/jquery/jquery.min.js"></script>
  <!-- Swal plugin -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?php echo URL;?>public/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?php echo URL;?>public/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>
  <!-- Components -->
  <script src="<?php echo URL;?>public/js/components/change_password.js"></script>
  <script>
          function myFunction() {
          var x = document.getElementById("loginpass");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
  </script>

<script>
var myInput = document.getElementById("npass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
</body>
</html>