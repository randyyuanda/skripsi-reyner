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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <style>
        .textbottom {
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            padding-left: 325px;
            color: rgb(79, 116, 219);
            letter-spacing: 5px;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            border-style: solid;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top
        }

        .tg .tg-7btt {
            border-color: inherit;
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-4qqe {
            border-color: inherit;
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            vertical-align: top
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
                                                <input type="date" class="form-control" id="date" placeholder="Date">
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
                                <div>
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Job Description</label>
                                        <input type="text" class="form-control" id="jobDescription" placeholder="Job Description">
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
                                <div class="row invoiceList">
                                    <form name="form1">
                                        <div class="customer_records">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1"></label>
                                                        <input type="text" class="form-control" name="doc" placeholder="Detail of Charges">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1"></label>
                                                        <input type="number" class="form-control" name="qty" placeholder="Quantity">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1"></label>
                                                        <input type="number" class="form-control" name="unitrate" placeholder="Unit Rate">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="exampleInputCity1"></label>
                                                        <input type="number" class="form-control" name="amount" placeholder="Total Amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="customer_records_dynamic"></div>
                                    </form>
                                    <div class="row" style="margin-left: 0px">
                                        <button class="btn btn-light extra-fields-customer" type="button">+ Add More Items</button>
                                    </div>

                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputCity1">The Sum OF</label>
                                    <input type="text" class="form-control" id="sum" placeholder="The Sum Of">
                                </div>
                                <button type="button" class="btn btn-gradient-primary me-2" onclick="preview()">Submit</button>
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

        <!-- Modal Preview -->
        <div class="modal fade" id="ModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg " role="document" style="max-width: 50%">
                <div class="modal-content" style="background: white">
                    <div class="modal-header" style="justify-content: center;">
                        <h2 class="modal-title" id="exampleModalCenterTitle" style="color: rgb(218, 21, 90)">Preview</h2>
                    </div>
                    <div class="modal-body" id="printText" style="background: white">
                        <div id="printData" style="font-size: 1em !important;">
                            <div>
                                <img src="/images/kop.jpeg" height="auto" style="width: auto;">
                            </div>
                            <div style="text-align: center;">
                                </strong>
                                <h1>INVOICE</h1></b>
                            </div>
                            <div>
                                <table class="tg" style="table-layout: fixed; width: 600px; border-collapse: collapse;border-spacing: 0;border-style: solid;">
                                    <colgroup>
                                        <col style="width: 180px">
                                        <col style="width: 180px">
                                        <col style="width: 180px">
                                        <col style="width: 180px">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="tg-0pky" colspan="2" style=" border-color: inherit;text-align: left;vertical-align: top; border-style: solid;"><span id="bilingToSpan"></span> </th>
                                            <th class="tg-0pky" colspan="2" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"><span id="invoiceNoSpan">Invoice NO :</span><br><span id="dateSpan">DATE :</span> <br><span id="termSpan">TERM :</span> </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td class="tg-0pky" colspan="2" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"><br><span id="blNoSpan">B/L NO. :</span><br><span id="podSpan">P.O.D : </span><br><span id="vesselSpan">VESSEL : </span><br></td>
                                            <td class="tg-0pky" colspan="2" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"><br><span id="jobDescSpan">JOB DESCRIPTION :</span><br></td>
                                        </tr>
                                        <tr>
                                            <td class="tg-7btt" style="border-color: inherit;font-weight: bold;text-align: center;vertical-align: top;border-style: solid;">DETAIL OF CHARGES</td>
                                            <td class="tg-7btt" style="border-color: inherit;font-weight: bold;text-align: center;vertical-align: top;border-style: solid;">QUANTITY</td>
                                            <td class="tg-7btt" style="border-color: inherit;font-weight: bold;text-align: center;vertical-align: top;border-style: solid;">UNIT RATE</td>
                                            <td class="tg-7btt" style="border-color: inherit;font-weight: bold;text-align: center;vertical-align: top;border-style: solid;">TOTAL AMOUNT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <div>
                                    <h3 style="font-family: Arial, Helvetica, sans-serif;">THE SUM OF:</h3>
                                </div>
                                <span id="sum2Span">
                                </span>
                            </div>
                            <br>
                            <div>
                                <div>
                                    <div>
                                        <u><b>PLEASE TRANSFER TO OUR ACCOUNT:</u></b>
                                    </div>
                                    <div class="textbottom">
                                        BANK NAME &emsp;&emsp;&ensp;&nbsp; : BCA
                                    </div>
                                    <div class="textbottom">
                                        ACCOUNT NAME &ensp; : ANUGRAH SEMPURNA TRANS, CV
                                    </div>
                                    <div class="textbottom">
                                        ACCOUNT NO &emsp;&emsp; : 157 3888891
                                    </div>
                                    <div class="textbottom">
                                        SWIFT CODE &emsp;&emsp;&ensp; : CENAIDJA
                                    </div>
                                    <div class="textbottom">
                                        BANK ADDRESS &emsp; : KCP SUMBERSARI
                                    </div>
                                </div>

                                <div style="margin-top: 15px">
                                    <div>
                                        Bandung, <span id="displayDateTime" style="margin-left: 50px"></span>
                                    </div>
                                </div>
                                <div style="margin-top: 150px;">
                                    <div style="width: 200px;">
                                        <hr />
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="hidePreview()">No</button>
                        <button type="button" class="btn btn-primary" style="background-color: rgb(218, 21, 90);" onclick="print()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <iframe name="print_frame" width=0 height=0 src="about:blank"></iframe>

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            var element = $("#printText"); // global variable
            var getCanvas; // global variable
            var newData;

            function createInvoice(image) {
                var formData = new FormData();
                formData.append('document', image);
                $.ajax({
                    type: "POST",
                    url: "/api/upload-document/{{ $book->booking_id }}/INV",
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    dataType: "json",
                    success: function(data) {
                        window.location.reload();
                    },
                    error: function(data, request, status, error) {
                        alert(data.responseJSON.error);
                    },
                });
            }
            var count = 0;

            $('.extra-fields-customer').click(function() {
                $('.customer_records').clone().appendTo('.customer_records_dynamic');
                $('.customer_records_dynamic .customer_records').addClass('single remove');
                $('.single .extra-fields-customer').remove();
                $('.customer_records_dynamic > .single').attr("class", "remove");
            });

            var today = new Date();
            var day = today.getDay();
            var daylist = ["Sunday", "Monday", "Tuesday", "Wednesday ", "Thursday", "Friday", "Saturday"];
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var dateTime = date;

            document.getElementById("displayDateTime").innerHTML = dateTime;

            function preview() {
                var docArr = [];
                var qtyArr = [];
                var amountArr = [];
                var unitrateArr = [];
                var html = '';
                $("input[name='doc']").each(function() {
                    docArr.push($(this).val());
                });
                $("input[name='qty']").each(function() {
                    qtyArr.push($(this).val());
                });
                $("input[name='unitrate']").each(function() {
                    unitrateArr.push($(this).val());
                });
                $("input[name='amount']").each(function() {
                    amountArr.push($(this).val());
                });
                for (let i = 0; i < qtyArr.length; i++) {
                    html += `<tr class="addedRow">
                            <td class="tg-0pky" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;">` + docArr[i] + `</td>
                            <td class="tg-0pky" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;">` + parseInt(qtyArr[i]).toFixed(2) + `</td>
                            <td class="tg-0pky" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"> IDR ` + unitrateArr[i] + `</td>
                            <td class="tg-0pky" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"> IDR ` + amountArr[i] + `</td>
                        </tr>`
                }
                html += `                                       <tr class="addedRow">
                                            <td class="tg-4qqe" colspan="3">SUBTOTAL</td>
                                            <td class="tg-0pky" style=" border-color: inherit;text-align: left;vertical-align: top;border-style: solid;"><span id="sum1Span"> IDR ` + $("input[id=sum2]").val() + `</span></td>
                                        </tr>`;
                $('#tbody').append(html);
                document.getElementById('bilingToSpan').innerHTML = 'BILLING TO: ' + $("input[id=bilingTo]").val();
                document.getElementById('invoiceNoSpan').innerHTML = 'INVOICE NO: ' + $("input[id=invoiceNo]").val();
                document.getElementById('dateSpan').innerHTML = 'DATE: ' + $("input[id=date]").val();
                document.getElementById('termSpan').innerHTML = 'TERM: ' + $("input[id=term]").val();
                document.getElementById('blNoSpan').innerHTML = 'B/L No: ' + $("input[id=blno]").val();
                document.getElementById('podSpan').innerHTML = 'P.O.D: ' + $("input[id=pod]").val();
                document.getElementById('vesselSpan').innerHTML = 'VESSEL: ' + $("input[id=vessel]").val();
                document.getElementById('sum1Span').innerHTML = 'IDR ' + $("input[id=sum]").val();
                document.getElementById('sum2Span').innerHTML = 'IDR ' + $("input[id=sum]").val();
                document.getElementById('jobDescSpan').innerHTML = $("input[id=jobDescription]").val();

                $('#ModalPreview').modal('show');
            }

            function hidePreview() {
                const elements = document.getElementsByClassName('addedRow');
                while (elements.length > 0) {
                    elements[0].parentNode.removeChild(elements[0]);
                }
                $('#ModalPreview').modal('hide');
            }

            function dataURItoBlob(dataURI) {
                // convert base64/URLEncoded data component to raw binary data held in a string
                var byteString;
                if (dataURI.split(',')[0].indexOf('base64') >= 0)
                    byteString = atob(dataURI.split(',')[1]);
                else
                    byteString = unescape(dataURI.split(',')[1]);

                // separate out the mime component
                var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

                // write the bytes of the string to a typed array
                var ia = new Uint8Array(byteString.length);
                for (var i = 0; i < byteString.length; i++) {
                    ia[i] = byteString.charCodeAt(i);
                }

                return new Blob([ia], {
                    type: mimeString
                });
            }

            function print() {
                html2canvas(element, {
                    background: '#FFFFFF',
                    onrendered: function(canvas) {
                        getCanvas = canvas;
                        var imgageData = getCanvas.toDataURL("image/png");
                        var imgWidth = (canvas.width * 60) / 240;
                        var imgHeight = (canvas.height * 70) / 240;
                        var a = document.createElement("a");
                        a.href = imgageData; //Image Base64 Goes here
                        a.download = "Image.png"; //File name Here
                        // var doc = new jsPDF('p', 'mm');
                        // doc.addImage(imgageData, 'PNG', 0, 0);
                        // var output = doc.output('datauristring');
                        a.click(); //Downloaded file

                        // createInvoice(file)

                        // return btoa(output);
                        // doc.save('sample-file.pdf');
                    }
                });
            }
        </script>
        <!-- End custom js for this page -->
</body>

</html>