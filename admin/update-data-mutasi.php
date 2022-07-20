<?php
include("../koneksi.php");
$id_warga = $_POST['id_warga_mutasi'];
$tanggalmutasi = $_POST['tanggal_mutasi'];
$sebab = $_POST['sebab'];


$sql = mysqli_query($conn, "UPDATE data_warga_mutasi SET id_warga_mutasi = '$id_warga', tanggal_mutasi='$tanggalmutasi', sebab='$sebab'WHERE id_warga_mutasi = '$id_warga'");


if ($sql) {
    echo "<script> alert ('Data berhasil diupdate')</script>";
    header("refresh:0; data-mutasi-admin.php");
} else {
    echo "<script> alert ('Data gagal diupdate')</script>";
    header("refresh:0; data-mutasi-admin.php");
}
