<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL;?>public/img/police_tagum.png">
  <link rel="icon" type="image/png" href="<?php echo URL;?>public/img/police_tagum.png">
  <title>
    Dashboard
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
  <link id="pagestyle" href="<?php echo URL;?>public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;

}
.multi-step-form {
  position: relative;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}

.form-step {
  display: none;
}

.form-step.active {
  display: block;
}

.form-step h2 {
  margin-top: 0;
}

.form-step p {
  margin-bottom: 20px;
}

.next-step, .prev-step {
  border: none;
  background-color: #cf5e29;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  margin-right: 10px;
}

.next-step:hover, .prev-step:hover {
  background-color: #d48763;
}

.submit {
  border: none;
  background-color: #cf5e29;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.submit:hover {
  background-color: #d48763;
}

.progress-indicator {
  position: relative;
  margin-top: 20px;
  height: 10px;
  background-color: #f1f1f1;
  border-radius: 5px;
}

.progress-bar {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
   background-image: linear-gradient(310deg, #f53939 0%, #fbcf33 100%);
  border-radius: 5px;
}
.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}

</style>
<body class="g-sidenav-show bg-gray-100">
  <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 h-80 bg-white" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="<?php echo URL;?>public/img/police_tagum.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> One Data. One Tagum </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>views/dashboard_user/dashboard_user.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>views/blotter/blotter.html">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Blotter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>mapss">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="color-background" d="M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Maps</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo URL;?>libraries">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>box-3d-50</title>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Library</span>
          </a>
        </li>
  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
  <!-- NARIGATION BAR -->
      <div class="page-header min-height-150 border-radius-xl mt-4 mx-4" style="background-image: url('public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div>

      <nav class="navbar navbar-main navbar-expand-lg shadow-blur mx-5 mt-n5  px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">

      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Blottify</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Blotter</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn  bg-gradient-warning btn-sm mb-0 me-3" target="_blank" href="blotter">Add Blotter</a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="../">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../../public/img/bruce-mars.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Juan M. Gonzales</span> 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-user me-1"></i>
                          Regional Director, PRO 11
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                  <a class="dropdown-item border-radius-md text-end" href="javascript:;">                   
                    <div class="d-flex justify-content-end">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <i class="fa fa-sign-out me-1"></i>
                      <span class="font-weight-bold">Logout</span>
                    </h6>
                  </a>
                </div>
              </ul>
            </li>
          </ul>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4 z-index-sticky position-absolute
z-index-5" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  

