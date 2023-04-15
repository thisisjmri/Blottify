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
  <link id="pagestyle" href="<?php echo URL;?>public/css/adminlte.css" rel="stylesheet" />
    <!-- DataTables -->
  <link id="pagestyle" href="<?php echo URL;?>public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo URL;?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<style>
* {
  box-sizing: border-box;
}
  @page { size: auto;  margin: 2mm; }
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
}@media screen {
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
  <aside class="bg-white sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
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
          <a class="nav-link bg-gradient-dark active" href="<?php echo URL;?>dashboardss">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Dashboard</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>blotter">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter</span>
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
                echo "<li class='nav-item py-2 cursor-pointer' onClick='setActive(".$this->getStation[$f]['id'].",0)'>
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
                echo "<li class='nav-item py-2 cursor-pointer' onClick='setActive(".$this->getStation[$f]['id'].",1)'>
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
   <!-- NAVIGATION BAR -->
      <div class="page-header min-height-150 border-radius-xl mt-4 mx-4" style="background-image: url('public/img/curved-images/curved101.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-dark opacity-3"></span>
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
              <a class="btn  bg-gradient-dark btn-sm mb-0 me-3" target="_blank" href="blotter">Add Blotter</a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a  href="javascript:;" class="nav-link p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none p-0 pb-0 pe-2 text-bold">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo URL;?>profile_user">
                    <div class="d-flex py-1">
                      <div class="my-auto avatar avatar-lg position-relative">
                        <?php 
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getUser); $i++){
                                if($this->getUser[$i]['id'] == $admin_id){
                                  $pic = $this->getUser[$i]['image'];
                                }
                              } 
                            ?>
              <img src="<?php echo ($pic =='') ? "url('public/img/bruce-mars.jpg')" : "uploads/profile_image/".$pic ?>" alt="profile_image" class="w-100 avatar avatar-lg me-3" style="object-fit: cover; width: 100%; height: 100%;">
                      </div>
                      <div class="d-flex flex-column justify-content-start">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">
                            <?php 
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
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getUser); $i++){
                                if($this->getUser[$i]['id'] == $admin_id){
                                  for ($j=0; $j <count($this->getRank); $j++) { 
                                    if ($this->getUser[$i]['rank'] == $this->getRank[$j]['id']) {
                                      echo $this->getRank[$j]['rank_name'];
                                    }
                                  }
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

            <li class="nav-item d-xl-none ps-3 px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <?php

            $station_type = Session::get("station_type");
            if ($station_type == "Main Station") {
              echo "<li class='nav-item dropdown pe-2 d-flex align-items-center'>
                    <a href='javascript:;' class='nav-link text-body p-0' id='dropdownMenuButton' data-bs-toggle='dropdown' aria-expanded='true'>
                      <i class='fa fa-bell cursor-pointer' id='bell'></i>
                      <span class='position-absolute top-0 start-100 translate-middle bg-danger' id='notification-badge'>
                      <span class='visually-hidden'>unread messages</span>
                    </span>
                    </a>
                    <ul class='dropdown-menu dropdown-menu-end  px-2 py-3 me-sm-n4 z-index-sticky position-absolute z-index-5' id='notifications-container' aria-labelledby='dropdownMenuButton'>
                    </ul>

                  </li>";
            }

            ?>
          </ul>
        </div>
      </div>

    </nav>

    <!-- LABEL PER STATION -->
    <div class="container-fluid py-4" style="font-family: 'Quicksand';font-size: 16px;">
      <div class="row">
          <div class="col-12">
   <div class="card">
      <div class="card-body p-3">
         <div class="row">
             <div class="col-lg-3 col-6 text-center">
               <div class=" border-secondary border-radius-md py-4">
                <h4 class=" text-lg"><span class="small"></span><span >Welcome Back,</span></h4>
                  <h5 style="font-family: 'Quicksand'; color: #174e91;" class="mb-0 text-lg">
                    <?php 
                      $admin_id = Session::get("admin_id");
                      for($i=0; $i<count($this->getUser); $i++){
                        if($this->getUser[$i]['id'] == $admin_id){
                          echo $this->getUser[$i]['fullname'];
                        }
                      } 
                    ?>
                  </h5>
                  <p class="text-sm m-0 text-bold pt-2">
                    <?php 
                      $admin_id = Session::get("admin_id");
                      for($i=0; $i<count($this->getUser); $i++){
                        if($this->getUser[$i]['id'] == $admin_id){
                          for ($j=0; $j <count($this->getRank); $j++) { 
                            if ($this->getUser[$i]['rank'] == $this->getRank[$j]['id']) {
                              echo $this->getRank[$j]['rank_name'];
                            }
                          }
                        }
                      } 
                    ?>
                  </p>
               </div>
            </div>
            <div class="col-lg-3 col-6 text-center">
               <div class="border-dashed border-1 border-secondary border-radius-md py-3" style="height: 150px;">
                <h4 class="font-weight-bolder" style="color: #174e91"><span class="small"></span><span id="state1" countto="23980">
                  <?php 
                    $count = 0;
                    $station = Session::get("station_id");
                    $stationtype = Session::get("station_type");
                    $statname;
                    $admin_id = Session::get("admin_id");

                    for ($i=0; $i <count($this->getStation); $i++) { 
                      if ($this->getStation[$i]['id'] == $station){
                        $statname = $this->getStation[$i]['station_name'];
                      }
                    }



                    for ($n=0; $n <count($this->getUser); $n++) { 
                      if ($this->getUser[$n]['id'] == $admin_id) {
                        for ($m=0; $m <count($this->getStation); $m++) { 
                          if ($this->getUser[$n]['station_id'] == $this->getStation[$m]['id']) {
                            if ($this->getStation[$m]['station_type'] == "Main Station") {
                              for ($t=0; $t <count($this->getBlotter2); $t++) { 
                                $count++;
                              }
                              echo $count;
                              echo "</span></h4>
                                      <h6 class='text-dark text-gradient mb-0 text-sm'>Overall data on encoded blotter entries for the year ".date('Y')."</h6>
                                    </div>";
                            }
                            else {
                              for ($g=0; $g <count($this->getCountSubstat); $g++) { 
                                $count++;
                              }
                              echo $count;
                              echo "</span></h4>
                                      <h6 class='text-dark text-gradient mb-0 text-sm'>Blotter from ".$statname."</h6>
                                    </div>";
                            }
                          }
                        }
                      }
                    }

                  ?>
            </div>
            <div class="col-lg-3 col-6 text-center">
               <div class="border-dashed border-1 border-secondary border-radius-md py-3" style="height: 150px;">
                <h4 class="font-weight-bolder" style="color: #174e91"><span class="small"></span><span id="state1" countto="23980">
                  <?php 
                    $count = 0;
                    $admin_id = Session::get("admin_id");
                    for($i=0; $i<count($this->getBlotter); $i++){
                      if($this->getBlotter[$i]['d_policeuser'] == $admin_id){
                        $count++;
                      }
                    } 
                    echo $count;
                  ?>
                </span></h4>
                  <h6 class="text-dark text-sm text-gradient mb-0">My Encoded Blotter 
                     <?php 
                    //   $admin_id = Session::get("admin_id");
                    //   for($i=0; $i<count($this->getUser); $i++){
                    //     if($this->getUser[$i]['id'] == $admin_id){
                    //       echo $this->getUser[$i]['fullname'];
                    //     }
                    //   } 
                     ?>
                    </h6>
               </div>
            </div>
             <div class="col-lg-3 col-6 text-center">
               <div class="border-dashed border-1 border-secondary border-radius-md py-3" style="height: 150px;">
                <h4 class="font-weight-bolder" style="color: #174e91"><span class="small"></span><span id="state1" countto="23980">
                    <?php 
                      $count = 0;
                      $admin_id = Session::get("admin_id");
                      $statid = Session::get("station_id");
                      for ($i=0; $i <count($this->getUser); $i++) { 
                        for ($j=0; $j <count($this->getStation) ; $j++) {
                          if ($this->getUser[$i]['id'] == $admin_id) {
                            if ($this->getUser[$i]['station_id'] == $this->getStation[$j]['id']){
                              if ($this->getStation[$j]['station_type'] == "Main Station") {
                                for ($g=0; $g <count($this->getBlotter2); $g++) { 
                                  if ($this->getBlotter2[$g]['remarks'] == 1) {
                                    $count++;
                                  }
                                }
                              }
                              else if ($this->getStation[$j]['station_type'] == "Sub Station") {
                                for ($g=0; $g <count($this->getBlotter2); $g++) { 
                                  if ($this->getBlotter2[$g]['station_id'] == $statid && $this->getBlotter2[$g]['remarks'] == 1) {
                                    $count++;
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    echo $count;
                    ?>
                </span></h4>
                  <h6 class="text-dark text-gradient text-sm mb-0">
                    <?php 
                      $admin_id = Session::get("admin_id");
                      $station = Session::get("station_id");
                      for ($i=0; $i <count($this->getUser); $i++) { 
                        for ($j=0; $j <count($this->getStation) ; $j++) {
                          if ($this->getUser[$i]['id'] == $admin_id) {
                            if ($this->getUser[$i]['station_id'] == $this->getStation[$j]['id']){
                              if ($this->getStation[$j]['station_type'] == "Main Station") {
                                echo "Blotter Reports Received From Sub Stations for the year ".date('Y');
                              }
                              else if ($this->getStation[$j]['station_type'] == "Sub Station") {
                                echo "Forwarded Blotter From ".$this->getStation[$j]['station_name']." To Main Station";
                              }
                            }
                          }
                        }
                      }
                    ?>
                  </h6>
               </div>
            </div>
          </div>
      </div>
   </div>
</div>

     
      <div class="row mt-2 justify-content-center">
             <div class="col-lg-12 px-4 mt-xl-0 mt-4">
      <div class="row mt-4">
         <div class="card px-0 h-100 ">
   <div class="card-header py-0 pt-3 text-center  px-3">
      <h6 class="mb-0 mb-2 text-capitalize px-3 mt-3">Summary Tagum City Crime Statistics</h6>
   </div>
   <div class="card-body p-3">
              <div class="bg-gradient-white border-radius-lg py-3 pe-1 mb-3">
                <div class="chart text-white">
                  <canvas id="chart-line" width="299" height="120" position="absolute" class="text-white chartjs-render-monitor">
                </div>
              </div>
            </div>
        </div>
      </div>
   </div>
   <div class="col-lg-12 mt-4 text-center">
      <div class="card text-center">
         <div class="card-header d-flex text-center pb-0 p-3">
            <h6 class="my-auto px-4 mt-3 ">Recent Encoded Blotter from this Station</h6>
         </div>
         <div class="table-responsive m-3 p-3">
    <table class="table align-items-center mb-0 py-0">
      <thead>
        <tr>
          <th class="text-uppercase text-xs font-weight-bolder">In-charged</th>
          <th class="text-uppercase text-xs font-weight-bolder ps-2">Case Number</th>
          <th class="text-center text-uppercase text-xs font-weight-bolder">Date and Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for($m=0; $m<count($this->getBlotter1); $m++){
            ?>
            
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-pointer" onclick='addInfo("<?php echo $this->getBlotter1[$m]['id'] ?>")'>

              <?php
              echo "<td >
                <div class='d-flex px-2 py-1'>
                  <div>";
                  for($n=0; $n<count($this->getUser); $n++){
                    if($this->getUser[$n]['id'] == $this->getBlotter1[$m]['d_policeuser']){
                      $pic = $this->getUser[$n]['image']; 
                      ?>
                        <img src="<?php echo ($pic =='') ? "public/img/bruce-mars.jpg" : "uploads/profile_image/".$pic ?>" class="avatar avatar-sm me-3" style="object-fit: cover; width: 100%; height: 100%;">
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
                <p class='text-xs text-center font-weight-bold mb-0'>".$this->getBlotter1[$m]['id']."</p>
              </td>
              <td class='align-middle text-center'>
                <span class='text-secondary text-xs font-weight-bold'>".$this->getBlotter1[$m]['dt_reported']."</span>
              </td>
              <td>
            </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

      </div>
   </div>


</div>

   <!-- LABEL PER STATION -->
    <div class="container-fluid py-4" style="font-family: 'Quicksand';font-size: 16px;">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card" >
          </div>
        </div>       
        <!-- INSERT HERE -->
      </div>
      <div class="row my-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">    
            <!-- INSERT MAIN -->
          </div>
        </div>
    </div>
  </div>

  <!-- data-bs-toggle='modal' data-bs-target='#notif_modal' -->

  <!-- Modal FOR NOTIFICATION -->
              <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-family: 'Open Sans'; font-size: 15px; font-family: 'Open Sans', sans-serif;">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content modal-xl px-4">
                      <div class="row row-cols-5 p-2 px-3 justify-content-end">
                          <div class="form-group pr-5 pt-2 m-0 text-end">
                          <button type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                      </div>
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Case Number 1</h6>
                           <div>
                            <a class="btn bg-gradient-danger btn-sm mb-0 me-0 mx-1" id="downloadBtn">PDF</a>
                           <a class="btn bg-gradient-secondary btn-sm mb-0 me-0 mx-1" id="Print">Print</a></div>
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

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Select2 -->
<script src="<?php echo URL; ?>public/plugins/select2/js/select2.full.min.js"></script>
 <!-- BAR CHART -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<!-- PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

<script src="<?php echo URL;?>public/js/components/dashboardss.js"></script>

     <script>
       // Define the download button click event handler
  document.getElementById("downloadBtn").addEventListener("click", function() {
    // Get the modal content element
    var modalContent = document.querySelector("#myModal .modal-content");

    // Use html2canvas to create a canvas from the modal content element
    html2canvas(modalContent).then(function(canvas) {
      // Use jsPDF to create a PDF document and add the canvas as an image
      var doc = new jsPDF();
      doc.addImage(canvas.toDataURL(), "PNG", 0, 0, doc.internal.pageSize.getWidth(), doc.internal.pageSize.getHeight());
      
      // Save the PDF document
      doc.save("modal.pdf");
    });
  });

  $(function () {
    $("#example4").DataTable({
      "responsive": true, "lengthChange": false, "searching": false, "autoWidth": false,
      "buttons": []
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


    // var nav_subname = document.getElementById("nav_subname");
    // nav_subname.textContent = "Library";

    // var nav_name = document.getElementById("nav_name");
    // nav_name.textContent = "Library";

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
<!-- <script>
  var link = document.getElementById("myLink");
  link.addEventListener("click", myFunction);

function myFunction() {
    window.location = "libraries";
}
</script> -->
</body>
</html>