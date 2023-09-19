<?php 

if(isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;

        case 'lihat-laporan':
            include 'lihat-pengaduan.php';
            break;

        case 'detail-pengaduan':
            include 'detail-penggaduan.php';
            break;

        case 'lihat-tanggapan':
            include 'lihat-tanggapan.php';  
            break;
            
            default:
            include '404.php';
            break;
    }
} else { ?>
   <div class="container-fluid">
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
              </div>
              <div class="card-body">
                <p class="font-weight-bold">Selamat Datang <span class="text-primary"><?= $_SESSION['nama']?></span></p>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mx-4">
            <div class="row">
              <div class="col-lg-12 mb-4">
                <?php require 'koneksi.php';
                      $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan");
                      $pengaduan=mysqli_num_rows($sql);
                      ?>
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan Anda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengaduan ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fa fa-comments fa-2x text-primary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-7">
          <div class="card shadow mb-4">
              <div class="card-body py-3 ">
              <i class="fa fa-user text-primary">  </i>
              <span class="text-gray">Aplikasi pengaduan ini dibuat untuk melaporkan segala tindakan yang menyimpang dari ketentuan.</span>
              </div>
          </div>
          <div class="card shadow mb-4">
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                 
                 
                </div>
              </div>
          </div>
        </div>
<?php } ?>