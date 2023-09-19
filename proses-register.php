<?php 

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

include 'koneksi.php';

$sql = "INSERT INTO masyarakat(nik, nama, username, password, telp) VALUES ('$nik', '$nama', '$username', '$password', '$telp')";
$query = mysqli_query($koneksi, $sql);

if($query) {
    echo "<script>alert('Anda berhasil mendaftar.'); window.location.assign('login.php');</script>";
} else {
    echo "<script>alert('Anda gagal mendaftar.'); window.location.assign('daftar.php');</script>";
}