<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Join Our Team - ZilaWeb</title>

      <meta name="title" content="Join Our Team">
      <meta name="description" content="Bergabung bersama tim ZilaWeb dan kembangkan skilmu">
      <meta name="keywords" content="join, bergabung, join team zilaweb, loker zilaweb">
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
	  
      <section id="history">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
              <h2 class="stitle">Bergabung Bersama Kami</h2>
              <div class="sline"></div>

              <p class="mt-4">
                  Kami membuka kesempatan bagi Web Developer berbakat untuk bergabung dan berkembang bersama tim kami.
              </p>
              <p>
                  Jika Anda tertarik, silakan kirimkan <strong>CV</strong> ke:
              </p>

              <h5 class="mt-3">
                  admin@zilaweb.com
              </h5>
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
