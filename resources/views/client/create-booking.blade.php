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
                <span style="margin-left: 17px;" class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-library-books"></i>
                </span> Create Booking
              </h3>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Shipping Instruction Detail</h4>
                  <p class="card-description"> Shipping Instruction Detail </p>
                  <form class="forms-sample">
                    <div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Pelabuhan Muat</label>
                            <input type="text" class="form-control" id="pelabuhan_muat" placeholder="Pelabuhan Muat" required>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Pelabuhan Tujuan</label>
                            <input type="text" class="form-control" id="pelabuhan_tujuan" placeholder="Pelabuhan Tujuan"required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Final Destination</label>
                      <input type="text" class="form-control" id="final_destination" placeholder="Final Destination"required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Vessel Name</label>
                      <input type="text" class="form-control" id="vessel_name" placeholder="Vessel Name"required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Date of Shipment</label>
                      <input type="date" class="form-control" id="date_shipment" placeholder="dd/mm/yyyy"required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Container No</label>
                      <input type="text" class="form-control" id="container_no" placeholder="Container No"required>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Shipper</label>
                            <textarea class="form-control" id="shipper" rows="7" required></textarea>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Consignee</label>
                            <textarea class="form-control" id="consignee" rows="7" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Notify Party</label>
                      <input type="text" class="form-control" id="notify_party" placeholder="Notify Party" required>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Shipping Marks</label>
                            <textarea class="form-control" id="shipping_marks" rows="10" required></textarea> 
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Description of Goods</label>
                            <textarea class="form-control" id="description_goods" rows="10" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Total Nett Weight</label>
                            <input type="number" class="form-control" id="total_nett_weight" placeholder="Total Nett Weight" required>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Total Gross Weight</label>
                            <input type="number" class="form-control" id="total_gross_weight" placeholder="Total Gross Weight" required>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputCity1">Total Measurement</label>
                            <input type="number" class="form-control" id="total_measurement" placeholder="Total Measurement" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-gradient-primary me-2" onclick="createBook()">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
      function createBook(){
        var formData = new FormData()
    		formData.append('pelabuhan_muat', $("#pelabuhan_muat").val());
        formData.append('pelabuhan_tujuan', $("#pelabuhan_tujuan").val());
    		formData.append('final_destination', $("#final_destination").val());
    		formData.append('vessel_name', $("#vessel_name").val());
    		formData.append('date_shipment', $("#date_shipment").val());
    		formData.append('consignee', $("#consignee").val());
    		formData.append('container_no', $("#container_no").val());
    		formData.append('shipper', $("#shipper").val());
    		formData.append('notify_party', $("#notify_party").val());
    		formData.append('shipping_marks', $("#shipping_marks").val());
    		formData.append('description_goods', $("#description_goods").val());
        formData.append('total_nett_weight', $("#total_nett_weight").val());
    		formData.append('total_gross_weight', $("#total_gross_weight").val());
    		formData.append('total_measurement', $("#total_measurement").val());
    		formData.append('total_measurement', $("#total_measurement").val());
				formData.append('users_id', "{{ Auth::user()->id }}");

        $.ajax({
          type: "POST",
          url: "/api/create-booking",
          data: formData,
          contentType: false,
          processData: false,
          cache: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: "json",
          success: function(data) {
            window.location.replace('list-booking')
          },
          error: function(data, request, status, error) {
          }
		    });
      }

    </script>
    <!-- End custom js for this page -->
  </body>
</html>