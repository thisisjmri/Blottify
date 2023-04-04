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
  <!-- Nucleo Icons -->
  <link href="<?php echo URL;?>public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo URL;?>public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo URL;?>public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
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
        left:0;
        top:0;
    }
}
</style>                                  
<body class="g-sidenav-show bg-gray-100">
  <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
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
          <a class="nav-link bg-gradient-warning active" href="<?php echo URL;?>blotter">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg class="text-white" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path class="background-color" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/></svg>
              </svg>
            </div>
            <span class="nav-link-text ms-1 text-white">Blotter</span>
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
  <?php
    include 'views/includes/navbar.php';
  ?>
<div class="px-6 py-4">
   <div style="display: flex;">
      <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
         <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
         <path d="M384 480h48c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224H144c-11.4 0-21.9 6-27.6 15.9L48 357.1V96c0-8.8 7.2-16 16-16H181.5c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8H416c8.8 0 16 7.2 16 16v32h48V160c0-35.3-28.7-64-64-64H298.5c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H87.7 384z"/>
      </svg>
      <h6 style="margin-left: 10px; margin-bottom: 0px;">
        <?php
        $admin_id = Session::get("admin_id");
        $station_type = Session::get("station_type");
        if($station_type == "Main Station"){
          $cur_station = Session::get("cur_station");
        }
        else{
          $cur_station = Session::get("station_id");
        }
        
        for($m=0; $m<count($this->getStation); $m++){
          if($cur_station == $this->getStation[$m]['id']){
            echo $this->getStation[$m]['station_name']." | ";
          }
        }
        $count = 0;
          for ($i=0; $i <count($this->getBlotter); $i++) { 
            for ($j=0; $j <count($this->getStation); $j++) { 
              if($cur_station == $this->getBlotter[$i]['station_id']){
                if ($this->getBlotter[$i]['station_id'] == $this->getStation[$j]['id']) {
                  if ($this->getStation[$j]['station_type'] == 'Main Station') {
                    if ($this->getBlotter[$i]['remarks'] == 0) {
                      $count++;
                    }
                    else if ($this->getBlotter[$i]['remarks'] == 1) {
                      $count++;
                    }
                  }
                  else if ($this->getStation[$j]['station_type'] == 'Sub Station') {
                    // if ($this->getBlotter[$i]['remarks'] == 0) {
                    //   $count++;
                    // }
                    // else if ($this->getBlotter[$i]['remarks'] == 1) {
                      $count++;
                    // }
                  }
                }
              }
            }
          }

          // for ($v=0; $v < count($this->getBlotter); $v++) { 
          //   if ($this->getStation[$b]['id']==$this->getBlotter[$v]['station_id']) {
          //     if ($this->getBlotter[$v]['remarks']==$nforwarded) {
          //       $count++;
          //     }
          //   }
          // }
        echo $count." Blotter Files";
         ?></h6>
   </div>
</div>

    <!-- START -->
<div class="card  mx-5" style="border-color: gray; border-width: thin;">
    <div class="card-header pb-0">
<div class="d-lg-flex">

<?php
$station_type = Session::get("station_type");
if($station_type == "Main Station"){
  echo "<div class='w-2 h-3 pl-4 cursor-pointer'><a href='libraries_main'>
<svg class='cursor-pointer' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class='cursor-pointer' d='M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z'/></svg></div></a>";
}
?>
<div class="row card-body pt-2 pb-3 px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">         
   <div class="form-group px-0">
    <label style="font-family: 'Quicksand'; font-size: 14px;"> Start Date</label>
     <input type="date" style="font-family: 'Quicksand';font-size: 15px;" class="form-control">
   </div>
   <div class="form-group">
    <label style="font-family: 'Quicksand';font-size: 14px;">End Date</label>
     <input type="date" style="font-family: 'Quicksand';font-size: 15px;" class="form-control">
    </div>
   </div>    
</div>
   <div class="row card-body pt-4 pb-0 pr-0 px-0 row-cols-5 justify-content-end pb-0" style="height: 75px;">
   <div class="form-group">
    <button type="button" class="btn btn-outline-dark mb-2 w-100">Generate</button>
    </div>
   </div> 

