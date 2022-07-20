<?php
include("../koneksi.php");
$id_warga = $_GET['id_warga'];

$sql = mysqli_query($conn, "DELETE FROM data_warga WHERE id_warga = '$id_warga'");

if ($sql) {
    echo "<script> alert ('Data berhasil dihapus')</script>";
    header("refresh:0; data-warga.php");
} else {
    echo "<script> alert ('Data gagal dihapus')</script>";
    header("refresh:0; data-warga.php");
}
