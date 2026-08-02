<?php 
   include("./koneksi.php");
   $get_paket = mysqli_query($conn, "SELECT * FROM template_web WHERE status = 'aktif' order by id DESC LIMIT 3");
   $jumlah_template = mysqli_num_rows($get_paket);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>ZilaWeb - Jasa Pembuatan Website Cepat & Murah</title>

      <meta name="title" content="ZilaWeb - Jasa Pembuatan Website Cepat & Murah">
      <meta name="description" content="ZilaWeb menyediakan jasa pembuatan website profesional untuk UMKM, company profile, toko online, dan e-katalog. Banyak pilihan template web bisa dipilih">
      <meta name="keywords" content="jasa pembuatan website, jasa website murah, bikin website UMKM, jasa website company profile, jasa toko online">
      <meta name="robots" content="index, follow">
      <meta name="author" content="ZilaWeb">

      <link rel="icon" href="./assets/images/zilaweb-fav-32.png" sizes="32x32" type="image/png">
      <link rel="icon" href="./assets/images/zilaweb-fav-192.png" sizes="192x192" type="image/png">
      <link rel="apple-touch-icon" href="./assets/images/zilaweb-fav-192.png">

      <meta property="og:title" content="ZilaWeb - Jasa Pembuatan Website Cepat & Murah">
      <meta property="og:description" content="Jasa pembuatan website untuk UMKM, company profile, toko online dan lainnya. Cepat, murah, dan profesional.">
      <meta property="og:url" content="https://zilaweb.com">
      <meta property="og:type" content="website">
      <meta property="og:image" content="https://zilaweb.com/assets/images/preview.png">


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
            /* display: flex; */
            align-items: center;
            gap: 10px; /* jarak icon ke teks */
            margin-bottom: 10px;
         }
         .chexp i {
            color: #fb8f36; /* opsional: warna biar konsisten */
            min-width: 20px;
            text-align: center;
         }
         @media (max-width: 768px) {
            .atas {
               display: none;
            }
            .fcard {
               margin-top: 50px;
            }
            .btn-mulai {
               margin-bottom: 40px;
            }
        }
      </style>
   </head>
   <body>
      <!-- header -->
       <?php include('./include/header.php') ?>
      <section id="hero">
         <div class="hs hs1"></div>
         <!-- <div class="hs hs2"></div> -->
         <div class="container">
            <div class="row align-items-center" style="min-height: 88vh;">
               <div class="col-lg-6">
                  <div class="hbadge">
                     <div class="hbi"><i class="fas fa-code"></i></div>
                     <span>No #1 Agensi Pembuatan web paling murah</span>
                  </div>
                  <h1 class="htitle">Jasa Pembuatan <span class="hl">Website</span><br/>Profesional dan Paling Murah</h1>
                  <p class="hdesc">Membantu UMKM, Perusahaan, Pemerintah, dan personal brand memiliki website profesional dengan desain modern dan SEO friendly. Semua sudah termasuk hosting, domain, dan support.</p>
                  <div class="d-flex flex-wrap gap-3 mb-2">                    
                     <a href="#chefs" class="btn-red">Mulai Sekarang</a>
                     
                  </div>
                  <div class="hstats d-flex gap-3 flex-wrap mt-4">
                     <div class="hstat"><span class="snum"><?= $jumlah_template ?><em></em></span><small>Desain Web</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">3<em></em></span><small>Paket Web</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">10<em>+</em></span><small>Pilihan Domain</small></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div style="position:relative;text-align:center;">
                     <div class="">
                        <img src="img/laptop-gr.png" alt="ZilaWeb"/>
                     </div>
                     

                     <!-- <div class="fcard fc2">
                        <div class="fcoi r"><i class="fas fa-calendar-alt"></i></div>
                        <div>
                           <span class="fcnum">Pengerjaan Cepat</span>
                           <span class="fcsm">Estimasi 4-7 hari</span>
                        </div>
                     </div> -->

                     <div class="fcard fc1">
                        <div class="fcoi y"><i class="fas fa-money-bill-wave"></i></div>
                        <div>
                           <span class="fcnum">Harga Transparan</span>
                           <span class="fcsm">Tanpa biaya tersembunyi</span>
                        </div>
                     </div>

                     <!-- <div class="fcard fc2">
                        <div class="fcoi g"><i class="fas fa-chart-line"></i></div>
                        <div>
                           <span class="fcnum">Siap Go Digital</span>
                           <span class="fcsm">Bangun brand lebih profesional</span>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- MARQUEE -->
      <div class="mqsec">
         <div class="mqtrack">
            <div class="mqitem"><i class="fas fa-circle"></i>SEO Friendly Website</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Website Jadi 3-5 Hari</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Gratis Domain & Hosting*</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Bikin Website Mulai 400rban</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Cocok untuk UMKM & Bisnis</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Tanpa Ribet, Tinggal Terima Jadi</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Desain Modern & Responsive</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Support 24 Jam</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Gratis Konsultasi</div>
         </div>
      </div>
      <!-- CATEGORY -->
      <section id="category">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Lihat Semua Kategori</span>
               <h2 class="stitle">Temukan <span>Website</span> Yang Tepat</h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">Tersedia berbagai macam pilihan website untuk membantu bisnis Anda tampil lebih unggul di era digital</p>
            </div>
            <div class="row g-3 justify-content-center">
               <!-- All -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in">
                  <a href="#about">
                  <div class="catcard" data-filter="all">
                     <i class="fas fa-list" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">E-Katalog</div>
                     <!-- <div class="catct">99 items</div> -->
                  </div>
                  </a>
               </div>

               <!-- Landing Page -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="70">
                  <a href="#about">
                  <div class="catcard" data-filter="landing">
                     <i class="fas fa-seedling" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">Profil Desa</div>
                     <!-- <div class="catct">24 items</div> -->
                  </div>
                  </a>
               </div>

               <!-- Homepage -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="140">
                  <a href="#about">
                  <div class="catcard" data-filter="home">
                     <i class="fas fa-tachometer-alt" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">Homepage</div>
                     <!-- <div class="catct">18 items</div> -->
                  </div>
                  </a>
               </div>

               <!-- Portofolio -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="210">
                  <a href="#about">
                  <div class="catcard" data-filter="portfolio">
                     <i class="fas fa-briefcase" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">Portofolio</div>
                     <!-- <div class="catct">15 items</div> -->
                  </div>
                  </a>
               </div>

               <!-- E-Katalog -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="280">
                  <a href="#about">
                  <div class="catcard" data-filter="catalog">
                     <i class="fas fa-shopping-cart" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">Toko Online</div>
                     <!-- <div class="catct">12 items</div> -->
                  </div>
                  </a>
               </div>

               <!-- Company Profile -->
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="350">
                  <a href="#about">
                  <div class="catcard" data-filter="company">
                     <i class="fas fa-building" style="font-size:40px; color:#fa723d;"></i>
                     <div class="catnm">Company Profile</div>
                     <!-- <div class="catct">20 items</div> -->
                  </div>
                  </a>
               </div>

            </div>
         </div>
      </section>
      <!-- KATALOG TEMPLATE -->
      <section id="about">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Pilihan Desain Siap Pakai</span>
               <h2 class="stitle">Buat <span>Website</span> Sekarang</h2>
               <div class="sline"></div>
            </div>
            <!-- FIX 3 � filter buttons -->
            <!-- <div class="text-center mb-4" data-aos="fade-up">
               <button class="filtbtn active" data-f="all">All</button>
               <button class="filtbtn" data-f="burgers">Burgers</button>
               <button class="filtbtn" data-f="pizza">Pizza</button>
               <button class="filtbtn" data-f="chicken">Chicken</button>
               <button class="filtbtn" data-f="wraps">Wraps</button>
               <button class="filtbtn" data-f="desserts">Desserts</button>
               <button class="filtbtn" data-f="pasta">Pasta</button>
            </div> -->
            <div class="row g-4" id="mgrid">
               <?php
					
					while ($p = mysqli_fetch_array($get_paket)) {
					?>
               <div class="col-sm-6 col-lg-4 mwrap" data-c="<?= $p['halaman_isi'] ?>" data-aos="fade-up">
                  <div class="mcard" style="border-top: 5px solid var(--primary); cursor: default;" data-img="./fotoweb/<?= $p['gambar_1'] ?>">
                     <div class="mimg">
                        <img src="./fotoweb/<?= $p['gambar_1'] ?>" alt="Smash Burger"/>
                        <div class="mbdg hot"><i class="fas fa-star"></i> Best Seller</div>
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
            <!-- end #mgrid -->
            <div class="text-center mt-5"><a href="./template-web" class="btn-red">Lihat Semua Desain <i class="fas fa-arrow-right"></i></a></div>
         </div>
      </section>
      <!-- ============================================================
         BRAND
         ============================================================ -->
      <section id="menu">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5" data-aos="fade-right">
                  <div class="astack">
                     <!-- <div class="aexp"><span class="anum">12+</span><small>Years of<br/>Excellence</small></div> -->
                     <div class="amain"><img src="img/zilaweb-gr3.png" alt="zilaweb"/></div>
                     <!-- <div class="asm"><img src="img/about2.jpg" alt=""/></div> -->
                  </div>
               </div>
               <div class="col-lg-7" data-aos="fade-right">
                  <!-- <span class="slbl">Our Story</span> -->
                  <h2 class="stitle text-start">Bangun <span>Brand</span> Dengan Website Modern</h2>
                  <div class="sline lft"></div>
                  <p class="sdesc mb-4">Kami membantu bisnis berkembang melalui website dengan biaya murah tapi tetap modern, cepat, dan mudah digunakan. Mulai dari landing page hingga toko online, kami fokus pada desain yang menarik, hasil yang maksimal dan harga yang terjangkau.</p>
                  <div class="mb-4">
                     <div class="fti">
                        <div class="ftico r"><i class="fas fa-bolt"></i></div>
                        <div>
                           <h6>Proses Cepat & Mudah</h6>
                           <p>Website siap digunakan tanpa ribet, dari konsep hingga online dalam waktu singkat.</p>
                        </div>
                     </div>
                     <div class="fti">
                        <div class="ftico y"><i class="fas fa-layer-group"></i></div>
                        <div>
                           <h6>Banyak Template web Siap Pakai</h6>
                           <p>Pilihan desain modern yang bisa langsung digunakan sesuai kebutuhan bisnis Anda.</p>
                        </div>
                     </div>
                     <div class="fti">
                        <div class="ftico g"><i class="fas fa-chart-line"></i></div>
                        <div>
                           <h6>Optimasi SEO (Mudah Ditemukan di Google)</h6>
                           <p>Website dirancang agar lebih mudah muncul di pencarian Google dan menjangkau lebih banyak pelanggan.</p>
                        </div>
                     </div>
                  </div>
                  <!-- <a href="#menu" class="btn-red"><i class="fas fa-book-open"></i>View Full Menu</a> -->
               </div>
            </div>
         </div>
      </section>
	  
	  
      <!-- ============================================================
         FIX 4 � MENU DETAIL POPUP MODAL
         ============================================================ -->
      <!-- <div id="menuPop">
         <div class="mpbox">
            <button class="mpclose" id="mpClose"><i class="fas fa-times"></i></button>
            <div class="mpimg"><img id="mpImg" src="" alt=""/></div>
            <div class="mpbody">
               <div id="mpCat"></div>
               <div id="mpTitle"></div>
               <div id="mpStars"></div>
               <div id="mpDesc"></div>
               <div id="mpPrice"></div>
               <div class="mpmeta" id="mpMeta"></div>
               <div class="mpqty">

                  <button class="mpqbtn" id="mpMinus">-</button>
                  <span class="mpqnum" id="mpQnum">1</span>
                  <button class="mpqbtn" id="mpPlus">+</button>
                  
                  <span style="font-size:.82rem;color:#aaa;margin-left:9px;">portion</span>
               </div>
               <div class="mptags" id="mpTags"></div>
               <button class="mpaddcart" id="mpAddCart"><i class="fas fa-shopping-cart"></i>Add to Cart</button>
            </div>
         </div>
      </div> -->
      <!-- SPECIAL OFFER -->
      <section id="special">
         <div class="spbg"></div>
         <div class="container" style="position:relative;z-index:2;">
            <div class="row align-items-center">

               <!-- KIRI -->
               <div class="col-lg-6" data-aos="fade-right">
                  
                  <!-- Badge -->
                  <div class="sptag">
                     Kenapa Harus ZilaWeb ?
                  </div>

                  <!-- Judul -->
                  <h2 class="sptitle">
                     Website Profesional<br/>
                     Mulai dari <br/>
                     <span>400 Ribuan</span>
                  </h2>

                  <!-- Deskripsi -->
                  <p class="spdesc">
                     ZilaWeb membantu Anda membuat website modern, cepat, dan SEO friendly 
                     untuk bisnis, UMKM, dan personal branding.
                  </p>

                  <!-- HAPUS COUNTDOWN (tidak pakai promo) -->

                  <!-- Benefit kecil -->
                  <div class="cdwrap">
                     <div class="cditem"><span class="cdnum">✔</span><span class="cdlbl">SEO Friendly</span></div>
                     <div class="cditem"><span class="cdnum">✔</span><span class="cdlbl">Responsive</span></div>
                     <div class="cditem"><span class="cdnum">✔</span><span class="cdlbl">Fast Loading</span></div>
                  </div>

                  <!-- Button -->
                  <a href="#chefs" class="btn-red btn-mulai">
                     Buat Website Sekarang <i class="fas fa-arrow-right"></i>
                  </a>

               </div>

               <!-- KANAN -->
               <div class="col-lg-6" data-aos="fade-left">
                  <div class="spimgw">
                     <div class="spglow"></div>

                     <!-- Harga Badge -->
                     <div class="sppbdg">
                        <span class="">Mulai</span>
                        <span class="np">400rban</span>
                     </div>

                     <!-- GANTI GAMBAR -->
                     <img src="img/laptop-gr2.png" alt="Jasa Pembuatan Website ZilaWeb"/>
                  </div>
               </div>

            </div>
         </div>
      </section>
	  
	  
      <!-- ============================================================
         GALLERY � FIX 7 (click opens detail popup)
         ============================================================ -->
      <!-- <section id="gallery">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Food Showcase</span>
               <h2 class="stitle">Let's See Our <span>Fast Food</span></h2>
               <div class="sline"></div>
            </div>
            <div class="ggrid" data-aos="fade-up">
               <div class="gitem"
                  data-gi="0"
                  data-gimg="img/portfolio/work1.jpg"
                  data-gtitle="Gourmet Burgers"
                  data-gdesc="Our award-winning smash burgers, hand-crafted with 100% premium beef, aged cheddar and house-made sauces.">
                  <img src="img/portfolio/work1.jpg" alt="Burgers"/>
                  <div class="gover"><span><i class="fas fa-expand-alt"></i> Gourmet Burgers</span></div>
               </div>
               <div class="gitem"
                  data-gi="1"
                  data-gimg="img/portfolio/work2.jpg"
                  data-gtitle="Wood-Fired Pizza"
                  data-gdesc="Authentic Neapolitan-style pizzas fired at 900deg F in our wood-burning stone oven for the perfect char.">
                  <img src="img/portfolio/work2.jpg" alt="Pizza"/>
                  <div class="gover"><span><i class="fas fa-expand-alt"></i> Wood-Fired Pizza</span></div>
               </div>
               <div class="gitem"
                  data-gi="2"
                  data-gimg="img/portfolio/work3.jpg"
                  data-gtitle="Crispy Fried Chicken"
                  data-gdesc="Double-brined, hand-battered chicken fried to golden perfection using our 15-spice secret blend.">
                  <img src="img/portfolio/work3.jpg" alt="Chicken"/>
                  <div class="gover"><span><i class="fas fa-expand-alt"></i> Crispy Fried Chicken</span></div>
               </div>
               <div class="gitem"
                  data-gi="3"
                  data-gimg="img/portfolio/work4.jpg"
                  data-gtitle="Sweet Desserts"
                  data-gdesc="Handcrafted desserts - from molten lava cakes to artisan ice cream sundaes and seasonal pastries.">
                  <img src="img/portfolio/work4.jpg" alt="Desserts"/>
                  <div class="gover"><span><i class="fas fa-expand-alt"></i> Sweet Desserts</span></div>
               </div>
               <div class="gitem"
                  data-gi="4"
                  data-gimg="img/portfolio/work5.jpg"
                  data-gtitle="Fresh Wraps &amp; Rolls"
                  data-gdesc="Loaded fresh wraps packed with grilled proteins, crunchy vegetables and our house-made sauces.">
                  <img src="img/portfolio/work5.jpg" alt="Wraps"/>
                  <div class="gover"><span><i class="fas fa-expand-alt"></i> Fresh Wraps &amp; Rolls</span></div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- FIX 7 � GALLERY POPUP -->
      <div id="galPop">
         <div class="gpbox">
            <button class="gpclose" id="gpClose"><i class="fas fa-times"></i></button>
            <img id="gpImg" src="" alt=""/>
            <div class="gpcap">
               <h5 id="gpTitle"></h5>
               <p id="gpDesc"></p>
            </div>
            <div class="gpnav">
               <button id="gpPrev"><i class="fas fa-chevron-left me-1"></i>Prev</button>
               <button id="gpNext">Next <i class="fas fa-chevron-right ms-1"></i></button>
            </div>
         </div>
      </div>
	  
      <!-- PAKET WEB -->
      <section id="chefs">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Paket</span>
               <h2 class="stitle">Paket Pembuatan Web</h2>
               <div class="sline"></div>
            </div>
            <div class="row g-4">
               <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="chcard" style="border-top: 9px solid #008c9c;">
                     <div class="chbody">
                        <div class="chnm">Paket Web Starter</div>
                        <div class="chexp">1-3 halaman website untuk mulai <i>go digital</i></div>
                        <div class="chnm mt-3">Rp. 470.000</div><hr>
                        <div class="chexp"><i class="far fa-file-code"></i> 1-3 Halaman</div>
                        <div class="chexp"><i class="fa fa-server"></i> Akses cPanel</div>
                        <div class="chexp"><i class="fas fa-globe"></i> Gratis Hosting</div>
                        <div class="chexp"><i class="fas fa-edit"></i> Gratis Jasa Editing Web</div>
                        <div class="chexp"><i class="fas fa-sync-alt"></i> Bebas revisi 1 bulan pertama</div>
                        <div class="chexp"><i class="far fa-calendar-check"></i> Masa Aktif 1 tahun</div>
                        <hr>
                        <a href="./template-web?halaman_isi=Web%201" class="btn-red" style="width: 100%; justify-content: center;">Pilih Paket <i class="fas fa-arrow-right"></i></a> 
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="chcard" style="border-top: 9px solid #cd0fb1;">
                     <div class="chbody">
                        <div class="chnm">Paket Web Plus</div>
                        <div class="chexp">4-8 halaman website untuk mulai <i>go digital</i></div>
                        <div class="chnm mt-3">Rp. 799.000</div><hr>
                        <div class="chexp"><i class="far fa-file-code"></i> 4-8 Halaman (Homepage)</div>
                        <div class="chexp"><i class="fa fa-server"></i> Akses cPanel</div>
                        <div class="chexp"><i class="fas fa-globe"></i> Gratis Hosting</div>
                        <div class="chexp"><i class="fas fa-edit"></i> Gratis Jasa Editing Web</div>
                        <div class="chexp"><i class="fas fa-sync-alt"></i> Bebas revisi 1 bulan pertama</div>
                        <div class="chexp"><i class="far fa-calendar-check"></i> Masa Aktif 1 tahun</div>
                        <hr>
                        <a href="./template-web?halaman_isi=Web%204" class="btn-red" style="width: 100%; justify-content: center;">Pilih Paket <i class="fas fa-arrow-right"></i></a> 
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                  <div class="chcard" style="border-top: 9px solid #aec500;">
                     <div class="chbody">
                        <div class="chnm">Paket Web Max</div>
                        <div class="chexp">9-15 halaman website untuk mulai <i>go digital</i></div>
                        <div class="chnm mt-3">Rp. 1.299.000</div><hr>
                        <div class="chexp"><i class="far fa-file-code"></i> 9-15 Halaman (Homepage)</div>
                        <div class="chexp"><i class="fa fa-server"></i> Akses cPanel</div>
                        <div class="chexp"><i class="fas fa-globe"></i> Gratis Hosting</div>
                        <div class="chexp"><i class="fas fa-edit"></i> Gratis Jasa Editing Web</div>
                        <div class="chexp"><i class="fas fa-sync-alt"></i> Bebas revisi 1 bulan pertama</div>
                        <div class="chexp"><i class="far fa-calendar-check"></i> Masa Aktif 1 tahun</div>
                        <hr>
                        <a href="./template-web?halaman_isi=Web%209" class="btn-red" style="width: 100%; justify-content: center;">Pilih Paket <i class="fas fa-arrow-right"></i></a> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!-- ============================================================
         HISTORY � FIX 8 (alternating left/right text)
         ============================================================ -->
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
                     <h5>Mengisi Form Pemesanan</h5>
                     <p>Pada halaman form pemesanan terdapat detail order web anda dan diharuskan mengisi form untuk lanjut ke pembayaran.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">4.</div>
                     <h5>Mengisi Form Pemesanan</h5>
                     <p>Pada halaman form pemesanan terdapat detail order web anda dan diharuskan mengisi form untuk lanjut ke pembayaran.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">5.</div>
                     <h5>Proses Pembayaran</h5>
                     <p>Anda akan mendapatkan nomor invoice dan diarahkan untuk konfirmasi ke admin zilaweb via WhatsApp untuk proses pembayaran dan konfirmasi pemesanan.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">5.</div>
                      <h5>Proses Pembayaran</h5>
                     <p>Anda akan mendapatkan nomor invoice dan diarahkan untuk konfirmasi ke admin zilaweb via WhatsApp untuk proses pembayaran dan konfirmasi pemesanan.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">6.</div>
                     <h5>Proses Pengerjaan</h5>
                     <p>Setelah pembayaran di konfirmasi, admin akan mengarahkan untuk mendiskusikan kebutuhan, fitur, dan detail website bersama tim developer kami.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">6.</div>
                     <h5>Proses Pengerjaan</h5>
                     <p>Setelah pembayaran di konfirmasi, admin akan mengarahkan untuk mendiskusikan kebutuhan, fitur, dan detail website bersama tim developer kami.</p>
                  </div>
               </div>

               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">7.</div>
                     <h5>Website Selesai dan Online</h5>
                     <p>Website selesai dikerjakan, dilakukan pengecekan, dan siap digunakan atau dipublikasikan.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">7.</div>
                     <h5>Website Selesai dan Online</h5>
                     <p>Website selesai dikerjakan, dilakukan pengecekan, dan siap digunakan atau dipublikasikan.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
	  
      <!-- TESTIMONIALS -->
      <!-- <section id="testimonials">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Testimoni</span>
               <h2 class="stitle">Kustomer <span>Feedback</span></h2>
               <div class="sline"></div>
            </div>
            <div class="swiper tesSwiper" data-aos="fade-up">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Honestly the best burgers I've ever had. The smash burger is incredible - perfectly crispy edges, juicy inside, and those pickles! We come every Friday now.</p>
                        <div class="tesauth">
                           <img src="img/user.png" alt=""/>
                           <div>
                              <div class="tesnm">Monica Wilber</div>
                              <div class="tesrl">Regular Customer</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Ordered delivery and the food arrived hot and fresh in 22 minutes. Portions are generous. Sarab has become my go-to comfort food spot without question.</p>
                        <div class="tesauth">
                           <img src="img/user.png" alt=""/>
                           <div>
                              <div class="tesnm">Cameron Fox</div>
                              <div class="tesrl">Food Blogger</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">The truffle pasta blew my mind. I didn't expect that quality from a fast food place. Great ambiance, super friendly staff. Highly recommended!</p>
                        <div class="tesauth">
                           <img src="img/user.png" alt=""/>
                           <div>
                              <div class="tesnm">Priya Sharma</div>
                              <div class="tesrl"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tescard">
                        <div class="tesq">"</div>
                        <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testxt">Catered our office party of 50 people and everything was flawless. Fresh, delicious, on time and well presented. Nashville chicken was the absolute star!</p>
                        <div class="tesauth">
                           <img src="img/testimonial/4.jpg" alt=""/>
                           <div>
                              <div class="tesnm">David Park</div>
                              <div class="tesrl">Corporate Client</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-pagination mt-4" style="position:static;"></div>
            </div>
         </div>
      </section> -->
	  
      <!-- RESERVATION FORM -->

	  
      <!-- BLOG -->
      <!-- <section id="blog">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Blog</span>
               <h2 class="stitle">Artikel <span>Terbaru</span></h2>
               <div class="sline"></div>
            </div>
            <div class="row g-4">
               <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                  <div class="blcard">
                     <div class="blimg">
                        <img src="img/blog/3.jpg" alt=""/>
                        <div class="bldatebdg"><span class="bd">05</span><span class="bm">Jan</span></div>
                     </div>
                     <div class="blbody">
                        <div class="bltag">Recipes</div>
                        <div class="bltit"><a href="#">Innovative Hot Chickpeas Flake Crackin' Recipe at Home</a></div>
                        <a href="./blog" class="blmore">Read More <i class="fas fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center mt-5"><a href="./blog" class="btn-red">Lihat Semua Artikel <i class="fas fa-arrow-right"></i></a></div>
      </section> -->
	  
      

      
	  
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
