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
    Admin Dashboard
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
  <link href="<?php echo URL;?>public/css/custom.css" rel="stylesheet" />
  <link id="pagestyle" href="<?php echo URL;?>public/css/adminlte.css" rel="stylesheet" />

  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo URL;?>public/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">  
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
}
</style>
<body class="g-sidenav-show bg-gray-100">
  <aside class="bg-white sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
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
          <a class="nav-link" href="<?php echo URL;?>admin_blotter">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter Records</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-dark active" href="<?php echo URL;?>user_account">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Accounts & Stations</span>
          </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link " href="<?php echo URL;?>user_logs">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="color-background" d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM128 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 432c0-44.2 35.8-80 80-80h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">User Logs</span>
          </a>
        </li>
  </aside>
  <!-- name, date and time, activity, station -->
 
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <div class="page-header min-height-150 border-radius-xl mt-4 mx-4" style="background-image: url('public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-dark opacity-5"></span>
      </div>
      <nav class="navbar navbar-main navbar-expand-lg shadow-blur mx-5 mt-n5  px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">
   <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Blottify</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Accounts and Stations</li>
         </ol>
         <h6 class="font-weight-bolder mb-0">Biometrics Enrollment</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
         <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
         </div>
         <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                 <a class="btn  bg-gradient-dark btn-sm mb-0 me-3" href="admin_blotter">Blotter Records</a>
              </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
               <a href="javascript:;" class="nav-link p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa fa-user me-sm-1 cursor-pointer"></i>
               <span class="d-sm-inline d-none text-bold">Profile</span>
               </a>
               <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                  <li class="mb-2">
                     <a class="dropdown-item border-radius-md" href="<?php echo URL; ?>admin_profile">
                        <div class="d-flex py-1">
                            <div class="my-auto avatar avatar-lg position-relative">
              <img src="<?php echo URL;?>uploads/profile_image/<?php echo $this->getUser[0]['image']; ?>" alt="profile_image" class="w-100 avatar avatar-lg me-3" style="object-fit: cover; width: 100%; height: 100%;">
                      </div>
                           <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">
                                 <span class="font-weight-bold">
                                  <?php echo $this->getUser[0]['fullname'];?>
                                 </span> 
                              </h6>
                              <p class="text-xs text-secondary mb-0">
                                 <i class="fa fa-user me-1"></i>
                                  <?php echo $this->getUser[0]['rank'];?>
                              </p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <a class="dropdown-item border-radius-md text-end" href="<?php echo URL; ?>login/logout">
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
         
         </ul>
      </div>
   </div>
</nav>

    <!-- End Navbar -->
  
  <!-- list of accounts -->
  <div class="container-fluid my-3 py-3 justify-content-center">
   <div class="row mb-5 justify-content-center">
      <div class="col-lg-9 mt-lg-0 mt-4">
        <div class="card py-lg-3">
          <div class="card-body pb-0 text-center">
          <div class="info mb-4">
          <div class="container">
  <div class="row">
 <h5 class="m-0 text-dark text-gradient mb-3" style="font-family: 'Open Sans'">Biometrics Enrollment</h5>
    <div class="col-lg-4 col-md-12">
    </div>
    <div class="col-lg-4">

      <!-- BIOMETRICS -->
      <input type="text" placeholder="username" id="uname">
      <button class="btn btn-lg bg-gradient-dark mt-3 mb-4" id="beginButton">Begin Enrollment</button>

<!-- ENROLL HIDDEN -->
            <div>
            <div id="enrollmentStatusField" class="">
                <!--Enrollment Status will be displayed Here-->
            </div>
            <div class="py-3" hidden>
                <label for="enrollReaderSelect" class="">Choose Fingerprint Reader</label>
                <div class="row justify-content-center">
                <select name="readerSelect" id="enrollReaderSelect" style="width: 280px;" class="form-control" onclick="beginEnrollment();">
                    <option selected>Select Fingerprint Reader</option>
                </select>
                </div>
            </div>

            <div class="form-row mt-2">
                <div class="">
                  <!-- <?php 
                    $enrollee_id = Session::get("enrollee_id"); ?> -->
                    <input id="userID" type="hidden" class="form-control" required>
                    <input id="userIDVerify" type="hidden" class="form-control" required>
                    <input id="kind" type="text" value="enroll" hidden>
                </div>
            </div>
       <!--      <div class="col-4">
                <button class="" type="submit" onclick="serverEnroll()">Enroll</button>
            </div> -->
            </div>

          

<!-- END OF BIOMETRICS -->

<div id="indexFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>

    <div id="indexfinger1" class="col mb-3 mb-md-0 text-center" style="transform: scalex(-1);">
        <span title="not_enrolled"></span>
    </div>

    <div id="indexfinger2" class="col mb-3 mb-md-0 text-center" style="transform: scalex(-1);">
        <span title="not_enrolled"></span>
    </div>

    <div id="indexfinger3" class="col mb-3 mb-md-0 text-center" style="transform: scalex(-1);">
        <span title="not_enrolled"></span>
    </div>

    <div id="indexfinger4" class="col mb-3 mb-md-0 text-center" style="transform: scalex(-1);">
        <span title="not_enrolled"></span>
    </div>
