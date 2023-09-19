<?php 
$id = $_GET['id'];
if(empty($id)) {
    header("Location:lihat-pengaduan.php");
}
?>

<div class ="card shadow">
<div class ="card-header">
    Tanggapan
     
    
<div class="card-body">
<a href="?url=tanggapi-pengaduan" class="btn btn-primary btn-icon-split">
    
    <span class="icon text-white-5">
        <i class =" fa fa-arrow-left"></i>
        
    </span>
    <span class="text">Kembali</span>
</a>  
<form method="POST" action="simpan-tanggapan.php" enctype="multipart/form-data">
    <input type="hidden" name="id_pengaduan" value="<?php echo $id; ?>">
    <br><br>
    <div class="form-group">
        <label style="font-size: 14px">Tgl Tanggapan</label>
        <input type="text" name="tgl_tanggapan" class="form-control" readonly  value="<?= date('Y-m-d');?> " >
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Isi Tanggapan</label>
        <textarea name="tanggapan" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px">ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
    </div>
    <input type="submit" value="Tanggapi" class="btn btn-primary btn-user">

    

</form>
</div>
</div>