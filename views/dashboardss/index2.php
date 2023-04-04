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
          <a class="nav-link active" href="<?php echo URL;?>dashboardss">
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
                  <a class='nav-link' href='<?php echo URL;?>mapss'>
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
          <!--   <div class="input-group">
              <span class="input-group-text text-body "><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-white btn-sm mb-0 me-3" href="<?php echo URL;?>blotter">Add Blotter</a>
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
                          <span class="font-weight-bold">Juan M. Gonzales

                            

                          </span> 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-user me-1"></i>
                          Regional Director, PRO 11
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
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="counter">0</span><i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
<!--NOTIFICATION-->                <div class="notification">
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
                </div>
                <!-- <li class="mb-2">
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
                </li> -->
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
    <!-- LABEL PER STATION -->
    <?php
    // <div class="container-fluid py-4" style="font-family: 'Quicksand';font-size: 16px;">
    //   <div class="row">
    //     <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    //       <div class="card" >
    //         <div class="card-body p-3">
    //           <div class="row">
    //             <div class="col-8">
    //               <div class="numbers">
    //                 <p style="font-family: 'Quicksand';font-size: 16px;" class="text-sm mb-0 text-capitalize font-weight-bold">Overall Data</p>
    //                 <h5 class="font-weight-bolder mb-0" style="font-family: 'Quicksand';font-size: 16px;">
                    

    //                   $count = 0;

    //                   for ($v=0; $v < count($this->getBlotter); $v++) { 
    //                     $count++;
    //                   }
    //                   echo $count;

    //                   <span style="font-family: 'Quicksand';font-size: 16px;" class="text-warning text-gradient text-sm font-weight-bolder"> Encoded</span>
    //                 </h5>
    //               </div>
    //             </div>
    //             <div class="col-4 text-end">
    //               <div style="background-color: #81E6D9;" class="icon icon-shape shadow bg-gradient-primary text-center border-radius-md">
    //                 <i class=" text-lg opacity-10" aria-hidden="true"><svg class="text-white" width="20px" height="20px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    //                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M464 128H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48z"/></svg>
    //                 </i>
    //               </div>
    //             </div>
    //           </div>
    //         </div>
    //       </div>
    //     </div>
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
        
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                 <script>
                  document.write(new Date().getFullYear())
                </script> |
                <a href="" class="font-weight-bold" target="_blank">Blottify </a>
                
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
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
  <script type="text/javascript">

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