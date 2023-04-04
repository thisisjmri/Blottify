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

  </title>
<!-- NEW DATATABLE -->
 <link href="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet">
 <link href="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" rel="stylesheet">
 <link href="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js" rel="stylesheet">


  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo URL;?>public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo URL;?>public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
   <link id="pagestyle" href="<?php echo URL;?>public/css/adminlte.css" rel="stylesheet" />
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
  @page { size: auto;  margin: 2mm; }
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
}
@media screen {
    #printSection {
        display: none;
    }
}
@media print {
    body * {
        visibility:hidden;
    }
    #printSection, #printSection * {
        visibility:visible;
    }
    #printSection {
        position:absolute;
        left:1cm;
        top:1cm;
        right: 1cm;
        bottom: 1cm;
    }
}
</style>                                  
<body class="g-sidenav-show bg-gray-100">
  <aside class=" sidenav navbar navbar-vertical navbar-expand-xs bg-white border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
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
          <a href="#submenu1" data-bs-toggle="collapse"  class="nav-link" href="<?php echo URL;?>admin_blotter">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter Records</span>
          </a>
        </li>
        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">

            <?php

            for ($f=0; $f <count($this->getStation); $f++) { 
              $actv = Session::get("cur_station1");
              $showactive ='nav-link';
              $showactivename = 'nav-link-text ms-1 text-bold';
              if($this->getStation[$f]['id']==$actv){
                $showactive = 'nav-link bg-gradient-warning active';
                $showactivename = 'nav-link-text ms-1 text-white';
              }
              echo "<li class='nav-item py-2' onClick='setActive(".$this->getStation[$f]['id'].")'>
              <a class='".$showactive."'>
                <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                  <svg class='text-dark' width='16px' height='16px' viewBox='0 0 40 44' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                    <title>document</title>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 512'><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M32 144a144 144 0 1 1 288 0A144 144 0 1 1 32 144zM176 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM144 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z'/></svg> </svg>
                </div>
                <span class='".$showactivename."' style='font-size: 12px;'>".$this->getStation[$f]['station_name']."</span>
              </a>
            </li>";
            }

            ?>
            
        </ul>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>account_stations">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
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
            <span class="nav-link-text ms-1 text-bold">Enrollment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>user_logs">
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
 
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
  <!-- NARIGATION BAR -->
      <div class="page-header min-height-150 border-radius-xl mt-4 mx-4" style="background-image: url('public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div>

      <nav class="navbar navbar-main navbar-expand-lg shadow-blur mx-5 mt-n5   px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">

      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Blottify</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page" id="nav_subname">Blotter</li>
          </ol>
          <h6 class="font-weight-bolder mb-0" id="nav_name">Dashboard</h6>
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
                <span class="d-sm-inline d-none text-bold">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="admin_profile">
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


<div class="px-6 py-4">
</div>


    <!-- START -->
<div class="card px-0 mx-5 mb-5" style="border-color: gray; border-width: thin;">
    <div class="card-header px-0 pb-0">

      <!-- CONTAINER FOR FILTER-->
