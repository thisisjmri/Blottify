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
</style>
<body class="g-sidenav-show bg-gray-100">
  <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
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
          <a class="nav-link active" href="<?php echo URL;?>views/blotter/blotter.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Blotter</span>
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
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      <div class="container-fluid py-4">
          <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Blottify</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Welcome Back!</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-white btn-sm mb-0 me-3" href="<?php echo URL;?>views/blotter/blotter.html">Add Blotter</a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo URL;?>views/profile_user/profile.html">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo URL;?>public/img/bruce-mars.jpg" class="avatar avatar-sm me-3">
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
                  <li>
                </li>
              </ul>
            </li>
          </ul>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo URL;?>public/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Police Name</span> forwarded a case from San Miguel Station
                        </h6>
                        <p class="text-xs text-secondary mb-0">
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
                        <img src="<?php echo URL;?>public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
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
                      <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
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
                        <p class="text-xs text-secondary mb-0">
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
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?php echo URL;?>public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo URL;?>public/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Juan M. Gonzales
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Regional Director, PRO 11
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1" aria-selected="true">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M32 448c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32V160H32v288zm160-212c0-6.6 5.4-12 12-12h104c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-8zM480 32H32C14.3 32 0 46.3 0 64v48c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16V64c0-17.7-14.3-32-32-32z"/></svg>
                    </svg>
                    <span class="ms-1">56 Data Encoded</span>
                  </a>
                </li>
                <li class="nav-item px-1">
                  <a class="nav-link mb-0 px-0 py-1 "  aria-selected="false">
                    <svg style="color: red;" class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>location</title>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path class="color-background" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                    </svg>
                    <span class="ms-1">La Filipina Station</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- START IRF -->
    <div class="col-lg-12 mt-lg-0 mt-4">
         <div class="card mt-4" id="basic-info">
            <div class="card-header">
               <h5>Incident Record Form</h5>
            </div>
            <div class="card-body pt-0"  style="font-family: 'Quicksand';font-size: 16px;">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="itemA" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" onclick="changeTab('itemA','home')" style="color: #344767; font-size: 13px;">ITEM "A" - REPORTING PERSON</button>
              </li> 
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="itemB" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" onclick="changeTab('itemB', 'profile')" style="color: #344767; font-size: 13px;">ITEM "B" - SUSPECT'S DATA</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="itemC" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" onclick="changeTab('itemC','contact')" style="color: #344767; font-size: 13px;">ITEM "C" - VICTIM'S DATA</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="itemD" data-bs-toggle="tab" data-bs-target="#itemd" type="button" role="tab" aria-controls="itemD" aria-selected="false" onclick="changeTab('itemD','itemd')" style="color: #344767; font-size: 13px;">ITEM "D" -  NARRATIVE OF INCIDENT</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="itemA">
<!-- FORM A -->
                <form class="multisteps-form__form mb-2" style="height: auto;">
                     <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label>IRF ENTRY NUMBER:</label>
                           <input class="form-control" id="irfid" type="text" placeholder="IRF ENTRY NUMBER" disabled>
                        </div>
                        <div class="col-12 col-sm-4">
                           <label>TYPE OF INCIDENT:</label>
                            <select class="form-control" id="type_incident">
                             <option selected disabled>- SELECT INCIDENT -</option>
                              <?php 
                                for($a=0; $a<count($this->getIncident); $a++){
                                  echo "<option value='".$this->getIncident[$a]['id']."'>".$this->getIncident[$a]['crime_name']."</option>";
                                }
                              ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <label>COPY FOR:</label>
                           <input class="form-control" id="copyFor" type="text" placeholder="COPY FOR">
                        </div>
                        <p class="mb-0 text-sm py-2" style="font-family: 'Quicksand';font-size: 12px;">INSTRUCTIONS: Refer to PNP SOP on 'Recording of Incidents in the Police Blotter' in filling up this form. This Incident Record Form (IRF) may be reproduced, photocopied, and/or downloaded from the DIDM website, www.didm.pnp.gov.ph.</p>
                     </div>
                     <div class="row mt-2 mb-2">
                        <div class="col-12 col-sm-4">
                           <label>DATE AND TIME REPORTED:</label>
                           <input class="form-control" id="dt_reported" type="datetime-local" max="<?php date_default_timezone_set('Asia/Manila'); echo date("Y-m-d H:i:s");?>">
                        </div>
                        <div class="col-12 col-sm-4">
                           <label>DATE AND TIME OF INCIDENT:</label>
                           <input class="form-control" id="dt_incident" type="datetime-local" max="<?php date_default_timezone_set('Asia/Manila'); echo date("Y-m-d H:i:s");?>">
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <label>PLACE OF INCIDENT:</label>
                           <div class="pb-2">
                           <input class="form-control" id="place_incident" type="text" placeholder="PLACE OF INCIDENT">
                           </div>
                           <select class="form-control" id="brgy_incident">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                      </div>
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "A" - REPORTING PERSON</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>FAMILY NAME:</label>
                           <input class="form-control" id="a_lastname" type="text" placeholder="FAMILY NAME">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>FIRST NAME:</label>
                           <input class="form-control" id="a_firstname" type="text" placeholder="FIRST NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>MIDDLE NAME:</label>
                           <input class="form-control" id="a_middlename" type="text" placeholder="MIDDLE NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>NICKNAME:</label>
                           <input class="form-control" id="a_nickname" type="text" placeholder="NICKNAME">
                        </div>
                     </div>
                     <!-- CITIZENSHIP PART -->
                     <div class="row mt-3">
                        <div class="col-12" style="flex: 0 0 auto; width: 10%;">
                           <label>CITIZENSHIP:</label>
                           <input class="form-control" id="a_citizenship" type="text" placeholder="CITIZENSHIP">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>SEX/GENDER:</label>
                           <select class="form-control" id="a_sex">
                             <option selected disabled>- SELECT SEX/GENDER -</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>CIVIL STATUS:</label>
                           <select class="form-control" id="a_civil">
                             <option selected disabled>- SELECT CIVIL STATUS -</option>
                             <option value="Single">Single</option>
                             <option value="Married">Married</option>
                             <option value="Divorced">Divorced</option>
                             <option value="Separated">Separated</option>
                             <option value="Widowed">Widowed</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 20%;">
                           <label>DATE OF BIRTH:</label>
                           <input class="form-control" id="a_bday" type="DATE" max="<?php date_default_timezone_set('Asia/Manila'); echo date('Y-m-d'); ?>">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 8%;">
                           <label>AGE:</label>
                           <input class="form-control" type="number" min="1" max="150" id="a_age" placeholder="18"></input>
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 16%;">
                           <label>PLACE OF BIRTH:</label>
                           <input class="form-control" id="a_pob" type="text" placeholder="PLACE OF BIRTH">
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 13%;">
                           <label>MOBILE PHONE:</label>
                           <input class="form-control" pattern="09\d*" maxlength="11" minlength="11" placeholder="MOBILE PHONE" id="a_mobilephone" type="text">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>CURRENT ADDRESS:</label>
                           <input class="form-control" id="a_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="form-control" id="a_currentvill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="a_currentbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="form-control" id="a_currentcity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="form-control" id="a_currentprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OTHER ADDRESS:</label>
                           <input class="form-control" id="a_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="form-control" id="a_othervill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="a_otherbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="form-control" id="a_othercity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="form-control" id="a_otherprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OCCUPATION:</label>
                           <input class="form-control" id="a_occupation" type="text" placeholder="OCCUPATION">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>ID CARD PRESENTED:</label>
                           <input class="form-control" id="a_idcard" type="text" placeholder="ID CARD PRESENTED">
                        </div>
                     </div>
                     <!-- END -->
                     <div class="button-row d-flex mt-4 justify-content-end">                     
                        <button class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Next" id="proceedB">Proceed to ITEM B</button>
                     </div>                                                        
                </form>
