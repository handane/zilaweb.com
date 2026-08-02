<?php 
include("./koneksi.php");

$domain = $_GET['domain'];

$get_paket = mysqli_query($conn, "SELECT * FROM pembuatan_web WHERE domain = '$domain'");
$row = mysqli_fetch_array($get_paket);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Invoice - ZilaWeb</title>
      
      <meta name="author" content="ZilaWeb">
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

    <!-- <div class="sovtrend">
        <a href="./template-detail?id_web=<?= $row['id_web'] ?>" class="text-decoration-none ttag">
            <i class="fas fa-chevron-left"></i> Back
        </a>
    </div> -->

    <div class="row justify-content-center" style="margin-bottom: 150px;">
        <div class="col-lg-8">

            <div class="lfcard p-5 text-center">

                <div class="mb-4">
                    <i class="fas fa-check-circle text-success" style="font-size:70px;"></i>
                </div>

                <h3 class="mb-2">Pesanan Berhasil Dibuat</h3>
                <p class="text-muted">
                    Terima kasih, pesanan Anda telah berhasil dibuat.
                    Silakan lakukan konfirmasi melalui WhatsApp agar pesanan dapat segera diproses.
                </p>

                <hr class="my-4">

                <div class="row text-start">
                    <div class="col-md-4 mb-3">
                        <small class="text-muted d-block">Invoice</small>
                        <h5>
                            <span id="invoice"><?= $row['invoice'] ?></span>
                            <button class="btn btn-sm btn-outline-secondary" onclick="copyText('invoice')">
                                <i class="fas fa-copy"></i>
                            </button>
                        </h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <small class="text-muted d-block">Nama Domain</small>
                        <h5>
                            <span id="domain"><?= $domain ?></span>
                        </h5>
                    </div>
                    <div class="col-md-4 mb-3">
                        <small class="text-muted d-block">Total Pembayaran</small>
                        <h5>
                            <span id="harga">Rp <?= number_format($row['harga_total']) ?></span>
                        </h5>
                    </div>

                </div>

                <div class="alert alert-warning mt-4 text-start">
                    <b>Langkah Selanjutnya</b>

                    <ol class="mb-0 mt-2">
                        <li>Lakukan <b>Konfirmasi via WhatsApp</b> pada nomor yang tertera di bawah</li>
                        <li>Tulis nomor invoice atau nama domain anda.</li>
                        <li>Admin akan melakukan verifikasi pesanan.</li>
                        <li>Setelah pembayaran dikonfirmasi, proses pembuatan website akan dimulai.</li>
                    </ol>
                </div>

                <?php
                $pesan = urlencode(
                    "Halo Admin,\n\n"
                    ."Saya ingin melakukan konfirmasi pesanan.\n\n"
                    ."Invoice : ".$row['invoice']."\n"
                    ."Domain : ".$row['domain']."\n\n"
                    ."Terima kasih."
                );
                ?>

                <a href="https://wa.me/6285821175905?text=<?= $pesan ?>"
                class="btn btn-success btn-lg px-5"
                target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>
                    Konfirmasi via WhatsApp
                </a><br>    
                <small>atau</small>
                <div class="chexp text-center"><span id="wa">085821175905</span>
                    <button class="btn btn-sm btn-outline-secondary" onclick="copyText('wa')">
                        <i class="fas fa-copy"></i>
                    </button>
                </div>

                <div class="mt-3">
                    <small class="text-muted">
                        Simpan nomor invoice Anda sebagai referensi apabila ingin menghubungi admin.
                    </small>
                </div>

            </div>

        </div>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            $datetime = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
            $invoice = random_int(10000, 99999);

            $id_web = $row['id_web'];
            $wa_user = $_POST['hp'];
            $status = 'belum dikerjakan';
            $total = $_POST['total'];
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
                window.location="./order";
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
        function copyText(id) {
            let text = document.getElementById(id).innerText;

            navigator.clipboard.writeText(text).then(() => {
                alert('disalin: ' + text);
            });
        }
        </script>
   </body>
</html>