<div class="container px-4">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
      <h6 style=" margin-bottom: 0px;">
        <?php
        $admin_id = Session::get("admin_id");
        $station_type = Session::get("station_type");
        if($station_type == "Main Station"){
          $cur_station1 = Session::get("cur_station1");
        }
        else{
          $cur_station1 = Session::get("station_id");
        }
        
        for($m=0; $m<count($this->getStation); $m++){
          if($cur_station1 == $this->getStation[$m]['id']){
            echo $this->getStation[$m]['station_name']." | ";
          }
        }
        $count = 0;
          for ($i=0; $i <count($this->getBlotter); $i++) { 
            for ($j=0; $j <count($this->getStation); $j++) { 
              if($cur_station1 == $this->getBlotter[$i]['station_id']){
                if ($this->getBlotter[$i]['station_id'] == $this->getStation[$j]['id']) {
                      $count++;
                    // }
                  
                }
              }
            }
          }
        echo $count." Blotter Files";
         ?></h6>
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
          <label style="font-family: 'Quicksand';">FILTER:</label>
          <select class="form-select bg-outoine-dark" id="cfilter">
           <!-- <option selected disabled>FILTER</option> -->
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
<div class="container px-4 my-3" id="dailylabel">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
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
<div class="container px-4 my-3" id="monthlylabel">
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
<div class="container px-4 my-3" id="annual1label">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
      <label style="font-family: 'Quicksand';">Pick a year:</label>
        <select id="annual1" class="form-select">
       </select>
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- CONTAINER FOR CUSTOM -->
<div class="container px-4 my-3">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6" >
    </div>
    <div class="col-lg-2 col-md-6">
       <label id="startlabel" style="font-family: 'Quicksand'; font-size: 12px;">Start Date</label>
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
<div class="container px-4 my-3">
  <div class="row gx-2 justify-content-end">
    <div class="col-lg-8  col-md-6">
    </div>
    <div class="col-lg-2 col-md-6">
    </div>
    <div class="col-lg-2 col-md-6 pt-3">
      <button type="button" class="btn btn-outline-dark btn-sm mb-4  px-2 px-0 w-generate" id="gen">Generate</button>
    </div>
  </div>
</div>
<!-- END CONT -->

<!-- <div class="d-lg-flex">


<?php
$station_type = Session::get("station_type"); 
?>

 

</div> -->
   <!-- <div class="row card-body pt-4 pb-0 pr-0 px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group">
    <button type="button" class="btn btn-outline-dark mb-2 w-100">Generate</button>
    </div>
   </div>  -->
   <!-- <div class="row card-body pt-3 pb-0  px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group justify-content-end text-end">
    <button type="button" class="btn btn-outline-dark btn-sm mb-2 px-0 w-generate" id="gen">Generate</button>
    </div>

   </div> --> 
   <?php
   if($station_type != "Main Station"){
      echo "<div class='row card-body pt-0  px-3 row-cols-5 justify-content-start pb-0' style='height: 75px;'>
     <div class='form-group justify-content-end text-end p-0 m-0'>
      <button type='button' class='btn btn-outline-warning btn-sm mb-2 px-0 w-generate' data-bs-toggle='modal' data-bs-target='#trigger' class='cursor-pointer' id='mForward' hidden>Forward Multiple Files</button>
      </div>
     </div>";
   }
   ?>