<!-- END FORM A -->
              </div>
<!-- START OF ITEM B -->
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="itemB">
                <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="itemA"> -->
                <form class="multisteps-form__form mb-2" style="height: auto;">
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "B" - SUSPECT'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>FAMILY NAME:</label>
                           <input class="form-control" id="b_lastname" type="text" placeholder="FAMILY NAME">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>FIRST NAME:</label>
                           <input class="form-control" id="b_firstname" type="text" placeholder="FIRST NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>MIDDLE NAME:</label>
                           <input class="form-control" id="b_middlename" type="text" placeholder="MIDDLE NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>NICKNAME:</label>
                           <input class="form-control" id="b_nickname" type="text" placeholder="NICKNAME">
                        </div>
                     </div>
                     <!-- CITIZENSHIP PART -->
                     <div class="row mt-3">
                        <div class="col-12" style="flex: 0 0 auto; width: 10%;">
                           <label>CITIZENSHIP</label>
                           <input class="form-control" id="b_citizenship" type="text" placeholder="CITIZENSHIP">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>SEX/GENDER:</label>
                           <select class="form-control" id="b_sex">
                             <option selected disabled>- SELECT SEX/GENDER -</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>CIVIL STATUS:</label>
                           <select class="form-control" id="b_civil">
                             <option selected disabled>- SELECT CIVIL STATUS -</option>
                             <option value="Single">Single</option>
                             <option value="Married">Married</option>
                             <option value="Divorced">Divorced</option>
                             <option value="Separated">Separated</option>
                             <option value="Widowed">Widowed</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 20%;">
                           <label>DATE OF BIRTH:</label>
                           <input class="form-control" id="b_bday" type="DATE">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 8%;">
                           <label>AGE:</label>
                           <input class="form-control" type="number" min="18" max="150" id="b_age" placeholder="AGE"></input>
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 16%;">
                           <label>PLACE OF BIRTH:</label>
                           <input class="form-control" id="b_pob" type="text" placeholder="PLACE OF BIRTH">
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 13%;">
                           <label>MOBILE PHONE:</label>
                           <input class="form-control" pattern="09\d*" maxlength="11" minlength="11" placeholder="MOBILE PHONE" id="b_mobilephone" type="text">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>CURRENT ADDRESS:</label>
                           <input class="form-control" id="b_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="form-control" id="b_currentvill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="b_currentbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="form-control" id="b_currentcity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="form-control" id="b_currentprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OTHER ADDRESS:</label>
                           <input class="form-control" id="b_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="form-control" id="b_othervill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="b_otherbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="form-control" id="b_othercity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="form-control" id="b_otherprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OCCUPATION:</label>
                           <input class="form-control" id="b_occupation" type="text" placeholder="OCCUPATION">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>RELATION TO VICTIM:</label>
                           <input class="form-control" id="b_relation" type="text" placeholder="RELATION TO VICTIM">
                        </div>
                     </div>
                     <!-- END -->
                      
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0">
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
                            <input class="form-control" id="b_influence" type="text">
                        </div>
                     </div>
                     <!-- END -->     
                     <div class="button-row d-flex mt-4 justify-content-between">  
                        <div>
                       <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Back" id="backA">Back</button>    </div>
                       <div>               
                        <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Next" id="proceedC">Proceed to ITEM C</button></div>
                     </div>                                                    
                </form>
              <!-- </div> -->
              </div>
