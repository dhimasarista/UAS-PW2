<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kelompok 9</title>
    <!-- Add the following meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include the stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0-beta3/css/all.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Kelompok 9</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Home -->
                        <li class="nav-item">
                            <a href="{{ route('index')}}" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <!-- Bank -->
                        <li class="nav-item">
                        <a class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>Bank Sampah</p>
                            </a>
                        </li>

                        <!-- Manajemen Nasabah -->
                        <li class="nav-item">
                            <a href="{{ route('nasabah')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manajemen Nasabah</p>
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
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><i class="fas fa-home"></i> Manajemn Bank Sampah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i><a href="#"> Manajemn Bank Sampah</a></li>
                        <li class="breadcrumb-item active">Harga Jual Sampah</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <!-- Data Harga Sampah Card -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-home"></i><b> Data Harga Sampah</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Table -->
                <table id="jenisSampahTable" class="table table-hover table-striped" >
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Harga/KG</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jenisSampah as $item)
                        <tr  height="10">
                            <td>{{ $item->jenis_sampah_id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->harga_per_kg }}/KG</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#editModal{{ $item->id }}"><i class="fas fa-edit"></i> Ubah</button>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $item->id }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModal{{ $item->id }}Label">Ubah Data Jenis Sampah</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('jenis-sampah.update', ['id' => $item->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="harga_per_kg">Harga/KG</label>
                                                <input type="number" class="form-control" id="harga_per_kg" name="harga_per_kg" value="{{ $item->harga_per_kg }}">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- Edit Form -->
    </div>
</div>
    </section>
    <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- Footer content -->
        </footer>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.js') }}"></script>
    <!-- DataTables -->
    <script>
        $(function () {
            $('#jenisSampahTable').DataTable();
        });
    </script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
