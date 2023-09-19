<div class ="card shadow">
<div class ="card-header">
    <a href="admin.php?url=lihat-petugas" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-5">
            <i class =" fa fa-arrow-left"></i>
            
        </span>
        <span class="text">kembali</span>
    </a>    
</div>
<div class="card-body">
<?php 
    require"../koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM petugas where id_petugas='$_GET[id]'");
    if($data = mysqli_fetch_array($sql)) {

?>
<form method="POST" action="update-petugas.php" enctype="multipart/form-data">
    <div class="form-group">
        <label style="font-size: 14px">ID Petugas</label>
        <input type="text" name="id_petugas" value="<?= $data['id_petugas'];?>" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Nama Petugas</label>
        <input type="text" name="nama_petugas" value="<?= $data['nama_petugas'];?>" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Username</label>
        <input type="text" name="username" value="<?= $data['username'];?>" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Password</label>
        <input type="text" name="password" value="<?= $data['password'];?>" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Telp</label>
        <input type="text" name="telp" value="<?= $data['telp'];?>" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Level</label>
        <select class="form-control" name="level">
            <option value="<?= $data['level'];?>"><?= $data['level'];?></option>
            <option value="admin">Administrator</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="Edit Data" class="btn btn-primary">
        <input type="reset" value="Kosongkan" class="btn btn-warning">
    </div>

</form>
<?php } ?>
</div>
</div>