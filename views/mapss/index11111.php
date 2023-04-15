<!--
=========================================================
* Soft UI Dashboard - v1.0.6
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
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Tagum City Crime Maps
  </title>
      <!-- Fonts and icons -->
      <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <!-- Nucleo Icons -->
      <link href="public/css/nucleo-icons.css" rel="stylesheet" />
      <link href="public/css/nucleo-svg.css" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="public/css/nucleo-svg.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link id="pagestyle" href="public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
      <link id="pagestyle" href="public/css/adminlte.css" rel="stylesheet"/>
  <!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
      <!-- SVG PAN ZOOM -->
    <!--   <script src="public/js/plugins/svg-pan-zoom1.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- DataTables -->
      <link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<style>
body {
      font-family: 'Open Sans', sans-serif;
      font-weight: bolder;
      background-color: #C7D1CA;
      overflow: hidden;
      background-image: url('public/img/map.jpg');
      background-size:cover;
      background-repeat:no-repeat;
       background-color: rgba(0, 0, 0, 0.5); /* Replace with your desired color */
      }
      body::-webkit-scrollbar{
      display: none;
      }
      .madaum-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .pagsabangan-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .mankilam-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .canocotan-svg:hover path { 
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .bincungan-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .sanmiguel-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .busaon-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .cuambogan-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .apokon-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magdum-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .balamban-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .pandapan-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .liboganon-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .agustin-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .fuerza-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magugpoeast-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .lafilipina-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magugpowest-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magugponorth-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magugpopoblacion-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .magugposouth-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .visayanvillage-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .sanisidro-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      .something-svg:hover path {
      fill: #4996de;
      transition: all ease 0.3s;
      }
      svg path {
      transition: all ease 0.3s;
      }
       .legend-box {
    width: 20px;
    height: 20px;
    border-radius: 4px;
  }
  #map-frame {
      width: 800px;
      height: 600px;
    }
    #map-object {
      width: 100%;
      height: 100%;
    }
    #limit-svg {
    display: block;
    width: 100%;
    height: 100vh;
  }

  #limit-div {
    display: flex;
    justify-content: center;
    align-items: center;
  }
   </style>
<body>
        <!-- Navbar -->
         <nav id="navbarr" style="overflow: hidden;" class="position-fixed top-0 end-0 navbar blur border-radius-lg top-0 z-index-3 shadow p-1 my-3 px-2 mx-3">

            <button class="btn-lg navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2 col-sm-1">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
              <label>Crime Filter</label>
            </button>
   
            <div class="collapse" id="navigation">
              <ul class="navbar-nav mx-auto justify-content-center">
                <li class="nav-item pt-2">
                    <div class="px-2 justify-content-center">
                    <label class="m-0 mx-1" for="crime">Crime Type</label>
                    <select id="crime" class="form-select">
                       <option value="all">All</option>
                       <?php 

                        for($d=0; $d<count($this->getCrime); $d++){
                          echo "<option value='".$this->getCrime[$d]['id']."'>".$this->getCrime[$d]['crime_name']."</option>";
                        }

                        ?>
                    </select>
                 </div>
                </li>
                <li class="nav-item pt-2">
                 <div class="px-2">
                  <label class="m-0" for="start">Start Date:</label>
                  <input type="date" class="form-control px-2" id="start"
                     name="start" min="2022-01-01" >
               </div>
                </li>
                <li class="nav-item pt-2">
                  <div class="px-2">
                    <label class="m-0" for="end">End Date:</label>
                    <input type="date" class="form-control px-2" id="end"
                       name="end" min="2022-01-01">
                 </div>
                </li>

                <li class="nav-item">
                  <div class="px-2">
                    <label class="mt-2" for="generate"></label>
                  <button id="generate" class="btn bg-gradient-warning w-100" style="border-radius: 10px;">Generate</button>
                 </div>
                </li>
              </ul>
          </div>
        </nav>
  <!-- id - buttonF -->
<div class="floating-circle blur my-3 mx-3" id="floatingCircle">
  <span class="circle" >
    <i class="fas fa-filter"></i>
  </span>
</div>
<!-- ID - navbarr -->
<div class="side-panel blur mt-2 mx-3 border-radius-sm" id="sidePanel">
  <div class="side-panel-header mx-2 mt-2">
    <label class="side-panel-title">Filter</label>
    <button class="close-button" id="closeButton">&times;</button>
  </div>
    <div class="px-2 justify-content-center">
    <label class="m-0 mx-1" for="crime">Filter Type</label>
    <select id="crime" class="form-select form-select-sm"> <!-- Added 'form-select-sm' class for smaller size -->
       <option value="all">Daily</option>
       <option value="all">Monthly</option>
       <option value="all">Annual</option>
       <option value="all">Custom</option>
    </select>
 </div>
  <div class="px-2 justify-content-center">
    <label class="m-0 mx-1" for="crime">Crime Type</label>
    <select id="crime" class="form-select form-select-sm"> <!-- Added 'form-select-sm' class for smaller size -->
       <option value="all">All</option>
       <?php 

        for($d=0; $d<count($this->getCrime); $d++){
          echo "<option value='".$this->getCrime[$d]['id']."'>".$this->getCrime[$d]['crime_name']."</option>";
        }

        ?>
    </select>
 </div>
 <div class="px-2">
  <label class="m-0" for="start">Select a date:</label>
  <input type="date" class="form-control form-control-sm px-2" id="daily" > <!-- Added 'form-control-sm' class for smaller size -->
 </div>

  <div class="px-2">
  <label class="m-0" for="start">Select a month:</label>
  <input type="month" class="form-control form-control-sm px-2" id="monthly"> <!-- Added 'form-control-sm' class for smaller size -->
 </div>

  <div class="px-2">
    <label class="m-0" style="font-family: 'Quicksand';" >Pick a year:</label>
    <select id="annual1" class="form-select form-control-sm">
    </select> 
 </div>

  <div class="px-2">
  <label class="m-0" for="start">Start Date:</label>
  <input type="date" class="form-control form-control-sm px-2" id="start" name="start" min="2022-01-01" > <!-- Added 'form-control-sm' class for smaller size -->
 </div>

 <div class="px-2">
  <label class="m-0" for="end">End Date:</label>
  <input type="date" class="form-control form-control-sm px-2" id="end" name="end" min="2022-01-01"> <!-- Added 'form-control-sm' class for smaller size -->
 </div>
 <div class="px-2">
    <label class="mt-2" for="generate"></label>
    <button id="generate" class="btn bg-gradient-warning w-100" style="border-radius: 10px; font-size: 12px;">Generate</button> <!-- Added 'font-size: 12px;' inline style for smaller font size -->
 </div>
</div>
     <aside id="sidebar1" class="navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
    <div class="sidenav-header text-center py-4 px-3">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <img src="<?php echo URL;?>public/img/police_tagum.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold"> One Data. One Tagum </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboardss">
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
          <a class="nav-link" href="blotter">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Blotter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-gradient-warning active" href="mapss">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="color-background" d="M384 476.1L192 421.2V35.9L384 90.8V476.1zm32-1.2V88.4L543.1 37.5c15.8-6.3 32.9 5.3 32.9 22.3V394.6c0 9.8-6 18.6-15.1 22.3L416 474.8zM15.1 95.1L160 37.2V423.6L32.9 474.5C17.1 480.8 0 469.2 0 452.2V117.4c0-9.8 6-18.6 15.1-22.3z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white text-bold">Maps</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="libraries">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>box-3d-50</title>
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="color-background" d="M572.694 292.093L500.27 416.248A63.997 63.997 0 0 1 444.989 448H45.025c-18.523 0-30.064-20.093-20.731-36.093l72.424-124.155A64 64 0 0 1 152 256h399.964c18.523 0 30.064 20.093 20.73 36.093zM152 224h328v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v278.046l69.077-118.418C86.214 242.25 117.989 224 152 224z"/></svg>
            </div>
            <span class="nav-link-text ms-1 text-bold">Library</span>
          </a>
        </li>
  </aside>
  
    <div id="legend_container" class="position-fixed bottom-0 end-0 p-3" style="font-size: 12px;">
      <div class="bg-light rounded blur shadow-sm p-3">       
      <div class="d-flex flex-column align-items-start">
        <div class="d-flex align-items-center mb-2 text-center justify-content-center ">
          <div class="text-center pb-2">LEGEND</div>
          <input type="text" id="hiddenzoom" value="0" hidden>
        </div>
        <div class="d-flex align-items-center mb-2">
          <div class="legend-box me-2" style="background-color: #bab8b8;"></div>
          <span>No data</span>
        </div>
        <?php 

        for($c=0; $c<count($this->getCrime); $c++){
            echo "<div class='d-flex align-items-center mb-2'>
            <div class='legend-box me-2' style='background-color: ".$this->getCrime[$c]['crime_color']."'></div>
            <span>".$this->getCrime[$c]['crime_name']."</span>
          </div>";
        }

        ?>

      </div>
      </div>
    </div>
    <div id="legend_container" class="position-fixed bottom-0 end-0 p-3" style="font-size: 12px;">
      <div class="bg-light rounded blur shadow-sm p-2">       
      <div class="d-flex flex-column align-items-start">
        <div class="d-flex align-items-center mb-2 text-center justify-content-center ">
          <input type="text" id="hiddenzoom" value="0" hidden>
        </div>
          <table class="table align-items-center mb-0 py-0 pb-1" id="example9" >
            <thead>
              <tr>
                <th class="text-uppercase text-xs font-weight-bolder p-1">Legend</th>
              </tr>
            </thead>
            <tbody>
              <?php 

             for($c=0; $c<count($this->getCrime); $c++) {
        echo "<tr>
                <td>
                  <div class='d-flex align-items-center mb-0'>
                    <div class='legend-box me-2' style='background-color: ".$this->getCrime[$c]['crime_color']."'></div>
                    <span>".$this->getCrime[$c]['crime_name']."</span>
                  </div>
                </td>
              </tr>";
      } 
              ?>
              <tr>
                <td>
                  <div class='d-flex align-items-center mb-0'>
                    <div class="legend-box me-2" style="background-color: #bab8b8;"></div>
                     <span>No data</span>
                  </div>
                </td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>


<!-- MAIN MAPS -->
  <main class="main-content  mt-0">
    <section> 

    <div id="limit-div" style="width: 100%; height: 100vh; ">
  <svg id="limit-svg" class="" xmlns="http://www.w3.org/2000/svg" viewBox="0  0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
   <svg id="limit2-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 612 792" style="enable-background:new 0 0 612 792;" xml:space="preserve">
