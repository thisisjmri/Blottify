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

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <div class="" id="sidenav-collapse-main">
      <ul class="navbar-nav">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
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
          <a class="nav-link bg-gradient-warning active" href="user_account">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg> </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Accounts & Stations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo URL;?>user_logs">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
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
                     <a class="dropdown-item border-radius-md" href="<?php echo URL;?>profile_user">
                        <div class="d-flex py-1">
                           <div class="my-auto">
                              <img src="../../public/img/bruce-mars.jpg" class="avatar avatar-sm me-3">
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

<head>


<!-- START -->
<div class="card mx-5 mb-5 mt-5" style="border-color: gray; border-width: thin;">
    <div class="card-header pb-0">
      <div class="m-3 p-3">

<div class="d-lg-flex">



<div class="w-3 pl-4 cursor-pointer"><a href="user_account">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z"/></svg></div></a>

<div class="row card-body pt-2 pb-3 mb-4 px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">         
   <div class="form-group px-0">
     <label style="font-family: 'Quicksand'; font-size: 14px;"> Status</label>
        <select class="form-select" id="ustatus">
          <option value="all">All</option>
         <option value="ACTIVE">Active</option>
         <option value="INACTIVE">Inactive</option>
       </select>
   </div>
   <div class="form-group">
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
   

   <div class="row card-body pt-1 pb-0 pr-0 px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group">
    <button type="button" class="btn btn-outline-dark mb-2 w-100" id="gen">Generate</button>
    </div>
   </div>

 </div>  

  <div class="table-responsive m-3 p-3 pt-0 mt-0">
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
            <tr data-bs-toggle="modal" data-bs-target="#modal1" class="cursor-pointer" onclick="setStatus('<?php echo $this->getUser[$i]['id']?>n')">
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
          <td class="text-end">
          <?php 
          $bg = "bg-gradient-danger";
          if($this->getUser[$i]['status'] == "ACTIVE"){
            $bg = "bg-gradient-success";
          }
          ?>
              <span class="badge badge-xs <?php echo $bg ?>"><?php echo $this->getUser[$i]['status']?></span>
          </td>
        </tr>
        <?php
          } 
        ?>
      </tbody>
    </table>
  </div>
</div>
    <!-- END -->  

   <!-- Modal for Lafilipina-->
<div class="modal fade modal-sm" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input class="form-control" type="text" id="erank">
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
  </div>
  </div>
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

<!-- Components -->
<script src="<?php echo URL;?>/public/js/components/stations.js"></script>


<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script>

  $(function () {
    $("#example6").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "csv"],
      "language": {
            "emptyTable": "No data available in table",
            "zeroRecords": "No matching records found"
        }
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

//   document.getElementById("Print").onclick = function () {
//     printElement(document.getElementById("printThis"));
// };

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