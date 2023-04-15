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
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>account_stations">
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
              <li class="nav-item d-flex align-items-center">
                 <a class="btn  bg-gradient-warning btn-sm mb-0 me-3" href="admin_blotter">Blotter Records</a>
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

<!--     <svg width="600" height="400">
  <g transform="translate(300,200)">
    <circle cx="0" cy="0" r="10" fill="red" stroke="black" stroke-width="2"/>
    <polygon points="0,-20 10,0 -10,0" fill="red" stroke="black" stroke-width="2"/>
    <g transform="translate(0,-30)">
      <rect x="-50" y="-20" width="100" height="40" fill="white" stroke="black" stroke-width="2"/>
      <text x="0" y="0" dominant-baseline="middle" text-anchor="middle">My Label</text>
    </g>
  </g>
</svg>
 -->
  
  <!-- list of accounts -->
  <div class="container-fluid my-3 py-3">
   <div class="row mb-5">
      <div class="col-lg-3 mt-3">
         <div class="card px-2 top-1">
            <ul class="nav flex-column bg-white border-radius-lg">
               <div class="table-responsive">
                 <table class="table align-items-center mb-0 px-0">
                    <thead class="text-center">
                       <tr>
                          <th class="text-uppercase text-xxs font-weight-bolder"><h6 class="my-3">Stations</h6> 
                          </th>
                       </tr> 
                    </thead>
                    <tbody>
                       <?php 
                          for($i=0; $i<count($this->getStation); $i++){

                            echo "<tr data-bs-toggle='modal' data-bs-target='#modal1' class='cursor-pointer' onclick='setStatinfo(".$this->getStation[$i]['id'].")'>";
                              echo "<td>";
                                echo "<div class='d-flex px-2 py-1'>";
                                  echo "<div>
                                         <svg class='text-dark mb-1' width='16px' height='16px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                         <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class='color-background' d='M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z'/></svg>
                                          </svg>
                                      </div>";
                                  echo "<div class='d-flex flex-column justify-content-center cursor-pointer'>
                                         <h6  class='mb-0 text-sm px-2' style='font-size: 8px;'>".$this->getStation[$i]['station_name']."</h6>
                                      </div>";
                                echo "</div>";
                              echo "</td>";
                            echo "</tr>";
                          } 
                        ?>
                    </tbody>
                 </table>

                 <div class="text-center card-footer mt-2"  style="padding-bottom: 25px; padding-top: 0px;"><a data-bs-toggle="modal" data-bs-target="#modalstation">
                 <button class="col-sm-12 btn bg-gradient-warning btn-sm mt-0 js-btn-next p-2"  type="button" title="Next">Add Station</button></a>
                  <a class="col-sm-12 btn bg-gradient-warning btn-sm mt-0 js-btn-next p-2"  type="button" title="Next" data-bs-toggle="modal" data-bs-target="#modalcrime">Add Crime</a></a>
                  </div>
              </div>
            </ul>
         </div>        
      </div>

      <div class="col-lg-9 mt-lg-0 mt-4">
         <div class="card mt-4" id="basic-info">
            <div class="card-header py-2">
              
            </div>
            <div class="card-body pt-0" style="font-family: 'Quicksand';font-size: 16px;">
              <!--  <form class="multisteps-form__form mb-2" style="height: auto;" onsubmit="return false">
                  <p class="mb-0 text-sm" style="font-family: 'Quicksand';font-size: 16px;">Please complete all required fields</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-4">
                           <label><span>First Name</span><span style="color:red"> *</span></label>
                           <input class="form-control" id="firstname" type="text" placeholder="First Name">
                        </div>
                        <div class="col-12 col-sm-4">
                           <label>Middle Name</label>
                           <input class="form-control" id="middlename" type="text" placeholder="Middle Name">
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                           <label><span>Last Name</span><span style="color:red"> *</span></label>
                           <input class="form-control" id="lastname" type="text" placeholder="Last Name">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                           <label><span>Police Station</span><span style="color:red"> *</span></label>
                           <select class="form-control" name="userstation" id="userstation">
                            <option value="" selected disabled></option>
                                <?php 
                                  for($i=0; $i<count($this->getStation); $i++){
                                    echo "<option value='".$this->getStation[$i]['id']."'>".$this->getStation[$i]['station_name']."</option>";
                                  } 
                                ?>
                        </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                           <label><span id="un">Username</span><span id="star" style="color:red"> *</span><span id="warn" style="color:red"></span></label>
                           <input class="form-control" type="text" placeholder="Username" id="user_name">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                           <label><span>Birthday</span><span style="color:red"> *</span></label>
                           <input class="form-control" type="date" id="bday">
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                           <label><span>Email Address</span><span style="color:red"> *</span></label>
                           <input class="form-control" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Email Address" id="email">
                        </div>
                     </div>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-6">
                           <label><span>Mobile Number</span><span style="color:red"> *</span></label>
                           <input class="form-control" type="text" pattern="9\d*" maxlength="11" minlength="11" placeholder="+63" id="contact">
                        </div>
                        <div class="col-12 col-sm-6">
                           <label><span>Sex</span><span style="color:red"> *</span></label>
                           <select class="form-control" name="sex" id="sex" placeholder="Departure">
                              <option value="" selected disabled></option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="row mt-3">
                      <div class="col-12 col-sm-12">
                           <label><span>Rank</span><span style="color:red"> *</span></label>
                           <input class="form-control" id="rank" type="text" placeholder="Rank">
                        </div>
                     </div>
                     <div class="button-row d-flex mt-4 justify-content-end">
                      <input class="form-control" type="hidden" id="husername">
                        <div class="first"><button type="button" onclick="smoothScroll(document.getElementById('second'))" class="btn bg-gradient-warning ms-auto mb-0 js-btn-next justify-content-end" type="submit" id="proceed">Proceed</button>
                     </div>
                     </div>
                      </form> -->
                      <div class="container px-0 mt-2">
                      <div class="row ">

                        <div class="col-lg-3 col-md-6">
                          <h5>Accounts</h5>
                        </div>

                        <div class="col-lg-3 col-md-6">

                        </div>

                        <div class="col-lg-3 col-md-6">

                        </div>

                        <div class="col-lg-3 col-md-6 pb-3">
                          <button type="button" class="btn btn-dark my-2 w-100">
                          <i class="fas fa-filter"></i> Filter
                        </button>
                        </div>

                      </div>
                    </div>

                      <!-- START -->
                      <div class="container px-0">
                        <div class="row">

                          <div class="col-lg-3 col-md-6">
                           
                          </div>

                          <div class="col-lg-3 col-md-6">
                          </div>

                          <div class="col-lg-3 col-md-6 px-0">
                           <label style="font-family: 'Quicksand'; font-size: 14px;"> Status</label>
                              <select class="form-select" id="ustatus">
                                <option value="all">All</option>
                               <option value="ACTIVE">Active</option>
                               <option value="INACTIVE">Inactive</option>
                             </select>
                          </div>

                          <div class="col-lg-3 col-md-6">
                          <label style="font-family: 'Quicksand'; font-size: 14px;"> Stations</label>
                              <select class="form-select" id="ustation">
                                <option value="all">All</option>
                                  <?php 
                                    for($i=0; $i<count($this->getStation); $i++){

                                      echo "<option value='".$this->getStation[$i]['id']."'>".$this->getStation[$i]['station_name']."</option>";
                                    } 
                                  ?>
                             </select>
                          </div>
                        </div>
                      </div>
                      <div class="container px-0 mt-2" >
                      <div class="row ">

                        <div class="col-lg-3 col-md-6">

                        </div>

                        <div class="col-lg-3 col-md-6">

                        </div>

                        <div class="col-lg-3 col-md-6">

                        </div>

                        <div class="col-lg-3 col-md-6">
                           <button type="button" class="btn btn-outline-dark my-2 w-100" id="gen">Generate</button>
                        </div>

                      </div>
                    </div>
   <div class="row card-body pt-1 pb-0 pr-0 px-0 row-cols-5 justify-content-end pb-0">
   <div class="form-group">
   
    </div>
   </div>

  <div class="table-responsive m-1 p-0 pt-0 mt-0">
    <table class="table align-items-center mb-0 py-2" id="example6" >
      <thead>
        <tr>
          <th class="text-uppercase text-sm font-weight-bolder">User</th>
          <th class="text-uppercase text-sm font-weight-bolder ps-2 text-end"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          for($i=0; $i<count($this->getUser); $i++){
            ?>
            <tr data-bs-toggle="modal" data-bs-target="#modal2" class="cursor-pointer" onclick="setStatus('<?php echo $this->getUser[$i]['id']?>n')">
          <td >
            <div class="d-flex px-2 py-1">
              <div>
                <?php $pic = $this->getUser[$i]['image']; ?>
                <img src="<?php echo ($pic =='') ? "public/img/bruce-mars.jpg" : "uploads/profile_image/".$pic ?>" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-sm"><?php echo $this->getUser[$i]['fullname']?></h6>
                <p class="text-sm text-secondary mb-0"><?php echo $this->getUser[$i]['email']?></p>
              </div>
            </div>
          </td>
          <td class="text-end text-xs">
          <?php 
          $bg = "bg-gradient-danger";
          if($this->getUser[$i]['status'] == "ACTIVE"){
            $bg = "bg-gradient-success";
          }
          ?>
              <span class="badge <?php echo $bg ?>"><?php echo $this->getUser[$i]['status']?></span>
          </td>
        </tr>
        <?php
          } 
        ?>
      </tbody>
    </table>

    <!-- END -->  
     <!-- Modal for Lafilipina-->
