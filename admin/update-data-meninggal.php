<?php
include("../koneksi.php");
$id_warga = $_POST['id_warga_meninggal'];
$tanggalmeninggal = $_POST['tanggal_meninggal'];
$sebab = $_POST['sebab'];


$sql = mysqli_query($conn, "UPDATE data_warga_meninggal SET id_warga_meninggal = '$id_warga', tanggal_meninggal='$tanggalmeninggal', sebab='$sebab'WHERE id_warga_meninggal = '$id_warga'");


if ($sql) {
    echo "<script> alert ('Data berhasil diupdate')</script>";
    header("refresh:0; data-meninggal-admin.php");
} else {
    echo "<script> alert ('Data gagal diupdate')</script>";
    header("refresh:0; data-meninggal-admin.php");
}