</div>


<div id="middleFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="middlefinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="middlefinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="middlefinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="middlefinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div> 

<div id="ringFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="ringfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="ringfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="ringfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="ringfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div> 

<div id="pinkyFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="pinkyfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="pinkyfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="pinkyfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="pinkyfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div>

<div id="thumbFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="thumbfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="thumbfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="thumbfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="thumbfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div>

<div id="rthumbFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="rthumbfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rthumbfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rthumbfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rthumbfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div>

<div id="rindexFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>

    <div id="rindexfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rindexfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rindexfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rindexfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div>


<div id="rmiddleFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="rmiddlefinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rmiddlefinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rmiddlefinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rmiddlefinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div> 

<div id="rringFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="rringfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rringfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rringfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rringfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div> 

<div id="rpinkyFingers" class="form-row justify-content-center row-cols-4 row card-body pb-0" style="font-family: 'Quicksand';font-size: 25px;" hidden>
           
    <div id="rpinkyfinger1" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rpinkyfinger2" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rpinkyfinger3" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>

    <div id="rpinkyfinger4" class="col mb-3 mb-md-0 text-center">
        <span title="not_enrolled"></span>
    </div>
</div>

<!-- SVG 1 -->
<svg version="1.1" id="svgg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" viewBox="0 0 612 612" enable-background="new 0 0 612 612" xml:space="preserve">

<g id="group1" fill="" title="not_enrolled">
   <!-- GROUP 1 PATHS -->
   <path opacity="1.000000" stroke="none" d="
M297.594482,334.557251 
  C297.333649,336.120941 297.194946,337.275665 296.984375,338.417175 
  C296.267395,342.303833 293.823639,344.276184 289.977112,343.881012 
  C286.086426,343.481323 283.558746,340.735443 284.278442,337.061676 
  C287.303741,321.618591 290.671051,306.238434 294.193268,290.899567 
  C295.089203,286.997833 298.509064,285.813751 302.100861,286.947754 
  C306.050476,288.194733 307.106293,291.233673 306.191254,295.283508 
  C303.269043,308.216919 300.507355,321.186584 297.594482,334.557251 
z"></path>

<path opacity="1.000000" stroke="none" d="
M277.771912,272.819489 
  C291.173767,256.733948 322.610962,259.596924 329.086670,285.747650 
  C330.453064,291.265533 330.022827,297.868927 328.401337,303.377869 
  C320.322784,330.823914 317.363251,358.820099 319.183533,387.203918 
  C321.073120,416.667358 328.843536,444.795044 341.801392,471.360657 
  C345.724396,479.403442 350.424194,487.073395 354.900909,494.837555 
  C357.169922,498.772766 356.795776,502.498291 353.539642,504.836273 
  C350.463379,507.045105 346.244965,506.109253 343.987122,501.734619 
  C336.149536,486.548828 327.771515,471.549072 321.255981,455.793396 
  C308.071228,423.910400 304.354034,390.276855 306.113739,356.032104 
  C307.061157,337.594940 309.990814,319.386902 315.364685,301.670807 
  C317.855835,293.458099 318.117889,286.000732 310.714569,279.963715 
  C301.391174,272.360992 287.378845,275.902496 284.115845,287.757507 
  C279.943939,302.914764 276.066467,318.342682 274.253937,333.909180 
  C272.222931,351.352417 272.129700,369.082672 272.192017,386.684540 
  C272.227631,396.743561 274.148834,406.808685 275.428101,416.844666 
  C275.997742,421.313599 274.241241,424.763885 270.324677,425.699951 
  C266.772430,426.548920 263.277252,424.267151 262.597473,419.808838 
  C261.197693,410.628143 259.822815,401.406586 259.207428,392.150696 
  C257.671631,369.051086 258.507233,345.951813 262.283081,323.129944 
  C264.470032,309.911743 268.146790,296.914551 271.669647,283.958405 
  C272.722229,280.087250 275.520905,276.690887 277.771912,272.819489 
z"></path>

<path opacity="1.000000" stroke="none" d="
M277.094543,513.940125 
  C272.665680,515.045654 270.185211,513.256897 268.364044,509.660522 
  C253.953232,481.202271 245.037277,451.095398 241.101913,419.478363 
  C240.958481,418.325958 240.949478,417.154968 240.911911,415.991547 
  C240.789520,412.201630 242.811539,409.876740 246.354340,409.418060 
  C250.166199,408.924530 252.829208,410.907135 253.499054,414.769562 
  C254.322006,419.514679 254.722656,424.331848 255.495834,429.086975 
  C259.741180,455.196075 267.856934,480.052063 279.784790,503.664398 
  C281.811432,507.676331 282.112396,511.331970 277.094543,513.940125 
z"></path>

