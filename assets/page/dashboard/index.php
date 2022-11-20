<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Presensi | Dashboard</title>

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
                                                <h1 class="mb-0 font-weight-bold">Selamat Datang, Fathan!</h1>
                                            </div>
                                        </div>
                                        <div class="m-t-50">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card bg-primary">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="m-b-0 text-white">Hadir</p>
                                                                    <h2 class="m-b-0 text-white">
                                                                        <span>120</span>
                                                                    </h2>
                                                                </div>
                                                                <div class="avatar avatar-icon avatar-lg avatar-white">
                                                                    <i class="anticon anticon-user text-primary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card bg-success">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="m-b-0 text-white">Izin</p>
                                                                    <h2 class="m-b-0 text-white">
                                                                        <span>4</span>
                                                                    </h2>
                                                                </div>
                                                                <div class="avatar avatar-icon avatar-lg avatar-white">
                                                                    <i class="anticon anticon-user text-success"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card bg-warning">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="m-b-0 text-white">Sakit</p>
                                                                    <h2 class="m-b-0 text-white">
                                                                        <span>10</span>
                                                                    </h2>
                                                                </div>
                                                                <div class="avatar avatar-icon avatar-lg avatar-white">
                                                                    <i class="anticon anticon-user text-warning"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3">
                                                    <div class="card bg-danger">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <p class="m-b-0 text-white">Tanpa Ket.</p>
                                                                    <h2 class="m-b-0 text-white">
                                                                        <span>3</span>
                                                                    </h2>
                                                                </div>
                                                                <div class="avatar avatar-icon avatar-lg avatar-white">
                                                                    <i class="anticon anticon-user text-danger"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h4 class="mb-0">Informasi Akademik</h4>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img class="img-fluid" src="../../assets/images/others/img-2.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="m-b-10">Maaf, Fitur ini masih dalam tahap pengembangan</h4>

                                                        <p class="m-b-20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore voluptas nesciunt eos quibusdam. Voluptatibus obcaecati enim maxime vitae id iure.</p>
                                                        <div class="text-right">
                                                            <a class="btn btn-hover font-weight-semibold" href="#">
                                                                <span>Lihat Selengkapnya</span>
                                                            </a>
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