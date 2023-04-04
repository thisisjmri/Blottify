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
        <img src="<?php echo URL;?>/public/img/police_tagum.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> One Data. One Tagum </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>/views/blotter_records/blotter_records.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M96 32H32C14.33 32 0 46.33 0 64v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM288 32h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm0 160h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Blotter Records</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URL;?>/views/user_account/user_account.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg> </svg>
            </div>
            <span class="nav-link-text ms-1">User Accounts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="color-background" d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM128 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 432c0-44.2 35.8-80 80-80h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1">User Logs</span>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Administrator</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Welcome Back!</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownprofile" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                <span class="d-sm-inline d-none">Profile</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownprofile">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo URL;?>/public/img/bruce-mars.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Juan M. Gonzales</span> 
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-user me-1"></i>
                          Administrator
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                  <a class="dropdown-item border-radius-md text-end" onclick="logout()" href="javascript:;">                   
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
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo URL;?>/public/img/team-2.jpg" class="avatar avatar-sm me-3">
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
                        <img src="<?php echo URL;?>/public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark me-3">
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
      <div class="page-header min-height-250 border-radius-xl mt-4" style="background-image: url('<?php echo URL;?>/public/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-warning opacity-5"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo URL;?>/public/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Juan M. Gonzales
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Administrator
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- LABEL PER STATION -->
    <div class="container-fluid py-4" style="font-family: 'Quicksand';font-size: 16px;">
      <div class="row">
        <div class="col-lg-12 mt-lg-0 mt-0 px-5">
         <div class="card mt-0 border-radius-lg" id="basic-info">
            <div class="card-header pb-0">
               <h5>User Logs</h5>
            </div>
          <form method="POST" id="filter">
            <div class="row card-body pt-2 pb-8 pr-0 row-cols-4 justify-content-end pb-0" style="width: 101%; height: 75px;">      
              <div class="form-group pr-2 pl-2">
                 <div class="form-group">
                  <label style="font-family: 'Quicksand'; font-size: 12px;"> Start Date</label>
                    <?php
                        if (isset($_POST['start'])) {
                          echo "<input type='datetime-local' id='start' name='start' value='".$_POST['start']."' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        }
                        else{
                          echo "<input type='datetime-local' id='start' name='start' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        }
                    ?>
                 </div>  
                </div>
                <div class="form-group pr-2 pl-2">
                 <div class="form-group">
                  <label style="font-family: 'Quicksand';font-size: 12px;">End Date</label>
                    <?php
                        if (isset($_POST['end'])) {
                           echo "<input type='datetime-local' id='end' name='end' value='".$_POST['end']."' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        }
                        else{
                          echo "<input type='datetime-local' id='end' name='end' style='font-family: Quicksand; font-size: 16px;' class='form-control'>";
                        }
                    ?>
                  </div>
                 </div>     
                </div>
              <div class="row card-body pt-0 mt-0 row-cols-6 justify-content-end pb-0 pr-4">               
                <div class="form-group pr-2 pl-2">
                    <div class="form-group">
                      <label></label>
                      <button type="submit" id="rfsh" name="save" value="gen" style="font-family: 'Quicksand'; font-size: 12px;" class="btn btn-block btn-secondary">Generate</button>
                    </div>       
                 </div>
              </div>
            </form>


            <div class="row card-body pt-0  mt-0 row-cols-5 justify-content-end pb-0 pr-0">                   
            </div>
          <div class="tab-content px-4" style="padding-bottom: 30px;" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <table id="example3" style="table-layout: fixed;" class="table table-hover table-striped py-4" style="padding-bottom: 16px;">
                  <thead>
                    <tr>
                      <th scope="col" style="width: 5px;">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Date and Time</th>
                      <th scope="col">Activity</th>
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
                            echo "<td>".$this->getULogs[$i]['date_time']."</td>";
                            echo "<td>".$this->getULogs[$i]['activity']."</td>";

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
<script src="<?php echo URL;?>/public/plugins/public/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo URL;?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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

<script>
  $(function () {
    $("#example3").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
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
</script>
</body>
</html>