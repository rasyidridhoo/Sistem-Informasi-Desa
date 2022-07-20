<?php
include("../koneksi.php");


    if (isset($_POST['Simpan'])) {
        //mulai proses simpan data
        $sql_simpan = "INSERT INTO data_warga_meninggal (id_warga1, tanggal_meninggal, sebab) VALUES (
			'" . $_POST['id_warga1'] . "',
            '" . $_POST['tanggal_meninggal'] . "',
            '" . $_POST['sebab'] . "')";
        $query_simpan = mysqli_query($conn, $sql_simpan);

        $sql_ubah = "UPDATE data_warga SET 
			status='Meninggal'
			WHERE id_warga='" . $_POST['id_warga1'] . "'";
        $query_ubah = mysqli_query($conn, $sql_ubah);
        mysqli_close($conn);

        if ($query_simpan && $query_ubah) {
            echo "<script> alert ('Data berhasil ditambahkan')</script>";
            header("refresh:0; data-meninggal-admin.php");
        } else {
            echo "<script> alert ('Data berhasil gagal ditambahkan')</script>";
            header("refresh:0; tambah-data-meninggal-admin.php");
        }
    }
