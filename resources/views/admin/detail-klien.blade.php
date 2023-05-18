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
  <style>
    .badge-warning-custom {
      background: #F9FAC5;
      color: #C3B000;
    }

    .badge-danger-custom {
      background: #FAEBE6;
      color: #B44100;
    }

    .badge-success-custom {
      background: #EEFAE6;
      color: #19B400;
    }

    .badge-waiting-custom {
      background: #E6EEFA;
      color: #0028B4;
    }

    .badge-approved-custom {
      background: #F7E6FA;
      color: #9000B4;
    }

    .badge-completed-custom {
      background: rgba(238, 250, 230, 1);
      color: rgba(25, 180, 0, 1);
    }

    .table tr {
    cursor: pointer;
    }
  </style>
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
          <span class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-hospital-building"></i>
            </span> Klien Detail
            <a class="btn nav-link btn-gradient-primary ml-2" href="/update-klien/{{ $klien->id }}" style="width: 100px; display: inline-block;align-items: center; text-align: center;">
              <i class="mdi mdi-circle-edit-outline menu-icon"> </i> Edit
            </a>

          </span>

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
                      <label style="color: rgb(133, 133, 133)">Total Shipment ({{ date('M') }})</label>
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
            <div class="col input-group">
                <form autocomplete="off" action="" class="input-group">
                  <div class="input-group">
                    <input class="form-control" placeholder="Filter Status" name="search" type="text" list="statusname">
                      <span class="input-group-append bg-white border-left-0">
                        <span class="input-group-text bg-transparent">
                          <i class="mdi mdi-filter"></i>
                        </span>
                      </span>
                      <datalist id="statusname">
                        <option value="Waiting">
                        <option value="Approved">
                        <option value="Canceled">
                        <option value="Delivery Order Received">
                        <option value="Invoice Packing List Received">
                        <option value="Pemberitahuan Ekspor Barang Received">
                        <option value="Bill Of Lading Received">
                        <option value="Certificate Of Origin Received">
                        <option value="Invoice Received">
                        <option value="Shipment Completed">
                      </datalist>
                  </div>
                </form>
              </div>
          </nav>
          <div class="col">
            <button onclick="window.location.replace('/detail-klien/{{ $klien->id }}')"  class="btn btn-primary" type="button">Reset</button>
          </div>
        </div>
        <table class="table table-light table-hover">
          <thead>
            <tr class="table-dark">
              <th style="background-color:rgb(218, 21, 90)" scope="col">No</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Tujuan</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Booking Created On</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Date Shipment</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Status</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($listbooking) > 0)
            @foreach ($listbooking as $book)
            <tr>
              <th scope="row" onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id }}')">{{ $loop->index + 1 }}</th>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id }}')">{{ $book->pelabuhan_muat }} - {{ $book->pelabuhan_tujuan }}</td>
              <td onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')">{{ $book->created_at->toDateString() }}</td>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id }}')">{{ $book->date_shipment }}</td>
              <td onclick="window.location.replace('/detail-booking-admin/{{ $book->booking_id}}')"><label class="badge {{ ($book->status == 'Done') ? 'badge-success-custom' : (($book->status == 'Canceled') ? 'badge-danger-custom' : (($book->status == 'Waiting') ? 'badge-waiting-custom' : (($book->status == 'Approved') ? 'badge-approved-custom' : (($book->status == 'Shipment Completed') ? 'badge-completed-custom' : 'badge-warning-custom')))) }} ">{{ $book->status}}</label></td>
              <td>
                @if ($book->status == 'Waiting')
                <i style="margin-right: 5px" class="mdi mdi mdi-grease-pencil" onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')"></i>
                <i class="mdi mdi mdi-delete" onclick="selectBook('booking', '{{ $book->booking_id}}' )"></i>
                @endif
              </td>

            </tr>
            @endforeach
            @else
            <tr>
              <td colspan='5' style="text-align: center;">Tidak ada Data</td>
            </tr>
            @endif
          </tbody>
        </table>
        <div style="padding-top: 20px;float : right">
            {{ $listbooking->links('pagination::bootstrap-5')}}
          </nav>
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
  <!-- End custom js for this page -->
</body>

</html>