<div class="modal fade modal-sm" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header justify-content-center">
          <h6 class="modal-title text-center">Edit User Status</h6>
         </div>
          <div class="modal-body">
            <div class="card align-items-center justify-content-center border-bottom py-3">
            
            <div>
            <img src="public/img/marie.jpg" class="avatar avatar-xl" alt="profile-image" id="prof"><br>
        </div>
            <div class="mx-3 mt-3">
            <p class="text-dark font-weight-600 text-sm" id="uname"></p>
            <input type="text" id="uid" hidden>
       
            </div>
           
            </div>
            <div class="py-2">
              <label style="font-family: 'Quicksand'; font-size: 14px;">Edit Rank</label>
              <select class="form-select" id="erank" placeholder="Departure">
                <option value="" selected disabled></option>
                    <?php 
                      for($a=0; $a<count($this->getRank); $a++){
                        echo "<option value='".$this->getRank[$a]['id']."'>".$this->getRank[$a]['rank_name']."</option>";
                      }
                    ?>
                  </select>
                  <input type="hidden" id="currentRank" value="<?php echo $user['rank_id']; ?>">
              </div>
            <label style="font-family: 'Quicksand'; font-size: 14px;">Set Status</label>
              <select class="form-select" id="stat">
               <option value="ACTIVE" id="ACTIVE">Active</option>
               <option value="INACTIVE" id="INACTIVE">Inactive</option>
             </select>
             <div class="row px-3 py-3">
             <button class="btn bg-gradient-warning mb-0 me-3" onclick="saveStatus()">Save Changes</button></div>
          </div>
      </div>
   </div>
