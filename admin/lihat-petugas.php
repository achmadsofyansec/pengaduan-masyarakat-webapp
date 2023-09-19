   
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body" style="font-size: 14px">
            <a href="admin.php?url=tambah-petugas" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                  </a>
                  <br>
                  <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <td>No</td>
                      <td>ID Petugas</td>
                      <td>Nama Petugas</td>
                      <td>Username</td>
                      <td>Password</td>
                      <td>Telp</td>
                      <td>Level</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td>No</td>
                      <td>ID Petugas</td>
                      <td>Nama Petugas</td>
                      <td>Username</td>
                      <td>Password</td>
                      <td>Telp</td>
                      <td>Level</td>
                      <td>Aksi</td>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    
                      include '../koneksi.php';
                      
                      $query = mysqli_query($koneksi, "SELECT * FROM petugas ");
                      $no = 1;
                      while($data = mysqli_fetch_array($query)) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['id_petugas']?></td>
                        <td><?= $data['nama_petugas']?></td>
                        <td><?= $data['username']?></td>
                        <td><?= $data['password']?></td>
                        <td><?= $data['telp']?></td>
                        <td><?= $data['level']?></td>
                        <td>
                        <a href="admin.php?url=edit-petugas&id=<?php echo $data['id_petugas'];?>" class="btn btn-primary btn-circle">
                           <i class="fa fa-edit"></i>
                        </a>
                        <a href="delete-petugas.php?id=<?= $data['id_petugas'];?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin mau hapus?')">
                          <i class="fa fa-trash"></i>
                        </a>
                          
                        </td>
                      </tr>
                    <?php  
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
      <!-- End of Footer -->

    

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
