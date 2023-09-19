
<?php 
    $id = $_GET['id'];
    if(empty($id)) {
        header("Location:masyarakat.php");
    }

    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan = '$id' AND tanggapan.id_pengaduan = pengaduan.id_pengaduan");
    

    
?>


<div class ="card shadow">
<div class ="card-header">
    <a href="?url=lihat-laporan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
            <i class =" fa fa-arrow-left"></i>
            
        </span>
        <span class="text">kembali</span>
    </a>    
</div>
<div class="card-body">
<?php 
    if(mysqli_num_rows($query)==0) {
        echo "<div class='alert alert-danger'>Maaf Tanggapan anda belum ditanggapi.</div>";
    } else {
        $data = mysqli_fetch_array($query);
?>
<form method="POST" action="proses-pengaduan.php" enctype="multipart/form-data">
    
    <div class="form-group">
        <label style="font-size: 14px">Tgl Pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly  value="<?= $data['tgl_tanggapan'];?> " >
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Laporan</label>
        <textarea name="isi_lapoan" class="form-control" readonly><?= $data['isi_laporan'];?></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Tanggapan</label>
        <textarea name="tanggapan" class="form-control" readonly><?= $data['tanggapan'];?></textarea>
    </div>

    
    <?php } ?>
</form>
</div>
</div>
