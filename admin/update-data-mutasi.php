<?php
include("../koneksi.php");
$id_warga = $_POST['id_warga_mutasi'];
$tanggalmutasi = $_POST['tanggal_mutasi'];
$sebab = $_POST['sebab'];
$alamat_mutasi = $_POST['alamat_mutasi'];


$sql = mysqli_query($conn, "UPDATE data_warga_mutasi SET id_warga_mutasi = '$id_warga', tanggal_mutasi='$tanggalmutasi', sebab='$sebab', alamat_mutasi='$alamat_mutasi' WHERE id_warga_mutasi = '$id_warga'");


if ($sql) {
    echo "<script> alert ('Data berhasil diupdate')</script>";
    header("refresh:0; data-mutasi-admin.php");
} else {
    echo "<script> alert ('Data gagal diupdate')</script>";
    header("refresh:0; data-mutasi-admin.php");
}