<div class="multi-step-form card my-5 mx-5" >
    <div class="justify-content-center text-center py-2 mt-3"><p style="font-family: 'Open Sans'; font-size: 25px;" class="text-bold">INCIDENT RECORD FORM</p></div>
   <div class="progress-indicator">
    <div class="progress-bar"></div>
  </div>
  
  <div class="form-step active" id="step-1">
        <div class="justify-content-end text-end mt-3">
    <button class="btn next-step bg-gradient-warning btn-sm mb-0 m-0" id="proceedB">Proceed to Item B</button>
  </div>
        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">IRF Entry Number</label>
        <input id="irfid" type="text" disabled="" class="form-control" type="text">
        <input id="checkerA" type="text" type="text" hidden>
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Type of Incident<span style="color:red"> *</span></label>
        <select class="form-select" id="type_incident" aria-label="Default select example">
          <option value="" selected disabled></option>
          <?php 
            for($a=0; $a<count($this->getIncident); $a++){
              echo "<option value='".$this->getIncident[$a]['id']."'>".$this->getIncident[$a]['crime_name']."</option>";
            }
          ?>
        </select>
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Date & Time Reported<span style="color:red"> *</span></label>
         <input class="form-control" id="dt_reported" type="datetime-local" max="<?php date_default_timezone_set('Asia/Manila'); echo date("Y-m-d H:i:s");?>">
        </div>
        <div class="col-12 col-sm-3">
         <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Date & Time of Incident<span style="color:red"> *</span></label>
         <input class="form-control" id="dt_incident" type="datetime-local" max="<?php date_default_timezone_set('Asia/Manila'); echo date("Y-m-d H:i:s");?>">
        </div>
        
        </div>

        <!-- SECOND ROW -->

        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Copy for</label>
        <input id="copyFor" placeholder="Copy for" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-6">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Place of Incident<span style="color:red"> *</span></label>
        <input placeholder="Place of Incident" id="place_incident" class="form-control mb-2" type="text">

        </div>
        <div class="col-12 col-sm-3">
         <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay<span style="color:red"> *</span></label>
        <select class="form-select" id="brgy_incident">
          <option value="" selected disabled></option>
           <?php 
              for($a=0; $a<count($this->getBarangay); $a++){
                echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
              }
            ?>
         </select>
        </div>
          <div class="justify-content-center text-start py-0 m-0   mt-4"><p style="font-family: 'Open Sans'; font-size: 22px;" class="text-bold">Item A - Reporting Person</p></div>
        </div>

        <!-- THIRD ROW -->

        <div class="row mt-4">
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Family Name<span style="color:red"> *</span></label>
        <input placeholder="Family Name" id="a_lastname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">First Name<span style="color:red"> *</span></label>
        <input placeholder="First Name" id="a_firstname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Middle Name</label>
        <input placeholder="Middle Name" id="a_middlename" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FOURTH ROW -->
   

        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickame</label>
        <input placeholder="Nickame" id="a_nickame" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Date of Birth<span style="color:red"> *</span></label>
        <input class="form-control" id="a_bday" type="DATE" max="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Citizenship</label>
        <input placeholder="Citizenship" id="a_citizenship" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Occupation</label>
        <input placeholder="Occupation" id="a_occupation" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FIFTH ROW -->


        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input placeholder="Mobile Number" id="a_mobilephone" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">ID Card Presented<span style="color:red"> *</span></label>
         <input placeholder="Card Presented" id="a_idcard" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Civil Status<span style="color:red"> *</span></label>
        <select class="form-select" id="a_civil">
         <option value="" selected disabled></option>
         <option value="Single">Single</option>
         <option value="Married">Married</option>
         <option value="Divorced">Divorced</option>
         <option value="Separated">Separated</option>
         <option value="Widowed">Widowed</option>
       </select>
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Sex<span style="color:red"> *</span></label>
        <select class="form-select" id="a_sex">
          <option value="" selected disabled></option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
        </div>
        </div>

        <!-- 6th -->

        <div class="row mt-4">
        <div class="col-12 col-sm-1 ">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Age<span style="color:red"> *</span></label>
        <input style="width: 70px;" class="form-control" type="number" min="1" max="150" id="a_age" placeholder="18"></input>
        </div>
        <div class="col-12 col-sm-5">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Place of Birth</label>
         <input placeholder="Place of Birth" id="a_pob" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- 7th -->

         <div class="row mt-3">
          <div class="col-12 col-sm-8">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Current Address<span style="color:red"> *</span></label>
             <input class="form-control" id="a_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio<span style="color:red"> *</span></label>
             <input class="form-control" id="a_currentvill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-3">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay<span style="color:red"> *</span></label>
             <input class="form-control" id="a_currentbrgy" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City<span style="color:red"> *</span></label>
             <input class="form-control" id="a_currentcity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province<span style="color:red"> *</span></label>
             <input class="form-control" id="a_currentprov" type="text" placeholder="PROVINCE">
          </div>
       </div>


        <!-- 7th -->
        <div class="border mt-4 border-radius-md" style="border-style: solid black">
         <div class="row mt-2 p-3">
          <div class="col-12 col-sm-8">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Other Address</label>
             <input class="form-control" id="a_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
              <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio</label>
             <input class="form-control" id="a_othervill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-1 p-3 mb-2">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay</label>
             <input class="form-control" id="a_otherbrgy" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City</label>
             <input class="form-control" id="a_othercity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province</label>
             <input class="form-control" id="a_otherprov" type="text" placeholder="PROVINCE">
          </div>
       </div>
       </div>
    

    <div class="card-footer">    
    </div>

  </div>


  <div class="form-step" id="step-2">
        <div class="button-row d-flex justify-content-between mt-3 mb-3">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm mb-0 m-0 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button next-step btn bg-gradient-warning btn-sm mb-0 m-0 justify-content-end" id="proceedC">Proceed to Item C</button>
      </div>
      </div>
    <div class="justify-content-center text-start py-0 m-0 mt-4"><p style="font-family: 'Open Sans'; font-size: 22px;" class="text-bold">Item B - Suspect's Data</p></div>
     <!-- THIRD ROW -->

        <div class="row mt-4">
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Family Name</label>
        <input placeholder="Family Name" id="b_lastname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">First Name</label>
        <input placeholder="First Name" id="b_firstname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Middle Name</label>
        <input placeholder="Middle Name" id="b_middlename" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FOURTH ROW -->
   

        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickame</label>
        <input placeholder="Nickame" id="b_nickame" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Date of Birth</label>
        <input class="form-control" id="b_bday" type="DATE" max="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Citizenship</label>
        <input placeholder="Citizenship" id="b_citizenship" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Occupation</label>
        <input placeholder="Occupation" id="b_occupation" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FIFTH ROW -->


        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input placeholder="Mobile Number" id="b_mobilephone" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Relation to Victim</label>
         <input placeholder="Relation" id="b_relation" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Civil Status</label>
        <select class="form-select" id="b_civil">
          <option value="" selected disabled></option>
         <option value="Single">Single</option>
         <option value="Married">Married</option>
         <option value="Divorced">Divorced</option>
         <option value="Separated">Separated</option>
         <option value="Widowed">Widowed</option>
       </select>
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Sex</label>
        <option value="" selected disabled></option>
        <select class="form-select" id="b_sex">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
        </div>
        </div>

        <!-- 6th -->

        <div class="row mt-4">
        <div class="col-12 col-sm-1 ">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Age</label>
        <input style="width: 70px;" class="form-control" type="number" min="18" max="150" id="b_age" placeholder="18"></input>
        </div>
        <div class="col-12 col-sm-5">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Place of Birth</label>
         <input placeholder="Place of Birth" id="b_pob" type="text" class="form-control" type="text">
        </div>

         <div class="col-12 col-sm-6 mt-3 mt-sm-0">
           <label>UNDER THE INFLUENCE?</label><br>
            <label class="checkbox-inline">
              <input type="checkbox" id="no" value="NO">NO
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="drugs" value="Drugs">DRUGS
            </label>
             <label class="checkbox-inline">
              <input type="checkbox" id="liquor" value="Liquor">LIQUOR
            </label>
             <label class="checkbox-inline">
              <input type="checkbox" id="others" value="Others">OTHERS:
            </label>
            <br>
            <input class="form-control" placeholder="Others" id="b_influence" type="text">
        </div>
        </div>
                            

        <!-- 7th -->

         <div class="row mt-3">
          <div class="col-12 col-sm-8">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Current Address</label>
             <input class="form-control" id="b_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio</label>
             <input class="form-control" id="b_currentvill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-3">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay</label>
             <input class="form-control" id="b_currentbrgy" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City</label>
             <input class="form-control" id="b_currentcity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province</label>
             <input class="form-control" id="b_currentprov" type="text" placeholder="PROVINCE">
          </div>
       </div>


        <!-- 7th -->
        <div class="border mt-4 border-radius-md" style="border-style: solid black">
         <div class="row mt-2 p-3">
          <div class="col-12 col-sm-8">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Other Address</label>
             <input class="form-control" id="b_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
              <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio</label>
             <input class="form-control" id="b_othervill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-1 p-3 mb-2">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay</label>
             <input class="form-control" id="b_otherbrgy" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City</label>
             <input class="form-control" id="b_othercity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province</label>
             <input class="form-control" id="b_otherprov" type="text" placeholder="PROVINCE">
          </div>
       </div>
       </div>


    </div>

  <div class="form-step" id="step-3">
     <div class="button-row d-flex justify-content-between mt-3 mb-3">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm m-0 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button next-step btn bg-gradient-warning btn-sm m-0 justify-content-end" id="proceedD">Proceed to Item D</button>
      </div>
      </div>
    <div class="justify-content-center text-start py-0 m-0 mt-4"><p style="font-family: 'Open Sans'; font-size: 22px;" class="text-bold">Item C - Victim's Data</p></div>
     

        <!-- THIRD ROW -->

        <div class="row mt-4">
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Family Name<span style="color:red"> *</span></label>
        <input placeholder="Family Name" id="c_lastname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">First Name<span style="color:red"> *</span></label>
        <input placeholder="First Name" id="c_firstname" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-4">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Middle Name</label>
        <input placeholder="Middle Name" id="c_middlename" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FOURTH ROW -->
   

        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickame</label>
        <input placeholder="Nickame" id="c_nickame" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Date of Birth<span style="color:red"> *</span></label>
        <input class="form-control" id="c_bday" type="DATE" max="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Citizenship</label>
        <input placeholder="Citizenship" id="c_citizenship" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Occupation</label>
        <input placeholder="Occupation" id="c_occupation" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- FIFTH ROW -->


        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input placeholder="Mobile Number" id="c_mobilephone" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Work Address</label>
         <input placeholder="Work Address" id="c_workadd" type="text" class="form-control" type="text">
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Civil Status<span style="color:red"> *</span></label>
        <select class="form-select" id="c_civil">
          <option value="" selected disabled></option>
         <option value="Single">Single</option>
         <option value="Married">Married</option>
         <option value="Divorced">Divorced</option>
         <option value="Separated">Separated</option>
         <option value="Widowed">Widowed</option>
       </select>
        </div>
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Sex<span style="color:red"> *</span></label>
        <select class="form-select" id="c_sex">
          <option value="" selected disabled></option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
       </select>
        </div>
        </div>

        <!-- 6th -->

        <div class="row mt-4">
        <div class="col-12 col-sm-1 ">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Age<span style="color:red"> *</span></label>
        <input style="width: 70px;" class="form-control" type="number" min="18" max="150" id="c_age" placeholder="18"></input>
        </div>
        <div class="col-12 col-sm-5">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Place of Birth</label>
         <input placeholder="Place of Birth" id="c_pob" type="text" class="form-control" type="text">
        </div>
        </div>

        <!-- 7th -->

         <div class="row mt-3">
          <div class="col-12 col-sm-8">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Current Address<span style="color:red"> *</span></label>
             <input class="form-control" id="c_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio<span style="color:red"> *</span></label>
             <input class="form-control" id="c_currentvill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-3">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay<span style="color:red"> *</span></label>
             <input class="form-control" id="c_currentbrgy" type="text" placeholder="BRGY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City<span style="color:red"> *</span></label>
             <input class="form-control" id="c_currentcity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province<span style="color:red"> *</span></label>
             <input class="form-control" id="c_currentprov" type="text" placeholder="PROVINCE">
          </div>
       </div>


        <!-- 7th -->
        <div class="border mt-4 border-radius-md" style="border-style: solid black">
         <div class="row mt-2 p-3">
          <div class="col-12 col-sm-8">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Other Address</label>
             <input class="form-control" id="c_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
          </div>
          <div class="col-12 col-sm-4">
              <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Village/Sitio</label>
             <input class="form-control" id="c_othervill" type="text" placeholder="VILLAGE/SITIO">
          </div>
       </div>
       <!-- END -->

       <!-- 8th -->

       <div class="row mt-1 p-3 mb-2">
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Barangay</label>
             <input class="form-control" id="c_otherbrgy" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Town/City</label>
             <input class="form-control" id="c_othercity" type="text" placeholder="TOWN/CITY">
          </div>
          <div class="col-12 col-sm-4 mt-3 mt-sm-0">
             <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Province</label>
             <input class="form-control" id="c_otherprov" type="text" placeholder="PROVINCE">
          </div>
       </div>
       </div>
   
  </div>

  <div class="form-step" id="step-4">
        <div class="button-row d-flex mt-3 mb-3 justify-content-between">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm mb-0 me-3 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button btn bg-gradient-warning btn-sm mb-0 me-3 justify-content-end" id="saveblotter">Submit</button>
      </div>
      </div>
    <div class="justify-content-center text-start py-0 m-0   mt-4"><p style="font-family: 'Open Sans'; font-size: 22px;" class="text-bold">Item D - Narrative of the Incident</p></div>
    <div class="row mt-3">
      <div class="col-12 col-sm-4">
         <label>TYPE OF INCIDENT:</label>
         <input class="form-control" id="d_type" type="text" placeholder="TYPE OF INCIDENT" disabled>
      </div>
      <div class="col-12 col-sm-4">
         <label>DATE/TIME OF INCIDENT:</label>
         <input class="form-control" id="d_dtincident" type="text" placeholder="DATE/TIME OF INCIDENT" disabled>
      </div>
      <div class="col-12 col-sm-4 mt-3 mt-sm-0">
         <label>PLACE OF INCIDENT:</label>
         <input class="form-control" id="d_pincident" type="text" placeholder="PLACE OF INCIDENT" disabled>
      </div>
      <div class="row mt-3">
        <div class="col-12 col-LG-4 mt-3">
         <textarea class="form-control text-center" id="d_narrative" style="height: 150px;" type="text" placeholder="ENTER IN DETAIL NARRATIVEOF THE INCIDENTOR EVENT, ANSWERING THE WHO, WHAT, WHEN, WHERE, AND WHY AND HOW OF REPORTING"></textarea><p style="font-size: 12px;">(DETAILS OF THIS NARRATIVE SHALL BE THE BASIS IN THE ENTRY OF RECORD IN THE POLICE BLOTTER)</p>
      </div>
      </div>
      <div class="row mt-3">
      <div class="col-12 col-sm-4">
         <label style="font-size: 10px;">I HEREBY CERTIFY TO THE CORRECTNESS OF THE FOREGOING TO THE BEST OF MY KNOWLEDGE AND BELIEF.</label>
      </div>
            <div class="col-12 col-sm-4">
         <input class="form-control" id="d_reporting" type="text" placeholder="Name of the Reporting Person" disabled>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-sm-4">
         <label style="font-size: 10px;">SUBSCRIBED AND SWORN TO BEFORE ME.</label>
      </div>
      <div class="col-12 col-sm-4">
         <input style="font-size: 11px;" class="form-control" id="d_policeuser" type="text" placeholder="Name of the Administering Officer (DUTY OFFICER)" disabled  value="<?php $admin_id = Session::get("admin_id"); 
            for($a=0; $a<count($this->getUser); $a++){
             if($this->getUser[$a]['id']==$admin_id){
              echo $this->getUser[$a]['fullname'];
             }
            }
         ?>">
      </div>
    </div>
  </div>  
  </div>
