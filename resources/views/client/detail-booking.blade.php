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
    .tahap-success {
      background-image: linear-gradient(to right, rgba(74, 45, 255, 0.35), rgba(185, 37, 255, 0.35));
      padding: 1.5rem 2.5rem !important;
    }

    .tahap-failed {
      background: rgba(208, 208, 208, 1);
      padding: 1.5rem 2.5rem !important;
    }

    .text-tahap-failed {
      font-size: 24px !important;
      color: rgba(100, 100, 100, 1) !important;
    }

    .card-failed {
      background-color: rgba(196, 196, 196, 1);
    }

    .text-tahap-success {
      font-size: 24px !important;
      color: white !important;
    }

    .text-tahap-failed span,
    .text-tahap-success span {
      font-size: 12px;
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
        <div style="margin-left: 17px;" class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-library-books"></i>
            </span> Detail Bookings
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>My Bookings / All Shipment / <span style="color: rgb(218, 21, 90)">AS0002</span>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Shipping Instruction Detail
                <a class="btn nav-link btn-gradient-primary ml-2 {{($book->document->count() != 2 ? 'disabled' : '')}}" href="/update-booking/{{ $book->booking_id }}" style="width: 100px; display: inline-block;align-items: center; text-align: center;">
                  <i class="mdi mdi-circle-edit-outline menu-icon"> </i> Edit
                </a>
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
                      <label style="color: rgb(133, 133, 133)"></label>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body {{ $book->document->count() < 1 ? 'tahap-failed' : 'tahap-success'}}">
              <strong>
                <h4 class="card-title {{ $book->document->count() < 1 ? 'text-tahap-failed' : 'text-tahap-success'}}" style="font-weight: bold;">Tahap Pertama</h4>
              </strong>
              <div class="card {{ $book->document->count() < 1 ? 'card-failed' : ''}}">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">Delivery Order</h4>
                  @if ($book->document->count() > 0 )
                  <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[0]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                  </a>
                  @else
                  <span style="color: rgba(146, 146, 146, 1)">DO belum tersedia, pihak Anugrah Sempurna Trans belum mengunggah dokumen DO</span>
                  @endif
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body {{ $book->document->count() < 1 ? 'tahap-failed' : 'tahap-success'}}">
              <strong>
                <h4 class="card-title {{ $book->document->count() < 1 ? 'text-tahap-failed' : 'text-tahap-success'}}" style="font-weight: bold;">Tahap Kedua
                  @if ($book->document->count() < 1 ) <span>(Selesaikan tahap pertama untuk lanjut ke tahap kedua)</span> @endif </h4>
              </strong>
              <div class="card {{ $book->document->count() < 1 ? 'card-failed' : '' }}">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">
                    Invoice Packing List
                  </h4>
                  <div>
                    @if ($book->document->count() > 1 )
                    <div style="display: inline-flex;" id="div-document-do">
                      <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[1]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                      </a>
                      @if ($book->status != 'Shipment Completed')
                      <a class="btn nav-link btn-gradient-primary ml-2 text-white" onclick="updateDoc()" style="display: flex; height: 36px; align-items: center; text-align: center;"><i class="mdi mdi-reload menu-icon mr-2"> </i>Change
                      </a>
                      @endif
                    </div>
                    <div id="div-upload-do" style="display: none;">
                      <div class="mb-3">
                        <div class="file-drop-area form-control ">
                          <span class="fake-btn">Choose files</span>
                          <span class="file-msg">or drag and drop files here</span>
                          <input class="file-input" type="file">
                        </div>
                      </div>
                      <button class="btn btn-gradient-primary" onclick="updateDocument('{{ $book->document[1]->document_id }}')">Submit</button>
                    </div>
                    @endif
                    @if ($book->document->count() < 1 ) <span style="color: rgba(146, 146, 146, 1)">IPL belum tersedia, pihak klien belum mengunggah dokumen IPL</span>
                      @endif
                      @if ($book->document->count() == 1 && $book->status == 'Delivery Order Received' ) <div class="mb-3">
                        <div class="file-drop-area form-control ">
                          <span class="fake-btn">Choose files</span>
                          <span class="file-msg">or drag and drop files here</span>
                          <input class="file-input" type="file">
                        </div>
                      </div>
                      <button class="btn btn-gradient-primary" onclick="uploadDocument('IPL','{{ $book->booking_id }}')">Submit</button>

                      @endif
                  </div>
                </div>
              </div>
              <div class="card {{ $book->document->count() < 2 ? 'card-failed' : '' }}" style="margin-top: 15px">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">PEB (Pemberitahuan Ekspor Barang)</h4>
                  <div>
                    @if ($book->document->count() > 2 )
                    <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[2]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                    </a>
                    @else
                    <span style="color: rgba(146, 146, 146, 1)">PEB belum tersedia, pihak Anugrah Sempurna Trans belum mengunggah dokumen PEB</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-12 grid-margin stretch-card">
          <div class="card {{ $book->document->count() < 3 ? 'card-failed' : '' }}">
            <div class="card-body {{ $book->document->count() < 4 ? 'tahap-failed' : 'tahap-success'}}">
              <strong>
                <h4 class="card-title {{ $book->document->count() < 4 ? 'text-tahap-failed' : 'text-tahap-success'}}" style="font-weight: bold;">Tahap Ketiga
                  @if ($book->document->count() < 4 ) <span>(Selesaikan tahap kedua untuk lanjut ke tahap ketiga)</span> @endif </h4>

              </strong>
              <div class="card {{ $book->document->count() < 4 ? 'card-failed' : '' }}">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">BL (Bill Of Lading)</h4>

                  <div>
                    @if ($book->document->count() > 3 )
                    <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[3]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                    </a>
                    @else
                    <span style="color: rgba(146, 146, 146, 1)">BL belum tersedia, pihak Anugrah Sempurna Trans belum mengunggah dokumen BL</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="card {{ $book->document->count() < 5 ? 'card-failed' : '' }}" style="margin-top: 15px">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">COO (Certificate Of Origin)</h4>
                  <div>
                    @if ($book->document->count() > 4 )
                    <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[4]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                    </a>
                    @else
                    <span style="color: rgba(146, 146, 146, 1)">COO belum tersedia, pihak Anugrah Sempurna Trans belum mengunggah dokumen COO</span>
                    @endif
                  </div>
                </div>
              </div>
              <div class="card {{ $book->document->count() < 6 ? 'card-failed' : '' }}" style="margin-top: 15px">
                <div class="card-body" style="padding: 1rem">
                  <h4 class="card-title">Issued Invoice</h4>
                  <div>
                    @if ($book->document->count() > 5 )
                    <a class="btn nav-link btn-gradient-primary" href="{{ url(Storage::url($book->document[5]->directory))  }}" target="_blank" style="margin-left: calc(var(--bs-gutter-x) * .5);display: flex; height: 36px; align-items: center; text-align: center; width: 150px"><i class="mdi mdi-file-document menu-icon mr-2"> </i>Preview PDF
                    </a>
                    @else
                    <span style="color: rgba(146, 146, 146, 1)">Issued Invoice belum tersedia, pihak Anugrah Sempurna Trans belum mengunggah dokumen Issued Invoice </span>
                    @endif
                  </div>
                </div>
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
  <script>
    function updateDoc() {
      document.getElementById("div-upload-do").style.display = 'block';
      document.getElementById("div-document-do").style.display = 'none';
    }
  </script>
  <!-- End custom js for this page -->
</body>

</html>