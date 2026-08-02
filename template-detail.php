<?php 
   include("./koneksi.php");
   $id_web = $_GET['id_web'];
    $get_paket = mysqli_query($conn, "SELECT * FROM template_web WHERE id_web = '$id_web'");
    $row = mysqli_fetch_array($get_paket);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?= $row['judul'] ?> - Detail Template ZilaWeb</title>

    <meta name="description" content="<?= substr(strip_tags($row['halaman_isi']), 0, 150) ?>">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="ZilaWeb">

      <link rel="icon" href="./assets/images/zilaweb-fav-32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="./assets/images/zilaweb-fav-192.png" sizes="192x192" type="image/png">
      <link rel="apple-touch-icon" href="./assets/images/zilaweb-fav-192.png">

      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
      <!-- Bootstrap 5.3 -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <!-- AOS Animate on Scroll -->
      <link href="css/aos.css" rel="stylesheet"/>
      <!-- Swiper -->
      <link href="css/swiper-bundle.min.css" rel="stylesheet"/>
      <!-- all min css -->
      <link rel="stylesheet" href="css/all.min.css"/>
      <!-- magnific CSS -->
      <link rel="stylesheet" href="css/magnific-popup.css"/>
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css" />

      <style>
        .sovtrend {
            text-align: left;
            margin-top: 0px;
        }
        .sovtrend .ttag {
            margin: 0 0 2px 0;
        }
        .sticky-card {
            position: sticky;
            top: 100px; /* jarak dari atas (sesuaikan dengan navbar kamu) */
        }
        .chexp {
            font-size: 0.9rem;
        }
        .mtit {
            font-size: 1rem;
        }
        @media (max-width: 768px) {
            .chexp {
                font-size: 0.99rem;
            }
        }
      </style>
   </head>
   <body>
    <!-- headder -->
      <?php include('./include/header.php') ?>

      <section id="detail-web" class="py-4">
        <div class="container">
            <div class="sovtrend">
                <a href="./template-web" class="text-decoration-none ttag">
                    <i class="fas fa-chevron-left"></i> Back
                </a>
            </div>
            <div class="row g-3">
              <!-- KIRI (DETAIL INFO) -->
              <div class="col-lg-4">
                  <div class="p-3 shadow-sm rounded bg-white sticky-card">
                    <!-- <small class="d-block mt-2">ID: <?= $row['id_web'] ?></small> -->
                    <div class="lfcard">
                        <div class="chbody">
                            <label class="bltag mt-2"><b>--- Template</b></label>
                            <h5 class="chexp"><?= $row['judul'] ?></h5>
                            <h5 class="mtit">Rp <?= number_format($row['harga']) ?></h5>
                        </div>
                    </div>

                    <div class="lfcard mt-3">
                        <div class="chbody">
                          <label class="bltag mt-2"><b>--- Ringkasan</b></label>
                          <!-- <div class="chnm mt-3">Rp. 380.000</div><hr> -->
                          <div class="chexp"><i class="far fa-file-code"></i> <?= $row['halaman_isi'] ?></div>
                          <div class="chexp"><i class="fas fa-globe"></i> Gratis Hosting</div>
                          <div class="chexp"><i class="fas fa-edit"></i> Gratis Jasa Editing Web</div>
                          <div class="chexp"><i class="fas fa-sync-alt"></i> Bebas revisi 1 bulan pertama</div>
                          <div class="chexp"><i class="far fa-calendar-check"></i> Masa Aktif 1 tahun</div>
                          <div class="chexp"><i class="fa fa-server"></i> Akses cPanel</div>
                         
                      </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="row g-2 mt-2 mb-2">
                        <div class="col-6">
                          <a href="<?= $row['link_url'] ?>" target="_blank"
                              class="btn-red-2 w-100" style="justify-content: center;">
                              <i class="fas fa-eye"></i> Preview
                          </a>
                        </div>

                        <div class="col-6">
                          <a href="pilih-domain?id_web=<?= $row['id_web'] ?>"
                              class="btn-red w-100" style="justify-content: center;" >
                              Selanjutnya <i class="fas fa-arrow-right"></i>
                          </a>
                        </div>
                    </div>
                    <small class="text-muted"><i>Alur pemesanan <a href="./panduan" target="_blank" >baca selengkapnya</a></i></small>

                    <!-- <small>
                        <b>Tag:</b> <?= $row['tag'] ?>
                    </small> -->

                  </div>
              </div>

              <!-- KANAN (GAMBAR / PREVIEW) -->
              <div class="col-lg-8">
                  <div class="p-2 bg-white rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_1'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_2'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_3'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_4'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_5'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_6'] ?>" class="img-fluid rounded">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_7'] ?>" class="img-fluid rounded" alt="">
                  </div>
                  <div class="p-2 bg-white mt-3 rounded border border-1 text-center">
                    <img src="./fotoweb/<?= $row['gambar_8'] ?>" class="img-fluid rounded" alt="">
                  </div>
              </div>

            </div>

        </div>
      </section>

      <footer>
        <?php include('./include/footer.php') ?>
      </footer>
      <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="fas fa-chevron-up"></i></button>
    
	<!-- jQuery -->
      <script src="js/jquery-3.7.1.min.js"></script>
      
      <script src="js/bootstrap.bundle.min.js"></script>
      
      <script src="js/aos.js"></script>
      
      <script src="js/swiper-bundle.min.js"></script>
      
      <script src="js/jquery.magnific-popup.min.js"></script>
      
      <script src="js/main.js"></script>
   </body>
</html>
