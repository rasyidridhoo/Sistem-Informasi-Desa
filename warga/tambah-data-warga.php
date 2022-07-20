<?php

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
        <title>Tambah Data Warga</title>
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
            <a class="navbar-brand" href="dashboard_admin.php" style="font-family:roboto; font-weight:bold;">SIDESA</a>
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
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" style="text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>&nbsp;pengguna</button>
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
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg></div>
                                Data Warga
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <a class="nav-link" href="../logout-proses.php">
                            <div class=" sb-nav-link-icon">
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
                                <h4 class="text-center" style="font-family: habibi; font-weight: bold;">Tambah Data Warga</h4>
                            </div>
                            <div class="card-body">
                                <form action="simpan-data-warga.php" method="POST">
                                    <?php
                                    include('../koneksi.php');
                                    $id_login = $_SESSION['login_id'];
                                    $getdatawarga = mysqli_query($conn, "SELECT * FROM users WHERE id_user=$id_login");
                                    while ($cek = mysqli_fetch_assoc($getdatawarga)) {
                                    ?>

                                        <div class="row mb-3">
                                            <label for="nokk" class="col-sm-2 col-form-label">Nomor Kartu Keluarga</label>
                                            <div class="col-sm-10">
                                                <input type="text" minlength="16" class="form-control" id="nokk" name="nokk" value="<?php echo $cek['nokk'] ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" minlength="16" class="form-control" id="nik" name="nik">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>
                                        <fieldset class="row mb-3">
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
                                        </fieldset>
                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <div class="row mb-3">
                                            <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="usia" name="usia">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="agama" name="agama">
                                            </div>
                                        </div>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <div class="row mb-3">
                                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                            </div>
                                        </div>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <fieldset class="row mb-3">
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
                                        </fieldset>

                                        <div class="row mb-3">
                                            <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="nohp" name="nohp">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="namaperusahaan" class="col-sm-2 col-form-label">Nama Perusahaan Tempat Kerja</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="daerahasal" class="col-sm-2 col-form-label">Daerah Asal (Kabupaten/Provinsi)</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="daerahasal" name="daerahasal">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="alamatsesuaiktpdesaklari" class="col-sm-2 col-form-label">Alamat Sesuai KTP Desa Klari</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="alamatsesuaiktpdesaklari" name="alamatsesuaiktpdesaklari"> </textarea>
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label for="dusunorperum" class="col-sm-2 col-form-label">Dusun/Perum</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="dusunorperum" name="dusunorperum">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="rt" name="rt">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="rw" name="rw">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="domisilisekarang" class="col-sm-2 col-form-label">Alamat Domisili sekarang</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="domisilisekarang" name="domisilisekarang"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary float-end">Tambah</button>
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