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
    <link rel="stylesheet" type="text/css" href="<?= base_url('DSS/css/sl-map.css') ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script type="text/javascript" src="<?= base_url('DSS/js/helpers.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            <li class="menu-item ">
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
           
            <li class="menu-item active">
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
                          <h3 class="card-title mb-2"><?=$totalCases?></h3>
                          <span class="fw-semibold d-block mb-1">Total complaints recorded</span>
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
                          <h3 class="card-title mb-2"></h3>
                          <span class="fw-semibold d-block mb-1">Total users</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                        <h5 class="card-header m-0 me-2 pb-3">Total cases of all time</h5>
                        <div id="chartContainer">
                        <div style="width: 100%; margin: auto;">
        <canvas id="warehouseChart"></canvas>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get chart data from PHP
        var chartData = <?= json_encode($chartData) ?>;
        var regressionLine = <?= json_encode($chartData['regressionLine']) ?>;

        // Prepare data for Chart.js
        var ctx = document.getElementById('warehouseChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData.labels,
                datasets: [
                    {
                        label: 'Total Occurrences',
                        data: chartData.data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Regression Line',
                        data: regressionLine,
                        borderColor: 'rgba(255, 99, 132, 1)', // Adjust color as needed
                        borderWidth: 2,
                        fill: false,
                    },
                ],
            },
            options: {
                // ... (previous options)
            },
        });
    });
