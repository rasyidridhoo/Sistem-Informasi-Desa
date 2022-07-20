<?php include('koneksi.php');
$nama = $_POST['nama'];
$nokk = $_POST['nokk'];
$email = $_POST['email'];
$password = $_POST['password'];
$status_user = $_POST['status_user'];

$sql = mysqli_query($conn, "insert into users(nama_user, nokk, email, password, status_user) VALUES ('$nama', '$nokk', '$email', '$password', '$status_user')");

if ($sql) {
    echo "<script> alert ('Anda berhasil mendaftar')</script>";
    header("refresh:0; login.php");
} else {
    echo "<script> alert ('Anda gagal mendaftar')</script>";
    header("refresh:0; register.php");
}
