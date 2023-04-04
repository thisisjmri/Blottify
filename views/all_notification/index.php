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
    Notification
  </title>
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <!-- Nucleo Icons -->
  <link href="public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="public/css/nucleo-svg.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="public/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
<section>
  <div class="container py-4" style="font-family: 'Quicksand';">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <div class="card d-flex justify-content-center p-4 shadow-lg">
          <div class="text-start">
            <h5>Notifications</h5>
          </div>
          <div class="card card-plain">
              <div class="card-body p-0">
                <div class="form-group mb-0 mt-md-0 mt-4">
                 
                <!-- NOTIF 2 -->
                  <!-- <div class="d-flex py-2 px-3 cursor-pointer" onmouseover="this.style.background='#cacfcf';" onmouseout="this.style.background='white';" style="border-radius: 13px;  font-family: 'Quicksand';" >
                  <div class="my-auto"s>
                  <img src="public/img/bruce-mars.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                  <span class="font-weight-bold">New message</span> from Laur
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                  <i class="fa fa-clock me-1" aria-hidden="true"></i>
                  13 minutes ago
                  </p>
                  </div>
                  </div> -->
                  <!-- END -->
                <!-- NOTIF 2 -->
                  <!-- <div class="d-flex py-2 px-3 cursor-pointer" onmouseover="this.style.background='#cacfcf';" onmouseout="this.style.background='white';" style="border-radius: 13px;  font-family: 'Quicksand';" >
                  <div class="my-auto"s>
                  <img src="public/img/bruce-mars.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                  <span class="font-weight-bold">New message</span> from Laur
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                  <i class="fa fa-clock me-1" aria-hidden="true"></i>
                  13 minutes ago
                  </p>
                  </div>
                  </div> -->
                  <?php 

                  for ($i=0; $i<count($this->getNotif); $i++) { 
                    for ($j=0; $j<count($this->getUser); $j++) { 
                      if($this->getNotif[$i]['user_id']==$this->getUser[$j]['id']){
                        for ($k=0; $k<count($this->getStation); $k++) { 
                          if($this->getStation[$k]['id']==$this->getUser[$j]['station_id']){


                            echo "<div class='d-flex py-2 px-3 cursor-pointer' onmouseover='this.style.background='#cacfcf';' onmouseout='this.style.background='white';' style='border-radius: 13px;  font-family: Quicksand;' >";
                              echo "<div class='my-auto's>";
                                echo "<img src='public/img/bruce-mars.jpg' class='avatar avatar-sm  me-3 ' alt='user image'>";
                              echo "</div>";
                              echo "<div class='d-flex flex-column justify-content-center'>";
                                echo "<h6 class='text-sm font-weight-normal mb-1'>";
                                  echo "<span class='font-weight-bold'>".$this->getUser[$j]['fullname']."</span> forwarded a message from ".$this->getStation[$k]['station_name'].".";
                                echo "</h6>";
                                echo "<p class='text-xs text-secondary mb-0'>";
                                  echo "<i class='fa fa-clock me-1' aria-hidden='true'></i>";
                                  echo $this->getNotif[$i]['date_time'];
                                echo "</p>";
                              echo "</div>";
                            echo "</div>";

                            
                            // echo "<li class='mb-2'>";
                            //   echo "<a class='dropdown-item border-radius-md' href='javascript:;''>";
                            //     echo "<div class='d-flex py-1'>";
                            //       echo "<div class='my-auto'>";
                            //         echo "<img src='".URL."public/img/illustrations/books-pile.png' class='avatar avatar-sm me-3'>";
                            //       echo "</div>";
                            //       echo "<div class='d-flex flex-column justify-content-center'>";
                            //         echo "<h6 class='text-sm font-weight-normal mb-1'>";
                            //           echo "<span class='font-weight-bold'>".$this->getUser[$j]['fullname']."</span> forwarded a case from ".$this->getStation[$k]['station_name'].".";
                            //         echo "</h6>";
                            //         echo "<p class='text-xs text-secondary mb-0'>";
                            //           echo "<i class='fa fa-clock me-1'></i>";
                            //           echo $this->getNotif[$i]['date_time'];
                            //         echo "</p>";
                            //       echo "</div>"; 
                            //     echo "</div>";
                            //   echo "</a>";
                            // echo "</li>";

                          }
                        }
                      }
                    }
                  }

                  ?>
                  <!-- END -->
                <div class="row">
                  <!-- <div class="col-md-12 text-center text-info cursor-pointer">
                    <p class="text-sm">Load More</p>
                  </div> -->
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 
  <!--   Core JS Files   -->
  <script src="public/js/core/popper.min.js"></script>
  <script src="public/js/core/bootstrap.min.js"></script>
  <script src="public/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="public/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="public/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>
</html>