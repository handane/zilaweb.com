<?php 
include("./koneksi.php");

$id_web = $_GET['id_web'] ?? 0;
$domain = $_GET['domain'] ?? '';
$price = base64_decode($_GET['price']);

$get_paket = mysqli_query($conn, "SELECT * FROM template_web WHERE id_web = '$id_web'");
$row = mysqli_fetch_array($get_paket);

$harga_template = $row['harga'];
$harga_domain = str_replace('.', '', $price ?? 0); // hilangkan titik
$total = $harga_template + $harga_domain;

// tahun berikutnya
$harga_hosting = 49000;
$perpanjang = $harga_domain + $harga_hosting + 100000;
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Order - ZilaWeb</title>
      <meta name="robots" content="noindex, nofollow">

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
        .btn-red {
            border-radius: 12px;
        }
        
        @media (max-width: 768px) {
            .chexp {
                font-size: 0.99rem;
            }
            .ringkasan {
                display: none;
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
        <a href="./template-detail?id_web=<?= $id_web ?>" class="text-decoration-none ttag">
            <i class="fas fa-chevron-left"></i> Back
        </a>
    </div>

    <div class="row g-3">
        <div class="col-lg-4">
            <div class="p-3 shadow-sm rounded bg-white sticky-card">

                <div class="lfcard">
                    <div class="chbody">
                        <label class="bltag mt-2"><b>--- Template</b></label>
                        <h5 class="chexp"><?= $row['judul'] ?></h5>
                        <h5 class="mtit">Rp <?= number_format($row['harga']) ?></h5>
                    </div>
                </div>

                <div class="lfcard mt-3">
                    <div class="chbody">
                        <label class="bltag mt-2"><b>--- Domain</b></label>
                        <div class="chexp text-success">
                            <i class="fas fa-globe"></i> <?= $domain ?>
                        </div>
                    </div>
                </div>

                <div class="lfcard mt-3 ringkasan">
                    <div class="chbody">
                        <label class="bltag mt-2"><b>--- Ringkasan</b></label>
                        <div class="chexp"><i class="fa fa-file-code"></i> <?= $row['halaman_isi'] ?></div>
                        <div class="chexp"><i class="fa fa-server"></i> Akses cPanel</div>
                        <div class="chexp"><i class="fas fa-globe"></i> Gratis Hosting</div>
                        <div class="chexp"><i class="fas fa-edit"></i> Gratis Jasa Editing Web</div>
                        <div class="chexp"><i class="fas fa-sync-alt"></i> Bebas revisi 1 bulan pertama</div>
                        <div class="chexp"><i class="far fa-calendar-check"></i> Masa Aktif 1 tahun</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- KANAN -->
        <div class="col-lg-8">
            <div class="lfcard p-4 mt-3">
                <h5 class="chexp mb-3">Form Pemesanan</h5>
                <form method="POST">
                    <input type="hidden" name="id_web" value="<?= $id_web ?>">
                    <input type="hidden" name="domain" value="<?= $domain ?>">

                    <div class="chexp p-3 bg-light rounded mb-3">
                      <div class="p-3 bg-light rounded mb-3">

                          <b class="d-block mb-2">Subtotal</b>

                          <div class="d-flex justify-content-between mb-1">
                              <span>Template</span>
                              <span>Rp <?= number_format($harga_template) ?></span>
                              <input type="hidden" name="harga_template" value="<?= $harga_template ?>">
                          </div>

                          <div class="d-flex justify-content-between mb-1">
                              <span>Domain</span>
                              <span>Rp <?= number_format($harga_domain) ?></span>
                              <input type="hidden" name="harga_domain" value="<?= $harga_domain ?>">
                          </div>

                          <hr class="my-2">

                          <div class="d-flex justify-content-between align-items-center">
                              <b>Total</b>
                              <span class="mprice fw-bold">Rp <?= number_format($total) ?></span>
                              <input type="hidden" name="harga_total" value="<?= $total ?>">
                          </div>

                      </div>

                      <hr>
                      <small class="text-muted">
                            <i>Perpanjangan tahun berikutnya: 
                            <span id="hargaPerpanjang">Rp <?= number_format($perpanjang) ?></span></i>
                            <input type="hidden" name="biaya_perpanjang" value="<?= $perpanjang ?>">
                        </small>
                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-md-3 chexp">
                            <label for="hp" class="col-form-label">
                                Masukkan Nomor WA Kamu <span style="color:red;">*</span>
                            </label>
                        </div>

                        <div class="col-md-9">
                            <input
                            type="tel"
                            id="hp"
                            name="hp"
                            class="form-control"
                            placeholder="+62"
                            pattern="^(\+62|62|08|8)[0-9]{8,13}$"
                            inputmode="numeric"
                            required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-red w-100 d-flex align-items-center justify-content-center" name="submit">
                        <i class="fas fa-shop me-2"></i>
                        Order Sekarang
                    </button>

                </form>

            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            $get_domains = mysqli_query($conn, "SELECT * FROM pembuatan_web WHERE domain = '$domain'");
            if (mysqli_num_rows($get_domains) > 0) {
                echo "<script>
                    alert('Order sudah pernah dibuat, domain sudah terekam di database, silahkan konfirmasi ke WA admin!');
                    history.back();
                </script>";
                exit;
            }

            $datetime = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
            $invoice = random_int(10000, 99999);

            $id_web = $row['id_web'];
            $wa_user = $_POST['hp'];
            $status = 'belum dikerjakan';
            $total = $_POST['total'];
            $harga_domain = $_POST['harga_domain'];
            $harga_deal = $_POST['harga_template'];
            $biaya_perpanjang = $_POST['biaya_perpanjang'];

            $status_bayar = 'belum bayar';
            $harga_total = $_POST['harga_total'];

            $tanggal_buat = $datetime->format('Y-m-d H:i');
            $tanggal_selesai = '';

            $submited = mysqli_query($conn, "INSERT INTO pembuatan_web VALUES(
                null,
                '',
                '".$id_web."',
                '".$wa_user."',
                '".$status."',
                '".$tanggal_buat."',
                '".$tanggal_selesai."',
                '',
                '".$domain."',
                '".$harga_domain."',
                '',
                '',
                '',
                '".$harga_deal."',
                '".$status_bayar."',
                '".$biaya_perpanjang."',
                '".$invoice."',
                '".$harga_total."'
                )");
                
            if($submited) {
                echo '<script>
                    window.location="./invoice?domain='.$domain.'";
                </script>';
            } else {  
            echo 'gagal ' . mysqli_error($conn);
            }
        }
    ?>
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
     <script>
        let hargaTemplate = <?= $harga_template ?>;
        let hargaDomain   = <?= $harga_domain ?>;
        let hargaPerp     = <?= $perpanjang ?>;

        let totalEl = document.querySelector(".mprice");
        let perpanjangEl = document.getElementById("hargaPerpanjang");

        function formatRupiah(angka) {
            return "Rp " + angka.toLocaleString("id-ID");
        }

        // TOTAL (tahun pertama)
        let total = hargaTemplate + hargaDomain;
        totalEl.innerText = formatRupiah(total);

        // PERPANJANGAN (tahun berikutnya)
        perpanjangEl.innerText = formatRupiah(hargaPerp);
    </script>
   </body>
</html>