</script>
    </div>                      
                    
                    </div>
                  </div>
                </div>
                <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                        <h5 class="card-header m-0 me-2 pb-3">Distribution of complaint types</h5>
                        <div id="chartContainer">    <div style="width: 80%; margin: auto;">
        <canvas id="pieChart"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get total types data from PHP
            var totalTypesData = <?= json_encode($totalTypes) ?>;

            // Prepare data for Chart.js
            var ctx = document.getElementById('pieChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: Object.keys(totalTypesData),
                    datasets: [{
                        data: Object.values(totalTypesData),
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            // Add more colors as needed
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });
    </script><br>
    </div>                      
                    
                    </div>
                  </div>
                </div>
                <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                        <h5 class="card-header m-0 me-2 pb-3">Distribution of complainer types</h5>
                        <div id="chartContainer">   <br>
    </div>                      
                    
                    </div>
                  </div>
                </div>
                <div class="col-12 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
    <div class="row row-bordered g-0">
        <h5 class="card-header m-0 me-2 pb-3">Distribution of cases among districts</h5>
        <div class="col-md-6"> <!-- Adjust the width as needed -->
            <div id="chartContainer" class="text-center">
                <svg baseprofile="tiny" fill="#7c7c7c" height="500" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" version="1.2" viewbox="0 0 1000 1745" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <!-- Your SVG content here -->

 
    <a xlink:title="Kandy - Total Cases: <?= $casesPerLocation['Kandy'] ?? 0 ?>">
 <path d="M598.3 1048.7l3.9 67.3 9.7 32.2-0.8 14.5-11.9 11.1-9.5 2.7-5.6 3.4-18.3-3.8-18.9 2.9-16.2-1.3-10.2-16.1-3.8-0.4-4.6-1.7-6.3-8.5-7.7-6.9 1.4 12.9 4 16.7-8.9 15.2-28.5 33.7-7.5-2-8.7 0.2-12.8 8.9-9 2-15.9-2-10 8 3.6-1.1 3.4 1.5 7.8 14.4 6.6 6.2 5.2 7.2-5.3 14.9-9.5 10.2-12.9-7.7-19.8-29.5-12.6-1.1 0.2-8.9 3.2-6.8-3.2-5.6-6.7-16 5-4.7 15.3-2.5 7-7.5 4.8-0.3 4.8-1.2 3.5-5.4 2.5-5.9-5.2-6.5-6.4-6.3-0.1-6.6 1.1-7.9-5.3-6.5-11.3-6.3-3.7-2.6 0.7-8.6-19.1-16.8-5.4-13.6 9.1 1 8-2.4-0.8-2-0.3-3 1.5-2.6 1.9-2.4 1.4-8.9 6.3 0 6.9 4.9 7.5 0.6 0.7-4.7-0.7-4.9 6.5-3.7 6.3 1.1 4.8-2.2-2.7-6.1-3.5-5.6 5.2-1.4 5.3-2.5 9.1 12.6 28 17.6 16.3 1 9.4-10.5-1.5-16.3 2.7-7 6.1-3.7 6.6 2.5 16.4 13.6 12.7-1.9 14-11.5 18.2 0.1 7.3-3.6 5.3 6.7 3.2-1.8 2.9-2.5 4.9-8.2 8.9-1.4 14 1.6z" id="LKA2448" name="Kandy">
 
</path>
    </a>

    <a xlink:title="Matale - Total Cases: <?= $casesPerLocation['Matale'] ?? 0 ?>">
 <path d="M600.8 944.1l-0.3 7.4 3.2 10.1 1 8.6-4.3 21.1-4.2 20.9 2.1 36.5-14-1.6-8.9 1.4-4.9 8.2-2.9 2.5-3.2 1.8-5.3-6.7-7.3 3.6-18.2-0.1-14 11.5-12.7 1.9-16.4-13.6-6.6-2.5-6.1 3.7-2.7 7 1.5 16.3-9.4 10.5-16.3-1-28-17.6-9.1-12.6 0.2-4.6 2.5-3.3 0.9-5.4-1.3-5.6-2.2-4.7-2.7-4.4-4.4-9 1.1-9.4 6.2-5.7 1.6-3.8-0.1-4.1 1.3-5.3 0.2-5.2-8.1-7.9-2.4-13.8-1.3-14.9-2.3-3.2-1.6-1.1-0.1-7.7-3-7.7-4.4-7.4-3.1-6.9-3.4-0.9-3.9-2.2-1.1-7.9 2-7.2 9.4-7 14.9-5.5 7.8-9.5 7.1 0.3 5.3 3.5 6.6-4.6 3.2-5.4 3.1-2.1 2.9-1.7-0.3-3.2-1-2 5.7-5.9 4.2-6.5-0.1-8.3 2.5-7.1 4.4 0 3.3 0.9 2.6-1.8 8.6-9.1 5.7-5.1 8.4-4.2 9.3-3.8 3.8 3.8 6.2 6.9-0.2 7.9 2.4 2.6 3.7 1.4 2.9-1.8 0.2-2.9 5.3-2.5 5.1 1.4 7 1.5 6.5 3.9-13.3 13.9-4.3 21.1-1.2 10.2-4.3 18-1.5 3.2-0.8 3.3-12.8 2.8-3 12.3 6 27.1-0.8 8.7 4.3 6.2 11.7 2.6 11.1-4.7 8.8-8 3.8 5.3 6.7 4.2 2-7.8 1-8 23.7 1.7 22.8-4.2z" id="LKA2449" name="Matale">
 </path>    </a>

 <a xlink:title="Nuwara Eliya - Total Cases: <?= $casesPerLocation['Nuwara Eliya'] ?? 0 ?>">
 <path d="M584.1 1179.9l-0.3 8 3.3 11.1-1 4.1 0.9 3.7 2 2.4 1.6 2.3-3 3.7-2.1 4.1 2.4 7.9 0.6 3.1-1.4 3.3-2.9 3.7-3.6 3.3-4 7.8-2 8.7-9.8 14.6-16.8 3.7-7.9 3.8-7 6.4-2.2 8.8-5.9 6.9-8.3-0.5-8 0.4 0.5 7.1 14.1 7.1 3 6.2 2.5 6.8 2.2 2.8 1.8 3-6.5 10.6 4 2.6 4.1 2-4.5 6.4-8.4 2.1-25 13.1-13.8 1.9-14.6-0.5-11 0.9-9.3 1.5-24.3-3.3-22.9-5.1-10.8-0.9-9-7 1.6-4.5 3.3-3.2-3-3.3 0.3-7.3 5.1-4.4-0.7-6-3.4-11.7-10.2-7.6-12.9-4.2-3.8-12.8 3.1-16.6-2.8-2.9-2.5-3.4 2.4-3.3 3.4-1.1 6.1-5.4 3.9-6.3-1.4-0.4-0.6-1.4 12.6 1.1 19.8 29.5 12.9 7.7 9.5-10.2 5.3-14.9-5.2-7.2-6.6-6.2-7.8-14.4-3.4-1.5-3.6 1.1 10-8 15.9 2 9-2 12.8-8.9 8.7-0.2 7.5 2 28.5-33.7 8.9-15.2-4-16.7-1.4-12.9 7.7 6.9 6.3 8.5 4.6 1.7 3.8 0.4 10.2 16.1 16.2 1.3 18.9-2.9 18.3 3.8z" id="LKA2450" name="Nuwara Eliya">
 </path></a>

 <a xlink:title="Ampara - Total Cases: <?= $casesPerLocation['Ampara'] ?? 0 ?>">
 <path d="M945.8 1059.9l0.5 1.8 3.6 0.8 3.5-4.6 2.8 0 3.4 18-0.1 6.6 3 0 0.4-6.4 1.1-6.2 1.9-5.2 2.7-3.8 0-3-1.2-3.5 0.8-1.4 2.4 1 4 3.9 1.3 3.5 1 9.4 6.8 10.9 11.1 37.9-2.1 104.7 1.1 7.1 4.5 15.7 0.7 9.3-2.5 17.7-20.4 70.7-1.1 7.3-0.4 9.6-1.6 8-6.3 12.4-1.4 5.6-2.5 7.6-12.6 19.7 3 10.9-4.9 12.8-28 44.5-4-1.3-10.7-3.3-7.4-8.4-5.6-0.8-5.1-0.4-13.2-16.2 11.5-163.3-2.2-8.8-5.3-7.7 0-8.6-3.1-8.5 2.1-8.8 0.9-8.4-13.1-7.9-15.8-4-2.2-2.1-2.8-1.6-3.3 0-3.5-1.6-3.5-6.1-1.7-6.9-5.7-10.4 5.1-13.8 9.2-10.9 7.2-5.7-9.6-13.3-1.3-9.6-6.1-10.8-9.8-8.5-1.8-8.6 0.7-10.6-5.3-23.5 0.9-6-2.9-0.5-2.8-1.7 6.5-10.1-8.7-2.4-11 5.9-5.4 1.9-4.8 2.2-1.7 4.1-3 4.8-6.1 1.6-4.5 0.4 0.1 5.8 2.4 5.2 0.5 5.3-2 4.4-3.1 3.7-2.1 3.1-8.9 5-11-0.5 0.1 17.1 2.3 16.6-8.2 6-9 3.1-3.8-7.2-3.5-8.6-1.6-8-3.9-8-3.1-5.2-1.8-4-5.4-1-3.9 0.9-6.6-6.5-4.9-10.5-2.9-19.6-1.7-5.5-1.4-5.5 1.3-4 2.4-4.6 4.7-21.7-1.7-22.3-19.6-4.2-21.7 12.1-9.4 8.8-5.4 2-4.4 1-8 2.9-10.9-18.2-3.5-10.7-0.6-7.3-2.9-6.3-6.7-4.1-1.2-1.2 4.3-21.1-1-8.6-3.2-10.1 0.3-7.4 8.3 0 16.5-1.6 8.1-1.4 16.1 6.2 13 13.1 21.4 6.6 10.4 6 8.6 1.1 1.1-4.6 2-5.3 2.9-2.9 2.4-4.8-1.4-10.6 2-10 12 2.4 14.2-0.7 11.8 3.8 15.1 21.9 9.8 9.4 13.4 3.8 14 2.7-0.6 13.4-4.3 12.9 0.8 7.5 4.1 6.7 13.9 8.3 7.5 7.3 29 5 29.4-3.2 10.4-5.8 0.2 11.2 3.4 10.9 1.3 25.3 3.3 7.2 15.4-15.4 9-7.2 20.5-3.4z" id="LKA2451" name="Ampara">
  </path></a>


  <a xlink:title="Batticaloa - Total Cases: <?= $casesPerLocation['Batticaloa'] ?? 0 ?>">
<path d="M969.1 1046.4l-6.6 5.4-6.2-4.9-2.8-2.9-0.6-4.5 1.9-28.9-1.3-9.7-4.8-4.2-1.9-3.9-14.7-21.8-0.8-4.7-3.8-8.1-1.5-4.4 0.2-4.6 1.4-4.1 0.6-4.3-2.2-5.2 5.7 5.5 5.4 12.9 4 5.9 5.1 13.7 15.7 25 7.5 38.9-0.3 8.9z m-23.3 13.5l-20.5 3.4-9 7.2-15.4 15.4-3.3-7.2-1.3-25.3-3.4-10.9-0.2-11.2-10.4 5.8-29.4 3.2-29-5-7.5-7.3-13.9-8.3-4.1-6.7-0.8-7.5 4.3-12.9 0.6-13.4-14-2.7-13.4-3.8-9.8-9.4-15.1-21.9-11.8-3.8-14.2 0.7-12-2.4-6.2-34.5 3.9-34.3 3.3-13 9.9-6.7 12.6-1.8 16.1 2.2 4-0.3-3.6-16.7-7.4-16.1-3.3-16.4 3.6-70.4-2.3-23.3 7.3-2.6 39.7 4.2 10.5 35.9 3.5 20.3-8 11.1-5.1-21-6.7-18.6-3.3 0-0.5 14.1 0.5 4.5-0.6 1.1 0 2.3 0.6 2.7 1.5 1.7 3.8 1.2 0.7 1.4 3.6 9.3 7.8 5.7 7.4-0.6 2.6-9.6 2.7 0 3.6 6.5 3.6 16.1 3.7 6.2 5 5.4 3.1 5.3 5.5 12.6 2.1-2.2 2.9-2.1 1.3-2.1 1.9 4.2-1.9 2.2 2.5 3.8 0.2 2 2.3-1.8 4.5-2.2 2.3-1.8 2.3 5.6-0.9 3.6-1.6 3.6 0.2 5.5 3.1 6 9 6.9 3.2 5.4-2 0.1-4 2.6-2.6 9.8 5.2 15.2 9.1 10.5 9.4-1.7 3 0 3.1 9.3 4.6 7.6 19 19.9 6.2 9.8 1 8.6-9.8 3-4.5-3.1-10.9-13.9-5.6-4.9-7.4-2.7-6 0.5-4.6 4.8-3.2 9.8 5.3 2.5 5.1 0.7 4.4-1.7 3.3-4.5 5.2 2 4.8 2.3 2.8 3.4-0.7 4.8 11.7 11 4.6 5.3 4.9 8-2.3 2.7-0.6 2.5 0.7 3.1 2.2 4.2 2.7-3.4-1.7-6.1 5.2 1.9 10.3 7.6 2.4 3.6 8.2 20.7-0.5 0.9-2.6 11.3 0.5 1.4 2.1 4.3 0.5 1.8-1.8 3-3.1 2.5-1.9 2.7 2.2 4 2.2 2.8 0.8 2.5 1.3 2.6 3.3 2.9-4.8 3.4 0.4 1.6z" id="LKA2452" name="Batticaloa">
  </path></a>


 <a xlink:title="Polonnaruwa - Total Cases: <?= $casesPerLocation['Polonnaruwa'] ?? 0 ?>">
<path d="M742.8 704.6l2.3 23.3-3.6 70.4 3.3 16.4 7.4 16.1 3.6 16.7-4 0.3-16.1-2.2-12.6 1.8-9.9 6.7-3.3 13-3.9 34.3 6.2 34.5-2 10 1.4 10.6-2.4 4.8-2.9 2.9-2 5.3-1.1 4.6-8.6-1.1-10.4-6-21.4-6.6-13-13.1-16.1-6.2-8.1 1.4-16.5 1.6-8.3 0-22.8 4.2-23.7-1.7-1 8-2 7.8-6.7-4.2-3.8-5.3-8.8 8-11.1 4.7-11.7-2.6-4.3-6.2 0.8-8.7-6-27.1 3-12.3 12.8-2.8 0.8-3.3 1.5-3.2 4.3-18 1.2-10.2 4.3-21.1 13.3-13.9-6.5-3.9-7-1.5-5.1-1.4-5.3 2.5-0.2 2.9-2.9 1.8-3.7-1.4-2.4-2.6 0.2-7.9-6.2-6.9-3.8-3.8 0.6-11.8 8.6-12.1-8.8-7 0.7-15.5 3-17.5 6.4-16.8 3.6-18.8 6.5-17.1 17.5-3.3 19.6 0 5.6-3.3 1.9-7.8 3.3-7.9 5.7-6 6.6-1.9 5.2 7.6 7.1 2.8 6.8 5.3 1.8 9.3 5.6 5.6 18.6-1.8 33.5 8.2 7.9 0 7.3 4.2 7.1 5.5 7.8 4 5.6-0.4 3.2 4.4 0.6 5.7-0.1 5.8 1.5 8.4-2.4 5.6-5.1 3.2 1.8 1.3 2.1 0.7 11.1-2.5 6.2-14.7 2.3-4.3 2.8-11.6 3-2.7 3.4-2.5 2.9-5.3 4-4.4 12.4 0z" id="LKA2453" name="Polonnaruwa">
  </path></a>


  <a xlink:title="Trincomalee - Total Cases: <?= $casesPerLocation['Trincomalee'] ?? 0 ?>">
<path d="M789.8 706.2l-39.7-4.2-7.3 2.6-12.4 0-4 4.4-2.9 5.3-3.4 2.5-3 2.7-2.8 11.6-2.3 4.3-6.2 14.7-11.1 2.5-2.1-0.7-1.8-1.3 5.1-3.2 2.4-5.6-1.5-8.4 0.1-5.8-0.6-5.7-3.2-4.4-5.6 0.4-7.8-4-7.1-5.5-7.3-4.2-7.9 0-33.5-8.2-18.6 1.8-5.6-5.6-1.8-9.3-6.8-5.3-7.1-2.8-5.2-7.6-6.6 1.9 9.6-34.3 1-5.6 1.8-5.4 5.5-5.4 6.3-4.1 3.6-6.6-3-6.8-5.1-4-3.9-5-6.3-14.9-11.6-17.4-1.9-10.7-4.7-4.6-3.7-4.3-0.4-9.1 6.9-16-3.4-9.4-8.2-17.9-0.3-19.3 7.5-11 5.2-11.6-4.2-3.2-3.6-4.9-6.8-7.4-19.2-13.5-11.3-6.4-12.9-0.3-12.5 5.1 2-7.8 3.6-6.4 17.4-8.1 20.4-2.7 8.5-2.4 7.6-4.6 8.5-2.4 7-3.1 0.2 7 5.2 3.7-4.7 4.5-4.2 4.9 7 5.5 7.4-0.5 6.2-5.8 4.5-8 3-7.3 16 19.4 14.1 24.4 5.8 6 8.1 2.4 6.5 5.2 9.5 23.1 4.9 5.3 10.9 4.9 5.5 11.7 6.2 23.3 1.1-4.3 1.4-1.6 2.4 0.5 4.3 2.4-1.2 4.3 12.3 13.4 4 6.7 0 8.1-3.2 3.2-4.6 2.1-4.2 4.9 6.5-1.7 2.6-1.3 9.5 20.9 1.4 10.9-11 1.7 2.3-7.2-3-5.7-4.8-0.9-3.5 7.7 1.2 6 3.1 4.2 1.7 4.6-3.3 6.8-7.4-5.7-7.6-4.7-7.8-1.8-7.3 3.1-5.7 7.7 2 4.1 6.8-1.1 9.2-7.6 6.3 6.7 5.7 8.1 7 6.8 9.7 2.8 20.3-0.4 6.8-4.4-4.5-10.5 11.6-5.3 4.6-1.4 4.9 0.3 5.4 3.1 4.9 5.3 3.7 6.1 3.1 17.9 6.9 23 0.4 12-5.6-3.9-5.8-11.9-5.2-2.5-0.2 3.2 2.3 15.7 2.4 5.5 5.7 2.7 6 0 4.8 2.1 2.8 17.1 3.9 13.8 1 7.3z" id="LKA2454" name="Trincomalee">
  </path></a>


 <a xlink:title="Anuradhapura - Total Cases: <?= $casesPerLocation['Anuradhapura'] ?? 0 ?>">
 <path d="M572.2 669.1l-5.7 6-3.3 7.9-1.9 7.8-5.6 3.3-19.6 0-17.5 3.3-6.5 17.1-3.6 18.8-6.4 16.8-3 17.5-0.7 15.5 8.8 7-8.6 12.1-0.6 11.8-9.3 3.8-8.4 4.2-5.7 5.1-8.6 9.1-2.6 1.8-3.3-0.9-4.4 0-2.5 7.1 0.1 8.3-4.2 6.5-5.7 5.9 1 2 0.3 3.2-2.9 1.7-3.1 2.1-3.2 5.4-6.6 4.6-5.3-3.5-7.1-0.3-7.8 9.5-14.9 5.5-9.4 7-11.2-10.9 1.7-15.4-2.2-10.6-4.2-10.3-1.1-7.5-3.7-6.2-7.1-0.5-6.2-2.6-0.8-7.7 0.6-8.1-1.3-9.6 0.8-5.6-0.1-5.6-6.7-5.5-8.3 0.3-8-4.9-7.2-7.3-13.3-10.9-14.6-5.6-8.2-1.2-6.6-4.8-8.5-3.4-8.7-2.2-40.7-18.7-9.6-5.4-4.9-6.4-6.5-5.2-9 0.3-7.9-5.9-7.4 3.4-9.2 0-2.7-7.9-11-45-6.5-12.6 4.8-11 7.4-3.5 2.1-4 0.6-3.1 13.7-11.3 8.1-17.1-2.5-18.5 3.6 1.8 4.3 0.5 0.9-41.4-3.5-26.2 19.6 8.1 21.7 0 43-11.3 0.2 14.5 4.5 12.6 6.7 2.3 6.5 3 2.9 5.5 1.6 6.1 4.7 9.5 9.3 5 4.6 1.2 4.3 0.3 6.8-12.2 7.8-3.5 8.3-19.2 17.4-22.7 13.4-6.2 8.2 4.4 7.5 5.3 14-0.1 11.8-9 11.2-10.1 9.6-11.3 5.4-8.2 6.2-7.6 10.5-8.4-3.7-11.6-8.1-10.5-11.5-4-0.9-9.8 32.9-1.2 12.8-9 11.6-3.3 12.2-2.3 12.5-5.1 12.9 0.3 11.3 6.4 19.2 13.5 6.8 7.4 3.6 4.9 4.2 3.2-5.2 11.6-7.5 11 0.3 19.3 8.2 17.9 3.4 9.4-6.9 16 0.4 9.1 3.7 4.3 4.7 4.6 1.9 10.7 11.6 17.4 6.3 14.9 3.9 5 5.1 4 3 6.8-3.6 6.6-6.3 4.1-5.5 5.4-1.8 5.4-1 5.6-9.6 34.3z" id="LKA2455" name="Anuradhapura">
  </path></a>
 
 
 <a xlink:title="Vavuniya - Total Cases: <?= $casesPerLocation['Vavuniya'] ?? 0 ?>">
 <path d="M502.2 400.9l-3.6 6.4-2 7.8-12.2 2.3-11.6 3.3-12.8 9-32.9 1.2 0.9 9.8 11.5 4 8.1 10.5 3.7 11.6-10.5 8.4-6.2 7.6-5.4 8.2-9.6 11.3-11.2 10.1-11.8 9-14 0.1-7.5-5.3-8.2-4.4-13.4 6.2-17.4 22.7-8.3 19.2-7.8 3.5-6.8 12.2-4.3-0.3-4.6-1.2-9.3-5-4.7-9.5-1.6-6.1-2.9-5.5-6.5-3-6.7-2.3-4.5-12.6-0.2-14.5-16.7-21.6-10.5-8 0.1-5.9 1.7-6.6 11.4-1.1 6.5-15 12.4-6.9 16 1.8 24.9-3.1 23.7-8.8 2.3-15.6-6.7-17.2-6.9-11-12-5.6 20.5-13 12.4-10 7.9-12-0.6-7.5-1.6-7.7 0.1-4-0.5-3.6-6.5-1.1-3.4-4.7 1.1-6.5 8-0.7 8.5 0.5 15.2-0.5 11.1 7.1 6.8 10.2 10.9-4.9 7.5-6.8 4.4-2.1 4.2-2.4 0.8-2.3 1-2.2 14.4-0.4 13.7 5.3 1.6 14.3 11.9 1.3 5.1 9.1-4.2 6.3-0.8 6.1 6.9-1.7 6.5-4.4 13.9 2.1 14.1 8.6 5.3 7.2-8.1 30.3z" id="LKA2456" name="Vavuniya">
  </path></a>
 

 <a xlink:title="Mannar - Total Cases: <?= $casesPerLocation['Mannar'] ?? 0 ?>">
 <path d="M5.4 342.4l-4.4 0.2 5.5-3.5 7.9 0.5 1.4 1.6-9 0-1.4 1.2z m106.5 6.2l15.1 14.6-7.2-1.5-12.7-6.3-7.5-1.3 20.5 23.4 3.9 7.1-10.5-1.3-6.9-5.4-4.8-5.8-3.6-2.8-4.5-2.3-18.2-16.3-18.1-8.1-10.1-2.7-9.7-1.1-4.9-1.9-2.2-4.3 1.4-4.3 5.7-2 19.8 0 17.7 4.6 18.9 7.2 17.9 10.5z m136.7-82.1l0.5 15.2 2.7 14.6 8.2 13.1 0.9 3.1 0.5 3.3-0.4 6.9-1.6 6.4 1 10.6-0.7 9.1-9.7 3.3-2 4.5-1.4 4.9-2.4 5.1-1.5 5.2 2.1 4 2 3-5.6 16.1 72.9-3.9 12 5.6 6.9 11 6.7 17.2-2.3 15.6-23.7 8.8-24.9 3.1-16-1.8-12.4 6.9-6.5 15-11.4 1.1-1.7 6.6-0.1 5.9 10.5 8 16.7 21.6-43 11.3-21.7 0-19.6-8.1 3.5 26.2-0.9 41.4-4.3-0.5-3.6-1.8-11.8-6.6-11.3-4.8-13.1-1.3-11.6-4.4-5.1-3 1.6-1.7 5.1-15.9 1-0.9 1-4 4.1-9 3.9-43.5-10.7-27.7 0.9-4.9 0.8-32.1-1.1-10.5-1.3-5.2-2.3-4-1.8-4.5 4.1-2.2 5.9-1.1 4-1.2 25.6-23.2 13.4-6.6 5.5-4.9 3-10.9 5.3-11.2 3-15.6 14.2-36.9 1.8-7.4 3.3 0 15.2-1.3 9.3-4.8 8.4-6.3z" id="LKA2457" name="Mannar">
  </path></a>
 

 <a xlink:title="Mullaitivu - Total Cases: <?= $casesPerLocation['Mullaitivu'] ?? 0 ?>">
 <path d="M571.6 377.6l-7 3.1-8.5 2.4-7.6 4.6-8.5 2.4-20.4 2.7-17.4 8.1 8.1-30.3-5.3-7.2-14.1-8.6-13.9-2.1-6.5 4.4-6.9 1.7 0.8-6.1 4.2-6.3-5.1-9.1-11.9-1.3-1.6-14.3-13.7-5.3-14.4 0.4-1 2.2-0.8 2.3-4.2 2.4-4.4 2.1-7.5 6.8-10.9 4.9-6.8-10.2-11.1-7.1-15.2 0.5-8.5-0.5-8 0.7-1.1 6.5 3.4 4.7 6.5 1.1 0.5 3.6-0.1 4 1.6 7.7 0.6 7.5-7.9 12-12.4 10-20.5 13-72.9 3.9 5.6-16.1-2-3-2.1-4 1.5-5.2 2.4-5.1 1.4-4.9 2-4.5 9.7-3.3 0.7-9.1-1-10.6 1.6-6.4 0.4-6.9-0.5-3.3-0.9-3.1-8.2-13.1-2.7-14.6-0.5-15.2 11.7 1.4-1.2-12.4 11.5-15 34-4 12.1-0.2 11.9 2.2 11.7-1.1 7.5-19.4 6-0.2 20.1 1 11.2-0.7 7.4-4 6.2-20.3 2.1-0.7 3.3 4.2 8.7 7.4 10.1 5.6-1.2-10.2 1.3-10.2 9.4-7.4 1-7.5 2.1-2.1 2.3-1.6 2.7-2.3 52.3 42.6 3.5 6 5 6.2 9.5 9 6 7.8-5.4 2.9-3.4-1.6-4.7-6-2.5-1.3-8-1.3-3.5 1 2.3 4.7 22.9 21.5 9 4.9-3.5-5.5-2.2-5.1 1.1-3.7 6.1-1.5 2.9 2 4.7 13.8 4.2 8.6 16.8 33.7-12.7-4.8-5.8-0.1-2.5 6.4 3.4 1.6 7.2 1.2 6.4 4.1 1 10.2 3 0 1.5-2.6 1.3-1.1 1.6-0.7 2-1.4 2.5 10 6.2 14.3 8.4 12.9 8.5 5.6 1.7 1.3 0 3.2-2.1 3.1-4.1 1.5-1.2-1.3-4.8-7.8-5.3-2.8-12.1-3.2-7.1-3.2 5.1 7 15.9 15 0 1.5z" id="LKA2458" name="Mullaitivu">
  </path></a>
 

 <a xlink:title="Jaffna - Total Cases: <?= $casesPerLocation['Jaffna'] ?? 0 ?>">
 <path d="M37.9 155.5l-11.2 0.6-10.3-3.4-4.5-5.7 0-18.4 1.3-4.7 2.9 0.6 3 3.8 1.8 4.8 7.6 2.4 9.1 0.7 2.3 1.6 5.1 10.9-7.1 6.8z m49.5-51.2l3.2 2.7 3.6-0.3 1.9-1.6-2.6-4.5 0.2-2.5 3.8 0 4.4 3.4 1.7 6.1-1.2 9.4-1.3 2.2-4 0.5-14.5-2.8-2.9-4.1 0.6-16.7 1.7-2.4 2.3 2.4 3.1 8.2z m33.6-35.7l1.9 0.4 8.5-0.4 1.5 1.3 0.6 6.7 1.1 2.8 5 3.2 6.9 2.9 5.7 3.3 2 4.2-3.1 3.2-5.8 0-6.3-1.9-4.4-2.8-3.1-0.8-8 4.7-5.6 0.7-6.8-5-6.8-10.3-10.8-21.4 4.9-7.7 1.1-9.8 2.8-8 9.6-2.1 5.2 1.6 0.5 3.8-1.8 5.2-1.2 6.1 0.2 6.2 0.7 5.2 1.9 4.5 3.6 4.2z m171.3-0.9l-6 12.9-9.3 16.4-22.7-10-8.2-4.8-5.5-0.1 1.1 10.9 3 3.2 4.8 3.7 2.8 4.4-2.8 5.7-3.4 1.1-3.2-1.8-3-2.5-8.5-4.4-16.5-14.5-9.4-4.1 4.8 5.4 8.7 7.6 4.8 5.4-10.7-2.1-10.6-4.4-21.2-11.9-16.9-13.4-10.1-3.5-4.8-3.1-3.6-1.5-0.5 3.2-4.9-3.3-1.8-4.4-0.9-5.1-1.7-5.9-2.9-4.9-6.3-8.3-2.9-5.1 9.6-4.8 17.4-16.2 7.8-3.5 34.6 3 18-2 6.6 0.8 2.6 6-0.5 9.4 1.3 3.2 3.8 1.3 3.7 0.5 10.5 2.7 2.3 1.2 1.9 4 4.8-0.2 5.2-1.6 3.6-0.5 4.9 2.9 30.2 33z m148.2 101.3l-2.7 2.3-2.3 1.6-30.1-20.7-10.3-4.9-9.2-2-2.7-1.2-8-6.1-3-1.8-3-0.5-3.7 0.2-0.8-4.5-5.6-17.1 1 0.5 0-3.4-16.1-8.1-38.8-32-31.8-36.9-16.2-8.7-25.3-6-6.7-4.9-0.9-6.8 9.3-4 12.2-2.1 18.3-0.9 8.8 1.7 6.1 4.3 4.1 14.7 4.1 6.1 57.8 68.3 8.5 6.3 17.3 9.9 69.7 56.7z" id="LKA2459" name="Jaffna">
  </path></a>
 

 <a xlink:title="Kilinochchi - Total Cases: <?= $casesPerLocation['Kilinochchi'] ?? 0 ?>">
 <path d="M157.4 246.8l-2.3 1.6-3.7-6.9 2.6-1.5 2.6-3.8 2.9 2.3 1.2 2.1-0.6 3-2.7 3.2z m278.1-73.9l-2.1 2.1-1 7.5-9.4 7.4-1.3 10.2 1.2 10.2-10.1-5.6-8.7-7.4-3.3-4.2-2.1 0.7-6.2 20.3-7.4 4-11.2 0.7-20.1-1-6 0.2-7.5 19.4-11.7 1.1-11.9-2.2-12.1 0.2-34 4-11.5 15 1.2 12.4-11.7-1.4-8.4 6.3-9.3 4.8-15.2 1.3-3.3 0 2.8-10.9 0-26 0.9-3.8-0.8-2.6-5.2-1-12.2-6.4-4.7-4.4-3.5-10-2.2-10.5-0.2-6 5.3-5.6 9.8-4.9 10.9-3.4 8.9-1.4 4-2 9.7-13 2.8-2.1 3.2-2 4-1.4 5.1-0.9-4.2-7.8-5.1-6.8-6.5-6.5-8.6-6.4-32.7-19.3-6.6-8.2 14.3 0.4 13.5 5.5 26.6 15.5 25.3 6.4 6.7 4.3 10.5 9.2 2.6 4.9-5.4 2.7 1.2 3.1 1.6 3-2.8 3.1 9.3 6.2 21.8-5.3 39.9-15.9 10.7 1 23.6 6.5 27.8 12.6 21 4.1z m-76.4-58.6l5.6 17.1 0.8 4.5-5.4 0.3-3.5 1.3-1.4 2.4-1.8 0.9-5.8-4.4-2.4-0.4-14.3 0.4-4.1-1.2-31.4-27.3-13.5-8.8-4.9-2.1 9.3-16.4 6-12.9 21.2 23.1 13.7 8.7 31.9 14.8z" id="LKA2460" name="Kilinochchi">
  </path></a>
 

 <a xlink:title="Kurunegala - Total Cases: <?= $casesPerLocation['Kurunegala'] ?? 0 ?>">
 <path d="M384.4 902.1l-2 7.2 1.1 7.9 3.9 2.2 3.4 0.9 3.1 6.9 4.4 7.4 3 7.7 0.1 7.7 1.6 1.1 2.3 3.2 1.3 14.9 2.4 13.8 8.1 7.9-0.2 5.2-1.3 5.3 0.1 4.1-1.6 3.8-6.2 5.7-1.1 9.4 4.4 9 2.7 4.4 2.2 4.7 1.3 5.6-0.9 5.4-2.5 3.3-0.2 4.6-5.3 2.5-5.2 1.4 3.5 5.6 2.7 6.1-4.8 2.2-6.3-1.1-6.5 3.7 0.7 4.9-0.7 4.7-7.5-0.6-6.9-4.9-6.3 0-1.4 8.9-1.9 2.4-1.5 2.6 0.3 3 0.8 2-8 2.4-9.1-1-4.1-8.6-6.4-6.7-10.6-1.4-9.7 3.8-1.5 8.5 0.5 9.1-1.5 5.3-3.2 4.3-4.7 0.2-21.6 4.8-10.3 4.9-9.7 6.9-9.2 8.2-9 5.2-7.7-5.6-11-12.6-2.5-3.7-1.3-3.8-4-4.4-12.3 2.2-10.8 7.7-12.8 3.8-12.2-8.6-10.6 0.4-16.8 13.3-9.4 3.7-1.1-26.6-16.3-87.8-0.8-15.4 0.9-15.3 4.7-12.2 6.7-11.4 1.6-5 3.2-4.4 6.4-1.7 5.2-2.9-2.4-4-5.5-1.4 2.3-5.8 3-5.2 5.7-1.8 6.3-0.5 4.8-2 3.1-4.1-1.6-4.7-2.4-4.9 1.4-11.8 4.2-10.8 0.8-5.3 1.6-4.8 5.7-3.1 5.4-3.7 1.3-4.8 2.1-4.5 9.4-4.9 1.7-4.1 0.7-4.5 2.7-6.2 6.5-3-0.8 1.5 2.8-0.8 3.4-3.6 0.1-5.4 2.5-4.3 9.2 5.2 5.6-4.3-5.3-9.9 2.5-5.3 3.4-5 0.4-10.2-0.3-12 1.7-5.8 1.1-5.3-5.3-3.4-6-2.1-4.2-8-1.6-8.7-4.7-17.7 0.2-9-0.8-8.5 9.6 5.4 40.7 18.7 8.7 2.2 8.5 3.4 6.6 4.8 8.2 1.2 14.6 5.6 13.3 10.9 7.2 7.3 8 4.9 8.3-0.3 6.7 5.5 0.1 5.6-0.8 5.6 1.3 9.6-0.6 8.1 0.8 7.7 6.2 2.6 7.1 0.5 3.7 6.2 1.1 7.5 4.2 10.3 2.2 10.6-1.7 15.4 11.2 10.9z" id="LKA2461" name="Kurunegala">
  </path></a>
 

 <a xlink:title="Puttalam - Total Cases: <?= $casesPerLocation['Puttalam'] ?? 0 ?>">
 <path d="M178.3 584.1l2.5 18.5-8.1 17.1-13.7 11.3-0.6 3.1-2.1 4-7.4 3.5-4.8 11 6.5 12.6 11 45 2.7 7.9 9.2 0 7.4-3.4 7.9 5.9 9-0.3 6.5 5.2 4.9 6.4 0.8 8.5-0.2 9 4.7 17.7 1.6 8.7 4.2 8 6 2.1 5.3 3.4-1.1 5.3-1.7 5.8 0.3 12-0.4 10.2-3.4 5-2.5 5.3 5.3 9.9-5.6 4.3-9.2-5.2-2.5 4.3-0.1 5.4-3.4 3.6-2.8 0.8 0.8-1.5-6.5 3-2.7 6.2-0.7 4.5-1.7 4.1-9.4 4.9-2.1 4.5-1.3 4.8-5.4 3.7-5.7 3.1-1.6 4.8-0.8 5.3-4.2 10.8-1.4 11.8 2.4 4.9 1.6 4.7-3.1 4.1-4.8 2-6.3 0.5-5.7 1.8-3 5.2-2.3 5.8 5.5 1.4 2.4 4-5.2 2.9-6.4 1.7-3.2 4.4-1.6 5-6.7 11.4-4.7 12.2-0.9 15.3 0.8 15.4 16.3 87.8 1.1 26.6-7.7-3-6.5 4-5.2-0.6-3.4-3.9-8.6 1.1-8.2 2.2-10.5-0.5-19.1-139.9-2.7-5.8 1.8-1.9 1.4-0.2 3.2 2.1 0.7-7.7 2.2-8.9 1.1-8.6-2.5-6.7-3.4-6.2-1.3-8.1 0.1-16.5-10.2-50-1.2-5.8-5.2-10.9-4.5-23.1-7.2-18.2-11.1-50.4 0-14.3 1.8 0.9 1.2 2.2 1.6-8.3-2.4-26.4-2.2-8 7.2-4.8 6.9-8.9 5-10.1 1.9-8.5 2.1-5.5 13-20.7-6.7 15.9-8.4 14.9 2.3 4.5 3.3 3.3 4.3 1.7 5.2-0.1-4.3 12.2-4.4 8.9-2 1.5-2 0.2-1.6 1.3-0.8 4.7 0.4 10.6-0.4 3.3-7.4 23.9 0.8 13.3 10 11.8-8.9 18.6 14.1 10.2 20.5 1.6 10.4-7.4-2-7.9-4.6-8.6-5.5-6.9-4.4-2.9-1.3-4.8 14.9-28.4-0.6-5.2-1.9-3.8-2.2-3.2-1.4-3.3-0.3-5.4 0.5-9.3-0.2-3.9-1.4-3.9-1.6-1.5-0.9-1.8 0.9-5 2.1-4.2 5.8-7.6 1.2-5 0.9-9.3 4.1-18.7 4.2-43.7 2.7-4.9 3-2.5 2.2-2.9 0.9-6.6 0-18.6 2.6-9.1 6-5.9 7.1-4.8 4.1-4.5 5.1 3 11.6 4.4 13.1 1.3 11.3 4.8 11.8 6.6z" id="LKA2462" name="Puttalam">
  </path></a>
 

 <a xlink:title="Ratnapura - Total Cases: <?= $casesPerLocation['Ratnapura'] ?? 0 ?>">
 <path d="M383 1340.2l-0.3 7.3 3 3.3-3.3 3.2-1.6 4.5 9 7 10.8 0.9 22.9 5.1 24.3 3.3 9.3-1.5 11-0.9 14.6 0.5 13.8-1.9 25-13.1 1.2 16.4 3.3-1.6 3.2-1.3 6.1 6.6 7.6 2.4-1.1 4.2-1.4 3.4-1.7 1.7-11.9 5.5-2.1 5.8 4.6 7.4 6.8 5.5 10.1 1.9 10.6-4.3 9-6.7 8.1-0.4-7.3 11-4.5 11.5-8.1 9.7-4.2 9.9-4.4 19.2-8.3 11.9-6.7 12.7 1.3 7.3 2.8 7 0.4 27.5 4.9 9.5 6.3 8.3 8.4 4.6 8.1 5.7 4.2 8.1 3.5 10.3 8.1 9.1 4.1 11.3-2.2 7.9-9.3-3.1-16.2-3.3-5.2-6-6.7-5.3-8.4 0.8-8.4 2.1-8.5-1.4-32.4-11.8-25.3-4.8 0-4.2 2.4-2.4-5.7-4.2 0.4-4.2-5-6.1-10.6 1.8-7.9-1.4 2.9-8-6.4-11.7-19.4 2.5-7.5 0.1-3.1 7.2-8.7 2-8.6 1.2-3.8-5.5-7.1 0.3-13.7-6.8-6.6-0.2-7.5-3-6-5.1-5.4-5.6-15.9-27.8-18.7-26.3-2.3-7.6 6.6-2.5-6.4-12.3-9.8-9-6.2-2.4-4.9-4.6-2.6-12.9-13.5-13.1-4.2-8.9-2.9-8.4 0.7-7.1-7.8-20.4-1.4-9.2 9.7-8.7-10.9-11.6 2.3-5.3 1.9-6.2 4.8-7.6 5.7-6.9 6.8-3.1 18.3 18.6 5.5 7 6.7 5.3 3.2-1.7 4.5-1 3.2 3.8 2.1 4.4 11.1 2.4 13.4-7.6 5.5-0.6 6.7 0.3 9.5 5.4 12.2 4.1 8.7 1.2 8.8-0.3z" id="LKA2463" name="Ratnapura">
  </path></a>
 

 <a xlink:title="Galle - Total Cases: <?= $casesPerLocation['Galle'] ?? 0 ?>">
 <path d="M332.6 1520.8l5.4 5.6 6 5.1 7.5 3 6.6 0.2 13.7 6.8 7.1-0.3 3.8 5.5-9.1 2.8-5.9 6 5.2 7.9 6.8 6.9-2.6 12.6-13.7-3.2-8.4-7.9-9.4-7.1-7.3-2.1-7 1.9 4.3 8.2 8.8 5.6 9.3 13.4 3.3 12.7-7.7 9.5-15.5-2.7 4.6 5.5 2.1 7.2-3.2 9.2-4 8.6 2.8 8.7 6.9 6.4 7.9 5.4 6.9 6.3-6 7.2-7 7.1-6.1 2.5-2.6 4.2 1.3 4.6 3.5 1.8 7.8 3.3-2.7 5.4-8 3-4.9 8.6 0.1 4.9 0.8 5.1-2.8-0.4-2.1-1-1.5-2.1-1.9-2-3.4-1-2.1 0.7-1.6 1.5-1.7 1.2-2.3-0.1-1.5-1.3-2.8-4-1.8-1-3.1-1.1-18.9-6.8-13.2-2.8-9.6-7.7-6.5-3.1-3.2 3.3-8.2-6.7-36-38.2-3-2.3-1.3-1.7-0.6-1.8 0.2-3.8-1.2-2-5.5-7.2-20.3-43.1-0.9-4.1 0.2-7.5-0.7-2.2-3.7-7.7-3.7-20.7-8.2-14.6-5.1-20.9 3.1 0.7 2.4 3.4 2.5 2.3 2.9-1.9 4.5-1.8 3.2 3.1 2.2 3.8 16.3 7.5 8 1.7 8.8 3.8 7.1 6.3 7.4 4.9 19.1 3.7 12.1-6.8 13.4-1.2 13 10.1 6.8 6.6 6.9 5.5 0.9-8.9-3.3-9.7 0-9.5 8.1-3.6 15.5-9.6 15.7-3.6z" id="LKA2464" name="Galle">
  </path></a>
 

 <a xlink:title="Hambantota - Total Cases: <?= $casesPerLocation['Hambantota'] ?? 0 ?>">
 <path d="M920.3 1483.2l-13.6 21.4-13.8 14-25.7 18.2-8.3 2.5-11.3 6-82 64.6-16.4 8.9-53.2 19-0.8-6.8-3.1-2.5-3.5 0.9-1.7 3.6-0.9 7.5-2.4 2.8-3.8 1-5.2 2.3-9.6 5.8-9.6 4.2-46 9.9-22.3 7.7-24.4 4.5-11.1 4.3-6.7 9.4-12-2.4-11.5 4.5-34.1 25.2-1 1.2-2.5-1.4-11.2-5-5.2-8.2 3.1-1.7 0.2-3.7-3.7-2.1-4.3-0.4-6.2-4-1-7.1 14.3-6.1-4.9-17.1 4.1-3.7 1.6-3.9-4.9-1.1-5.2 0.9-7.2-3.9-1.5-7.6 2.6-4 2.1-4.6-2.4-2.4-3.9 0.7-8.4-3.2-7.6-5.4 5.4-19.1 16.9-12.9-3-7 3-7.8-0.7-3.4 4.1-1.6 25.3 4.8 32.4 11.8 8.5 1.4 8.4-2.1 8.4-0.8 6.7 5.3 5.2 6 16.2 3.3 9.3 3.1 2.2-7.9-4.1-11.3-8.1-9.1 10.8-7.1 11.2-6 12.5-4.1 9.5-7.3-4.2-9.9 2.1-10.1 5.6 0 6-0.4 3.6-5.2 0-5.9 5.4 3.9 4.2-4.8 11.1-0.1 10.9 1.4 7.6 2.7 3.4 8.2 4.3 0.6 4.8-0.2 4-2.9 5.6-0.6 8.2 10.8 6.8 11.5 11 4.6 12.1-6.6 4.4-4.4 6.7-2.8 12.9-3.4 26.3-10.2 4.8-3.5 1.1 1.3 3.9 0.5 11.8-4.3 12.3 2.8 5.7-9.4 0-3.9-0.2-3.6 2-2.8 1.9-3.1-2.3-6-0.2-7.5 8.8-7 10.5-4.7 8-7.8 9.3-7.1 11.9-2.2 7.9-9.2 13.2 16.2 5.1 0.4 5.6 0.8 7.4 8.4 10.7 3.3 4 1.3z" id="LKA2465" name="Hambantota">
  </path></a>
 

 <a xlink:title="Matara - Total Cases: <?= $casesPerLocation['Matara'] ?? 0 ?>">
 <path d="M459.9 1574.1l-4.1 1.6 0.7 3.4-3 7.8 3 7-16.9 12.9-5.4 19.1 7.6 5.4 8.4 3.2 3.9-0.7 2.4 2.4-2.1 4.6-2.6 4 1.5 7.6 7.2 3.9 5.2-0.9 4.9 1.1-1.6 3.9-4.1 3.7 4.9 17.1-14.3 6.1 1 7.1 6.2 4 4.3 0.4 3.7 2.1-0.2 3.7-3.1 1.7 5.2 8.2 11.2 5 2.5 1.4-6.8 7.9-18.1-1.1-7.6 1.1-5.9 2.3-6 3.4-10.8 8.1-6.2 1.4-7.3-2.8-7.8-4.1-7.5-2.2-25.6 3-7.3-1.4-3.7-3.7-2.3-4.8-3.3-5-7.5 4.4-6.7 0.5-11.9-1.7-0.8-5.1-0.1-4.9 4.9-8.6 8-3 2.7-5.4-7.8-3.3-3.5-1.8-1.3-4.6 2.6-4.2 6.1-2.5 7-7.1 6-7.2-6.9-6.3-7.9-5.4-6.9-6.4-2.8-8.7 4-8.6 3.2-9.2-2.1-7.2-4.6-5.5 15.5 2.7 7.7-9.5-3.3-12.7-9.3-13.4-8.8-5.6-4.3-8.2 7-1.9 7.3 2.1 9.4 7.1 8.4 7.9 13.7 3.2 2.6-12.6-6.8-6.9-5.2-7.9 5.9-6 9.1-2.8 8.6-1.2 8.7-2 3.1-7.2 7.5-0.1 19.4-2.5 6.4 11.7-2.9 8 7.9 1.4 10.6-1.8 5 6.1-0.4 4.2 5.7 4.2-2.4 2.4 0 4.2z" id="LKA2466" name="Matara">
  </path></a>
 

 <a xlink:title="Badulla - Total Cases: <?= $casesPerLocation['Badulla'] ?? 0 ?>">
 <path d="M725.2 1142l-17.2 4.1 0 9.2-3.4 8.4-12.1 15.3-4 6.9-7.4 3.1-6.1-6.7-7.3-0.9-5.2 7.9-1.3 9 5.5 7.1 6.8 6.7 4.4 9.2 5.2 5.4 16.3-4.3 4.7 6.1 2.4 2.1 3.3 4 2.3 6 1.2 6.2 0 8.3-2.1 8-1.6 12.3-2.4 4.9-3 4.6-1.1 6.9-2.3 6.4-5.7 1.3-4.4-1.9-2.7 2.7-2 3.5-4.4 5.7-5.6 4.5-11.3 3.1-9.5 5.3 10.8 15-12.8 4-3.8 7.4-15 1.3-1.1 9.4 0.9 9.5-3.7 8.1 1.7 5.8 7.7 2.1 0.6 7.8-6.6 10.2-0.9 6.6 0.1 6.7 4.1 12.4 6.6 10.4-9.2 3.3-1.4 10.5-4.8-2.3-4.7-3.1-6.3 9.8-1.7 11.8-3.8-6.2-5.1-6.3-2-14.2-3-1.8-3.1-1.5-3-9.7-4.1-9.2-3.5-0.7-3.4-1.8-2.1-7.7-3.5-5.3-5.2-0.3-8.1 0.4-9 6.7-10.6 4.3-10.1-1.9-6.8-5.5-4.6-7.4 2.1-5.8 11.9-5.5 1.7-1.7 1.4-3.4 1.1-4.2-7.6-2.4-6.1-6.6-3.2 1.3-3.3 1.6-1.2-16.4 8.4-2.1 4.5-6.4-4.1-2-4-2.6 6.5-10.6-1.8-3-2.2-2.8-2.5-6.8-3-6.2-14.1-7.1-0.5-7.1 8-0.4 8.3 0.5 5.9-6.9 2.2-8.8 7-6.4 7.9-3.8 16.8-3.7 9.8-14.6 2-8.7 4-7.8 3.6-3.3 2.9-3.7 1.4-3.3-0.6-3.1-2.4-7.9 2.1-4.1 3-3.7-1.6-2.3-2-2.4-0.9-3.7 1-4.1-3.3-11.1 0.3-8 5.6-3.4 9.5-2.7 11.9-11.1 0.8-14.5-9.7-32.2-3.9-67.3-2.1-36.5 4.2-20.9 1.2 1.2 6.7 4.1 2.9 6.3 0.6 7.3 3.5 10.7 10.9 18.2 8-2.9 4.4-1 5.4-2 9.4-8.8 21.7-12.1 19.6 4.2 1.7 22.3-4.7 21.7-2.4 4.6-1.3 4 1.4 5.5 1.7 5.5 2.9 19.6 4.9 10.5 6.6 6.5 3.9-0.9 5.4 1 1.8 4 3.1 5.2 3.9 8 1.6 8z" id="LKA2467" name="Badulla">
  </path></a>
 

 <a xlink:title="Monaragala - Total Cases: <?= $casesPerLocation['Monaragala'] ?? 0 ?>">
 <path d="M874.3 1452.8l-7.9 9.2-11.9 2.2-9.3 7.1-8 7.8-10.5 4.7-8.8 7 0.2 7.5 2.3 6-1.9 3.1-2 2.8 0.2 3.6 0 3.9-5.7 9.4-12.3-2.8-11.8 4.3-3.9-0.5-1.1-1.3-4.8 3.5-26.3 10.2-12.9 3.4-6.7 2.8-4.4 4.4-12.1 6.6-11-4.6-6.8-11.5-8.2-10.8-5.6 0.6-4 2.9-4.8 0.2-4.3-0.6-3.4-8.2-7.6-2.7-10.9-1.4-11.1 0.1-4.2 4.8-5.4-3.9 0 5.9-3.6 5.2-6 0.4-5.6 0-2.1 10.1 4.2 9.9-9.5 7.3-12.5 4.1-11.2 6-10.8 7.1-3.5-10.3-4.2-8.1-8.1-5.7-8.4-4.6-6.3-8.3-4.9-9.5-0.4-27.5-2.8-7-1.3-7.3 6.7-12.7 8.3-11.9 4.4-19.2 4.2-9.9 8.1-9.7 4.5-11.5 7.3-11 5.2 0.3 3.5 5.3 2.1 7.7 3.4 1.8 3.5 0.7 4.1 9.2 3 9.7 3.1 1.5 3 1.8 2 14.2 5.1 6.3 3.8 6.2 1.7-11.8 6.3-9.8 4.7 3.1 4.8 2.3 1.4-10.5 9.2-3.3-6.6-10.4-4.1-12.4-0.1-6.7 0.9-6.6 6.6-10.2-0.6-7.8-7.7-2.1-1.7-5.8 3.7-8.1-0.9-9.5 1.1-9.4 15-1.3 3.8-7.4 12.8-4-10.8-15 9.5-5.3 11.3-3.1 5.6-4.5 4.4-5.7 2-3.5 2.7-2.7 4.4 1.9 5.7-1.3 2.3-6.4 1.1-6.9 3-4.6 2.4-4.9 1.6-12.3 2.1-8 0-8.3-1.2-6.2-2.3-6-3.3-4-2.4-2.1-4.7-6.1-16.3 4.3-5.2-5.4-4.4-9.2-6.8-6.7-5.5-7.1 1.3-9 5.2-7.9 7.3 0.9 6.1 6.7 7.4-3.1 4-6.9 12.1-15.3 3.4-8.4 0-9.2 17.2-4.1 3.5 8.6 3.8 7.2 9-3.1 8.2-6-2.3-16.6-0.1-17.1 11 0.5 8.9-5 2.1-3.1 3.1-3.7 2-4.4-0.5-5.3-2.4-5.2-0.1-5.8 4.5-0.4 6.1-1.6 3-4.8 1.7-4.1 4.8-2.2 5.4-1.9 11-5.9 8.7 2.4-6.5 10.1 2.8 1.7 2.9 0.5-0.9 6 5.3 23.5-0.7 10.6 1.8 8.6 9.8 8.5 6.1 10.8 1.3 9.6 9.6 13.3-7.2 5.7-9.2 10.9-5.1 13.8 5.7 10.4 1.7 6.9 3.5 6.1 3.5 1.6 3.3 0 2.8 1.6 2.2 2.1 15.8 4 13.1 7.9-0.9 8.4-2.1 8.8 3.1 8.5 0 8.6 5.3 7.7 2.2 8.8-11.5 163.3z" id="LKA2468" name="Monaragala">
  </path></a>
 

 <a xlink:title="Kegalle - Total Cases: <?= $casesPerLocation['Kegalle'] ?? 0 ?>">
 <path d="M350.4 1106.2l5.4 13.6 19.1 16.8-0.7 8.6 3.7 2.6 11.3 6.3 5.3 6.5-1.1 7.9 0.1 6.6 6.4 6.3 5.2 6.5-2.5 5.9-3.5 5.4-4.8 1.2-4.8 0.3-7 7.5-15.3 2.5-5 4.7 6.7 16 3.2 5.6-3.2 6.8-0.2 8.9 0.6 1.4 1.4 0.4-3.9 6.3-6.1 5.4-3.4 1.1-2.4 3.3 2.5 3.4 2.8 2.9-3.1 16.6 3.8 12.8 12.9 4.2 10.2 7.6 3.4 11.7 0.7 6-5.1 4.4-8.8 0.3-8.7-1.2-12.2-4.1-9.5-5.4-6.7-0.3-5.5 0.6-13.4 7.6-11.1-2.4-2.1-4.4-3.2-3.8-4.5 1-3.2 1.7-6.7-5.3-5.5-7-18.3-18.6-6.8 3.1-0.3-4.4-0.6-4.3 5.9-5.5-1.4-8.1-7.6-3.9-9.6-0.6 1.4-3.7-0.1-4-6.6-21.2 2.3-12.9 5.6-13 6.4-4.4 3.3-7.6-9.3-2.7-10.8 2.5-5.4-11.1 1.9-12.6 7-3.7 5.8-5.4 1.1-15.3 4.4-3.4-0.8-6 9-5.2 9.2-8.2 9.7-6.9 10.3-4.9 21.6-4.8 4.7-0.2 3.2-4.3 1.5-5.3-0.5-9.1 1.5-8.5 9.7-3.8 10.6 1.4 6.4 6.7 4.1 8.6z" id="LKA2469" name="Kegalle">
  </path></a>
 

 <a xlink:title="Colombo - Total Cases: <?= $casesPerLocation['Colombo'] ?? 0 ?>">
 <path d="M256.8 1302l-5.7 6.9-4.8 7.6-1.9 6.2-2.3 5.3 10.9 11.6-9.7 8.7-12.9-3-14.4 6.1 2.9 12.9-8.7-2.2-5.7-13.4-2.3-1.3-2.8-0.5-5.4 6.3-6.9 3.5-4.9-2.3-4.9 0.6-17 14.6-4.9 2.2-5.1 1.2-12.8 4.8-20.4-12.7-0.5 7.4 2.7 8.3 1.4 5.7 0.1 5.5-0.9 1.5-16.5-42.4-6-33.6-0.6-3.3 0-32.1 0.5-1.2 9.6 3.7 7.3 3.8 7.8 1.9 3.4-1.9 4.1-1.6 21.9 6.4 7.6-1.5 7.6-0.6 6 3.7 5.2 4.9 5 2.8 5.1 2 7.8 0.9 9.5-0.5 0.5-8.7 1.8-8.4 7-7 8.7-4 12 1.2 8-2.8 9.6 0.6 7.6 3.9 1.4 8.1-5.9 5.5 0.6 4.3 0.3 4.4z" id="LKA2470" name="Colombo">
  </path></a>
 

 <a xlink:title="Gampaha - Total Cases: <?= $casesPerLocation['Gampaha'] ?? 0 ?>">
 <path d="M249.4 1150.7l0.8 6-4.4 3.4-1.1 15.3-5.8 5.4-7 3.7-1.9 12.6 5.4 11.1 10.8-2.5 9.3 2.7-3.3 7.6-6.4 4.4-5.6 13-2.3 12.9 6.6 21.2 0.1 4-1.4 3.7-8 2.8-12-1.2-8.7 4-7 7-1.8 8.4-0.5 8.7-9.5 0.5-7.8-0.9-5.1-2-5-2.8-5.2-4.9-6-3.7-7.6 0.6-7.6 1.5-21.9-6.4-4.1 1.6-3.4 1.9-7.8-1.9-7.3-3.8-9.6-3.7 4.4-10.6 1.2-5-0.1-5.3-21.2-75.2 3-11-0.2 6.8 1.7 4.2 2.3 3.3 2.1 3.9 4.3 14.9 2 3.6 2.8 0 0.6-4.2 1.3-1.8 1.4-0.1-0.1-13.7-1-5.9-2.2-4.9-2.1-1.5-5.8-1.3-2.6-1.7-1.9-3.8 0.7-3.6 1.7-3.2 0.9-3.2-2.6-19.2 10.5 0.5 8.2-2.2 8.6-1.1 3.4 3.9 5.2 0.6 6.5-4 7.7 3 9.4-3.7 16.8-13.3 10.6-0.4 12.2 8.6 12.8-3.8 10.8-7.7 12.3-2.2 4 4.4 1.3 3.8 2.5 3.7 11 12.6 7.7 5.6z" id="LKA2471" name="Gampaha">
  </path></a>
 

 <a xlink:title="Kalutara - Total Cases: <?= $casesPerLocation['Kalutara'] ?? 0 ?>">
 <path d="M243.3 1348.3l1.4 9.2 7.8 20.4-0.7 7.1 2.9 8.4 4.2 8.9 13.5 13.1 2.6 12.9 4.9 4.6 6.2 2.4 9.8 9 6.4 12.3-6.6 2.5 2.3 7.6 18.7 26.3 15.9 27.8-15.7 3.6-15.5 9.6-8.1 3.6 0 9.5 3.3 9.7-0.9 8.9-6.9-5.5-6.8-6.6-13-10.1-13.4 1.2-12.1 6.8-19.1-3.7-7.4-4.9-7.1-6.3-8.8-3.8-8-1.7-16.3-7.5-2.2-3.8-3.2-3.1-4.5 1.8-2.9 1.9-2.5-2.3-2.4-3.4-3.1-0.7-1.8-7.6-2.9-1.9-2-1.7-1.2-2.5 0.5-2.6 2.2-0.6 2.2 0.2 1.2 0-3.4-23.3-0.3-1.9-9.2-23.7-21.4-54.9 0.9-1.5-0.1-5.5-1.4-5.7-2.7-8.3 0.5-7.4 20.4 12.7 12.8-4.8 5.1-1.2 4.9-2.2 17-14.6 4.9-0.6 4.9 2.3 6.9-3.5 5.4-6.3 2.8 0.5 2.3 1.3 5.7 13.4 8.7 2.2-2.9-12.9 14.4-6.1 12.9 3z" id="LKA2472" name="Kalutara">
  </path></a>

 <circle cx="302.6" cy="1147.4" id="0">
 </circle>
 <circle cx="616.8" cy="745.3" id="1">
 </circle>
 <circle cx="149.2" cy="439.8" id="2">
 </circle>


</svg><br><br>
    </div>                      
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all paths within the SVG
        const paths = document.querySelectorAll('svg path');

        // Loop through each path and assign a random color
        paths.forEach((path) => {
            const randomColor = getRandomColor();
            path.style.fill = randomColor;
        });

        // Function to generate a random color
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all paths within the SVG
        const paths = document.querySelectorAll('svg path');

        // Attach event listeners to each path
        paths.forEach((path) => {
            const tooltip = createTooltip();
            path.parentNode.appendChild(tooltip);

            path.addEventListener('mouseover', () => {
                const location = path.parentNode.getAttribute('xlink:title');
                const cases = <?= $casesPerLocation['Gampaha'] ?? 0 ?>;
                tooltip.textContent = `${location} - Total Cases: ${cases}`;
                tooltip.style.display = 'block';
            });

            path.addEventListener('mouseout', () => {
                tooltip.style.display = 'none';
            });
        });

        function createTooltip() {
            const tooltip = document.createElement('div');
            tooltip.classList.add('tooltip');
            return tooltip;
        }
    });
</script>
</svg>
        </div>
        <div class="col-md-6">  
        <?php
usort($tableData, function ($a, $b) {
    return $b['total_cases'] <=> $a['total_cases'];
});
?>  <table class="table overflow-auto">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Total Cases</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tableData as $row): ?>
                            <tr>
                                <td><?= $row['location'] ?></td>
                                <td><?= $row['total_cases'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div></div>
                <!--/ Total Revenue -->
             
                  </div>
                </div>
              </div>
              
              <div class="row">
                
                <!-- Order Statistics -->
              
                <!--/ Expense Overview -->



                <!-- Transactions -->
                
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