<path opacity="1.000000" stroke="none" d="
M285.605530,413.508087 
  C284.375488,396.663239 283.131256,380.246918 282.213745,363.812408 
  C281.898682,358.169189 284.714752,355.062500 288.945343,355.224152 
  C293.028931,355.380219 295.173126,358.199310 295.049286,363.773834 
  C294.173706,403.190521 301.687775,440.903198 318.274994,476.688873 
  C322.465393,485.729340 327.439606,494.417114 332.284149,503.138916 
  C334.401428,506.950714 334.320038,510.180695 330.811005,512.784363 
  C327.684967,515.103882 323.573792,513.812134 321.126648,509.741058 
  C303.276489,480.045563 291.152191,448.220490 285.605530,413.508087 
z"></path>
   <!-- END  OF 1 -->
</g>

<g id="group2" title="not_enrolled">
   <!-- GROUP 2 PATHS -->
   <path opacity="1.000000" stroke="none" d="
M274.669373,261.818726 
  C274.083893,262.217010 273.498413,262.615265 272.508545,263.408020 
  C269.406830,267.196686 266.709503,270.590851 264.012207,273.985046 
  C261.663788,282.277283 259.280579,290.559906 256.991364,298.868469 
  C256.419708,300.943329 256.389801,303.184601 255.689209,305.203033 
  C254.510849,308.597870 251.951431,310.356934 248.312973,309.678955 
  C244.662186,308.998657 242.568420,306.359253 243.161636,302.840424 
  C246.071533,285.579468 248.702332,268.015656 262.012848,254.971481 
  C277.002686,240.281586 298.236115,234.850220 318.763916,242.620453 
  C341.308807,251.154175 355.129883,271.539734 353.645020,294.906128 
  C353.031769,304.556488 349.436890,313.987762 347.634369,323.600494 
  C345.802368,333.370636 343.745331,343.197388 343.172333,353.079651 
  C342.470367,365.185120 346.420349,375.954132 356.138702,384.096771 
  C359.005341,386.498688 359.676361,389.861298 357.263824,393.007324 
  C354.765259,396.265564 351.434784,396.848267 348.051300,394.320557 
  C338.495544,387.181763 333.514252,377.167206 331.105103,365.843323 
  C327.933441,350.935181 331.108154,336.409424 334.588043,321.975433 
  C336.341248,314.703491 338.608368,307.539886 340.043060,300.209839 
  C343.158142,284.294220 337.513306,271.049408 325.379120,261.166870 
  C313.087494,251.156067 298.909271,249.473190 284.086029,255.782761 
  C282.861908,256.303802 281.634735,256.817719 279.825378,257.655823 
  C277.717621,259.257355 276.193512,260.538055 274.669373,261.818726 
z"></path>

<path opacity="1.000000" stroke="none" d="
M240.145828,398.189331 
  C229.679703,421.466675 211.591629,436.664062 190.139420,448.460785 
  C186.633286,450.388885 183.207336,449.915436 181.092361,446.244415 
  C178.962433,442.547424 180.432434,439.553711 183.752899,437.289917 
  C191.709351,431.865387 200.167877,427.040955 207.515701,420.889648 
  C221.031204,409.575012 229.792801,394.748871 233.881973,377.740234 
  C236.151993,368.298248 236.040146,358.288910 237.075806,348.543152 
  C237.848755,341.269623 238.740707,334.008789 239.578842,326.742157 
  C240.066498,322.514221 242.157181,319.859558 246.682602,320.111389 
  C250.661453,320.332794 252.623840,323.458374 252.158707,328.505127 
  C250.723648,344.075714 249.826447,359.726685 247.565292,375.177368 
  C246.432053,382.920929 242.791992,390.297607 240.145828,398.189331 
z"></path>

<path opacity="1.000000" stroke="none" d="
M373.346130,267.733765 
  C377.876099,280.737244 377.754761,293.422333 374.775635,306.404541 
  C372.109314,318.023590 369.975098,329.796692 368.332672,341.602905 
  C367.687378,346.241333 368.808167,351.184937 369.506989,355.933319 
  C370.138885,360.226898 373.153748,361.926300 377.348450,362.072296 
  C387.024445,362.408997 396.290588,360.276886 404.993195,356.456635 
  C418.328247,350.602844 431.361603,344.061859 444.522675,337.811829 
  C445.724945,337.240906 446.903168,336.613007 448.130005,336.101318 
  C451.353210,334.756927 454.202148,335.609985 455.975372,338.411072 
  C457.875397,341.412476 457.590118,344.793030 454.539856,346.862152 
  C449.464874,350.304779 444.324066,353.832703 438.768494,356.347015 
  C426.831024,361.749542 414.901886,367.496613 402.411682,371.243561 
  C393.201416,374.006653 383.124268,374.511566 373.403015,374.742035 
  C365.485077,374.929779 359.451447,368.190247 357.012451,359.617584 
  C354.153473,349.568726 354.830780,339.484558 356.473358,329.469208 
  C358.000092,320.159943 359.942322,310.883087 362.340576,301.759949 
  C367.228088,283.167633 361.305511,267.341248 350.320740,252.839951 
  C340.059509,239.293823 326.095276,232.020157 309.343872,229.702286 
  C307.036560,229.383026 304.147522,228.397141 302.899658,226.707001 
  C301.728760,225.121063 301.447723,221.598053 302.465149,220.010437 
  C303.655518,218.152939 306.806091,216.245117 308.879395,216.468216 
  C324.413940,218.139740 338.367126,223.775314 350.460266,233.951263 
  C361.214417,243.000534 368.068512,254.563995 373.346130,267.733765 
