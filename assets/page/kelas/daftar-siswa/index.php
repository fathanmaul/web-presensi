<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Presensi | Data Kelas</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../assets/images/logo/new_logo/logo-login.png">

    <!-- page css -->
    <link href="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Core css -->
    <link href="../../../assets/css/app.min.css" rel="stylesheet">

    <!-- Material Icons -->
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <?php include '../../../templates/header_profile.php' ?>
            <!-- Header END -->


            <!-- Sidebar START -->
            <?php include '../../../templates/sidebar.php' ?>
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
                                                <h1 class="mb-5 font-weight-bold">Daftar Siswa</h1>
                                            </div>
                                            <div>
                                                <h1 class="mb-5 font-weight-bold">X MIPA 1</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-md-12 my-2">
                                                <div class="form-group">
                                                    <input type="text" style="width: 100%;" class="form-control" id="formGroupExampleInput" placeholder="Cari Siswa">
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-12 my-2">
                                                <button class="btn btn-success" style="width: 100%;">
                                                    <i class="anticon anticon-search" style="width: 100%;"></i>
                                                </button>
                                            </div>
                                            <div class="col-lg-1 col-md-12 my-2">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" style="width: 100%;" data-target="#exampleModal">
                                                    <i class="anticon anticon-plus" style="width: 100%;"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 20px;">No</th>
                                                            <th scope="col" style="width: 120px;">NIS</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col" style="width: 130px;">Jenis Kelamin</th>
                                                            <th scope="col" style="width: 150px; text-align: center;">Ubah / Hapus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>E41212174</td>
                                                            <td>Fathan Maulana</td>
                                                            <td>L</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#btn-ubah-siswa">
                                                                    <i class="anticon anticon-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                                    <i class="anticon anticon-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>E41212122</td>
                                                            <td>Muhammad Sulaiman</td>
                                                            <td>L</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#btn-ubah-siswa">
                                                                    <i class="anticon anticon-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                                    <i class="anticon anticon-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>E41212124</td>
                                                            <td>Lutfi Zahroni Shobri</td>
                                                            <td>L</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#btn-ubah-siswa">
                                                                    <i class="anticon anticon-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                                    <i class="anticon anticon-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>E41212128</td>
                                                            <td>Andini Putri Ramadhani</td>
                                                            <td>P</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#btn-ubah-siswa">
                                                                    <i class="anticon anticon-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                                    <i class="anticon anticon-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>E41212151</td>
                                                            <td>Ismiati Eka Oktafia</td>
                                                            <td>P</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#btn-ubah-siswa">
                                                                    <i class="anticon anticon-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#">
                                                                    <i class="anticon anticon-delete"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Tambah Siswa Modal -->
                                        <div class="modal fade" id="exampleModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-idcard" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="nis" class="form-control" placeholder="Nomor Induk Siswa" aria-label="NIS" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-user" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-home" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa" aria-label="Alamat Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-contacts" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="telepon" class="form-control" placeholder="Telepon/HP Siswa" aria-label="Telepon/HP Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <label for="radio" class="mr-3">Jenis Kelamin</label>
                                                            <div class="radio mr-3">
                                                                <input id="radio1" name="radioDemo" type="radio" checked="">
                                                                <label for="radio1">Laki-Laki</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input id="radio2" name="radioDemo" type="radio">
                                                                <label for="radio2">Perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger text-white mr-2" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tambah Siswa Modal -->


                                        <!-- Ubah Siswa Modal -->
                                        <div class="modal fade" id="btn-ubah-siswa">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Siswa</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <i class="anticon anticon-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-idcard" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="nis" class="form-control" placeholder="Nomor Induk Siswa" aria-label="NIS" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-user" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" aria-label="Nama Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-home" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa" aria-label="Alamat Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="anticon anticon-contacts" style="font-size: 20px;"></i></span>
                                                            </div>
                                                            <input type="text" name="telepon" class="form-control" placeholder="Telepon/HP Siswa" aria-label="Telepon/HP Siswa" aria-describedby="basic-addon1">
                                                        </div>
                                                        <div class="input-group mb-4">
                                                            <label for="radio" class="mr-3">Jenis Kelamin</label>
                                                            <div class="radio mr-3">
                                                                <input id="radio1" name="radioDemo" type="radio" checked="">
                                                                <label for="radio1">Laki-Laki</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input id="radio2" name="radioDemo" type="radio">
                                                                <label for="radio2">Perempuan</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger text-white mr-2" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Ubah Siswa Modal -->
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
    <script src="../../../assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="../../../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../../../assets/js/pages/dashboard-project.js"></script>

    <!-- Core JS -->
    <script src="../../../assets/js/app.min.js"></script>
</body>

</html>