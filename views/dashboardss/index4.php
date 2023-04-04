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
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>dashboardss">
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
            <span class="nav-link-text ms-1">Blotter</span>
          </a>
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
   <!-- NAVIGATION BAR -->
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
              <a class="btn  bg-gradient-warning btn-sm mb-0 me-3" target="_blank" href="<?php echo URL;?>blotter">Add Blotter</a>
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

            <li class="nav-item d-xl-none ps-3 px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-bell cursor-pointer"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    9
    <span class="visually-hidden">unread messages</span>
  </span>
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

    <!-- LABEL PER STATION -->
    <?php
    echo "<div class='container-fluid py-4' style='font-family: Quicksand; font-size: 16px;'>";
      echo "<div class='row'>";
            echo "<div class='col-xl-3 col-sm-6 mb-xl-0 mb-4'>";
              echo "<div class='card' >";
                echo "<div class='card-body p-3'>";
                  echo "<div class='row'>";
                    echo "<div class='col-8'>";
                      echo "<div class='numbers'>";
                        echo "<p style='font-family: Quicksand;font-size: 16px;' class='text-sm mb-0 text-capitalize font-weight-bold'>Overall Data</p>";
                        echo "<h5 class='font-weight-bolder mb-0' style='font-family: Quicksand; font-size: 16px;'>";
                          
                          $count = 0;

                          for ($v=0; $v < count($this->getBlotter); $v++) { 
                            $count++;
                          }
                          echo $count;

                          echo "<span style='font-family: Quicksand;font-size: 16px;' class='text-warning text-gradient text-sm font-weight-bolder'> Encoded</span>";
                        echo "</h5>";
                      echo "</div>";
                    echo "</div>";
                    echo "<div class='col-4 text-end'>";
                      echo "<div style='background-color: #81E6D9;' class='icon icon-shape shadow bg-gradient-primary text-center border-radius-md'>";
                        echo "<i class=' text-lg opacity-10' aria-hidden'true'><svg class='text-white' width='20px' height='20px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>";
                         echo "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d='M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z'/></svg>";
                        echo "</i>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
            $colors = array("bg-gradient-primary","bg-gradient-warning","bg-gradient-success","bg-gradient-info");
            $colornum = 1;
        for ($s=0; $s < count($this->getStation); $s++) { 
          if ($colornum > 3) {
            $colornum = 0;
          }
          echo "<div class='col-xl-3 col-sm-6 mb-xl-0 mb-4'>";
            echo "<div class='card' >";
              echo "<div class='card-body p-3'>";
                echo "<div class='row'>";
                  echo "<div class='col-8'>";
                    echo "<div class='numbers'>";
                      echo "<p style='font-family: Quicksand;font-size: 16px;' class='text-sm mb-0 text-capitalize font-weight-bold'>".$this->getStation[$s]['station_name']."</p>";
                      echo "<h5 class='font-weight-bolder mb-0' style='font-family: Quicksand; font-size: 16px;'>";
                        
                        $count = 0;

                        for ($v=0; $v < count($this->getBlotter); $v++) { 
                          if ($this->getStation[$s]['id']==$this->getBlotter[$v]['station_id']) {
                            $count++;
                          }
                        }
                        echo $count;

                        echo "<span style='font-family: Quicksand;font-size: 16px;' class='text-warning text-gradient text-sm font-weight-bolder'> Encoded</span>";
                      echo "</h5>";
                    echo "</div>";
                  echo "</div>";
                  echo "<div class='col-4 text-end'>";
                    echo "<div style='background-color: #81E6D9;' class='icon icon-shape shadow ".$colors[$colornum]." text-center border-radius-md'>";
                      echo "<i class=' text-lg opacity-10' aria-hidden'true'><svg class='text-white' width='20px' height='20px' viewBox='0 0 42 42' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>";
                       echo "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d='M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z'/></svg>";
                      echo "</i>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        $colornum++;
        }
      echo "</div>";
    echo "</div>";
        ?>
        <!-- SECOND FILE -->
        

      <div class="row mt-2 justify-content-start">
   <div class="col-sm-6 mt-4">
      <div class="card">
         <div class="card-header d-flex pb-0 p-3">
            <h6 class="my-auto">Recent Encoded Blotter</h6>


         </div>
         <div class="table-responsive m-3 p-3">
    <table class="table align-items-center mb-0 py-0" id="example4" >
      <thead>
        <tr>
          <th class="text-uppercase text-xs font-weight-bolder">In-charged</th>
          <th class="text-uppercase text-xs font-weight-bolder ps-2">Case Number</th>
          <th class="text-center text-uppercase text-xs font-weight-bolder">Date and Time</th>
        </tr>
      </thead>
      <tbody>
        <tr data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-pointer">
          <td >
            <div class="d-flex px-2 py-1">
              <div>
                <img src="" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">John Michael</h6>
                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">#1727121217</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Richard Gran</h6>
                <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">#1727121217</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">Miriam Eric</h6>
                <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">#17621261621</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

      </div>
   </div>
   <div class="col-sm-6 px-4 mt-xl-0 mt-4">
