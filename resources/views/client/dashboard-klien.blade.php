<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ASET</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/images/favicon.ico" />
</head>

<body>
  <!-- partial:partials/_navbar.html -->
  @include('../navbar/navbar')
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('../menu/menu')

    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-6 stretch-card grid-margin" style="height: 150px;">
            <div class="card bg-gradient-danger card-img-holder text-white">
              <div class="card-body">
                <img src="/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">On Going Shipment <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{ $ongoing }}</h2>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card grid-margin" style="height: 150px;">
            <div class="card bg-gradient-info card-img-holder text-white">
              <div class="card-body">
                <img src="/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Completed Shipment <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5">{{ $completed }}</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">My Bookings</h4>
                <div id="info">
                  <select class="form-select" id="mySelect" onchange="myFunction()">
                    <option>Select Year</option>
                    <?php
                    $years = range(2000, strftime("%Y", time() + 20));
                    foreach ($years as $year) : ?>
                      <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <canvas id="chartJSContainer" width="600" height="250"></canvas>

                <!-- <canvas id="barChart" style="height:250px"></canvas> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/vendors/chart.js/Chart.min.js"></script>
  <script src="/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="/js/dashboard.js"></script>
  <script src="/js/todolist.js"></script>
  <!-- <script src="/js/chart.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function() {
      getData();
    });

    function myFunction() {
      var x = document.getElementById("mySelect").value;
      start = 1;
      getData(x);
    }

    var dataGraph = [];
    const monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];
    var year = new Date().getFullYear();
    var start = 0;
    var chart = '';

    function getData(year = new Date().getFullYear()) {
      $.ajax({
        type: "GET",
        url: "/api/monthly-shipment-klien/{{ Auth::user()->id }}/" + year,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(data) {
          var options = {
            type: 'bar',
            data: {
              labels: ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
              ],
              datasets: [{
                  label: 'On Going',
                  data: data[0],
                  backgroundColor: 'red'
                },
                {
                  label: 'Completed',
                  data: data[1],
                  backgroundColor: 'blue'
                }
              ]
            },
          }
          if (start == 0) {
            var ctx = document.getElementById('chartJSContainer').getContext('2d');
            chart = new Chart(ctx, options);
          } else {
            console.log(chart);
            chart.options = options;
            chart.update();
          }

        },
        error: function(data, request, status, error) {}
      });
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.js"></script>

  <!-- End custom js for this page -->
</body>

</html>