<style type="text/css">
  .st0{display:none;}
  .st1{display:inline;fill:none;stroke:#000000;stroke-miterlimit:10;}
  .st2{fill:#171613;}
  .st3{fill:#ABD8B6;}
  .st4{fill:#93C7A3;}
  .st5{fill:#7CAD8A;}
  .st6{fill:#93C7A3;stroke:#E8E9EB;stroke-width:0.25;stroke-miterlimit:10;}
  .st7{fill:none;stroke:#9EB9E0;stroke-width:0.25;stroke-miterlimit:10;}
  .st8{fill:#93C7A3;stroke:#231F20;stroke-width:0.25;stroke-miterlimit:10;}
  .st9{fill:#93C6A3;}
  .st10{fill:#171F19;stroke:#E8E9EB;stroke-width:0.25;stroke-miterlimit:10;}
  .st11{fill:#93C6A2;}
  .st12{fill:#161D18;stroke:#E8E9EB;stroke-width:0.25;stroke-miterlimit:10;}
  .st13{fill:#161D18;}
  .st14{fill:#7CAD8A;stroke:#000000;stroke-miterlimit:10;}
  .st15{font-family:'MyriadPro-Regular';}
  .st16{font-size:12px;}
  .st17{font-size:9.7721px;}
  .st18{font-size:8px;}
  .st19{font-size:7px;}
  .st20{font-size:6px;}
  .st21{fill:#808080;}
</style>
<g id="Layer_1">
</g>

<g id="border" class="st0">
  <path class="st1" d="M473.82,145.71l-9.48,1.04l-3.5-3.42l-5.67,0.83l-4.83-4.08l-9.42-1.75l4.17-7.92l-6.08-2.83l-0.33,4.13h-2.75   l-0.5-4.13c0,0-2.83,0.25-3.92,0c-1.08-0.25-4-1.25-4-1.25s-0.67-7-1.5-8.92c-0.83-1.92-7.08-12.58-7.08-12.58l-2.17,1.08   l-3.92-0.08l-1.83,1.33l-4.75-1.33v-5.75l6-7.58l-0.08-10.75l2.92-2.67l3.25-0.58l-0.83-4.08l0.92-2.92l-7.67-3.75l-1.67-2.58   l2.58-5.5l-6.33-2.25l-0.75-2.5l-1.75-0.83l0.92-4.5L391.83,52l-0.5-15.67l-9.92-1.67l2.16-15.86"/>
  <path class="st1" d="M358.97,22.88l0.78,9.62L359.36,49l2.14,7.25l-0.5,5.17l9.08-0.92l4,8.33v5l-3.33,0.33L371,88.25h-4.48   l-3.27-1.58c0,0-1.58,2-1.08,3s4.36,11.92,4.36,11.92l-4.11,1.25h-3.45l-6.3,2.67l-2.5-0.5v10.75l-4.25,1.83h-13l-0.58-6.08   l-16.25,1.33l5.17-5.08l-1.75-7.42l-6.92-0.08L312,85.08L306.33,85L306,75.92l-5.75-0.25c0,0,0-5.17,0.92-6.75   c0.92-1.58,0.17-1.17,0.17-1.17l-7.42,1.5c0,0-0.67-2.75,0.42-6.58c1.08-3.83,2.33-10,2.67-14.25c0.33-4.25,1.98-15.6,1.98-15.6"/>
  <path class="st1" d="M427.5,126.33l-3.38,0.35l-0.94,3.56c0,0-0.81,0.75-1.31,0.81c-0.5,0.06-3.31-0.81-3.31-0.81L413,137   l6.13,6.06c0,0-2.88,2.19-4,2.75c-1.13,0.56-3.5,1.25-3.5,1.25h-12.56l-8.69-6.75l-7.75,0.19L376,150h-3.38l-0.63,3.44l2.94,3.88   l0.38,3.31h5.19l-0.75,17.94l-12.88-1.94l0.31,11.19L341.81,207l-7.5,9.75l17.9,8.29L393.13,244c0,0,3.58,1.26,5.67,1.88"/>
  <path class="st1" d="M352.21,225.04l-24.54,30.79l-0.49,0.64l-20.39,26.45l-20.87,27l0.33-50.83l8.42,5.42l4.25-3.67   c0,0,0.83-2.92,2.17-3.83c1.33-0.92,5.62-1.5,5.62-1.5l2.38-3.5l3.58-0.67l3.67,0.08l10.42,4.5l0.31,0.3"/>
  <path class="st1" d="M334.06,216.72l-9.34-4.88l-12.38,5.69c0,0-0.69,7.53-0.56,9.66s0.63,2.47,1.47,3.88   c0.84,1.41,1.84,2.59,1.94,3.97c0.09,1.38-0.34,4.81-0.34,4.81l-3.83,11.8"/>
  <path class="st1" d="M312.34,217.25v-2.78l-2.69-2.22h-5.47l0.31,0.88l-5.59-0.25l-6.66-2.44h-2.31l0.25,2.25l-3.88,0.31l-1-1.72   l-10.97,0.16c0,0-1.44,0.28-2.53,1.72c-1.09,1.44-1.25,3.03-1.25,4.09c0,1.06-0.38,1.59-1.56,3.09s-2.03,2.75-2.03,2.75v2.94   l-3.81,1.63l-2.38,18.31l25.78,13.32"/>
  <path class="st1" d="M286.23,309.51h-6.54c0,0-2,1.17-3.31,1.17s-5.69,0.44-5.69,0.44l-0.75-1.61l-9.63-0.51l-0.69-8.69l-2.13-1   l0.13-27.44l1.69-2.69l1.47-23.22"/>
  <path class="st1" d="M384.77,287.86l-13.39,1.51v-2.88c0,0-1.75-1.63-7.13-1.88s-21.38-1.25-21.38-1.25s-0.75,2.63-1.75,4.75   s-4.25,5.63-4.25,5.63l-14.25,34.63l0.75,4.5h2l-0.63,12.63l-3.63,3.88l4.63,5.63H332l-4.88,12.25l10.13,4L337,385.13h1.75h22.38   l22.63,20.13l19.88-18.63l3.25-0.13L404,442.38l15.23,1.19"/>
  <polygon class="st1" points="256.75,382.13 257.62,382.16 337,385.13  "/>
  <path class="st1" d="M256.75,387.88l0.39-5.74l-0.39,10.61l-1.13,25.63L254,461.25l-1.5,32.88l-11.38,10.13l2.13,2.75l-2.13,11.75   h-6.38c0,0,0.38,2.88,0.88,4s0.5,4.13,0.5,4.13l7.63,2.13l7,5l-1.13,14l-5.25,0.88l0.38,8.88l4.25-1.88c0,0,1.75,6.5,2.5,9.13   s1.25,12.75,1.25,12.75s1.38,0.5,2.38,1.5s1.65,2.63,2.01,5.63c0.36,3,1.64,5,0,7.38c-1.64,2.38-0.64,3.13-3.14,3.88   s-42.63,13.13-42.63,13.13l4.75,7.13c0,0,2.88,6,2.63,9.63s-2.63,8.38-3,11.13s-0.75,7.5,1.13,9.38s1.75,8.63,1.75,8.63l0.31,2.62"/>
  <path class="st1" d="M312.58,100.25l-1.58,5.13l-21.13-5.13v19l1.88,4.75l-1.88,4h5.75l-4.25,11.38l0.13,1.88l-5,1l-0.88,2.5v4.13   c0,0-0.88-0.13-9-3.13S248,134.38,248,134.38l-17.75-4.25c0,0-12.25-4.88-14.63-6.5s-4.13-2.5-4.13-2.5l-19.75-2.63v-8.88   l-1.38-4.75l-1.88,0.63v2.38l-2-0.25V110l-9.38,0.88l-4.38,11.75L166.5,123l-1.5,4.25l2.13,3.38l-1.13,5.63l-9.25-0.63V142   l-2.38,2.75v21l1.88,3.13l-6.38,1l1.75,20.38l-13.75,2.5v5.13h-7.38l-0.75-0.13"/>
  <path class="st1" d="M188.56,51.1v4.78h-7.18v10.38l1.25,8.25l-13.25-3.25l2,5.75c0,0-1.25,3-2,7.63s-0.88,11.25-0.88,11.25h-1.38   l-3,10.25h-0.88v3.25l2.63,2l1.25-1.5l1.5,0.88l0.13,2.5l6.84,1.75"/>
  <polyline class="st1" points="230.25,130.13 229.5,142.5 232.08,147.5 223.67,162.58 225.83,164.67 229.33,163 232.08,162.83    232.08,165.33 230.33,170 237.75,172.67 236.5,174.75 241.08,187.92 258.58,185 278.83,179.92 280.08,200.42 285.92,194.92    284.42,200.42 277.25,211 276.83,211.4  "/>
  <path class="st1" d="M259.64,264.08l-3.8,1.25l-0.25-1.25c0,0-3.42-0.17-4.67,0.63c-1.25,0.79-4.25,1.71-4.25,1.71   s-1.67,0.17-2-0.33c-0.33-0.5-1.58-1.5-1.58-1.5l-6.08-0.17l-3-0.92l-2.58,1l-1.08-0.58l-2.08,4.08l-8.58-3.67l-34.25,0.58   l-1.42,2.42l-16.67-0.67l1-2.25l-7.08-2.75l-33-0.5l0.5,7.17l-19.73-0.52"/>
  <polyline class="st1" points="257.5,297.75 250.25,297.75 250.25,305.83 241,307.83 241,312.25 235.42,312.25 235.42,320.75    224,320.75 220,323.83 207.25,323.83 220.33,332.75 212.33,343.25 221.04,349.96 262.75,382.13  "/>
  <path class="st1" d="M200.25,375.83"/>
  <polyline class="st1" points="221.52,350.33 200.25,376.33 171.17,352.67 150.5,380.08 121.67,357.83 116.67,361.67 116.08,364.17    106.27,368.85  "/>
  <polyline class="st1" points="254.03,460.48 207.67,424.33 149.33,499 105.5,465.33 101.75,458.7  "/>
  <path class="st1" d="M147.88,500.75l37.31,29.63l14.06-1.75c0,0,0.94,1.63,1.06,3s-0.25,1.38,0.44,2.44s0.88,0.38,1.81,0.38   s2.19,0.13,2.69,0.75s0,1.63-0.56,3.13s0.19,2.06,1.13,2.06s2.5-0.75,3.94-0.81s2.5,0.81,3,2.31s-0.13,1.81-0.63,2.81   s-2.56,1.38-3.63,1.44s-1,1.38-0.75,3s1.38,2.69,2.25,3.06s1.81,0.06,2.5-0.56s1.31-2.63,1.75-5s0.81-2.25,1.81-2.25   s2.13,1.19,3.06,3.44s0.38,3.13,0.69,5.38s2.25,3.19,3.19,4.19s0.13,2.19-0.25,3.06s-1.94,1.56-1.94,2.88s1.94,2.88,3.61,4.38   c1.67,1.5,3.95,1.38,4.51,2.13s0.31,1.81,0.06,2.81s-0.31,1-1.38,1.5s-2,0.56-2.81,1s-0.13,1.88,0.06,3.56s-0.69,4.94-0.38,5.81   s1.13,0.13,1.63-0.06s2.5-0.44,3.38-0.31s3.31,2.06,4.13,3.5s2.94,1.75,3.81,1.38s1.69-1.75,2.38-3.25s2.56-3.69,5-5.38   s7.94-2.63,7.94-2.63"/>
  <polyline class="st1" points="149.47,498.82 147.88,501.06 147.56,501.06  "/>
  <path class="st1" d="M212.09,609.03c0,0-1.34-4.28-3-4.78c-1.67-0.5-4.08-0.33-6.25,1.58c-2.17,1.92-2.92,3-3.67,5.5   s-0.25,7.17,0,9.42s0.63,5.25-0.4,6.92c-1.02,1.67-3.94,2.58-5.85,2c-1.92-0.58-5.33-4-6.17-6s-0.67-4.83-1.75-6   c-1.08-1.17-4-3.75-6.5-3.75s-5.83-0.17-7.83-0.67s-3.75-0.42-3.92-1.42c-0.17-1-0.83-1.58,1.25-2.25   c2.08-0.67,5.58-1.33,5.58-1.33l3.17-0.5l2.08-1.08l1.33-1.75l-0.17-1.75l-10.83-10.67l-14.92-9.75c0,0-2.92-2.58-1.92-5.08   s0.58-2.83,2.5-4.08c1.92-1.25,3.25-1.25,3.25-1.25l5.92-0.83l2.67-1.08l1.92-2.25c0,0,1.17,0,2.25,0c1.08,0,2.33-0.67,3.25-2.67   c0.92-2,1.75-4.25,0.92-5.25s-1.92-1.25-3-1s-2.08,0.42-2.83,1.17s-1.75,1.92-2.75,1.92s-4.83-1.17-5.67-2.25s-1.25-2.5-2-3.33   c-0.75-0.83-2.67-0.83-4-0.67s-2.67,0.08-3.5-2.25c-0.83-2.33-0.75-4.5-3.38-6.08c-2.63-1.58-4.13-1.67-5.96-1.67   c-1.83,0-1.83,0.42-2.75-0.42c-0.92-0.83-1.58-4.58-1.58-4.58s-0.92-0.58-1.75-0.58c-0.83,0-1.25,0.25-1.33-0.58   c-0.08-0.83,0.33-1.5,0-1.75s-0.33-1.08-1.67,0c-1.33,1.08-12.08,11.83-12.08,11.83v10.67l-2.58,0.83v1.25l6.17,3.33l-3.75,8.42   l-13-4.33l-2.42,8l8.33,1l0.33,7.58l9.08,0.92l-0.33,1.48l3.67,1.27l-0.17,1.17l6.17-3.75l4.33,3.25l6.42,0.58l-0.17,9.08   l1.25,1.92l0.92-1.5l3.42,5.17l-1,2.92l-8.17,2.58l-2.42,8.08c0,0-0.42,4.08-0.17,4.83s0.33,2.08,1.08,1.17   c0.75-0.92,2.33-3.67,2.33-3.67l2-1.17l2.42-0.25l1.25,1.58c0,0,0.75,4.58,1.58,6.08c0.83,1.5,2.42,4.33,3.83,5.17   c1.42,0.83,2.17,0.58,2.67,1.5s0.08,2.75,0.75,3.92c0.67,1.17,2.42,3.42,4.04,2.67c1.62-0.75,3.54-2.08,3.62-5.25   c0.08-3.17-1-5.75-1-5.75s0-1.42,0.83-1.5c0.83-0.08,2.5-0.75,3.17,0.25s9.92,16.17,9.92,16.17s0.83,5.42,0.17,8.08   c-0.67,2.67-2.25,3.5-4.33,5.42s-3.33,2.75-2.5,4.5c0.83,1.75,3.08,3.25,5.5,4.08c2.42,0.83,3.92,2,4.17,2.83s0.5,2.37,0.5,2.37"/>
  <polyline class="st1" points="73.38,612.83 78.08,611.17 78.58,612 82.25,612.83 80.75,602.75 96,597.58 93.42,585.58    98.25,583.33 105.17,578.17  "/>
</g>

<g id="Layer_5">
  <path class="st2" d="M431.01,234.58c-2.29,0.08-4.37,0.29-6.43,0.19c-4.26-0.21-7.77-1.77-9.5-6.01c-0.71-1.73-2.08-2.59-3.77-3   c-2.75-0.65-5.02,0.86-5.35,3.65c-0.27,2.29-0.35,4.61-0.45,6.91c-0.16,3.74-0.34,7.48-0.36,11.23c-0.01,1.57,0.23,3.16,0.57,4.7   c0.34,1.53,1.27,2.63,2.77,3.37c2.3,1.14,2.85,3.54,1.18,5.59c-0.97,1.2-2.37,2.1-3.69,2.95c-2.1,1.36-4.29,2.37-6.97,1.57   c-0.9-0.27-2.07,0.05-3.01,0.39c-1.72,0.62-2.1,2.17-0.96,3.62c0.54,0.68,1.28,1.21,1.84,1.88c1.12,1.34,2.29,2.66,3.23,4.12   c1.34,2.09,0.86,3.92-1.18,5.27c-1.26,0.83-2.53,1.66-3.82,2.46c-0.84,0.52-1.13,1.11-0.92,2.18c0.23,1.14,0.18,2.37,0.05,3.54   c-0.53,4.91-1.3,9.8-1.65,14.73c-0.19,2.66,0.05,5.42,0.51,8.06c0.57,3.27,0.04,5.86-3.04,7.52c-1.35,0.73-1.93,1.79-1.85,3.31   c0.08,1.59-0.03,3.2,0.11,4.78c0.18,1.93-0.48,3.41-1.92,4.64c-0.52,0.45-0.95,1-1.49,1.58c0.82,0.67,1.56,1.14,2.14,1.77   c1.09,1.16,1.05,2.25-0.31,2.92c-1.37,0.67-1.33,1.67-1.53,2.89c-0.46,2.73,0.61,4.73,2.32,6.69c4.63,5.28,10.16,9.42,16.17,12.94   c2.89,1.69,6.24,1.81,9.51,2c2.22,0.13,4.43,0.37,6.31-1.41c0.48-0.46,1.7-0.44,2.48-0.25c3.55,0.88,5.84,3.46,7.8,6.31   c0.85,1.24,0.81,2.82,0.05,4.13c-1.04,1.78-2.25,3.46-3.46,5.12c-0.56,0.77-1.37,1.34-1.96,2.09c-2.05,2.59-1.38,5.18,1.61,6.61   c1.07,0.51,2.15,1.07,3.06,1.8c1.44,1.17,1.69,2.11,0.88,3.79c-0.54,1.12-1.42,2.08-2.23,3.05c-0.82,0.97-1.88,1.76-2.59,2.79   c-1.87,2.69-1.17,5.2,1.67,6.74c1.52,0.82,3.06,1.3,4.81,1.02c0.7-0.11,1.44-0.1,2.15-0.04c1.92,0.15,2.89,0.86,3.24,2.29   c0.47,1.91-0.04,3.33-1.67,4.32c-0.81,0.5-1.67,0.95-2.55,1.32c-1.59,0.68-2.25,1.94-2.38,3.57c-0.13,1.72,0.23,3.32,1.22,4.77   c1.39,2.04,1.66,1.9,4.09,1.35c2.53-0.57,5.19-0.74,7.79-0.79c0.89-0.02,1.93,0.71,2.66,1.37c1.42,1.26,2.1,2.98,2.3,4.86   c0.46,4.25-0.02,8.46-1.03,12.57c-0.6,2.44-2.3,4.25-4.67,5.1c-1.93,0.69-3.99,1.28-6.02,1.39c-4.27,0.23-7.12,2.42-9.28,5.85   c-0.47,0.74-0.9,1.5-1.38,2.24c-2.22,3.45-3.32,7.17-3.11,11.33c0.13,2.64,0.69,2.75-2.54,3.65c-2.22,0.62-3.78,1.77-4.79,3.87   c-0.89,1.86-2,3.63-3.12,5.37c-0.66,1.04-0.73,2.01-0.37,3.16c0.75,2.35,1.35,4.75,2.09,7.11c0.53,1.69,0.51,3.29-0.43,4.83   c-0.71,1.17-1,2.33-0.11,3.56c0.78,1.09,0.54,2.24,0.15,3.42c-1.95,6.07-3.82,12.17-5.81,18.23c-0.56,1.71-0.73,3.4-0.53,5.17   c0.26,2.3,0.43,4.6,0.64,6.9c0.15,1.6-0.37,2.84-1.94,3.45c-2.92,1.12-2.98,2.52-2.58,5.12c0.31,1.96,0.88,3.88,1.39,5.81   c0.36,1.37,1.09,2.48,2.47,3.03c1.85,0.74,2.32,2.16,2.18,4.05c-0.18,2.4-0.98,4.13-3.3,5.33c-3.38,1.75-3.9,3.15-3.16,6.85   c0.26,1.27,0.08,2.29-0.61,3.38c-1.74,2.73-1.31,5.02,1.17,7.13c1.63,1.39,3.26,2.78,4.84,4.24c0.36,0.33,0.74,1.01,0.63,1.37   c-0.16,0.52-0.7,1.12-1.21,1.28c-0.73,0.23-1.57,0.09-2.36,0.1c-1.91,0.03-3.82,0-5.73,0.1c-1,0.05-1.9,0.51-2.02,1.67   c-0.11,1.04-0.04,1.96,1.05,2.68c2.38,1.58,2.55,2.9,0.99,5.57c-0.15-0.02-0.35,0.01-0.46-0.07c-3.02-2.47-6.67-3.29-10.37-3.99   c-0.86-0.16-1.71-0.38-2.57-0.56c-1.89-0.38-3.13-1.48-3.71-3.32c-0.14-0.44-0.34-0.87-0.57-1.43c-1.15,0.36-2.18,0.73-3.24,1   c-2.82,0.73-4.78-0.3-5.69-2.68c-1.43-0.92-2.67-1.59-3.75-2.46c-0.82-0.66-1.61-0.97-2.63-0.76c-0.31,0.07-0.63,0.12-0.94,0.18   c-3.07,0.59-4.1,1.78-4.19,4.99c-0.05,1.67-0.17,3.37,0.05,5.02c0.48,3.49-1.09,6.14-3.32,8.98c-2.05-1.53-4.11-2.98-6.03-4.6   c-0.44-0.37-0.55-1.29-0.58-1.96c-0.09-2.15-0.03-4.31-0.09-6.46c-0.05-1.74-0.25-1.95-1.92-2.04c-4.99-0.27-9.67,0.45-13.62,3.95   c-4.36,3.85-8.94,7.45-13.23,11.38c-4.79,4.39-9.69,8.51-15.75,11.09c-4.6,1.96-8.62,4.81-11.81,8.74   c-0.53,0.66-1.27,1.23-2.04,1.6c-2.99,1.46-5.63,3.43-7.71,5.96c-5.67,6.94-12.68,12.28-19.97,17.34   c-7.21,5-14.15,10.36-20.8,16.08c-4.07,3.5-8.74,5.5-14.19,5.43c-0.63-0.01-1.27,0.06-1.9,0.14c-0.22,0.03-0.42,0.2-0.94,0.46   c0,0.72-0.11,1.59,0.02,2.42c0.34,2.04-0.66,2.97-2.44,3.71c-3.9,1.62-7.72,3.43-11.56,5.2c-1.81,0.83-3.6,1.71-5.36,2.63   c-3.45,1.8-7.13,2.83-10.99,2.97c-3.26,0.12-6.53-0.1-9.8-0.08c-0.82,0.01-1.77,0.18-2.42,0.62c-1.31,0.89-2.59,1.9-3.62,3.08   c-1.15,1.32-2.47,2.2-4.08,2.79c-1.27,0.47-2.51,1.03-3.76,1.53c-0.44,0.18-0.93,0.53-1.34,0.46c-2.16-0.36-3.81,0.9-5.61,1.66   c-0.73,0.31-1.46,0.64-2.16,1.02c-7.05,3.83-14.56,6.43-22.38,8.18c-2.07,0.46-4.16,1.69-5.85-0.76c-0.61,0.58-1.15,0.85-1.24,1.22   c-0.5,2.12-2.17,3.1-3.85,4c-2.67,1.43-5.34,2.89-8.13,4.05c-4.11,1.7-7.78,3.98-10.9,7.15c-1.81,1.84-3.93,3.22-6.19,4.43   c-3.37,1.81-6.69,3.71-10.03,5.59c-0.75,0.42-1.47,0.89-2.36,1.43c0.52,0.72,0.92,1.27,1.34,1.85c-0.16,0.21-0.26,0.44-0.45,0.56   c-0.4,0.26-0.82,0.5-1.26,0.69c-2.38,1-4.44,2.42-6.23,4.32c-1.37,1.46-1.54,1.49-3.21,0.3c-1.32-0.94-2.06-0.1-2.92,0.55   c-5.39,4.11-10.76,8.24-16.14,12.36c-0.44,0.34-0.84,0.76-1.33,1.01c-3.26,1.72-4.53,4.7-5.37,8.05c-0.33,1.34-0.28,2.52,0.49,3.65   c0.72,1.05,1.42,2.12,2.2,3.13c0.94,1.22,1.19,2.55,0.18,3.73c-2.13,2.49-1.8,5.32-1.37,8.17c0.27,1.81,0.76,3.59,1.07,5.39   c0.27,1.57-0.01,3-1.27,4.15c-1.38,1.25-2.74,1.48-4.37,0.55c-2.1-1.21-3.54-3.06-4.21-5.32c-0.83-2.82-1.41-5.72-2.02-8.6   c-1.17-5.57-0.11-10.77,2.67-15.67c3.11-5.48,6.31-10.9,9.36-16.41c2.33-4.2,3.51-8.9,3.19-13.55c-0.24-3.56-1.6-7.1-2-10.74   c-0.05-0.47-0.55-0.97-0.97-1.3c-2.96-2.32-7.49-2.21-10.03,0.62c-1.95,2.17-3.43,4.77-5.06,7.21c-0.8,1.2-1.55,2.38-2.97,3   c-1.36,0.6-2.6,0.56-3.86-0.23c-3.4-2.11-5.93-4.81-6.36-9.02c-0.33-3.25-0.77-6.49-1.09-9.74c-0.2-2.03,0.82-3.71,1.91-5.29   c0.63-0.91,1.41-1.74,2.24-2.47c0.95-0.84,1.56-1.73,1.52-3.07c-0.04-1.34,0.64-2.28,1.98-2.64c1.55-0.41,2.39-1.47,2.86-2.93   c0.17-0.53,0.41-1.04,0.67-1.53c0.4-0.75,1.01-0.9,1.82-0.65c1.2,0.38,2.42,0.76,3.65,0.99c1.2,0.22,1.88,0.81,1.96,2.02   c0.21,3.06,1.96,4.79,4.68,6.01c4.4,1.97,9.37,0.17,11.26-4.32c0.28-0.66,0.46-1.36,0.69-2.04c1.03-3,2.66-5.59,5.14-7.63   c1.23-1.01,2.32-2.19,3.48-3.27c2.38-2.22,3.16-5.08,3.32-8.19c0.13-2.63-1.13-4.53-3.08-6.16c-1.27-1.07-2.52-2.21-3.56-3.5   c-1.54-1.92-1.9-4.21-1.24-6.57c0.47-1.68,1.07-3.34,1.76-4.94c0.79-1.83,0.98-1.86,2.92-1.67c2.78,0.27,5.55,0.55,8.33,0.77   c1.01,0.08,2.09,0.19,3-1.03c-0.44-0.28-0.82-0.67-1.25-0.75c-1.25-0.23-2.53-0.49-3.79-0.45c-2.92,0.09-4.9-1.53-7.07-3.57   c0.72-0.6,1.31-1.21,1.99-1.66c4.2-2.76,5.42-7.1,6.23-11.65c0.08-0.46,0.02-0.96-0.09-1.42c-0.55-2.4-1.13-4.79-1.77-7.48   c-3.39-0.21-6.9-1.17-10.21,1.04c-1.48,0.99-3.01,1.71-4.93,1.12c-1.99-0.62-3.31-1.89-3.36-3.88c-0.12-4.49,0.5-8.85,4.64-11.63   c2.61-1.76,4.22-3.56,3.52-7.17c-0.51-2.64-0.04-5.58,0.47-8.3c0.86-4.5,0.2-8.71-1.48-12.86c-0.6-1.48-1.26-2.93-1.78-4.44   c-0.67-1.97-0.18-2.92,1.72-3.81c2.23-1.05,4.49-2.06,6.67-3.22c2.37-1.26,4.22-3.11,5.55-5.46c1.57-2.78,3.25-5.48,3.83-8.71   c0.14-0.76,0.81-1.56,1.44-2.09c5.87-4.91,11.77-9.79,17.7-14.63c0.85-0.69,1.91-1.12,2.89-1.65c2.86-1.56,3.36-4.02,1.27-6.49   c-0.72-0.85-1.55-1.6-2.37-2.36c-1.56-1.44-3.28-1.98-5.48-1.46c-4.03,0.94-8.11,1.7-12.2,2.36c-2.07,0.34-3.57,1.37-4.64,3.02   c-1.21,1.87-2.36,3.79-3.38,5.77c-1.53,2.98-4.17,4-7.24,4.31c-0.69,0.07-1.45-0.06-2.1-0.29c-1.5-0.55-2.66-1.49-2.85-3.21   c-0.16-1.52,0.72-3.04,2.51-3.67c2.22-0.78,3.39-2.28,4.44-4.31c1.97-3.79,4.97-6.59,9.19-7.89c1.45-0.44,2.87-0.97,4.31-1.45   c1.23-0.41,2.12-1.13,2.21-2.52c0.12-1.85,1.24-2.75,2.85-3.43c2.97-1.26,3.07-2.02,0.53-4.03c-2.93-2.33-5.99-4.51-8.92-6.83   c-1.68-1.33-3.36-2.71-4.8-4.3c-0.93-1.02-1.59-2.38-2.05-3.69c-0.51-1.49,0.18-2.43,1.81-2.7c1.33-0.22,2.7-0.2,4.05-0.29   c3.26-0.22,6.52-0.39,9.76-0.68c0.93-0.08,1.88-0.4,2.75-0.77c2.94-1.25,3.94-4.39,2.22-7.07c-1.45-2.27-2.19-4.79-2.63-7.38   c-0.19-1.13,0.04-2.38,0.28-3.52c0.29-1.35,1.19-2.19,2.62-2.46c4.7-0.87,8.88-2.94,12.9-5.47c3.03-1.91,6.2-3.62,9.34-5.34   c1.18-0.65,1.77-1.45,1.64-2.86c-0.18-1.9-0.13-3.83-0.34-5.73c-0.16-1.42,0.03-2.69,0.84-3.86c0.04-0.07,0.09-0.13,0.12-0.21   c1.14-2.84,3.15-4.65,6.12-5.51c3.9-1.12,5.88-4.28,7.24-7.72c1.61-4.06,2.95-8.22,3.41-12.65c0.19-1.82,1.23-3.59,2.05-5.3   c0.67-1.4,1.09-2.78,1.09-4.35c0-1.51,0.24-3.02,0.24-4.53c-0.01-2.23,0.46-4.11,2.28-5.73c1.61-1.44,1.07-3.22-0.93-4.1   c-0.65-0.29-1.34-0.54-2.03-0.68c-1.01-0.21-1.9,0.01-2.46,1c-0.24,0.42-0.55,0.78-0.78,1.2c-1.33,2.42-3.1,4.27-5.56,5.72   c-2.15,1.27-4.07,3.12-5.71,5.04c-3.06,3.57-6.06,1.81-8.51-0.78c-2.1-2.23-3.73-4.97-5.27-7.65c-0.56-0.98-0.4-2.46-0.31-3.69   c0.03-0.39,0.87-0.85,1.42-1.03c2.42-0.8,4.86-1.53,7.31-2.26c2.95-0.88,4.83-3.12,4.55-6.65c-0.03-0.39-0.03-0.89-0.26-1.14   c-1.7-1.86-2.9-4.23-5.55-5.08c-2.35-0.75-4.64-1.7-6.99-2.47c-1.19-0.39-2.05-1.06-2.87-2.01c-2.28-2.65-4.62-5.26-7.06-7.78   c-1.56-1.6-2.68-3.37-2.99-5.58c-0.31-2.21-0.57-4.43-0.72-6.65c-0.15-2.16,0.55-3.03,2.72-3.48c1.4-0.29,2.84-0.42,4.26-0.6   c3.03-0.37,5.66-1.57,7.86-3.71c0.29-0.28,0.62-0.51,0.89-0.8c4.17-4.35,9.52-3.8,14.11-1.66c0.79,0.37,1.56,0.83,2.39,1.08   c2.84,0.87,5.98-0.93,6.66-3.8c0.3-1.24,0.54-2.5,0.68-3.76c0.38-3.39-2.03-7.82-5.05-9.42c-1.29-0.69-2.63-0.58-3.96-0.21   c-8.35,2.3-16.83,2.49-25.38,1.71c-3.39-0.31-4.15-1.16-4.16-4.51c0-0.88-0.04-1.76,0.07-2.63c0.36-2.74-0.88-4.77-2.8-6.51   c-0.29-0.27-0.6-0.52-0.91-0.77c-1.46-1.17-2.46-2.55-1.86-4.54c0.65-2.16,2.29-3.48,4.52-3.65c2.54-0.19,5.09-0.38,7.64-0.49   c2.6-0.11,4.67-1.04,6.41-3.1c2.32-2.73,4.91-5.22,7.39-7.8c0.39-0.4,0.8-0.78,1.19-1.18c3.21-3.35,3.49-5.98,0.97-9.83   c-0.7-1.06-1.5-2.07-2.38-2.99c-3.35-3.52-6.59-7.15-10.63-9.94c-3.88-2.68-5.67-6.79-7.2-11.02c-0.25-0.71-0.22-1.59-0.08-2.35   c0.32-1.73,1.46-2.42,3.17-1.93c0.99,0.29,1.9,0.81,2.85,1.23c4.08,1.79,7.82,0.17,9.47-3.97c0.65-1.62,0.79-3.16,0.4-4.88   c-1.06-4.66-2.04-9.32-1.98-14.17c0.04-3.24,1.22-5.52,4.03-7c1.48-0.78,3-1.49,4.45-2.31c1.31-0.74,2.68-1.47,3.8-2.45   c2.09-1.83,4.09-3.79,6.02-5.79c2.91-3.02,3.36-7.5,1.18-10.51c-1.32-1.82-2.79-2.37-4.75-1.31c-2.1,1.13-4.09,0.89-6.24,0.37   c-2.46-0.6-5.01-0.85-7.46-1.49c-1.58-0.41-3.33-0.92-4.51-1.96c-1.76-1.55-3.28-3.48-4.5-5.49c-0.62-1.03-0.54-2.6-0.46-3.91   c0.07-1.08,0.49-2.19,0.97-3.18c1.53-3.22,2.06-6.69,2.63-10.15c0.62-3.73-1.02-6.71-3.66-9.13c-0.69-0.63-1.86-1.01-2.83-1.03   c-4.3-0.12-8.6-0.08-12.91-0.07c-1.15,0-1.96,0.5-2.15,1.79c-0.1,0.7-0.5,1.36-0.56,2.06c-0.1,1.08-0.14,2.18,0,3.25   c0.14,1.1,0.61,2.15,0.77,3.25c0.23,1.54-0.08,2.01-1.55,2.5c-1.21,0.4-2.44,0.75-3.69,1c-1.69,0.34-2.67,1.22-2.85,3   c-0.15,1.45-0.76,2.69-1.87,3.76c-2.06,1.99-4.34,2.59-7,1.49c-3.46-1.43-6.91-2.88-10.37-4.33c-0.07-0.03-0.15-0.06-0.22-0.1   c-2.24-1.5-2.54-3.99-2.91-6.28c-0.32-1.98,0.96-3.34,2.74-4.35c1.67-0.94,3.31-1.38,5.23-1.26c3.29,0.2,4.03-0.34,5.23-3.33   c0.68-1.69,1.3-3.39,2.06-5.37c-2.71-0.38-3.68-2.37-4.65-4.24c-1.35-2.59-3.46-4.34-5.86-5.82c-2.39-1.48-4.57-3.17-6.36-5.37   c-1.07-1.32-1.17-1.25-2.8-0.45c-0.62,0.31-1.34,0.62-2,0.6c-1.57-0.04-2.31,0.88-2.82,2.13c-0.48,1.18-0.82,2.42-1.37,3.57   c-1.38,2.87-3.25,3.86-6.39,3.28c-1.28-0.24-2.29,0.11-3.42,0.6c-2.62,1.13-5.27,2.25-7.99,3.1c-2.27,0.71-3.41-0.02-4.19-2.3   c-0.33-0.97-0.53-2.01-0.63-3.03c-0.19-1.92,0.53-3.47,2.3-4.35c3.38-1.68,6.33-3.94,9.2-6.39c1.24-1.06,3.14-1.53,4.81-1.89   c3.08-0.65,5.97-1.72,8.74-3.14c0.62-0.32,1.37-0.71,1.66-1.28c1.18-2.27,3.09-3.85,4.96-5.45c1.28-1.1,1.59-2.24,1-3.79   c-0.31-0.8-0.49-1.7-0.49-2.56c0-1.53-0.79-2.24-2.1-2.82c-2.1-0.93-4.17-1.98-6.17-3.13c-1.78-1.03-2.93-2.6-3.55-4.62   c-0.74-2.41-2.03-2.85-4.1-1.4c-1.36,0.95-2.6,2.1-3.82,3.25c-2.21,2.09-4.71,2.42-7.54,1.54c-2.3-0.72-3.53-2.33-4.15-4.54   c-0.43-1.54,0.36-2.63,1.43-3.55c2.14-1.83,3.88-3.97,5.4-6.34c1.2-1.87,1.58-3.71,1.03-5.89c-0.76-3.01-1.95-5.76-4.25-7.87   c-0.72-0.66-1.74-1.32-2.65-1.38c-3.8-0.24-4.93-2.94-6.07-5.96c0.58-0.25,0.99-0.52,1.43-0.6   C164.24,66.01,301.42,43.3,438.44,20.62c0.94,1.87,1.79,3.46,2.53,5.09c0.2,0.45,0.14,1.08,0.06,1.6c-0.12,0.7-0.44,1.37-0.57,2.07   c-0.32,1.74-0.08,2.14,1.43,3.14c2.98,1.98,5.97,3.95,8.89,6.02c1.87,1.34,2.7,3.19,2.56,5.59c-0.09,1.48-0.52,2.63-1.54,3.6   c-1.03,0.99-1.02,1.97-0.37,3.21c2.28,4.3,4.49,8.63,6.67,12.97c0.57,1.14,1.36,1.63,2.62,1.68c1.09,0.04,2.17,0.29,3.35,0.46   c0,1.12,0,2.04,0,3.28c1.8,0.75,3.67,1.57,5.59,2.29c0.35,0.13,0.91-0.1,1.28-0.31c0.46-0.26,0.82-0.69,1.46-1.25   c1.16,1.57,2.35,2.96,3.26,4.52c0.32,0.55,0.13,1.54-0.11,2.24c-1.19,3.47-2.48,6.9-3.72,10.35c-0.29,0.8-0.51,1.63-0.83,2.69   c2.63,0,4.97,0,7.44,0c0.12-1.04,0.23-1.96,0.38-3.24c2.07,0.76,4.01,1.54,5.99,2.19c2.04,0.67,4.11,1.26,6.2,1.78   c2.01,0.5,4.05,0.89,6.08,1.29c2.11,0.42,4.22,0.82,6.34,1.21c2.1,0.38,4.2,0.74,6.8,1.2c-0.72-2.04-1.31-3.69-2.07-5.85   c0.85,0.45,1.34,0.6,1.69,0.91c1.49,1.32,2.94,2.69,4.4,4.05c0.64,0.6,1.27,1.05,2.08-0.07c-1.33-1.99-1.61-4.28-1.25-6.66   c1.68-0.66,7.66-0.86,11.13-0.35c0.69,2.17-0.49,5.02,2.07,6.73c-1.39,1.94-1.82,3.83-0.92,5.96c0.38,0.91,0.85,1.49,1.83,1.63   c0.08,0.01,0.15,0.05,0.23,0.06c3.96,0.22,6.83,2.43,9.37,5.18c3.06,3.3,6.76,4.79,11.27,4.82c3.27,0.02,6.48,0.25,9.71-0.66   c2.44-0.68,4.67,0.67,5.43,3.13c0.53,1.73,0.83,3.58,0.91,5.4c0.07,1.68,0.73,2.66,2.23,3.28c1.55,0.63,3.07,1.32,4.58,2.04   c2.3,1.1,4.64,0.96,7,0.31c2.67-0.73,4.94-2.11,7.01-3.95c1.23-1.1,2.69-1.97,4.11-2.83c1.01-0.62,2.11-0.58,3.2-0.04   c4.67,2.32,8.06,5.67,8.92,11.06c0.31,1.97,0.72,3.93,0.87,5.91c0.19,2.36-0.5,3.49-2.66,4.22c-1.75,0.59-2.85,1.65-3.48,3.32   c-0.62,1.64-1.44,3.22-1.87,4.91c-0.97,3.74-3.83,5.26-7.07,6.41c-0.44,0.16-0.94,0.24-1.41,0.23c-2.11-0.03-3.79,0.71-5.34,2.2   c-0.77,0.74-2.12,1.07-3.24,1.18c-1.97,0.21-3.98,0.17-5.97,0.13c-2.27-0.05-4.25,0.65-5.96,2.09c-1.4,1.18-2.78,2.4-4.07,3.7   c-2.59,2.61-5.57,4.45-9.21,5.22c-2.81,0.59-5.1,2.23-7.21,4.08c-1.75,1.54-3.76,2.34-6.03,2.63c-2.37,0.31-4.54-0.07-6.64-1.32   c-5.22-3.11-5.54-3.18-6.69-9.09c-0.57-2.92-1.87-4.81-4.44-6.26c-3.56-2.01-6.31-2.03-9.7,0.43c-1.67,1.21-3.34,2.43-5.11,3.5   c-1.59,0.97-3.39,1.28-5.27,1.32c-1.83,0.03-3.67,0.15-5.47,0.43c-3.28,0.52-6.05,2.14-7.1,5.33c-1.8,5.47-5.25,9.78-8.9,14.02   c-0.99,1.15-1.85,2.41-2.9,3.5c-3.18,3.29-5.28,7.18-6.34,11.6c-0.86,3.59-5.57,6.53-10.24,4.3c-0.79-0.38-1.56-1.18-1.95-1.98   c-0.95-1.94-2.51-3.04-4.4-3.83c-2.47-1.04-5.01-1.53-7.7-1.16c-3.55,0.49-7.11,0.89-10.67,1.38c-3.53,0.49-4.5,2.06-3.46,5.45   c0.16,0.53,0.31,1.12,0.64,1.54c1.51,1.89,1.6,4.05,1.51,6.34c-0.19,4.96,1,9.48,4.54,13.19c0.77,0.8,1.44,1.71,2.06,2.64   c1.55,2.34,1.08,4.64-1.23,6.21c-1.95,1.33-4.12,2.08-6.47,2.25C433.47,234.52,432.35,234.53,431.01,234.58 M224.96,642.04   c0.21,0,0.42,0,0.61,0.39c-0.93,2.51-1.07,5.13-0.99,7.77c0.05,1.55,0.43,2.94,1.38,4.23c0.55,0.74,0.93,1.69,1.1,2.6   c0.36,1.94,0.53,3.92,0.79,5.95c5.87,0.54,11.28-0.73,15.8-4.61c8.12-6.96,16.69-13.32,25.42-19.46   c5.31-3.73,10.3-7.76,14.41-12.82c0.95-1.17,2.01-2.29,3.18-3.24c1.85-1.5,3.84-2.82,5.75-4.24c0.95-0.7,2.02-1.3,2.77-2.17   c2.73-3.22,6.01-5.67,9.77-7.54c1.43-0.71,2.8-1.53,4.26-2.16c3.19-1.37,5.97-3.33,8.56-5.61c1.55-1.37,3.04-2.81,4.61-4.16   c4.34-3.74,8.76-7.41,13.06-11.2c3.82-3.36,8.29-4.58,13.25-4.45c1.4,0.04,2.84-0.16,4.45,0.56c0,2.88-0.03,5.74,0.02,8.6   c0.01,0.67,0.09,1.59,0.51,1.97c1.45,1.29,3.07,2.39,4.56,3.52c2.19-2.38,2.92-4.86,2.5-7.73c-0.15-1.02,0.05-2.08-0.07-3.1   c-0.31-2.7,0.73-4.96,2.02-7.09c1.46-0.26,2.82-0.41,4.12-0.75c1.39-0.37,2.49-0.09,3.45,0.96c0.82,0.89,1.7,1.61,3.04,1.67   c0.47,0.02,1.13,0.6,1.32,1.08c0.85,2.13,1.87,2.77,4.07,2.24c0.85-0.21,1.66-0.55,2.48-0.85c2.05-0.73,2.25-0.66,2.68,1.52   c0.33,1.69,1.25,2.69,2.92,3.06c0.7,0.15,1.39,0.34,2.1,0.47c3.61,0.67,7.21,1.36,10.34,3.45c0.07,0.05,0.27-0.09,0.41-0.14   c0.49-1.28,0.04-2.07-1.14-2.72c-1.51-0.84-2.11-2.47-1.63-4.24c0.38-1.4,1.49-2.06,2.86-2.13c2.06-0.1,4.12-0.09,6.18-0.11   c0.79-0.01,1.68,0.48,2.26-0.41c-2.16-1.93-4.28-3.72-6.28-5.65c-1.48-1.43-1.95-5.02-0.69-6.7c1.16-1.54,1.17-3,0.74-4.69   c-0.55-2.16,0.18-3.93,1.83-5.34c0.66-0.57,1.35-1.19,2.14-1.51c1.9-0.76,2.5-2.14,2.66-4.08c0.13-1.65-0.13-2.8-1.8-3.4   c-1.39-0.5-2.21-1.59-2.56-2.96c-0.63-2.46-1.31-4.93-1.68-7.44c-0.44-3.01,0.15-3.97,2.94-5.23c1.21-0.55,1.71-1.27,1.58-2.57   c-0.19-1.82-0.28-3.65-0.46-5.48c-0.27-2.71-0.21-5.32,0.73-7.99c1.97-5.63,3.64-11.37,5.45-17.06c0.29-0.92,0.71-1.83,0-2.72   c-1.28-1.58-0.84-3.11,0.11-4.62c0.78-1.23,0.86-2.46,0.4-3.87c-0.84-2.57-1.45-5.21-2.29-7.79c-0.38-1.18-0.22-2.13,0.4-3.15   c1.53-2.52,3.02-5.06,4.47-7.62c0.5-0.88,1.13-1.45,2.14-1.73c1.28-0.35,2.52-0.89,3.6-1.28c0.3-2.84,0.26-5.53,0.93-8.02   c0.69-2.54,2.07-4.89,3.23-7.52c-4.86-0.41-9.56-0.82-14.4-1.23c0.95-18.61,1.89-36.96,2.82-55.19c-2.01-0.85-3.06,0.38-4.76,1.17   c-0.18-0.04-0.36-0.09-0.34-0.41c1.54-2.11,3.62-2.55,6.22-2.06c-0.8,18.55-1.97,36.95-2.75,55.53c4.98,0.39,9.64,0.76,14.25,1.12   c2.52-3.81,5.74-5.88,10.24-5.96c1.71-0.03,3.46-0.58,5.08-1.2c2.55-0.97,4.16-2.84,4.56-5.65c0.23-1.66,0.71-3.3,0.76-4.95   c0.07-2.37,0.09-4.8-0.32-7.12c-0.54-3.09-2.52-4.49-5.59-4.28c-2.29,0.15-4.65,0.14-6.69,1.45c-0.88,0.56-1.62,0.41-2.36-0.29   c-2.36-2.22-3.52-4.89-3.07-8.15c0.23-1.69,0.99-2.99,2.63-3.71c1.02-0.45,1.99-1.01,2.96-1.55c1.08-0.6,1.19-1.59,1.06-2.69   c-0.14-1.19-0.98-1.57-1.97-1.74c-0.54-0.09-1.15-0.19-1.66-0.04c-2.63,0.77-4.8-0.32-7.01-1.51c-1.43-0.76-2.04-1.91-2.25-3.42   c-0.29-2.13,0.33-3.94,1.79-5.48c0.77-0.81,1.66-1.5,2.4-2.33c0.63-0.7,1.17-1.49,1.64-2.31c0.55-0.95,0.43-1.87-0.54-2.5   c-0.93-0.6-1.88-1.18-2.88-1.64c-3.63-1.65-4.55-5.08-2.13-8.21c0.44-0.56,1.04-1,1.47-1.56c1.3-1.7,2.62-3.39,3.79-5.18   c0.73-1.12,0.9-2.53,0.08-3.63c-1.72-2.29-3.6-4.45-6.44-5.49c-1.17-0.43-2.05-0.3-3.08,0.45c-0.85,0.62-1.97,1.04-3.01,1.16   c-1.41,0.16-2.86-0.01-4.29-0.11c-3.2-0.22-6.39-0.61-9.19-2.28c-5.63-3.37-10.84-7.28-15.33-12.11c-2.31-2.48-4.12-5.08-3.38-8.72   c0.05-0.23-0.01-0.48-0.04-0.71c-0.13-1.09,0.32-1.84,1.28-2.32c0.47-0.24,0.93-0.5,1.35-0.73c-0.44-1.73-2.14-1.65-3.19-2.49   c-0.03-1.63,1.17-2.41,2.16-3.27c1.24-1.07,1.87-2.3,1.63-3.98c-0.17-1.18-0.15-2.38-0.21-3.58c-0.13-2.47,0.43-4.51,2.93-5.69   c2.03-0.95,2.43-2.79,2.18-4.85c-0.06-0.47-0.14-0.95-0.25-1.41c-0.69-2.9-0.92-5.81-0.43-8.77c0.28-1.68,0.36-3.4,0.55-5.34   c-4.53,0.47-8.76,0.9-13.06,1.34c-0.13-1.33-0.23-2.33-0.34-3.48c-1.42-0.35-2.71-0.83-4.03-0.96c-3.33-0.33-6.67-0.52-10.01-0.73   c-3.9-0.24-7.8-0.44-11.7-0.69c-0.86-0.05-1.59,0.01-2.24,0.96c-0.21,0-0.42,0-0.62-0.37c0.23-0.57,0.46-1.15,0.71-1.78   c7.73,0.43,15.37,0.84,23,1.31c1.1,0.07,2.19,0.41,3.28,0.63c1.89,0.39,3.21,1.31,3.11,3.49c0,0.11,0.2,0.23,0.35,0.39   c3.83-0.44,7.7-0.89,11.85-1.38c0.03-4.31,1.94-8.43,0.15-12.72c2.04-1.33,3.99-2.57,5.91-3.85c1.51-1.01,1.82-2.07,0.82-3.6   c-0.9-1.39-2.01-2.66-3.08-3.93c-0.67-0.79-1.55-1.4-2.16-2.22c-1.43-1.9-0.87-4.23,1.34-5.05c1.22-0.46,2.72-0.82,3.93-0.53   c2.26,0.54,4.07-0.15,5.84-1.27c1.2-0.76,2.48-1.5,3.45-2.51c1.57-1.63,1.17-3.42-0.83-4.42c-0.92-0.46-1.89-0.83-2.85-1.21   c-2.07-0.81-4.21-1.49-6.23-2.42c-11.94-5.48-23.86-11.02-35.78-16.54c-0.78-0.36-1.57-0.69-2.34-1.04   c-22.78,27.85-44.26,56.46-66.22,84.65c-1.34-0.71-4.95-1.15-6.3-0.48c-2.94,1.46-6.09,0.89-9.18,1.44   c-0.5-1.5-1.54-1.74-2.84-1.78c-2.53-0.06-5.05-0.29-7.72-0.46c-0.2-2.45-0.42-4.74-0.56-7.03c-0.06-1.02-0.24-1.79-1.29-2.31   c-0.62-0.3-1.01-1.06-1.45-1.55c-1.9,0-3.77,0-5.79,0c0,2.65,0,5.1,0,7.7c-3.05,0.69-5.97,1.35-9,2.03   c-0.09,1.48-0.17,2.88-0.27,4.51c-1.85,0-3.57,0-5.53,0c0,2.92,0,5.6,0,8.45c-3.02,0-5.81,0.11-8.58-0.04   c-2.12-0.11-3.92,0.32-5.42,1.87c-1,1.04-2.23,1.35-3.68,1.29c-2.31-0.1-4.62-0.05-6.93,0c-0.49,0.01-0.97,0.31-1.69,0.6   c-0.24,0.12-0.48,0.25-1.02,0.28c-0.75-0.53-1.51-1.06-2.27-1.59c0.05-0.13,0.1-0.26,0.15-0.39c0.79,0,1.57,0,2.36,0   c3.19,0,6.38,0.05,9.56-0.04c0.81-0.02,1.85-0.23,2.38-0.76c2.17-2.17,4.73-2.67,7.64-2.4c1.5,0.14,3.03,0.04,4.54,0.01   c0.6-0.01,1.21-0.12,2-0.21c0-2.74,0-5.34,0-8.19c1.92,0,3.64,0,5.42,0c0.1-1.58,0.18-2.91,0.27-4.3c3.04-0.68,5.96-1.34,9.1-2.05   c0-2.73,0-5.31,0-8.21c2.51,0,4.76,0,7.19,0c0-1.51,0-2.7,0-3.88c0.02-6.46,0.05-12.91,0.04-19.37c0-1.22,0.1-2.37,0.88-3.38   c1.22-1.56,1.11-3.32,0.82-5.24c-1.07,0.27-1.98,0.49-2.9,0.72c-1.27-1.87-2.93-1.14-4.48-0.66c-1.28,0.4-2.47,1.12-3.76,1.52   c-1.32,0.41-2.61,0.46-3.75-0.71c-0.49-0.5-1.4-0.87-2.1-0.84c-3.6,0.14-7.17-1.41-10.78-0.22c-0.14,0.05-0.28,0.13-0.41,0.2   c-0.65,1.16-1.31,2.32-1.99,3.52c-2.52-1.07-4.84-2.13-7.22-3.02c-1.08-0.41-2.29-0.69-3.44-0.68c-5.58,0.03-11.15,0.19-16.73,0.28   c-4.46,0.07-8.92,0.14-13.39,0.15c-1.14,0-2.02,0.22-2.51,1.35c-0.15,0.35-0.43,0.65-0.77,1.14c-5.74-0.23-11.53-0.46-17.43-0.7   c0.24-0.94,0.42-1.67,0.65-2.56c-2.78-0.81-5.12-2.44-8.04-2.47c-9.16-0.09-18.33-0.24-27.49-0.35c-0.92-0.01-1.84,0.08-2.82,0.13   c0.14,2.4,0.26,4.53,0.39,6.74c-3.21,0-6.22-0.01-9.23,0c-2.95,0.01-5.91-0.28-9.34-0.14c0.95,1.04,1.56,1.64,2.11,2.29   c2.01,2.36,4.25,4.57,5.94,7.14c2.48,3.77,1.96,6.86-1.14,10.17c-0.27,0.29-0.58,0.54-0.86,0.83c-2.71,2.81-5.55,5.5-8.08,8.47   c-1.86,2.17-4,3.25-6.8,3.35c-2.71,0.1-5.41,0.35-8.11,0.5c-1.92,0.1-2.77,1.46-3.36,2.96c-0.56,1.41,0.3,2.42,1.38,3.24   c0.32,0.24,0.62,0.49,0.92,0.76c2.41,2.13,3.8,4.65,3.29,8c-0.15,1.02-0.13,2.07-0.1,3.1c0.04,1.27,0.73,2.07,2.01,2.28   c0.55,0.09,1.11,0.13,1.66,0.17c8.3,0.56,16.55,0.52,24.65-1.8c1.77-0.51,3.67-0.55,5.25,0.74c3.61,2.96,5.78,6.56,4.83,11.45   c-0.15,0.78-0.41,1.56-0.43,2.35c-0.1,3.35-5.34,6.15-8.44,4.81c-0.73-0.32-1.44-0.67-2.17-1c-5.36-2.46-9.28-2.33-12.96,1.32   c-0.39,0.39-0.85,0.72-1.26,1.11c-2.08,2-4.56,3.17-7.4,3.6c-1.65,0.25-3.32,0.42-4.95,0.76c-1.75,0.37-2,0.71-1.85,2.44   c0.18,2.06,0.5,4.11,0.73,6.17c0.24,2.18,1.38,3.81,2.89,5.34c2.18,2.2,4.23,4.54,6.32,6.83c0.53,0.58,1.01,1.2,1.63,1.93   c2.85-1.36,5.65-2.66,8.42-4.03c0.38-0.19,0.86-0.62,0.9-0.99c0.25-2.04,1.78-2.89,3.51-3.61c0.14,0.14,0.29,0.29,0.25,0.69   c-0.98,0.88-2.45,1.38-2.59,2.95c-0.1,1.13-0.76,1.64-1.7,2.06c-1.67,0.75-3.31,1.56-4.96,2.36c-0.65,0.32-1.28,0.68-2.24,1.18   c2.24,0.81,3.99,1.62,5.83,2.07c3.51,0.85,5.18,3.79,7.36,6.15c0.19,0.21,0.31,0.59,0.28,0.87c-0.32,2.31-0.03,4.77-2.21,6.54   c-0.95,0.77-1.87,1.42-3.03,1.76c-2.8,0.84-5.59,1.71-8.24,2.52c-0.41,1.73,0.05,2.84,1.01,3.98c1.27,1.52,2.35,3.22,3.33,4.94   c0.78,1.37,1.8,2.36,3.18,3.1c2.09,1.11,2.39,1.11,4.17-0.52c2-1.82,3.77-4.04,6.06-5.36c2.79-1.6,4.57-3.85,6.13-6.45   c0.41-0.68,0.88-1.31,1.29-1.92c2.86-0.63,4.98,0.91,7.22,1.93c0.27,2.35-0.02,4.39-2,5.84c-0.86,0.63-1,1.53-1.03,2.53   c-0.06,2.07-0.3,4.13-0.31,6.2c-0.01,1.73-0.51,3.25-1.29,4.77c-0.72,1.4-1.58,2.87-1.75,4.38c-0.49,4.48-1.75,8.74-3.41,12.88   c-1.56,3.89-3.65,7.45-8.07,8.76c-2.6,0.77-4.36,2.34-5.47,4.85c-0.53,1.2-0.93,2.31-0.82,3.63c0.18,2.14,0.19,4.3,0.43,6.43   c0.15,1.31-0.27,2.02-1.42,2.65c-3.5,1.9-6.94,3.91-10.39,5.89c-0.74,0.42-1.44,0.92-2.19,1.4c0.81,1.59,1.53,3,2.07,4.66   c-0.14,0.15-0.28,0.31-0.66,0.24c-0.79-1.37-1.59-2.73-2.26-3.88c-3.61,1.1-7.02,2.11-10.4,3.22c-0.53,0.17-1.17,0.74-1.3,1.24   c-0.3,1.13-0.59,2.38-0.38,3.49c0.48,2.58,1.21,5.1,2.78,7.31c0.48,0.67,0.81,1.6,0.82,2.42c0.05,2.76-1.64,5.05-4.27,6   c-0.67,0.24-1.37,0.5-2.07,0.55c-4.04,0.32-8.09,0.58-12.13,0.87c-1.07,0.08-2.26-0.27-3.13,0.74c-0.1,1.56,0.59,2.8,1.61,3.85   c0.94,0.97,1.91,1.93,2.98,2.76c3.26,2.56,6.59,5.03,9.85,7.58c1,0.78,2,1.61,2.8,2.58c1.06,1.27,0.82,2.3-0.56,3.18   c-0.6,0.38-1.26,0.69-1.93,0.93c-1.39,0.5-2.31,1.26-2.35,2.9c-0.04,1.52-0.98,2.45-2.41,2.92c-1.51,0.5-2.99,1.1-4.52,1.53   c-3.66,1.03-6.24,3.43-8.3,6.47c-2.11,3.12-2.75,3.81-6.16,6.11c-1.57,1.06-1.65,2.84-0.15,3.97c1.01,0.76,2.15,1.05,3.39,0.78   c2.59-0.56,4.73-1.63,5.94-4.27c0.92-2.01,2.18-3.89,3.42-5.73c1.15-1.7,2.74-2.75,4.89-3.09c3.93-0.62,7.88-1.25,11.72-2.27   c3.3-0.88,5.76,0.11,7.98,2.36c0.62,0.62,1.18,1.3,1.8,1.91c2.5,2.48,1.32,6.82-1.67,7.96c-1.99,0.76-3.53,2.13-5.12,3.45   c-4.48,3.71-8.93,7.46-13.46,11.12c-1.76,1.43-3.5,2.77-3.54,5.31c-0.01,0.3-0.22,0.59-0.34,0.89c-2.61,6.92-7.11,12-14.24,14.48   c-0.45,0.16-0.89,0.34-1.33,0.53c-1.8,0.78-1.95,1.09-1.26,2.88c0.68,1.78,1.44,3.54,2.12,5.33c1.51,3.96,1.87,7.97,1.07,12.19   c-0.51,2.71-0.52,5.54-0.58,8.32c-0.03,1.41,0.32,2.83,0.51,4.33c-1.41,1.12-2.71,2.31-4.16,3.27c-3.64,2.41-4.3,6.16-4.51,10.03   c-0.13,2.39,1.33,3.85,3.61,3.86c0.88,0,1.88-0.39,2.62-0.9c2.28-1.61,4.81-2.15,7.49-1.79c3.01,0.41,5.85,0.06,8.61-1.18   c0.21-0.09,0.46-0.11,0.76-0.18c0.84,0.84,1.82,1.42,3.27,1.06c-0.43-3.15-0.84-6.2-1.26-9.31c5.11-1.76,10.04-3.45,15.01-5.16   c-0.16-0.89-0.25-1.52-0.38-2.14c-0.61-2.88-1.19-5.77-1.86-8.64c-0.2-0.88-0.05-1.4,1.16-1.33c0.16,0.15,0.33,0.29,0.25,0.7   c0.03,0.77-0.03,1.55,0.12,2.3c0.64,3.26,1.35,6.5,2.05,9.84c-5.14,1.77-10.09,3.46-15.13,5.19c0.47,3.47,0.92,6.73,1.4,10.26   c-1.41-0.28-2.63-0.24-3.52-0.75c-1.95-1.12-3.46-0.09-5.13,0.55c-0.36,2.36,0.62,4.44,1.01,6.61c0.22,1.23,0.43,2.56,0.2,3.76   c-0.89,4.64-2.55,8.89-6.78,11.62c-0.17,0.11-0.26,0.35-0.42,0.58c1.37,1.53,2.95,2.37,5.01,2.39c1.51,0.01,3.01,0.36,4.52,0.42   c1.22,0.05,1.8,0.82,1.91,1.77c0.12,1.01-0.49,1.85-1.62,2c-0.94,0.13-1.89,0.27-2.83,0.21c-3.17-0.21-6.33-0.5-9.73-0.78   c-0.73,2.07-1.44,3.99-2.07,5.94c-0.57,1.78-0.29,3.54,0.79,5.02c0.92,1.26,2.02,2.48,3.26,3.42c3.18,2.43,4.32,5.45,3.73,9.42   c-0.41,2.76-1.57,4.97-3.44,6.91c-0.89,0.92-1.74,1.9-2.74,2.66c-3.11,2.37-4.92,5.51-6.1,9.19c-1.89,5.88-7.94,8.28-13.42,5.47   c-0.57-0.29-1.1-0.65-1.68-0.91c-1.59-0.72-2.41-2.02-2.8-3.65c-0.24-0.99-0.46-1.98-0.65-2.81c-1.78-0.44-3.38-0.83-5.07-1.24   c-0.13,0.22-0.34,0.46-0.43,0.75c-0.68,2.05-1.66,3.77-4.01,4.33c-0.4,0.09-0.97,0.8-0.94,1.18c0.17,2.32-1.31,3.57-2.77,4.99   c-2.08,2.01-3.33,4.41-2.84,7.49c0.41,2.59,0.71,5.21,0.89,7.83c0.27,3.8,2.41,6.29,5.39,8.28c1.93,1.28,3.53,1.03,4.95-0.84   c0.58-0.76,1.01-1.62,1.54-2.42c1.18-1.8,2.24-3.69,3.59-5.35c2.69-3.33,6.01-4.18,10.06-2.79c3.25,1.11,4.09,2.15,4.18,5.55   c0.06,2.27,0.54,4.41,1.37,6.5c0.29,0.72,0.6,1.56,0.5,2.29c-0.72,5.36-1.49,10.67-4.41,15.47c-3.35,5.51-6.38,11.21-9.48,16.87   c-1.2,2.18-1.91,4.57-1.96,7.08c-0.1,5.15,0.75,10.17,2.67,14.94c0.54,1.34,1.68,2.49,2.72,3.55c0.7,0.71,1.65,1.29,2.81,0.7   c1.25-0.65,2.04-1.9,1.88-3.31c-0.12-1.1-0.46-2.19-0.59-3.29c-0.3-2.44-0.6-4.89-0.74-7.34c-0.05-0.82,0.11-1.93,0.63-2.46   c2.12-2.19,1.55-4.06-0.36-5.92c-0.17-0.16-0.27-0.4-0.41-0.59c-1.47-1.92-1.89-3.97-0.86-6.26c0.45-1.01,0.75-2.1,1.05-3.17   c0.34-1.2,1.05-2.06,2.04-2.82c7.04-5.35,14.05-10.75,21.08-16.13c0.48-0.37,1.02-0.66,1.49-0.95c0.86,0.7,1.6,1.29,2.17,1.75   c2.73-1.97,5.31-3.84,7.89-5.7c-0.46-0.52-0.94-1.08-1.51-1.73c4.58-2.56,8.93-5.06,13.34-7.44c2.69-1.44,5.19-3.11,7.34-5.28   c2.73-2.75,5.92-4.73,9.49-6.26c3.43-1.48,6.69-3.34,10.01-5.06c1-0.52,1.88-1.2,2.17-2.4c0.33-1.39,1.28-2.11,2.75-2.44   c1.41,1.77,3.15,1.44,5.13,0.97c7.96-1.85,15.56-4.57,22.79-8.38c1.41-0.74,2.87-1.39,4.31-2.06c0.5-0.23,1.05-0.63,1.54-0.58   c3.07,0.32,5.42-1.64,8.1-2.5c0.43-0.14,0.83-0.47,1.17-0.79c2.11-1.92,4.2-3.87,6.47-5.96c0.14-0.92-0.51-1.7-1.47-2.23   c-0.98-0.53-2.07-0.86-3.01-1.43c-1.55-0.94-3.21-1.81-4.49-3.05c-1.62-1.57-1.49-2.99,0.1-4.58c1.06-1.07,2.27-1.98,3.65-2.77   c0.14,0.15,0.28,0.29,0.25,0.71c-0.95,0.85-1.93,1.67-2.83,2.56c-1.48,1.47-1.55,2.41,0.04,3.79c1.12,0.97,2.46,1.76,3.82,2.35   c2.53,1.09,5.11,2.01,5.37,5.37c3.99,0.48,7.78,0.43,11.59-0.01c2.8-0.33,5.44-1.11,7.98-2.31c4.38-2.07,8.76-4.15,13.15-6.21   c2.08-0.97,4.18-1.9,6.48-2.95c-0.28-3.53-0.43-7.01-0.88-10.45c-0.17-1.35-0.99-2.62-1.52-3.93c-0.33-0.8-0.86-1.58-0.97-2.41   C223.23,648.71,223.27,645.31,224.96,642.04 M511.81,92.74c-0.19-0.07-0.38-0.15-0.57-0.22c0.05,0.35,0.1,0.69,0.24,1.37   c0.15,0.56,0.29,1.12,0.49,1.89c-2.93-0.53-5.59-0.99-8.25-1.48c-2.66-0.49-5.33-0.95-7.98-1.51c-2.73-0.57-5.46-1.16-8.14-1.9   c-2.54-0.71-5.02-1.63-7.74-2.53c0,1.14,0,1.9,0,2.63c-3.33,0.51-8.94,0.36-10.51-0.29c1.44-3.95,2.88-7.92,4.32-11.87   c1.37-3.77,1.37-3.77-1.48-6.89c-0.5,0.46-1,0.93-1.53,1.42c-2.64-1.09-5.2-2.15-7.79-3.23c0-1.05,0-1.98,0-3.07   c-0.91-0.15-1.76-0.44-2.6-0.39c-1.71,0.1-2.51-0.77-3.21-2.21c-1.8-3.73-3.76-7.38-5.65-11.07c-0.72-1.41-1.43-2.82-2.16-4.27   c0.53-0.66,0.96-1.23,1.41-1.77c2.35-2.83,2.28-5.6-0.6-7.87c-2.74-2.16-5.72-4.03-8.67-5.91c-2.3-1.46-2.55-1.77-2.06-4.4   c0.12-0.62,0.39-1.22,0.49-1.84c0.07-0.45,0.13-0.99-0.05-1.36c-0.64-1.33-1.39-2.62-2.17-4.06c-15.08,2.5-30.23,5-45.58,7.54   c-0.68,4.95-1.34,9.82-2.02,14.82c3.39,0.61,6.55,1.18,9.73,1.75c0.2,5.21,0.39,10.14,0.58,15.3c3.97-0.77,7.81-1.52,11.89-2.31   c-0.29,1.8-0.52,3.26-0.72,4.47c0.67,0.73,1.46,1.19,1.55,1.75c0.28,1.81,1.63,2.17,2.99,2.65c1.39,0.49,2.75,1.02,4.2,1.56   c-0.79,1.68-1.37,3.09-2.09,4.41c-0.54,1-0.4,1.86,0.32,2.61c0.54,0.56,1.14,1.1,1.82,1.46c2.11,1.1,4.26,2.11,6.66,3.29   c-1.51,2.52-0.54,5.1-0.31,7.64c-1.01,0.22-1.79,0.36-2.56,0.56c-2.2,0.57-3.5,2.21-3.5,4.42c0.01,2.39,0.01,4.78,0.09,7.17   c0.03,1.1-0.28,1.99-0.98,2.84c-1.43,1.71-2.81,3.47-4.15,5.25c-0.41,0.55-0.81,1.23-0.87,1.88c-0.13,1.4-0.04,2.82-0.04,4.19   c2.11,0.64,3.92,1.88,5.81,0.13c0.14-0.13,0.46-0.07,0.69-0.09c1.93-0.2,3.86-0.41,6.08-0.64c0.09,0.13,0.43,0.56,0.7,1.03   c1.82,3.18,3.73,6.32,5.39,9.58c0.85,1.67,1.35,3.55,1.8,5.39c0.41,1.68,0.53,3.43,0.75,4.96c2.54,1.54,5.19,1.39,7.72,1.36   c0.26,1.53,0.48,2.76,0.67,3.9c1.27,0.36,1.74-0.05,1.8-1.09c0.05-0.92,0.14-1.84,0.25-3.15c2.59,1.22,4.84,2.28,7.17,3.38   c-1.1,2.78-2.79,5.02-3.75,7.78c2.3,0.43,4.32,0.82,6.35,1.17c1.44,0.25,2.67,0.77,3.83,1.74c3.81,3.19,2.13,2.88,7.17,2.07   c1.23-0.2,2.16,0.07,2.95,1.05c0.45,0.56,0.97,1.07,1.54,1.49c0.42,0.3,0.99,0.62,1.47,0.58c2.35-0.21,4.69-0.54,7.47-0.87   c-1.31-2.26-2.34-4.31-3.64-6.18c-1.18-1.69-1.42-3.3-0.43-5.09c0.87-1.58,0.8-3.18,0.12-4.81c-0.18-0.44-0.22-0.94-0.42-1.37   c-0.67-1.43-0.37-2.73,0.23-4.12c1.01-2.33,2.05-4.68,2.69-7.13c0.5-1.92,1.46-2.9,3.35-3.12c0.47-0.06,0.95-0.13,1.42-0.2   c4.85-0.66,9.3-2.59,13.83-4.13c0.09-1.09,0.16-1.95,0.21-2.57c3.02-0.73,5.89-1.31,8.69-2.14c1.77-0.53,3.49-1.13,5.36-0.94   c1.2,0.12,2.13-0.35,3.03-1.11c1.84-1.53,3.69-3.05,5.63-4.44c0.87-0.62,1.91-1.12,2.95-1.36c3.41-0.81,4.22-2.08,3.27-5.48   c-0.11-0.38-0.22-0.77-0.38-1.13c-0.96-2.16-1.05-4.29,0.34-6.38c-1.79-1.68-1.04-3.96-1.59-5.89c-3.07,0-6.05,0-9.18,0   c0.14,1.68-0.07,3.23,0.96,4.5c1.35,1.65,1.37,1.71-0.19,2.89c-0.49,0.37-1.03,0.66-1.56,1C514.05,94.74,513.03,93.86,511.81,92.74    M285.74,189.34c0.6-0.12,1.19-0.23,1.9-0.37c0.42,6.52,0.82,12.84,1.26,19.67c2.18-2.01,3.96-3.65,5.74-5.29   c-0.53,3.44-1.01,6.74-3.18,9.49c-1.42,1.81-2.62,3.8-3.91,5.73c-0.29,0.43-0.49,0.92-0.86,1.63c2.01,0,3.74-0.05,5.46,0.02   c0.67,0.03,1.68,0.1,1.94,0.52c0.98,1.62,2.21,1.16,3.51,0.78c0.13-0.72,0.25-1.39,0.42-2.35c1.71,0.36,3.26,0.61,4.77,1.03   c1.3,0.36,2.51,1.08,3.83,1.34c1.54,0.31,3.45,0.9,4.65,0.28c1.98-1.01,3.86-0.43,5.77-0.61c0.56-0.05,1.23,0.27,1.73,0.6   c1.41,0.93,2.67,2.01,2.41,4.17c0.9-0.36,1.55-0.6,2.18-0.89c2.54-1.16,5.1-2.27,7.58-3.52c1.34-0.68,2.45-0.7,3.78,0.07   c2.4,1.39,4.89,2.6,7.48,3.95c1.89-2.46,3.61-4.85,5.5-7.09c1.27-1.51,2.66-2.97,4.22-4.16c6.69-5.16,13.41-10.29,20.23-15.27   c1.88-1.37,2.7-2.75,2.44-5.13c-0.29-2.66-0.07-5.37-0.07-8.26c4.23,0.61,8.36,1.2,12.65,1.82c0.23-5.64,0.45-11.01,0.68-16.59   c-1.8,0-3.29,0-5.06,0c0.17-2.96-1.3-5.08-2.97-7.14c-0.29-0.36-0.27-1.06-0.2-1.59c0.11-0.93,0.36-1.85,0.59-2.95   c0.87,0,1.67,0.08,2.43-0.03c0.5-0.07,1.13-0.3,1.4-0.67c1.96-2.69,3.85-5.44,5.83-8.27c-1.67-2.19-3.25-4.26-4.92-6.44   c-2.29,0.88-4.47,1.72-6.57,2.52c-0.66-3.63-1.28-7.03-1.91-10.47c-1.02,0-1.73-0.03-2.43,0.01c-3.1,0.17-6.23,0.21-9.3,0.61   c-2.72,0.35-5.02-0.22-7.07-1.96c-3.33-2.82-7.15-3.92-11.49-3.39c-1.34,0.16-2.71,0.05-4.06,0.01c-0.52-0.01-1.04-0.16-1.59-0.25   c-0.23-3.05,0.1-6.01-0.84-8.93c-2.79,0.21-5.49,0.41-8.19,0.62c-2.65,0.21-5.29,0.43-7.94,0.64c-0.06-0.16-0.11-0.33-0.17-0.49   c0.89-0.89,1.75-1.81,2.68-2.65c0.94-0.85,1.96-1.62,2.94-2.43c-0.44-0.93-0.53-1.48-0.64-2.02c-1.16-5.4-1.16-5.4-6.65-4.94   c-0.15,0.01-0.28,0.13-0.62,0.29c-0.49,1.49-1.03,3.12-1.61,4.9c-2.74-0.71-5.27-1.37-7.81-2.33c0-0.21,0-0.41,0.39-0.62   c2.21,0.51,4.41,1.02,6.65,1.54c0.99-2.57,1.66-4.86,1.44-7.42c-0.27-3.16-0.28-6.35-0.42-9.52c-0.03-0.61-0.14-1.21-0.23-1.89   c-1.85-0.11-3.57-0.2-5.4-0.31c-0.19-3.04-0.36-5.95-0.54-8.96c-1.92-0.11-3.65-0.2-5.53-0.3c-0.34-2.41,0.19-4.66,0.66-7.11   c-0.2-0.11-0.4-0.21-0.97-0.33c-1.93,0.38-3.86,0.75-5.88,1.15c-0.62-2.34-0.42-4.45,0.03-6.55c0.35-1.63,0.92-3.23,1.17-4.88   c1.01-6.77,1.94-13.55,2.89-20.33c0.2-1.39,0.34-2.79,0.54-4.45c-36.39,6.02-72.48,12-108.62,17.98c-0.09,1.71-0.16,3.2-0.26,4.97   c-2.42,0-4.68,0-6.87,0c-0.61,6.36,0.12,12.35,1.13,18.57c-4.42-1.04-8.47-2-12.81-3.02c0.3,1.02,0.41,1.65,0.66,2.21   c0.77,1.67,0.68,3.23,0.16,5.03c-0.82,2.81-1.26,5.75-1.65,8.66c-0.36,2.67-0.43,5.38-0.58,7.44c-0.83,0.96-1.49,1.42-1.74,2.05   c-1.26,3.14-1.5,6.62-3.33,9.6c-0.67,1.09,0.6,2.95,1.91,3.04c0.42-0.3,0.91-0.65,1.25-0.9c2.01,0.39,2.2,1.82,2.25,3.41   c1.98,0.5,3.87,0.98,5.82,1.47c0.62-1.46,1.13-2.69,1.64-3.89c3.06-0.31,5.97-0.6,8.93-0.9c0.12-0.85,0.21-1.53,0.31-2.25   c0.59-0.06,1.05-0.11,1.6-0.16c0.15-0.64,0.31-1.31,0.47-2.01c0.84-0.25,1.58-0.46,2.49-0.73c0.2,0.64,0.35,1.14,0.18,1.65   c-0.21,0-0.43,0-1.01-0.13c-1.38,0.34-0.34,1.73-1.13,2.43c-0.41,0.08-0.94,0.17-1.46,0.27c-0.15,0.67-0.29,1.27-0.44,1.96   c-3.07,0.31-6.07,0.6-9.18,0.91c-1.48,3.89-2.93,7.74-4.42,11.67c-1.68,0.1-3.26,0.21-4.84,0.28c-0.88,0.04-1.42,0.37-1.78,1.26   c-0.63,1.56-0.95,2.94,0.28,4.42c0.5,0.6,0.81,1.6,0.72,2.37c-0.18,1.71-0.67,3.4-1.07,5.28c-3-0.17-5.9-0.34-9.12-0.52   c0,1.58-0.06,2.92,0.02,4.25c0.07,1.2-0.19,2.21-1.12,3c-1.13,0.97-1.34,2.22-1.32,3.65c0.06,4.62,0.08,9.25,0,13.87   c-0.05,2.67,0,5.25,1.82,7.45c0.11,0.13,0.06,0.4,0.1,0.7c-2.11,0.38-4.13,0.75-6.25,1.13c0.57,6.79,1.12,13.42,1.69,20.18   c-4.7,0.88-9.19,1.73-13.86,2.61c0,1.81,0,3.36,0,5.18c-2.34,0-4.44,0-6.77,0c0.24,0.6,0.32,0.89,0.46,1.15   c2.21,4,0.99,7.65-1.55,10.85c-1.86,2.35-4.2,4.34-6.47,6.32c-1.18,1.03-2.65,1.75-4.03,2.53c-1.24,0.71-2.54,1.32-3.83,1.95   c-2.8,1.37-3.96,3.52-3.94,6.7c0.03,4.52,0.88,8.87,1.9,13.21c0.49,2.11,0.39,4.01-0.43,6.04c-1.8,4.43-6.07,6.38-10.46,4.58   c-0.74-0.3-1.42-0.75-2.17-0.98c-0.71-0.21-1.84-0.55-2.14-0.24c-0.5,0.53-0.54,1.54-0.64,2.37c-0.04,0.35,0.25,0.74,0.37,1.12   c1.57,4.79,4.44,8.55,8.64,11.38c1.5,1.01,2.92,1.71,4.8,1.65c2.46-0.08,4.93,0.2,7.4,0.24c2.85,0.05,5.71,0.01,8.62,0.01   c0.25-2.35-0.66-4.62-0.02-6.95c0.59,0,1.06-0.01,1.52,0c9.08,0.14,18.17,0.47,27.24,0.33c4.36-0.07,8.02,1.56,11.79,3.07   c0,0.78,0,1.44,0,2.13c5.06,0.21,9.98,0.41,14.83,0.6c0.61-0.89,1.1-1.6,1.59-2.31c0.46-0.04,0.85-0.09,1.24-0.1   c10.67-0.18,21.35-0.38,32.02-0.5c0.99-0.01,2.03,0.32,2.97,0.69c2.13,0.82,4.21,1.77,6.35,2.68c0.8-1.4,1.51-2.62,2.01-3.49   c1.2-0.15,2.03-0.24,2.85-0.35c0.61-0.08,1.32-0.42,1.82-0.22c2.3,0.93,4.71,0.64,7.08,0.83c0.76,0.06,1.78,0.14,2.19,0.63   c1.4,1.66,2.91,1.3,4.54,0.61c0.73-0.31,1.42-0.8,2.18-0.95c1.62-0.32,3.52-1.08,4.83-0.53c1.54,0.64,2.43,0.4,3.69-0.36   c0.43-12.11,1.62-24.12,3.56-35.98c1.32-0.62,2.46-1.15,3.63-1.7c0-1.63,0.03-3.11,1.18-4.34c1.49-1.58,2.39-3.4,2.68-5.68   c0.37-3,2.09-4.37,5.15-4.59c1.02-0.07,1.57-0.54,2.08-1.31c1.9-2.85,3.88-5.65,5.72-8.53c0.6-0.95,0.87-2.12,1.29-3.18   c-0.15-0.1-0.3-0.19-0.45-0.29c-1.18,1-2.35,2-3.85,2.98c-0.22-0.01-0.43-0.03-0.73-0.44c-0.39-6.34-0.77-12.69-1.16-19.11   c-0.49-0.04-0.87-0.08-1.26-0.42C285.4,189.91,285.4,189.7,285.74,189.34 M189.4,62.99c-5.26,0.87-10.53,1.74-15.79,2.61   c-13.91,2.29-27.81,4.58-41.72,6.88c-16.81,2.79-33.61,5.61-50.42,8.39c-17.68,2.93-35.35,5.82-53.03,8.75   c-0.42,0.07-0.82,0.31-1.23,0.47c0.81,2.48,2.18,3.9,4.82,4.12c1.07,0.09,2.24,0.82,3.07,1.58c2.56,2.33,3.88,5.36,4.66,8.71   c0.54,2.32,0.19,4.36-1.11,6.36c-1.62,2.49-3.32,4.87-5.67,6.72c-0.87,0.68-1.46,1.51-1.08,2.68c0.51,1.58,1.36,2.88,3.04,3.44   c2.41,0.79,4.68,0.85,6.64-1.12c0.9-0.9,1.86-1.74,2.86-2.54c0.74-0.59,1.52-1.19,2.38-1.55c2.14-0.91,3.92-0.16,4.45,2.07   c0.59,2.48,2.12,4.07,4.21,5.21c1.74,0.95,3.56,1.77,5.39,2.55c1.65,0.7,2.53,1.76,2.53,3.63c0,1.08,0.25,2.22,0.64,3.24   c0.52,1.38,0.31,2.33-0.83,3.34c-2.13,1.89-4.47,3.62-5.72,6.34c-0.23,0.49-0.97,0.79-1.52,1.07c-2.99,1.53-6.07,2.77-9.4,3.4   c-1.46,0.27-3.15,0.62-4.19,1.54c-2.95,2.61-6.03,4.95-9.57,6.67c-1.31,0.64-1.81,1.77-1.69,3.15c0.08,0.94,0.25,1.91,0.54,2.8   c0.58,1.77,1.24,2.2,3.06,1.61c2.56-0.84,5.1-1.81,7.52-2.98c1.45-0.7,2.77-1.02,4.34-0.69c2.33,0.49,3.79-0.22,4.87-2.37   c0.6-1.2,0.95-2.53,1.47-3.77c0.72-1.69,1.64-3.12,3.86-2.9c0.49,0.05,1.06-0.23,1.52-0.48c2.19-1.18,2.65-1.02,4.27,0.73   c1.39,1.51,2.84,3.09,4.56,4.16c3.61,2.23,6.73,4.8,8.6,8.7c0.45,0.93,1.04,1.64,2.3,1.78c1.43,0.16,1.81,1.02,1.33,2.42   c-0.53,1.58-1.16,3.14-1.78,4.69c-1.53,3.81-2.58,4.47-6.66,4.24c-0.32-0.02-0.64-0.09-0.95-0.07c-2.1,0.12-3.85,1.11-5.13,2.66   c-1.15,1.39,0.04,6.35,1.74,7.11c3.92,1.75,7.91,3.36,11.95,4.82c0.82,0.3,2.08-0.04,2.91-0.5c1.71-0.95,3.06-2.32,3.12-4.49   c0.06-2.11,1.27-3.13,3.21-3.54c0.78-0.16,1.54-0.39,2.3-0.62c0.88-0.27,1.75-0.57,2.63-0.85c-0.08-0.71-0.02-1.23-0.2-1.64   c-1.13-2.66-1.25-5.26-0.24-8.06c0.72-2.01,1.45-2.93,3.61-2.95c2.63-0.02,5.26-0.11,7.88-0.06c1.99,0.03,3.98,0.14,5.95,0.39   c0.82,0.1,1.74,0.5,2.34,1.06c2.99,2.81,4.82,6.13,4.09,10.41c-0.62,3.61-1.21,7.22-2.82,10.57c-0.44,0.92-0.79,1.96-0.87,2.96   c-0.08,0.99-0.05,2.18,0.44,2.97c1.04,1.68,2.29,3.26,3.67,4.67c1.17,1.2,2.7,2.07,4.44,2.13c2.9,0.1,5.69,0.65,8.41,1.62   c1.6,0.57,3.09,0.5,4.56-0.43c1.13-0.71,2.39-0.86,3.68-0.43c2.73,0.9,5.51,0.29,8.39,0.46c0.08-1.77,0.15-3.33,0.23-4.95   c4.55-0.85,8.91-1.66,13.5-2.52c-0.56-6.85-1.11-13.55-1.65-20.23c2.11-0.38,3.89-0.71,6.1-1.11c-2.05-2.04-1.67-4.33-1.68-6.53   c-0.01-5.1,0.03-10.2-0.03-15.3c-0.01-1.28,0.23-2.36,1.2-3.2c1.06-0.92,1.31-2.08,1.23-3.43c-0.09-1.48-0.02-2.96-0.02-4.67   c3.27,0.18,6.26,0.33,9.25,0.49c0.67-2.64,1.7-5.05-0.44-7.37c-0.37-0.4-0.32-1.34-0.21-1.98c0.15-0.85,0.62-1.64,0.83-2.48   c0.26-1.04,0.9-1.38,1.91-1.4c1.57-0.03,3.15-0.15,4.78-0.23c0.84-2.27,1.62-4.39,2.45-6.63c-2.36-0.65-4.41-1.22-6.49-1.8   c-0.06-0.58-0.08-1.06-0.17-1.52c-0.08-0.43-0.24-0.85-0.42-1.49c-0.74,0.52-1.29,0.91-1.89,1.33c-0.75-0.55-1.48-1.03-2.15-1.59   c-1.03-0.85-1.28-3.67-0.51-4.77c0.43-0.61,0.89-1.25,1.11-1.95c0.71-2.2,1.3-4.43,1.97-6.64c0.16-0.52,0.35-1.31,0.71-1.42   c1.3-0.41,1.08-1.39,1.12-2.31c0.19-5.11,0.73-10.16,2.29-15.07c0.26-0.82,0.05-1.87-0.18-2.75c-0.39-1.49-0.96-2.94-1.56-4.71   c4.64,0.79,8.73,2.28,13.3,2.93c-1.27-6.15-1.37-11.99-1.02-18.12c2.36,0,4.55,0,6.82,0c0-1.32,0-2.36,0-3.53   C194.04,62.23,191.93,62.56,189.4,62.99 M452.28,194.46c0.31,0.07,0.63,0.13,0.93,0.22c3.18,0.94,6.21,2.07,7.67,5.48   c0.25,0.57,0.95,1.08,1.56,1.35c3.44,1.5,7.57-0.38,8.46-3.77c1.08-4.1,2.7-7.97,5.78-11.08c1.32-1.33,2.39-2.92,3.64-4.48   c-2.38-1.96-4.58-3.78-6.81-5.62c0.3-0.33,0.41-0.56,0.59-0.66c1.67-0.89,2.67-2.16,2.63-4.16c-0.01-0.42,0.28-0.93,0.58-1.27   c1.95-2.24,2.45-5.01,2.59-7.79c0.1-1.97,0.22-3.79,1.94-4.93c-0.17-1.54-1-1.79-2.21-1.62c-2.05,0.29-4.11,0.51-6.17,0.75   c-0.96,0.11-1.92,0.23-2.58-0.75c-1.54-2.3-3.68-2.75-6.21-1.98c-0.07,0.02-0.16,0-0.24,0.03c-1.32,0.54-2.31-0.01-3.19-0.94   c-2.1-2.24-4.65-3.48-7.73-3.74c-1.34-0.11-2.67-0.43-4-0.71c-0.5-0.1-0.98-0.35-1.53-0.55c1.38-2.68,2.67-5.2,4.02-7.83   c-1.68-0.74-3.1-1.37-4.69-2.07c-0.18,1.37-0.31,2.44-0.46,3.57c-1.28,0-2.41,0-3.57,0c-0.26-1.39-0.49-2.62-0.66-3.5   c-2.35-0.52-4.42-1.07-6.51-1.4c-1.21-0.19-2.48-0.04-3.62-0.04c-1.59,4.66-1.59,4.66-6.04,3.85c-1.54,1.87-3.14,3.82-5.04,6.13   c2.14,1.92,4.2,3.77,6.38,5.73c-3.25,2.85-6.44,4.87-10.65,4.74c-2.87-0.09-5.74-0.06-8.61,0c-1.18,0.03-2.14-0.27-3.06-1.03   c-2.03-1.67-4.11-3.28-6.23-4.84c-0.6-0.44-1.4-0.79-2.12-0.83c-2.06-0.11-4.13-0.04-6.16-0.04c-2.31,3.29-4.51,6.42-6.69,9.52   c-1.1,0.08-2.12,0.15-2.99,0.21c-1,1.68-0.66,3.01,0.53,4.25c1.12,1.18,1.86,2.55,1.88,4.25c0,0.28,0.27,0.55,0.5,1.01   c1.53,0,3.09,0,4.8,0c-0.26,6.33-0.52,12.44-0.78,18.83c-4.3-0.6-8.42-1.17-12.52-1.74c0,2.93-0.12,5.55,0.04,8.14   c0.11,1.77-0.36,2.9-1.85,3.99c-6.11,4.47-12.04,9.18-18.17,13.63c-3.71,2.7-7.04,5.7-9.59,9.53c-0.82,1.24-1.77,2.4-2.72,3.68   c0.55,0.31,0.88,0.52,1.23,0.68c18.64,8.64,37.28,17.28,55.93,25.9c1.27,0.58,2.63,0.95,3.89,1.4c-0.15-2.62-0.41-5.03-0.4-7.45   c0.03-4.06,0.21-8.12,0.37-12.18c0.07-1.83,0.14-3.67,0.43-5.47c0.36-2.23,1.71-3.7,3.99-4.23c2.81-0.65,5.96,0.78,7.1,3.49   c1.64,3.92,4.72,5.42,8.7,5.46c2.95,0.03,5.9-0.07,8.84-0.16c2.52-0.08,4.88-0.73,6.96-2.2c1.69-1.19,2.05-2.84,0.89-4.54   c-0.89-1.32-1.91-2.55-2.95-3.76c-2.5-2.92-3.56-6.36-3.78-10.11c-0.08-1.35-0.09-2.71,0-4.06c0.08-1.25-0.11-2.36-0.88-3.38   c-1.14-1.51-1.52-3.3-1.82-5.12c-0.26-1.55,0.24-2.72,1.61-3.38c1.06-0.51,2.21-0.83,3.35-1.12c0.84-0.22,1.73-0.25,2.59-0.37   C443.62,194.84,447.69,193.93,452.28,194.46 M499.98,162.2c4.65,0.38,8.61-1.14,11.96-4.33c0.34-0.33,0.74-0.61,1.15-0.85   c3.31-2.01,6.48-2.36,10.05-0.16c2.92,1.8,4.6,3.87,5.21,7.32c0.92,5.19,1.2,5.08,5.58,7.89c2.46,1.58,4.92,1.94,7.73,1.27   c1.63-0.39,2.92-1.18,4.17-2.2c2.29-1.88,4.66-3.66,7.64-4.27c3.58-0.73,6.43-2.61,8.95-5.17c1.17-1.19,2.41-2.32,3.7-3.39   c1.96-1.63,4.18-2.54,6.8-2.45c1.99,0.06,3.98-0.14,5.97-0.15c1.27-0.01,2.31-0.38,3.15-1.37c1.09-1.29,2.54-1.86,4.21-1.95   c0.72-0.04,1.46-0.03,2.14-0.22c3-0.87,5.56-2.25,6.55-5.57c0.57-1.9,1.42-3.71,2.14-5.56c0.68-1.74,1.87-2.84,3.71-3.41   c2.01-0.62,2.46-1.45,2.2-3.62c-0.21-1.82-0.58-3.61-0.89-5.42c-0.85-4.91-3.93-8.02-8.22-10.16c-0.85-0.42-1.71-0.43-2.5,0.1   c-1.25,0.83-2.58,1.6-3.69,2.6c-2.11,1.91-4.46,3.34-7.19,4.11c-2.33,0.66-4.71,1.02-7.04,0.09c-2.14-0.86-4.21-1.89-6.32-2.82   c-1.28-0.57-1.94-1.46-2.03-2.93c-0.11-1.82-0.33-3.66-0.76-5.43c-0.64-2.64-2.41-3.47-5.07-2.93c-2.01,0.41-4.07,0.67-6.12,0.73   c-2.06,0.06-4.14-0.17-6.2-0.37c-2.61-0.24-4.93-1.22-6.88-3c-1.53-1.4-3.13-2.72-4.59-4.19c-2.02-2.04-4.56-2.3-7.44-2.55   c0.46,2.76-0.43,4.72-3.12,5.09c-2.31,0.32-3.89,1.67-5.57,3.01c-1.12,0.9-2.3,1.72-3.35,2.7c-1.36,1.27-2.86,1.9-4.75,1.69   c-0.78-0.09-1.61-0.03-2.37,0.17c-3.27,0.89-6.52,1.86-9.95,2.86c-0.07,0.55-0.18,1.39-0.29,2.2c-0.54,0.22-0.97,0.43-1.42,0.58   c-4.74,1.63-9.39,3.56-14.45,4.05c-1.53,0.15-2.34,0.88-2.68,2.49c-0.38,1.77-1.01,3.55-1.87,5.14c-1.34,2.48-1.65,4.9-0.43,7.47   c0.66,1.39,0.64,2.8-0.1,4.13c-1.11,1.99-0.66,3.66,0.53,5.49c1.86,2.84,3.46,5.86,5.34,9.09c-2.61,1.11-2.43,3.31-2.62,5.48   c-0.23,2.7-0.74,5.38-2.63,7.54c-0.25,0.29-0.52,0.69-0.52,1.04c0,1.92-0.74,3.45-2.5,4.58c2.02,1.66,3.84,3.15,5.71,4.68   c3.11-3.49,6.03-6.72,7.28-11.1c0.92-3.24,2.93-5.7,6.11-6.9C496.03,162.68,497.82,162.56,499.98,162.2 M375.69,70.23   c0.86-0.1,1.72-0.2,2.7-0.32c0.95,1.95,1.7,3.9,2.78,5.63c1.69,2.71,1.53,5.58,1.29,8.57c-1.05,0.24-2.04,0.46-3.03,0.69   c0,4.62,0,9.12,0,13.71c-2.8,0.35-5.44,0.38-7.76-1.05c-1.25,0.98-0.93,1.93-0.56,2.95c1.19,3.21,2.36,6.43,3.51,9.65   c0.2,0.56,0.26,1.17,0.46,2.11c-2.4,0.38-4.58,0.71-6.76,1.08c-0.85,0.15-1.72,0.3-2.53,0.59c-2.28,0.82-4.36,2.21-7.07,2.09   c0,3.43,0,6.68,0,9.9c-2.47,1.34-4.82,2.28-7.6,2.1c-2.86-0.19-5.74-0.04-8.61-0.02c-0.22,0-0.44,0.12-0.76,0.22   c0,0.59,0,1.17,0,1.96c3.02,0,5.88,0.07,8.73-0.03c1.59-0.05,2.98,0.27,4.23,1.26c0.5,0.39,1.07,0.69,1.61,1.03   c5.29,3.37,5.28,3.33,11.55,2.79c3.07-0.26,6.16-0.38,9.4-0.57c0.72,3.41,1.4,6.67,2.13,10.14c1.94-0.73,3.92-1.47,5.95-2.23   c1.6,2.1,3.13,4.03,4.59,6.02c0.62,0.84,1.28,1.29,2.39,1.19c1.35-0.13,2.73,0.05,4.06-0.14c1.58-0.22,2.74,0.33,3.91,1.3   c1.89,1.58,3.85,3.11,5.86,4.54c0.66,0.47,1.57,0.82,2.38,0.85c3.27,0.09,6.54,0.15,9.8,0.01c2.95-0.13,5.4-1.49,7.64-3.62   c-2.02-2.03-3.9-3.93-5.84-5.89c2.11-2.55,4.07-4.93,6-7.27c0.77,0.17,1.31,0.29,1.85,0.42c2.11,0.52,2.29,0.42,2.88-1.58   c0.22-0.75,0.46-1.5,0.7-2.26c1.03-0.17,1.96-0.33,3.07-0.51c-0.16-2.77-0.23-5.56-1.39-7.98c-1.95-4.08-4.3-7.96-6.35-11.68   c-1.92,0.15-3.48,0.24-5.03,0.42c-0.6,0.07-1.32,0.18-1.75,0.55c-0.87,0.73-1.74,0.63-2.68,0.35c-1.21-0.36-2.43-0.72-3.6-1.07   c-0.8-4.95-0.53-6.01,2.39-9.71c0.49-0.63,0.94-1.3,1.5-1.86c1.42-1.45,2.02-3.11,1.85-5.17c-0.17-2.14-0.04-4.3-0.14-6.45   c-0.05-1.06,0.4-1.75,1.08-2.5c1.33-1.48,3.03-2.19,4.64-2.54c0-2.15,0-4.1,0-6.26c-0.17-0.1-0.56-0.35-0.98-0.56   c-1.71-0.85-3.46-1.63-5.14-2.54c-2.17-1.18-2.77-3.14-1.77-5.32c0.46-1,0.9-2.02,1.42-3.2c-1.62-0.59-3.13-1.06-4.58-1.69   c-0.59-0.26-1.36-0.76-1.49-1.29c-0.34-1.37-1.28-2.1-2.39-2.7c0.19-1.35,0.36-2.56,0.56-3.94c-3.96,0.78-7.6,1.5-11.47,2.26   c-0.22-5.36-0.43-10.51-0.64-15.73c-3.33-0.59-6.53-1.16-9.85-1.75c0.68-5.21,1.33-10.22,2.02-15.54   c-7.94,1.32-15.51,2.58-23.23,3.86c0.19,2.24,0.48,4.21,0.5,6.18c0.05,5.42,0.04,10.84-0.08,16.26c-0.05,2.19,0.14,4.28,0.9,6.33   c0.89,2.42,1.45,4.88,0.83,7.48c-0.06,0.26,0.13,0.57,0.23,0.98C371.8,70.56,373.53,70.42,375.69,70.23 M372.05,96.33   c1.91,1.12,3.9,1.7,6.26,1.02c0-4.51,0-9.01,0-13.54c1.12-0.25,2.1-0.47,3.03-0.67c0.42-4.16-0.54-7.16-3.82-11.94   c-2.9,0.24-5.88,0.49-8.92,0.74c0-0.75-0.08-1.24,0.01-1.69c0.62-2.91,0.06-5.68-0.96-8.4c-0.71-1.9-0.86-3.84-0.77-5.86   c0.18-3.98,0.34-7.97,0.29-11.95c-0.04-3.38-0.39-6.76-0.61-10.29c-1.45,0.2-2.54,0.32-3.63,0.5c-12.1,2-24.19,4.01-36.29,6.01   c-5.81,0.96-11.62,1.95-17.44,2.86c-1.17,0.18-1.65,0.69-1.74,1.83c-0.1,1.35-0.34,2.69-0.52,4.03   c-1.13,8.36-1.65,16.81-4.06,24.96c-0.41,1.38-0.23,2.93-0.33,4.57c2.72-0.49,5.1-0.92,7.99-1.44c-0.88,2.82-1.68,5.22-1.32,7.98   c1.8,0.11,3.58,0.21,5.47,0.32c0.17,3.1,0.32,5.93,0.48,8.85c1.94,0.13,3.71,0.25,5.52,0.37c0.23,5.11,0.45,9.94,0.68,15   c2.31,0,4.43,0,6.69,0c0.63,2.58,1.28,4.95,1.74,7.36c0.1,0.54-0.37,1.31-0.78,1.81c-0.77,0.94-1.68,1.77-2.53,2.64   c0.09,0.15,0.18,0.3,0.26,0.45c4.69-0.35,9.37-0.7,14.13-1.05c0.28,2.16,0.51,4.03,0.77,6.01c3.43,0,6.69-0.1,9.95,0.04   c2.27,0.1,4.16-0.68,6.16-1.83c0-3.53,0-7.01,0-10.62c1.21,0.08,2.25,0.34,3.2,0.16c1.07-0.2,2.1-0.74,3.1-1.23   c1.82-0.89,3.68-1.33,5.74-1.31c1.28,0.01,2.57-0.54,3.95-0.86c-0.29-0.92-0.45-1.53-0.67-2.12c-1.05-2.92-2.14-5.83-3.17-8.76   C369.22,98.33,369.85,96.95,372.05,96.33 M317.01,222.33c-1.11,0.04-2.38-0.25-3.29,0.21c-1.1,0.55-2.12,0.47-3.21,0.52   c-2.35,0.1-4.57-0.37-6.73-1.31c-1.09-0.48-2.23-0.84-3.38-1.16c-0.43-0.12-0.93,0.03-1.41,0.06c-0.07,0.69-0.13,1.29-0.2,1.95   c-0.48,0.09-0.87,0.23-1.25,0.23c-1.5,0.02-3.18,0.81-4.21-1.14c-0.16-0.3-1.02-0.32-1.56-0.31c-2.71,0.01-5.41,0.11-8.12,0.11   c-1.22,0-2.28,0.39-2.87,1.39c-0.59,1-1.04,2.15-1.23,3.28c-0.21,1.3-0.48,2.49-1.36,3.49c-1.54,1.76-2.98,3.56-2.28,6.11   c-1.43,0.67-2.64,1.24-3.89,1.83c-0.75,5.83-1.49,11.58-2.24,17.35c11.05,6.24,22.72,11.01,33.24,18.28   c1.39-1.45,3.13-2.55,3.78-4.1c1.19-2.81,3.16-4.13,5.95-4.43c1.45-0.15,2.26-0.86,3-1.99c0.5-0.75,1.18-1.59,1.96-1.89   c0.89-0.33,1.27-0.83,1.52-1.61c0.99-3.11,2.08-6.19,2.97-9.32c0.9-3.15,1.09-6.26-1.2-9.04c-1.38-1.68-1.76-3.7-1.61-5.84   c0.2-2.78,0.28-5.57,0.56-8.34C320.19,224.51,319.37,223.15,317.01,222.33 M293.97,275.36c0-1.59-0.08-3.19,0.03-4.78   c0.09-1.3-0.37-2-1.54-2.6c-7.1-3.61-14.16-7.29-21.24-10.94c-0.44-0.23-0.97-0.31-1.56-0.49c-0.45,6.73-0.91,13.25-1.29,19.77   c-0.09,1.55-0.41,2.93-1.26,4.26c-0.43,0.67-0.5,1.65-0.53,2.5c-0.09,2.87-0.1,5.74-0.12,8.6c-0.04,4.94-0.06,9.88-0.08,14.82   c0,0.8-0.11,1.69,0.87,2c1.38,0.44,1.38,1.53,1.45,2.67c0.14,2.12,0.37,4.23,0.57,6.42c1.35,0.07,2.49-0.03,3.55,0.22   c2.26,0.54,5.01-0.82,6.78,1.69c0.06,0.09,0.3,0.08,0.46,0.07c1.98-0.19,4.09-0.04,5.9-0.69c1.81-0.65,3.55-0.74,5.37-0.78   c0.69-0.01,1.39-0.08,2.32-0.14C293.75,303.85,293.86,289.85,293.97,275.36 M338.68,260.7c2.28-2.87,4.56-5.73,6.84-8.6   c2.33-2.93,4.67-5.85,7-8.78c2.24-2.83,4.54-5.62,6.74-8.49c-8.76-4.26-17.19-8.37-25.66-12.43c-0.47-0.23-1.25-0.16-1.75,0.06   c-3.21,1.41-6.36,2.93-9.57,4.33c-1.05,0.46-1.38,1.17-1.41,2.23c-0.03,1.43-0.07,2.87-0.26,4.29c-0.38,2.88,0.01,5.53,1.9,7.87   c0.92,1.13,1.56,2.48,1.4,3.97c-0.23,2.04-0.49,4.1-0.99,6.09c-0.6,2.39-1.49,4.7-2.22,7.05c-0.18,0.56-0.25,1.16-0.43,2   c3.61-0.66,6.47,0.79,9.38,2.08c1.87,0.83,3.77,1.61,5.7,2.43C336.48,263.43,337.47,262.2,338.68,260.7 M296.72,314.92   c12.6-16.32,25.2-32.64,37.93-49.13c-2.85-1.24-5.44-2.27-7.93-3.49c-2.5-1.22-5.03-1.22-7.68-0.72c-1.04,0.2-1.8,0.57-2.25,1.5   c-0.83,1.73-2.15,2.66-4.1,2.73c-0.54,0.02-1.08,0.25-1.62,0.38c-1.24,0.32-2.23,1.02-2.62,2.23c-0.92,2.91-3.49,4.16-5.52,6.03   c-2.61-1.66-5.05-3.21-7.62-4.84c-0.55,3.78-0.59,45.54-0.06,47.03C295.7,316.15,296.1,315.67,296.72,314.92z"/>
  <path class="st2" d="M508.08,87.85"/>
  <a xlink:title="MADAUM" id="madaum" onclick=""  class="cursor-pointer madaum-svg">
  <g id="region_madaum">
  <path id="madaum_zoom" class="st3" d="M409.93,397.65c1.16-0.92,2.21-2.14,4.22-1.29c-0.93,18.24-1.87,36.59-2.82,55.19   c4.84,0.41,9.55,0.82,14.4,1.23c-1.16,2.62-2.55,4.98-3.23,7.52c-0.67,2.49-0.64,5.18-0.93,8.02c-1.08,0.39-2.31,0.93-3.6,1.28   c-1.01,0.28-1.63,0.85-2.14,1.73c-1.45,2.56-2.94,5.11-4.47,7.62c-0.62,1.02-0.79,1.97-0.4,3.15c0.84,2.57,1.45,5.22,2.29,7.79   c0.46,1.41,0.38,2.63-0.4,3.87c-0.95,1.51-1.38,3.03-0.11,4.62c0.71,0.88,0.29,1.79,0,2.72c-1.81,5.69-3.47,11.43-5.45,17.06   c-0.94,2.67-1,5.27-0.73,7.99c0.18,1.82,0.27,3.65,0.46,5.48c0.13,1.29-0.36,2.02-1.58,2.57c-2.78,1.26-3.37,2.22-2.94,5.23   c0.36,2.51,1.04,4.98,1.68,7.44c0.35,1.36,1.17,2.46,2.56,2.96c1.66,0.6,1.93,1.74,1.8,3.4c-0.16,1.94-0.76,3.32-2.66,4.08   c-0.79,0.32-1.47,0.94-2.14,1.51c-1.65,1.41-2.38,3.18-1.83,5.34c0.43,1.68,0.42,3.14-0.74,4.69c-1.26,1.67-0.79,5.26,0.69,6.7   c1.99,1.93,4.12,3.72,6.28,5.65c-0.58,0.89-1.47,0.41-2.26,0.41c-2.06,0.02-4.12,0.01-6.18,0.11c-1.37,0.07-2.48,0.72-2.86,2.13   c-0.48,1.77,0.12,3.39,1.63,4.24c1.17,0.65,1.63,1.45,1.14,2.72c-0.14,0.05-0.33,0.19-0.41,0.14c-3.14-2.09-6.73-2.78-10.34-3.45   c-0.7-0.13-1.4-0.32-2.1-0.47c-1.66-0.36-2.58-1.36-2.92-3.06c-0.43-2.18-0.63-2.25-2.68-1.52c-0.82,0.29-1.64,0.64-2.48,0.85   c-2.2,0.53-3.22-0.11-4.07-2.24c-0.19-0.48-0.86-1.06-1.32-1.08c-1.35-0.05-2.23-0.77-3.04-1.67c-0.96-1.05-2.06-1.33-3.45-0.96   c-1.3,0.35-2.65,0.49-4.12,0.75c-1.29,2.13-2.33,4.39-2.02,7.09c0.12,1.02-0.08,2.09,0.07,3.1c0.42,2.87-0.31,5.35-2.5,7.73   c-1.5-1.13-3.12-2.23-4.56-3.52c-0.42-0.38-0.5-1.29-0.51-1.97c-0.05-2.86-0.02-5.72-0.02-8.6c-1.61-0.72-3.05-0.52-4.45-0.56   c-4.96-0.13-9.43,1.09-13.25,4.45c-4.31,3.79-8.72,7.45-13.06,11.2c-1.57,1.35-3.06,2.79-4.61,4.16c-2.58,2.28-5.37,4.24-8.56,5.61   c-1.46,0.63-2.84,1.45-4.26,2.16c-3.75,1.87-7.04,4.32-9.77,7.54c-0.74,0.88-1.82,1.48-2.77,2.17c-1.92,1.41-3.91,2.74-5.75,4.24   c-1.17,0.95-2.23,2.07-3.18,3.24c-4.11,5.06-9.1,9.09-14.41,12.82c-8.74,6.14-17.31,12.5-25.42,19.46   c-4.52,3.88-9.94,5.15-15.8,4.61c-0.26-2.03-0.43-4.01-0.79-5.95c-0.17-0.91-0.55-1.86-1.1-2.6c-0.95-1.29-1.33-2.68-1.38-4.23   c-0.08-2.64,0.06-5.26,1.09-8.11c0.53-1.62,0.98-2.9,1.39-4.18c0.73-2.31,1.05-4.67,0.42-7.06c-0.79-3.02-1.75-5.95-3.6-8.53   c-1.01-1.41-1.9-2.9-2.95-4.51c0.81-0.29,1.39-0.52,1.98-0.7c7.15-2.21,14.3-4.42,21.45-6.63c5.86-1.81,11.71-3.62,17.58-5.39   c1.54-0.46,2.78-1.15,3.26-2.81c0.13-0.45,0.37-0.89,0.65-1.27c1.08-1.47,1.13-3.11,0.84-4.8c-0.29-1.73-0.59-3.45-0.95-5.17   c-0.42-2.01-1.19-3.84-3.1-4.87c-0.94-0.51-1.09-1.26-1.09-2.18c-0.02-6.52-1.43-12.8-3.37-18.98c-0.15-0.49-0.41-0.95-0.63-1.44   c-1.32,0.53-2.45,0.99-3.84,1.55c-0.12-2.65-0.23-4.93-0.34-7.31c1.83-0.37,3.44-0.69,5.14-1.03c0.33-3.77,0.65-7.41,0.97-11.05   c0.31-3.57,0.23-3.47-2.55-5.64c-2.88-2.24-5.95-3.94-9.56-4.61c-0.69-0.13-1.36-0.4-2-0.59c-0.48-2.4-0.94-4.67-1.45-7.21   c2.24,0,4.12,0,6.12,0c0.54-3,0.96-5.83,1.57-8.63c0.48-2.23,0.96-4.37-1.23-6.13c0.72-0.68,1.26-1.24,1.85-1.76   c2.67-2.39,5.33-4.8,8.05-7.14c0.85-0.74,1.22-1.53,1.27-2.66c0.73-17.6,1.53-35.19,2.25-52.79c0.74-18.08,1.42-36.15,2.13-54.23   c0.03-0.84,0.17-1.67,0.26-2.55c1.05,0,1.84-0.02,2.63,0c5.65,0.19,11.31,0.37,16.96,0.58c10.75,0.4,21.5,0.88,32.25,1.22   c12.42,0.4,24.85,0.72,37.28,1.02c3.9,0.09,7.81,0.06,11.72-0.01c1.37-0.03,2.4,0.39,3.41,1.3c6.34,5.71,12.72,11.36,19.1,17.03   c0.7,0.63,1.43,1.23,2.21,1.89c1.7-1.58,3.28-3.03,4.84-4.51C401.04,406.1,405.48,401.88,409.93,397.65z"/></g></a>

  <a xlink:title="MANKILAM" id="mankilam"  class="cursor-pointer mankilam-svg">
                  <g id="region_mankilam">
  <path id="mankilam_zoom" class="st3" d="M285.39,190.42c0.39,0.03,0.77,0.07,1.26,0.11c0.39,6.43,0.78,12.77,1.18,19.44c0.51,1.07,0.77,0.59,1.04,0.13   c1.18-1,2.35-2,3.53-3c0.15,0.1,0.3,0.19,0.45,0.29c-0.42,1.07-0.68,2.23-1.29,3.18c-1.84,2.89-3.83,5.68-5.72,8.53   c-0.52,0.77-1.06,1.24-2.08,1.31c-3.06,0.22-4.78,1.59-5.15,4.59c-0.28,2.28-1.19,4.1-2.68,5.68c-1.16,1.23-1.19,2.7-1.18,4.34   c-1.17,0.55-2.31,1.08-3.63,1.7c-1.95,11.85-3.13,23.87-3.56,35.98c-1.26,0.76-2.15,1-3.69,0.36c-1.31-0.55-3.22,0.22-4.83,0.53   c-0.76,0.15-1.45,0.64-2.18,0.95c-1.62,0.69-3.13,1.05-4.54-0.61c-0.41-0.49-1.43-0.57-2.19-0.63c-2.37-0.19-4.77,0.1-7.08-0.83   c-0.49-0.2-1.2,0.14-1.82,0.22c-0.82,0.11-1.65,0.21-2.85,0.35c-0.5,0.87-1.2,2.09-2.01,3.49c-2.14-0.91-4.22-1.86-6.35-2.68   c-0.94-0.37-1.98-0.7-2.97-0.69c-10.68,0.12-21.35,0.32-32.02,0.5c-0.39,0.01-0.79,0.06-1.24,0.1c-0.49,0.71-0.98,1.42-1.59,2.31   c-4.84-0.2-9.77-0.4-14.83-0.6c0-0.69,0-1.35,0-2.13c-3.77-1.51-7.43-3.13-11.79-3.07c-9.08,0.14-18.16-0.19-27.24-0.33   c-0.47-0.01-0.94,0-1.52,0c-0.64,2.33,0.27,4.61,0.02,6.95c-2.91,0-5.77,0.04-8.62-0.01c-2.47-0.04-4.94-0.32-7.4-0.24   c-1.88,0.06-3.29-0.64-4.8-1.65c-4.2-2.83-7.07-6.59-8.64-11.38c-0.12-0.38-0.41-0.77-0.37-1.12c0.1-0.83,0.15-1.83,0.64-2.37   c0.3-0.32,1.43,0.02,2.14,0.24c0.75,0.23,1.44,0.68,2.17,0.98c4.39,1.8,8.66-0.15,10.46-4.58c0.82-2.03,0.93-3.93,0.43-6.04   c-1.02-4.34-1.87-8.69-1.9-13.21c-0.02-3.19,1.14-5.34,3.94-6.7c1.29-0.63,2.58-1.25,3.83-1.95c1.38-0.78,2.85-1.5,4.03-2.53   c2.27-1.98,4.61-3.97,6.47-6.32c2.53-3.19,3.75-6.84,1.55-10.85c-0.14-0.26-0.23-0.55-0.46-1.15c2.33,0,4.43,0,6.77,0   c0-1.81,0-3.37,0-5.18c4.67-0.88,9.16-1.72,13.86-2.61c-0.57-6.76-1.12-13.39-1.69-20.18c2.12-0.38,4.14-0.75,6.25-1.13   c-0.04-0.3,0.01-0.56-0.1-0.7c-1.82-2.19-1.87-4.78-1.82-7.45c0.08-4.62,0.06-9.24,0-13.87c-0.02-1.43,0.19-2.68,1.32-3.65   c0.92-0.79,1.19-1.81,1.12-3c-0.08-1.33-0.02-2.67-0.02-4.25c3.22,0.18,6.12,0.35,9.12,0.52c0.4-1.88,0.88-3.56,1.07-5.28   c0.08-0.77-0.23-1.78-0.72-2.37c-1.23-1.48-0.92-2.86-0.28-4.42c0.36-0.89,0.9-1.22,1.78-1.26c1.58-0.07,3.16-0.18,4.84-0.28   c1.49-3.93,2.94-7.78,4.42-11.67c3.12-0.31,6.11-0.61,9.18-0.91c0.15-0.69,0.29-1.28,0.44-1.96c0.53-0.1,1.05-0.19,1.46-0.27   c0.79-0.7-0.25-2.09,1.33-2.18c1.87,4.28,0.73,8.58,1.3,12.74c0.73,0.16,1.35,0.34,1.97,0.42c4.1,0.54,8.22,0.98,12.31,1.63   c2.41,0.38,4.99,0.08,7.15,1.58c4.16,2.88,8.86,4.67,13.48,6.6c1.08,0.45,2.14,0.95,3.29,1.45c-0.15,2.37-0.21,4.59-0.45,6.8   c-0.36,3.23-0.3,6.35,1.74,9.11c0.18,0.25,0.25,0.58,0.43,0.99c-2.74,4.94-5.52,9.94-8.3,14.95c0.29,0.37,0.45,0.64,0.67,0.85   c2.34,2.25,1.78,2.05,4.41,0.78c1.01-0.49,2.02-0.92,3.26-0.46c0.5,2.4-1.53,4.26-1.52,6.66c2.26,0.83,4.47,1.65,6.38,2.35   c0.03,1.32-0.17,2.44,0.13,3.41c1.18,3.72,2.52,7.38,3.82,11.06c0.15,0.42,0.43,0.8,0.66,1.21c3.9-0.64,7.66-1.3,11.43-1.88   C269.14,194.92,277.25,192.6,285.39,190.42z"/></g></a>
  <a xlink:title="PAGSABANGAN" id="pagsabangan" onclick=""  class="cursor-pointer pagsabangan-svg">
  <g id="region_pagsabangan">
  <path id ="pagsabangan_zoom"class="st4" d="M189.61,62.94c2.32-0.38,4.44-0.71,6.78-1.08c0,1.18,0,2.21,0,3.53c-2.27,0-4.46,0-6.82,0   c-0.35,6.14-0.25,11.97,1.02,18.12c-4.57-0.65-8.66-2.14-13.3-2.93c0.6,1.77,1.17,3.22,1.56,4.71c0.23,0.88,0.44,1.93,0.18,2.75   c-1.56,4.91-2.1,9.96-2.29,15.07c-0.03,0.92,0.18,1.9-1.12,2.31c-0.35,0.11-0.55,0.91-0.71,1.42c-0.67,2.21-1.26,4.44-1.97,6.64   c-0.23,0.7-0.68,1.34-1.11,1.95c-0.77,1.09-0.52,3.92,0.51,4.77c0.67,0.55,1.4,1.04,2.15,1.59c0.6-0.42,1.15-0.81,1.89-1.33   c0.18,0.64,0.34,1.06,0.42,1.49c0.09,0.46,0.11,0.94,0.17,1.52c2.08,0.58,4.13,1.15,6.49,1.8c-0.83,2.24-1.61,4.36-2.45,6.63   c-1.63,0.08-3.2,0.2-4.78,0.23c-1.01,0.02-1.64,0.36-1.91,1.4c-0.21,0.84-0.68,1.63-0.83,2.48c-0.11,0.64-0.16,1.58,0.21,1.98   c2.14,2.31,1.11,4.73,0.44,7.37c-2.99-0.16-5.98-0.32-9.25-0.49c0,1.7-0.07,3.19,0.02,4.67c0.08,1.35-0.17,2.51-1.23,3.43   c-0.98,0.84-1.22,1.92-1.2,3.2c0.06,5.1,0.01,10.2,0.03,15.3c0,2.21-0.37,4.49,1.68,6.53c-2.22,0.4-4,0.73-6.1,1.11   c0.55,6.69,1.09,13.38,1.65,20.23c-4.59,0.85-8.95,1.67-13.5,2.52c-0.07,1.62-0.15,3.18-0.23,4.95c-2.88-0.18-5.65,0.44-8.39-0.46   c-1.29-0.42-2.55-0.28-3.68,0.43c-1.47,0.93-2.96,1-4.56,0.43c-2.72-0.97-5.51-1.52-8.41-1.62c-1.74-0.06-3.27-0.93-4.44-2.13   c-1.38-1.41-2.63-3-3.67-4.67c-0.49-0.79-0.51-1.99-0.44-2.97c0.08-1.01,0.43-2.04,0.87-2.96c1.61-3.36,2.21-6.97,2.82-10.57   c0.73-4.29-1.1-7.61-4.09-10.41c-0.6-0.56-1.52-0.95-2.34-1.06c-1.97-0.25-3.96-0.36-5.95-0.39c-2.63-0.04-5.26,0.05-7.88,0.06   c-2.16,0.01-2.89,0.94-3.61,2.95c-1.01,2.8-0.89,5.39,0.24,8.06c0.18,0.42,0.12,0.94,0.2,1.64c-0.87,0.29-1.75,0.59-2.63,0.85   c-0.76,0.23-1.53,0.46-2.3,0.62c-1.94,0.41-3.15,1.43-3.21,3.54c-0.06,2.17-1.42,3.54-3.12,4.49c-0.83,0.46-2.09,0.8-2.91,0.5   c-4.03-1.47-8.02-3.08-11.95-4.82c-1.7-0.76-2.89-5.72-1.74-7.11c1.28-1.55,3.03-2.54,5.13-2.66c0.32-0.02,0.64,0.05,0.95,0.07   c4.08,0.23,5.13-0.43,6.66-4.24c0.62-1.55,1.25-3.1,1.78-4.69c0.47-1.4,0.09-2.26-1.33-2.42c-1.26-0.15-1.86-0.85-2.3-1.78   c-1.87-3.9-4.99-6.47-8.6-8.7c-1.72-1.06-3.17-2.65-4.56-4.16c-1.62-1.75-2.07-1.91-4.27-0.73c-0.47,0.25-1.03,0.53-1.52,0.48   c-2.22-0.22-3.14,1.2-3.86,2.9c-0.53,1.24-0.87,2.57-1.47,3.77c-1.08,2.16-2.54,2.86-4.87,2.37c-1.57-0.33-2.9-0.01-4.34,0.69   c-2.42,1.17-4.96,2.14-7.52,2.98c-1.82,0.59-2.47,0.15-3.06-1.61c-0.3-0.9-0.46-1.86-0.54-2.8c-0.12-1.38,0.38-2.51,1.69-3.15   c3.54-1.72,6.62-4.06,9.57-6.67c1.04-0.92,2.73-1.26,4.19-1.54c3.33-0.63,6.41-1.87,9.4-3.4c0.56-0.28,1.3-0.58,1.52-1.07   c1.26-2.72,3.6-4.45,5.72-6.34c1.14-1.01,1.35-1.96,0.83-3.34c-0.39-1.02-0.64-2.16-0.64-3.24c0-1.87-0.88-2.93-2.53-3.63   c-1.83-0.78-3.65-1.6-5.39-2.55c-2.09-1.14-3.61-2.72-4.21-5.21c-0.53-2.23-2.32-2.98-4.45-2.07c-0.86,0.36-1.64,0.96-2.38,1.55   c-1,0.79-1.96,1.63-2.86,2.54c-1.96,1.97-4.23,1.92-6.64,1.12c-1.68-0.55-2.53-1.86-3.04-3.44c-0.38-1.17,0.22-2,1.08-2.68   c2.36-1.85,4.06-4.23,5.67-6.72c1.3-2.01,1.65-4.04,1.11-6.36c-0.78-3.34-2.1-6.38-4.66-8.71c-0.83-0.76-2-1.49-3.07-1.58   c-2.64-0.22-4.01-1.64-4.82-4.12c0.42-0.16,0.81-0.4,1.23-0.47c17.68-2.93,35.36-5.82,53.03-8.75c16.81-2.78,33.62-5.6,50.42-8.39   c13.9-2.31,27.81-4.59,41.72-6.88C178.88,64.73,184.14,63.86,189.61,62.94z"/>
</g></a>
<a xlink:title="CANOCOTAN" id="canocotan" onclick=""  class="cursor-pointer canocotan-svg">
   <g id="region_canocotan">
  <path id="canocotan_zoom" class="st4" d="M113.77,471.98c-0.72-1.41-1.44-2.82-2.25-4.41c0.75-0.48,1.45-0.98,2.19-1.4c3.45-1.98,6.89-3.99,10.39-5.89   c1.15-0.63,1.57-1.34,1.42-2.65c-0.24-2.13-0.24-4.29-0.43-6.43c-0.11-1.32,0.29-2.43,0.82-3.63c1.11-2.51,2.87-4.09,5.47-4.85   c4.42-1.3,6.51-4.86,8.07-8.76c1.65-4.14,2.91-8.39,3.41-12.88c0.17-1.51,1.03-2.98,1.75-4.38c0.78-1.52,1.28-3.03,1.29-4.77   c0.01-2.07,0.24-4.13,0.31-6.2c0.03-1,0.17-1.9,1.03-2.53c1.98-1.45,2.27-3.48,2-5.84c-2.24-1.02-4.36-2.56-7.22-1.93   c-0.41,0.6-0.89,1.24-1.29,1.92c-1.56,2.61-3.34,4.85-6.13,6.45c-2.29,1.32-4.06,3.54-6.06,5.36c-1.78,1.63-2.08,1.62-4.17,0.52   c-1.38-0.73-2.4-1.72-3.18-3.1c-0.98-1.72-2.07-3.42-3.33-4.94c-0.96-1.15-1.42-2.25-1.01-3.98c2.65-0.81,5.44-1.68,8.24-2.52   c1.16-0.35,2.08-0.99,3.03-1.76c2.18-1.77,1.89-4.23,2.21-6.54c0.04-0.28-0.09-0.66-0.28-0.87c-2.18-2.36-3.85-5.3-7.36-6.15   c-1.84-0.45-3.59-1.26-5.83-2.07c0.96-0.51,1.59-0.87,2.24-1.18c1.65-0.8,3.29-1.62,4.96-2.36c0.93-0.42,1.6-0.92,1.7-2.06   c0.14-1.57,1.61-2.06,2.84-3.14c0.84-0.58,1.42-0.96,2.03-1.36c9.62,7.41,19.12,14.74,28.74,22.16   c6.95-9.21,13.71-18.16,20.59-27.29c9.66,7.86,19.22,15.63,28.97,23.55c7.13-8.71,14.12-17.26,21.21-25.91   c12.69,9.79,25.24,19.47,37.79,29.15c0.25,0.19,0.46,0.43,0.68,0.66c0.04,0.04,0.01,0.14,0,0.22c-0.01,0.08-0.05,0.15-0.12,0.39   c-1.03,0-2.12,0-3.49,0c-1.03,25.72-2.06,51.28-3.11,77.38c-15.47-12.06-30.52-23.78-45.74-35.64   c-19.43,24.86-38.75,49.58-58.12,74.37c-0.77-0.57-1.42-1.04-2.05-1.52c-13.02-10-26.05-19.98-39.04-30.02   C115.75,474.26,114.81,473.05,113.77,471.98z"/></g></a>
  <a xlink:title="BINCUNGAN" id="bincungan" onclick=""  class="cursor-pointer bincungan-svg">
                  <g id="region_bincungan">
  <path id="bincungan_zoom" class="st3" d="M102.85,593.11c-0.94,0.13-1.1,0.64-0.9,1.53c0.66,2.87,1.25,5.76,1.86,8.64c0.13,0.62,0.22,1.24,0.38,2.14   c-4.97,1.71-9.9,3.4-15.01,5.16c0.42,3.11,0.83,6.16,1.26,9.31c-1.46,0.36-2.43-0.22-3.27-1.06c-0.3,0.07-0.55,0.08-0.76,0.18   c-2.75,1.24-5.6,1.6-8.61,1.18c-2.68-0.37-5.21,0.18-7.49,1.79c-0.73,0.52-1.74,0.91-2.62,0.9c-2.28-0.01-3.74-1.47-3.61-3.86   c0.21-3.87,0.87-7.62,4.51-10.03c1.45-0.96,2.75-2.15,4.16-3.27c-0.19-1.5-0.54-2.92-0.51-4.33c0.06-2.78,0.07-5.6,0.58-8.32   c0.8-4.22,0.44-8.23-1.07-12.19c-0.68-1.79-1.44-3.54-2.12-5.33c-0.69-1.8-0.54-2.11,1.26-2.88c0.44-0.19,0.88-0.37,1.33-0.53   c7.13-2.48,11.62-7.56,14.24-14.48c0.11-0.3,0.33-0.59,0.34-0.89c0.05-2.54,1.78-3.89,3.54-5.31c4.52-3.66,8.98-7.41,13.46-11.12   c1.59-1.32,3.13-2.69,5.12-3.45c2.99-1.14,4.17-5.48,1.67-7.96c-0.62-0.62-1.18-1.29-1.8-1.91c-2.22-2.25-4.68-3.24-7.98-2.36   c-3.84,1.02-7.79,1.65-11.72,2.27c-2.15,0.34-3.73,1.39-4.89,3.09c-1.25,1.84-2.5,3.72-3.42,5.73c-1.21,2.64-3.35,3.71-5.94,4.27   c-1.24,0.27-2.38-0.02-3.39-0.78c-1.49-1.13-1.42-2.91,0.15-3.97c3.41-2.3,4.05-2.99,6.16-6.11c2.06-3.04,4.64-5.44,8.3-6.47   c1.53-0.43,3.01-1.03,4.52-1.53c1.43-0.47,2.37-1.4,2.41-2.92c0.04-1.65,0.96-2.4,2.35-2.9c0.67-0.24,1.33-0.55,1.93-0.93   c1.38-0.88,1.62-1.9,0.56-3.18c-0.8-0.97-1.8-1.8-2.8-2.58c-3.27-2.55-6.59-5.03-9.85-7.58c-1.06-0.83-2.03-1.79-2.98-2.76   c-1.03-1.05-1.72-2.29-1.61-3.85c0.87-1.01,2.06-0.67,3.13-0.74c4.04-0.3,8.09-0.55,12.13-0.87c0.7-0.06,1.4-0.31,2.07-0.55   c2.63-0.95,4.32-3.24,4.27-6c-0.02-0.82-0.35-1.75-0.82-2.42c-1.57-2.21-2.31-4.73-2.78-7.31c-0.21-1.11,0.08-2.36,0.38-3.49   c0.13-0.5,0.77-1.07,1.3-1.24c3.38-1.11,6.8-2.12,10.4-3.22c0.67,1.15,1.46,2.51,2.4,4.15c0.94,1.14,1.63,2.15,2.55,2.85   c13.06,10.08,26.15,20.12,39.23,30.17c0.75,0.58,1.48,1.18,2.24,1.78c-0.32,0.8-0.6,1.5-0.86,2.16c1.24,0.98,2.37,1.85,3.49,2.74   c10.49,8.32,21.01,16.6,31.42,25.02c1.85,1.5,3.58,1.94,5.88,1.54c3.44-0.6,6.93-0.89,10.68-1.35c0.24,1.22,0.5,2.27,0.64,3.34   c0.24,1.98,0.72,2.41,2.67,2.49c0.8,0.03,1.59,0.28,2.54,0.46c-0.32,1.02-0.56,1.69-0.75,2.37c-0.66,2.37,0.26,3.33,2.71,2.84   c0.78-0.16,1.54-0.44,2.32-0.54c1.49-0.2,2.54,0.51,2.9,1.85c0.34,1.23-0.34,2.5-1.7,3.03c-0.59,0.23-1.27,0.22-1.84,0.47   c-0.54,0.24-1.2,0.58-1.43,1.05c-0.88,1.87,0.69,5.36,2.63,6.05c1.29,0.46,2.76-0.01,3.47-1.35c0.55-1.04,0.86-2.21,1.21-3.35   c0.3-0.96,0.49-1.95,0.73-2.92c1.74,0.31,1.76,0.3,2.36,1.18c0.97,1.42,1.5,2.96,1.44,4.71c-0.09,2.44,0.63,4.5,2.66,6.08   c1.31,1.02,1.32,1.68,0.46,3.06c-0.25,0.4-0.61,0.73-0.92,1.09c-1.33,1.59-1.39,2.66,0,4.21c1.6,1.78,3.28,3.5,5.73,4.13   c0.78,0.2,1.61,0.37,1.59,1.44c-0.03,1.06-0.11,2.11-1.33,2.55c-0.67,0.24-1.35,0.49-2.03,0.7c-1.08,0.34-1.64,1.08-1.35,2.17   c0.59,2.23,0.29,4.41-0.01,6.64c-0.26,1.99,0.39,2.54,2.25,1.87c2.44-0.87,4.36-0.23,5.98,1.65c0.26,0.3,0.51,0.61,0.76,0.92   c2.47,3.06,5.09,2.9,6.84-0.64c2.45-4.94,6.51-7.43,11.74-8.42c0.97-0.18,1.83-0.08,2.42,0.59c0.77,0.87,1.61,1.84,1.91,2.91   c0.65,2.29,1.09,4.65,1.39,7.01c0.33,2.62-2.02,6.04-4.48,6.79c-12.78,3.93-25.56,7.86-38.35,11.78c-0.58,0.18-1.2,0.26-1.85,0.4   c-0.34-0.68-0.6-1.25-0.89-1.81c-1.37-2.61-2.77-3.3-5.66-2.64c-0.91,0.21-1.84,0.59-2.6,1.12c-3.11,2.18-5.01,5.12-4.99,9.02   c0.01,2.31,0.21,4.61,0.33,6.91c0.07,1.27,0.19,2.54,0.22,3.81c0.05,1.79-0.43,3.3-2.26,4.08c-1.83,0.78-3.54,0.74-5.15-0.55   c-2.49-1.99-4.47-4.26-4.88-7.62c-0.14-1.14-0.51-2.45-1.24-3.27c-2.11-2.38-4.66-3.94-8.09-3.97c-2.76-0.02-5.52-0.59-8.28-0.94   c-0.9-0.12-1.77-0.35-1.53-1.75c0.52-0.2,1.09-0.49,1.69-0.63c2.17-0.49,4.35-0.97,6.54-1.37c1.79-0.33,3.36-0.96,4.46-2.49   c0.95-1.31,0.94-2.71-0.25-3.85c-5.15-4.95-9.81-10.47-16.2-14.04c-2.85-1.59-5.5-3.52-8.21-5.35c-1.6-1.07-2.8-2.45-2.48-4.55   c0.44-2.96,2.13-4.64,5.12-5.19c1.8-0.33,3.63-0.51,5.43-0.84c1.65-0.31,3.31-0.7,4.38-2.16c0.68-0.93,1.49-1.33,2.64-1.23   c1.49,0.13,2.73-0.52,3.41-1.78c0.79-1.45,1.51-3.01,1.89-4.61c0.54-2.27-1.07-3.91-3.4-3.66c-1.52,0.16-2.93,0.64-4.06,1.81   c-0.53,0.55-1.36,1.3-1.94,1.2c-2.34-0.37-4.85-0.72-5.93-3.34c-0.98-2.38-2.75-3.06-5.17-2.83c-2.28,0.22-2.78-0.17-3.52-2.28   c-0.24-0.67-0.44-1.36-0.62-2.05c-0.53-1.98-1.78-3.32-3.56-4.26c-1.66-0.87-3.38-1.32-5.27-1.3c-2.75,0.03-2.88-0.1-3.61-2.68   c-0.11-0.38-0.07-0.85-0.27-1.15c-0.37-0.55-0.81-1.12-1.35-1.48c-0.49-0.32-1.16-0.36-1.23-0.38c-0.69-1.16-0.99-2.28-1.64-2.55   c-0.5-0.21-1.46,0.62-2.19,1.03c-0.27,0.15-0.47,0.42-0.7,0.65c-3.13,3.07-6.22,6.18-9.41,9.18c-1.13,1.07-1.64,2.18-1.57,3.75   c0.12,2.77,0.03,5.54,0.03,8.18c-1,0.43-1.71,0.73-2.32,0.99c-0.46,1.34-0.08,2.11,1.04,2.67c1.55,0.77,3.05,1.65,4.69,2.54   c-1.14,2.53-2.21,4.88-3.33,7.36c-4.43-1.45-8.63-2.82-12.97-4.25c-0.71,2.29-1.41,4.32-1.95,6.38c-0.34,1.3-1,2.24-2.08,3.06   C109.16,589.45,106.22,591.61,102.85,593.11z"/></g></a>
  <a xlink:title="SAN MIGUEL" id="sanmiguel" onclick=""  class="cursor-pointer sanmiguel-svg">
                  <g id="region_sanmiguel">
  <path id="sanmiguel_zoom" class="st5" d="M127.84,368.32c-1.5,0.91-3.03,1.77-3.28,3.8c-0.04,0.37-0.52,0.8-0.9,0.99c-2.77,1.36-5.57,2.67-8.42,4.03   c-0.62-0.73-1.1-1.35-1.63-1.93c-2.09-2.29-4.14-4.63-6.32-6.83c-1.51-1.52-2.64-3.16-2.89-5.34c-0.23-2.06-0.55-4.1-0.73-6.17   c-0.15-1.73,0.1-2.08,1.85-2.44c1.63-0.34,3.3-0.51,4.95-0.76c2.84-0.43,5.32-1.6,7.4-3.6c0.4-0.39,0.86-0.71,1.26-1.11   c3.68-3.66,7.6-3.78,12.96-1.32c0.72,0.33,1.44,0.68,2.17,1c3.09,1.34,8.34-1.46,8.44-4.81c0.02-0.79,0.28-1.56,0.43-2.35   c0.95-4.9-1.22-8.49-4.83-11.45c-1.58-1.3-3.48-1.25-5.25-0.74c-8.1,2.32-16.35,2.36-24.65,1.8c-0.56-0.04-1.11-0.09-1.66-0.17   c-1.29-0.2-1.97-1-2.01-2.28c-0.04-1.03-0.06-2.08,0.1-3.1c0.51-3.35-0.88-5.88-3.29-8c-0.3-0.26-0.61-0.52-0.92-0.76   c-1.08-0.82-1.94-1.82-1.38-3.24c0.59-1.5,1.45-2.85,3.36-2.96c2.7-0.15,5.4-0.41,8.11-0.5c2.8-0.1,4.94-1.17,6.8-3.35   c2.53-2.96,5.37-5.66,8.08-8.47c0.28-0.29,0.59-0.54,0.86-0.83c3.1-3.31,3.61-6.4,1.14-10.17c-1.69-2.57-3.93-4.78-5.94-7.14   c-0.55-0.65-1.15-1.26-2.11-2.29c3.43-0.14,6.39,0.15,9.34,0.14c3.01-0.01,6.03,0,9.23,0c-0.13-2.21-0.25-4.33-0.39-6.74   c0.98-0.05,1.9-0.14,2.82-0.13c9.16,0.11,18.33,0.26,27.49,0.35c2.92,0.03,5.26,1.66,8.04,2.47c-0.22,0.88-0.41,1.62-0.65,2.56   c5.9,0.24,11.69,0.47,17.43,0.7c0.33-0.49,0.61-0.79,0.77-1.14c0.49-1.13,1.38-1.35,2.51-1.35c4.46-0.01,8.92-0.08,13.39-0.15   c5.58-0.09,11.15-0.25,16.73-0.28c1.15-0.01,2.36,0.27,3.44,0.68c2.38,0.89,4.7,1.95,7.22,3.02c0.68-1.21,1.34-2.37,1.99-3.52   c0.14-0.07,0.27-0.15,0.41-0.2c3.61-1.19,7.18,0.37,10.78,0.22c0.7-0.03,1.61,0.34,2.1,0.84c1.15,1.17,2.44,1.12,3.75,0.71   c1.28-0.4,2.47-1.11,3.76-1.52c1.55-0.49,3.21-1.21,4.48,0.66c0.92-0.23,1.84-0.45,2.9-0.72c0.3,1.92,0.4,3.68-0.82,5.24   c-0.79,1.01-0.88,2.15-0.88,3.38c0.01,6.46-0.03,12.91-0.04,19.37c0,1.19,0,2.37,0,3.88c-2.42,0-4.68,0-7.19,0c0,2.9,0,5.49,0,8.21   c-3.14,0.71-6.07,1.36-9.1,2.05c-0.09,1.39-0.17,2.71-0.27,4.3c-1.79,0-3.5,0-5.42,0c0,2.85,0,5.45,0,8.19   c-0.79,0.09-1.39,0.2-2,0.21c-1.51,0.03-3.04,0.13-4.54-0.01c-2.91-0.27-5.48,0.23-7.64,2.4c-0.53,0.53-1.57,0.74-2.38,0.76   c-3.19,0.08-6.37,0.04-9.56,0.04c-0.79,0-1.57,0-2.36,0c-0.05,0.13-0.1,0.26-0.15,0.39c0.76,0.53,1.51,1.06,2.51,1.76   c3.7,2.55,7.15,4.92,10.73,7.38c-2.69,3.57-5.22,6.92-7.87,10.43c3.04,2.37,5.98,4.65,9.08,7.07   c-6.85,8.37-13.59,16.61-20.45,24.99c-9.72-7.9-19.27-15.67-29-23.58c-6.93,9.17-13.72,18.17-20.62,27.31   c-9.64-7.43-19.07-14.71-28.63-22.07C129.53,366.92,128.69,367.62,127.84,368.32z"/></g></a>
  <a xlink:title="BUSAON" id="busaon" onclick=""  class="cursor-pointer busaon-svg">
                  <g id="region_busaon">
  <path id="busaon_zoom" class="st4" d="M180.98,665.42c-1.15,0.98-2.36,1.9-3.42,2.96c-1.58,1.59-1.71,3.01-0.1,4.58c1.28,1.24,2.94,2.12,4.49,3.05   c0.95,0.57,2.04,0.9,3.01,1.43c0.96,0.52,1.61,1.3,1.47,2.23c-2.27,2.09-4.36,4.04-6.47,5.96c-0.35,0.32-0.74,0.65-1.17,0.79   c-2.69,0.86-5.03,2.82-8.1,2.5c-0.49-0.05-1.04,0.35-1.54,0.58c-1.44,0.67-2.9,1.32-4.31,2.06c-7.22,3.81-14.83,6.54-22.79,8.38   c-1.99,0.46-3.73,0.8-5.13-0.97c-1.47,0.33-2.42,1.05-2.75,2.44c-0.29,1.2-1.17,1.88-2.17,2.4c-3.32,1.73-6.58,3.59-10.01,5.06   c-3.57,1.54-6.76,3.51-9.49,6.26c-2.15,2.16-4.65,3.83-7.34,5.28c-4.42,2.37-8.77,4.88-13.34,7.44c0.57,0.65,1.05,1.21,1.51,1.73   c-2.58,1.86-5.16,3.73-7.89,5.7c-0.57-0.46-1.3-1.05-2.17-1.75c-0.47,0.3-1.01,0.58-1.49,0.95c-7.03,5.38-14.04,10.77-21.08,16.13   c-1,0.76-1.71,1.62-2.04,2.82c-0.3,1.07-0.6,2.16-1.05,3.17c-1.02,2.29-0.6,4.34,0.86,6.26c0.14,0.19,0.24,0.42,0.41,0.59   c1.91,1.87,2.47,3.73,0.36,5.92c-0.52,0.54-0.68,1.64-0.63,2.46c0.14,2.45,0.45,4.9,0.74,7.34c0.13,1.1,0.47,2.18,0.59,3.29   c0.16,1.41-0.63,2.66-1.88,3.31c-1.15,0.6-2.11,0.01-2.81-0.7c-1.04-1.06-2.18-2.21-2.72-3.55c-1.92-4.77-2.77-9.79-2.67-14.94   c0.05-2.51,0.76-4.9,1.96-7.08c3.1-5.66,6.13-11.36,9.48-16.87c2.92-4.8,3.7-10.11,4.41-15.47c0.1-0.73-0.21-1.57-0.5-2.29   c-0.83-2.1-1.31-4.23-1.37-6.5c-0.09-3.4-0.93-4.44-4.18-5.55c-4.05-1.38-7.37-0.54-10.06,2.79c-1.34,1.67-2.41,3.56-3.59,5.35   c-0.52,0.8-0.96,1.66-1.54,2.42c-1.42,1.87-3.02,2.12-4.95,0.84c-2.99-1.98-5.12-4.48-5.39-8.28c-0.19-2.62-0.48-5.24-0.89-7.83   c-0.49-3.08,0.76-5.48,2.84-7.49c1.46-1.41,2.94-2.67,2.77-4.99c-0.03-0.39,0.54-1.09,0.94-1.18c2.35-0.55,3.33-2.28,4.01-4.33   c0.09-0.28,0.3-0.53,0.43-0.75c1.69,0.42,3.29,0.81,5.07,1.24c0.19,0.83,0.41,1.82,0.65,2.81c0.39,1.63,1.21,2.93,2.8,3.65   c0.58,0.26,1.11,0.62,1.68,0.91c5.47,2.81,11.53,0.41,13.42-5.47c1.18-3.68,2.98-6.82,6.1-9.19c1.01-0.77,1.86-1.75,2.74-2.66   c1.87-1.93,3.03-4.15,3.44-6.91c0.59-3.97-0.56-6.99-3.73-9.42c-1.24-0.95-2.34-2.16-3.26-3.42c-1.08-1.47-1.36-3.23-0.79-5.02   c0.63-1.95,1.35-3.87,2.07-5.94c3.4,0.28,6.56,0.57,9.73,0.78c0.94,0.06,1.89-0.08,2.83-0.21c1.13-0.15,1.74-0.99,1.62-2   c-0.11-0.95-0.69-1.72-1.91-1.77c-1.51-0.06-3.01-0.41-4.52-0.42c-2.07-0.02-3.64-0.86-5.01-2.39c0.16-0.23,0.24-0.47,0.42-0.58   c4.23-2.73,5.88-6.99,6.78-11.62c0.23-1.2,0.01-2.53-0.2-3.76c-0.39-2.17-1.37-4.25-1.01-6.61c1.67-0.64,3.18-1.67,5.13-0.55   c0.89,0.52,2.11,0.47,3.52,0.75c-0.48-3.53-0.92-6.8-1.4-10.26c5.04-1.73,9.99-3.43,15.13-5.19c-0.7-3.34-1.4-6.59-2.05-9.84   c-0.15-0.74-0.08-1.53,0.18-2.45c3.66-1.35,6.31-3.69,9.14-5.73c0.62-0.44,1.4-1,2.08-0.96c2.27,0.14,4.53,0.52,6.82,0.82   c0.21,2.65,0.4,5.07,0.59,7.52c2.92,0.31,5.61,0.59,8.42,0.88c-0.02,1.27,0.83,1.81,1.89,2.01c1.18,0.23,1.91,0.83,1.91,2.3   c2.32-1.39,4.36-2.61,6.27-3.76c0.35,0.09,0.52,0.11,0.65,0.18c0.21,0.11,0.41,0.25,0.59,0.4c1.89,1.71,4,2.79,6.65,2.65   c0.76-0.04,1.54,0.24,2.38,0.38c0,2.17,0.12,4.24-0.04,6.28c-0.14,1.81,0.35,3.27,1.71,4.6c0.36-0.17,0.74-0.35,1.19-0.57   c0.21,0.25,0.44,0.46,0.61,0.71c0.45,0.65,0.92,1.31,1.32,1.99c0.95,1.6,0.41,3.13-1.34,3.76c-1.2,0.43-2.42,0.78-3.63,1.18   c-4.09,1.35-3.01,0.35-4.32,4.47c-0.87,2.73-1.78,5.45-1.78,8.37c0,1.28,0.05,2.54,1.28,3.67c0.46-0.42,0.98-0.77,1.33-1.24   c0.61-0.83,1.06-1.79,1.7-2.59c0.89-1.12,2.14-1.78,3.56-1.49c1.3,0.27,1.41,1.55,1.63,2.65c0.19,0.94,0.31,1.9,0.66,2.78   c1.14,2.9,2.33,5.91,5.32,7.35c1.56,0.76,2.06,1.64,2.15,3.25c0.13,2.25,2.27,4.61,4.05,4.77c1.62,0.15,4.13-1.76,4.63-3.89   c0.35-1.5,0.29-3.14,0.2-4.7c-0.07-1.23-0.47-2.45-0.72-3.65c2.53-0.86,2.55-0.88,3.78,1.11c2.39,3.86,4.67,7.79,7.15,11.59   c1.4,2.14,2.08,4.36,2.15,6.92C183.76,660.8,183.29,663.41,180.98,665.42z"/></g></a>
  <a xlink:title="VISAYAN VILLAGE" id="visayanvillage" onclick=""  class="cursor-pointer visayanvillage-svg">
                  <g id="region_visayan">
  <path id="visayanvillage_zoom" class="st6" d="M218.25,334.01c0.48-0.16,0.97-0.46,1.45-0.47c2.31-0.05,4.63-0.1,6.93,0c1.45,0.07,2.68-0.25,3.68-1.29   c1.5-1.54,3.3-1.98,5.42-1.87c2.77,0.15,5.56,0.04,8.58,0.04c0-2.85,0-5.53,0-8.45c1.96,0,3.68,0,5.53,0   c0.1-1.63,0.18-3.03,0.27-4.51c3.03-0.68,5.95-1.34,9-2.03c0-2.59,0-5.05,0-7.7c2.02,0,3.89,0,5.79,0   c0.43,0.49,0.83,1.25,1.45,1.55c1.05,0.52,1.23,1.29,1.29,2.31c0.13,2.29,0.36,4.58,0.56,7.03c2.67,0.17,5.19,0.4,7.72,0.46   c1.31,0.03,2.35,0.27,2.84,1.78c3.1-0.55,6.25,0.02,9.18-1.44c1.35-0.67,4.96-0.23,6.3,0.48c21.96-28.19,43.45-56.79,66.22-84.65   c0.78,0.34,1.56,0.68,2.34,1.04c11.93,5.52,23.84,11.06,35.78,16.54c2.02,0.93,4.15,1.6,6.23,2.42c0.96,0.38,1.93,0.75,2.85,1.21   c2,1,2.4,2.79,0.83,4.42c-0.98,1.01-2.25,1.75-3.45,2.51c-1.77,1.12-3.58,1.81-5.84,1.27c-1.21-0.29-2.71,0.07-3.93,0.53   c-2.21,0.83-2.77,3.15-1.34,5.05c0.62,0.82,1.49,1.44,2.16,2.22c1.08,1.27,2.18,2.53,3.08,3.93c0.99,1.53,0.68,2.6-0.82,3.6   c-1.92,1.28-3.86,2.52-5.91,3.85c1.79,4.29-0.12,8.4-0.15,12.72c-4.16,0.48-8.02,0.93-11.85,1.38c-0.15-0.16-0.36-0.28-0.35-0.39   c0.09-2.18-1.22-3.1-3.11-3.49c-1.09-0.23-2.18-0.57-3.28-0.63c-7.63-0.47-15.27-0.88-23-1.31c-0.25,0.63-0.48,1.2-0.81,2.1   c-0.96,2.85-2.42,5-4.12,7.05c-0.85,1.02-1.57,2.21-2.08,3.43c-4.11,9.85-8.07,19.76-12.28,29.57c-1.2,2.78-1.14,5.32-0.27,8.05   c0.57,0.16,1.07,0.31,1.4,0.41c0,2.85-0.06,5.55,0.02,8.25c0.07,2.38-0.64,4.33-2.53,5.86c-0.53,0.43-0.91,1.05-1.42,1.67   c1.4,1.7,2.76,3.26,4,4.91c0.7,0.93,1.52,1.27,2.66,1.21c1.22-0.07,2.44,0.01,3.94,0.03c-1.63,4.2-3.12,8.01-4.63,11.91   c3.51,1.41,6.75,2.71,9.93,3.98c0,4.31,0,8.49,0,12.8c-1.01,0-1.8,0.02-2.59,0c-22.94-0.83-45.88-1.68-68.82-2.48   c-1.23-0.04-2.09-0.57-2.98-1.25c-15.59-12.03-31.18-24.05-46.77-36.08c-0.54-0.42-1.03-0.91-1.59-1.41   c2.64-3.5,5.18-6.85,7.87-10.41C225.76,339.07,222.01,336.54,218.25,334.01z"/></g></a>
  <g id="XMLID_3_">
    <g>
      <a xlink:title="CUAMBOGAN" id="cuambogan" onclick=""  class="cursor-pointer cuambogan-svg">
      <g id="region_cuambogan">
      <path id="cuambogan_zoom" class="st4" d="M191.87,85.12c-1.01-6.22-1.74-12.2-1.13-18.57c2.19,0,4.45,0,6.87,0c0.09-1.78,0.17-3.26,0.26-4.98     c36.14-5.98,72.23-11.96,108.61-17.98c-0.2,1.65-0.35,3.06-0.54,4.44c-0.95,6.78-1.88,13.57-2.89,20.34     c-0.24,1.64-0.81,3.24-1.17,4.87c-0.45,2.1-0.66,4.22-0.03,6.56c2.02-0.39,3.95-0.77,6.18-1.02c0.38,0.23,0.46,0.3,0.54,0.39     c-0.33,2.25-0.85,4.49-0.52,6.91c1.89,0.1,3.62,0.2,5.54,0.3c0.18,3.01,0.36,5.91,0.54,8.96c1.84,0.11,3.56,0.2,5.41,0.31     c0.09,0.68,0.2,1.29,0.23,1.89c0.14,3.17,0.14,6.36,0.42,9.52c0.22,2.55-0.44,4.85-1.44,7.42c-2.23-0.53-4.44-1.03-7-1.63     c-4.86-1.21-9.35-2.4-14.11-3.36c0,6.09-0.06,11.82,0.04,17.56c0.02,1.48,0.32,3.02,0.87,4.37c0.65,1.61,0.88,2.99-0.14,4.49     c-0.43,0.64-0.62,1.41-1.05,2.43c1.97,0,3.61,0,5.59,0c-1.48,4.21-2.86,8.14-4.29,12.23c-0.4,0.09-1.02,0.24-1.63,0.38     c-3.07,0.67-3.51,1.22-3.62,4.48c-0.02,0.68-0.09,1.37-0.17,2.3c-1.23-0.41-2.23-0.67-3.17-1.03     c-8.61-3.34-17.26-6.57-25.81-10.06c-5.25-2.15-10.58-3.92-16.13-5.1c-3.27-0.71-6.61-1.3-9.71-2.48     c-5.64-2.14-11.31-4.29-16.42-7.65c-1.08-0.71-2.48-1.07-3.77-1.27c-4.25-0.67-8.52-1.18-12.78-1.76     c-1.48-0.21-2.97-0.43-4.59-0.66c0-2.27-0.05-4.33,0.01-6.38c0.06-1.94-0.26-3.8-1.1-5.56c-0.16-0.49-0.31-1-0.51-1.64     c-0.9,0.27-1.64,0.48-2.48,0.73c-0.17,0.7-0.32,1.38-0.47,2.02c-0.55,0.05-1.01,0.09-1.6,0.17c-0.09,0.71-0.19,1.4-0.31,2.25     c-2.96,0.3-5.86,0.59-8.94,0.89c-0.51,1.22-1.02,2.43-1.64,3.89c-1.94-0.49-3.84-0.96-5.82-1.46c-0.05-1.59-0.24-3.02-2.25-3.42     c-0.34,0.24-0.83,0.59-1.25,0.9c-1.31-0.09-2.58-1.96-1.91-3.04c1.83-2.99,2.08-6.46,3.33-9.61c0.24-0.62,0.9-1.08,1.74-2.04     c0.15-2.08,0.22-4.78,0.58-7.45c0.39-2.91,0.83-5.85,1.65-8.65c0.53-1.81,0.62-3.37-0.16-5.03c-0.26-0.56-0.36-1.2-0.66-2.22     C183.4,83.13,187.44,84.09,191.87,85.12z"/>
    </g>
  </a>
</g>
    <g>
      <path class="st7" d="M308.57,79.19c-0.33,2.25-0.85,4.49-0.52,6.91c1.89,0.1,3.62,0.2,5.54,0.3c0.18,3.01,0.36,5.91,0.54,8.96     c1.84,0.11,3.56,0.2,5.41,0.31c0.09,0.68,0.2,1.29,0.23,1.89c0.14,3.17,0.14,6.36,0.42,9.52c0.22,2.55-0.44,4.85-1.44,7.42     c-2.23-0.53-4.44-1.03-7-1.63c-4.86-1.21-9.35-2.4-14.11-3.36c0,6.09-0.06,11.82,0.04,17.56c0.02,1.48,0.32,3.02,0.87,4.37     c0.65,1.61,0.88,2.99-0.14,4.49c-0.43,0.64-0.62,1.41-1.05,2.43c1.97,0,3.61,0,5.59,0c-1.48,4.21-2.86,8.14-4.29,12.23     c-0.4,0.09-1.02,0.24-1.63,0.38c-3.07,0.67-3.51,1.22-3.62,4.48c-0.02,0.68-0.09,1.37-0.17,2.3c-1.23-0.41-2.23-0.67-3.17-1.03     c-8.61-3.34-17.26-6.57-25.81-10.06c-5.25-2.15-10.58-3.92-16.13-5.1c-3.27-0.71-6.61-1.3-9.71-2.48     c-5.64-2.14-11.31-4.29-16.42-7.65c-1.08-0.71-2.48-1.07-3.77-1.27c-4.25-0.67-8.52-1.18-12.78-1.76     c-1.48-0.21-2.97-0.43-4.59-0.66c0-2.27-0.05-4.33,0.01-6.38c0.06-1.94-0.26-3.8-1.1-5.56c-0.16-0.49-0.31-1-0.51-1.64     c-0.9,0.27-1.64,0.48-2.48,0.73c-0.17,0.7-0.32,1.38-0.47,2.02c-0.55,0.05-1.01,0.09-1.6,0.17c-0.09,0.71-0.19,1.4-0.31,2.25     c-2.96,0.3-5.86,0.59-8.94,0.89c-0.51,1.22-1.02,2.43-1.64,3.89c-1.94-0.49-3.84-0.96-5.82-1.46c-0.05-1.59-0.24-3.02-2.25-3.42     c-0.34,0.24-0.83,0.59-1.25,0.9c-1.31-0.09-2.58-1.96-1.91-3.04c1.83-2.99,2.08-6.46,3.33-9.61c0.24-0.62,0.9-1.08,1.74-2.04     c0.15-2.08,0.22-4.78,0.58-7.45c0.39-2.91,0.83-5.85,1.65-8.65c0.53-1.81,0.62-3.37-0.16-5.03c-0.26-0.56-0.36-1.2-0.66-2.22     c4.33,1.03,8.38,1.99,12.81,3.02c-1.01-6.22-1.74-12.2-1.13-18.57c2.19,0,4.45,0,6.87,0c0.09-1.78,0.17-3.26,0.26-4.98     c36.14-5.98,72.23-11.96,108.61-17.98c-0.2,1.65-0.35,3.06-0.54,4.44c-0.95,6.78-1.88,13.57-2.89,20.34     c-0.24,1.64-0.81,3.24-1.17,4.87c-0.45,2.1-0.66,4.22-0.03,6.56c2.02-0.39,3.95-0.77,6.18-1.02     C308.41,79.02,308.49,79.09,308.57,79.19z"/>
    </g>
  </g>
  <a xlink:title="LA FILIPINA" id="lafilipina" onclick=""  class="cursor-pointer lafilipina-svg">
                  <g id="region_lafilipina">
  <path id="lafilipina_zoom" class="st5" d="M311.72,113.88c2.53,0.66,5.07,1.31,7.8,2.02c0.59-1.78,1.12-3.41,1.61-4.9c0.33-0.16,0.47-0.28,0.62-0.29   c5.48-0.47,5.49-0.47,6.65,4.94c0.12,0.54,0.2,1.09,0.64,2.02c-0.98,0.81-2,1.58-2.94,2.43c-0.93,0.84-1.79,1.76-2.68,2.65   c0.06,0.16,0.11,0.33,0.17,0.49c2.65-0.21,5.29-0.43,7.94-0.64c2.7-0.21,5.4-0.41,8.19-0.62c0.93,2.92,0.61,5.88,0.84,8.93   c0.55,0.09,1.07,0.23,1.59,0.25c1.35,0.04,2.73,0.15,4.06-0.01c4.34-0.53,8.16,0.57,11.49,3.39c2.06,1.74,4.36,2.31,7.07,1.96   c3.07-0.4,6.2-0.43,9.3-0.61c0.7-0.04,1.41-0.01,2.43-0.01c0.63,3.44,1.25,6.84,1.91,10.47c2.09-0.81,4.27-1.64,6.57-2.52   c1.66,2.18,3.24,4.25,4.92,6.44c-1.98,2.83-3.87,5.57-5.83,8.27c-0.27,0.37-0.9,0.6-1.4,0.67c-0.77,0.11-1.56,0.03-2.43,0.03   c-0.23,1.09-0.48,2.01-0.59,2.95c-0.06,0.52-0.09,1.23,0.2,1.59c1.67,2.06,3.14,4.18,2.97,7.14c1.77,0,3.26,0,5.06,0   c-0.23,5.58-0.45,10.95-0.68,16.59c-4.29-0.62-8.43-1.21-12.65-1.82c0,2.89-0.22,5.6,0.07,8.26c0.26,2.38-0.56,3.76-2.44,5.13   c-6.82,4.98-13.54,10.11-20.23,15.27c-1.55,1.2-2.95,2.66-4.22,4.16c-1.89,2.24-3.61,4.63-5.5,7.09c-2.59-1.35-5.09-2.56-7.48-3.95   c-1.33-0.77-2.44-0.74-3.78-0.07c-2.49,1.26-5.05,2.37-7.58,3.52c-0.63,0.29-1.29,0.53-2.18,0.89c0.26-2.16-1-3.24-2.41-4.17   c-0.5-0.33-1.18-0.65-1.73-0.6c-1.91,0.18-3.79-0.4-5.77,0.61c-1.2,0.61-3.11,0.02-4.65-0.28c-1.31-0.26-2.53-0.98-3.83-1.34   c-1.51-0.42-3.06-0.67-4.77-1.03c-0.17,0.97-0.29,1.63-0.42,2.35c-1.29,0.38-2.52,0.85-3.51-0.78c-0.25-0.42-1.26-0.49-1.94-0.52   c-1.72-0.07-3.45-0.02-5.46-0.02c0.37-0.71,0.57-1.2,0.86-1.63c1.28-1.92,2.48-3.91,3.91-5.73c2.16-2.75,2.64-6.05,3.18-9.49   c-1.78,1.64-3.56,3.28-5.74,5.29c-0.44-6.83-0.84-13.14-1.26-19.67c-0.71,0.14-1.3,0.25-2.26,0.44   c-11.91,3.02-23.46,6.02-35.51,7.27c-1.36-3.87-2.72-7.68-4.01-11.52c-0.15-0.45,0.09-1.06,0.25-1.56   c0.16-0.51,0.44-0.98,0.73-1.61c-2.46-0.94-4.79-1.83-7.17-2.74c0.65-2.52,2.2-4.7,0.98-7.58c-2.11,0.55-4.16,1.08-6.45,1.68   c-0.26-0.28-0.72-0.78-1.24-1.34c2.35-4.21,4.55-8.36,6.96-12.39c1.02-1.7,1.27-3.14,0.07-4.77c-1.41-1.91-1.53-4.08-1.26-6.36   c0.24-1.97,0.24-3.97,0.38-5.96c0.04-0.59,0.22-1.16,0.35-1.84c1.63,0.37,3.02,0.7,4.41,1.01c7.39,1.62,14.62,3.7,21.63,6.65   c8.43,3.55,17.05,6.66,25.59,9.93c1,0.38,2.07,0.59,3.41,0.97c0-1.61-0.06-2.87,0.01-4.13c0.12-2.12,0.53-2.55,2.59-3   c1-0.21,1.99-0.46,2.63-0.61c0.78-2.45,1.43-4.63,2.17-6.78c0.65-1.88,1.41-3.72,2.08-5.59c0.2-0.55,0.28-1.13,0.49-2.01   c-1.87,0-3.48,0-5.29,0c0.37-0.88,0.55-1.49,0.86-2.03c0.52-0.91,0.53-1.8,0.05-2.7c-1.24-2.33-1.45-4.82-1.36-7.41   c0.1-2.78,0.02-5.58,0.02-8.36c0-1.82,0-3.64,0-5.71C303.23,111.95,307.47,112.92,311.72,113.88z"/></g></a>
  <a xlink:title="APOKON" id="apokon"  class="cursor-pointer apokon-svg">
  <g id="region_apokon">
  <path id="apokon_zoom" class="st6" d="M350.93,294.25c0.33-0.94,1.06-1.01,1.92-0.95c3.9,0.25,7.8,0.44,11.7,0.69c3.34,0.21,6.68,0.4,10.01,0.73   c1.32,0.13,2.61,0.61,4.03,0.96c0.11,1.15,0.21,2.15,0.34,3.48c4.3-0.44,8.52-0.88,13.06-1.34c-0.19,1.94-0.27,3.66-0.55,5.34   c-0.49,2.97-0.26,5.87,0.43,8.77c0.11,0.46,0.19,0.94,0.25,1.41c0.25,2.06-0.15,3.9-2.18,4.85c-2.51,1.17-3.06,3.22-2.93,5.69   c0.06,1.19,0.05,2.4,0.21,3.58c0.24,1.68-0.38,2.91-1.63,3.98c-0.99,0.85-2.19,1.64-2.16,3.27c1.05,0.84,2.75,0.76,3.19,2.49   c-0.42,0.23-0.88,0.49-1.35,0.73c-0.97,0.48-1.42,1.24-1.28,2.32c0.03,0.24,0.09,0.49,0.04,0.71c-0.74,3.63,1.07,6.24,3.38,8.72   c4.49,4.83,9.7,8.74,15.33,12.11c2.81,1.68,6,2.07,9.19,2.28c1.43,0.1,2.88,0.27,4.29,0.11c1.04-0.12,2.16-0.54,3.01-1.16   c1.03-0.75,1.91-0.88,3.08-0.45c2.84,1.04,4.72,3.2,6.44,5.49c0.83,1.1,0.65,2.51-0.08,3.63c-1.17,1.79-2.49,3.48-3.79,5.18   c-0.43,0.57-1.04,1-1.47,1.56c-2.42,3.13-1.5,6.56,2.13,8.21c1,0.46,1.95,1.04,2.88,1.64c0.97,0.63,1.09,1.55,0.54,2.5   c-0.48,0.81-1.02,1.6-1.64,2.31c-0.74,0.83-1.63,1.52-2.4,2.33c-1.45,1.53-2.08,3.35-1.79,5.48c0.21,1.51,0.82,2.66,2.25,3.42   c2.21,1.18,4.38,2.28,7.01,1.51c0.51-0.15,1.12-0.05,1.66,0.04c0.99,0.17,1.83,0.55,1.97,1.74c0.13,1.1,0.02,2.09-1.06,2.69   c-0.98,0.54-1.94,1.1-2.96,1.55c-1.64,0.72-2.39,2.02-2.63,3.71c-0.45,3.27,0.71,5.93,3.07,8.15c0.74,0.7,1.48,0.85,2.36,0.29   c2.05-1.31,4.41-1.3,6.69-1.45c3.07-0.21,5.05,1.19,5.59,4.28c0.41,2.32,0.39,4.75,0.32,7.12c-0.05,1.66-0.52,3.3-0.76,4.95   c-0.39,2.8-2.01,4.68-4.56,5.65c-1.62,0.62-3.38,1.17-5.08,1.2c-4.49,0.09-7.72,2.16-10.24,5.96c-4.61-0.36-9.27-0.73-14.25-1.12   c0.78-18.57,1.94-36.98,2.75-55.53c-2.6-0.49-4.68-0.05-6.45,2.26c-5.81,5.42-11.39,10.63-17.09,15.95   c-0.74-0.63-1.41-1.17-2.06-1.74c-6.19-5.5-12.4-10.99-18.55-16.54c-1.2-1.08-2.4-1.6-4.04-1.58c-6.21,0.08-12.43,0.04-18.64,0.03   c-0.85,0-1.7-0.07-2.68-0.12c0-4.63,0-9.06,0-13.53c-3.27-1.32-6.43-2.58-9.72-3.9c1.62-4.12,3.18-8.09,4.87-12.4   c-1.93,0-3.59,0.06-5.23-0.03c-0.66-0.03-1.51-0.18-1.92-0.61c-1.3-1.36-2.42-2.89-3.64-4.38c0.62-0.7,1.03-1.3,1.57-1.75   c1.45-1.23,1.94-2.77,1.96-4.64c0.05-3.26,0.28-6.52,0.42-9.78c0.01-0.21-0.11-0.43-0.17-0.66c-0.64-0.17-1.24-0.32-1.77-0.46   c-0.86-2.22-0.62-4.18,0.28-6.29c4.09-9.67,8.01-19.42,12.06-29.11c0.63-1.51,1.57-2.93,2.57-4.24   C348.76,299.32,350.37,297.07,350.93,294.25z"/></g></a>
  <a xlink:title="MAGDUM" id="button" onclick=""  class="cursor-pointer magdum-svg">
                  <g id="region_magdum">
  <path id="magdum_zoom" class="st3" d="M452.08,194.42c-4.39-0.49-8.46,0.42-12.56,0.96c-0.87,0.11-1.75,0.15-2.59,0.37   c-1.14,0.29-2.3,0.61-3.35,1.12c-1.37,0.66-1.86,1.83-1.61,3.38c0.3,1.83,0.68,3.61,1.82,5.12c0.76,1.01,0.96,2.13,0.88,3.38   c-0.09,1.35-0.09,2.71,0,4.06c0.23,3.75,1.29,7.19,3.78,10.11c1.04,1.21,2.05,2.45,2.95,3.76c1.16,1.71,0.79,3.36-0.89,4.54   c-2.08,1.47-4.45,2.12-6.96,2.2c-2.95,0.09-5.9,0.19-8.84,0.16c-3.98-0.04-7.05-1.55-8.7-5.46c-1.14-2.72-4.29-4.14-7.1-3.49   c-2.28,0.53-3.62,1.99-3.99,4.23c-0.29,1.8-0.36,3.64-0.43,5.47c-0.16,4.06-0.34,8.12-0.37,12.18c-0.02,2.41,0.25,4.83,0.4,7.45   c-1.26-0.45-2.63-0.81-3.89-1.4c-18.65-8.61-37.29-17.26-55.93-25.9c-0.35-0.16-0.68-0.38-1.23-0.68c0.95-1.28,1.89-2.44,2.72-3.68   c2.55-3.83,5.88-6.84,9.59-9.53c6.13-4.45,12.06-9.16,18.17-13.63c1.49-1.09,1.96-2.22,1.85-3.99c-0.17-2.6-0.04-5.21-0.04-8.14   c4.09,0.57,8.22,1.14,12.52,1.74c0.27-6.39,0.52-12.5,0.78-18.83c-1.7,0-3.26,0-4.8,0c-0.24-0.45-0.5-0.73-0.5-1.01   c-0.02-1.7-0.75-3.07-1.88-4.25c-1.18-1.24-1.53-2.57-0.53-4.25c0.87-0.06,1.88-0.13,2.99-0.21c2.18-3.11,4.38-6.23,6.69-9.52   c2.03,0,4.1-0.07,6.16,0.04c0.72,0.04,1.52,0.4,2.12,0.83c2.12,1.55,4.2,3.17,6.23,4.84c0.92,0.76,1.88,1.05,3.06,1.03   c2.87-0.06,5.74-0.09,8.61,0c4.21,0.13,7.41-1.89,10.65-4.74c-2.18-1.96-4.24-3.81-6.38-5.73c1.89-2.3,3.5-4.26,5.04-6.13   c4.45,0.81,4.45,0.81,6.04-3.85c1.15,0,2.41-0.16,3.62,0.04c2.1,0.33,4.16,0.88,6.51,1.4c0.17,0.88,0.4,2.11,0.66,3.5   c1.16,0,2.29,0,3.57,0c0.14-1.13,0.28-2.2,0.46-3.57c1.59,0.7,3.01,1.33,4.69,2.07c-1.35,2.64-2.65,5.15-4.02,7.83   c0.55,0.2,1.03,0.45,1.53,0.55c1.32,0.28,2.65,0.6,4,0.71c3.08,0.26,5.63,1.5,7.73,3.74c0.87,0.93,1.87,1.48,3.19,0.94   c0.07-0.03,0.16-0.01,0.24-0.03c2.53-0.76,4.67-0.32,6.21,1.98c0.66,0.98,1.62,0.86,2.58,0.75c2.06-0.24,4.12-0.46,6.17-0.75   c1.21-0.17,2.04,0.08,2.21,1.62c-1.73,1.14-1.84,2.96-1.94,4.93c-0.14,2.79-0.64,5.55-2.59,7.79c-0.3,0.34-0.59,0.85-0.58,1.27   c0.04,2-0.96,3.27-2.63,4.16c-0.18,0.1-0.3,0.32-0.59,0.66c2.24,1.85,4.44,3.66,6.81,5.62c-1.25,1.56-2.32,3.15-3.64,4.48   c-3.08,3.12-4.7,6.98-5.78,11.08c-0.89,3.39-5.02,5.27-8.46,3.77c-0.61-0.27-1.32-0.78-1.56-1.35c-1.46-3.42-4.49-4.54-7.67-5.48   C452.91,194.6,452.6,194.54,452.08,194.42z"/></g></a>
   <a xlink:title="NEW BALAMBAN" id="balamban" onclick=""  class="cursor-pointer balamban-svg">
                  <g id="region_balamban">
  <path id="newbalamban_zoom" class="st3" d="M512,92.98c1.02,0.88,2.04,1.76,3.18,2.74c0.53-0.33,1.07-0.63,1.56-1c1.57-1.18,1.54-1.23,0.19-2.89   c-1.03-1.27-0.82-2.82-0.96-4.5c3.13,0,6.11,0,9.18,0c0.55,1.93-0.19,4.21,1.59,5.89c-1.39,2.09-1.3,4.22-0.34,6.38   c0.16,0.36,0.27,0.75,0.38,1.13c0.95,3.41,0.14,4.67-3.27,5.48c-1.04,0.25-2.08,0.74-2.95,1.36c-1.94,1.4-3.8,2.91-5.63,4.44   c-0.9,0.75-1.83,1.23-3.03,1.11c-1.87-0.19-3.59,0.41-5.36,0.94c-2.79,0.83-5.66,1.41-8.69,2.14c-0.05,0.62-0.12,1.48-0.21,2.57   c-4.52,1.54-8.97,3.47-13.83,4.13c-0.47,0.06-0.95,0.14-1.42,0.2c-1.88,0.22-2.85,1.2-3.35,3.12c-0.64,2.45-1.68,4.8-2.69,7.13   c-0.6,1.39-0.9,2.69-0.23,4.12c0.2,0.43,0.24,0.93,0.42,1.37c0.68,1.63,0.75,3.23-0.12,4.81c-0.99,1.79-0.75,3.4,0.43,5.09   c1.3,1.86,2.32,3.91,3.64,6.18c-2.77,0.34-5.11,0.66-7.47,0.87c-0.47,0.04-1.05-0.28-1.47-0.58c-0.57-0.42-1.1-0.94-1.54-1.49   c-0.78-0.98-1.71-1.25-2.95-1.05c-5.04,0.81-3.36,1.12-7.17-2.07c-1.16-0.97-2.39-1.49-3.83-1.74c-2.03-0.35-4.05-0.74-6.35-1.17   c0.95-2.75,2.65-5,3.75-7.78c-2.33-1.1-4.58-2.16-7.17-3.38c-0.1,1.31-0.2,2.23-0.25,3.15c-0.05,1.04-0.53,1.44-1.8,1.09   c-0.19-1.13-0.41-2.37-0.67-3.9c-2.53,0.04-5.18,0.18-7.72-1.36c-0.22-1.54-0.34-3.29-0.75-4.96c-0.45-1.84-0.95-3.71-1.8-5.39   c-1.66-3.26-3.57-6.4-5.39-9.58c-0.27-0.47-0.61-0.9-0.7-1.03c-2.22,0.23-4.15,0.44-6.08,0.64c-0.24,0.03-0.55-0.04-0.69,0.09   c-1.89,1.75-3.7,0.51-5.81-0.13c0-1.37-0.09-2.79,0.04-4.19c0.06-0.65,0.46-1.33,0.87-1.88c1.34-1.78,2.73-3.54,4.15-5.25   c0.71-0.85,1.02-1.74,0.98-2.84c-0.08-2.39-0.09-4.78-0.09-7.17c-0.01-2.21,1.29-3.85,3.5-4.42c0.77-0.2,1.55-0.34,2.56-0.56   c-0.23-2.54-1.2-5.12,0.31-7.64c-2.41-1.18-4.56-2.19-6.66-3.29c-0.68-0.36-1.28-0.9-1.82-1.46c-0.72-0.75-0.86-1.61-0.32-2.61   c0.72-1.33,1.3-2.73,2.09-4.41c-1.45-0.54-2.81-1.08-4.2-1.56c-1.36-0.48-2.71-0.84-2.99-2.65c-0.09-0.57-0.88-1.03-1.55-1.75   c0.19-1.21,0.43-2.67,0.72-4.47c-4.08,0.79-7.92,1.54-11.89,2.31c-0.2-5.16-0.39-10.09-0.58-15.3c-3.17-0.57-6.34-1.14-9.73-1.75   c0.68-5.01,1.35-9.87,2.02-14.82c15.35-2.54,30.49-5.05,45.58-7.54c0.78,1.45,1.53,2.73,2.17,4.06c0.18,0.38,0.13,0.92,0.05,1.36   c-0.1,0.62-0.38,1.22-0.49,1.84c-0.49,2.63-0.24,2.94,2.06,4.4c2.95,1.88,5.92,3.75,8.67,5.91c2.89,2.27,2.96,5.04,0.6,7.87   c-0.45,0.54-0.88,1.11-1.41,1.77c0.73,1.44,1.44,2.86,2.16,4.27c1.89,3.69,3.85,7.34,5.65,11.07c0.7,1.45,1.5,2.31,3.21,2.21   c0.84-0.05,1.69,0.24,2.6,0.39c0,1.09,0,2.02,0,3.07c2.59,1.07,5.15,2.13,7.79,3.23c0.53-0.49,1.03-0.96,1.53-1.42   c2.86,3.12,2.85,3.12,1.48,6.89c-1.44,3.96-2.88,7.92-4.32,11.87c1.57,0.65,7.18,0.8,10.51,0.29c0-0.73,0-1.49,0-2.63   c2.72,0.9,5.2,1.82,7.74,2.53c2.68,0.75,5.41,1.33,8.14,1.9c2.65,0.56,5.32,1.02,7.98,1.51c2.65,0.49,5.31,0.96,8.25,1.48   c-0.2-0.77-0.35-1.33-0.39-2.19C511.8,93.18,511.9,93.08,512,92.98z"/></g></a>
  <a xlink:title="PANDAPAN" id="pandapan" onclick=""  class="cursor-pointer pandapan-svg">
  <g id="region_pandapan">
  <path id="pandapan_zoom" class="st6" d="M499.75,162.21c-1.93,0.35-3.72,0.47-5.33,1.08c-3.18,1.2-5.19,3.66-6.11,6.9c-1.25,4.38-4.18,7.61-7.28,11.1   c-1.87-1.53-3.69-3.02-5.71-4.68c1.75-1.13,2.5-2.66,2.5-4.58c0-0.35,0.27-0.76,0.52-1.04c1.9-2.16,2.4-4.84,2.63-7.54   c0.18-2.18,0.01-4.37,2.62-5.48c-1.88-3.23-3.48-6.24-5.34-9.09c-1.2-1.83-1.64-3.51-0.53-5.49c0.74-1.33,0.76-2.74,0.1-4.13   c-1.22-2.57-0.91-4.99,0.43-7.47c0.86-1.59,1.48-3.37,1.87-5.14c0.35-1.61,1.16-2.34,2.68-2.49c5.06-0.49,9.71-2.42,14.45-4.05   c0.45-0.15,0.88-0.36,1.42-0.58c0.11-0.81,0.22-1.66,0.29-2.2c3.43-0.99,6.68-1.97,9.95-2.86c0.75-0.21,1.59-0.26,2.37-0.17   c1.89,0.21,3.38-0.42,4.75-1.69c1.05-0.97,2.23-1.8,3.35-2.7c1.67-1.34,3.26-2.69,5.57-3.01c2.69-0.37,3.58-2.34,3.12-5.09   c2.88,0.26,5.42,0.52,7.44,2.55c1.46,1.47,3.05,2.8,4.59,4.19c1.95,1.78,4.28,2.76,6.88,3c2.06,0.19,4.14,0.42,6.2,0.37   c2.05-0.06,4.11-0.32,6.12-0.73c2.66-0.54,4.43,0.3,5.07,2.93c0.43,1.77,0.65,3.61,0.76,5.43c0.09,1.48,0.75,2.36,2.03,2.93   c2.11,0.94,4.18,1.97,6.32,2.82c2.33,0.93,4.71,0.57,7.04-0.09c2.73-0.77,5.08-2.2,7.19-4.11c1.1-1,2.43-1.77,3.69-2.6   c0.79-0.53,1.65-0.52,2.5-0.1c4.28,2.14,7.37,5.25,8.22,10.16c0.31,1.8,0.68,3.6,0.89,5.42c0.26,2.18-0.19,3.01-2.2,3.62   c-1.84,0.57-3.03,1.67-3.71,3.41c-0.72,1.85-1.58,3.67-2.14,5.56c-0.99,3.33-3.55,4.7-6.55,5.57c-0.68,0.2-1.42,0.18-2.14,0.22   c-1.67,0.09-3.12,0.66-4.21,1.95c-0.84,0.99-1.88,1.36-3.15,1.37c-1.99,0.01-3.98,0.21-5.97,0.15c-2.62-0.08-4.84,0.82-6.8,2.45   c-1.28,1.07-2.52,2.2-3.7,3.39c-2.51,2.55-5.37,4.44-8.95,5.17c-2.98,0.6-5.35,2.39-7.64,4.27c-1.24,1.02-2.54,1.81-4.17,2.2   c-2.81,0.67-5.27,0.31-7.73-1.27c-4.38-2.82-4.66-2.7-5.58-7.89c-0.61-3.45-2.29-5.52-5.21-7.32c-3.57-2.2-6.74-1.85-10.05,0.16   c-0.41,0.25-0.81,0.53-1.15,0.85C508.58,161.06,504.62,162.58,499.75,162.21z"/></g></a>
  <a xlink:title="SAN AGUSTIN" id="sanagustin" onclick=""  class="cursor-pointer agustin-svg">
  <g id="region_sanagustin">
  <path id="sanagustin_zoom" class="st8" d="M375.47,70.26c-1.94,0.17-3.68,0.31-5.5,0.47c-0.1-0.41-0.29-0.72-0.23-0.98c0.63-2.6,0.06-5.06-0.83-7.48   c-0.76-2.05-0.95-4.14-0.9-6.33c0.12-5.42,0.12-10.84,0.07-16.26c-0.02-1.97-0.31-3.94-0.5-6.18c7.72-1.29,15.29-2.55,23.23-3.87   c-0.69,5.32-1.34,10.33-2.02,15.54c3.32,0.59,6.51,1.16,9.85,1.75c0.22,5.23,0.43,10.37,0.65,15.73c3.87-0.77,7.51-1.49,11.47-2.27   c-0.19,1.37-0.37,2.59-0.56,3.94c1.11,0.6,2.05,1.33,2.39,2.7c0.13,0.53,0.9,1.03,1.49,1.29c1.45,0.63,2.96,1.1,4.58,1.69   c-0.52,1.18-0.95,2.2-1.42,3.21c-1,2.18-0.4,4.14,1.77,5.31c1.68,0.91,3.43,1.69,5.14,2.54c0.42,0.21,0.81,0.46,0.98,0.56   c0,2.17,0,4.11,0,6.26c-1.61,0.35-3.31,1.07-4.64,2.54c-0.68,0.76-1.12,1.44-1.08,2.5c0.09,2.15-0.03,4.31,0.14,6.45   c0.17,2.06-0.43,3.72-1.85,5.17c-0.56,0.57-1,1.24-1.5,1.86c-2.92,3.7-3.19,4.76-2.39,9.71c1.17,0.35,2.39,0.71,3.6,1.07   c0.94,0.28,1.81,0.38,2.68-0.35c0.44-0.36,1.15-0.48,1.75-0.55c1.55-0.18,3.11-0.27,5.03-0.43c2.05,3.72,4.41,7.6,6.36,11.68   c1.16,2.42,1.23,5.21,1.39,7.98c-1.11,0.19-2.04,0.34-3.07,0.51c-0.24,0.77-0.47,1.51-0.69,2.26c-0.59,2-0.77,2.1-2.88,1.58   c-0.54-0.13-1.08-0.25-1.85-0.42c-1.93,2.34-3.89,4.72-6,7.28c1.94,1.95,3.82,3.85,5.84,5.88c-2.24,2.12-4.69,3.49-7.64,3.62   c-3.26,0.14-6.54,0.09-9.8,0c-0.81-0.02-1.71-0.37-2.38-0.85c-2.01-1.43-3.96-2.96-5.86-4.54c-1.16-0.97-2.33-1.53-3.91-1.3   c-1.33,0.19-2.71,0.02-4.06,0.14c-1.1,0.1-1.77-0.34-2.39-1.19c-1.46-1.99-2.99-3.92-4.59-6.02c-2.02,0.76-4,1.5-5.94,2.23   c-0.73-3.47-1.42-6.73-2.14-10.14c-3.23,0.19-6.32,0.31-9.4,0.57c-6.26,0.54-6.26,0.58-11.55-2.79c-0.54-0.34-1.11-0.64-1.61-1.03   c-1.25-0.99-2.63-1.31-4.23-1.25c-2.85,0.1-5.71,0.03-8.73,0.03c0-0.79,0-1.36,0-1.96c0.32-0.1,0.54-0.21,0.76-0.22   c2.87-0.02,5.75-0.18,8.61,0.01c2.78,0.18,5.13-0.76,7.6-2.1c0-3.22,0-6.47-0.01-9.9c2.7,0.12,4.79-1.27,7.06-2.09   c0.81-0.29,1.67-0.45,2.53-0.6c2.18-0.37,4.36-0.7,6.76-1.09c-0.2-0.93-0.26-1.54-0.46-2.11c-1.15-3.22-2.32-6.44-3.52-9.65   c-0.38-1.01-0.7-1.96,0.56-2.95c2.32,1.43,4.96,1.39,7.76,1.05c0-4.59,0-9.09-0.01-13.71c0.99-0.23,1.98-0.45,3.03-0.69   c0.24-2.99,0.39-5.86-1.3-8.57c-1.08-1.73-1.83-3.68-2.78-5.63C377.39,70.04,376.54,70.14,375.47,70.26z"/></g></a>
  <a xlink:title="LIBOGANON" id="liboganon" onclick=""  class="cursor-pointer liboganon-svg">
                  <g id="region_liboganon">
  <path id="liboganon_zoom" class="st9" d="M224.64,642.05c-1.37,3.26-1.41,6.66-0.94,10.08c0.12,0.83,0.65,1.6,0.97,2.41c0.53,1.31,1.35,2.58,1.52,3.93   c0.44,3.44,0.6,6.93,0.88,10.45c-2.3,1.05-4.4,1.98-6.48,2.95c-4.39,2.06-8.77,4.14-13.15,6.21c-2.54,1.2-5.18,1.98-7.98,2.31   c-3.81,0.45-7.6,0.49-11.59,0.01c-0.26-3.36-2.84-4.28-5.37-5.37c-1.36-0.59-2.7-1.38-3.82-2.35c-1.59-1.38-1.52-2.31-0.04-3.79   c0.9-0.9,1.88-1.71,3.06-2.77c3.32-3.24,4.32-9.77,2.12-13.49c-2.88-4.87-5.89-9.66-8.85-14.48c-0.21-0.34-0.41-0.7-0.68-0.98   c-0.75-0.77-2.63-0.9-3.83-0.26c-1.16,0.62-1.05,1.65-0.82,2.71c0.28,1.32,0.65,2.64,0.76,3.98c0.19,2.21-0.5,4.08-2.53,5.28   c-0.95,0.57-1.8,0.52-2.61-0.23c-1.09-1.01-1.85-2.16-1.83-3.74c0.02-1.25-0.22-2.49-1.59-2.91c-2.09-0.65-3.16-2.29-4.27-3.97   c-1.31-1.98-1.83-4.2-2.3-6.48c-0.67-3.28-2.33-3.72-5.22-2.47c-0.88,0.38-1.56,1.27-2.25,2.01c-0.5,0.54-0.87,1.2-1.3,1.81   c-0.17-0.05-0.34-0.11-0.52-0.16c0-0.67-0.01-1.34,0-2.01c0.07-3.08,1.32-5.88,2.05-8.81c0.3-1.18,0.92-1.7,2.05-2   c1.84-0.49,3.65-1.12,5.46-1.74c1.26-0.44,2.57-3.01,1.95-4.1c-1.08-1.91-2.37-3.69-3.5-5.42c-0.69,0.32-1.05,0.48-1.73,0.79   c0-3.54,0-6.74,0-10.13c-4.25-0.05-8.18-0.52-10.98-4c-1.92,1.13-3.62,2.14-5.33,3.15c-1.43-1-3.89-0.45-3.88-3.08   c-2.98-0.32-5.81-0.63-8.69-0.95c-0.2-2.6-0.38-5.03-0.56-7.47c-2.73-0.37-5.22-0.72-7.96-1.09c0.71-2.33,1.35-4.42,2.03-6.67   c4.44,1.46,8.63,2.84,12.88,4.23c1.45-3.27,2.76-6.23,4.09-9.24c-2.2-1.27-4.2-2.41-6.43-3.7c1.15-0.56,1.92-0.93,2.71-1.31   c0-2.98,0.05-5.85-0.02-8.71c-0.03-1.3,0.36-2.25,1.3-3.16c3.17-3.03,6.26-6.14,9.4-9.2c0.49-0.48,1.06-0.87,1.76-1.44   c0.19,0.99,0.33,1.73,0.47,2.42c0.34,0.11,0.56,0.25,0.79,0.25c1.55-0.03,2.36,0.71,2.46,2.26c0.02,0.23,0.15,0.45,0.22,0.68   c0.8,2.41,1.27,2.75,3.75,2.73c5.13-0.05,7.44,1.61,8.91,6.42c0.7,2.29,1.54,4.03,5,3.52c1.88-0.27,3.28,0.35,3.95,2.25   c0.1,0.3,0.29,0.57,0.46,0.84c1.32,2.13,3.62,2.46,5.74,3.06c1.64,0.46,2.58-0.81,3.74-1.64c0.93-0.66,2.09-1.16,3.21-1.35   c1.48-0.25,2.43,0.91,2.09,2.38c-0.23,1-0.65,1.96-1.05,2.92c-0.71,1.7-1.89,2.74-3.87,2.52c-0.94-0.1-1.7,0.14-2.27,0.97   c-1.13,1.62-2.83,2.22-4.7,2.48c-1.89,0.27-3.8,0.49-5.66,0.89c-3.2,0.69-4.85,2.91-5.33,6c-0.42,2.74,1.15,4.5,3.26,5.89   c3.46,2.27,6.94,4.53,10.4,6.8c1.26,0.83,2.63,1.56,3.72,2.58c3.19,3,6.28,6.11,9.38,9.21c1.35,1.36,1.35,2.51-0.21,3.55   c-1.02,0.68-2.31,1.01-3.52,1.32c-2.39,0.61-4.83,1.01-7.2,1.68c-1.54,0.43-2.08,1.74-1.27,2.96c0.38,0.58,1.22,1.07,1.92,1.18   c2.82,0.45,5.66,0.93,8.51,1.06c4.9,0.22,7.83,2.44,8.8,7.28c0.75,3.76,3.12,6.25,6.23,8.05c3.47,2,7.82-0.43,8-4.4   c0.08-1.9-0.18-3.81-0.27-5.72c-0.09-2.07-0.33-4.15-0.2-6.2c0.25-3.81,2.26-6.6,5.68-8.23c2.84-1.36,5.78,0.03,5.85,2.99   c0.04,1.63,0.71,2.65,1.48,3.77c2.21,3.23,4.32,6.48,5.22,10.39c0.5,2.15,0.59,4.25-0.03,6.36   C225.68,638.55,225.16,640.3,224.64,642.05z"/></g></a>
  <a xlink:title="NUEVA FUERZA" id="nuevafuerza" class="cursor-pointer fuerza-svg" >
  <g id="region_nuevafuerza">
  <path id="nuevafuerza_zoom" class="st3" d="M371.88,96.26c-2.03,0.69-2.65,2.07-1.96,4.03c1.04,2.93,2.12,5.84,3.17,8.76c0.21,0.59,0.38,1.2,0.67,2.12   c-1.38,0.32-2.67,0.87-3.95,0.86c-2.06-0.02-3.92,0.42-5.74,1.31c-1,0.49-2.02,1.03-3.1,1.23c-0.96,0.18-2-0.08-3.2-0.16   c0,3.61,0,7.09,0,10.62c-2,1.15-3.89,1.93-6.16,1.83c-3.26-0.14-6.52-0.04-9.95-0.04c-0.25-1.99-0.49-3.85-0.77-6.01   c-4.76,0.35-9.45,0.7-14.13,1.05c-0.09-0.15-0.18-0.3-0.26-0.45c0.85-0.87,1.76-1.7,2.53-2.64c0.41-0.5,0.89-1.27,0.78-1.81   c-0.45-2.41-1.11-4.78-1.74-7.36c-2.26,0-4.38,0-6.69,0c-0.23-5.07-0.45-9.89-0.68-15c-1.8-0.12-3.58-0.24-5.52-0.37   c-0.16-2.92-0.31-5.75-0.48-8.85c-1.9-0.11-3.67-0.22-5.47-0.32c-0.36-2.76,0.44-5.16,1.32-7.98c-2.89,0.52-5.27,0.95-7.99,1.44   c0.1-1.64-0.08-3.19,0.33-4.57c2.41-8.16,2.93-16.61,4.06-24.96c0.18-1.34,0.41-2.68,0.52-4.03c0.09-1.14,0.57-1.65,1.74-1.83   c5.82-0.91,11.63-1.9,17.44-2.86c12.1-2,24.19-4.01,36.29-6.01c1.09-0.18,2.18-0.3,3.63-0.5c0.22,3.53,0.57,6.91,0.61,10.29   c0.05,3.98-0.1,7.97-0.29,11.95c-0.09,2.02,0.06,3.97,0.77,5.86c1.02,2.72,1.58,5.49,0.96,8.4c-0.1,0.45-0.01,0.94-0.01,1.69   c3.05-0.25,6.02-0.5,8.92-0.74c3.27,4.78,4.24,7.77,3.82,11.94c-0.93,0.21-1.92,0.43-3.03,0.67c0,4.54,0,9.03,0,13.54   C375.96,98.03,373.96,97.45,371.88,96.26z"/></g></a>
  <path class="st10" d="M224.8,642.04c0.36-1.75,0.87-3.5,1.39-5.25c0.62-2.12,0.53-4.21,0.03-6.36c-0.9-3.9-3.01-7.16-5.22-10.39   c-0.76-1.11-1.44-2.14-1.48-3.77c-0.06-2.95-3-4.35-5.85-2.99c-3.41,1.64-5.42,4.43-5.68,8.23c-0.14,2.05,0.1,4.13,0.2,6.2   c0.09,1.91,0.35,3.82,0.27,5.72c-0.18,3.96-4.53,6.4-8,4.4c-3.11-1.8-5.48-4.29-6.23-8.05c-0.97-4.84-3.9-7.06-8.8-7.28   c-2.85-0.13-5.69-0.6-8.51-1.06c-0.7-0.11-1.54-0.6-1.92-1.18c-0.8-1.22-0.27-2.52,1.27-2.96c2.37-0.67,4.81-1.06,7.2-1.68   c1.21-0.31,2.5-0.65,3.52-1.32c1.56-1.04,1.56-2.19,0.21-3.55c-3.09-3.1-6.19-6.21-9.38-9.21c-1.09-1.02-2.46-1.75-3.72-2.58   c-3.46-2.28-6.94-4.53-10.4-6.8c-2.12-1.39-3.69-3.16-3.26-5.89c0.48-3.09,2.12-5.32,5.33-6c1.87-0.4,3.77-0.62,5.66-0.89   c1.87-0.27,3.57-0.86,4.7-2.48c0.58-0.83,1.34-1.07,2.27-0.97c1.98,0.22,3.16-0.81,3.87-2.52c0.4-0.95,0.82-1.92,1.05-2.92   c0.34-1.48-0.61-2.63-2.09-2.38c-1.12,0.19-2.28,0.69-3.21,1.35c-1.16,0.83-2.1,2.11-3.74,1.64c-2.12-0.6-4.42-0.93-5.74-3.06   c-0.17-0.27-0.36-0.54-0.46-0.84c-0.67-1.9-2.06-2.52-3.95-2.25c-3.45,0.5-4.3-1.24-5-3.52c-1.47-4.81-3.78-6.47-8.91-6.42   c-2.47,0.03-2.95-0.32-3.75-2.73c-0.08-0.23-0.21-0.45-0.22-0.68c-0.1-1.55-0.92-2.28-2.46-2.26c-0.22,0-0.45-0.14-0.79-0.25   c-0.13-0.7-0.28-1.43-0.47-2.42c-0.7,0.57-1.27,0.96-1.76,1.44c-3.14,3.06-6.23,6.17-9.4,9.2c-0.95,0.9-1.34,1.86-1.3,3.16   c0.08,2.86,0.02,5.73,0.02,8.71c-0.79,0.38-1.55,0.75-2.71,1.31c2.24,1.28,4.23,2.43,6.43,3.7c-1.34,3.02-2.64,5.97-4.09,9.24   c-4.25-1.4-8.44-2.77-12.88-4.23c-0.68,2.25-1.32,4.33-2.03,6.67c2.74,0.38,5.23,0.72,7.96,1.09c0.18,2.44,0.36,4.87,0.56,7.47   c2.88,0.31,5.71,0.62,8.69,0.95c0,2.63,2.46,2.08,3.88,3.08c1.71-1.01,3.42-2.02,5.33-3.15c2.81,3.48,6.74,3.95,10.98,4   c0,3.39,0,6.59,0,10.13c0.68-0.31,1.04-0.48,1.73-0.79c1.13,1.73,2.42,3.51,3.5,5.42c0.62,1.1-0.69,3.67-1.95,4.1   c-1.8,0.63-3.62,1.25-5.46,1.74c-1.12,0.3-1.75,0.83-2.05,2c-0.74,2.92-1.99,5.73-2.05,8.81c-0.02,0.67,0,1.34,0,2.01   c0.17,0.05,0.34,0.11,0.52,0.16c0.43-0.61,0.8-1.27,1.3-1.81c0.69-0.74,1.37-1.63,2.25-2.01c2.89-1.25,4.55-0.8,5.22,2.47   c0.47,2.27,0.99,4.5,2.3,6.48c1.11,1.68,2.17,3.32,4.27,3.97c1.37,0.42,1.61,1.66,1.59,2.91c-0.02,1.57,0.73,2.73,1.83,3.74   c0.81,0.75,1.66,0.79,2.61,0.23c2.03-1.21,2.72-3.07,2.53-5.28c-0.12-1.34-0.49-2.66-0.76-3.98c-0.22-1.06-0.34-2.1,0.82-2.71   c1.2-0.64,3.08-0.51,3.83,0.26c0.27,0.28,0.47,0.64,0.68,0.98c2.96,4.82,5.97,9.61,8.85,14.48c2.21,3.73,1.2,10.25-2.04,13.36   c-0.29-0.08-0.43-0.23-0.68-0.47c2.2-2.11,2.66-4.72,2.57-7.65c-0.08-2.55-0.75-4.77-2.15-6.92c-2.48-3.8-4.77-7.72-7.15-11.59   c-1.23-1.99-1.25-1.98-3.78-1.11c0.25,1.2,0.64,2.42,0.72,3.65c0.09,1.56,0.15,3.2-0.2,4.7c-0.5,2.14-3.01,4.04-4.63,3.89   c-1.78-0.16-3.92-2.51-4.05-4.77c-0.09-1.6-0.6-2.49-2.15-3.25c-2.98-1.45-4.17-4.45-5.32-7.35c-0.35-0.88-0.47-1.85-0.66-2.78   c-0.22-1.1-0.33-2.38-1.63-2.65c-1.42-0.29-2.67,0.38-3.56,1.49c-0.64,0.8-1.09,1.76-1.7,2.59c-0.35,0.47-0.86,0.81-1.33,1.24   c-1.23-1.13-1.28-2.39-1.28-3.67c-0.01-2.92,0.91-5.64,1.78-8.37c1.31-4.12,0.23-3.12,4.32-4.47c1.21-0.4,2.43-0.75,3.63-1.18   c1.75-0.63,2.29-2.16,1.34-3.76c-0.4-0.68-0.87-1.34-1.32-1.99c-0.17-0.25-0.4-0.47-0.61-0.71c-0.45,0.22-0.83,0.4-1.19,0.57   c-1.37-1.33-1.85-2.79-1.71-4.6c0.16-2.04,0.04-4.11,0.04-6.28c-0.85-0.14-1.62-0.42-2.38-0.38c-2.65,0.14-4.76-0.94-6.65-2.65   c-0.18-0.16-0.38-0.29-0.59-0.4c-0.13-0.07-0.3-0.09-0.65-0.18c-1.91,1.14-3.95,2.36-6.27,3.76c0-1.47-0.73-2.08-1.91-2.3   c-1.06-0.2-1.9-0.74-1.89-2.01c-2.81-0.3-5.49-0.58-8.42-0.88c-0.19-2.45-0.38-4.87-0.59-7.52c-2.29-0.29-4.55-0.68-6.82-0.82   c-0.68-0.04-1.46,0.51-2.08,0.96c-2.84,2.04-5.48,4.38-9.02,5.6c-0.34-0.13-0.5-0.27-0.8-0.51c3.24-1.6,6.18-3.76,9.1-5.97   c1.08-0.82,1.74-1.75,2.08-3.06c0.55-2.07,1.24-4.09,1.95-6.38c4.34,1.42,8.54,2.79,12.97,4.25c1.12-2.48,2.19-4.83,3.33-7.36   c-1.63-0.89-3.13-1.78-4.69-2.54c-1.13-0.56-1.5-1.33-1.04-2.67c0.61-0.26,1.32-0.57,2.32-0.99c0-2.64,0.08-5.42-0.03-8.18   c-0.07-1.57,0.44-2.68,1.57-3.75c3.19-3,6.28-6.11,9.41-9.18c0.23-0.22,0.43-0.49,0.7-0.65c0.73-0.41,1.69-1.24,2.19-1.03   c0.65,0.27,0.95,1.39,1.64,2.55c0.07,0.02,0.74,0.06,1.23,0.38c0.54,0.35,0.98,0.92,1.35,1.48c0.21,0.31,0.16,0.77,0.27,1.15   c0.73,2.57,0.86,2.71,3.61,2.68c1.89-0.02,3.61,0.43,5.27,1.3c1.79,0.94,3.04,2.28,3.56,4.26c0.18,0.69,0.39,1.38,0.62,2.05   c0.74,2.12,1.24,2.51,3.52,2.28c2.42-0.24,4.19,0.45,5.17,2.83c1.08,2.62,3.59,2.97,5.93,3.34c0.58,0.09,1.41-0.66,1.94-1.2   c1.13-1.17,2.54-1.65,4.06-1.81c2.33-0.25,3.93,1.39,3.4,3.66c-0.38,1.6-1.1,3.15-1.89,4.61c-0.68,1.26-1.92,1.91-3.41,1.78   c-1.15-0.1-1.96,0.3-2.64,1.23c-1.07,1.46-2.73,1.86-4.38,2.16c-1.8,0.34-3.63,0.51-5.43,0.84c-3,0.54-4.68,2.23-5.12,5.19   c-0.32,2.09,0.88,3.48,2.48,4.55c2.71,1.82,5.36,3.76,8.21,5.35c6.39,3.56,11.04,9.08,16.2,14.04c1.19,1.14,1.19,2.54,0.25,3.85   c-1.1,1.52-2.67,2.16-4.46,2.49c-2.19,0.4-4.37,0.88-6.54,1.37c-0.6,0.14-1.17,0.43-1.69,0.63c-0.24,1.4,0.62,1.64,1.53,1.75   c2.76,0.35,5.52,0.92,8.28,0.94c3.43,0.03,5.98,1.58,8.09,3.97c0.73,0.82,1.1,2.13,1.24,3.27c0.41,3.37,2.39,5.63,4.88,7.62   c1.61,1.29,3.32,1.34,5.15,0.55c1.83-0.78,2.32-2.29,2.26-4.08c-0.04-1.27-0.15-2.54-0.22-3.81c-0.12-2.3-0.32-4.61-0.33-6.91   c-0.02-3.91,1.88-6.84,4.99-9.02c0.76-0.53,1.69-0.92,2.6-1.12c2.89-0.66,4.29,0.03,5.66,2.64c0.29,0.56,0.56,1.13,0.89,1.81   c0.65-0.14,1.27-0.22,1.85-0.4c12.79-3.92,25.57-7.85,38.35-11.78c2.46-0.76,4.81-4.17,4.48-6.79c-0.3-2.36-0.74-4.73-1.39-7.01   c-0.3-1.07-1.15-2.04-1.91-2.91c-0.59-0.67-1.45-0.77-2.42-0.59c-5.23,0.99-9.29,3.48-11.74,8.42c-1.75,3.53-4.38,3.7-6.84,0.64   c-0.25-0.31-0.5-0.62-0.76-0.92c-1.62-1.88-3.54-2.53-5.98-1.65c-1.86,0.67-2.51,0.12-2.25-1.87c0.29-2.22,0.59-4.41,0.01-6.64   c-0.29-1.09,0.27-1.83,1.35-2.17c0.68-0.21,1.36-0.46,2.03-0.7c1.22-0.44,1.3-1.49,1.33-2.55c0.02-1.07-0.81-1.24-1.59-1.44   c-2.45-0.63-4.13-2.35-5.73-4.13c-1.39-1.55-1.33-2.62,0-4.21c0.31-0.37,0.67-0.69,0.92-1.09c0.87-1.37,0.86-2.04-0.46-3.06   c-2.03-1.57-2.75-3.64-2.66-6.08c0.06-1.75-0.47-3.29-1.44-4.71c-0.6-0.87-0.62-0.86-2.36-1.18c-0.24,0.96-0.43,1.95-0.73,2.92   c-0.35,1.14-0.66,2.31-1.21,3.35c-0.71,1.34-2.18,1.82-3.47,1.35c-1.93-0.69-3.51-4.18-2.63-6.05c0.22-0.48,0.89-0.81,1.43-1.05   c0.57-0.25,1.25-0.24,1.84-0.47c1.36-0.53,2.03-1.8,1.7-3.03c-0.37-1.35-1.41-2.05-2.9-1.85c-0.78,0.1-1.54,0.38-2.32,0.54   c-2.46,0.5-3.37-0.46-2.71-2.84c0.19-0.68,0.42-1.35,0.75-2.37c-0.95-0.18-1.74-0.43-2.54-0.46c-1.95-0.08-2.43-0.51-2.67-2.49   c-0.13-1.07-0.4-2.12-0.64-3.34c-3.75,0.46-7.25,0.74-10.68,1.35c-2.29,0.4-4.02-0.04-5.88-1.54   c-10.41-8.42-20.93-16.7-31.42-25.02c-1.12-0.89-2.24-1.76-3.49-2.74c0.27-0.67,0.55-1.37,0.86-2.16c-0.76-0.6-1.49-1.21-2.24-1.78   c-13.08-10.05-26.17-20.09-39.23-30.17c-0.92-0.71-1.61-1.71-2.43-2.74c0.11-0.32,0.25-0.47,0.49-0.75   c1.14,0.94,2.07,2.15,3.24,3.06c12.99,10.03,26.02,20.02,39.04,30.02c0.63,0.48,1.27,0.94,2.05,1.52   c19.37-24.79,38.69-49.51,58.12-74.37c15.22,11.86,30.26,23.58,45.74,35.64c1.05-26.1,2.08-51.67,3.11-77.38c1.37,0,2.46,0,3.49,0   c0.08-0.24,0.11-0.32,0.12-0.39c0.01-0.07,0.04-0.18,0-0.22c-0.22-0.23-0.43-0.47-0.68-0.66c-12.55-9.68-25.1-19.36-37.79-29.15   c-7.08,8.66-14.08,17.2-21.21,25.91c-9.75-7.92-19.31-15.69-28.97-23.55c-6.88,9.12-13.64,18.08-20.59,27.29   c-9.62-7.42-19.12-14.75-28.74-22.16c-0.61,0.4-1.19,0.79-1.94,1.23c-0.31-0.08-0.45-0.23-0.71-0.46c0.73-0.8,1.57-1.5,2.54-2.29   c9.55,7.37,18.99,14.64,28.63,22.07c6.9-9.14,13.69-18.13,20.62-27.31c9.73,7.91,19.28,15.68,29,23.58   c6.86-8.38,13.6-16.62,20.45-24.99c-3.1-2.41-6.04-4.7-9.08-7.07c2.64-3.5,5.17-6.86,7.87-10.43c-3.58-2.46-7.03-4.83-10.58-7.34   c0.14-0.26,0.38-0.38,0.74-0.57c3.87,2.46,7.62,4.99,11.51,7.61c-2.69,3.56-5.23,6.92-7.87,10.41c0.56,0.5,1.05,0.99,1.59,1.41   c15.59,12.03,31.18,24.05,46.77,36.08c0.89,0.69,1.75,1.21,2.98,1.25c22.94,0.8,45.88,1.64,68.82,2.48c0.79,0.03,1.57,0,2.59,0   c0-4.3,0-8.49,0-12.8c-3.17-1.27-6.41-2.57-9.93-3.98c1.52-3.9,3-7.71,4.63-11.91c-1.5-0.02-2.73-0.1-3.94-0.03   c-1.14,0.06-1.95-0.28-2.66-1.21c-1.25-1.64-2.6-3.2-4-4.91c0.51-0.62,0.89-1.24,1.42-1.67c1.89-1.52,2.59-3.48,2.53-5.86   c-0.07-2.7-0.02-5.4-0.02-8.25c-0.32-0.09-0.83-0.24-1.4-0.41c-0.87-2.73-0.93-5.27,0.27-8.05c4.22-9.8,8.17-19.72,12.28-29.57   c0.51-1.22,1.23-2.41,2.08-3.43c1.7-2.05,3.16-4.2,4.11-6.87c0.3-0.14,0.51-0.14,0.88-0.14c-0.41,2.82-2.01,5.06-3.73,7.29   c-1,1.3-1.94,2.73-2.57,4.24c-4.06,9.69-7.98,19.43-12.06,29.11c-0.89,2.11-1.14,4.07-0.28,6.29c0.53,0.14,1.13,0.29,1.77,0.46   c0.06,0.23,0.18,0.45,0.17,0.66c-0.14,3.26-0.37,6.52-0.42,9.78c-0.03,1.87-0.51,3.41-1.96,4.64c-0.54,0.45-0.95,1.05-1.57,1.75   c1.22,1.5,2.35,3.02,3.64,4.38c0.41,0.43,1.26,0.58,1.92,0.61c1.64,0.08,3.3,0.03,5.23,0.03c-1.69,4.31-3.25,8.28-4.87,12.4   c3.28,1.32,6.45,2.59,9.72,3.9c0,4.47,0,8.9,0,13.53c0.99,0.05,1.83,0.12,2.68,0.12c6.21,0.01,12.43,0.05,18.64-0.03   c1.64-0.02,2.84,0.49,4.04,1.58c6.15,5.55,12.36,11.04,18.55,16.54c0.64,0.57,1.32,1.11,2.06,1.74   c5.7-5.32,11.28-10.53,16.99-15.81c0.31-0.02,0.49,0.02,0.94,0.13c-4.18,4.29-8.62,8.51-13.07,12.73   c-1.56,1.48-3.14,2.93-4.84,4.51c-0.77-0.66-1.5-1.26-2.21-1.89c-6.37-5.67-12.76-11.33-19.1-17.03c-1.01-0.91-2.04-1.33-3.41-1.3   c-3.91,0.07-7.81,0.11-11.72,0.01c-12.43-0.3-24.85-0.62-37.28-1.02c-10.75-0.35-21.5-0.82-32.25-1.22   c-5.65-0.21-11.31-0.39-16.96-0.58c-0.79-0.03-1.57,0-2.63,0c-0.09,0.88-0.23,1.71-0.26,2.55c-0.71,18.08-1.39,36.16-2.13,54.23   c-0.72,17.6-1.52,35.19-2.25,52.79c-0.05,1.13-0.42,1.92-1.27,2.66c-2.72,2.34-5.38,4.75-8.05,7.14c-0.58,0.52-1.13,1.08-1.85,1.76   c2.19,1.75,1.71,3.9,1.23,6.13c-0.6,2.8-1.03,5.63-1.57,8.63c-2,0-3.88,0-6.12,0c0.51,2.54,0.97,4.82,1.45,7.21   c0.65,0.19,1.31,0.46,2,0.59c3.61,0.67,6.69,2.37,9.56,4.61c2.78,2.17,2.86,2.08,2.55,5.64c-0.31,3.64-0.64,7.28-0.97,11.05   c-1.7,0.34-3.31,0.66-5.14,1.03c0.11,2.38,0.22,4.66,0.34,7.31c1.39-0.56,2.53-1.02,3.84-1.55c0.22,0.49,0.48,0.95,0.63,1.44   c1.94,6.18,3.35,12.46,3.37,18.98c0,0.92,0.15,1.67,1.09,2.18c1.91,1.03,2.69,2.87,3.1,4.87c0.36,1.71,0.66,3.44,0.95,5.17   c0.29,1.69,0.23,3.33-0.84,4.8c-0.28,0.38-0.52,0.82-0.65,1.27c-0.48,1.66-1.72,2.34-3.26,2.81c-5.87,1.77-11.73,3.58-17.58,5.39   c-7.15,2.2-14.3,4.42-21.45,6.63c-0.59,0.18-1.17,0.41-1.98,0.7c1.04,1.6,1.93,3.1,2.95,4.51c1.85,2.58,2.82,5.52,3.6,8.53   c0.62,2.39,0.31,4.75-0.42,7.06c-0.41,1.29-0.86,2.56-1.38,3.99C225.38,642.05,225.17,642.04,224.8,642.04 M181.89,528.62   c3.12,2.48,6.32,4.86,9.33,7.47c1.81,1.57,3.59,2.47,6.01,1.73c1.05-0.32,2.2-0.32,3.31-0.45c2.52-0.29,5.04-0.56,7.87-0.88   c0.51,2.02,0.99,3.9,1.47,5.81c0.86,0.04,1.65,0.03,2.42,0.13c2.01,0.26,2.54,1.13,1.96,3.13c-0.23,0.78-0.4,1.58-0.72,2.84   c1.64-0.38,2.77-0.69,3.91-0.9c2.15-0.4,3.87,0.7,4.37,2.72c0.46,1.87-0.5,3.66-2.42,4.36c-0.8,0.3-1.65,0.47-2.51,0.7   c-0.32,1.57-0.09,2.93,0.96,4.06c1.07,1.14,2.37,0.99,3.14-0.37c0.35-0.61,0.55-1.32,0.74-2.01c0.27-1,0.4-2.04,0.7-3.02   c0.55-1.82,1.98-2.32,3.49-1.19c0.56,0.42,1.03,1.01,1.4,1.6c0.95,1.51,1.53,3.17,1.44,4.98c-0.12,2.24,0.61,3.98,2.43,5.4   c1.47,1.14,1.57,2.12,0.78,3.77c-0.27,0.57-0.59,1.17-1.06,1.56c-1.41,1.19-1.16,2.12,0.12,3.41c1.52,1.54,3.05,3.05,5.29,3.51   c1.12,0.23,1.84,0.87,1.96,2.09c0.2,2.06-0.57,3.35-2.49,4.1c-0.72,0.28-1.46,0.53-2.05,0.74c0,2.9,0,5.57,0,8.21   c0.14,0.05,0.21,0.1,0.28,0.1c0.24-0.02,0.48-0.03,0.7-0.1c2.79-0.91,4.98,0.05,6.81,2.15c0.47,0.54,0.85,1.16,1.36,1.67   c1.28,1.27,2.8,1.12,3.84-0.33c0.23-0.32,0.43-0.67,0.6-1.03c2.25-4.62,5.96-7.35,10.92-8.49c0.75-0.17,1.48-0.42,2.22-0.64   c-0.01-7.06-1.13-13.72-3.59-20.25c-1.38,0.54-2.61,1.02-4.17,1.63c-0.35-3.45-0.36-6.66-0.41-9.98c1.82-0.35,3.44-0.67,5.19-1.01   c0.37-4.45,0.72-8.79,1.06-12.86c-4.17-4.04-8.97-6.19-14.23-7.05c-0.6-3.2-1.15-6.11-1.74-9.26c2.36,0,4.33,0,6.47,0   c0.41-2.15,0.79-4.17,1.18-6.19c0.84-4.3,0.84-4.3-1.24-7.85c0.55-0.52,1.1-1.07,1.69-1.59c2.74-2.44,5.45-4.91,8.23-7.3   c1.03-0.89,1.53-1.83,1.59-3.25c0.38-9.63,0.84-19.27,1.34-28.9c0.08-1.5-0.3-2.47-1.54-3.43c-14.12-10.93-28.19-21.92-42.27-32.89   c-0.54-0.42-1.13-0.79-1.78-1.24c-19.62,25.11-39.14,50.1-58.75,75.21C165.66,515.72,173.64,522.06,181.89,528.62z"/>
  <a xlink:title="MAGUGPO WEST" id="magugpowest" onclick=""  class="cursor-pointer magugpowest-svg">
  <g id="region_magugpowest">
  <path id="magugpowest_zoom" class="st4" d="M317.22,222.35c2.16,0.79,2.97,2.16,2.75,4.3c-0.29,2.77-0.36,5.56-0.56,8.34c-0.15,2.15,0.23,4.16,1.61,5.84   c2.29,2.79,2.1,5.9,1.2,9.04c-0.89,3.13-1.98,6.21-2.97,9.32c-0.25,0.79-0.63,1.28-1.52,1.61c-0.79,0.29-1.47,1.13-1.96,1.89   c-0.75,1.13-1.56,1.83-3,1.99c-2.79,0.3-4.76,1.61-5.95,4.43c-0.66,1.55-2.39,2.65-3.78,4.1c-10.52-7.28-22.2-12.04-33.24-18.28   c0.75-5.78,1.49-11.52,2.24-17.35c1.25-0.59,2.46-1.16,3.89-1.83c-0.71-2.55,0.74-4.35,2.28-6.11c0.87-1,1.15-2.2,1.36-3.49   c0.18-1.14,0.64-2.29,1.23-3.28c0.59-1,1.65-1.39,2.87-1.39c2.71,0,5.41-0.09,8.12-0.11c0.54,0,1.4,0.01,1.56,0.31   c1.03,1.95,2.72,1.16,4.21,1.14c0.39-0.01,0.77-0.14,1.25-0.23c0.07-0.66,0.13-1.27,0.2-1.95c0.48-0.03,0.98-0.18,1.41-0.06   c1.15,0.32,2.29,0.68,3.38,1.16c2.15,0.94,4.37,1.41,6.73,1.31c1.09-0.05,2.11,0.03,3.21-0.52   C314.63,222.08,315.9,222.37,317.22,222.35z"/></g></a>
  <a xlink:title="MAGUGPO SOUTH" id="magugposouth" onclick=""  class="cursor-pointer magugpopoblacion-svg">
                  <g id="region_magugposouth">
  <path id="magugposouth_zoom" class="st9" d="M293.97,275.6c-0.11,14.25-0.21,28.25-0.32,42.4c-0.94,0.06-1.63,0.12-2.32,0.14   c-1.82,0.03-3.56,0.12-5.37,0.78c-1.81,0.66-3.92,0.5-5.9,0.69c-0.15,0.02-0.4,0.02-0.46-0.07c-1.77-2.51-4.52-1.15-6.78-1.69   c-1.06-0.26-2.2-0.15-3.55-0.22c-0.2-2.19-0.43-4.31-0.57-6.42c-0.08-1.15-0.07-2.23-1.45-2.67c-0.98-0.31-0.87-1.2-0.87-2   c0.03-4.94,0.05-9.88,0.08-14.82c0.02-2.87,0.03-5.74,0.12-8.6c0.03-0.85,0.1-1.82,0.53-2.5c0.85-1.34,1.17-2.71,1.26-4.26   c0.38-6.52,0.84-13.04,1.29-19.77c0.59,0.18,1.11,0.26,1.56,0.49c7.08,3.64,14.14,7.33,21.24,10.94c1.17,0.6,1.63,1.3,1.54,2.6   C293.89,272.17,293.97,273.77,293.97,275.6z"/></g></a>
  <a xlink:title="MAGUGPO NORTH" id="magugponorth" onclick=""  class="cursor-pointer magugponorth-svg">
                  <g id="region_magugponorth">
  <path id="magugponorth_zoom" class="st11" d="M338.58,260.83c-1.1,1.37-2.1,2.6-3.22,3.99c-1.94-0.82-3.83-1.6-5.7-2.43c-2.91-1.29-5.77-2.74-9.38-2.08   c0.18-0.84,0.25-1.44,0.43-2c0.74-2.35,1.62-4.67,2.22-7.05c0.5-1.99,0.77-4.05,0.99-6.09c0.16-1.49-0.48-2.83-1.4-3.97   c-1.89-2.34-2.28-4.99-1.9-7.87c0.19-1.42,0.23-2.86,0.26-4.29c0.03-1.06,0.35-1.77,1.41-2.23c3.21-1.4,6.36-2.93,9.57-4.33   c0.51-0.22,1.28-0.29,1.75-0.06c8.46,4.06,16.9,8.17,25.66,12.43c-2.2,2.87-4.49,5.66-6.74,8.49c-2.32,2.93-4.66,5.86-7,8.78   C343.24,254.97,340.96,257.83,338.58,260.83z"/></g></a>
  <a xlink:title="MAGUGPO POBLACION" id="magugpopoblacion" onclick=""  class="cursor-pointer magugposouth-svg">
<g id="region_magugpopoblacion">
  <path id="magugpopoblacion_zoom" class="st3" d="M296.61,315.06c-0.51,0.61-0.91,1.08-1.35,1.6c-0.53-1.5-0.49-43.26,0.06-47.03c2.57,1.63,5.01,3.19,7.62,4.84   c2.03-1.87,4.6-3.12,5.52-6.03c0.38-1.21,1.38-1.92,2.62-2.23c0.54-0.14,1.08-0.37,1.62-0.38c1.95-0.07,3.27-1,4.1-2.73   c0.45-0.93,1.21-1.3,2.25-1.5c2.65-0.5,5.17-0.5,7.68,0.72c2.49,1.21,5.08,2.24,7.93,3.49   C321.92,282.29,309.32,298.61,296.61,315.06z"/></g></a>
  <path class="st12" d="M311.71,113.73c-4.24-0.81-8.48-1.78-12.95-2.8c0,2.06,0,3.89,0,5.71c0,2.79,0.08,5.58-0.02,8.36   c-0.1,2.59,0.12,5.08,1.36,7.41c0.48,0.9,0.47,1.79-0.05,2.7c-0.31,0.54-0.49,1.15-0.86,2.03c1.8,0,3.41,0,5.29,0   c-0.21,0.87-0.29,1.46-0.49,2.01c-0.68,1.87-1.44,3.71-2.08,5.59c-0.74,2.15-1.39,4.33-2.17,6.78c-0.64,0.15-1.63,0.39-2.63,0.61   c-2.05,0.44-2.47,0.87-2.59,3c-0.07,1.26-0.01,2.52-0.01,4.13c-1.34-0.37-2.41-0.58-3.41-0.97c-8.55-3.27-17.16-6.38-25.59-9.93   c-7.01-2.95-14.23-5.03-21.63-6.65c-1.39-0.31-2.78-0.64-4.41-1.01c-0.13,0.68-0.31,1.25-0.35,1.84c-0.15,1.99-0.15,3.99-0.38,5.96   c-0.28,2.29-0.15,4.45,1.26,6.36c1.2,1.63,0.95,3.07-0.07,4.77c-2.41,4.02-4.61,8.17-6.96,12.39c0.51,0.56,0.98,1.05,1.24,1.34   c2.29-0.6,4.33-1.13,6.45-1.68c1.22,2.88-0.33,5.07-0.98,7.58c2.38,0.91,4.71,1.8,7.17,2.74c-0.29,0.63-0.57,1.1-0.73,1.61   c-0.16,0.5-0.4,1.12-0.25,1.56c1.28,3.84,2.65,7.65,4.01,11.52c12.06-1.25,23.6-4.25,35.34-7.19c0.19,0.21,0.19,0.42,0.19,0.78   c-8.14,2.33-16.25,4.65-24.6,5.93c-3.77,0.58-7.53,1.24-11.43,1.88c-0.23-0.42-0.51-0.79-0.66-1.21c-1.3-3.68-2.64-7.34-3.82-11.06   c-0.31-0.96-0.1-2.09-0.13-3.41c-1.91-0.71-4.13-1.52-6.38-2.35c-0.01-2.4,2.03-4.26,1.52-6.66c-1.24-0.46-2.25-0.03-3.26,0.46   c-2.63,1.27-2.08,1.47-4.41-0.78c-0.22-0.21-0.38-0.48-0.67-0.85c2.78-5.01,5.55-10,8.3-14.95c-0.17-0.41-0.24-0.74-0.43-0.99   c-2.04-2.76-2.1-5.87-1.74-9.11c0.24-2.21,0.3-4.44,0.45-6.8c-1.15-0.51-2.21-1-3.29-1.45c-4.63-1.93-9.32-3.73-13.48-6.6   c-2.16-1.49-4.75-1.19-7.15-1.58c-4.09-0.65-8.21-1.09-12.31-1.63c-0.63-0.08-1.24-0.26-1.97-0.42c-0.57-4.16,0.57-8.46-1.11-12.68   c0.2-0.19,0.42-0.19,0.79-0.19c1,1.76,1.32,3.61,1.26,5.56c-0.06,2.06-0.01,4.11-0.01,6.37c1.63,0.23,3.11,0.45,4.59,0.65   c4.26,0.58,8.53,1.09,12.78,1.76c1.3,0.2,2.7,0.57,3.77,1.28c5.11,3.36,10.77,5.52,16.42,7.66c3.1,1.18,6.44,1.77,9.71,2.47   c5.54,1.19,10.88,2.95,16.13,5.1c8.54,3.5,17.2,6.73,25.81,10.06c0.95,0.37,1.94,0.64,3.17,1.04c0.07-0.94,0.14-1.62,0.17-2.3   c0.11-3.26,0.55-3.81,3.62-4.49c0.62-0.14,1.24-0.29,1.63-0.38c1.43-4.08,2.81-8.02,4.29-12.24c-1.98,0-3.63,0-5.59,0   c0.43-1.01,0.63-1.79,1.05-2.42c1.02-1.5,0.79-2.89,0.14-4.49c-0.55-1.36-0.84-2.91-0.87-4.38c-0.1-5.73-0.04-11.47-0.04-17.56   c4.76,0.96,9.25,2.16,13.91,3.37C311.71,113.16,311.71,113.37,311.71,113.73z"/>
  <path class="st13" d="M288.71,210.1c-0.1,0.46-0.36,0.95-0.83,0.08C288.12,210.06,288.33,210.07,288.71,210.1z"/>
  <path class="st4" d="M511.55,93.42c-0.2-0.2-0.25-0.55-0.3-0.9c0.19,0.07,0.38,0.15,0.66,0.34   C511.9,93.08,511.8,93.18,511.55,93.42z"/>
  <path class="st4" d="M308.23,78.8c0.09-0.02,0.28,0.08,0.41,0.29C308.49,79.1,308.42,79.01,308.23,78.8z"/>
  <a xlink:title="SAN ISIDRO" id="sanisidro" onclick=""  class="cursor-pointer sanisidro-svg">
                  <g id="region_sanisidro">
  <path id="sanisidro_zoom" class="st5" d="M181.76,528.51c-8.11-6.45-16.1-12.79-24.27-19.28c19.61-25.11,39.13-50.09,58.75-75.21   c0.65,0.45,1.24,0.82,1.78,1.24c14.09,10.97,28.15,21.96,42.27,32.89c1.24,0.96,1.62,1.93,1.54,3.43   c-0.5,9.63-0.96,19.26-1.34,28.9c-0.06,1.42-0.55,2.36-1.59,3.25c-2.78,2.39-5.49,4.86-8.23,7.3c-0.58,0.52-1.14,1.07-1.69,1.59   c2.08,3.55,2.08,3.55,1.24,7.85c-0.39,2.02-0.77,4.04-1.18,6.19c-2.14,0-4.11,0-6.47,0c0.59,3.15,1.14,6.06,1.74,9.26   c5.26,0.86,10.06,3.01,14.23,7.05c-0.33,4.07-0.69,8.41-1.06,12.86c-1.75,0.34-3.37,0.66-5.19,1.01c0.05,3.32,0.06,6.53,0.41,9.98   c1.56-0.61,2.79-1.09,4.17-1.63c2.46,6.53,3.57,13.19,3.59,20.25c-0.74,0.21-1.47,0.47-2.22,0.64c-4.96,1.14-8.66,3.87-10.92,8.49   c-0.17,0.36-0.37,0.71-0.6,1.03c-1.04,1.46-2.56,1.6-3.84,0.33c-0.5-0.5-0.88-1.13-1.36-1.67c-1.83-2.1-4.03-3.06-6.81-2.15   c-0.22,0.07-0.47,0.08-0.7,0.1c-0.06,0.01-0.14-0.04-0.28-0.1c0-2.64,0-5.31,0-8.21c0.59-0.21,1.32-0.46,2.05-0.74   c1.93-0.75,2.69-2.04,2.49-4.1c-0.12-1.22-0.84-1.86-1.96-2.09c-2.24-0.46-3.77-1.97-5.29-3.51c-1.27-1.29-1.52-2.22-0.12-3.41   c0.46-0.39,0.79-1,1.06-1.56c0.79-1.66,0.69-2.63-0.78-3.77c-1.81-1.41-2.54-3.16-2.43-5.4c0.09-1.81-0.49-3.46-1.44-4.98   c-0.37-0.6-0.84-1.19-1.4-1.6c-1.5-1.12-2.94-0.62-3.49,1.19c-0.3,0.99-0.43,2.02-0.7,3.02c-0.19,0.69-0.39,1.4-0.74,2.01   c-0.77,1.36-2.07,1.51-3.14,0.37c-1.06-1.12-1.28-2.48-0.96-4.06c0.86-0.24,1.71-0.41,2.51-0.7c1.92-0.71,2.88-2.49,2.42-4.36   c-0.5-2.02-2.22-3.11-4.37-2.72c-1.14,0.21-2.27,0.52-3.91,0.9c0.32-1.26,0.49-2.06,0.72-2.84c0.58-2,0.06-2.87-1.96-3.13   c-0.78-0.1-1.57-0.09-2.42-0.13c-0.48-1.91-0.96-3.79-1.47-5.81c-2.84,0.32-5.36,0.59-7.87,0.88c-1.11,0.13-2.26,0.13-3.31,0.45   c-2.43,0.74-4.2-0.16-6.01-1.73C188.21,533.48,185.01,531.09,181.76,528.51z"/></g></a>
     <a xlink:title="MAGUGPO EAST" id="magugpoeast" onclick=""  class="cursor-pointer magugpoeast-svg">
                  <g id="region_magugpoeast">
  <path id="magugpoeast_zoom" class="st14" d="M347.05,301.54l-26.78-15.3l40.21-50.98l47.2,21.2c0,0,2.11-0.04,2.15,1.77c0.04,1.81-0.6,3.13-2.85,4.66   c-2.25,1.53-2.93,2.93-5.63,2.61c-2.69-0.32-5.34-0.24-6.15,0.36c-0.8,0.6-2.05,1.73-1.29,2.97s3.86,5.02,4.22,5.14   s2.67,2.04,2.37,3.94c-0.3,1.9-2.53,3.58-4.14,4.34s-3.05,1.77-3.05,1.77l0.52,3.5l-0.8,9.48l-13.54,1.37c0,0,0.32-1.77-0.16-2.29   c-0.48-0.52-0.8-1.08-2.65-1.57c-1.85-0.48-25.23-1.65-25.23-1.65s-0.84,1.33-1.45,2.73C349.4,297.01,347.05,301.54,347.05,301.54z   "/></g></a>

</g>
  <g id="pagss">
    <!-- INFO FOR PAGSABANGAN -->
    <text id="pagsabangan_text" transform="matrix(1 0 0 1 84.8213 127.75)" class="st15 st16" style="font-family: 'Open Sans';">Pagsabangan</text>

    <g transform="translate(148.78173828125,166.0639190673828) scale(0.2)">
       <path id="pagsabangan_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Pagsabangan Public Cemetery</text>
    </g>

    <g transform="translate(123.32809448242188,158.93130493164062) scale(0.2)">
       <path id="pagsabangan_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Esperanza </text>
    </g>

    <g transform=" translate(68.64471435546875,92.77980041503906)  scale(0.2)">
       <path id="pagsabangan_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Lourdes Dairy Farm</text>
    </g>

    <g transform="translate(129.20201110839844,102.15010070800781) scale(0.2)">
       <path id="pagsabangan_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Forum Japan Bike Surdlus </text>
    </g>

    <!-- END FOR PAGSABANGAN -->

    <!-- INFO FOR CUAMBOGAN -->

    <text id="cuambogan_text" transform="matrix(1 0 0 1 218.9409 100.677)" class="st15 st16" style="font-family: 'Open Sans';">Cuambogan</text>

    <g transform="translate(283.8818664550781,131.7993927001953)  scale(0.2)">
       <path id="cuambogan_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">DGLM Inland Leisure Center</text>
    </g>

    <g transform="translate(283.042724609375,59.91382598876953)  scale(0.2)">
       <path id="cuambogan_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Las Tierras Office</text>
    </g>

    <g transform="translate(288.2173767089844,148.58203125)  scale(0.2)">
       <path id="cuambogan_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Ferd Food House</text>
    </g>

    <g transform="translate(294.6507263183594,106.9051742553711)  scale(0.2)">
       <path id="cuambogan_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Tagum PPMC Wood Veneer Inc.</text>
    </g>

    <g transform="translate(258.14849853515625,112.63923645019531)  scale(0.2)">
       <path id="cuambogan_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Philippine Banana Chips</text>
    </g>

    <g transform="translate(242.76443481445312,52.781211853027344)  scale(0.2)">
       <path id="cuambogan_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Visaya Mesaoy Coconut Farm</text>
    </g>

    <g transform=" translate(277.7282409667969,52.2217903137207)  scale(0.2)">
       <path id="cuambogan_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mesaoy Alliance Gospel Church</text>
    </g>

    <g transform="translate(271.2948913574219,98.79357147216797)  scale(0.2)">
       <path id="cuambogan_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Beldians System Integration</text>
    </g>

    <!-- END FOR CUAMBOGAN -->

    <!-- INFO FOR LA FILIPINA -->
    <text id="lafilipina_text" transform="matrix(1 0 0 1 290.1552 176.9627)" class="st15 st16" style="font-family: 'Open Sans';">La Filipina</text>

    <g transform="translate(353.8094787597656,175.99363708496094) scale(0.1)">
       <path id="lafilipina_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">La Filipina Elem. School</text>
    </g>

    <g transform="translate(375.7667236328125,175.29437255859375) scale(0.1)">
       <path id="lafilipina_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">La Filipina Evangelical Church</text>
    </g>

    <g transform="translate(376.04644775390625,158.51174926757812)  scale(0.1)">
       <path id="lafilipina_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Huyong-huyong Nature Park</text>
    </g>

    <g transform=" translate(281.3644714355469,174.17552185058594)  scale(0.1)">
       <path id="lafilipina_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">BRIA Homes</text>
    </g>

    <g transform="translate(299.545654296875,167.8820343017578)  scale(0.1)">
       <path id="lafilipina_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Orchard Road Memorial Park</text>
    </g>

    <g transform="translate(375.34716796875,143.12767028808594) scale(0.1)">
       <path id="lafilipina_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Buhai Basketball Court</text>
    </g>

    <g transform="translate(341.502197265625,181.1682891845703)  scale(0.1)">
       <path id="lafilipina_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Glaiza Pastry Shop</text>
    </g>

    <g transform="translate(371.5710754394531,190.53858947753906)  scale(0.1)">
       <path id="lafilipina_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Marzee Burger Shop</text>
    </g>

    <!-- END FOR LA FILIPINA -->

    <!-- INFO FOR MAGDUM -->
    <text id="magdum_text" transform="matrix(1 0 0 1 396.8695 187.2484)" class="st15 st16" style="font-family: 'Open Sans';">Magdum</text>

    <g transform="translate(461.21826171875,188.86032104492188) scale(0.1)">
       <path id="magdum_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Tagum City Slaughterhouse</text>
    </g>

    <g transform="translate(431.28924560546875,151.23927307128906) scale(0.1)">
       <path id="magdum_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Botanical Park</text>
    </g>
    
    <g transform="translate(414.646484375,176.1334991455078) scale(0.1)">
       <path id="magdum_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mother Rosario School of Tagum</text>
    </g>


    <g transform="translate(436.32403564453125,185.64364624023438) scale(0.1)">
       <path id="magdum_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Saludares Elementrary School</text>
    </g>

    <g transform="translate(431.5689697265625,169.00088500976562)  scale(0.1)">
       <path id="magdum_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Metro Tagum Shooters Range</text>
    </g>

    <g transform="translate(397.5841369628906,207.88063049316406) scale(0.1)">
       <path id="magdum_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Magdum Barangay Hall</text>
    </g>

    <g transform="translate(449.33056640625,172.21755981445312) scale(0.1)">
       <path id="magdum_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mary's Wood</text>
    </g>

    <!-- END OF MAGDUM -->

    <!-- INFO FOR NUEVA FUERZA -->

    <text id="nuevafuerza_text" transform="matrix(1 0 0 1 315.9634 80.6709)" class="st15 st17" style="font-family: 'Open Sans';">Nueva Fuerza</text>

    <g transform=" translate(329.7543640136719,37.117427825927734)  scale(0.1)">
       <path id="nuevafuerza_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mesaoy National High School</text>
    </g>

    <g transform="translate(355.7674255371094,89.98269653320312)  scale(0.1)">
       <path id="nuevafuerza_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Chalmergab Farm</text>
    </g>

    <g transform="translate(367.2355651855469,86.48631286621094)  scale(0.1)">
       <path id="nuevafuerza_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Nueva fuerza-svg Elementary School</text>
    </g>
   
    <!-- END OF NUEVA FUERZA -->

    <!-- INFO FOR SAN AGUSTIN -->
    <text id="sanagustin_text" transform="matrix(1 0 0 1 368.5348 125.5059)" class="st15 st17" style="font-family: 'Open Sans';">San Agustin</text>


    <g transform=" translate(416.3247375488281,115.71604919433594)  scale(0.1)">
       <path id="sanagustin_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Shanksbucks Cafe </text>
    </g>
   

   <g transform="translate(413.8073425292969,89.84284210205078)   scale(0.1)">
       <path id="sanagustin_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Waste Re-energizer Philppines</text>
    </g>
   

   <g transform="translate(387.23486328125,117.53417205810547) scale(0.1)">
       <path id="sanagustin_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">San Agustin Barangay Hall</text>
    </g>
   

   <g transform="translate(369.61309814453125,128.3030242919922)  scale(0.1)">
       <path id="sanagustin_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">San Agustin Elem. School</text>
    </g>
   
   
    <!-- END FOR SAN AGUSTIN -->
    <!-- INFO FOR NEW BALAMBAN -->
    <text id="newbalamban_text" transform="matrix(1 0 0 1 429.6346 105.006)" class="st15 st17" style="font-family: 'Open Sans';">New Balamban</text>

    <g transform="translate(417.58343505859375,59.4942626953125) scale(0.1)">
       <path id="newbalamban_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Wildlife Rescue Center and Bird's Pack</text>
    </g>

    <g transform="translate(464.8544921875,128.44287109375) scale(0.1)">
       <path id="newbalamban_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">New Balamban Elem. School</text>
    </g>

    <g transform="translate(403.45806884765625,25.78915786743164) scale(0.1)">
       <path id="newbalamban_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">New Bohol Day Care Center </text>
    </g>

    <!-- END FOR NEW BALAMBAN -->
    <!-- INFO FOR PANDAPAN -->
    <text id="pandapan_text" transform="matrix(1 0 0 1 508.0798 136.9048)" class="st15 st17" style="font-family: 'Open Sans';">Pandapan</text>

    <g transform="translate(480.7979736328125,169.560302734375) scale(0.1)">
       <path id="pandapan_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Tagum City Slaughterhouse</text>
    </g>

    <g transform=" translate(488.35015869140625,156.55377197265625) scale(0.1)">
       <path id="pandapan_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Minex</text>
    </g>

    <g transform="translate(563.452392578125,152.3581085205078) scale(0.1)">
       <path id="pandapan_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Pandapan Elem. School</text>
    </g>

    <g transform="translate(481.2175598144531,146.9037628173828) scale(0.1)">
       <path id="pandapan_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Hexat Mining Corp</text>
    </g>

    <!-- END FOR PANDAPAN -->

    <!-- INFO FOR MANKILAM -->
    <text id="mankilam_text" transform="matrix(1 0 0 1 178.405 222.9286)" class="st15 st16" style="font-family: 'Open Sans';">Mankilam</text>

    <g transform="translate(209.33905029296875,265.9205322265625) scale(0.2)">
       <path id="mankilam_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Basilio's by JBites</text>
    </g>

    <g transform="translate(233.53399658203125,224.8031005859375) scale(0.2)">
       <path id="mankilam_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">NBI Tagum</text>
    </g>

    <g transform="translate(163.74624633789062,238.08935546875)  scale(0.2)">
       <path id="mankilam_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mankilam Tagum</text>
    </g>

    <g transform="translate(121.09040832519531,266.340087890625) scale(0.2)">
       <path id="mankilam_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Divine Love Foursquare</text>
    </g>
    
    <g transform="translate(152.55783081054688,258.36834716796875) scale(0.2)">
       <path id="mankilam_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">La Nieves Training Pool</text>
    </g>
    
    <g transform="translate(137.45347595214844,231.3762969970703)  scale(0.2)">
       <path id="mankilam_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Cambridge Heights Tagum</text>
    </g>

    <g transform="translate(160.80929565429688,227.32049560546875) scale(0.2)">
       <path id="mankilam_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Prk. Banana Basketball Court</text>
    </g>

    <g transform="translate(219.12890625,147.60304260253906) scale(0.2)">
       <path id="mankilam_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Sumifru District Office</text>
    </g>
    
    <g transform="translate(203.8846893310547,215.4328155517578) scale(0.2)">
       <path id="mankilam_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mankilam Elementary School</text>
    </g>
    
    <g transform="translate(264.0224304199219,193.6154022216797) scale(0.2)">
       <path id="mankilam_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">The Lucky 5 Apartment</text>
    </g>

    <!-- END FOR MANKILAM -->

    <!-- INFO SAN MIGUEL -->
    <text id="sanmiguel_text" transform="matrix(1 0 0 1 151.405 336.2858)" class="st15 st16" style="font-family: 'Open Sans';">San Miguel</text>

    <g transform="translate(255, 282) scale(0.2)">
       <path id="sanmiguel_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Hilltop Crabs Tagum</text>
    </g>

    <g transform="translate(209, 296) scale(0.2)">
       <path id="sanmiguel_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">De Colores Traveler's Inn</text>
    </g>

    <g transform="translate(197, 320) scale(0.2)">
       <path id="sanmiguel_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">K-Store Korean Mart</text>
    </g>

    <g transform="translate(232, 279) scale(0.2)">
       <path id="sanmiguel_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Akel Arabia Food</text>
    </g>

    <g transform="translate(105, 303) scale(0.2)">
       <path id="sanmiguel_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Revival for Christ Church</text>
    </g>

    <g transform="translate(168, 345) scale(0.2)">
       <path id="sanmiguel_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Totik Food Products & Trading</text>
    </g>

    <g transform="translate(245, 295) scale(0.2)">
       <path id="sanmiguel_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Lola's Garden</text>
    </g>

    <g transform="translate(227, 269) scale(0.2)">
       <path id="sanmiguel_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Jerrienor Inland Resort</text>
    </g>

    <!-- END FOR SAN MIGUEL -->

  <!--   <g transform="translate(170, 289) scale(0.8)">
      <path id="map_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>
 -->
    <!-- INFO FOR CANOCOTAN -->
    <text id="canocotan_text" transform="matrix(1 0 0 1 169.6193 419.6429)" class="st15 st16" style="font-family: 'Open Sans';">Canocotan</text>

    <g transform="translate(232, 387) scale(0.2)">
       <path id="canocotan_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Toyota Tagum City</text>
    </g>

    <g transform="translate(225, 408) scale(0.2)">
       <path id="canocotan_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Isuzu Tagum</text>
    </g>

    <g transform="translate(172, 454) scale(0.2)">
       <path id="canocotan_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">DPWH Distric Office</text>
    </g>

    <g transform="translate(158, 472) scale(0.2)">
       <path id="canocotan_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Shell</text>
    </g>

    <g transform="translate(194, 393) scale(0.2)">
       <path id="canocotan_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Canocotan Tagum City Jail</text>
    </g>

    <g transform="translate(245, 375) scale(0.2)">
       <path id="canocotan_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Ford Tagum</text>
    </g>

    <g transform="translate(189, 366) scale(0.2)">
       <path id="canocotan_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Modern Bahay Kubo</text>
    </g>

    <g transform="translate(238, 415) scale(0.2)">
       <path id="canocotan_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Canocotan National Highschool</text>
    </g>

    <g transform="translate(258, 379) scale(0.2)">
       <path id="canocotan_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Esmeralda Homes</text>
    </g>

    <g transform="translate(255, 396) scale(0.2)">
       <path id="canocotan_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Lerio Books Publishing House</text>
    </g>

    <!-- END OF CANOCOTAN -->

   <!--  <g transform="translate(170, 289) scale(0.8)">
      <path id="map_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g> -->

    <!-- INFO FOR SAN ISIDRO -->

    <text id="sanisidro_text" transform="matrix(1 0 0 1 188.2621 501.9286)" class="st15 st16" style="font-family: 'Open Sans';">San Isidro</text>

    <g transform="translate(217, 433) scale(0.2)">
       <path id="sanisidro_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Northlink Farmville</text>
    </g>

     <g transform="translate(220, 461) scale(0.2)">
       <path id="sanisidro_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Iglesia ni Cristo</text>
    </g>

     <g transform="translate(241, 476) scale(0.2)">
       <path id="sanisidro_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">San Isidro Elem. School</text>
    </g>

     <g transform="translate(250, 461) scale(0.2)">
       <path id="sanisidro_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">SSF on Coco Coir</text>
    </g>

     <g transform="translate(206, 475) scale(0.2)">
       <path id="sanisidro_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">LRM Print Avenue</text>
    </g>

    <!-- END OF SAN ISIDRO -->

    <!-- INFO FOR BINCUNGAN -->
    <text id="bincungan_text" transform="matrix(1 0 0 1 119.905 537.7144)" class="st15 st16" style="font-family: 'Open Sans';">Bincungan</text>

    <g transform="translate(117, 529) scale(0.2)">
       <path id="bincungan_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Palmhaven Memorial Park</text>
    </g>

    <g transform="translate(131, 512) scale(0.2)">
       <path id="bincungan_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Punong</text>
    </g>

    <g transform="translate(229, 584) scale(0.2)">
       <path id="bincungan_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Babangan Elem. School</text>
    </g>

    <g transform="translate(113, 552) scale(0.2)">
       <path id="bincungan_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Bincungan Brgy. Hall  </text>
    </g>

    <g transform="translate(98, 572) scale(0.2)">
       <path id="bincungan_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Stea Cool</text>
    </g>
    <!-- END FOR BINCUNGAN -->



    <!-- INFO FOR LIBUGANON -->
    <text id="liboganon_text" transform="matrix(1 0 0 1 143.2621 613.7176)" class="st15 st16" style="font-family: 'Open Sans';">Liboganon</text>

    <g transform="translate(190, 665) scale(0.2)">
       <path id="liboganon_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Cavana</text>
    </g>

    <g transform="translate(201, 667) scale(0.2)">
       <path id="liboganon_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">3R Beach Resort</text>
    </g>

    <g transform="translate(212, 663) scale(0.2)">
       <path id="liboganon_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Cheeky Resort</text>
    </g>

    <g transform="translate(217, 653) scale(0.2)">
       <path id="liboganon_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Apostolic Ministries</text>
    </g>

    <g transform="translate(192, 635) scale(0.2)">
       <path id="liboganon_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Liboganon Elem. School</text>
    </g>

    <g transform="translate(146, 587) scale(0.2)">
       <path id="liboganon_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Mercy Moms Secret Lagoon</text>
    </g>

    <g transform="translate(161, 568) scale(0.2)">
       <path id="liboganon_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Brackish Inc.</text>
    </g>


    <!-- END FOR LIBOGANON -->

    <!-- INFO FOR BUSAON -->
    <text id="busaon_text" transform="matrix(1 0 0 1 96.5478 663.1083)" class="st15 st16" style="font-family: 'Open Sans';">Busaon</text>

    <g transform="translate(115, 591) scale(0.3)">
       <path id="busaon_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Busaon Public Cemetery</text>
    </g>

    <g transform="translate(121, 606) scale(0.3)">
       <path id="busaon_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Busaon Elementary School</text>
    </g>

    <g transform="translate(118, 695) scale(0.3)">
       <path id="busaon_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Kubo dela Editha</text>
    </g>

    <g transform="translate(80, 710) scale(0.3)">
       <path id="busaon_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Cabugan Elementary School</text>
    </g>

    <g transform="translate(117, 653) scale(0.3)">
       <path id="busaon_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">EWN Fishfarm</text>
    </g>

    <g transform="translate(162, 675) scale(0.3)">
       <path id="busaon_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="10">Black Bonbon Beach Resort</text>
    </g>

    <!-- END FOR BUSAON -->

<!-- INFO FOR MADAUM -->
    <text transform="matrix(1 0 0 1 309.4225 498.8214)" class="st15 st16" style="font-family: 'Open Sans';" id="madaum_text">Madaum</text>
   
<!--     <g transform=" translate(333.95001220703125,483.9548034667969) scale(0.2)">
       <button id="madaum_button" type="button" class="btn btn-outline-dark btn-sm mb-4  px-2 px-0 w-generate">View Data table and Graph</button>
    </g> -->

     <g transform="translate(279.3999938964844,476.4000244140625) scale(0.3)">
      <path id="madaum_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="12">Don Benjamin's Place</text>
    </g>

    <g transform="translate(320.5,425.70001220703125) scale(0.3)">
      <path id="madaum_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="12">Hijo Banana Plantation</text>
    </g>

    <g transform="translate(389.1000061035156,490.1000061035156) scale(0.3)">
       <path id="madaum_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="12" y="45" text-anchor="middle" font-size="12">HIJU</text>
    </g>

    <g transform="translate(352.97235107421875,575.8817749023438) scale(0.3)">
      <path id="madaum_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Hijo Port</text>
    </g>

  
    <g transform=" translate(276,399) scale(0.3)">
      <path id="madaum_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">New Covenant of the Kingdom of God</text>
    </g>

    <g transform=" translate(315,579) scale(0.3)">
      <path id="madaum_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Hijo Resorts Davao</text>
    </g>

    <g transform=" translate(284,596) scale(0.3)">
      <path id="madaum_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Stokes Island</text>
    </g>

    <g transform=" translate(408,454) scale(0.3)">
      <path id="madaum_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Turubang</text>
    </g>

    <g transform=" translate(330,479) scale(0.3)">
      <path id="madaum_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Scents of the cities</text>
    </g>

    <g transform=" translate(298,514) scale(0.3)">
      <path id="madaum_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Madaum Elem. School</text>
    </g>

    <g transform=" translate(347,524) scale(0.3)">
      <path id="madaum_loc11" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Hijo Resources Corp.</text>
    </g>

    <g transform=" translate(367,389) scale(0.3)">
      <path id="madaum_loc12" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Shell</text>
    </g>
   
   
<!-- END OF MADAUM -->

<!-- INFO FOR MAGUGPO WEST -->
    <text id="magugpowest_text" transform="matrix(1 0 0 1 280.5479 244.8786)"><tspan x="0" y="0" class="st15 st18" style="font-family: 'Open Sans';">Magugpo</tspan><tspan x="0" y="9.6" class="st15 st18" style="font-family: 'Open Sans';">    West</tspan></text>

    <g transform="translate(291.1543273925781,219.3487548828125) scale(0.1)">
      <path id="magugpowest_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Shopee Express</text>
    </g>

    <g transform="translate(276.46954345703125,228.71905517578125) scale(0.1)">
      <path id="magugpowest_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">New Terminal</text>
    </g>

    <g transform="translate(307.2376708984375,230.53717041015625) scale(0.1)">
      <path id="magugpowest_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Kingsfield Express Inn</text>
    </g>

    <g transform="translate(313.5311584472656,235.71180725097656) scale(0.1)">
      <path id="magugpowest_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Gold Inn</text>
    </g>

    <g transform="translate(300.384765625,249.13790893554688) scale(0.1)">
      <path id="magugpowest_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Herobin Hometel</text>
    </g>

    <g transform="translate(294.6507263183594,262.00457763671875) scale(0.1)">
      <path id="magugpowest_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Gaisano Center</text>
    </g>

    <g transform="translate(301.5036315917969,267.4589538574219) scale(0.1)">
      <path id="magugpowest_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Jollibee</text>
    </g>

    <g transform="translate(301.5036315917969,267.4589538574219) scale(0.1)">
      <path id="magugpowest_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Asahi Ramen Japanese</text>
    </g>

    <g transform="translate(315.3492736816406,223.96397399902344) scale(0.1)">
      <path id="magugpowest_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">BluePanda</text>
    </g>

    <g transform="translate(284.72100830078125,233.47413635253906) scale(0.1)">
      <path id="magugpowest_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Choice Mart</text>
    </g>

    <g transform="translate(292.5528869628906,252.63430786132812) scale(0.1)">
      <path id="magugpowest_loc11" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Durian Marketing</text>
    </g>

    <!-- END FOR MAGUGPO WEST -->

    <!-- INFO FOR MAGUGPO NORTH -->
    <text id="magugponorth_text" transform="matrix(1 0 0 1 321.6907 240.1644)"><tspan x="0" y="0" class="st15 st18" style="font-family: 'Open Sans';">Magugpo</tspan><tspan x="0" y="9.6" class="st15 st18" style="font-family: 'Open Sans';">   North</tspan></text>

    <g transform="translate(353.66961669921875,235.57196044921875) scale(0.1)">
      <path id="magugponorth_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Shell</text>
    </g>

    <g transform="translate(342.20147705078125,243.8234100341797)  scale(0.1)">
      <path id="magugponorth_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Petron</text>
    </g>

    <g transform="translate(345.83770751953125,236.5509490966797) scale(0.1)">
      <path id="magugponorth_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Coca Cola Bottlers </text>
    </g>

    <g transform="translate(327.5166931152344,250.95602416992188) scale(0.1)">
      <path id="magugponorth_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Coffee Maybe Tagum </text>
    </g>

    <g transform="translate(321.9224853515625,235.85166931152344) scale(0.1)">
      <path id="magugponorth_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">United Pentecostal</text>
    </g>
    
    <!-- END FOR MAGUGPO NORTH -->

    <!-- INFO FOR MAGUGPO POBLACION -->
    <text id="magugpopoblacion_text" transform="matrix(1 0 0 1 296.0096 279.9501)"><tspan x="0" y="0" class="st15 st19" style="font-family: 'Open Sans';">Magugpo</tspan><tspan x="0" y="8.4" class="st15 st19" style="font-family: 'Open Sans';">  Poblacion</tspan></text>

    <g transform=" translate(308,269) scale(0.1)">
      <path id="magugpopoblacion_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Unitop</text>
    </g>

    <g transform=" translate(319,265) scale(0.1)">
      <path id="magugpopoblacion_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">JS Gaisano</text>
    </g>

    <g transform=" translate(299,305) scale(0.1)">
      <path id="magugpopoblacion_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Arman's Tagum City</text>
    </g>

    <g transform=" translate(300,295) scale(0.1)">
      <path id="magugpopoblacion_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Philippine Statistics Authority</text>
    </g>

    <g transform=" translate(298,279) scale(0.1)">
      <path id="magugpopoblacion_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Historical & Cultural Center</text>
    </g>

    <g transform="  translate(295,270) scale(0.1)">
      <path id="magugpopoblacion_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Tagum Public Market</text>
    </g>

    <g transform="translate(303,272) scale(0.1)">
      <path id="magugpopoblacion_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">BDO</text>
    </g>

    <g transform="translate(318,280) scale(0.1)">
      <path id="magugpopoblacion_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Jollibee</text>
    </g>

    <g transform=" translate(321,259) scale(0.1)">
      <path id="magugpopoblacion_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Bridges Enterprise</text>
    </g>

    <g transform="translate(312,266) scale(0.1)">
      <path id="magugpopoblacion_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Letran de Davao Inc.</text>
    </g>

    <!-- END FOR MAGUGPO POBLACION -->
    <!-- INFO FOR MAGUGPO EAST -->
    <text id="magugpoeast_text" transform="matrix(1 0 0 1 341.6525 269.8787)"><tspan x="0" y="0" class="st15 st16" style="font-family: 'Open Sans';">Magugpo</tspan><tspan x="0" y="14.4" class="st15 st16" style="font-family: 'Open Sans';">     East</tspan></text>

    <g transform="translate(335,264) scale(0.1)">
      <path id="magugpoeast_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="start" font-size="10">NCCC Mall</text>
    </g>

    <g transform="translate(387,280) scale(0.1)">
      <path id="magugpoeast_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Jim Prints Shop</text>
    </g>

    <g transform="translate(391,266) scale(0.1)">
      <path id="magugpoeast_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="end" font-size="10">Maximina Village</text>
    </g>

    <g transform="translate(325,277) scale(0.1)">
      <path id="magugpoeast_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="start" font-size="10">Gaisano Grand Mall</text>
    </g>

    <g transform="translate(348,251) scale(0.1)">
      <path id="magugpoeast_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">St. Mary's Tagum</text>
    </g>

    <g transform="translate(360,233) scale(0.1) ">
      <path id="magugpoeast_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45"  text-anchor="middle" font-size="10">Magugpo UCCP Christian School</text>
    </g>

    <g transform="translate(340,258) scale(0.1) ">
      <path id="magugpoeast_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="start" font-size="10">Mitsubishi Motors</text>
    </g>

    <g transform="translate(351,268) scale(0.1)">
      <path id="magugpoeast_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Barangay Hall</text>
    </g>
   

    <g transform="translate(373,274) scale(0.1)">
      <path id="magugpoeast_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Tagum City Police Station</text>
    </g>

    <g transform="translate(381.50079345703125,251.65530395507812) scale(0.1)">
      <path id="magugpoeast_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="10">Tipaz Metro Shuttle</text>
    </g>

    <!-- END FOR MAGUGPO EAST -->

    <!-- INFO FOR APOKON -->
    <text id="apokon_text" transform="matrix(1 0 0 1 351.9668 370.5215)" class="st15 st16" style="font-family: 'Open Sans';">Apokon</text>

    <g transform=" translate(424,426) scale(0.2)">
      <path id="apokon_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Villa Consuelo</text>
    </g>

    <g transform="translate(383,398) scale(0.2)">
      <path id="apokon_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">EPARK</text>
    </g>

    <g transform="translate(400,387) scale(0.2)">
      <path id="apokon_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">USeP</text>
    </g>

    <g transform=" translate(393,370) scale(0.2)">
      <path id="apokon_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">DRMC</text>
    </g>

    <g transform=" translate(371,347) scale(0.2)">
      <path id="apokon_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Penny Lane Hotel</text>
    </g>

    <g transform=" translate(373,289) scale(0.2)">
      <path id="apokon_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Tagum City Hall</text>
    </g>

    <g transform=" translate(350,361) scale(0.2)">
      <path id="apokon_loc7" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Esmeralda Homes</text>
    </g>

    <g transform="translate(353, 289) scale(0.2)">
      <path id="apokon_loc8" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">PAG-IBIG Tagum Branch</text>
    </g>

    <g transform=" translate(343,302) scale(0.2)">
      <path id="apokon_loc9" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Red Palm Garden</text>
    </g>

    <g transform=" translate(362,307) scale(0.2)">
      <path id="apokon_loc10" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Pick 'N Grill</text>
    </g>

    <!-- END OF APOKON -->

    <!-- INFO FOR VISAYAN VILLAGE -->
    <text id="visayanvillage_text" transform="matrix(1 0 0 1 242.4382 355.5215)" class="st15 st16" style="font-family: 'Open Sans';">Visayan Village</text>

    <g transform=" translate(283,316) scale(0.2)">
      <path id="visayanvillage_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Christ the King Cathedral</text>
    </g>

    <g transform=" translate(311,310) scale(0.2)">
      <path id="visayanvillage_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Big 8 Hotel</text>
    </g>

    <g transform=" translate(249,364) scale(0.2)">
      <path id="visayanvillage_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">North Eagle Homes Sub.</text>
    </g>

    <g transform=" translate(243,316) scale(0.2)">
      <path id="visayanvillage_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Modular Furniture</text>
    </g>

    <g transform=" translate(272,378) scale(0.2)">
      <path id="visayanvillage_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">Tuna Island</text>
    </g>

    <g transform=" translate(285,333) scale(0.2)">
      <path id="visayanvillage_loc6" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="12">DavNor Police Provincial Office</text>
    </g>

    <!-- END FOR VISAYAN VILLAGE -->

    <!-- INFO FOR MAGUGPO SOUTH -->
    <text id="magugposouth_text" transform="matrix(1 0 0 1 268.3687 288.0839)"><tspan x="0" y="0" class="st15 st20" id="m_south_text" style="font-family: 'Open Sans';">Magugpo</tspan><tspan x="0" y="7.2" class="st15 st20" style="font-family: 'Open Sans';">South</tspan></text>

    <g transform=" translate(277,265) scale(0.2)">
      <path id="magugposouth_loc1" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Our Lady of Fatima Parish</text>
    </g>

    <g transform=" translate(285, 295) scale(0.2)">
      <path id="magugposouth_loc2" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">UM Tagum College</text>
    </g>

    <g transform=" translate(285,261) scale(0.2)">
      <path id="magugposouth_loc3" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Inato Tuna Grill</text>
    </g>

    <g transform=" translate(267,269) scale(0.2)">
      <path id="magugposouth_loc4" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">ZAPP Hotel</text>
    </g>

    <g transform=" translate(270,252) scale(0.2)">
      <path id="magugposouth_loc5" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      <text x="9" y="45" text-anchor="middle" font-size="8">Seaoil</text>
    </g>
    <!-- END FOR MAGUGPO SOUTH -->

  </g>
<!-- <g id="pandapan" class="st0">
</g> -->
    <g transform="translate(116.29792785644531,97.27254486083984) scale(0.5)">
      <path id="pagsabangan_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(244.5279083251953,66.67220306396484) scale(0.5)">
      <path id="cuambogan_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(336.32891845703125,52.100616455078125) scale(0.5)">
      <path id="nuevafuerza_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(388.05804443359375,92.90106201171875) scale(0.5)">
      <path id="sanagustin_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(452.901611328125,77.60089874267578) scale(0.5)">
      <path id="newbalamban_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(525.7595825195312,108.20123291015625) scale(0.5)">
      <path id="pandapan_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(315.2001037597656,145.35877990722656) scale(0.5)">
      <path id="lafilipina_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(417.9298095703125,157.01605224609375) scale(0.5)">
      <path id="magdum_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(291.88555908203125,219.67388916015625) scale(0.5)">
      <path id="magugpowest_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(331.2288513183594,216.4024658203125) scale(0.5)">
      <path id="magugponorth_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(305.914306640625,257.8458251953125) scale(0.5)">
      <path id="magugpopoblacion_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(275.12823486328125,265.03155517578125) scale(0.5)">
      <path id="magugposouth_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>


    <g transform="translate(173.1271209716797,306.3748474121094) scale(0.5)">
        <path id="sanmiguel_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>

    <g transform="translate(277.3139953613281,323.1321716308594) scale(0.5)">
        <path id="visayanvillage_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>

    <g transform="translate(367.6578369140625,342.8038024902344) scale(0.5)">
        <path id="apokon_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>
     
    <g transform="translate(192.0701904296875,387.2471618652344) scale(0.5)">
        <path id="canocotan_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>
    
    <g transform="translate(209.55609130859375,471.0337829589844) scale(0.5)">
        <path id="sanisidro_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>
     
    <g transform="translate(139.6124725341797,507.4627685546875) scale(0.5)">
        <path id="bincungan_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>
     
    <g transform="translate(158.55552673339844,586.6921997070312) scale(0.5)">
        <path id="liboganon_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>
     
    <g transform="translate(110.46929168701172,634.235595703125) scale(0.5)">
        <path id="busaon_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
      </g>

    <g transform="translate(324.671630859375,468.8480529785156) scale(0.5)">
      <path id="madaum_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(359.6434631347656,241.53126525878906) scale(0.5)">
      <path id="magugpoeast_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

    <g transform="translate(199.35598754882812,190.5307159423828) scale(0.5)">
      <path id="mankilam_pin" d="M12,0C5.4,0,0,5.4,0,12c0,7.2,12,24,12,24s12-16.8,12-24C24,5.4,18.6,0,12,0z M12,18c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C16,16.2,14.2,18,12,18z" fill="red"/>
    </g>

</g>
</svg>
  </svg>
     <button id="statistical" type="button" data-bs-toggle="modal" data-bs-target="#trigger" class="position-fixed start-20 bottom-3 btn bg-gradient-danger btn-sm px-0 mx-0 w-20" style="display: none;">View Statistical Data</button>
    </section>
  </main>


     <!-- Modal Trigger -->
<div class="modal fade" id="trigger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content blur">
      <div class="modal-header">
        <h6 class="modal-title" id="trigger">Tagum City Crime Reports</h6>
         <button id="buttonE" type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive mx-3 px-3">
           <div class="row card-body pt-3 pb-0  px-0 row-cols-6 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group justify-content-end text-end">
    <button onclick="downloadCanvas()" type="button" class="btn bg-gradient-secondary btn-sm mb-2 px-0 w-85" id="downloadB">Download Graph</button>
    </div>

   </div> 
      <canvas id="chart-line1" width="299" height="90" position="absolute" class="chartjs-render-monitor pb-4 pt-2"></canvas>
            <!-- END -->
      <div class="table-responsive m-3 p-3">
        <!-- GENERAL TABLE -->
    <table class="table align-items-center mb-0 py-2 pb-4" id="example5" >
      <thead>
        <tr>
          <th class="text-uppercase text-xs font-weight-bolder p-1">Type of Crime</th>
          <th class="text-uppercase text-xs font-weight-bolder text-center ps-2">Data Reported</th>
        </tr>
      </thead>
      <tbody>
        <tr data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-pointer">
          <td>
            <p class="text-xs font-weight-bold mb-0">Theft</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">86</span>
          </td>
        </tr>
        <tr>
          <td>
            <p class="text-xs font-weight-bold mb-0">Rape</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">282</span>
          </td>
        </tr>
        <tr>
          <td>
            <p class="text-xs font-weight-bold mb-0">Missing</p>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">25</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
   <script src="public/js/core/popper.min.js"></script>
   <script src="public/js/core/bootstrap.min.js"></script>
   <script src="public/js/plugins/perfect-scrollbar.min.js"></script>
   <script src="public/js/components/mapss.js"></script>
   <!-- BAR CHART -->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!--  <script src="public/plugins/public/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
  <!--  <script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
   <script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
   <script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script src="public/plugins/jszip/jszip.min.js"></script>
   <script src="public/plugins/pdfmake/pdfmake.min.js"></script>
   <script src="public/plugins/pdfmake/vfs_fonts.js"></script>
   <script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
   <script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
   <script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- <script src="public/js/components/library_items.js"></script> -->
   <!-- <script src="public/js/plugins/printThis.json"></script>
   <script src="public/js/plugins/printThis.js"></script> -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <!-- buttons for pdf.etc -->
   <script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
     <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script> -->
  <!-- ZOOM ZVG -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

</body>
</html>