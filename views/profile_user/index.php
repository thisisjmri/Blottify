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
  <link rel="apple-touch-icon" sizes="76x76" href="public/img/police_tagum.png">
  <link rel="icon" type="image/png" href="public/img/police_tagum.png">
  <title>
    User Profile
  </title>
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <!-- Nucleo Icons -->
  <link href="public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
<!--   <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
  <link href="public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
   <!-- Font Awesome -->
  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand';font-size: 16px;
  font-weight: bolder;
}
   .avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 120px;
  height: 120px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 14px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
<body class="g-sidenav-show bg-gray-100">
  <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="public/img/police_tagum.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> One Data. One Tagum </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
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
            <span class="nav-link-text ms-1">Dashboard</span>
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
            <span class="nav-link-text ms-1">Blotter</span>
          </a>
        </li>
<?php
$station_type = Session::get("station_type");
if($station_type == "Main Station"){
        echo "<li class='nav-item'>
                  <a class='nav-link' href='mapss'>
                    <div class='icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center'>
                      <svg width='12px' height='12px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <title>office</title>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class='color-background' d='M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z'/></svg>
                      </svg>
                    </div>
                    <span class='nav-link-text ms-1'>Maps</span>
                  </a>
                </li>";
}
?>
        <li class="nav-item">
          <input type="text" id="station_type" value="<?php echo $type = Session::get("station_type"); ?>" hidden>
          <a class="nav-link"  href="#" id="myLink">
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
              <a class="btn btn-outline-white btn-sm mb-0 me-3" target="_blank" href="">Add Blotter</a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="<?php echo URL;?>profile_user">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <?php 
                              Session::init();
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getAdmin); $i++){
                                if($this->getAdmin[$i]['id'] == $admin_id){
                                  $pic = $this->getAdmin[$i]['image'];
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
                              for($i=0; $i<count($this->getAdmin); $i++){
                                if($this->getAdmin[$i]['id'] == $admin_id){
                                  echo $this->getAdmin[$i]['fullname'];
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
                            for($i=0; $i<count($this->getAdmin); $i++){
                              if($this->getAdmin[$i]['id'] == $admin_id){
                                echo $this->getAdmin[$i]['rank'];
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
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
                        <?php 
                              Session::init();
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getAdmin); $i++){
                                if($this->getAdmin[$i]['id'] == $admin_id){
                                  $pic = $this->getAdmin[$i]['image'];
                                }
                              } 
                            ?>
              <img src="<?php echo ($pic =='') ? "url('public/img/bruce-mars.jpg')" : "uploads/profile_image/".$pic ?>" alt="profile_image" class="w-100 avatar avatar-lg me-3" style="object-fit: cover; width: 100%; height: 100%;">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">

              <h5 class="mb-1">
           <?php 
            Session::init();
            $admin_id = Session::get("admin_id");
            for($i=0; $i<count($this->getAdmin); $i++){
              if($this->getAdmin[$i]['id'] == $admin_id){
                echo $this->getAdmin[$i]['fullname'];
              }
            } 
              ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                            <?php 
                              Session::init();
                              $admin_id = Session::get("admin_id");
                              for($i=0; $i<count($this->getAdmin); $i++){
                                if($this->getAdmin[$i]['id'] == $admin_id){
                                  echo $this->getAdmin[$i]['rank'];
                                }
                              } 
                            ?>
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
                    <span class="ms-1"><?php echo $this->getBlotterCount[0]['count']; ?> Data Encoded</span>
                  </a>
                </li>
                <li class="nav-item px-1">
                  <a class="nav-link mb-0 px-0 py-1 "  aria-selected="false">
                    <svg style="color: red;" class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>location</title>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path class="color-background" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                    </svg>
                    <span class="ms-1"><?php  
                        for($i=0; $i<count($this->getAdmin); $i++){
                        if($this->getAdmin[$i]['id'] == $admin_id){
                           $station_id = $this->getAdmin[$i]['station_id'];

                           for($y=0; $y<count($this->getStation); $y++){
                            if($this->getStation[$y]['id'] == $station_id){
                               echo $this->getStation[$y]['station_name'];
                            }
                           }
                        }
                      } 
                      ?>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container-fluid py-4">
   <div class="row mt-3">
      <div class="col-12 col-md-6 col-xl-4">
         <div class="card h-100">
            <div class="card-header pb-0 p-3">
               <h6 class="mb-0">Profile Overview</h6>
            </div>
            <div class="text-center">
                  <div class="container">
                      <div class="avatar-upload mb-2">
                          <div style="left: 95px;" class="avatar-edit">
                              <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                              <label for="imageUpload"></label>
                              <div class="offset-sm-10 col-md-10">                            
                              </div>   
                          </div>
                          <?php $pic = $this->getAdmin1[0]['image']; ?>
                          <div style="left: 35px" class="avatar-preview">
                              <div id="imagePreview" style="background-image: <?php echo ($pic == '') ? "url('uploads/profile_image/bruce-mars.jpg')" : "url('uploads/profile_image/".$pic."')"?> ">
                              </div>
                          </div>

                      </div>
                  </div>
                </div>
                <h3 class="profile-username text-center"></h3>
                 <p class="text-muted text-center"></p>
                 <!-- /.card-header -->
              <div class="card-body">
                <p class="text-muted px-2"><span style="font-weight: bold; font-size: 15px;">Username:</span> <?php
                  echo $this->getAdmin1[0]['username']; 
                  ?></p>
                <p class="text-muted px-2"><span style="font-weight: bold; font-size: 15px;">Birthday:</span> <?php
                  echo $this->getAdmin1[0]['bday']; 
                  ?></p>
                <p class="text-muted px-2"><span style="font-weight: bold; font-size: 15px;">Station:</span> <?php  
                  for($i=0; $i<count($this->getAdmin); $i++){
                  if($this->getAdmin[$i]['id'] == $admin_id){
                     $station_id = $this->getAdmin[$i]['station_id'];

                     for($y=0; $y<count($this->getStation); $y++){
                      if($this->getStation[$y]['id'] == $station_id){
                         echo $this->getStation[$y]['station_name'];
                      }
                     }
                  }
                } 
                ?>
                </p>
                <p class="text-muted px-2"><span style="font-weight: bold;" style="font-weight: bold; font-size: 15px;">Email:</span>
                  <?php
                  echo $this->getAdmin1[0]['email']; 
                  ?>
                </p>
                <p class="text-muted px-2"><span style="font-weight: bold;" style="font-weight: bold; font-size: 15px;">Contact Number:</span>
                  <?php
                  echo $this->getAdmin1[0]['contact']; 
                  ?>
                </p>
                 <div class="form-group row p-3">
                 <button type="button" id="savePic" style="font-size: 11px;" class="btn bg-gradient-warning d-none">Save Changes</button>
                </div>
              </div>
         </div>
      </div>
      <!-- MODAL FOR BIOMETRICS -->
    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="text-gradient text-danger mt-4">Biometrics Verification Required!</h4>
              <p>Biometrics Verification Required</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn bg-gradient-warning">Proceed</button>
          </div>
        </div>
      </div>
    </div>
      <div class="col-12 col-md-6 col-xl-4 mt-md-0 mt-4">
         <div class="card h-100">
            <div class="card-header pb-0 p-3">
               <div class="row">
                  <div class="col-md-8 d-flex align-items-center">
                     <h6 class="mb-0">Update Profile Information</h6>
                  </div>
                  <div class="col-md-4 text-end">
                     <a href="javascript:;">
                     <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Profile" data-bs-original-title="Edit Profile"></i><span class="sr-only">Edit Profile</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="card-body p-3">
              <form>
                <div class="form-group row">
                    <div class="py-1">
                      <label>First Name</label>
                        <input type="text" class="form-control" id="firstName" value="<?php
                  echo $this->getAdmin1[0]['firstname']; 
                  ?>">
                      </div>
                      <div class="py-1">
                        <label>Middle Name</label>
                        <input type="text" class="form-control" id="middleName" value="<?php
                  echo $this->getAdmin1[0]['middlename']; 
                  ?>">
                      </div>
                      <div class="py-1">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="lastName" value="<?php
                  echo $this->getAdmin1[0]['lastname']; 
                  ?>">
                      </div>
                      <div class="py-1">
                        <label><span id="un">Username</span></span><span id="warn" style="color:red"></span></label>
                        <input class="form-control" type="hidden" id="husername">
                        <input type="text" class="form-control" id="username" value="<?php
                  echo $this->getAdmin1[0]['username']; 
                  ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="">
                        <label>Birthday</label>
                        <input type="date" class="form-control"  id="birthday" value="<?php
                  echo $this->getAdmin1[0]['bday']; 
                  ?>">
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="">
                      <label>Station</label>
                      <select class="form-control" id="station">
                             <?php 
                                for($a=0; $a<count($this->getStation); $a++){
                                  if($this->getAdmin1[0]['station_id']==$this->getStation[$a]['id']){
                                    echo "<option value='".$this->getStation[$a]['id']."' selected>".$this->getStation[$a]['station_name']."</option>";
                                  }
                                  else{
                                    echo "<option value='".$this->getStation[$a]['id']."'>".$this->getStation[$a]['station_name']."</option>";
                                  }
                                }
                              ?>
                           </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" value="<?php
                  echo $this->getAdmin1[0]['email']; 
                  ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" id="mobile" value="<?php
                  echo $this->getAdmin1[0]['contact']; 
                  ?>">
                      </div>
                    </div>
                    <div class="form-group row px-2">
                        <button type="button" id="saveInfo" class="btn bg-gradient-warning">Save Changes</button>
                    </div>
                 
                  </div>
                   </form>
               </div>
            </div>
            <div class="col-12 col-xl-4 mt-xl-0 mt-4">
               <div class="card h-100">
                  <div class="card-header pb-0 p-3">
                     <h6 class="mb-0">Change Password</h6>
                  </div>
                  <div class="card-body p-3">
                     <div class="tab-pane" id="settings">
                          <form class="form-horizontal"  style="font-size: 13px;">            
                              <p class="login-box-msg" style="font-size: 13px;">You are only one step a way from your new password</p>
                              <form method="post">
                              <div class="input-group mb-3">
                                <input type="password" id="current" class="form-control" placeholder="Present Password">
                              </div>
                              <div class="input-group mb-3">
                                <input type="password" id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="New Password" required>
                              </div>
                              <div id="message">
                                <h6>Password must contain the following:</h6>
                                <p id="letter" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid px-4 pt-1" style="font-size: 12px;">A <b>number</b></p>
                                <p id="length" class="invalid px-4 pt-1" style="font-size: 12px;">Minimum <b>8 characters</b></p>
                            </div>
                              <div class="input-group mb-3">
                                <input type="password" id="confirm" class="form-control" placeholder="Confirm New Password">
                              </div>
                               <div class="form-group row px-2">
                              <button type="button" id="savePass" class="btn bg-gradient-warning">Change Password</button>
                          </div>
                              </form>
                            </div>
                        </form>
                      </div>  
                  </div>
               </div>
            </div>
   </div>   
</div>



   
  <!--   Core JS Files   -->
  <script src="public/js/core/popper.min.js"></script>
  <script src="public/js/core/bootstrap.min.js"></script>
  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- Swal plugin -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- jQuery -->
<script src="public/plugins/jquery/jquery.min.js"></script>
<!-- Page specific script -->
<script src="public/plugins/chart.js/Chart.min.js"></script>
<script src="public/js/components/profile_user.js"></script>


<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
<script>
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
</body>
</html>