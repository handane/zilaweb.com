<?php 
   include("./koneksi.php");
   $id_web = $_GET['id_web'];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Cek Domain Gratis & Cepat - ZilaWeb</title>

      <meta name="title" content="Cek Ketersediaan Domain">
        <meta name="description" content="Cek ketersediaan nama domain secara gratis dan cepat. Temukan domain terbaik untuk bisnis, UMKM, atau personal Anda bersama ZilaWeb.">
        <meta name="robots" content="index, follow">
        <meta name="author" content="ZilaWeb">

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
        section {
            padding: 0px 0 200px 0;
            margin: 0 0 500px 0;
        }
        .btn-red:hover {
            transform: translateY(-1px);
            box-shadow: 0 1px 4px rgba(232, 136, 26, 0.45);
            color: #fff;
        }
        .loading-box {
            text-align: center;
            margin-top: 20px;
        }

        /* Spinner bulat modern */
        .loader {
            width: 50px;
            height: 50px;
            border: 5px solid #eee;
            border-top: 5px solid #fa723d;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: auto;
        }
        .domain-box.tersedia-box:hover {
            transform: scale(1.0);
            /* transition: 0.05s; */
            background: #f0fdf0;
            border: 1px solid #98f998;
        }

        /* Animasi muter */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Text animasi titik-titik */
        .loading-text {
            margin-top: 15px;
            font-weight: 500;
            color: #333;
            font-size: 16px;
        }

        /* efek titik ... */
        .loading-text::after {
            content: '';
            animation: dots 1.5s infinite;
        }

        @keyframes dots {
            0% { content: ''; }
            33% { content: '.'; }
            66% { content: '..'; }
            100% { content: '...'; }
        }
        .domain-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .tersedia-box {
            border-left: 5px solid #28a745;
        }

        .tidak-box {
            border-left: 5px solid #dc3545;
        }

        .harga {
            /* font-weight: bold; */
            font-size: 14px;
            font-weight: bold;
            color: var(--dark);
        }
      </style>
   </head>
   <body>
    <!-- headder -->
      <?php include('./include/header.php') ?>
	  
      <section id="history">
         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="sovtrend">
                        <a href="./template-detail?id_web=<?= $id_web ?>" class="text-decoration-none ttag">
                            <i class="fas fa-chevron-left"></i> Back
                        </a>
                    </div>
                </div>
            </div>
          <div class="text-center mb-4 mt-3">
              <h2>Cek Ketersediaan Domain</h2>
              <p>Cari nama domain terbaik untuk website kamu</p>
          </div>

          <div class="row justify-content-center">
              <div class="col-md-6 rounded border border-1 p-3">
                <div class="input-group">
                    <input type="text" id="domain" class="form-control border border-3" placeholder="contoh: zilaweb"  minlength="5" required>
                    <button class="btn-red" id="cekDomain">Cek Domain</button>
                </div>
                <div class="text-left mt-4" id="result"></div>
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

      <script>
        $("#cekDomain").click(function(){
            let domain = $("#domain").val();

            if(domain == ""){
                $("#result").html("<span class='text-danger'>Masukkan nama domain dulu</span>");
                return;
            }

            $("#result").html(`
                <div class="loading-box">
                    <div class="loader"></div>
                    <div class="loading-text">Sedang mencari domain terbaik...</div>
                </div>
            `);

           $.ajax({
                url: "./cek-domain?id_web=<?= $id_web ?>",
                method: "POST",
                data: { domain: domain },
                success: function(data){
                    $("#result").html(data);
                }
            });
        });
       
        </script>
        <script>
        document.getElementById("cekDomain").addEventListener("click", function () {
            let domain = document.getElementById("domain").value.trim();
            let result = document.getElementById("result");

            if (domain.length < 5) {
                result.innerHTML = '<span style="color:red;">Minimal 5 karakter!</span>';
                return;
            }
        });
        </script>
        
   </body>
</html>
