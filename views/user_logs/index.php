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
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL;?>/public/img/police_tagum.png">
  <link rel="icon" type="image/png" href="<?php echo URL;?>/public/img/police_tagum.png">
  <title>
    Blottify
  </title>
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <!-- Nucleo Icons -->
  <link href="<?php echo URL;?>/public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo URL;?>/public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo URL;?>/public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo URL;?>/public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
   <link id="pagestyle" href="<?php echo URL;?>public/css/adminlte.css" rel="stylesheet" />
     <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/dropzone/min/dropzone.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- CSS Files -->
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
        <img src="<?php echo URL;?>/public/img/police_tagum.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> One Data. One Tagum </span>
      </a>
    </div>
    <!-- <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href=" //echo URL;admin_blotter">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"> Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) <path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter Records</span>
          </a>
        </li> -->
    <hr class="horizontal dark mt-0">
    <div class="" id="sidenav-collapse-main">
      <ul class="navbar-nav">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>admin_dashboardss">
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
          <a href="#submenu1" data-bs-toggle="collapse" class="nav-link" href="<?php echo URL;?>admin_blotter">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter Records</span>
          </a>
        </li>
        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">

            <?php

            for ($f=0; $f <count($this->getStation); $f++) { 
              echo "<li class='nav-item py-2' onClick='setActive(".$this->getStation[$f]['id'].")'>
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

            ?>

          </ul>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>account_stations">
            <div class="icon icon-shape icon-sm shadow border-radius-md  text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg> </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Accounts & Stations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>user_account">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">User Enrollment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>user_logs">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM128 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 432c0-44.2 35.8-80 80-80h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">User Logs</span>
          </a>
        </li>
  </aside>
  
 
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
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
         <h6 class="font-weight-bolder mb-0">Accounts and Stations</h6>
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
               <span class="d-sm-inline d-none">Profile</span>
               </a>
               <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                  <li class="mb-2">
                     <a class="dropdown-item border-radius-md" href="<?php echo URL; ?>admin_profile">
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
    <!-- End Navbar -->
   
   <!-- LABEL PER STATION -->
    <div class="container-fluid py-4" style="font-family: 'Quicksand';font-size: 16px;">
      <div class="row">
        <div class="col-lg-12 mt-lg-0 mt-0 px-5">
         <div class="card mt-0 border-radius-lg" id="basic-info">
            <div class="card-header pb-0">    
            </div>
             <!-- CONTAINER FOR activities and station filters-->
<div class="container px-4">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6" ><h6>User Logs</h6>
    </div>
    <div class="col-lg-2 col-md-6">
    <label style="font-family: 'Quicksand'; font-size: 14px;"> Filter</label>
      <label class="p-2" style="font-family: 'Quicksand'; font-size: 12px;"></label>
      <select class="form-select" name="location" id="location">
        <option value="all">All Stations</option>
        <?php 
          for($i=0; $i<count($this->getStation); $i++){

            echo "<option value='".$this->getStation[$i]['id']."'>".$this->getStation[$i]['station_name']."</option>";
          } 
        ?>
      </select>
    </div>
    <div class="col-lg-2 col-md-6">
      <label class="p-2" style="font-family: 'Quicksand'; font-size: 12px;"></label>
      <select class="form-select" name="kind" id="kind">
        <option value="all">All Activities</option>
        <option value="Logged In">Logged In</option>
        <option value="Logged Out">Logged Out</option>
        <option value="Blotter">Add Blotter</option>
        <option value="Station">Add Station</option>
        <option value="Account">Add Account</option>
        <option value="Forwarded">Forward Blotter</option>
      </select>  
    </div>
  </div>
</div>
<!-- END CONT -->

             <!-- CONTAINER FOR FILTER-->
<div class="container px-4">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6" >
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
        <select class="form-select" id="cfilter">
          <option value="daily">Daily</option>
         <option value="monthly">Monthly</option>
         <option value="annual1">Annual</option>
         <option value="custom">Custom</option>
       </select>  
    </div>
  </div>
</div>
<!-- END CONT -->


            <!-- CONTAINER FOR DAILY -->
<div class="container px-4" id="dailylabel">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-4  col-md-6" >
    </div>
    <div class="col-lg-2  col-md-6" >
    </div>
    <div class="col-lg-2  col-md-6" >
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    <label style="font-family: 'Quicksand';">Pick a date:</label>
     <input type="date" style="font-family: 'Quicksand';font-size: 12px;" class="form-control" id="daily">
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- CONTAINER FOR MONTH -->
<div class="container px-4" id="monthlylabel">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6" >
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    <label style="font-family: 'Quicksand';">Pick a month:</label>
     <input type="month" style="font-family: 'Quicksand';font-size: 12px;" class="form-control" id="monthly">
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- CONTAINER FOR YEAR -->
<div class="container px-4" id="annual1label">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
      <label style="font-family: 'Quicksand';" >Pick a year:</label>
        <select id="annual1" class="form-select">
       </select>
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- CONTAINER FOR CUSTOM -->
<div class="container px-4" id="customlabel">
  <div class="row gx-2 justify-content-end">
   <div class="col-lg-4  col-md-6">
    </div>
    <div class="col-lg-2  col-md-6" >
    </div>
    <div class="col-lg-2  col-md-6" >
    </div>
    <div class="col-lg-2 col-md-6">
       <label id="startlabel" style="font-family: 'Quicksand'; font-size: 12px;"> Start Date</label>
     <input type="date" style="font-family: 'Quicksand';font-size: 12px;" class="form-control" id="start">
    </div>
    <div class="col-lg-2 col-md-6">
      <label id="endlabel" style="font-family: 'Quicksand';font-size: 12px;">End Date</label>
     <input type="date" style="font-family: 'Quicksand';font-size: 12px;" class="form-control" id="end">
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- CONTAINER FOR GENERATE -->
<div class="container px-4">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6 pt-3">
      <button type="button" class="btn btn-outline-dark btn-sm mb-3 px-2 px-0 w-generate" id="gen">Generate</button>
    </div>
  </div>
</div>
<!-- END CONT -->

          <form method="POST" id="filter" style="background-color: green;">
            <!-- <div class="row card-body pt-2 pr-0 row-cols-4 justify-content-end pb-0">   
            <div class="form-group pr-2 pl-2 m-0"> 
              <label class="p-2" style="font-family: 'Quicksand'; font-size: 12px;"></label>
              <select class="form-select" name="location" id="location">
                <option value="all">All Stations</option>
                
                  // for($i=0; $i<count($this->getStation); $i++){

                  //   echo "<option value='".$this->getStation[$i]['id']."'>".$this->getStation[$i]['station_name']."</option>";
                  // } 
                
              </select>  </div> -->
              <!-- <div class="form-group pr-2 pl-2 m-0"> 
                <label class="p-2" style="font-family: 'Quicksand'; font-size: 12px;"></label>
              <select class="form-select" name="kind" id="kind">
                <option value="all">All Activities</option>
                <option value="Logged In">Logged In</option>
                <option value="Logged Out">Logged Out</option>
                <option value="Blotter">Add Blotter</option>
                <option value="Station">Add Station</option>
                <option value="Account">Add Account</option>
                <option value="Forwarded">Forward Blotter</option>
              </select>  </div>
              <div class="form-group pr-2 pl-2 m-0">
                 <div class="form-group">
                  <label style="font-family: 'Quicksand'; font-size: 12px;"> Start Date</label>
                  <input type="date" id="start" name="start" style="font-family: Quicksand; font-size: 16px;" class="form-control">
                    
                        // if (isset($_POST['start'])) {
                        //   echo "<input type='datetime-local' id='start' name='start' value='".$_POST['start']."' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        // }
                        // else{
                        //   echo "<input type='datetime-local' id='start' name='start' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        // }
                    
                 </div>  
                </div>
                <div class="form-group pr-2 pl-2 m-0">
                 <div class="form-group">
                  <label style="font-family: 'Quicksand';font-size: 12px;">End Date</label>
                  <input type="date" id="end" name="end" style="font-family: Quicksand; font-size: 16px;" class="form-control">
                    
                        // if (isset($_POST['end'])) {
                        //    echo "<input type='datetime-local' id='end' name='end' value='".$_POST['end']."' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        // }
                        // else{
                        //   echo "<input type='datetime-local' id='end' name='end' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        // }
                    
                  </div>
                 </div>      -->
                <!-- </div>
              <div class="row card-body pt-0 mt-0 row-cols-4 justify-content-end pb-0 ps-1 h-10">               
                <div class="form-group justify-content-end text-end">
                  <button type="button" id="gen"  name="gen" style="font-family: 'Quicksand'; font-size: 12px;" class="btn btn-outline-dark btn-sm mb-2 px-0 w-generate">Generate</button>
                </div>        
              </div> -->
            </form>

            <div class="row card-body pt-0  mt-0 row-cols-5 justify-content-end pb-0 pr-0">                   
            </div>
          <div class="tab-content px-4" style="padding-bottom: 30px;" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table id="example1" style="table-layout: fixed;" class="table table-hover table-striped py-4" style="padding-bottom: 16px;">
                  <thead>
                    <tr>
                      <th scope="col" style="width: 5px;">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Activity</th>
                      <th scope="col">Date and Time</th>
                      <th scope="col">Station</th>
                    </tr>
                  </thead>
                <tbody>
                <?php 
                    for($i=0; $i<count($this->getULogs); $i++){
                        echo "<tr><td>".$this->getULogs[$i]['id']."</td>";
                        
                        for ($y=0; $y<count($this->getUserinfo); $y++){ 
                          if($this->getULogs[$i]['user_id'] == $this->getUserinfo[$y]['id']){
                            echo "<td>".$this->getUserinfo[$y]['fullname']."</td>";
                            echo "<td>".$this->getULogs[$i]['activity']."</td>";
                            echo "<td>".$this->getULogs[$i]['date_time']."</td>";

                            for ($z=0; $z<count($this->getStation); $z++){ 
                              if($this->getUserinfo[$y]['station_id'] == $this->getStation[$z]['id']){
                                echo "<td>".$this->getStation[$z]['station_name']."</td>";
                              }
                            }
                          }
                        }
                      echo "</tr>";
                    }
                ?>
                </tbody>
              </table>
             </div> 
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>/public/js/core/popper.min.js"></script>
  <script src="<?php echo URL;?>/public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo URL;?>/public/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>/public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <!-- jQuery -->
<script src="<?php echo URL;?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URL;?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo URL;?>/public/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo URL;?>/public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo URL;?>/public/plugins/moment/moment.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo URL;?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo URL;?>/public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo URL;?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo URL;?>/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo URL;?>/public/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo URL;?>/public/plugins/dropzone/min/dropzone.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="<?php echo URL;?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- <script src="<?php echo URL;?>/public/plugins/public/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
<!-- <script src="<?php echo URL;?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<!-- Components -->
<script src="<?php echo URL;?>/public/js/components/user_logs.js"></script>
<script>
  $(function () {
  $("#example1").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [

      { extend: "excel", className: "btn p-1 px-3 btn-dark" },
      { extend: "pdf", className: "btn p-1 px-3 btn-dark" },
      { extend: "print", className: "btn p-1 px-3 btn-dark" },
      { extend: "csv", className: "btn p-1 px-3 btn-dark" }

    ]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  $('#example').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
    //YEAR DROPDOWN
// let dateDropdown = document.getElementById('annual1');

//     let currentYear = new Date().getFullYear();
//     let earliestYear = 1970;

//     while (currentYear >= earliestYear) {
//       let dateOption = document.createElement('option');
//       dateOption.text = currentYear;
//       dateOption.value = currentYear;
//       dateDropdown.add(dateOption);
//       currentYear -= 1;
//     }
// select.value = new Date().getFullYear();

let dateDropdown = document.getElementById('annual1');

  let currentYear = new Date().getFullYear();
  let earliestYear = 1970;

  while (currentYear >= earliestYear) {
    let dateOption = document.createElement('option');
    dateOption.text = currentYear;
    dateOption.value = currentYear;
    dateDropdown.add(dateOption);
    currentYear -= 1;
  }

  dateDropdown.value = new Date().getFullYear(); // Set default selected value

</script>
  <script type="text/javascript">


    var nav_subname = document.getElementById("nav_subname");
    nav_subname.textContent = "Library";

    var nav_name = document.getElementById("nav_name");
    nav_name.textContent = "Library";

    function setActive(a){
      $.ajax({
          url:'admin_blotter/setActive',
          type: 'post',
          data: {
              a : a
          },
          cache: false,
          success: function(server_reply) {
              window.location = "admin_libraries";
          },
          error: function(xhr, status, error) {
              alert('Cannot do action: '+console.error(xhr));
          }
      });
    }

  </script>
</body>
</html>