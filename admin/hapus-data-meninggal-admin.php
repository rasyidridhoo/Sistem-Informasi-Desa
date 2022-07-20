<?php
include("../koneksi.php");
$id_warga = $_GET['id_warga_meninggal'];

$sql = mysqli_query($conn, "DELETE FROM data_warga_meninggal WHERE id_warga_meninggal = '$id_warga'");

if ($sql) {
    echo "<script> alert ('Data berhasil dihapus')</script>";
    header("refresh:0; data-meninggal-admin.php");
} else {
    echo "<script> alert ('Data gagal dihapus')</script>";
    header("refresh:0; data-meninggal-admin.php");
}
