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
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo" style="text-align: center;">
                <img src="/images/logo.jpg">
              </div>
              <h4>Change Password</h4>
              <div class="form-group">
                <input id="name" disabled type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ $admin->name }}" required autocomplete="name" autofocus>
              </div>
              <div class="form-group">
                <input id="email" disabled type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $admin->email }}" required autocomplete="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
              </div>
              <div class="form-group">
                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" autocomplete="new-password" placeholder="Re-enter Password">
              </div>
              <input type="hidden" class="form-control form-control-lg" name="role" value="admin">
              <div class="mt-3" style="text-align: center">
                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium" onclick="updateAdmin()">SUBMIT</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- <script src="/vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
    function updateAdmin() {
      var formData = new FormData()
      formData.append('password', $("input[name=password]").val());
      formData.append('password_confirmation', $("input[name=password_confirmation]").val());
      formData.append("_method", "PUT");

      $.ajax({
        type: "POST",
        url: "/api/change-password/{{ $admin->id }}",
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(data) {
          window.location.replace('/list-admin');
        },
        error: function(data, request, status, error) {}
      });
    }
  </script>
  <!--  -->
  <!-- endinject -->
</body>

</html>