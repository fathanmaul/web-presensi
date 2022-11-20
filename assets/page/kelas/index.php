<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Presensi | Data Kelas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/logo/new_logo/logo-login.png">

    <!-- page css -->
    <link href="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="../../assets/css/app.min.css" rel="stylesheet">

    <!-- Material Icons -->
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <?php include '../../templates/header_profile.php' ?>
            <!-- Header END -->


            <!-- Sidebar START -->
            <?php include '../../templates/sidebar.php' ?>
            <!-- Sidebar END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h1 class="mb-5 font-weight-bold">Daftar Kelas</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-md-12 my-2">
                                                <div class="form-group">
                                                    <input type="text" style="width: 100%;" class="form-control" id="formGroupExampleInput" placeholder="Cari Kelas">
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-12 my-2">
                                                <button class="btn btn-success" style="width: 100%;">
                                                    <i class="anticon anticon-search" style="width: 100%;"></i>
                                                </button>
                                            </div>
                                            <div class="col-lg-1 col-md-12 my-2">
                                                <button type="button" class="btn btn-primary" style="width: 100%;" data-toggle="modal" data-target="#btn-tambah-kelas">
                                                    <i class=" anticon anticon-plus" style="width: 100%;"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span>Tahun Ajaran</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">2020/2021</a>
                                                <a class="dropdown-item" href="#">2021/2022</a>
                                                <a class="dropdown-item" href="#">2022/2023</a>
                                            </div>
                                        </div> -->
                                        <div class="m-t-10">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="mb-3">X MIPA 1 <span><a href="#" data-toggle="modal" data-target="#btn-ubah-kelas"><i class="anticon anticon-edit"></i></a></span></p>
                                                                    <h2 class="m-b-0">
                                                                        <span>30</span>
                                                                    </h2>
                                                                    <p>Siswa</p>

                                                                </div>
                                                                <a href="#">
                                                                    <div class="avatar avatar-icon avatar-lg avatar-white">
                                                                        <i class="anticon anticon-form text-success"></i>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tambah Kelas Modal -->
                                        <div class="modal fade" id="btn-tambah-kelas">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">groups</i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Nama Kelas" aria-label="Nama Kelas" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Ubah Kelas Modal -->
                                        <div class="modal fade" id="btn-ubah-kelas">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Kelas</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">groups</i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Nama Kelas" aria-label="Nama Kelas" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-success">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Wrapper END -->
                </div>
            </div>

            <!-- Page Container END -->

        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="../../assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="../../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../../assets/js/pages/dashboard-project.js"></script>

    <!-- Core JS -->
    <script src="../../assets/js/app.min.js"></script>
</body>

</html>