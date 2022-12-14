<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  @include('../navbar/navbar-admin')

  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('../menu/menu-admin')

    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-hospital-building"></i>
            </span> Klien Detail
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <a href="/list-klien" style="text-decoration: none; color: grey;">List Klien / </a><span style="color: rgb(218, 21, 90)">Klien Detail</span>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-13 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Klien Detail</h4><br>
              <div>
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Nama Klien</label>
                      <p>{{ $klien->name }}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Klien ID</label>
                      <p>K001s</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Total Shipment (Monthly)</label>
                      <p>{{ $counttotalmonthlyshipment }}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Total Shipment (All)</label>
                      <p>{{ $counttotalallshipment }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-truck"></i>
            </span> Shipment Klien
          </h3>
          <nav aria-label="breadcrumb row">
            <!-- <div class="dropdown">
              <button class="btn btn-gradient-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
              </button>
              <ul class="dropdown-menu btn-gradient-primary" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item " href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div> -->
          </nav>
        </div>
        <table class="table table-light table-hover">
          <thead>
            <tr class="table-dark">
              <th style="background-color:rgb(218, 21, 90)" scope="col">No</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Nama klien</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Date Shipment</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Status</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($listbooking) > 0)
            @foreach ($listbooking as $book)
            <tr>
              <th scope="row" onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')">1</th>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')">{{ $book->nama_klien }}</td>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')">{{ $book->date_shipment }}</td>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')"><label class="badge {{ ($book->status == 'Done') ? 'badge-success' : (($book->status == 'Canceled') ? 'badge-danger' : 'badge-warning') }} ">{{ $book->status}}</label></td>
              <!-- <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')"><label class="badge badge-warning">In Progress</label></td> -->
              <td><i style="margin-right: 5px" class="mdi mdi mdi-grease-pencil"></i><i class="mdi mdi mdi-delete"></i></td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan='5' style="text-align: center;">Tidak ada Data</td>
            </tr>
            @endif
          </tbody>
        </table>
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
  <!-- End custom js for this page -->
</body>

</html>