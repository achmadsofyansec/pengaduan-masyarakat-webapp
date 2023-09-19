<?php 

$nik = $_POST['nik'];
$password = $_POST['pass'];

include 'koneksi.php';
$sql = "SELECT * FROM masyarakat where nik = '$nik' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) > 0) {
    session_start();
    $_SESSION['nik'] = $nik;
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];

    header("Location:masyarakat.php");
} else {
    echo "<script>alert('Maaf Anda Gagal Login'); window.location.assign('login.php');</script>";
}