</div>
  <div class="table-responsive m-3 p-3">

  
    <table class="table align-items-center mb-0 py-2" id="example4" >
      <thead>
        <tr>
          <th class="text-uppercase text-xxs font-weight-bolder">In-charged</th>
          <th class="text-uppercase text-xxs font-weight-bolder ps-2">Case Number</th>
          <th class="text-uppercase text-xxs font-weight-bolder">Date and Time</th>
          <th class="text-center text-uppercase text-xxs font-weight-bolder">Remarks</th>
        </tr>
      </thead>
      <tbody>
        <?php
        for($m=0; $m<count($this->getBlotter); $m++){
          if($cur_station == $this->getBlotter[$m]['station_id']){
              $id_temp = $this->getBlotter[$m]['id'];
            ?>
            <p class="d-none" id="d-narrative_<?php echo $id_temp ?>" value=""><?php echo nl2br($this->getBlotter[$m]['d_narrative'])?></p>
            
            <tr data-bs-toggle="modal" data-bs-target="#exampleModal" class="cursor-pointer" onclick='addInfo("<?php echo $this->getBlotter[$m]['id'] ?>")'>

              <?php
              echo "<td >
                <div class='d-flex px-2 py-1'>
                  <div>
                    <img src='".URL."public/img/bruce-mars.jpg' class='avatar avatar-sm me-3'>
                  </div>
                  <div class='d-flex flex-column justify-content-center'>";
                  for($n=0; $n<count($this->getUser); $n++){
                    if($this->getUser[$n]['id'] == $this->getBlotter[$m]['d_policeuser']){
                      echo "<h6 class='mb-0 text-xs'>".$this->getUser[$n]['fullname']."</h6>
                      <p class='text-xs text-secondary mb-0'>".$this->getUser[$n]['email']."</p>";
                    }
                  }
                  echo "</div>
                </div>
              </td>
              <td>
                <p class='text-xs font-weight-bold mb-0'>".$this->getBlotter[$m]['id']."</p>
              </td>
              <td class='align-middle text-center'>
                <span class='text-secondary text-xs font-weight-bold'>".$this->getBlotter[$m]['dt_reported']."</span>
              </td>
              <td>";
              if($this->getBlotter[$m]['remarks']==0){
                echo "<button class='bg-gradient-warning' onclick='inForward(".$this->getBlotter[$m]['id'].")'>Forward</button>";
              }
              else{
                echo "<button class='bg-gradient-secondary' disabled>Forwarded</button>";
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
              <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content modal-xl">
                      <div class="row row-cols-5 pr-5 p-3 justify-content-end">
                          <div class="form-group pr-5 pt-2 m-0 text-end">
                          <button type="button" class="btn-close bg-secondary justify-content-end" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                      </div>
                      <div class="modal-header">
                        <h5 class="modal-title" id="case_number">Case Number 18271626712167</h5>
                           <a class="btn bg-gradient-secondary btn-sm mb-0 me-0" target="_blank" id="print" href="blotter">Print</a>
                      </div>
                      <div class="modal-body" id="printThis">
                      <div class="row">
                        <h3 class="text-center my-3">INCIDENT RECORD FORM</h3>
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin;">
                           <label>IRF ENTRY NUMBER:  <label id="0"></label></label>
                        </div>
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin;">
                           <label>TYPE OF INCIDENT:  <label id="1"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>COPY FOR:  <label id="2"></label></label>
                        </div>
                        <p class="mb-0 text-sm py-2" style="font-family: 'Quicksand';font-size: 12px;" style="border-style: solid; border-width: thin;">INSTRUCTIONS: Refer to PNP SOP on 'Recording of Incidents in the Police Blotter' in filling up this form. This Incident Record Form (IRF) may be reproduced, photocopied, and/or downloaded from the DIDM website, www.didm.pnp.gov.ph.</p>
                     </div>
                     <div class="row mt-2 mb-2" style="border-style: solid; border-width: thin;">
                        <div class="col-12 col-sm-4">
                           <label>DATE AND TIME REPORTED:  <label id="3"></label></label>
                        </div>
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin;">
                           <label>DATE AND TIME OF INCIDENT:  <label id="4"></label></label>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>PLACE OF INCIDENT:  <label id="5"></label><label hidden id="6"></label></label>
                           <div class="pb-2">        
                           </div>                        
                        </div>
                      </div>
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "A" - REPORTING PERSON</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FAMILY NAME:  <label id="7"></label></label>
                        </div>
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FIRST NAME:  <label id="8"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MIDDLE NAME:  <label id="9"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>NICKNAME:  <label id="10"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>CITIZENSHIP:  <label id="11"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>SEX/GENDER:  <label id="12"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>CIVIL STATUS:  <label id="13"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>DATE OF BIRTH:  <label id="14"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>AGE:  <label id="15"></label></label>
                        </div>
                        <div class="col-12 col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PLACE OF BIRTH:  <label id="16"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MOBILE PHONE:  <label id="17"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>CURRENT ADDRESS:  <label id="18"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="19"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="20"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="21"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="22"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OTHER ADDRESS:  <label id="23"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="24"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="25"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="26"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="27"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OCCUPATION:  <label id="28"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>ID CARD PRESENTED:  <label id="29"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OF ITEM B -->
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "B" - SUSPECT'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FAMILY NAME:  <label id="30"></label></label>
                        </div>
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FIRST NAME:  <label id="31"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MIDDLE NAME:  <label id="32"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>NICKNAME:  <label id="33"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>CITIZENSHIP:  <label id="34"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>SEX/GENDER:  <label id="35"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>CIVIL STATUS:  <label id="36"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>DATE OF BIRTH:  <label id="37"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>AGE:  <label id="38"></label></label>
                        </div>
                        <div class="col-12 col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PLACE OF BIRTH:  <label id="39"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MOBILE PHONE:  <label id="40"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>CURRENT ADDRESS:  <label id="41"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="42"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="43"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="44"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="45"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OTHER ADDRESS:  <label id="46"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="47"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="48"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="49"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="50"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OCCUPATION:  <label id="51"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-4 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>RELATION TO VICTIM:  <label id="52"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label style="font-size: 9px;">UNDER THE INFLUENCE?   <label id="53"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     
                     <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "C" - VICTIM'S DATA</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FAMILY NAME:  <label id="54"></label></label>
                        </div>
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>FIRST NAME:  <label id="55"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MIDDLE NAME:  <label id="56"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>NICKNAME:  <label id="57"></label></label>
                        </div>
                     </div>
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12  col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>CITIZENSHIP:  <label id="58"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>SEX/GENDER:  <label id="59"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>CIVIL STATUS:  <label id="60"></label></label>
                        </div>
                        <div class="col-12 col-sm-2 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>DATE OF BIRTH:  <label id="61"></label></label>
                        </div>
                        <div class="col-12 col-sm-1" style="border-style: solid; border-width: thin;">
                           <label>AGE:  <label id="62"></label></label>
                        </div>
                        <div class="col-12 col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PLACE OF BIRTH:  <label id="63"></label></label>
                        </div>
                        <div class="col-12 col-sm-3 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>MOBILE PHONE:  <label id="64"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START CURRENT ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>CURRENT ADDRESS:  <label id="65"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="66"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="67"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="68"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="69"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OTHER ADDRESS:  <label id="70"></label></label>
                        </div>
                        <div class="col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>VILLAGE/SITIO:  <label id="71"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>BARANGAY:  <label id="72"></label></label>
                        </div>
                        <div class="col-sm-2"style="border-style: solid; border-width: thin;">
                           <label>TOWN/CITY:  <label id="73"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>PROVINCE:  <label id="74"></label></label>
                        </div>
                        <div class="col-sm-2" style="border-style: solid; border-width: thin;">
                           <label>WORK ADDRESS:  <label id="76"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OTHER ADDRESS  -->
                     <div class="row mt-0">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>OCCUPATION:  <label id="75"></label></label>
                        </div>
                     </div>
                     <!-- END -->
                     <!-- START OF ITEM B -->
                      <p class="mb-0 text-lg py-1 mt-3  text-center text-bold" style="font-family: 'Quicksand'; background-color: #b8b8b8; font-size: 30px; font-color: red;">ITEM "D" - NARRATIVE OF INCIDENT</p>
                     <div class="row mt-3">
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>TYPE OF INCIDENT:  <label id="79"></label></label>
                        </div>
                        <div class="col-12 col-sm-3" style="border-style: solid; border-width: thin;">
                           <label>DATA/TIME OF INCIDENT:  <label id="80"></label></label>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0" style="border-style: solid; border-width: thin;">
                           <label>PLACE OF INCIDENT:  <label id="81"></label></label>
                        </div>

                        <div class="col-12 col-LG-4 mt-3" style="border-style: solid; border-width: thin;">
                          
                           <label style="height: 200px;" type="text">ENTER IN DETAIL NARRATIVEOF THE INCIDENTOR EVENT, ANSWERING THE WHO, WHAT, WHEN, WHERE, AND WHY AND HOW OF REPORTING  <br><br>
                            <div style="height: 200px; overflow: auto; width: 100%;"><pre id="77"></pre></div></label><p style="font-size: 12px;">
                        </div>
                        <label>(DETAILS OF THIS NARRATIVE SHALL BE THE BASIS IN THE ENTRY OF RECORD IN THE POLICE BLOTTER)</label>                       
                     </div>
                      <div class="row">
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin; background-color: #b8b8b8;">
                           <label>I HEREBY CERTIFY TO THE CORRECTNESS OF THE FOREGOING TO THE BEST OF MY KNOWLEDGE AND BELIEF.</label>
                        </div>
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin;">
                            <label>NAME OF REPORTING PERSON<br>  <label id="82"></label></label><!-- a_first, middle, and lastname -->
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin; background-color: #b8b8b8;">
                           <label>SUBSCRIBED AND SWORN TO BEFORE ME.</label>
                        </div>
                        <div class="col-12 col-sm-4" style="border-style: solid; border-width: thin;">
                            <label>NAME OF ADMINISTERING OFFICER (DUTY OFFICER)<br>  <label id="78"></label></label><!-- d_policeuser  -->
                        </div>
                      </div>
                      </div>
                        
                      </div>
                      </div>
                      <div class="modal-footer">
                       
                      </div>
                    </div>
                  </div>
                </div>
                </div>

    </div>     
    </div>
  </div>
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
<script src="<?php echo URL;?>public/js/components/libraries.js"></script>



<!-- buttons for pdf.etc -->
<script src="<?php echo URL;?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script>
  AOS.init();
</script>
<script>
  $(document).ready(function () {
    $('#example9').DataTable();
});

  var nav_subname = document.getElementById("nav_subname");
    nav_subname.textContent = "Library";

    var nav_name = document.getElementById("nav_name");
    nav_name.textContent = "Library";
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
<script>

//   $(function () {
//     $("#example4").DataTable({
//       "responsive": true, "lengthChange": false, "autoWidth": false,
//       "buttons": ["excel", "pdf", "print", "csv"]
//     }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
//     $('#example2').DataTable({
//       "paging": true,
//       "lengthChange": false,
//       "searching": false,
//       "ordering": true,
//       "info": true,
//       "autoWidth": false,
//       "responsive": true,
//     });
//   });

//   document.getElementById("Print").onclick = function () {
//     printElement(document.getElementById("printThis"));
// };

// function printElement(elem) {
//     var domClone = elem.cloneNode(true);

//     var $printSection = document.getElementById("printSection");

//     if (!$printSection) {
//         var $printSection = document.createElement("div");
//         $printSection.id = "printSection";
//         document.body.appendChild($printSection);
//     }

//     $printSection.innerHTML = "";
//     $printSection.appendChild(domClone);
//     window.print();
// }

// // modal for la filipina

//   document.getElementById("Print1").onclick = function () {
//     printElement(document.getElementById("printThis1"));
// };

// function printElement(elem) {
//     var domClone = elem.cloneNode(true);

//     var $printSection = document.getElementById("printSection");

//     if (!$printSection) {
//         var $printSection = document.createElement("div");
//         $printSection.id = "printSection";
//         document.body.appendChild($printSection);
//     }

//     $printSection.innerHTML = "";
//     $printSection.appendChild(domClone);
//     window.print();
// }

// modal for san miguel

//   document.getElementById("Print2").onclick = function () {
//     printElement(document.getElementById("printThis2"));
// };

// function printElement(elem) {
//     var domClone = elem.cloneNode(true);

//     var $printSection = document.getElementById("printSection");

//     if (!$printSection) {
//         var $printSection = document.createElement("div");
//         $printSection.id = "printSection";
//         document.body.appendChild($printSection);
//     }

//     $printSection.innerHTML = "";
//     $printSection.appendChild(domClone);
//     window.print();
// }

// // modal for pagsabangan

//   document.getElementById("Print3").onclick = function () {
//     printElement(document.getElementById("printThis3"));
// };

// function printElement(elem) {
//     var domClone = elem.cloneNode(true);

//     var $printSection = document.getElementById("printSection");

//     if (!$printSection) {
//         var $printSection = document.createElement("div");
//         $printSection.id = "printSection";
//         document.body.appendChild($printSection);
//     }

//     $printSection.innerHTML = "";
//     $printSection.appendChild(domClone);
//     window.print();
// }
</script>
</body>
</html>