z"></path>

<path opacity="1.000000" stroke="none" d="
M280.206604,480.841125 
  C276.081879,469.061646 271.926453,457.670288 268.385651,446.091034 
  C266.531525,440.027649 270.837585,435.314301 276.217438,437.351715 
  C278.438812,438.192963 280.502289,441.378693 281.239532,443.905945 
  C287.028503,463.749786 294.445404,482.913940 304.094330,501.202179 
  C304.946503,502.817322 305.990234,504.331696 306.835083,505.950226 
  C308.754089,509.626526 307.697601,513.853516 304.501648,515.551880 
  C301.390350,517.205261 297.157288,515.849548 295.162567,512.157898 
  C291.931488,506.177979 288.866638,500.101898 285.929688,493.971527 
  C283.922394,489.781677 282.252045,485.430389 280.206604,480.841125 
z"></path>

<path opacity="1.000000" stroke="none" d="
M217.598572,313.441437 
  C220.359589,295.419708 222.602936,277.687408 229.791550,261.196899 
  C239.564484,238.778030 256.991364,225.188599 280.270599,218.710739 
  C284.581451,217.511139 288.246735,219.250580 289.062347,222.807510 
  C289.998291,226.888977 288.305908,229.802612 284.345795,230.878815 
  C254.749710,238.921906 239.662384,259.585541 235.056015,288.625671 
  C231.175735,313.088257 228.544800,337.746857 224.919540,362.253418 
  C223.810760,369.748566 221.501419,377.108765 219.233627,384.372070 
  C218.075623,388.080963 214.654236,389.233887 211.048172,387.907898 
  C207.314117,386.534851 205.911728,383.278595 207.476059,379.793335 
  C212.595856,368.386688 212.401199,356.107513 213.879730,344.098724 
  C215.119812,334.026764 216.304413,323.947968 217.598572,313.441437 
z"></path>
   <!-- END OF 2 -->
</g>

<g id="group3" title="not_enrolled">
   <!-- GROUP 3 PATHS -->
   <path opacity="1.000000" stroke="none" d="
M396.880798,411.071411 
  C407.291901,407.488556 417.334991,404.100677 427.244446,400.358887 
  C431.878296,398.609161 435.436951,399.010406 437.264526,402.357178 
  C439.194244,405.890991 437.555115,409.634979 432.983093,411.965424 
  C413.341583,421.976868 392.520081,427.287323 370.468597,425.925018 
  C361.657776,425.380737 352.978302,422.710236 343.567230,420.876740 
  C345.115082,425.156921 346.814270,429.871338 348.525513,434.581360 
  C349.432800,437.078552 351.159454,439.603363 351.051361,442.051025 
  C350.946991,444.414185 349.434509,448.051575 347.679657,448.664642 
  C345.521790,449.418427 340.789764,448.378235 340.076904,446.800323 
  C334.974579,435.506409 328.840515,424.339050 330.010712,411.278564 
  C330.208588,409.069641 331.082245,406.710938 332.298401,404.849091 
  C334.551849,401.399139 338.161102,400.585175 341.424438,402.920990 
  C358.421600,415.086975 377.170044,414.747650 396.880798,411.071411 
z"></path>


<path opacity="1.000000" stroke="none" d="
M203.181366,265.248779 
  C211.729172,239.512924 225.985687,218.593491 249.709778,205.269730 
  C274.176270,191.529022 300.132385,189.459564 327.002655,196.668137 
  C332.378265,198.110275 334.607269,201.137756 333.588348,204.929276 
  C332.486023,209.031174 329.100464,210.364014 323.467010,208.983734 
  C294.659393,201.925400 267.730957,205.354034 244.394852,224.726852 
  C226.540237,239.549118 216.275238,258.980652 213.023605,282.035522 
  C212.443497,286.148621 211.922043,290.289429 210.984329,294.327057 
  C210.107864,298.100922 207.475830,299.946289 203.526352,299.099792 
  C199.585068,298.255035 197.965958,295.445892 198.555771,291.681335 
  C199.919510,282.977173 201.540955,274.313446 203.181366,265.248779 
z"></path>

