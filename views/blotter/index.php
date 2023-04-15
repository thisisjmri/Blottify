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
    <div class="" id="sidenav-collapse-main">
      <ul class="navbar-nav">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>dashboardss">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>blotter">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Blotter</span>
          </a>
        </li>
<?php
$station_type = Session::get("station_type");
$type = Session::get('station_type');
if($station_type == "Main Station"){
        echo "<li class='nav-item'>
                  <a class='nav-link' href='mapss'>
                    <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                      <svg width='12px' height='12px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <title>office</title>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class='color-background' d='M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z'/></svg>
                      </svg>
                    </div>
                    <span class='nav-link-text ms-1 text-bold'>Maps</span>
                  </a>
                </li>";



          echo "<li class='nav-item'>
            <input type='text' id='station_type' value='$type = Session::get('station_type');' hidden>
            <a class='nav-link' data-bs-toggle='collapse' href='#submenu1' href='#'>
              <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                <svg width='12px' height='12px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                  <title>box-3d-50</title>
                 <svg xmlns='http://www.w3.org/2000/sv' viewBox='0 0 576 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class='color-background' d='M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z'/></svg>
              </div>
              <span class='nav-link-text ms-1 text-bold'>Library</span>
            </a>
          </li>
          <ul class='collapse nav flex-column ms-1' id='submenu1' data-bs-parent='#menu'>";

            for ($f=0; $f <count($this->getStation); $f++) {
              if ($this->getStation[$f]['station_type'] == 'Main Station') {
                echo "<li class='nav-item py-2' onClick='setActive(".$this->getStation[$f]['id'].",0)'>
                <a class='nav-link'>
                  <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                    <svg class='text-dark' width='16px' height='16px' viewBox='0 0 40 44' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                      <title>document</title>
                      <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M32 144a144 144 0 1 1 288 0A144 144 0 1 1 32 144zM176 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM144 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z'/></svg> </svg>
                  </div>
                  <span class='nav-link-text ms-1 text-bold' style='font-size: 12px;'>".$this->getStation[$f]['station_name']."</span>
                </a>
              </li>";
              }
              else {
                echo "<li class='nav-item py-2' onClick='setActive(".$this->getStation[$f]['id'].",1)'>
                <a class='nav-link'>
                  <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                    <svg class='text-dark' width='16px' height='16px' viewBox='0 0 40 44' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                      <title>document</title>
                      <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M32 144a144 144 0 1 1 288 0A144 144 0 1 1 32 144zM176 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM144 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z'/></svg> </svg>
                  </div>
                  <span class='nav-link-text ms-1 text-bold' style='font-size: 12px;'>".$this->getStation[$f]['station_name']."</span>
                </a>
              </li>";
              }
            }

}
else {
  echo "<li class='nav-item'>
    <input type='text' id='station_type' value='$type = Session::get('station_type');' hidden>
    <a class='nav-link' class='nav-link'  href='#' id='myLink'>
      <div class='icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center'>
        <svg class='text-white' width='16px' height='16px' viewBox='0 0 40 44' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
          <title>document</title>
          <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class='color-background' d='M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z'/></svg>
        </svg>
      </div>
      <span class='nav-link-text ms-1 text-bold'>Library</span>
    </a>
  </li>";
}
?>

  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
  <!-- NARIGATION BAR -->
   <!--    <div class="page-header min-height-150 border-radius-xl mt-4 mx-4" style="background-image: url('public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div> -->

      <nav class="navbar navbar-main navbar-expand-lg shadow-blur mx-5  px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">

      <div class="container-fluid py-1 px-3">
         <div class="progress-indicator">
    <div class="progress-bar"></div>
  </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Progress Bar</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Incident Record Form</li>
          </ol>
    <div class="progress-indicator w-75">
    <div class="progress-bar"></div>
  </div>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none p-0 pb-0 pe-2 text-bold">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo URL;?>profile_user">
                    <div class="d-flex py-1">
                       <div class="my-auto avatar avatar-lg position-relative">
                        <?php 
                              Session::init();
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getUser); $i++){
                                if($this->getUser[$i]['id'] == $admin_id){
                                  $pic = $this->getUser[$i]['image'];
                                }
                              } 
                            ?>
              <img src="<?php echo ($pic =='') ? "url('public/img/bruce-mars.jpg')" : "uploads/profile_image/".$pic ?>" alt="profile_image" class="w-100 avatar avatar-lg me-3" style="object-fit: cover; width: 100%; height: 100%;">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">

                          <span class="font-weight-bold">
                          <?php 
                            Session::init();
                            $admin_id = Session::get("admin_id");
                            for($i=0; $i<count($this->getUser); $i++){
                              if($this->getUser[$i]['id'] == $admin_id){
                                echo $this->getUser[$i]['fullname'];
                              }
                            } 
                          ?>
                            
                          </span> 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-user me-1"></i>
                            <?php 
                              Session::init();
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getUser); $i++){
                                if($this->getUser[$i]['id'] == $admin_id){
                                  echo $this->getUser[$i]['rank'];
                                }
                              } 
                            ?>
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

    
  
