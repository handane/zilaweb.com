<?php 
   include("./koneksi.php");
   $filter = $_GET['halaman_isi'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>Template Website - ZilaWeb</title>

      <meta name="title" content="Template Website">
      <meta name="description" content="Tersedia berbagai pilihan template website siap pakai dan buat websitemu dengan harga terjangkau mulai 400 ribuan di ZilaWeb.">
      <meta name="robots" content="index, follow">
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
         .chexp {
            display: flex;
            align-items: center;
            gap: 10px; /* jarak icon ke teks */
            margin-bottom: 10px;
         }
         .chexp i {
            color: #fb8f36; /* opsional: warna biar konsisten */
            min-width: 20px;
            text-align: center;
         }
      </style>
   </head>
   <body>
    <!-- headder -->
      <?php include('./include/header.php') ?>
	  
      <section id="about">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Buat Website Sekarang</span>
               <h2 class="stitle">Pilih <span>Desain</span> Website</h2>
               <div class="sline"></div>
            </div>
            <!-- FIX 3 � filter buttons -->
            <div class="mb-4 filt-wrapper">
               <div class="filt-scroll">
                  <a href="?" class="filtbtn <?= $filter == '' ? 'active' : '' ?>">Semua</a>
                  <a href="?halaman_isi=Web 1" class="filtbtn <?= $filter == 'Web 1' ? 'active' : '' ?>">Web 1-3 Halaman</a>
                  <a href="?halaman_isi=Web 4" class="filtbtn <?= $filter == 'Web 4' ? 'active' : '' ?>">Web 4-8 Halaman</a>
                  <a href="?halaman_isi=Web 9" class="filtbtn <?= $filter == 'Web 9' ? 'active' : '' ?>">Web 9-15 Halaman</a>
               </div>
            </div>
            
            <div class="row g-4" id="mgrid">
               <?php
                  $halaman_isi = isset($_GET['halaman_isi']) ? mysqli_real_escape_string($conn, $_GET['halaman_isi']) : '';

                  $limit = 9;
                  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                  if ($page < 1) {
                     $page = 1;
                  }

                  $offset = ($page - 1) * $limit;

                  $where = "WHERE status = 'aktif'";
                  if (!empty($halaman_isi)) {
                     $where .= " AND halaman_isi LIKE '%$halaman_isi%'";
                  }

                  // Total data
                  $total_query = mysqli_query($conn, "SELECT COUNT(*) as total
                     FROM template_web
                     $where
                  ");

                  $total_data = mysqli_fetch_assoc($total_query)['total'];

                  // Ambil data
                  $get_paket = mysqli_query($conn, "SELECT *
                     FROM template_web
                     $where
                     ORDER BY id DESC
                     LIMIT $limit OFFSET $offset
                  ");

                  $total_page = ceil($total_data / $limit);
                  while ($p = mysqli_fetch_array($get_paket)) {
               ?>
               <div class="col-sm-6 col-lg-4 mwrap" data-c="<?= $p['halaman_isi'] ?>" data-aos="fade-up">
                  <div class="mcard" style="cursor: default;"
                     data-img="./fotoweb/<?= $p['gambar_1'] ?>">
                     <div class="mimg">
                        <img src="./fotoweb/<?= $p['gambar_1'] ?>" alt="Smash Burger"/>
                        <!-- <div class="mbdg new"><i class="fas fa-star"></i> Best Seller</div> -->
                        <!-- <div class="mhrt"><i class="far fa-heart"></i></div> -->
                     </div>
                     <div class="mbody">
                        <!-- <div class="mcat"><?= $p['halaman_isi'] ?></div> -->
                        <div class="mtit"><a style="color: var(--dark);" href="./template-detail?id_web=<?= $p['id_web'] ?>"><?= $p['judul'] ?></a></div>
                        <div class="mdesc"><?= $p['halaman_isi'] ?></div>
                        <div class="mfoot">
                           <div class="mprice">
                              Rp <?= number_format($p['harga']) ?>
                           </div>

                           <div class="mactions">
                              <a class="madd-2" target="_blank" title="Web Preview" href="<?= $p['link_url'] ?>">
                                    <i class="fa fa-external-link"></i>
                              </a>
                              <a class="madd" title="Detail" href="./template-detail?id_web=<?= $p['id_web'] ?>">
                                    <i class="fa fa-shopping-cart"></i>
                              </a>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="d-flex justify-content-center mt-4">
					<nav>
                  <ul class="pagination">
                     <!-- Tombol Previous -->
                     <?php if($page > 1){ ?>
                        <li class="page-item">
                           <a class="page-link"
                              href="?page=<?= $page-1 ?><?= $halaman_isi!='' ? '&halaman_isi='.$halaman_isi : '' ?>">
                                 &laquo;
                           </a>
                        </li>
                     <?php } ?>

                     <!-- Nomor Halaman -->
                     <?php for($i=1; $i<=$total_page; $i++){ ?>
                        <li class="page-item <?= ($i==$page)?'active':'' ?>">
                           <a class="page-link"
                              href="?page=<?= $i ?><?= $halaman_isi!='' ? '&halaman_isi='.$halaman_isi : '' ?>">
                                 <?= $i ?>
                           </a>
                        </li>
                     <?php } ?>

                     <!-- Tombol Next -->
                     <?php if($page < $total_page){ ?>
                        <li class="page-item">
                           <a class="page-link"
                              href="?page=<?= $page+1 ?><?= $halaman_isi!='' ? '&halaman_isi='.$halaman_isi : '' ?>">
                                 &raquo;
                           </a>
                        </li>
                     <?php } ?>

                  </ul>
					</nav>
			   </div>
         </div>
      </section>
      <!-- FOOTER -->
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
