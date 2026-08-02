<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>FAQ - ZilaWeb</title>

      <meta name="title" content="FAQ">
      <meta name="description" content="FAQ atau pertanyaan terkait pembuatan web di ZilaWeb">
      <meta name="keywords" content="jasa pembuatan website, faq, bikin website UMKM, blog, artikel pemrograman">
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
         .faq-header {
            background: linear-gradient(135deg, #0d6efd, #0b5ed7);
            color: white;
            padding: 60px 0;
        }

        .accordion-button:not(.collapsed) {
            background-color: #0d6efd;
            color: white;
        }

        .accordion-button:focus {
            box-shadow: none;
        }
      </style>
   </head>
   <body>
    <!-- headder -->
      <?php include('./include/header.php') ?>
	  
      <section class="py-5">
        <div class="container">

            <div class="accordion" id="faqAccordion">

                <!-- FAQ 1 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                            Bagaimana cara memesan website?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Pilih desain website yang sesuai dengan kebutuhan Anda, kemudian klik tombol <strong>Pesan</strong> atau hubungi kami melalui WhatsApp. Sampaikan template yang dipilih, lalu kami akan memberikan informasi mengenai proses pengerjaan dan pembayaran.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                            Apakah harga sudah sesuai dengan yang tertera pada template?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Harga yang tertera pada setiap template adalah harga pembuatan website sesuai desain tersebut tidak termasuk harga domain.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                            Apakah desain website bisa diubah?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Bisa. Anda dapat meminta perubahan warna, logo, gambar, teks, maupun beberapa bagian tampilan. Jika membutuhkan desain atau fitur yang berbeda dari template.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq4">
                            Bagaimana proses pembayarannya?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Seluruh proses pemesanan dan konfirmasi pembayaran dilakukan melalui WhatsApp. Setelah Anda menghubungi kami, kami akan memberikan informasi rekening atau metode pembayaran yang tersedia beserta langkah selanjutnya.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq5">
                            Berapa lama proses pengerjaan website?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Estimasi pengerjaan bergantung pada jenis website dan revisi yang diminta. Untuk website berbasis template, umumnya dapat diselesaikan dalam 5-8 hari kerja setelah seluruh data dan pembayaran diterima.
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq6">
                            Apa saja yang perlu saya siapkan?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Siapkan nama usaha, logo (jika ada), deskripsi usaha, alamat, nomor WhatsApp, foto produk atau layanan, serta informasi lain yang ingin ditampilkan di website.
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq7">
                            Apakah website sudah responsif di HP?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya. Semua template website kami sudah responsif sehingga tampil optimal di komputer, tablet, maupun smartphone.
                        </div>
                    </div>
                </div>

                <!-- FAQ 8 -->
                <div class="accordion-item mb-4" style="border:2px solid silver;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq8">
                            Apakah saya akan mendapatkan akses cPanel website?
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya. Setelah website selesai dan pembayaran lunas, Anda akan mendapatkan akses cPanel sehingga dapat mengelola konten website sesuai kebutuhan.
                        </div>
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