<path opacity="1.000000" stroke="none" d="
M436.357666,314.407288 
  C440.315796,312.207123 443.936798,310.156799 447.588135,308.161957 
  C451.207153,306.184814 454.542511,306.704254 456.730560,310.191376 
  C458.990387,313.792969 457.778137,317.192719 454.234711,319.122864 
  C437.005432,328.507599 419.689240,337.733582 402.352631,346.919159 
  C400.627075,347.833435 398.584137,348.234283 396.639343,348.634888 
  C386.524414,350.718597 379.491486,344.972382 380.801361,334.686157 
  C381.949310,325.671631 384.785919,316.886261 386.479980,307.924683 
  C393.196442,272.394806 379.079620,239.803833 348.619659,220.102859 
  C343.915436,217.060257 342.642975,214.035049 344.500671,210.310150 
  C346.400391,206.500977 350.416229,205.910431 355.223419,208.955231 
  C376.972443,222.730774 391.558929,241.857040 397.954559,266.918152 
  C402.810211,285.944946 401.636749,304.839722 396.167542,323.586700 
  C395.065826,327.363098 394.316589,331.242371 393.047424,336.576416 
  C409.238800,330.794739 422.180908,321.760986 436.357666,314.407288 
z"></path>

<path opacity="1.000000" stroke="none" d="
M167.859619,393.893829 
  C169.245224,391.197510 170.125244,388.174988 172.137421,386.739502 
  C182.682220,379.216888 187.407440,368.759308 189.061920,356.316864 
  C190.813400,343.144897 192.921555,330.019165 194.978439,316.889618 
  C195.730392,312.089783 198.477585,309.682983 202.054337,310.278717 
  C205.820923,310.906097 208.416565,314.616364 207.782196,318.932587 
  C205.487762,334.544037 203.487991,350.214203 200.610474,365.719971 
  C197.961746,379.992828 189.867920,390.966003 177.585236,398.763397 
  C173.342712,401.456665 169.903595,399.848602 167.859619,393.893829 
z"></path>

<path opacity="1.000000" stroke="none" d="
M169.958435,419.125916 
  C171.495544,416.730377 172.704025,414.317596 174.624237,412.813354 
  C181.125732,407.720367 187.999725,403.102356 194.492523,397.998901 
  C198.542862,394.815216 201.631317,394.321564 204.592957,397.294861 
  C207.585724,400.299316 207.788895,404.161133 203.931885,407.257324 
  C196.198105,413.465576 188.204285,419.415009 179.886002,424.804840 
  C175.106720,427.901550 170.999252,425.300415 169.958435,419.125916 
z"></path>

<path opacity="1.000000" stroke="none" d="
M449.319214,375.308899 
  C448.180084,376.890594 447.404388,378.582642 446.097717,379.280548 
  C428.008820,388.942413 409.704529,398.118439 389.175049,401.525421 
  C385.898895,402.069122 382.561096,402.476318 379.248383,402.501709 
  C375.602692,402.529663 373.271759,400.502014 372.957520,396.752502 
  C372.645935,393.034088 374.503632,390.307068 378.141876,390.027252 
  C400.515900,388.306641 419.921539,378.338043 439.391754,368.451599 
  C445.307434,365.447876 449.290161,368.109009 449.319214,375.308899 
z"></path>

<path opacity="1.000000" stroke="none" d="
M215.968567,442.935913 
  C216.993164,441.967865 218.017746,440.999756 219.673447,439.951843 
  C220.887527,439.293854 221.470490,438.715607 222.053452,438.137390 
  C222.053452,438.137390 222.047226,438.044769 222.493805,438.035339 
  C231.703690,436.532227 231.790924,436.575897 233.191025,443.160614 
  C233.191025,443.160614 233.157867,443.030670 232.906036,443.187714 
  C232.451477,443.917389 232.248749,444.490021 232.046021,445.062653 
  C232.046021,445.062653 232.009277,444.996552 231.752533,445.016449 
  C230.712845,445.467285 229.929901,445.898224 229.146957,446.329163 
  C222.845352,455.276642 213.709854,460.652191 204.417023,465.770111 
  C200.015533,468.194153 196.146942,467.341827 194.438278,463.990143 
  C192.670975,460.523438 194.091156,456.984222 198.238464,454.537170 
  C200.814896,453.016998 203.396194,451.505096 206.658997,449.935913 
  C207.794434,449.453766 208.246170,449.025146 208.697906,448.596558 
  C208.697906,448.596558 208.951050,448.765533 209.097778,448.714050 
  C209.447235,448.365265 209.649963,448.067963 209.852676,447.770630 
  C209.852676,447.770630 209.872635,447.904083 210.164078,447.886261 
  C210.975632,447.260651 211.495743,446.652832 212.015854,446.045044 
  C212.380966,445.686188 212.746048,445.327332 213.723206,444.918945 
  C214.879715,444.224915 215.424133,443.580414 215.968567,442.935913 
z"></path>


<path opacity="1.000000" stroke="none" d="
M420.471893,259.579712 
  C421.724396,264.393127 420.384460,267.856873 415.804382,268.778107 
  C411.129486,269.718475 409.116547,266.622955 407.897919,262.409515 
  C395.412689,219.240997 357.822296,187.938782 313.013794,182.841248 
  C296.534088,180.966476 280.469940,182.206161 264.639313,187.034927 
  C259.751251,188.525925 256.269775,187.271759 255.104141,183.695480 
  C253.785339,179.649277 255.760086,176.298492 260.765259,174.846436 
  C304.747070,162.087036 344.786652,170.342163 380.614807,198.381256 
  C400.600861,214.022324 413.623718,234.654831 420.471893,259.579712 
