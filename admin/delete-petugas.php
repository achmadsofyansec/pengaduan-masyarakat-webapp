<?php 
    require'../koneksi.php';
    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE from petugas where id_petugas='$id' ");

    if($sql) {
    ?>
    <script>
            alert('Data berhasil dihapus');
            window.location='admin.php?url=lihat-petugas';
    </script>
<?php
}
?>