<!-- END OF ITEM B -->
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="itemC">
<!-- START OF ITEM C -->
                <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="itemA"> -->
                <form class="multisteps-form__form mb-2" style="height: auto;">
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "C" - VICTIM'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>FAMILY NAME:</label>
                           <input class="multisteps-form__input form-control" id="c_lastname" type="text" placeholder="FAMILY NAME">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>FIRST NAME:</label>
                           <input class="multisteps-form__input form-control" id="c_firstname" type="text" placeholder="FIRST NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>MIDDLE NAME:</label>
                           <input class="multisteps-form__input form-control" id="c_middlename" type="text" placeholder="MIDDLE NAME">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>NICKNAME:</label>
                           <input class="multisteps-form__input form-control" id="c_nickname" type="text" placeholder="NICKNAME">
                        </div>
                     </div>
                     <!-- CITIZENSHIP PART -->
                     <div class="row mt-3">
                        <div class="col-12" style="flex: 0 0 auto; width: 10%;">
                           <label>CITIZENSHIP</label>
                           <input class="multisteps-form__input form-control" id="c_citizenship" type="text" placeholder="CITIZENSHIP">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>SEX/GENDER:</label>
                           <select class="form-control" id="c_sex">
                             <option selected disabled>- SELECT SEX/GENDER -</option>
                             <option value="Male">Male</option>
                             <option value="Female">Female</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 10%;">
                           <label>CIVIL STATUS:</label>
                           <select class="form-control" id="c_civil">
                             <option selected disabled>- SELECT CIVIL STATUS -</option>
                             <option value="Single">Single</option>
                             <option value="Married">Married</option>
                             <option value="Divorced">Divorced</option>
                             <option value="Separated">Separated</option>
                             <option value="Widowed">Widowed</option>
                           </select>
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 20%;">
                           <label>DATE OF BIRTH:</label>
                           <input class="multisteps-form__input form-control" id="c_bday" type="DATE">
                        </div>
                        <div class="col-9" style="flex: 0 0 auto; width: 8%;">
                           <label>AGE:</label>
                           <input class="form-control" type="number" min="18" max="150" id="c_age" placeholder="18"></input>
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 16%;">
                           <label>PLACE OF BIRTH:</label>
                           <input class="multisteps-form__input form-control" id="c_pob" type="text" placeholder="PLACE OF BIRTH">
                        </div>
                         <div class="col-9" style="flex: 0 0 auto; width: 13%;">
                           <label>MOBILE PHONE:</label>
                           <input class="multisteps-form__input form-control" id="c_mobilephone" pattern="9\d*" maxlength="10" minlength="10" placeholder="+63" type="text">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>CURRENT ADDRESS:</label>
                           <input class="multisteps-form__input form-control" id="c_currentadd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="multisteps-form__input form-control" id="c_currentvill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="c_currentbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="multisteps-form__input form-control" id="c_currentcity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="multisteps-form__input form-control" id="c_currentprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OTHER ADDRESS:</label>
                           <input class="multisteps-form__input form-control" id="c_otheradd" type="text" placeholder="HOUSE NUMBER/STREET">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>VILLAGE/SITIO:</label>
                           <input class="multisteps-form__input form-control" id="c_othervill" type="text" placeholder="VILLAGE/SITIO">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>BARANGAY:</label>
                           <select class="form-control" id="c_otherbrgy">
                             <option selected disabled>- SELECT BARANGAY -</option>
                             <?php 
                                for($a=0; $a<count($this->getBarangay); $a++){
                                  echo "<option value='".$this->getBarangay[$a]['id']."'>".$this->getBarangay[$a]['barangay_name']."</option>";
                                }
                              ?>
                           </select>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>TOWN/CITY:</label>
                           <input class="multisteps-form__input form-control" id="c_othercity" type="text" placeholder="TOWN/CITY">
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0">
                           <label>PROVINCE:</label>
                           <input class="multisteps-form__input form-control" id="c_otherprov" type="text" placeholder="PROVINCE">
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3">
                           <label>OCCUPATION:</label>
                           <input class="multisteps-form__input form-control" id="c_occupation" type="text" placeholder="OCCUPATION">
                        </div>
                        <div class="col-12 col-sm-3">
                           <label>WORK ADDRESS:</label>
                           <input class="multisteps-form__input form-control" id="c_workadd" type="text" placeholder="WORK ADDRESS">
                        </div>
                     </div>
                     <!-- END -->   
                     <div class="button-row d-flex mt-4 justify-content-between">  
                        <div>
                       <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Back" id="backB">Back</button>    </div>
                       <div>               
                        <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Next" id="proceedD">Proceed to ITEM D</button></div>
                     </div>                                                        
                </form>
              <!-- </div> -->
                <!-- END -->
              </div>
