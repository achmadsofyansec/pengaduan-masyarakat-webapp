   
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
            </div>
            <div class="card-body" style="font-size: 14px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Laporan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Laporan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      include 'koneksi.php';
                      $sql = "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC";
                      $query = mysqli_query($koneksi, $sql);
                      $no = 1;
                      while($data = mysqli_fetch_array($query)) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['tgl_pengaduan']?></td>
                        <td><?= $data['nik']?></td>
                        <td><?= $data['isi_laporan']?></td>
                        <td><?= $data['foto']?></td>
                        <td>
                          <?php 
                            if ($data['status'] == 'selesai') { ?>
                              <span class='btn btn-success'><?= $data['status']?></span>
                          <?php } ?>
                          <?php 
                            if ($data['status'] == '0') { ?>
                              <span class='btn btn-primary'>validasi</span>
                          <?php } ?>
                          <?php 
                            if ($data['status'] == 'proses') { ?>
                              <span class='btn btn-warning'><?= $data['status']?></span>
                          <?php } ?>
                        </td>
                        <td>
                          <a href="?url=detail-pengaduan&id=<?=$data['id_pengaduan'] ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-5">
                              <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text"> Detail</span>
                          </a>
                          l
                          <a href="?url=lihat-tanggapan&id=<?=$data['id_pengaduan'] ?>" class="btn btn-info btn-icon-split">
                            <span class="icon text-white-5">
                              <i class="fa fa-info"></i>
                            </span>
                            <span class="text"> Lihat Tanggapan</span>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
