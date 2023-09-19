<?php 
  session_start()
?>   
         <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
         <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body" style="font-size: 14px">
            <h3 class="m-0 front-weight-bold text-secondary" align="center">PEMERINTAH KABUPATEN MALANG</h3>
            <h4 class="m-0 front-weight-bold text-secondary" align="center">DESA KALIANYAR KEC. LAWANG</h4>
            <h6 class="m-0 front-weight-bold text-secondary" align="center">Jalan Kalianyar Selatan NO. 61 Sidodadi Lawang Kode Pos 65312</h6>
            <br><br><br><br>      
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                      <th>No</th>
                      <th>Tanggal Laporan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include '../koneksi.php';
                      $sql = "SELECT * FROM pengaduan";
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
                        <?php } ?>
                  </tbody>
                </table>
                <br>
                <br>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Lawang, <?= date('d-m-Y')?></h6>
                <h6 class="m-0 font-weight-bold text-primary" align="right">Petugas</h6>
                <br><br><br><br>
                <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama_petugas'];?></h6>
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