<!-- ITEM D -->
              <div class="tab-pane fade" id="itemd" role="tabpanel" aria-labelledby="itemD">
                 <form class="multisteps-form__form mb-2" style="height: auto;">
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "D" - NARRATIVE OF INCIDENT</p>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label>TYPE OF INCIDENT:</label>
                           <input class="multisteps-form__input form-control" id="d_type" type="text" placeholder="TYPE OF INCIDENT" disabled>
                        </div>
                        <div class="col-12 col-sm-4">
                           <label>DATE/TIME OF INCIDENT:</label>
                           <input class="multisteps-form__input form-control" id="d_dtincident" type="text" placeholder="DATE/TIME OF INCIDENT" disabled>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <label>PLACE OF INCIDENT:</label>
                           <input class="multisteps-form__input form-control" id="d_pincident" type="text" placeholder="PLACE OF INCIDENT" disabled>
                        </div>
                        <div class="row mt-3">
                          <div class="col-12 col-LG-4 mt-3">
                           <textarea class="multisteps-form__input form-control text-center" id="d_narrative" style="height: 300px;" type="text" placeholder="ENTER IN DETAIL NARRATIVEOF THE INCIDENTOR EVENT, ANSWERING THE WHO, WHAT, WHEN, WHERE, AND WHY AND HOW OF REPORTING"></textarea><p style="font-size: 12px;">(DETAILS OF THIS NARRATIVE SHALL BE THE BASIS IN THE ENTRY OF RECORD IN THE POLICE BLOTTER)</p>
                        </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label>I HEREBY CERTIFY TO THE CORRECTNESS OF THE FOREGOING TO THE BEST OF MY KNOWLEDGE AND BELIEF.</label>
                        </div>
