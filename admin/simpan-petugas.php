<?php 
    require"../koneksi.php";
    $nama = $_POST['nama_petugas'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    $sql = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas, username, password, telp, level) VALUES('$nama', '$user', '$pass', '$telp', '$level')");
    if($sql) { ?>
        <script>
            alert('Data berhasil disimpan');
            window.location='admin.php?url=lihat-petugas';
        </script>
<?php
    }
?>