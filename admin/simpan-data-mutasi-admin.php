<?php
include("../koneksi.php");


if (isset($_POST['Simpan'])) {
    //mulai proses simpan data
    $sql_simpan = "INSERT INTO data_warga_mutasi (id_warga2, tanggal_mutasi, sebab, alamat_mutasi) VALUES (
			'" . $_POST['id_warga2'] . "',
            '" . $_POST['tanggal_mutasi'] . "',
            '" . $_POST['sebab'] . "',
            '" . $_POST['alamat_mutasi'] . "')";
    $query_simpan = mysqli_query($conn, $sql_simpan);

    $sql_ubah = "UPDATE data_warga SET 
			status='pindah'
			WHERE id_warga='" . $_POST['id_warga2'] . "'";
    $query_ubah = mysqli_query($conn, $sql_ubah);
    mysqli_close($conn);

    if ($query_simpan && $query_ubah) {
        echo "<script> alert ('Data berhasil ditambahkan')</script>";
        header("refresh:0; data-mutasi-admin.php");
    } else {
        echo "<script> alert ('Data berhasil gagal ditambahkan')</script>";
        header("refresh:0; tambah-data-mutasi-admin.php");
    }
}
