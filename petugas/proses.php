<?php 
    require'../koneksi.php';
    $sql = mysqli_query($koneksi, "update pengaduan set status='proses' where id_pengaduan='$_GET[id]'"); 
    if ($sql) {
        header('location:petugas.php?url=verifikasi_laporan');
    }
?>