</div>
  <div class="table-responsive mx-3 px-3 pb-5">
    <table class="table align-items-center mb-0 py-2" id="example4" >
      <thead>
        <tr>
          <th class="text-uppercase text-xxs font-weight-bolder">In-charged</th>
          <th class="text-uppercase text-xxs text-center font-weight-bolder ps-2">Case Number</th>
          <th class="text-uppercase text-xxs text-center font-weight-bolder">Date and Time</th>
          <th class="text-center text-uppercase text-xxs font-weight-bolder">Remarks</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for($m=0; $m<count($this->getBlotter); $m++){
          if($cur_station1 == $this->getBlotter[$m]['station_id']){
              $id_temp = $this->getBlotter[$m]['id'];
            ?>
            
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-pointer" onclick='addInfo("<?php echo $this->getBlotter[$m]['id'] ?>")'>

              <?php
              echo "<td >
                <div class='d-flex px-2 py-1'>
                  <div>";
                  for($n=0; $n<count($this->getUser); $n++){
                    if($this->getUser[$n]['id'] == $this->getBlotter[$m]['d_policeuser']){
                      $pic = $this->getUser[$n]['image']; 
                      ?>
                        <img src="<?php echo ($pic =='') ? "public/img/bruce-mars.jpg" : "uploads/profile_image/".$pic ?>" class="avatar avatar-sm me-3">
                  <?php    echo "</div>
                  <div class='d-flex flex-column justify-content-center'>
                  <h6 class='mb-0 text-xs'>".$this->getUser[$n]['fullname']."</h6>
                      <p class='text-xs text-secondary mb-0'>".$this->getUser[$n]['email']."</p>";
                    }
                  }
                  echo "</div>
                </div>
              </td>
              <td>
                <p class='text-xs text-center font-weight-bold mb-0'>".$this->getBlotter[$m]['id']."</p>
              </td>
              <td class='align-middle text-center'>
                <span class='text-secondary text-xs font-weight-bold'>".$this->getBlotter[$m]['dt_reported']."</span>
              </td>
              <td>";
              if($this->getBlotter[$m]['remarks']==0){
                echo "<div class='text-secondary text-xs text-center font-weight-bold'>Not Forwarded</div>";
              }
              else{
                echo "<div class='text-secondary text-xs text-center font-weight-bold'>Forwarded</div>";
              }
              echo "</td>
            </tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
    <!-- END -->
     <!-- Modal FOR MAIN STATION-->
              <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Open Sans'; font-size: 15px; font-family: 'Open Sans', sans-serif;">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content modal-xl px-4">
                      <div class="row row-cols-5 p-2 px-3 justify-content-end">
                          <div class="form-group pr-5 pt-2 m-0 text-end">
                          <button type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                      </div>
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Case Number 18271626712167</h6>
                           <div>
                            <a class="btn bg-gradient-danger btn-sm mb-0 me-0 mx-1" id="downloadBtn">PDF</a>
                           <a class="btn bg-gradient-secondary btn-sm mb-0 me-0 px-4" target="_blank" id="Print">Print</a>
                           <a class="btn bg-gradient-success btn-sm mb-0 me-0 mx-2" id="forward_button" onclick="inForward()" hidden>Forward</a></div>
                      </div>
                      <div class="modal-body" id="printThis">
                      <div class="row">
                        <h3 class="text-center my-3 pb-3">INCIDENT RECORD FORM</h3>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> IRF ENTRY NUMBER: </span> <br> <label class="font-weight-normal m-0" id="0"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> TYPE OF INCIDENT: </span> <br> <label class="font-weight-normal m-0" id="1"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> COPY FOR: </span> <br> <label class="font-weight-normal m-0" id="2"></label></label>
                        </div>
                        <p class="mb-0 py-2" style="font-size: 12px;" style="border-style: solid; border-width: thin;">INSTRUCTIONS: Refer to PNP SOP on 'Recording of Incidents in the Police Blotter' in filling up this form. This Incident Record Form (IRF) may be reproduced, photocopied, and/or downloaded from the DIDM website, www.didm.pnp.gov.ph.</p>
                     </div>
                     <div class="row mt-2 mb-2" style="border-style: solid; border-width: thin;">
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> DATE AND TIME REPORTED: </span> <br><label class="font-weight-normal m-0" id="3"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> DATE AND TIME OF INCIDENT: </span><br><label class="font-weight-normal m-0" id="4"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> PLACE OF INCIDENT: </span><br><label class="font-weight-normal m-0" id="5"></label><label hidden id="6"></label></label>
                           <div class="pb-2">        
                           </div>                        
                        </div>
                      </div>
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="background-color: #d6d6d6; font-size: 30px; font-color: red;" >ITEM "A" - REPORTING PERSON</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FAMILY NAME: </span><br><label class="font-weight-normal m-0" id="7"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FIRST NAME: </span><br><label class="font-weight-normal m-0"  id="8"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs"> MIDDLE NAME:   </span><br><label class="font-weight-normal m-0"  id="9"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">NICKNAME:   </span><br><label class="font-weight-normal m-0" id="10"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">CITIZENSHIP:  </span><br><label class="font-weight-normal m-0" id="11"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">SEX/GENDER: </span><br><label class="font-weight-normal m-0" id="12"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">CIVIL STATUS:  </span><br><label class="font-weight-normal m-0" id="13"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">DATE OF BIRTH: </span><br><label class="font-weight-normal m-0" id="14"></label></label>
                        </div>
                        <div class="col-12 col-sm-1 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">AGE:  </span><br><label class="font-weight-normal m-0" id="15"></label></label>
                        </div>                        
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">MOBILE PHONE:  </span><br><label class="font-weight-normal m-0" id="17"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">PLACE OF BIRTH:  </span><br><label class="font-weight-normal m-0" id="16"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">OCCUPATION:  </span><br><label class="font-weight-normal m-0" id="28"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">ID CARD PRESENTED:  </span><br><label class="font-weight-normal m-0" id="29"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">CURRENT ADDRESS:  </span><br><label class="font-weight-normal m-0" id="18"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">VILLAGE/SITIO:  </span><br><label class="font-weight-normal m-0" id="19"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">BARANGAY:  </span><br><label class="font-weight-normal m-0" id="20"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">TOWN/CITY:  </span><br><label class="font-weight-normal m-0" id="21"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="22"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">OTHER ADDRESS:  </span><br><label class="font-weight-normal m-0" id="23"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">VILLAGE/SITIO:  </span><br><label class="font-weight-normal m-0" id="24"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">BARANGAY:  </span><br><label class="font-weight-normal m-0" id="25"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">TOWN/CITY:  </span><br><label class="font-weight-normal m-0" id="26"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="27"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OF ITEM B -->
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="background-color: #d6d6d6; font-size: 30px; font-color: red;">ITEM "B" - SUSPECT'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FAMILY NAME:  </span><br><label class="font-weight-normal m-0" id="30"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FIRST NAME:  </span><br><label class="font-weight-normal m-0" id="31"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">MIDDLE NAME:  </span><br><label class="font-weight-normal m-0" id="32"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">NICKNAME:  </span><br><label class="font-weight-normal m-0" id="33"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">CITIZENSHIP: </span><br><label class="font-weight-normal m-0" id="34"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">SEX/GENDER:  </span><br><label class="font-weight-normal m-0" id="35"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">CIVIL STATUS:  </span><br><label class="font-weight-normal m-0" id="36"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">DATE OF BIRTH:  </span><br><label class="font-weight-normal m-0" id="37"></label></label>
                        </div>
                        <div class="col-12 col-sm-1 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">AGE: </span><br><label class="font-weight-normal m-0" id="38"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">MOBILE PHONE:  </span><br><label class="font-weight-normal m-0" id="40"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PLACE OF BIRTH:  </span><br><label class="font-weight-normal m-0" id="39"></label></label>
                        </div>
                         <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">OCCUPATION:   </span><br><label class="font-weight-normal m-0" id="51"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-4 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">RELATION TO VICTIM:   </span><br><label class="font-weight-normal m-0" id="52"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label> <span class="text-xs">UNDER THE INFLUENCE?   </span><br><label class="font-weight-normal m-0" id="53"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">CURRENT ADDRESS:  </span><br><label class="font-weight-normal m-0" id="41"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">VILLAGE/SITIO:  </span><br><label class="font-weight-normal m-0" id="42"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">BARANGAY:  </span><br><label class="font-weight-normal m-0" id="43"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">TOWN/CITY:  </span><br><label class="font-weight-normal m-0" id="44"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="45"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">OTHER ADDRESS:   </span><br><label class="font-weight-normal m-0" id="46"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">VILLAGE/SITIO:   </span><br><label class="font-weight-normal m-0" id="47"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">BARANGAY:   </span><br><label class="font-weight-normal m-0" id="48"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">TOWN/CITY:   </span><br><label class="font-weight-normal m-0" id="49"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="50"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                       
                     </div>
                     <!-- END -->
                     
                     <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="background-color: #d6d6d6; font-size: 30px; font-color: red;">ITEM "C" - VICTIM'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FAMILY NAME:  </span><br><label class="font-weight-normal m-0" id="54"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">FIRST NAME:  </span><br><label class="font-weight-normal m-0" id="55"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">MIDDLE NAME:  </span><br><label class="font-weight-normal m-0" id="56"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">NICKNAME:  </span><br><label class="font-weight-normal m-0" id="57"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">CITIZENSHIP: </span><br><label class="font-weight-normal m-0" id="58"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">SEX/GENDER:  </span><br><label class="font-weight-normal m-0" id="59"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">CIVIL STATUS:  </span><br><label class="font-weight-normal m-0" id="60"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">DATE OF BIRTH:  </span><br><label class="font-weight-normal m-0" id="61"></label></label>
                        </div>
                        <div class="col-12 col-sm-1 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">AGE:  </span><br><label class="font-weight-normal m-0" id="62"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label>MOBILE PHONE:  <span class="text-xs">
</span><br><label class="font-weight-normal m-0" id="64"></label></label>
                        </div>
                        <div class="col-12 col-sm-5 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PLACE OF BIRTH:  </span><br><label class="font-weight-normal m-0" id="63"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">WORK ADDRESS:  </span><br><label class="font-weight-normal m-0" id="76"></label></label>
                        </div>
<div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">OCCUPATION:  </span><br><label class="font-weight-normal m-0" id="75"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label>CURRENT ADDRESS:  <span class="text-xs">
</span><br><label class="font-weight-normal m-0" id="65"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">VILLAGE/SITIO:  </span><br><label class="font-weight-normal m-0" id="66"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">BARANGAY:  </span><br><label class="font-weight-normal m-0" id="67"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">TOWN/CITY:  </span><br><label class="font-weight-normal m-0" id="68"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="69"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">OTHER ADDRESS:  </span><br><label class="font-weight-normal m-0" id="70"></label></label>
                        </div>
                        <div class="col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">VILLAGE/SITIO:  </span><br><label class="font-weight-normal m-0" id="71"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">BARANGAY:  </span><br><label class="font-weight-normal m-0" id="72"></label></label>
                        </div>
                        <div class="col-sm-2 p-2"style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">TOWN/CITY:  </span><br><label class="font-weight-normal m-0" id="73"></label></label>
                        </div>
                        <div class="col-sm-2 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PROVINCE:  </span><br><label class="font-weight-normal m-0" id="74"></label></label>
                        </div>
                        
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        
                     </div>
                     <!-- END -->
                     <!-- START OF ITEM B -->
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold " style="background-color: #d6d6d6; font-size: 30px;"><span style="font-color:black;">ITEM "D" - NARRATIVE OF INCIDENT</span></p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">TYPE OF INCIDENT:  </span><br><label class="font-weight-normal m-0" id="79"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">DATE & TIME OF INCIDENT:  </span><br><label class="font-weight-normal m-0" id="80"></label></label>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                           <label><span class="text-xs">PLACE OF INCIDENT:  </span><br><label class="font-weight-normal m-0" id="81"></label></label>
                        </div>

                        <div class="col-12 col-LG-4 mt-3 p-2" style="border-style: solid; border-width: thin;">
                          <div style="height: auto;">
                            <p class="text-sm">ENTER IN DETAIL NARRATIVE OF THE INCIDENT OR EVENT, ANSWERING THE WHO, WHAT, WHEN, WHERE, AND WHY AND HOW OF REPORTING</p>
                            <div style="height: auto; overflow: auto; width: 100%;"><label id="77"></label></div>
                          </div>
                        </div>

                        <label class="py-3">(DETAILS OF THIS NARRATIVE SHALL BE THE BASIS IN THE ENTRY OF RECORD IN THE POLICE BLOTTER)</label>                       
                     </div>
                     <div class="row">
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin; background-color: #b8b8b8;">
                           <label>I HEREBY CERTIFY TO THE CORRECTNESS OF THE FOREGOING TO THE BEST OF MY KNOWLEDGE AND BELIEF.</label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin;">
                            <label>NAME OF REPORTING PERSON<br>  <label id="82"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                            <label>SIGNATURE OF REPORTING PERSON</label>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin; background-color: #b8b8b8;">
                           <label>SUBSCRIBED AND SWORN TO BEFORE ME.</label>
                        </div>
                        <div class="col-12 col-sm-4 p-2" style="border-style: solid; border-width: thin; height: 100px;">
                            <label>NAME OF ADMINISTERING OFFICER (DUTY OFFICER) <label class="font-weight-normal m-0" id="78"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-sm-0 p-2" style="border-style: solid; border-width: thin;">
                            <label>SIGNATURE OF ADMINISTERING OFFICER (DUTY OFFICER)</label>
                        </div>  
                      </div>
                       <div class="text-center py-3 mb-2 pb-0">
                           <label>REMINDER TO REPORTING PERSON <br>
Keep the copy of this Incident Record Form (IRF). An update of the progress of the investigation of the crime or incident that you reported <br> will be given to you upon presentation of this IRF. For your reference, the data below is the contact details of this police station.</label>
                        </div>
                        <div class="row">
                        <div class="col-sm-6 py-2" style="border-style: solid; border-width: thin; background-color: #b8b8b8;">
                           <label style="font-size: 11px; ">Name of Police Station:  <label class="font-weight-normal m-0" id="84"></label></label>
                        </div>
                        <div class="col-sm-6 py-2" style="border-style: solid; border-width: thin;">
                           <label style="font-size: 11px;">Telephone: <label class="font-weight-normal m-0" id="85"></label></label>
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
</div>
  <!-- Modal Trigger -->
<div class="modal fade" id="trigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="trigger">Forward Multiple Blotter Case</h6>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive mx-3 px-3">
           <div class="row card-body pt-3 pb-0  px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group justify-content-end text-end">
    <button type="button" class="btn bg-gradient-success btn-sm mb-2 px-0 w-85" id="allForward" hidden>Forward</button>
    </div>

   </div> 
   <table class="table align-items-center mb-0 py-2 pb-4" id="example6">
  <thead>
    <tr>
      <th class="text-uppercase text-xs font-weight-bolder px-2" style="width: 26px;"><input type="checkbox" id="select-all">  Select All</th>
      <th class="text-uppercase text-xs font-weight-bolder">In-charged</th>
      <th class="text-uppercase text-xs font-weight-bolder ps-2">Case Number</th>
      <th class="text-center text-uppercase text-xs font-weight-bolder">Date and Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
      for($f=0; $f<count($this->getmForward); $f++){
        if($cur_station1 == $this->getmForward[$f]['station_id']){
          for($g=0; $g<count($this->getUser); $g++){
            if($this->getmForward[$f]['d_policeuser']==$this->getUser[$g]['id']){
              echo "<tr>
                <td><input type='checkbox' class='checkbox' value='".$this->getmForward[$f]['id']."'></td>
                <td>
                  <div class='d-flex px-2 py-1'>
                    <div class='d-flex flex-column justify-content-center'>
                      <h6 class='mb-0 text-xs font-weight-bolder text-uppercase'>".$this->getUser[$g]['fullname']."</h6>
                      <p class='text-secondary mb-0  text-xs font-weight-bolder'>".$this->getUser[$g]['email']."</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class='font-weight-bold mb-0  text-xs font-weight-bolder text-uppercase'>".$this->getmForward[$f]['id']."</p>
                </td>
                <td class='align-middle text-center'>
                  <span class='text-secondary text-xs font-weight-bold'>".$this->getmForward[$f]['dt_reported']."</span>
                </td>
              </tr>";
            }
          }
        }
      }
    ?>
  </tbody>
</table>

  </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
  <!-- Swal plugin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- jQuery -->
  <script src="<?php echo URL;?>public/plugins/jquery/jquery.min.js"></script>
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo URL;?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo URL;?>public/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo URL;?>public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
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
<!-- <script src="<?php echo URL;?>public/js/plugins/printThis.json"></script>
<script src="<?php echo URL;?>public/js/plugins/printThis.js"></script> -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Components -->
<script src="<?php echo URL;?>public/js/components/admin_libraries.js"></script>
<!-- PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>



<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script>
  AOS.init();
</script>
<script>
  //YEAR DROPDOWN
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
select.value = new Date().getFullYear();

  $(document).ready(function () {
    $('#example9').DataTable();
});

  var nav_subname = document.getElementById("nav_subname");
    nav_subname.textContent = "Library";

    var nav_name = document.getElementById("nav_name");
    nav_name.textContent = "Library";
</script> 
<script>

   $(function () {
  $("#example4").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [

      { extend: "excel", className: "btn p-1 px-3 btn-dark" },
      { extend: "pdf", className: "btn p-1 px-3 btn-dark" },
      { extend: "print", className: "btn p-1 px-3 btn-dark" },
      { extend: "csv", className: "btn p-1 px-3 btn-dark" }

    ]
  }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');

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

  $(function () {
    $("#example6").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "csv"]
    }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');
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

  document.getElementById("Print").onclick = function () {
    printElement(document.getElementById("printThis"));
};

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}

  // Select all checkboxes
const selectAll = document.getElementById('select-all');
const checkboxes = document.querySelectorAll('.checkbox');
selectAll.addEventListener('click', () => {
  checkboxes.forEach((checkbox) => {
    checkbox.checked = selectAll.checked;
  });
});

// Check if all checkboxes are checked
function checkIfAllChecked() {
  var allChecked = true;
  checkboxes.forEach((checkbox) => {
    if (!checkbox.checked) {
      allChecked = false;
    }
  });
  selectAll.checked = allChecked;
}

// Add event listeners to each checkbox
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('click', checkIfAllChecked);
});