</div>
</div>
</div>

</div>
</div>    
</div>
</div>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <!-- jQuery -->
<script src="<?php echo URL;?>public/plugins/jquery/jquery.min.js"></script>
<!-- Select2 -->
  <!-- DataTables  & Plugins -->
<script src="<?php echo URL;?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo URL;?>public/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo URL;?>public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo URL;?>public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Components -->
<script src="<?php echo URL;?>public/js/components/blotter.js"></script>
<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function animateToTop(e) {
    e.preventDefault();
    var scrollToTop = window.setInterval(function() {
        var pos = window.pageYOffset;
        if ( pos > 0 ) {
            window.scrollTo( 0, pos - 20 );
        } else {
            window.clearInterval( scrollToTop );
        }
    }, 16);
}

</script>

<script>
  $(document).ready(function() {
  var currentStep = 1;
  var totalSteps = $('.form-step').length;
  var progressBarWidth = (currentStep / totalSteps) * 100;
  $('.progress-bar').css('width', progressBarWidth + '%');
  
  $('.next-step').click(function() {
    var check = $('#checkerA').val();
    if(check==currentStep){
      currentStep++;
      if (currentStep > totalSteps) {
        currentStep = totalSteps;
      }
      var progressBarWidth = (currentStep / totalSteps) * 100;
      $('.progress-bar').css('width', progressBarWidth + '%');
      $('.form-step').removeClass('active');
      $('#step-' + currentStep).addClass('active');      
    }
  });
  
  $('.prev-step').click(function() {
    currentStep--;
    if (currentStep < 1) {
      currentStep = 1;
    }
    var progressBarWidth = (currentStep / totalSteps) * 100;
    $('.progress-bar').css('width', progressBarWidth + '%');
    $('.form-step').removeClass('active');
    $('#step-' + currentStep).addClass('active');
  });
  
  $('.submit').click(function() {
    alert('Form submitted!');
  });
});
</script>
</body>
</html>