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
	  
      <section id="about">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Buat Website Sekarang</span>
               <h2 class="stitle">Pilih <span>Desain</span> Website</h2>
               <div class="sline"></div>
            </div>
            <!-- FIX 3 � filter buttons -->
            <div class="text-center mb-4" data-aos="fade-up">
               <button class="filtbtn active" data-f="all">Semua</button>
               <button class="filtbtn" data-f="Landing page, 1-2 page">Web 1-2 Halaman</button>
               <button class="filtbtn" data-f="Homepage, 5-8 page">Web 5-8 Halaman</button>
               <button class="filtbtn" data-f="Homepage, 10-15 page">Web 10-15 Halaman</button>
            </div>
            
            <div class="row g-4" id="mgrid">
               <?php
               $get_paket = mysqli_query($conn, "SELECT * FROM template_web ORDER BY id DESC");

               while ($p = mysqli_fetch_array($get_paket)) {
               ?>
               <div class="col-sm-6 col-lg-4 mwrap" data-c="<?= $p['halaman_isi'] ?>" data-aos="fade-up">
                  <div class="mcard" style="border-top: 5px solid var(--primary)"
                     data-img="./fotoweb/<?= $p['gambar_1'] ?>">
                     <div class="mimg">
                        <img src="./fotoweb/<?= $p['gambar_1'] ?>" alt="Smash Burger"/>
                        <div class="mbdg new"><i class="fas fa-star"></i> Best Seller</div>
                        <!-- <div class="mhrt"><i class="far fa-heart"></i></div> -->
                     </div>
                     <div class="mbody">
                        <!-- <div class="mcat"><?= $p['halaman_isi'] ?></div> -->
                        <div class="mtit"><?= $p['judul'] ?></div>
                        <div class="mdesc"><?= $p['halaman_isi'] ?></div>
                        <div class="mfoot">
                           <div>
                              <!-- <div class="mprice">Rp <?= number_format($p['harga']) ?> <small>$18.99</small></div> -->
                              <div class="mprice">Rp <?= number_format($p['harga']) ?></div>
                              <!-- <div class="mstars"><i class="fas fa-star"></i> <span style="color:#bbb;font-size:.7rem;">(128)</span></div> -->
                           </div>
                           <button class="madd" title="Preview"><i class="fa fa-external-link"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
            <div class="d-flex justify-content-center mt-4">
					<nav>
                  <ul class="pagination">
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
      
      <script>
const itemsPerPage = 9; // jumlah item per halaman
let currentPage = 1;
let currentFilter = 'all';

const allItems = Array.from(document.querySelectorAll('.mwrap'));
const pagination = document.querySelector('.pagination');

// FILTER BUTTON
document.querySelectorAll('.filtbtn').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.filtbtn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        currentFilter = this.dataset.f;
        currentPage = 1;

        render();
    });
});

// FILTER LOGIC
function getFilteredItems() {
    if (currentFilter === 'all') return allItems;

    return allItems.filter(item => {
        const c = item.dataset.c.toLowerCase();
        const f = currentFilter.toLowerCase();

        return c.includes(f);
    });
}

// RENDER ITEMS
function render() {
    const filtered = getFilteredItems();

    // sembunyikan semua
    allItems.forEach(item => item.style.display = 'none');

    // pagination hitung
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    const pageItems = filtered.slice(start, end);

    // tampilkan
    pageItems.forEach(item => item.style.display = 'block');

    renderPagination(filtered.length);
}

// PAGINATION
function renderPagination(totalItems) {
    pagination.innerHTML = '';
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    if (totalPages <= 1) return;

    // prev
    if (currentPage > 1) {
        pagination.innerHTML += `
        <li class="page-item">
            <a class="page-link" href="#" onclick="goPage(${currentPage - 1})">&laquo;</a>
        </li>`;
    }

    for (let i = 1; i <= totalPages; i++) {
        pagination.innerHTML += `
        <li class="page-item ${i === currentPage ? 'active' : ''}">
            <a class="page-link" href="#" onclick="goPage(${i})">${i}</a>
        </li>`;
    }

    // next
    if (currentPage < totalPages) {
        pagination.innerHTML += `
        <li class="page-item">
            <a class="page-link" href="#" onclick="goPage(${currentPage + 1})">&raquo;</a>
        </li>`;
    }
}

// PINDAH HALAMAN
function goPage(page) {
    currentPage = page;
    render();
}

// INIT
render();
</script>
<script>
const urlParams = new URLSearchParams(window.location.search);
const filterFromURL = urlParams.get('filter');

if (filterFromURL) {
    currentFilter = filterFromURL.toLowerCase();

    // aktifkan tombol (kalau masih dipakai)
    document.querySelectorAll('.filtbtn').forEach(btn => {
        btn.classList.remove('active');

        if (btn.dataset.f.toLowerCase() === currentFilter) {
            btn.classList.add('active');
        }
    });
}

// jalankan ulang render
render();
</script>
   </body>
</html>
