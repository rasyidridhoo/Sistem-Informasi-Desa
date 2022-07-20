<?php
include("../koneksi.php");
$id_warga = $_POST['id_warga'];
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

$sql = mysqli_query($conn, "UPDATE data_warga SET nokk = '$nokk', nik='$nik', nama='$nama', statuskeluarga='$statuskeluarga', jk='$jk', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', usia='$usia', agama='$agama', pendidikan='$pendidikan', pekerjaan='$pekerjaan', statusperkawinan='$statusperkawinan', jenisbpjs='$jenisbpjs', jenisbansos='$jenisbansos', statusvaksinasi='$statusvaksinasi', statusrumah='$statusrumah', ktp='$ktp', nohp='$nohp', namaperusahaan='$namaperusahaan', daerahasal='$daerahasal', alamatsesuaiktpdesaklari='$alamatsesuaiktpdesaklari',  dusunorperum='$dusunorperum', rt='$rt', rw='$rw', domisilisekarang='$domisilisekarang' WHERE id_warga = '$id_warga'");


if ($sql) {
    echo "<script> alert ('Data berhasil diupdate')</script>";
    header("refresh:0; data-warga.php");
} else {
    echo "<script> alert ('Data gagal diupdate')</script>";
    header("refresh:0; data-warga.php");
}
