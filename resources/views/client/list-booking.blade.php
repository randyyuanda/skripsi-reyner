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
              <i class="mdi mdi-library-books"></i>
            </span> All Shipments
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>My Bookings / <span style="color: rgb(218, 21, 90)">All Shipments</span>
              </li>
            </ul>
          </nav>
        </div>
        <div style="float : right; padding-right : 0px" class="col-3 container mb-3">
          <div class="row">
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
            <div class="input-group-append">
              <button onclick="window.location.replace('/list-booking/')"  class="btn btn-primary" type="button">Reset</button>
            </div>
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
            @if (count($listbook) > 0)
            @foreach ($listbook as $book)
            <tr>
              <th scope="row" onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')">{{ $loop->index + 1 }}</th>
              <td onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')">{{ $book->pelabuhan_muat }} - {{ $book->pelabuhan_tujuan }}</td>
              <td onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')">{{ $book->created_at->toDateString() }}</td>
              <td onclick="window.location.replace('/detail-booking/{{ $book->booking_id }}')">{{ $book->date_shipment }}</td>
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
          {{ $listbook->links('pagination::bootstrap-5')}}
      </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <div class="modal fade" id="ModalDeleteBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="justify-content: center;">
          <h2 class="modal-title" id="exampleModalCenterTitle" style="color: rgb(218, 21, 90)">Delete Booking</h2>
          <!-- <button type="button" class="close" aria-label="Close" onclick="$('#ModalDeleteAdmin').modal('hide')">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body" style="text-align: center;" id="textModal">
          Are you sure you want to delete this booking?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="$('#ModalDeleteBook').modal('hide')">No</button>
          <button type="button" class="btn btn-primary" style="background-color: rgb(218, 21, 90);" onclick="deleteBook()">Yes</button>
        </div>
      </div>
    </div>
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
  <script>
    function selectBook(name, id) {
      idbook = id;
      $('#textModal').text('Are you sure want to delete this ' + name + ' ?');
      $('#ModalDeleteBook').modal('show');
    }

    function deleteBook() {
      var formData = new FormData()

      $.ajax({
        type: "DELETE",
        url: "/api/delete-booking/" + idbook,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(data) {
          window.location.replace('list-booking');
        },
        error: function(data, request, status, error) {}
      });
    }
  </script>
  <!-- End custom js for this page -->
</body>

</html>