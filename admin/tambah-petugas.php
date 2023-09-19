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

<form method="POST" action="simpan-petugas.php" enctype="multipart/form-data">

    <div class="form-group">
        <label style="font-size: 14px">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Username</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Telp</label>
        <input type="text" name="telp" class="form-control">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Level</label>
        <select class="form-control" name="level">
            <option>===Pilih===</option>
            <option value="admin">Administrator</option>
            <option value="petugas">Petugas</option>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </div>

</form>
</div>
</div>