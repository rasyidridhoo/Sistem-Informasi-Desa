<?php
include('../koneksi.php');
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login-proses.php");
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Data Warga</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .sb-sidenav-menu {
                background-color: #194b77;
            }

            .sb-topnav {
                background-color: #194b77;
            }

            a {
                color: white;
            }

            a:hover {
                color: white;
            }

            .navbar-brand {
                text-align: center;
            }

            .btn {
                color: white;
            }

            .btn:hover {
                color: white;
            }

            .nav-link {
                color: white;
            }

            .nav-link:hover {
                color: white;
            }

            .sb-sidenav-footer {
                background-color: #194b77;
            }

            @media screen and (max-width: 1000px) {

                #content,
                .card {
                    width: 100%;
                }
            }

            .col-form-label {
                font-weight: bold;
                font-family: habibi;
            }
        </style>
    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand">
            <!-- Navbar Brand-->
            <a class="navbar-brand" href="dashboard-admin.php" style="font-family:roboto; font-weight:bold;">SIDESA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <?php
                    $user = $_SESSION['login_akun'];
                    $as =  $_SESSION['login_as'];
                    ?>
                    <div class="row" style="color: white;">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>&nbsp;<?php echo $user, " - ", $as  ?></div>

                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" aria-current="page" href="dashboard-admin.php">
                                <div class="sb-nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                    </svg>
                                </div>
                                Dashboard
                            </a>

                            <!-- Jumlah Data -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" style="color: white;">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Jumlah Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="jumlah-data-jenis-kelamin-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Jenis Kelamin
                                    </a>
                                    <a class="nav-link" href="jumlah-data-status-keluarga-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Status Keluarga
                                    </a>
                                    <a class="nav-link" href="jumlah-data-pendidikan-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Pendidikan
                                    </a>

                                    <a class="nav-link" href="jumlah-data-status-perkawinan-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Status Perkawinan
                                    </a>

                                    <a class="nav-link" href="jumlah-data-jenis-bpjs-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Jenis BPJS
                                    </a>

                                    <a class="nav-link" href="jumlah-data-jenis-bansos-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Jenis Bansos
                                    </a>

                                    <a class="nav-link" href="jumlah-data-status-vaksinasi-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Status Vaksinasi
                                    </a>

                                    <a class="nav-link" href="jumlah-data-status-rumah-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>Status Rumah
                                    </a>

                                    <a class="nav-link" href="jumlah-data-ktp-admin.php">
                                        <div class="sb-nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-record-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            </svg>
                                        </div>KTP
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link" href="data-warga-admin.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Warga
                            </a>
                            <a class="nav-link" href="data-keluarga-admin.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Keluarga
                            </a>
                            <a class="nav-link" href="data-meninggal-admin.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Meninggal
                            </a>
                            <a class="nav-link" href="data-mutasi-admin.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Mutasi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <a class="nav-link" href="../logout-proses.php">
                            <div class="sb-nav-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg></i> &nbsp;Logout
                            </div>
                        </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4 mt-4" style="width: 90%; margin:0 auto;">
                            <div class="card-header">
                                <h4 class="text-center" style="font-family: habibi; font-weight: bold;">Edit Data Warga</h4>
                            </div>
                            <div class="card-body">

                                <form action="update-data-warga-admin.php" method="POST">
                                    <?php
                                    $id_warga = $_GET['id_warga'];
                                    $getdatawarga = mysqli_query($conn, "SELECT * FROM data_warga WHERE id_warga = '$id_warga'");
                                    while ($data = mysqli_fetch_array($getdatawarga)) {
                                    ?>
                                        <input type="hidden" class="form-control" name="id_warga" value="<?php echo $data['id_warga'] ?>">

                                        <div class="row mb-3">
                                            <label for="nokk" class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
                                            <div class="col-sm-10">
                                                <input type="text" minlength="16" class="form-control" id="nokk" name="nokk" value="<?php echo $data['nokk'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" minlength="16" class="form-control" id="nik" name="nik" value="<?php echo $data['nik'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Status Dalam Keluarga</label>
                                            <div class="col-sm-10">
                                                <select name="statuskeluarga" id="statuskeluarga" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Suami">Suami</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Anak">Anak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Status Dalam keluarga</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statuskeluarga" id="suami" value="Suami">
                                                    <label class="form-check-label" for="suami">
                                                        Suami
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statuskeluarga" id="istri" value="Istri">
                                                    <label class="form-check-label" for="istri">
                                                        Istri
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statuskeluarga" id="anak" value="Anak">
                                                    <label class="form-check-label" for="anak">
                                                        Anak
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->
                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="jk" id="jk" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-laki">
                                                    <label class="form-check-label" for="laki">
                                                        Laki-laki
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                                                    <label class="form-check-label" for="perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?php echo $data['tempatlahir'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?php echo $data['tanggallahir'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="usia" name="usia" value="<?php echo $data['usia'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="agama" name="agama" value="<?php echo $data['agama'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Pendidikan</label>
                                            <div class="col-sm-10">
                                                <select name="pendidikan" id="pendidikan" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Tidak Bersekolah">Tidak Bersekolah</option>
                                                    <option value="Belum Bersekolah">Belum Bersekolah</option>
                                                    <option value="PAUD">PAUD</option>
                                                    <option value="TK">TK</option>
                                                    <option value="Sekolah Dasar(SD)">Sekolah Dasar(SD)</option>
                                                    <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                                                    <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                                                    <option value="DIPLOMA/STRATA 1">DIPLOMA/STRATA 1</option>
                                                    <option value="Putus Sekolah">Putus Sekolah</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Pendidikan</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="tb" value="Tidak Bersekolah">
                                                    <label class="form-check-label" for="tb">
                                                        Tidak Bersekolah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="bb" value="Belum Bersekolah">
                                                    <label class="form-check-label" for="bb">
                                                        Belum Bersekolah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="paud" value="PAUD">
                                                    <label class="form-check-label" for="paud">
                                                        PAUD
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="tk" value="TK">
                                                    <label class="form-check-label" for="tk">
                                                        TK
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="sd" value="Sekolah Dasar(SD)">
                                                    <label class="form-check-label" for="sd">
                                                        Sekolah Dasar(SD)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="sltp" value="SLTP/SEDERAJAT">
                                                    <label class="form-check-label" for="sltp">
                                                        SLTP/SEDERAJAT
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="slta" value="SLTA/SEDERAJAT">
                                                    <label class="form-check-label" for="slta">
                                                        SLTA/SEDERAJAT
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="st" value="DIPLOMA/STRATA 1">
                                                    <label class="form-check-label" for="st">
                                                        DIPLOMA/STRATA 1
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pendidikan" id="ps" value="Putus Sekolah">
                                                    <label class="form-check-label" for="ps">
                                                        Putus Sekolah
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Status Perkawinan</label>
                                            <div class="col-sm-10">
                                                <select name="statusperkawinan" id="statusperkawinan" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusperkawinan" id="kawin" value="Kawin">
                                                    <label class="form-check-label" for="kawin">
                                                        Kawin
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusperkawinan" id="mandiri" value="Belum Kawin">
                                                    <label class="form-check-label" for="mandiri">
                                                        Belum Kawin
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusperkawinan" id="ceraimati" value="Cerai Mati">
                                                    <label class="form-check-label" for="ceraimati">
                                                        Cerai Mati
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusperkawinan" id="ceraihidup" value="Cerai Hidup">
                                                    <label class="form-check-label" for="ceraihidup">
                                                        Cerai Hidup
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Jenis BPJS</label>
                                            <div class="col-sm-10">
                                                <select name="jenisbpjs" id="jenisbpjs" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Ketenagakerjaan">Ketenagakerjaan</option>
                                                    <option value="Mandiri">Mandiri</option>
                                                    <option value="KIS">KIS</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis BPJS</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbpjs" id="ketenagakerjaan" value="Ketenagakerjaan">
                                                    <label class="form-check-label" for="ketenagakerjaan">
                                                        Ketenagakerjaan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbpjs" id="mandiri" value="Mandiri">
                                                    <label class="form-check-label" for="mandiri">
                                                        Mandiri
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbpjs" id="kis" value="KIS">
                                                    <label class="form-check-label" for="kis">
                                                        KIS
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbpjs" id="tidakadabpjs" value="Tidak Ada">
                                                    <label class="form-check-label" for="tidakadabpjs">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Jenis Bansos Yang Diterima</label>
                                            <div class="col-sm-10">
                                                <select name="jenisbansos" id="jenisbansos" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="PKH">PKH</option>
                                                    <option value="BPNT">BPNT</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Jenis Bansos yang diterima</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbansos" id="pkh" value="PKH">
                                                    <label class="form-check-label" for="pkh">
                                                        PKH
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbansos" id="bpnt" value="BPNT">
                                                    <label class="form-check-label" for="bpnt">
                                                        BPNT
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenisbansos" id="tidakadabansos" value="Tidak Ada">
                                                    <label class="form-check-label" for="tidakadabansos">
                                                        Tidak Ada
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Status Vaksinasi</label>
                                            <div class="col-sm-10">
                                                <select name="statusvaksinasi" id="statusvaksinasi" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Sudah">Sudah</option>
                                                    <option value="Belum">Belum</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Status Vaksinasi</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusvaksinasi" id="sudah" value="Sudah">
                                                    <label class="form-check-label" for="sudah">
                                                        Sudah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusvaksinasi" id="belum" value="Belum">
                                                    <label class="form-check-label" for="belum">
                                                        Belum
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">Status Rumah Tinggal</label>
                                            <div class="col-sm-10">
                                                <select name="statusrumah" id="statusrumah" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="Pribadi">Pribadi</option>
                                                    <option value="Sewa">Sewa</option>
                                                    <option value="Numpang(ikut Orangtua/Saudara)">Numpang(ikut Orangtua/Saudara)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Status Rumah Tinggal</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusrumah" id="pribadi" value="Pribadi">
                                                    <label class="form-check-label" for="pribadi">
                                                        Pribadi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusrumah" id="sewa" value="Sewa">
                                                    <label class="form-check-label" for="sewa">
                                                        Sewa
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="statusrumah" id="numpang" value="Numpang(ikut Orangtua/Saudara)">
                                                    <label class="form-check-label" for="numpang">
                                                        Numpang(ikut Orangtua/Saudara)
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label class=" col-sm-2 col-form-label">KTP yang digunakan</label>
                                            <div class="col-sm-10">
                                                <select name="ktp" id="ktp" class="form-select" aria-label="Default select example" required>
                                                    <option disabled selected value>- Pilih -</option>
                                                    <option value="KTP Desa Klari">KTP Desa Klari</option>
                                                    <option value="KTP Asal">KTP Asal</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">KTP yang digunakan</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ktp" id="klari" value="KTP Desa Klari">
                                                    <label class="form-check-label" for="klari">
                                                        KTP Desa Klari
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ktp" id="asal" value="KTP Asal">
                                                    <label class="form-check-label" for="asal">
                                                        KTP Asal
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset> -->

                                        <div class="row mb-3">
                                            <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="nohp" name="nohp" value="<?php echo $data['nohp'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama Perusahaan Tempat Kerja</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" value="<?php echo $data['namaperusahaan'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="daerahasal" class="col-sm-2 col-form-label">Daerah Asal (Kabupaten/Provinsi)</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="daerahasal" name="daerahasal" value="<?php echo $data['daerahasal'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="alamatsesuaiktpdesaklari" class="col-sm-2 col-form-label">Alamat Sesuai KTP Desa Klari</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="alamatsesuaiktpdesaklari" name="alamatsesuaiktpdesaklari" value="<?php echo $data['alamatsesuaiktpdesaklari'] ?>" required>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label for="dusunorperum" class="col-sm-2 col-form-label">Dusun/Perum</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dusunorperum" name="dusunorperum" value="<?php echo $data['dusunorperum'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="rt" name="rt" value="<?php echo $data['rt'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="rw" name="rw" value="<?php echo $data['rw'] ?>" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="domisilisekarang" class="col-sm-2 col-form-label">Alamat Domisili sekarang</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="domisilisekarang" name="domisilisekarang" value="<?php echo $data['domisilisekarang'] ?>" required></input>
                                            </div>
                                        </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="data-warga-admin.php" title="Kembali" class="btn btn-danger">Batal</a>
                            </div>

                        <?php } ?>
                        </form>


                        </div>
                    </div>
            </div>
            </main>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>

    </html>

<?php } ?>