<!--       <div class="row">
         <div class="col-12">
            <div class="card bg-gradient-warning">
               <div class="card-bod px-3">
                  <div class="row">
                     <div class="col-8 my-auto">
                        <div class="numbers">
                           <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">Welcome Back,</p>
                           <h5 class="text-white font-weight-bolder mb-0">
                              Johndy Bryll Angga!
                           </h5>
                        </div>
                     </div>
                     <div class="col-4 text-end">
                        <img class="w-100 p-0 m-0" src="public/img/illustrations/welcome.png" alt="image sun">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <div class="row mt-4">
         <div class="card px-0 h-100 ">
   <div class="card-header py-0 pt-3   px-3">
      <h6 class="mb-0 mb-2 text-capitalize">Tagum City Blotter Entries (by type of incident) //last week? this week?</h6>
   </div>
   <div class="card-body p-3">
              <div class="bg-gradient-white border-radius-lg py-3 pe-1 mb-3">
                <div class="chart text-white">
                  <canvas id="chart-line" width="299" height="200" position="absolute" class="text-white chartjs-render-monitor">
                </div>
              </div>
              <h6 class="ms-2 mt-4 mb-0"> Active Users </h6>
              <p class="text-sm ms-2"> (<span class="font-weight-bolder">+23%</span>) than last week </p>
              <div class="container border-radius-lg">
                <div class="row">
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>document</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(154.000000, 300.000000)">
                                  <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                  <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Users</p>
                    </div>
                    <h4 class="font-weight-bolder">36K</h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>spaceship</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(4.000000, 301.000000)">
                                  <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                  <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                  <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                  <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Clicks</p>
                    </div>
                    <h4 class="font-weight-bolder">2m</h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Sales</p>
                    </div>
                    <h4 class="font-weight-bolder">435$</h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-3 py-3 ps-0">
                    <div class="d-flex mb-2">
                      <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="10px" height="10px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>settings</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(304.000000, 151.000000)">
                                  <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                  <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                  <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <p class="text-xs mt-1 mb-0 font-weight-bold">Items</p>
                    </div>
                    <h4 class="font-weight-bolder">43</h4>
                    <div class="progress w-75">
                      <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
  <!--   Core JS Files   -->
  <script src="<?php echo URL;?>public/js/core/popper.min.js"></script>
  <script src="<?php echo URL;?>public/js/core/bootstrap.min.js"></script>
  <script src="<?php echo URL;?>public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo URL;?>public/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo URL;?>public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <!-- jQuery -->
<script src="<?php echo URL;?>public/plugins/jquery/jquery.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="<?php echo URL;?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo URL;?>public/plugins/public/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL;?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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


<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>

     <script>
      $(document).ready(function() {
          var ctx = $("#chart-line");
          var myLineChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ["Tagum City"],
                  datasets: [{
                      data: [86],
                      label: "Thief",
                      borderColor: "#cc8f5e",
                      backgroundColor:'#cc8f5e',

                      fill: false
                  }, {
                        data: [282],
                        label: "Rape",
                        borderColor: "#5ecc93",
                        fill: true,
                        backgroundColor:'#5ecc93'
                      
                  },{
                        data: [25],
                        label: "Missing",
                        borderColor: "#5e9bcc",
                        fill: true,
                        backgroundColor:'#5e9bcc'
                      
                  },{
                        data: [252],
                        label: "Crime 1",
                        borderColor: "#c8cc5e",
                        fill: true,
                        backgroundColor:'#c8cc5e'
                      
                  }, {
                      data: [168],
                      label: "Crime 2",
                      borderColor: "#cc5e76",
                      fill: false,
                      backgroundColor:'#cc5e76'
                      
                  }]
              },
              options: {
                  title: {
                      display: true,
                      text: 'A graph showing the summary of incident recorded on March 12 -  March 14, 2023',

                  }
              }
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

    $(document).ready(function (){

        $('.notification').load('dashboardss/getNotifs');
        // $.ajax({
        //   url:'dashboardss/getNotif',
        //    cache: false,
        //    success: function(server_reply) {
        //     console.log(server_reply);
        //    },
        //    error: function(xhr, status, error) {
        //    alert('Cannot do action: '+console.error(xhr));
        //    }
        // });
        $('.counter').text('0').hide();

        var counter = 0;

        $('#dropdownMenuButton').on('click',function (){
            counter = 0;
            $('.counter').text('0').hide();
        });

    });

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