z"></path>


<path opacity="1.000000" stroke="none" d="
M207.160126,232.162308 
  C204.309723,237.241745 201.606110,241.992233 199.062439,246.826874 
  C196.668564,251.376770 193.132507,253.230637 189.525421,251.600143 
  C185.992889,250.003357 185.053268,246.449417 187.105927,241.706924 
  C196.581161,219.815170 211.375275,202.307770 230.939499,188.764206 
  C231.891556,188.105087 232.949478,187.594864 233.974396,187.045761 
  C237.642273,185.080658 241.077118,185.767410 243.144409,189.146484 
  C245.244507,192.579224 243.861038,195.639175 240.681854,198.197342 
  C233.593857,203.900864 226.298615,209.438278 219.848938,215.813416 
  C215.070160,220.536972 211.490555,226.473755 207.160126,232.162308 
z"></path>

<path opacity="1.000000" stroke="none" d="
M434.393311,303.316986 
  C429.702576,305.911285 425.388977,308.439758 420.926422,310.670258 
  C415.269135,313.497864 410.825500,310.669678 410.989868,304.412201 
  C411.129791,299.086121 411.522247,293.767090 411.707092,288.441620 
  C411.852417,284.255676 413.804138,281.797821 418.089813,281.779694 
  C422.148254,281.762512 424.045624,284.216766 424.412292,288.055450 
  C424.568024,289.685272 424.678741,291.319397 424.869537,293.693604 
  C432.153748,289.713379 438.870117,285.797516 445.832947,282.384399 
  C448.004333,281.320007 451.040039,280.904175 453.305267,281.535736 
  C454.827087,281.960114 456.675781,284.793030 456.599396,286.467163 
  C456.502777,288.584839 455.118530,291.429718 453.381012,292.544189 
  C447.368256,296.400879 440.961243,299.642883 434.393311,303.316986 
z"></path>

<path opacity="1.000000" stroke="none" d="
M191.306641,268.662628 
  C186.800156,298.830627 182.457153,328.600525 177.854126,358.330109 
  C177.259048,362.173584 175.691757,366.001831 173.889374,369.482147 
  C172.326508,372.499969 169.120850,373.141388 166.051346,371.692017 
  C163.050446,370.274994 161.873428,367.815948 162.551712,364.299774 
  C165.125854,350.955597 167.746750,337.613525 169.926422,324.201782 
  C173.125702,304.516235 175.954254,284.770538 178.967285,265.054504 
  C179.167068,263.747101 179.534744,262.456879 179.920975,261.188080 
  C181.058685,257.450836 183.645416,255.557861 187.462372,256.377960 
  C191.283920,257.199097 192.886734,259.977142 192.322815,263.863068 
  C192.108459,265.340088 191.706192,266.789825 191.306641,268.662628 
z"></path>

   <!-- END OF 3 -->
</g>


<g id="group4" title="not_enrolled">
   <!-- GROUP 4 PATHS -->

   <path opacity="1.000000" stroke="none" d="
M170.662048,221.618652 
  C173.059647,217.587402 175.154922,213.796509 177.538208,210.196274 
  C180.104324,206.319870 183.637283,205.417252 186.876648,207.482300 
  C190.160049,209.575439 190.849380,213.226425 188.381073,217.066360 
  C179.962967,230.162460 173.527206,244.145187 169.280502,259.125153 
  C168.142227,263.140289 165.580750,264.973633 161.466797,264.161774 
  C157.574539,263.393646 155.432388,260.035583 157.038376,255.696411 
  C161.240936,244.341553 165.968353,233.180969 170.662048,221.618652 
z"></path>

<path opacity="1.000000" stroke="none" d="
M309.132263,145.958130 
  C313.898621,146.388809 318.235077,146.591064 322.491943,147.282791 
  C326.379333,147.914444 329.007660,150.393295 328.595978,154.511520 
  C328.183136,158.641068 325.409119,160.298782 321.186035,160.097290 
  C310.223114,159.574188 299.210083,158.484573 288.288208,159.034378 
  C260.295197,160.443542 235.664856,170.991867 213.958038,188.526474 
  C210.866974,191.023453 208.136398,193.962036 205.169220,196.618317 
  C202.239059,199.241455 199.066772,200.104172 195.810745,197.199722 
  C192.740555,194.461044 192.714951,190.898422 195.897903,187.629852 
  C216.514221,166.458954 241.545242,153.524017 270.480072,148.051483 
  C283.097229,145.665161 295.806915,144.254486 309.132263,145.958130 
z"></path>

