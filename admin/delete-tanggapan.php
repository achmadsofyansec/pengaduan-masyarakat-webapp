<?php 
    require'../koneksi.php';
    $id = $_GET['id_tanggapan'];

    $sql = mysqli_query($koneksi, "DELETE from tanggapan where id_tanggapan='$id' ");

    if($sql) {
    ?>
    <script>
            alert('Data berhasil dihapus');
            
    </script>
<?php
}
?>