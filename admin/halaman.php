<?php 

if(isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'lihat-pengaduan':
            include 'lihat-pengaduan.php';
            break;
        case 'detail-penggaduan':
            include 'detail-penggaduan.php';
            break;
        case 'tanggapan':
            include 'tanggapan.php';
            break;
            
        case 'lihat-petugas':
            include 'lihat-petugas.php';
            break;

        case 'tambah-petugas':
            include 'tambah-petugas.php';
            break;

        case 'edit-petugas':
            include 'edit-petugas.php';
            break;
        case 'preview-petugas':
            include 'preview-petugas.php';
            break;
        case 'preview-masyarakat':
            include 'preview-masyarakat.php';
            break;
        case 'lihat-masyarakat':
            include 'lihat-masyarakat.php';
            break;
        case 'data-pengaduan':
            include 'data-pengaduan.php';
            break;
        case 'lihat-tanggapan':
            include 'lihat-tanggapan.php';
            break;
        case 'preview-pengaduan':
            include 'preview-pengaduan.php';
            break;
        case 'preview-tanggapan':
            include 'preview-tanggapan.php';
            break;
            

        default:
            include '404.php';
            break;
    }
} else {
    ?>
    <div class="container-fluid">
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
              </div>
              <div class="card-body">
                <p class="font-weight-bold">Selamat Datang <span class="text-primary"><?= $_SESSION['nama_petugas']?></span></p>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4 mx-4">
            <div class="row">
              <div class="col-lg-12 mb-4">
                <?php require '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from pengaduan where status='0'");
                      $pengaduan=mysqli_num_rows($sql);
                      ?>
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan Masuk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengaduan ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fa fa-comments fa-2x text-primary"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mb-4">
                <?php require '../koneksi.php';
                        $sql = mysqli_query($koneksi, "select * from pengaduan where status='proses'");
                        $belum=mysqli_num_rows($sql);
                        ?>
                <div class="card border-left-warning   shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan Belum Ditangapi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $belum ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-warning"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mb-2">
                <?php require '../koneksi.php';
                      $sql = mysqli_query($koneksi, "select * from pengaduan where status='selesai'");
                      $selesai=mysqli_num_rows($sql);
                      ?>
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body"> 
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengaduan Yang Ditangapi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $selesai ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fa fa-check fa-2x  text-success"></i>
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
                      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="../img/undraw_posting_photo.svg" alt="">
                    </div>
                  
                  
                  </div>
                </div>
          </div>
        </div>
<?php } ?> 