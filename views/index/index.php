<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL;?>assets/img/apple-icon.png">
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
</head>
<body class="sign-in-illustration">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
  overflow: hidden;
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
                <h4 class="font-weight-bolder">Sign In</h4>
                <p style="font-size: 15px;" class="mb-0">Enter your username and password to sign in</p>
              </div>
              <div class="card-body" style="font-family: 'Quicksand'">
                <form role="form">
                  <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="Username" aria-label="Email" aria-describedby="email-addon" id="username" name="username">
                  </div>
                  <div class="mb-3">
                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe" onclick="myFunction()">
                    <label class="form-check-label" for="rememberMe">Show Password</label>
                  </div>
                  <div class="text-center">
                    <!-- <a href="<?php echo URL;?>biometric"> -->
                    <button type="button" id="login" name="login" class="btn btn-lg bg-gradient-warning btn-lg w-100 mt-4 mb-0">Sign in</button></a>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  <a href="<?php echo URL;?>forget_password" class="text-warning text-gradient font-weight-bold">Forget Password</a>
                </p>
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
  <!-- Swal plugin -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?php echo URL;?>public/js/plugins/parallax.min.js"></script>
 

  <!-- jQuery -->
  <script src="<?php echo URL; ?>/public/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo URL;?>public/js/components/login.js"></script>
   <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>public/js/soft-design-system.min.js" type="text/javascript"></script>
  <script>
    function myFunction() {
      var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
    }
  </script>
</body>
</html>