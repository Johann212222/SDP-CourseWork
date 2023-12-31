<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <box-icon type='solid' name='pie-chart-alt-2'></box-icon>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/boxicons.css') ?>"/>

    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/core.css') ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/theme-default.css') ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/perfect-scrollbar.css') ?>" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/apex-charts.css') ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script type="text/javascript" src="<?= base_url('DSS/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script type="text/javascript" src="<?= base_url('DSS/js/config.js') ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-regression"></script>
    <script src="https://kit.fontawesome.com/beeb0be851.js" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Add Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>

<!-- Add Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add Bootstrap Datepicker CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a  href="<?= site_url('current') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Present Statistics</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item ">
            <a  href="<?= site_url('predictions') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Predictions</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="<?= site_url('reports') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Custom Report Generation</div>
              </a>
            </li>
           
            <li class="menu-item">
              <a href="<?= site_url('warehouse') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Warehouse</div>
              </a>
            </li>
           
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Go Back</div>
              </a>
            </li>
            <!-- User interface -->
            

          
          
            <!-- Misc -->
           <ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              Decision Support System
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
               

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online"> Johann
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Mr. Johann Jayatilleke</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card" style="overflow:hidden">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Complaint Statistics</h5>
                          <p class="mb-4">
                          Statistics of the complaint recording system upto the last 30 days of operation
                          </p>

                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                          <img
                          src="<?= base_url('DSS/images/Skærmbillede-2017-09-04-kl.-16.17.52-removebg.png') ?>"
                            height="140"
                            style="transform: scale(3);"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#myModal">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                          <i class="fa-solid fa-triangle-exclamation"></i>
                           
                          </div>
                          <h3 class="card-title mb-2"><?= $totalOccurrences?></h3>
                          <span class="fw-semibold d-block mb-1">Cases in the last 30 days</span>
                        </div>
                      </div>
                    </div>
                    <!-- Your modal -->


                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <i class="fa-solid fa-arrow-up-right-dots"></i>
                           
                          </div>
                          <h3 class="card-title mb-2"><?=number_format($growthRate, 0)?>%</h3>
                          <span class="fw-semibold d-block mb-1">Growth rate</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                        <h5 class="card-header m-0 me-2 pb-3">Total cases in the last 30 days</h5>
                        <div id="chartContainer">
                        <canvas id="lineChart" width="400" height="200"></canvas>

<script>
    // Parse the line chart data from PHP to JavaScript
    var lineChartData = <?= $lineChartData ?>;

    // Get the canvas element
    var ctx = document.getElementById('lineChart').getContext('2d');

    // Create the line chart
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: lineChartData,
    });
</script>
    </div>                      
                    
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Cases for each location in the last 30 days</h5>
                     
                    </div>
                    <div class="card-body">
                    <div>
    <canvas id="pieChart"></canvas>
</div>

<script>
    // Line Chart


    // Pie Chart
    var pieChartCanvas = document.getElementById('pieChart').getContext('2d');
    var pieChartData = <?= json_encode($casesPerLocationData) ?>;
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: {
            datasets: [{
                data: pieChartData.map(entry => entry.value),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#E91E63', '#9C27B0', '#FF9800', '#795548'],
            }],
            labels: pieChartData.map(entry => entry.label),
        },
    });
</script>






                    </div>
                  </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Cases & time of day relationship</h5>
                      </div>
                     
                    </div><br>
                    <div class="card-body">
                  <!-- Display the Time Of Cases Line Chart -->
<div>
    <canvas id="timeOfCasesChart" height="200"></canvas>
</div>

<script>
    // Time Of Cases Line Chart
    var timeOfCasesCanvas = document.getElementById('timeOfCasesChart').getContext('2d');
    var timeOfCasesData = <?= json_encode($timeOfCasesData) ?>;
    var timeOfCasesChart = new Chart(timeOfCasesCanvas, {
        type: 'line',
        data: timeOfCasesData,
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>









                  
                      <ul class="p-0 m-0">
                    

    <!-- Display Predictions -->



                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->
    <!-- Date Picker Input -->
    
                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                  <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Types of complainers</h5><br>
                      </div>
                     
                    </div>
                    <div class="card-body px-0">
                     
                   
<div class="text-center">                       
<button
  type="button"
  class="btn-view chart"
  role="tab"
  data-bs-toggle="modal"
  data-bs-target="#locationModal"
  aria-controls="navs-tabs-line-card-income"
  aria-selected="true"
>View</button>
</div>  
<div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="chartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chartModalLabel">Predictions of cases for all Locations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <canvas id="locationChart" width="1000" height="500"></canvas>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


                        
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->



                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Types of cases</h5>
                    
                    </div>
                    <div class="card-body">
<!-- Display the Bar Chart --><br>
<div>
    <canvas id="barChart" height="200"></canvas>
</div>

<script>
    // Bar Chart
    var barChartCanvas = document.getElementById('barChart').getContext('2d');
    var barChartData = <?= json_encode($typesOfCasesData) ?>;
    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>
   
</div>
                  </div>
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script type="text/javascript" src="<?= base_url('DSS/js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('DSS/js/popper.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('DSS/js/bootstrap.js') ?>"></script>
    <script stype="text/javascript" src="<?= base_url('DSS/js/perfect-scrollbar.js') ?>"></script>

    <script type="text/javascript" src="<?= base_url('DSS/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script type="text/javascript" src="<?= base_url('DSS/js/apexcharts.js') ?>"></script>

    <!-- Main JS -->
    <script type="text/javascript" src="<?= base_url('DSS/js/main.js') ?>"></script>

    <!-- Page JS -->
    <script type="text/javascript" src="<?= base_url('DSS/js/dashboards-analytics.js') ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Get the card element
    var card = document.querySelector('.card');

    // Add a click event listener
    card.addEventListener('click', function () {
      // Trigger the modal to show
      var myModal = new bootstrap.Modal(document.getElementById('myModal'));
      myModal.show();
    });
  });
</script>

  </body>
</html>