</div>
<!-- end for lapilipina -->


                      <!-- Modal for Edit Station-->
                      <div class="modal fade modal-sm" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                               <div class="modal-header justify-content-center">
                                <h6 class="modal-title text-center">Edit Information</h6>
                               </div>
                                <div class="modal-body">
                                     <div class="py-2">
                                  <label style="font-family: 'Quicksand'; font-size: 14px;">Station Name</label>
                                    <input class="form-control" type="text" id="station_name">
                                    </div>
                                     <div class="py-2">
                                  <label style="font-family: 'Quicksand'; font-size: 14px;">Station Address</label>
                                    <input class="form-control" type="text" id="station_location">
                                    </div>
                                      <div class="py-2">
                                      <label style="font-family: 'Quicksand'; font-size: 14px;">Station Type</label>
                                        <select class="form-select" id="station_type" placeholder="Departure">
                                        <option selected disabled>Station Type</option>
                                        <?php 
                                          if($this->getStationType[0]['id'] != null){
                                            echo "<option value ='Main Station' disabled>Main Station</option>";
                                          }
                                          else{
                                            echo "<option value='Main Station'>Main Station</option>";
                                          }
                                        ?>
                                         <option value="Sub Station">Sub Station</option>
                                       </select>
                                    </div>
                                   <div class="py-2">
                                  <label style="font-family: 'Quicksand'; font-size: 14px;">Station Number</label>
                                    <input class="form-control" type="text" id="station_number">
                                    </div>
                                   <div class="row px-3 py-4 pb-0 mb-2">
                                   <button class="btn bg-gradient-warning mb-0 me-3" onclick="saveStat()">Save Changes</button></div>
                                </div>
                            </div>
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
                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content ">
                      <div class="modal-header justify-content-between">
                        <h5 class="modal-title" id="exampleModalLabel">Police Stations</h5>
                         <div class="form-group pr-5 pt-2 m-0 justify-content-center">
                          <button type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                      </div>  
                      <div class="row-cols-6 justify-content-end text-end px-4 pt-3">    
                           <a href="stations" class="btn bg-gradient-warning btn-sm ms-auto mb-0 mt-0 js-btn-next p-2"  type="button" title="Next" data-bs-toggle="modal" data-bs-target="#minimodal">Add Station</a></div>
                          <div class="table-responsive m-4">
                            <table class="table align-items-center mb-3 p-0" id="example4">
                              <thead> 
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station Name</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Location</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station Type</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station Number</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                  for($i=0; $i<count($this->getStation); $i++){

                                    echo "<tr>";
                                    echo "<td><h6 class='mb-0 text-xs px-3'>".$this->getStation[$i]['station_name']."</h6></td>";
                                    echo "<td><h6 class='mb-0 text-xs px-3'>".$this->getStation[$i]['station_location']."</h6></td>";
                                    echo "<td><h6 class='mb-0 text-xs px-3'>".$this->getStation[$i]['station_type']."</h6></td>";
                                    echo "<td><h6 class='mb-0 text-xs px-3'>".$this->getStation[$i]['station_number']."</h6></td>";
                                    echo "</tr>";
                                  } 
                                ?>

                              </tbody>
                            </table>     
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- mini modal for station -->
                <div class="modal fade" id="minimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Add Police Station</h6>
                      </div>
                      <div class="modal-body">
                       <div class="mt-2 mb-2">
                        <div class="">
                           <label>Station Name</label>
                           <input class="multisteps-form__input form-control" id="stname" type="text" placeholder="Station's Name">
                        </div>
                     </div>   
                     <div class="mt-2 mb-2">
                        <div class="">
                           <label>Station Address</label>
                           <input class="multisteps-form__input form-control" id="staddress" type="text" placeholder="Station's Address">
                        </div>
                     </div>     
                     <div class="mt-2 mb-2">
                        <div class="">
                           <label>Station Type</label>
                           <select class="form-select" name="sttype" id="sttype" placeholder="Departure">
                            <option selected disabled>Station Type</option>
                             <option value="Main Station">Main Station</option>
                             <option value="Sub Station">Sub Station</option>
                           </select>
                        </div>
                     </div>
                     <div class="mt-2 mb-4">
                        <div class="">
                           <label>Station Number</label>
                           <input class="multisteps-form__input form-control" id="stanumber" type="text" placeholder="Station's Number">
                        </div>
                     </div>     
                     <div class="mt-2 mb-1">
                        <div class="text-end">
                           <button id="stsave" class="btn bg-gradient-warning btn-sm mt-0 js-btn-next p-2"  type="button" title="Next">Save Changes</button>
                        </div>
                     </div> 
                    </div>
                  </div>
                </div>
              </div>
                <!-- end for mini modal -->

                <!-- mini modal for crime type -->
                <div class="modal fade" id="modalcrime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Add Crime</h6>
                        <!-- <div class="form-group pr-5 pt-2 m-0 justify-content-center">
                          <button type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div> -->
                      </div>
                      <div class="modal-body">
                       <div class="mt-2 mb-2">
                        <div class="">
                           <label>Crime Type Name</label>
                           <input class="multisteps-form__input form-control" id="crime_name" type="text" placeholder="Crime Type Name">
                        </div>
                     </div>           
                     <div class="mt-2 mb-1">
                        <div class="text-end">
                           <button id="crisave" class="btn bg-gradient-warning btn-sm mt-3 js-btn-next p-2"  type="button" title="Next">Save Changes</button>
                        </div>
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
</div>
  </div>
  </div>
  <!-- jQuery -->
  <script src="<?php echo URL; ?>public/plugins/jquery/jquery.min.js"></script>
  <!-- Swal plugin -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  <script src="<?php echo URL;?>public/js/components/account_stations.js"></script>
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

  $(function () {
  $("#example6").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [

      { extend: "excel", className: "btn p-1 px-3 btn-dark" },
      { extend: "pdf", className: "btn p-1 px-3 btn-dark" },
      { extend: "print", className: "btn p-1 px-3 btn-dark" },
      { extend: "csv", className: "btn p-1 px-3 btn-dark" }

    ]
  }).buttons().container().appendTo('#example6_wrapper .col-md-6:eq(0)');

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