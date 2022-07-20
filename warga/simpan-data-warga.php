<?php
include("../koneksi.php");

$nokk = $_POST['nokk'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$statuskeluarga = $_POST['statuskeluarga'];
$jk = $_POST['jk'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$usia = $_POST['usia'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$statusperkawinan = $_POST['statusperkawinan'];
$jenisbpjs = $_POST['jenisbpjs'];
$jenisbansos = $_POST['jenisbansos'];
$statusvaksinasi = $_POST['statusvaksinasi'];
$statusrumah = $_POST['statusrumah'];
$ktp = $_POST['ktp'];
$nohp = $_POST['nohp'];
$namaperusahaan = $_POST['namaperusahaan'];
$daerahasal = $_POST['daerahasal'];
$alamatsesuaiktpdesaklari = $_POST['alamatsesuaiktpdesaklari'];
$dusunorperum = $_POST['dusunorperum'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$domisilisekarang = $_POST['domisilisekarang'];

$sql = mysqli_query($conn, "insert into data_warga(nokk, nik, nama, statuskeluarga, jk, tempatlahir, tanggallahir, usia, agama, pendidikan, pekerjaan, statusperkawinan, jenisbpjs, jenisbansos, statusvaksinasi, statusrumah, ktp, nohp, namaperusahaan, daerahasal, alamatsesuaiktpdesaklari, dusunorperum, rt, rw, domisilisekarang) VALUES ('$nokk', '$nik', '$nama', '$statuskeluarga', '$jk', '$tempatlahir', '$tanggallahir', '$usia', '$agama', '$pendidikan', '$pekerjaan', '$statusperkawinan', '$jenisbpjs', '$jenisbansos', '$statusvaksinasi', '$statusrumah', '$ktp', '$nohp', '$namaperusahaan', '$daerahasal', '$alamatsesuaiktpdesaklari', '$dusunorperum', '$rt', '$rw', '$domisilisekarang')");

if ($sql) {
    echo "<script> alert ('Data berhasil ditambahkan')</script>";
    header("refresh:0; data-warga.php");
} else {
    echo "<script> alert ('Data gagal ditambahkan')</script>";
    header("refresh:0; data-warga.php");
}
