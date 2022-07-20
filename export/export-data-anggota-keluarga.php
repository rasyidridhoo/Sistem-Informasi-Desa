<?php include('../koneksi.php') ?>
<!doctype html>
<html lang="en">

<head>
    <title>Laporan Data Anggota Keluarga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="data_table">
                <table id="empTable" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. KK</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Status Anggota KK</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $nokk = $_GET['nokk'];
                        $getdataanggotakeluarga = mysqli_query($conn, "SELECT * FROM data_warga where nokk='$nokk'");
                        while ($cek = mysqli_fetch_assoc($getdataanggotakeluarga)) {
                            $nokk = $cek['nokk'];
                            $nik = $cek['nik'];
                            $nama = $cek['nama'];
                            $statuskeluarga = $cek['statuskeluarga'];
                            $status = $cek['status']
                        ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $nokk ?></td>
                                <td><?php echo $nik ?></td>
                                <td><?php echo $nama ?></td>
                                <td><?php echo $statuskeluarga ?></td>
                                <td><?php echo $status ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="../assets/demo/export-data.js"></script>
</body>

</html>