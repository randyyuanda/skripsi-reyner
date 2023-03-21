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
              <i class="mdi mdi-library-books"></i>
            </span> All Shipments
          </h3>
          <nav>
            <a class="btn nav-link btn-block btn-gradient-primary" href="/create-klien" style="display: flex; height: 36px; align-items: center; text-align: center;">+ New Klien</a>
          </nav>
        </div>
        <table class="table table-light table-hover">
          <thead>
            <tr class="table-dark">
              <th style="background-color:rgb(218, 21, 90)" scope="col">No</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Nama Klien</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Total Shipment(Monthly)</th>
              <th style="background-color:rgb(218, 21, 90)" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @if (count($listklien) > 0)
            @foreach ($listklien as $klien)
            <tr>
              <th scope="row" onclick="window.location.replace('/detail-klien/{{ $klien->id }}')">{{ $loop->index + 1 }}</th>
              <td onclick="window.location.replace('/detail-klien/{{ $klien->id }}')">{{ $klien->name }}</td>
              <td onclick="window.location.replace('/detail-klien/{{ $klien->id }}')">{{ $klien->total_shipment  }}</td>
              <td><i style="margin-right: 5px" class="mdi mdi-grease-pencil" onclick="window.location.replace('/detail-klien/{{ $klien->id }}')"></i><i class="mdi mdi-delete" onclick="selectKlien('{{ $klien->name }}','{{ $klien->id }}')"></i></td>
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
  <div class="modal fade" id="ModalDeleteKlien" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="justify-content: center;">
          <h2 class="modal-title" id="exampleModalCenterTitle" style="color: rgb(218, 21, 90)">Delete Klien</h2>
          <!-- <button type="button" class="close" aria-label="Close" onclick="$('#ModalDeleteAdmin').modal('hide')">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body" id="textModal" style="text-align: center;">
          Are you sure you want to delete this klien?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="$('#ModalDeleteKlien').modal('hide')">No</button>
          <button type="button" class="btn btn-primary" style="background-color: rgb(218, 21, 90);" onclick="deleteKlien()">Yes</button>
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
    var idklien = 0;

    function selectKlien(name, id) {
      idklien = id;
      $('#textModal').text('Are you sure want to delete ' + name + ' ?');
      $('#ModalDeleteKlien').modal('show');
    }

    function deleteKlien() {
      var formData = new FormData()

      $.ajax({
        type: "DELETE",
        url: "/api/delete-user/" + idklien,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(data) {
          window.location.replace('list-klien');
        },
        error: function(data, request, status, error) {}
      });
    }
  </script>
  <!-- End custom js for this page -->
</body>

</html>