<path opacity="1.000000" stroke="none" d="
M345.156921,153.174042 
  C389.029572,167.366852 420.247620,195.108688 437.819092,237.520309 
  C441.233887,245.762558 443.176147,254.639008 445.484467,263.306335 
  C446.813782,268.297729 444.650970,271.704163 440.400116,272.408966 
  C436.427307,273.067688 434.013489,270.859863 432.879730,265.726837 
  C422.032471,216.617493 392.206665,184.207886 345.570862,166.637650 
  C342.144379,165.346710 338.972870,163.990631 338.997406,159.585251 
  C339.018707,155.755508 341.284332,153.916534 345.156921,153.174042 
z"></path>

<path opacity="1.000000" stroke="none" d="
M371.572571,458.509827 
  C369.284058,454.235901 366.903229,450.395935 365.140320,446.290619 
  C363.014374,441.339905 365.840881,436.987000 371.192291,437.070038 
  C385.782379,437.296448 399.987366,435.106964 413.993805,431.170258 
  C418.432312,429.922699 422.067169,431.673279 422.835754,435.288269 
  C423.751404,439.594910 421.808838,442.511932 417.558044,443.432129 
  C408.479401,445.397369 399.362030,447.189850 390.238708,448.939270 
  C387.651733,449.435364 384.989380,449.538361 381.157257,449.951447 
  C385.260925,455.904541 388.908813,461.150238 392.499542,466.434753 
  C393.514893,467.929077 395.286133,469.670074 395.085114,471.063385 
  C394.729462,473.528168 393.710052,476.520996 391.907898,478.004547 
  C389.319855,480.135071 386.088165,479.134766 384.066223,476.358643 
  C379.862579,470.587036 375.846924,464.678528 371.572571,458.509827 
z"></path>

<path opacity="1.000000" stroke="none" d="
M218.705566,469.798828 
  C222.241791,467.268036 225.462112,464.918976 228.696671,462.589722 
  C233.331177,459.252258 237.888733,460.626709 239.748672,465.983582 
  C242.904190,475.071899 246.001556,484.180450 249.119568,493.281769 
  C250.630569,497.692352 249.442703,500.856689 245.742599,502.305450 
  C242.123871,503.722260 238.860748,502.178375 237.123840,497.839996 
  C234.597931,491.530884 232.309418,485.126709 229.736450,478.275177 
  C226.861511,480.012054 224.261642,481.687347 221.564590,483.187988 
  C217.363785,485.525299 213.372040,484.833099 211.670914,481.292938 
  C209.732559,477.259125 211.439178,474.263336 214.988281,472.065247 
  C216.119019,471.364960 217.259827,470.680939 218.705566,469.798828 
z"></path>

<path opacity="1.000000" stroke="none" d="
M362.607788,487.408142 
  C358.455841,481.156281 354.504974,475.199188 350.577484,469.226715 
  C348.271881,465.720612 348.720520,462.541901 352.111115,460.083313 
  C355.223328,457.826477 358.985779,458.860168 361.524292,462.518005 
  C366.071533,469.070129 370.501678,475.704132 375.094543,482.223755 
  C377.495972,485.632660 378.148163,488.952362 374.926392,492.065521 
  C372.015533,494.878296 368.429352,494.185974 365.014069,490.411591 
  C364.234406,489.549866 363.548004,488.603729 362.607788,487.408142 
z"></path>

<path opacity="1.000000" stroke="none" d="
M349.432831,128.654572 
  C371.413879,135.376404 390.993805,145.793518 408.562805,159.956741 
  C413.201080,163.695877 413.227509,169.097443 408.778076,171.423538 
  C405.519684,173.126953 402.804596,171.867905 400.110504,169.719147 
  C378.477936,152.465363 354.091187,141.211273 326.772491,136.540894 
  C311.250092,133.887207 295.656464,133.315811 280.023926,135.661606 
  C272.473145,136.794678 269.199219,135.355225 268.505371,130.602783 
  C267.851685,126.125519 270.823517,123.869720 278.381439,122.868263 
  C302.347870,119.692596 325.886322,121.749107 349.432831,128.654572 
z"></path>


<path opacity="1.000000" stroke="none" d="
M197.930359,164.093765 
  C194.119537,158.901520 196.919907,155.404434 200.781769,153.004532 
  C209.652771,147.491760 218.737289,142.305450 227.898972,137.285599 
  C231.814468,135.140228 236.087601,133.600586 240.299850,132.064377 
  C242.273209,131.344696 244.773071,130.493134 246.522232,131.123108 
  C248.837128,131.956833 251.733582,133.862518 252.342102,135.912460 
  C252.845062,137.606857 250.944031,141.197327 249.144165,142.177582 
  C243.030182,145.507431 236.320786,147.733444 230.154373,150.980362 
  C222.848740,154.827179 215.852142,159.265091 208.758194,163.507996 
  C205.348038,165.547623 201.991806,167.364258 197.930359,164.093765 
z"></path>

