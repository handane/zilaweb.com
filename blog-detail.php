<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Sarab">
      <meta name="description" content="Sarab - Fast Food & Restaurant HTML Template">
      <title>ZilaWeb</title>
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
         .img-artikel {
            width: 80%;
          }

          /* Mobile */
          @media (max-width: 768px) {
            .img-artikel {
              width: 100%;
            }
          }
      </style>
   </head>
   <body>
    <!-- headder -->
      <?php include('./include/header.php') ?>
	  
      <section id="artikel-detail">
        <div class="container">

          <!-- Judul -->
          <div class="text-center mb-4" data-aos="fade-up">
            <h1 class="fw-bold">Tips Membuat Website Profesional untuk Bisnis</h1>
            <p class="text-muted">Ditulis pada 20 Juli 2026 • oleh Admin</p>
          </div>

          <!-- Gambar Cover -->
          <div class="mb-4 text-center" data-aos="zoom-in">
            <img src="img/premium-bulanan-2.png" class="img-fluid rounded img-artikel pe-2 ps-2" alt="gambar artikel">
          </div>

          <!-- Isi Artikel -->
          <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">

              <p style="text-align: justify;" class="pe-2 ps-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos minus iste hic! Est deserunt officiis libero sequi porro error saepe adipisci natus dolore facere sint molestias exercitationem tempora optio iure dicta, inventore eligendi, impedit repellat illo quae consequatur? Quas repellendus harum, deleniti earum possimus eius suscipit nostrum doloribus facilis! A laborum aut cum quas qui vitae voluptas dolorum, iste placeat molestiae dolores sit nobis laboriosam ad quaerat, nihil quis consequatur ullam. Numquam facilis perspiciatis officiis officia voluptatum aliquid nostrum deserunt corporis magnam provident suscipit aliquam sint soluta maxime, eveniet a amet, quos nisi? Ea dolorum asperiores saepe laudantium necessitatibus!</p>

            </div>
          </div>

          <!-- Tombol kembali -->
          <div class="text-center mt-5">
            <a href="./blog" class="btn-red">← Lihat Semua Blog</a>
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
