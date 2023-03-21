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
                        <span style="margin-left: 17px;" class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-library-books"></i>
                        </span> Create Invoice
                    </h3>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">General Information</h4>
                            <p class="card-description"> Input invoice general information </p>
                            <form class="forms-sample">
                                <div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Billing To</label>
                                        <input type="text" class="form-control" id="bilingTo" placeholder="Billing To">
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Invoice No</label>
                                                <input type="text" class="form-control" id="invoiceNo" placeholder="Invoice No">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Date</label>
                                                <input type="text" class="form-control" id="date" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Term</label>
                                                <input type="text" class="form-control" id="term" placeholder="Term">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">B/L No.</label>
                                                <input type="text" class="form-control" id="blno" placeholder="B/L No.">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">P.O.D</label>
                                                <input type="text" class="form-control" id="pod" placeholder="P.O.D">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="exampleInputCity1">Vessel</label>
                                                <input type="text" class="form-control" id="vessel" placeholder="Vessel">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Fill Invoice</h4>
                            <p class="card-description"> Input invoice list </p>
                            <form class="forms-sample">
                                <div>
                                    <div class="row">
                                        <div style="padding-left: 73px;" class="col">
                                            Detail of Charges
                                        </div>
                                        <div style="padding-left: 110px;" class="col">
                                            Quantity
                                        </div>
                                        <div style="padding-left: 90px;" class="col">
                                            Unit Rate
                                        </div>
                                        <div style="padding-left: 73px;" class="col">
                                            Total Amount
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="customer_records">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1"></label>
                                                    <input type="text" class="form-control" id="doc" placeholder="Detail of Charges">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1"></label>
                                                    <input type="text" class="form-control" id="qty" placeholder="Quantity">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1"></label>
                                                    <input type="text" class="form-control" id="unitrate" placeholder="Unit Rate">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleInputCity1"></label>
                                                    <input type="text" class="form-control" id="amount" placeholder="Total Amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customer_records_dynamic"></div>
                                    <div class="row" style="margin-left: 0px">
                                        <button class="btn btn-light extra-fields-customer" type="button">+ Add More Items</button>
                                    </div>

                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputCity1">The Sum OF</label>
                                    <input type="text" class="form-control" id="sum" placeholder="The Sum Of">
                                </div>
                                <a type="button" class="btn btn-gradient-primary me-2" href="/generate-pdf">Submit</a>
                                <button class="btn btn-light" type="button">Cancel</button>
                            </form>
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
        <script src="/js/inputfile.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function createInvoice() {
                var formData = new FormData();
                formData.append('bilingTo', $("input[id=bilingTo]").val());
                formData.append('invoiceNo', $("input[id=invoiceNo]").val());
                formData.append('date', $("input[id=date]").val());
                formData.append('term', $("input[id=term]").val());
                formData.append('blno', $("input[id=blno]").val());
                formData.append('pod', $("input[id=pod]").val());
                formData.append('vessel', $("input[id=vessel]").val());
                formData.append('sum', $("input[id=sum]").val());


                $.ajax({
                    type: "GET",
                    url: "/generate-pdf",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log('data');
                        // window.location.reload();
                    },
                    error: function(data, request, status, error) {
                        alert(data.responseJSON.error);
                    },
                });
            }

            $('.extra-fields-customer').click(function() {
                $('.customer_records').clone().appendTo('.customer_records_dynamic');
                $('.customer_records_dynamic .customer_records').addClass('single remove');
                $('.single .extra-fields-customer').remove();
                // $('.single').append('<i class="mdi mdi-delete remove-field")"></i>');
                $('.customer_records_dynamic > .single').attr("class", "remove");

                $('.customer_records_dynamic input').each(function() {
                    var count = 0;
                    var fieldname = $(this).attr("name");
                    $(this).attr('name', fieldname + count);
                    count++;
                });

            });

            $(document).on('click', '.remove-field', function(e) {
                $(this).parent('.remove').remove();
                e.preventDefault();
            });
        </script>
        <!-- End custom js for this page -->
</body>

</html>