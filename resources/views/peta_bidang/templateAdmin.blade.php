<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
      body {
        font-family: "Poppins" !important;
      }
      .btn-oke {
        background-color: #1aae9f !important;
        color: white !important;
      }
      .btn-hapus {
        background-color: #d3455b !important;
        color: white !important;
      }
      .btn-batal {
        border-color: #1aae9f !important;
        color: #1aae9f !important;
      }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/5fbcc24921.js"
      crossorigin="anonymous"
    ></script>
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="{{ asset('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{ asset('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/plugins/jqvmap/jqvmap.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker.css') }}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/plugins/summernote/summernote-bs4.min.css') }}" />
    <!-- datatable -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/datatables.min.css"
    />
  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="dist/img/AdminLTELogo.png"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
        </ul>

        <!-- Right navbar links -->
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: auto !important">
        <!-- Brand Logo -->
        <a href="#" class="brand-link d-flex align-items-center ml-2">
          <i class="fas fa-globe-asia fa-lg"></i>
          <span class="brand-text font-weight-light ml-1"
            >Aplikasi Peta Bidang</span
          >
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
              <img
                src="dist/img/sample-profile-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block"
                >Selamat datang <br />
                <b>Admin</b></a
              >
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-header">Menu</li>
              <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link @yield('petabidang')">
                  <i class="fa fa-map" aria-hidden="true"></i>
                  <p>
                    Peta Bidang
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('peta.profile') }}" class="nav-link @yield('profile')">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <p>
                    Profile
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('signout') }}" class="nav-link">
                  <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <p>
                    Logout
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header"></div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              @if ($message = Session::get('success'))
                <div class="alert alert-success col-lg-12">
                  <p>{{ $message }}</p>
                </div>
              @endif
              @if ($message = Session::get('failed'))
              <div class="alert alert-danger col-lg-12">
                <p>{{ $message }}</p>
              </div>
            @endif
              @if ($errors->any())
              <div class="alert alert-danger col-lg-12">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <section class="col-lg-12 connectedSortable">
                    @yield('content')
                <!-- /.card -->
              </section>

              <!-- /.Left col -->
              <!-- right col (We are only adding the ID to make the widgets sortable)-->

              <!-- right col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- Modal Tambah Peta Bidang -->
      <div
        class="modal fade"
        id="modalTambah"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modelTambah"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title text-center col-11 fs-5 black fw-bold"
                id="modelTambah"
              >
                Tambah Peta Bidang
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form
                id="tambahData"
                action="{{ route('peta.store') }}"
                method="POST"
                enctype="multipart/form-data"
              >
              @csrf
                <div class="mb-3">
                  <div class="form-group mb-3">
                    <label for="nomor">Nomor</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nomor"
                      name="nomor"
                      placeholder="Masukan nomor peta bidang"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input
                      type="text"
                      class="form-control"
                      id="judul"
                      name="judul"
                      placeholder="Masukan judul peta bidang"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <input
                      type="text"
                      class="form-control"
                      id="deskripsi"
                      name="deskripsi"
                      placeholder="Masukan Deskripsi"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label for="file">Unggah</label>
                    <div>
                      <input
                        type="file"
                        class="form-control-file"
                        id="file"
                        name="file"
                      />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-center">
              <button
                data-toggle="modal"
                data-target="#modalKonfirmasiT"
                type="button"
                class="btn btn-oke"
                style="width: 90%"
                data-dismiss="modal"
              >
                Tambahkan Data Peta Bidang
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Konfirmasi Tambah -->
      <div
        class="modal fade"
        id="modalKonfirmasiT"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalKonfirmasiT"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title fs-5 black fw-bold col-11 text-center"
                id="modalKonfirmasiT"
              >
                Konfirmasi
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>
                Apakah anda yakin akan menambah data peta bidang tersebut?
              </h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button
                type="button"
                class="btn btn-batal"
                style="width: 45%"
                data-dismiss="modal"
              >
                Kembali
              </button>
              <button
                type="submit"
                form="tambahData"
                class="btn btn-oke"
                style="width: 45%"
              >
                Tambah Data
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Edit Peta Bidang -->
      <div
        class="modal fade"
        id="modalEdit"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalEdit"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title fs-5 black fw-bold col-11 text-center"
                id="modalEdit"
              >
                Edit Peta Bidang
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form
                id="editData"
                action="{{ route('peta.edit') }}"
                method="POST"
                enctype="multipart/form-data"
              >
              @csrf
              <input type="text" name="id" id="id_edit" hidden />
                <div class="mb-3">
                  <div class="form-group mb-3">
                    <label for="nomor">Nomor</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nomorEdit"
                      name="nomor"
                      placeholder="Masukan nomor peta bidang"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input
                      type="text"
                      class="form-control"
                      id="judulEdit"
                      name="judul"
                      placeholder="Masukan judul peta bidang"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea
                      class="form-control"
                      id="deskripsiEdit"
                      name="deskripsi"
                    >Masukan Deskripsi
                  </textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label for="file">Unggah</label>
                    <div>
                      <input
                        type="file"
                        class="form-control-file"
                        id="fileEdit"
                        name="file"
                      />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="form-group mb-3 ml-3 mr-3">
              <label for="frameEdit" id="labelFrame"></label>
              <div>
                <iframe id="frameEdit"src="" class="w-100" frameborder="0"></iframe>
              </div>
  
            </div>
            <div class="modal-footer justify-content-center">
              <button
                type="button"
                class="btn btn-batal"
                style="width: 45%"
                data-dismiss="modal"
              >
                Kembali
              </button>
              <button
                type="button"
                data-toggle="modal"
                data-target="#modalKonfirmasiE"
                class="btn btn-oke"
                style="width: 45%"
                data-dismiss="modal"
              >
                Ubah
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Konfirmasi Edit -->
      <div
        class="modal fade"
        id="modalKonfirmasiE"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalKonfirmasiE"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title fs-5 black fw-bold col-11 text-center"
                id="modalKonfirmasiE"
              >
                Konfirmasi
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Apakah anda yakin untuk ubah data peta bidang tersebut?</h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button
                type="button"
                class="btn btn-batal"
                style="width: 45%"
                data-dismiss="modal"
              >
                Kembali
              </button>
              <button
                type="submit"
                form="editData"
                class="btn btn-oke"
                style="width: 45%"
              >
                Ubah Data
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Konfirmasi Hapus -->
      <div
        class="modal fade"
        id="modalKonfirmasiH"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalKonfirmasiH"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title fs-5 black fw-bold col-11 text-center"
                id="modalKonfirmasiH"
              >
                Konfirmasi
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form
                id="hapusData"
                action="{{ route('peta.delete') }}"
                method="POST"
              >
              @csrf
                <input type="text" name="id" id="id_hapus" hidden />
              </form>
              <h4>Apakah anda yakin untuk hapus data peta bidang tersebut?</h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button
                type="button"
                class="btn btn-batal"
                style="width: 45%"
                data-dismiss="modal"
              >
                Kembali
              </button>
              <button
                type="submit"
                form="hapusData"
                class="btn btn-hapus"
                style="width: 45%"
              >
                Hapus Data
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Lihat Peta Bidang -->
      <div
        class="modal fade"
        id="modalLihat"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalLihat"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5
                class="modal-title text-center col-11 fs-5 black fw-bold"
                id="modelTambah"
              >
                Lihat Peta Bidang
              </h5>
              <button
                type="button"
                class="close col-1"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="images/dist/oke.jpg" id="modalImage" alt="" class="d-block mx-auto" style="width: 100% !important; height: auto !important" />
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer text-center">
        <strong>&copy; Copyright 2022 Aplikasi Penilaian Pertanahan</strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- data table -->
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/v/bs4/dt-1.13.1/r-2.4.0/datatables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"
    ></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable({
          seraching: true,
          ordering: false,
          paging: true,
        });
      });
    </script>
    <script type="text/javascript">$(document).on("click", ".open-modalLihat", function () {
      var eventId = $(this).data('id');
      // alert(eventId);
      document.getElementById('modalImage').src="images/"+eventId;
    });
    </script>
        <script type="text/javascript">$(document).on("click", ".open-modalEdit", function () {
          var eventId = $(this).data('id');
          document.getElementById("id_edit").value = eventId;
          var petaURL = $(this).data('url');
          $.ajax({
                url: petaURL,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#nomorEdit').attr('value', data[0].nomor);
                    $('#judulEdit').attr('value',data[0].judul);
                    $('#deskripsiEdit').html(data[0].deskripsi);
                    $('#labelFrame').html(data[0].namaGambar)
                    $('#frameEdit').attr('src',"images/"+data[0].namaGambar)

                }
            });
        });
    </script>
        <script type="text/javascript">$(document).on("click", ".open-modalHapus", function () {
          var eventId = $(this).data('id');
          document.getElementById("id_hapus").value = eventId;
        });
    </script>
  </body>
</html>
