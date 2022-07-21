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
        <title>Detail Data Warga</title>
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
            <a class="navbar-brand" href="data-warga.php" style="font-family:roboto; font-weight:bold;">SIDESA</a>
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
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" style="text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>&nbsp;<?php echo $user, " - ", $as  ?></button>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="data-warga.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Warga
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
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <h4 class="text-center" style="font-family: habibi; font-weight: bold;">Detail Data Warga</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                $id_warga = $_GET['id_warga'];
                                $getdatawarga = mysqli_query($conn, "SELECT * FROM data_warga WHERE id_warga = '$id_warga'");
                                while ($data = mysqli_fetch_array($getdatawarga)) {
                                ?>
                                    <!-- <div style="position: absolute;"> -->
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th width="20%">Nomor Kartu Keluarga</th>
                                                <td width="0px">:</td>
                                                <td width="80%"><?php echo $data['nokk'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>NIK</th>
                                                <td>:</td>
                                                <td><?php echo $data['nik'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td><?php echo $data['nama'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status Dalam Keluarga</th>
                                                <td>:</td>
                                                <td><?php echo $data['statuskeluarga'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td>:</td>
                                                <td><?php echo $data['jk'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td>:</td>
                                                <td><?php echo $data['tempatlahir'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td>:</td>
                                                <td><?php echo $data['tanggallahir'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Usia</th>
                                                <td>:</td>
                                                <td><?php echo $data['usia'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Agama</th>
                                                <td>:</td>
                                                <td><?php echo $data['agama'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Pendidikan</th>
                                                <td>:</td>
                                                <td><?php echo $data['pendidikan'] ?></td>
                                            <tr>
                                                <th>Pekerjaan</th>
                                                <td>:</td>
                                                <td><?php echo $data['pekerjaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status Perkawinan</th>
                                                <td>:</td>
                                                <td><?php echo $data['statusperkawinan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis BPJS</th>
                                                <td>:</td>
                                                <td><?php echo $data['jenisbpjs'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Bansos Yang Diterima</th>
                                                <td>:</td>
                                                <td><?php echo $data['jenisbansos'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Status Vaksinasi</th>
                                                <td>:</td>
                                                <td><?php echo $data['statusvaksinasi'] ?></td>
                                            <tr>
                                                <th>Status Rumah Tinggal</th>
                                                <td>:</td>
                                                <td><?php echo $data['statusrumah'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>KTP Yang Digunakan</th>
                                                <td>:</td>
                                                <td><?php echo $data['ktp'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Handphone</th>
                                                <td>:</td>
                                                <td><?php echo $data['nohp'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Perusahaan Tempat Kerja</th>
                                                <td>:</td>
                                                <td><?php echo $data['namaperusahaan'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Daerah Asal (Kabupaten/Provinsi)</th>
                                                <td>:</td>
                                                <td><?php echo $data['daerahasal'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat Sesuai KTP Desa Klari</th>
                                                <td>:</td>
                                                <td><?php echo $data['alamatsesuaiktpdesaklari'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Dusun/Perum</th>
                                                <td>:</td>
                                                <td><?php echo $data['dusunorperum'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RT</th>
                                                <td>:</td>
                                                <td><?php echo $data['rt'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>RW</th>
                                                <td>:</td>
                                                <td><?php echo $data['rw'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat Domisili Sekarang</th>
                                                <td>:</td>
                                                <td><?php echo $data['domisilisekarang'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                <?php } ?>
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