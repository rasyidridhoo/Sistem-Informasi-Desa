<?php
include("../koneksi.php");
$id_warga = $_GET['id_warga_mutasi'];

$sql = mysqli_query($conn, "DELETE FROM data_warga_mutasi WHERE id_warga_mutasi = '$id_warga'");

if ($sql) {
    echo "<script> alert ('Data berhasil dihapus')</script>";
    header("refresh:0; data-mutasi-admin.php");
} else {
    echo "<script> alert ('Data gagal dihapus')</script>";
    header("refresh:0; data-mutasi-admin.php");
}