<!--RECHECK-->                        <div class="col-12 col-sm-4">
                           <input class="multisteps-form__input form-control" id="d_reporting" type="text" placeholder="NAME OF REPORTING PERSON">
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <input class="multisteps-form__input form-control" id="d_reportingsig" type="text" placeholder="SIGNATURE OF REPORTING PERSON">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label>SUBSCRIBED AND SWORN TO BEFORE ME.</label>
                        </div>
                        <div class="col-12 col-sm-4">
                           <input style="font-size: 11px;" class="multisteps-form__input form-control" id="d_police" type="text" placeholder="NAME OF ADMINISTERING OFFICER (DUTY OFFICER)">
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <input style="font-size: 11px;" class="multisteps-form__input form-control" id="d_policesig" type="text" placeholder="SIGNATURE OF ADMINISTERING OFFICER (DUTY OFFICER)">
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-lg-6">
                           <textarea style="font-size: 11px; height: 100px;" class="multisteps-form__input form-control" id="d_rank" type="text" placeholder="RANK, NAME AND DESIGNATION OF POLICE OFFICER (WHETHER HE/SHE IS THE DUTY INVESTIGATOR, INVESTIGATOR ON CASE OR THE ASSISTING POLICE OFFICER)"></textarea>
                        </div>
                        <div class="col-12 col-lg-6">
                           <textarea style="font-size: 11px; height: 100px;" class="multisteps-form__input form-control" id="d_ranksig" type="text" placeholder="SIGNATURE OF DUTY INVESTIGATOR/INVESTIGATOR ON CASE/ASSISTING"></textarea>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label>INCIDENT RECORDED IN THE BLOTTER BY:</label>
                        </div>
                        <div class="col-12 col-sm-3">
                           <input style="font-size: 11px;" class="multisteps-form__input form-control" id="d_policeuser" type="text" placeholder="RANK/NAME OF DESK OFFICER:">
                        </div>
                        <div class="col-12 col-sm-2">
                           <input style="font-size: 11px;" class="multisteps-form__input form-control" id="d_policeusersig" type="text" placeholder="SIGNATURE OF DESK OFFICER:">
                        </div>
                        <div class="col-12 col-sm-3">
                           <input style="font-size: 11px;" class="multisteps-form__input form-control" id="d_entrynum" type="text" placeholder="BLOTTER ENTRY NR:">
                        </div>
                      </div>
                        <div class="text-center py-6 pb-0">
                           <label>REMINDER TO REPORTING PERSON <br>
