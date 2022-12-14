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
  <style>
    .mb-0 {
      margin-bottom: 0px !important;
    }

    .lh-1 {
      line-height: 1;
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
        <div style="margin-left: 17px;" class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-library-books"></i>
            </span> Detail Bookings
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>List Klien / Klien Detail / Booking Detail / <span style="color: rgb(218, 21, 90)">AS0002</span>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Shipping Instruction Detail
                <button class="btn nav-link btn-gradient-primary ml-3" onclick="$('#ModalPrint').modal('show')" style="color: white;margin-left: calc(var(--bs-gutter-x) * .5);display: inline-flex; height: 36px; align-items: center; text-align: center; width: 100px"><i class="mdi mdi-printer menu-icon mr-2"> </i>Print
                </button>
                <div style="float: right;">
                  <span class="text-success" onclick="selectStatus('Approved')" style="cursor: pointer;"> {{ $book->status == 'PENDING APPROVEMENT' ? 'Approved' : '' }}</span>
                  <span class="text-success"> {{ $book->status == 'PENDING APPROVEMENT' ? ' / ' : '' }}</span>
                  <span class="text-danger" onclick="selectStatus('Canceled')" style="cursor: pointer;"> {{ $book->status == 'PENDING APPROVEMENT' ? 'Canceled' : '' }}</span>
                </div>
              </h4><br>
              <div>
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Pelabuhan Muat</label>
                      <p>{{ $book->pelabuhan_muat}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Pelabuhan Tujuan</label>
                      <p>{{ $book->pelabuhan_tujuan}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Final Destinantion</label>
                      <p>{{ $book->final_destination}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Vessel Name</label>
                      <p>{{ $book->vessel_name}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Date of Shipment</label>
                      <p>{{ $book->date_shipment}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Container No</label>
                      <p style="color:red">{{ $book->container_no}}</p>
                    </div>
                  </div>
                </div>
                <hr class="hr" />
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Shipper</label>
                      <p style="margin-bottom: 5px;">{{ $book->shipper}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Consignee</label>
                      <p style="margin-bottom: 5px;">{{ $book->consignee}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Shipping Marks</label>
                      <p style="margin-bottom: 5px;">{{ $book->shipping_marks}}</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Notify Party</label>
                      <p>{{ $book->notify_party}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Description of Goods</label>
                      <p>{{ $book->description_goods}}</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Total Gross Weight</label>
                      <p>{{ $book->total_gross_weight}} Kgs</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Total Nett Weight</label>
                      <p>{{ $book->total_nett_weight}} Kgs</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Total Measurement</label>
                      <p>{{ $book->total_measurement}} M3</p>
                    </div>
                  </div>
                  <div class="col">
                    <div>
                      <label style="color: rgb(133, 133, 133)">Status</label>
                      <p class="{{ $book->status == 'Canceled' && 'text-danger' }}">
                        {{ $book->status}}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <h4 class="card-title">Delivery Order <a style="cursor: pointer; color: #ff6e7f"><i class="mdi mdi-reload menu-icon mr-2"> </i></a>
                </h4>
                @if ($book->document->count() > 0 )
                <div style="display: inline-flex;">
                  <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[0]->directory))  }}" target="_blank" style="display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                  </a>
                  <a class=" btn nav-link btn-gradient-primary ml-2" href="{{ url(Storage::url($book->document[0]->directory))  }}" target="_blank" style="display: flex; height: 36px; align-items: center; text-align: center;"><i class="mdi mdi-reload menu-icon mr-2"> </i>Change
                  </a>
                </div>

                @endif
              </div>
              @if ($book->document->count() < 1 && $book->status == 'Approved' )
                <div class="mb-3">
                  <div class="file-drop-area form-control ">
                    <span class="fake-btn">Choose files</span>
                    <span class="file-msg">or drag and drop files here</span>
                    <input class="file-input" type="file">
                  </div>
                </div>
                <button class="btn btn-gradient-primary" onclick="uploadDocument('DO','{{ $book->booking_id }}')">Submit</button>
                @endif
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Invoice Packing List</h4>
              @if ($book->document->count() > 1 )
              <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[1]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
              </a>
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">PEB (Pemberitahuan Ekspor Barang)</h4>
              @if ($book->document->count() > 2 )
              <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[2]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
              </a>
              @endif
              @if ($book->document->count() == 2 )
              <div class="mb-3">
                <div class="file-drop-area form-control ">
                  <span class="fake-btn">Choose files</span>
                  <span class="file-msg">or drag and drop files here</span>
                  <input class="file-input" type="file">
                </div>
              </div>
              <button class="btn btn-gradient-primary" onclick="uploadDocument('PEB','{{ $book->booking_id }}')">Submit</button>
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">BL (Bill Of Lading)</h4>
              @if ($book->document->count() > 3 )
              <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[3]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
              </a>
              @endif
              @if ($book->document->count() == 3 )
              <div class="mb-3">
                <div class="file-drop-area form-control ">
                  <span class="fake-btn">Choose files</span>
                  <span class="file-msg">or drag and drop files here</span>
                  <input class="file-input" type="file">
                </div>
              </div>
              <button class="btn btn-gradient-primary" onclick="uploadDocument('BL','{{ $book->booking_id }}')">Submit</button>
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">COO (Certificate Of Origin)</h4>
              @if ($book->document->count() > 4 )
              <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[3]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
              </a>
              @endif
              @if ($book->document->count() == 4 )
              <div class="mb-3">
                <div class="file-drop-area form-control ">
                  <span class="fake-btn">Choose files</span>
                  <span class="file-msg">or drag and drop files here</span>
                  <input class="file-input" type="file">
                </div>
              </div>
              <button class="btn btn-gradient-primary" onclick="uploadDocument('COO','{{ $book->booking_id }}')">Submit</button>

              @endif
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Issued Invoice</h4>
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
  <div class="modal fade" id="ModalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="justify-content: center;">
          <h2 class="modal-title" id="exampleModalCenterTitle" style="color: rgb(218, 21, 90)"></h2>
          <!-- <button type="button" class="close" aria-label="Close" onclick="$('#ModalDeleteAdmin').modal('hide')">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body" id="textModal" style="text-align: center;">
          Are you sure you want to change status booking?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="$('#ModalConfirm').modal('hide')">No</button>
          <button type="button" class="btn btn-primary" style="background-color: rgb(218, 21, 90);" onclick="changeStatus()">Yes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalPrint" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
      <div class="modal-content">
        <div class="modal-header" style="justify-content: center;">
          <h2 class="modal-title" id="exampleModalCenterTitle" style="color: rgb(218, 21, 90)">Print</h2>
        </div>
        <div class="modal-body" id="printText">
          <div id="printData" style="font-size: 1em !important; text-align: center;">
            <div style="display: inline-flex; margin-bottom: 15px;">
              <div style="float: left;">
                <img style="display: block;height: 100px" src="/images/logo-mini.png" alt="logo" />

              </div>
              <div>
                <h3 style="margin-left: 100px; margin-top: 10px;">ANUGRAH SEMPURNA TRANS</h3>
                <h4 style="margin-left: 100px">INTERNATIONAL SEA AND AIR FREIGHT FORWARDING</h4>
              </div>
            </div>
            <div class="row mb-1 text-center" style="margin-top: 15px">
              <div class="col">
                SHIPPING INSTRUCTION

              </div>
            </div>
            <div class="row mb-1 text-left" style="margin-top: 15px">
              <div class="col-12">
                <span style="margin-right: 167px">1. Reference No. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ \Carbon\Carbon::parse($book->date_shipment)->format('Y-d') }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 150px">2. Pelabuhan Muat. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{$book->pelabuhan_muat}}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 138px">3. Pelabuhan Tujuan. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{$book->pelabuhan_tujuan}}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 148px">4. Final Destination. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{$book->final_destination}}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 173px">5. Vessel Name. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{$book->vessel_name}}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 144px">6. Date of Shipment. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ \Carbon\Carbon::parse($book->date_shipment)->format('M d, Y') }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 176px">7. Container no. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->container_no }}</p>
              </div>
            </div>
            <div class="mt-4 mb-1 text-left">
              Data yang diisi dalam Bill of Lading :
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 212px">1. Shipper. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->shipper }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 196px">2. Cosignee. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->consignee }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 183px">3. Notify Party. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->notify_party }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 155px">4. Shipping Marks. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->shipping_marks }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 111px">5. Description of Goods. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->description_goods }}</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 125px">6. Total Gross Weight. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->total_gross_weight }} Kgs</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 138px">7. Total Nett Weight. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->total_nett_weight }} Kgs</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                <span style="margin-right: 125px">8. Total Measurement. </span> :
                <p class="mb-0 lh-1" style="white-space: pre-line;display: inline-flex;">{{ $book->total_measurement }} M3</p>
              </div>
            </div>
            <div class="row mb-1 text-left">
              <div class="col-12">
                B/Regards, {{ Auth::user()->name}}
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" onclick="$('#ModalPrint').modal('hide')">No</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    var status = '';

    function selectStatus(name) {
      status = name;
      $('#textModal').text('Are you sure you want to ' + name + ' this booking ?');
      $('#exampleModalCenterTitle').text(name + ' Booking');
      $('#ModalConfirm').modal('show');
    }

    function changeStatus() {
      var formData = new FormData();
      $.ajax({
        type: "PUT",
        url: "/api/status-booking/{{ $book->booking_id }}/" + status,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: "json",
        success: function(data) {
          window.location.reload();
        },
        error: function(data, request, status, error) {}
      });
    }

    function print() {
      // html2pdf(document.getElementById('printData'));

      html2canvas(document.getElementById('printData'), {
        onrendered: function(canvas) {

          //! MAKE YOUR PDF
          var pdf = new jsPDF('p', 'pt', 'letter');

          for (var i = 0; i <= document.getElementById('printData').clientHeight / 980; i++) {
            //! This is all just html2canvas stuff
            var srcImg = canvas;
            var sX = 0;
            var sY = 980 * i; // start 980 pixels down for every new page
            var sWidth = 900;
            var sHeight = 980;
            var dX = 0;
            var dY = 0;
            var dWidth = 900;
            var dHeight = 980;

            window.onePageCanvas = document.createElement("canvas");
            onePageCanvas.setAttribute('width', 900);
            onePageCanvas.setAttribute('height', 980);
            var ctx = onePageCanvas.getContext('2d');
            // details on this usage of this function: 
            // https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API/Tutorial/Using_images#Slicing
            ctx.drawImage(srcImg, sX, sY, sWidth, sHeight, dX, dY, dWidth, dHeight);

            // document.body.appendChild(canvas);
            var canvasDataURL = onePageCanvas.toDataURL("image/png", 1.0);

            var width = onePageCanvas.width;
            var height = onePageCanvas.clientHeight;

            //! If we're on anything other than the first page,
            // add another page
            if (i > 0) {
              pdf.addPage(612, 791); //8.5" x 11" in pts (in*72)
            }
            //! now we declare that we're working on that page
            pdf.setPage(i + 1);
            //! now we add content to that page!
            pdf.addImage(canvasDataURL, 'PNG', 20, 40, (width * .62), (height * .62));

          }
          //! after the for loop is finished running, we save the pdf.
          pdf.save('test.pdf');
        }
      });

    }

    function demoFromHTML() {
      html2canvas(document.getElementById('printData'), {
        onrendered: function(canvasObj) {
          var pdf = new jsPDF('P', 'pt', 'a4'),
            pdfConf = {
              pagesplit: false,
              backgroundColor: '#FFF'
            };
          var width = pdf.internal.pageSize.getWidth();
          var height = pdf.internal.pageSize.getHeight();
          document.body.appendChild(canvasObj); //appendChild is required for html to add page in pdf
          pdf.addHTML(canvasObj, 0, 0, pdfConf, function() {
            document.body.removeChild(canvasObj);
            //pdf.addPage();
            pdf.save('Test.pdf');
          });
        }
      });
    }

    function testPrint() {
      html2canvas(document.getElementById('printData'))
        .then((canvas) => {
          const imgData = canvas.toDataURL('image/png');
          const pdf = new jsPDF({
            orientation: 'landscape',
          });
          const imgProps = pdf.getImageProperties(imgData);
          const pdfWidth = pdf.internal.pageSize.getWidth();
          const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
          pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
          pdf.save('download.pdf');
        });
      // window.frames["print_frame"].document.body.innerHTML = document.getElementById('printData').innerHTML;
      // setTimeout(() => {
      //   window.frames["print_frame"].window.focus();
      //   window.frames["print_frame"].window.print();
      // }, 400);
    }

    function convertHTMLToPDF() {

      var doc = new jsPDF('1', 'mm', [1200, 1210]);
      var pdfjs = document.querySelector('#printData');
      // Convert HTML invoice template source into PDF in JavaScript   
      doc.html(pdfjs, {
        callback: function(doc) {
          doc.save("output.pdf");
        },
        x: 10,
        y: 10
      });
    }
  </script>
  <!-- End custom js for this page -->
</body>

</html>