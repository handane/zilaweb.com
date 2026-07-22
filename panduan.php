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
               <span class="slbl">Tutorial</span>
               <h2 class="stitle">Alur membuat web di <span>ZilaWeb</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:680px;">Proses pembuatan website yang fleksibel. Anda dapat mulai dengan konsultasi atau langsung memilih desain. Tim kami akan memastikan setiap tahap berjalan lancar hingga website siap dipublikasikan</p>
            </div>
            <div class="timeline" data-aos="fade-up">
               <!-- ODD ? text on LEFT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">1.</div>
                     <h5>Konsultasi dengan kami</h5>
                     <p>Anda akan diarahkan ke WhatsApp untuk konsultasi terkait pembuatan web dan memilih template yang sesuai atau bisa langsung mulai dari tahap kedua "Pilih Desain Web".</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">1.</div>
                     <h5>Konsultasi dengan kami</h5>
                     <p>Anda akan diarahkan ke WhatsApp untuk konsultasi terkait pembuatan web dan memilih template yang sesuai atau bisa langsung mulai dari tahap kedua "Pilih Desain Web".</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2.</div>
                     <h5>Pilih Design Web</h5>
                     <p>Pilih design website yang sesuai dengan kebutuhan bisnis atau usaha Anda.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2.</div>
                     <h5>Pilih Design Web</h5>
                     <p>Pilih design website yang sesuai dengan kebutuhan bisnis atau usaha Anda.</p>
                  </div>
                  <div class="tl-right">
                     
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">3.</div>
                     <h5>Pilih Ekstensi Domain</h5>
                     <p>Pilih ekstensi nama domain dan jenis hosting sesuai kebutuhan.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">3.</div>
                     <h5>Pilih Ekstensi Domain</h5>
                     <p>Pilih ekstensi nama domain dan jenis hosting sesuai kebutuhan.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">4.</div>
                     <h5>Proses Pembayaran</h5>
                     <p>Anda akan diarahkan kembali ke admin WhatsApp untuk proses pembayaran dan konfirmasi pesanan termasuk nama domain web yang diinginkan.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">4.</div>
                     <h5>Proses Pembayaran</h5>
                     <p>Anda akan diarahkan kembali ke admin WhatsApp untuk proses pembayaran dan konfirmasi pesanan termasuk nama domain web yang diinginkan.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">5.</div>
                     <h5>Proses Pengerjaan</h5>
                     <p>Admin akan mengarahkan untuk mendiskusikan kebutuhan, fitur, dan detail website bersama tim developer kami.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">5.</div>
                     <h5>Proses Pengerjaan</h5>
                     <p>Admin akan mengarahkan untuk mendiskusikan kebutuhan, fitur, dan detail website bersama tim developer kami.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">6.</div>
                     <h5>Website Selesai dan Online</h5>
                     <p>Website selesai dikerjakan, dilakukan pengecekan, dan siap digunakan atau dipublikasikan.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">6.</div>
                     <h5>Website Selesai dan Online</h5>
                     <p>Website selesai dikerjakan, dilakukan pengecekan, dan siap digunakan atau dipublikasikan.</p>
                  </div>
               </div>
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