Keep the copy of this Incident Record Form (IRF). An update of the progress of the investigation of the crime or incident that you reported <br> will be given to you upon presentation of this IRF. For your reference, the data below is the contact details of this police station.</label>
                        </div>
                      <div class="row mt-3">
                        <div class="col-lg-12">
                           <div class="input-group">
                          <!-- declaration for first field -->
                          <input type="text" disabled="" class="form-control input-sm"
                           placeholder="Name of Police Station" />                   
                          <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                          <!-- declaration for second field -->
                          <input type="text" id="d_station" class="form-control 
                            input-sm"/>
                                <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" class="form-control 
                            input-sm" value="Telephone" disabled="" />
                            <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" id="d_telephone" class="form-control 
                            input-sm"/>

                      </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="input-group">
                          <!-- declaration for first field -->
                          <input type="text" disabled="" class="form-control input-sm"
                           placeholder="Investigator-on-Case" />                   
                          <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                          <!-- declaration for second field -->
                          <input type="text" id="d_investigator" class="form-control 
                            input-sm"/>
                                <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" class="form-control 
                            input-sm" value="Mobile Phone" disabled="" />
                            <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" id="d_mobile1" class="form-control 
                            input-sm"/>

                      </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="input-group">
                          <!-- declaration for first field -->
                          <input type="text" disabled="" class="form-control input-sm"
                           placeholder="Name of Chief/Head of
Office" />                   
                          <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                          <!-- declaration for second field -->
                          <input type="text" id="d_chief" class="form-control 
                            input-sm"/>
                                <!-- reducong the gap between them to zero -->
                          <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" class="form-control 
                            input-sm" value="Mobile Phone" disabled="" />
                            <span class="input-group-btn" 
                              style="width:0px;"></span>
                                             <!-- declaration for second field -->
                          <input type="text" id="d_mobile2" class="form-control 
                            input-sm"/>
                      </div>
                        </div>
                    </div>  
                     <div class="button-row d-flex mt-4 justify-content-between">  
                        <div>
                       <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Back" id="backC">Back</button>    </div>
                       <div>               
                        <button  class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="button" title="Save" id="saveblotter">Save Record</button></div>
                     </div>                   
                  </form>
<!-- END IRF -->
              </div>
            </div>
                <!-- Modal for Admin Settings-->
                <div class="modal fade" id="modaladmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="row mt-3">
                        <div class="col-12 col-sm-12">
                           <label>Current Password</label>
                           <input class="multisteps-form__input form-control" type="Password" placeholder="">
                        </div>
                        <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                           <label>New Password</label>
                           <input class="multisteps-form__input form-control" type="Password" placeholder="">
                        </div>
                        <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                           <label>Retype New Password</label>
                           <input class="multisteps-form__input form-control" type="Password" placeholder="">
                        </div>
                     </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-warning">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                 <!-- Modal for Stations-->
                <div class="modal fade" id="modalstation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Police Stations</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                
                          <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station Name</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lorem</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Accounts</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>                                                                
                                    <h6 class="mb-0 text-xs px-3">La Filipina</h6> 
                                  </td>
                                  <td>
                                    <p class="text-xs text-secondary mb-0">Lorem</p>
                                  </td>
                                  <td class="align-middle text-center text-sm">
                                    <span class="text-xs text-secondary mb-0">23</span>
                                  </td>
                                </tr>
                              </tbody>
                            </table>     
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal" data-bs-target="#minimodal">Add Station</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- mini modal for station -->
                <div class="modal fade" id="minimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Police Station</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                       <div class="row mt-3 mb-5">
                        <div class="col-12 col-sm-6">
                           <label>Station Name</label>
                           <input class="multisteps-form__input form-control" type="text" placeholder="Station's Name">
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                           <label>Station Address</label>
                           <input class="multisteps-form__input form-control" type="email" placeholder="Station's Address">
                        </div>
                     </div>            
                      <div class="modal-footer" style="padding-bottom: 0px;">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal" id="#minimodal">Close</button>
                        <button type="button" class="btn bg-gradient-warning">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <!-- end for mini modal -->
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
  <!-- <script src="<?php echo URL;?>public/js/soft-ui-dashboard.min.js?v=1.0.7"></script> -->
  <!-- jQuery -->
<script src="<?php echo URL;?>public/plugins/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo URL;?>public/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo URL;?>public/plugins/moment/moment.min.js"></script>
<script src="<?php echo URL;?>public/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo URL;?>public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo URL;?>public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo URL;?>public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo URL;?>public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo URL;?>public/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo URL;?>public/plugins/dropzone/min/dropzone.min.js"></script>
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
</body>
</html>