<path opacity="1.000000" stroke="none" d="
M357.945190,118.045959 
  C355.820740,118.237366 353.925323,118.647415 352.281311,118.177567 
  C317.783539,108.318375 283.312653,108.208038 248.792816,118.075958 
  C243.471741,119.597054 239.708252,116.866028 239.844345,112.045319 
  C239.943787,108.523186 241.833786,106.503372 245.219528,105.867752 
  C258.934387,103.293091 272.557953,99.691612 286.394257,98.425491 
  C309.612946,96.300804 332.619324,98.884544 355.026764,105.714386 
  C361.986938,107.835854 363.233917,112.585854 357.945190,118.045959 
z"></path>

   <!-- END OF 4 -->
</g>

<path opacity="1.000000" stroke="none" d="
M264.392273,273.994904 
  C266.709503,270.590851 269.406830,267.196686 272.424316,263.674652 
  C271.790436,267.413147 268.493713,270.910126 270.890625,275.304871 
  C269.759064,275.652161 268.531464,276.442261 267.522675,276.223419 
  C266.493896,276.000275 265.680206,274.785431 264.392273,273.994904 
z"></path>
<path fill="#FEF2E3" opacity="1.000000" stroke="none" d="
M275.111725,261.876709 
  C276.193512,260.538055 277.717621,259.257355 279.578796,257.910034 
  C280.577850,261.462982 278.749420,262.427460 275.111725,261.876709 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M229.447784,446.336792 
  C229.929901,445.898224 230.712845,445.467285 231.781311,445.041138 
  C231.294098,445.478760 230.521347,445.911591 229.447784,446.336792 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M221.745544,438.199707 
  C221.470490,438.715607 220.887527,439.293854 219.959091,439.847046 
  C220.221619,439.302032 220.829620,438.782043 221.745544,438.199707 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M215.667465,443.019226 
  C215.424133,443.580414 214.879715,444.224915 213.975067,444.848206 
  C214.198700,444.252228 214.782532,443.677399 215.667465,443.019226 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M211.715683,446.086823 
  C211.495743,446.652832 210.975632,447.260651 210.119049,447.836060 
  C210.326889,447.245300 210.871216,446.686951 211.715683,446.086823 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M232.336014,444.945190 
  C232.248749,444.490021 232.451477,443.917389 232.953232,443.235352 
  C233.043503,443.693207 232.834747,444.260498 232.336014,444.945190 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M208.391006,448.647278 
  C208.246170,449.025146 207.794434,449.453766 206.989899,449.850983 
  C207.119431,449.445740 207.601776,449.071869 208.391006,448.647278 
z"></path>
<path fill="#9D796F" opacity="1.000000" stroke="none" d="
M209.588257,447.810181 
  C209.649963,448.067963 209.447235,448.365265 208.958435,448.652924 
  C208.889511,448.378754 209.106674,448.114258 209.588257,447.810181 
z"></path>
</svg>
 
<div class="text-center">
          <button class="btn btn-lg bg-gradient-dark mt-3 mb-4" id="addbio" type="submit" onclick="serverEnroll()" disabled>Enroll User</button>
          </div>
    </div>
    <div class="col-lg-4 col-md-6">
    </div>
  </div>
</div>
          </div>
        <!--   <h4 class="mb-0 font-weight-bolder">Mike Priesler</h4> -->
          <!-- <p class="text-bold" style="font-family: 'Quicksand'; font-size: 14px;">Please Connect the Fingerprint Reader</p>
          <p class="mb-2 text-bold" style="font-family: 'Quicksand'; font-size: 14px;">Please Connect the Fingerprint Reader</p> -->
          </div>

          
          </div>   
      </div>
   </div>
</div>
  </div>
  </div>
    <!-- Swal plugin -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- jQuery -->
  <script src="<?php echo URL; ?>public/plugins/jquery/jquery.min.js"></script>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

  <!-- BIOMETRICS -->
    <script src="<?php echo URL;?>public/js/jquery-3.5.0.min.js"></script>
    <script src="<?php echo URL;?>public/js/es6-shim.js"></script>
    <script src="<?php echo URL;?>public/js/websdk.client.bundle.min.js"></script>
    <script src="<?php echo URL;?>public/js/fingerprint.sdk.min.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
  <!-- Components -->
  <script src="<?php echo URL;?>public/js/components/user_account.js"></script>
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

  <script>
      $(function () {
    $("#example4").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "csv"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

    window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);
    
    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);
    
    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

  </script>
<script>
  // beginEnrollment();
  $(document).ready(function(){
    $('#beginButton').on("click", function(){
      var uname = $('#uname').val();

      if(uname !=''){
        $.ajax({
            url:'enrollment/getID',
            type: 'post',
            data: {
                uname : uname
            },
            cache: false,
            success: function(server_reply) {
              if(server_reply=="failed"){
                alert("insert swal here to alert the user that the username doesn't exist");
              }
              else{
                document.getElementById("userID").value = server_reply;
                document.getElementById("userIDVerify").value = server_reply;
                beginEnrollment();
              }
            },
            error: function(xhr, status, error) {
                alert('Cannot do action: '+console.error(xhr));
            }
        });
      }
      else{
        var a = document.getElementById("uname");
        a.classList.add("is-invalid");
      }
    });
  });
</script>

</body>
</html>