<div class="multi-step-form card my-4 mx-5" >
    <div class="justify-content-center text-center py-2 mt-3"><p style="font-family: 'Open Sans'; font-size: 25px;" class="text-bold">INCIDENT RECORD FORM</p></div>
   
  
  <div class="form-step active" id="step-1">
       
        <div class="row mt-4">
        <div class="col-12 col-sm-3">
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Blotter ID</label>
        <input id="irfid" name="irfid" type="text" disabled="" class="form-control">
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
         <input class="form-control" id="dt_reported" type="datetime-local" disabled>
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
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickname</label>
        <input placeholder="Nickname" id="a_nickname" type="text" class="form-control" type="text">
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
          <input class="form-control" type="text" pattern="[0-9]{11}" maxlength="11" minlength="11" value="09" id="a_mobilephone" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          <div class="invalid-feedback">Please enter a valid 11-digit mobile number starting with "09".
        </div>
        <!-- <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input class="form-control" type="tel" pattern="[0-9]{11}" value="09" minlength="11" maxlength="11" id="a_mobilephone" type="text"> -->
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
        <select  class="form-select" id="a_sex">
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
             <input class="form-control" id="a_currentbrgy" type="text" placeholder="BARANGAY">
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
             <input class="form-control" id="a_otherbrgy" type="text" placeholder="BARANGAY">
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
    

    <div class="card-footer px-0"> 
     <div class="justify-content-end text-end mt-3">
    <button class="btn next-step bg-gradient-warning btn-sm mb-0 m-0" id="proceedB">Proceed to Item B</button>
  </div>   
    </div>

  </div>


  <div class="form-step" id="step-2">
        
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
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickname</label>
        <input placeholder="Nickname" id="b_nickname" type="text" class="form-control" type="text">
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
          <input class="form-control" type="text" pattern="[0-9]{11}" maxlength="11" minlength="11" value="09" id="b_mobilephone" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          <div class="invalid-feedback">Please enter a valid 11-digit mobile number starting with "09".
        </div>
       <!--  <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input placeholder="Mobile Number" pattern="9\d*" maxlength="11" minlength="11" placeholder="+63" id="b_mobilephone" type="text" class="form-control" type="text">-->
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
        <select class="form-select" id="b_sex">
         <option value="" selected disabled></option>
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
             <input class="form-control" id="b_currentbrgy" type="text" placeholder="BARANGAY">
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
             <input class="form-control" id="b_otherbrgy" type="text" placeholder="BARANGAY">
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

       <div class="card-footer px-0 pb-0">
         <div class="button-row d-flex justify-content-between mt-3 mb-3">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm mb-0 m-0 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button next-step btn bg-gradient-warning btn-sm mb-0 m-0 justify-content-end" id="proceedC">Proceed to Item C</button>
      </div>
      </div>
       </div>
    </div>

  <div class="form-step" id="step-3">
     
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
        <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Nickname</label>
        <input placeholder="Nickname" id="c_nickname" type="text" class="form-control" type="text">
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
          <input class="form-control" type="text" pattern="[0-9]{11}" maxlength="11" minlength="11" value="09" id="c_mobilephone" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
          <div class="invalid-feedback">Please enter a valid 11-digit mobile number starting with "09".
        </div>
        <!-- <label style="font-weight: bolder; font-size: 14px; font-style: bold;">Mobile Number</label>
        <input placeholder="Mobile Number" pattern="9\d*" maxlength="11" minlength="11" placeholder="+63" id="c_mobilephone" type="text" class="form-control" type="text">
        -->
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
             <input class="form-control" id="c_currentbrgy" type="text" placeholder="BARANGAY">
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
             <input class="form-control" id="c_otherbrgy" type="text" placeholder="BARANGAY">
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

       <div class="card-footer px-0 pb-0">
         <div class="button-row d-flex justify-content-between mt-3 mb-3">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm m-0 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button next-step btn bg-gradient-warning btn-sm m-0 justify-content-end" id="proceedD">Proceed to Item D</button>
      </div>
      </div>
       </div>
   
  </div>

  <div class="form-step" id="step-4">
       
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
  <div class="card-footer px-0 pb-0">
   <div class="button-row d-flex mt-3 mb-3 justify-content-between">  
      <div>
        <button class="button prev-step btn bg-gradient-secondary btn-sm mb-0 me-3 justify-content-end">Prev</button>
      </div>
      <div>               
        <button class="button btn bg-gradient-warning btn-sm mb-0 me-3 justify-content-end" id="saveblotter">Submit</button>
      </div>
      </div> </div>
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
   $(document).ready(function() {
      $('#map').on('mousedown', function(event) {
        var mouseX = event.clientX;
        var mouseY = event.clientY;
        $('#red-dot').attr('cx', mouseX).attr('cy', mouseY);
        var id = $(this).attr('id');
        console.log('Clicked on ' + id + ' at ' + mouseX + ',' + mouseY);
      });
    });

  var link = document.getElementById("myLink");
  link.addEventListener("click", myFunction);

function myFunction() {
  var station_type = document.getElementById("station_type").value;
  if(station_type == "Main Station"){
    window.location = "libraries_main";
  }
  else{
    window.location = "libraries";
  }
}
</script>
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
  <script type="text/javascript">


    var nav_subname = document.getElementById("nav_subname");
    nav_subname.textContent = "Library";

    var nav_name = document.getElementById("nav_name");
    nav_name.textContent = "Library";

    function setActive(a,b){
      $.ajax({
          url:'libraries_main/setActive',
          type: 'post',
          data: {
              a : a,
              b : b
          },
          cache: false,
          success: function(server_reply) {
              window.location = "libraries";
          },
          error: function(xhr, status, error) {
              alert('Cannot do action: '+console.error(xhr));
          }
      });
    }

  </script>
<script>
  var link = document.getElementById("myLink");
  link.addEventListener("click", myFunction);

function myFunction() {
    window.location = "libraries";
}
</script>
</body>
</html>