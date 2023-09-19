<?php 
    require'../koneksi.php';
    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from pengaduan where nik='$id' ");

    if($sql) {
    ?>
    <script>
            alert('Data berhasil dihapus');
            window.location='admin.php?url=lihat-pengaduan';
    </script>
<?php
}
?>