// Add event listener to each checkbox
// checkboxes.forEach((checkbox) => {
//   checkbox.addEventListener('change', () => {
//     // Get all checked checkboxes
//     const checkedCheckboxes = document.querySelectorAll('table tbody input[type="checkbox"]:checked');
    
//     // Loop through checked checkboxes and log their values
//     checkedCheckboxes.forEach((checkedCheckbox) => {
//       console.log(checkedCheckbox.value);
//     });
//   });
// });

// PRINT PDF

   // Define the download button click event handler
  document.getElementById("downloadBtn").addEventListener("click", function() {
  // Get the modal content element
  var modalBody = document.querySelector("#exampleModal .modal-body");
  // Use html2canvas to create a canvas from the modal content element
  var pdfAspectRatio = 2; // aspect ratio of legal-sized page
  var canvas = document.createElement("canvas");
  canvas.width = modalBody.offsetWidth;
  canvas.height = canvas.width / pdfAspectRatio;
  // Use html2canvas to create a canvas from the modal body element
  html2canvas(modalBody, { scale: 2 }).then(function(canvas) {
    // Use jsPDF to create a PDF document and add the canvas as an image
    window.jsPDF = window.jspdf.jsPDF;
    var doc = new jsPDF({
      format: 'legal',
      orientation: 'portrait',
      unit: 'cm',
      marginLeft: 1,
      marginRight: 1,
      marginTop: 1,
      marginBottom: 1
    });
    doc.addImage(
      canvas.toDataURL('image/jpeg', 1.0),
      'JPEG',
      1, // x position
      1, // y position
      doc.internal.pageSize.getWidth() - 2, // width (subtracting the left and right margins)
      doc.internal.pageSize.getHeight() - 2 // height (subtracting the top and bottom margins)
    );

    // Save the PDF document
    doc.save("CaseNo.pdf");
  });
});


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