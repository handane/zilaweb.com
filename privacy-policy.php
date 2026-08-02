<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <title>Privacy Policy - ZilaWeb</title>

      <meta name="title" content="Privacy Policy">
        <meta name="description" content="Kebijakan privasi ZilaWeb yang menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi data pengguna saat menggunakan layanan kami.">
        <meta name="robots" content="noindex, nofollow">
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
	  
      <section id="history" class="privacy-policy py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="mb-4">Privacy Policy</h2>
                <p class="text-muted">Last Updated: July 2026</p>

                <p>
                    Your privacy is important to us. This Privacy Policy explains how we collect,
                    use, disclose, and safeguard your information when you use our website or
                    request our web development services.
                </p>

                <h4 class="mt-5">1. Information We Collect</h4>
                <p>We may collect the following types of information:</p>
                <ul>
                    <li>Name and contact information (email address, phone number).</li>
                    <li>Business information related to your project.</li>
                    <li>Messages and inquiries submitted through our contact forms.</li>
                    <li>Technical information such as IP address, browser type, device information, and website usage analytics.</li>
                </ul>

                <h4 class="mt-5">2. How We Use Your Information</h4>
                <p>Your information may be used to:</p>
                <ul>
                    <li>Respond to your inquiries and project requests.</li>
                    <li>Provide web development and related services.</li>
                    <li>Improve our website and user experience.</li>
                    <li>Communicate project updates or service information.</li>
                    <li>Comply with legal obligations.</li>
                </ul>

                <h4 class="mt-5">3. Information Sharing</h4>
                <p>
                    We do not sell, trade, or rent your personal information to third parties.
                    Your information may only be shared with trusted service providers when
                    necessary to deliver our services or when required by law.
                </p>

                <h4 class="mt-5">4. Data Security</h4>
                <p>
                    We implement appropriate technical and organizational measures to protect
                    your personal information against unauthorized access, disclosure,
                    alteration, or destruction. However, no method of internet transmission
                    is completely secure.
                </p>

                <h4 class="mt-5">5. Cookies</h4>
                <p>
                    Our website may use cookies to improve your browsing experience,
                    analyze website traffic, and remember your preferences. You may disable
                    cookies through your browser settings if you prefer.
                </p>

                <h4 class="mt-5">6. Third-Party Services</h4>
                <p>
                    We may use trusted third-party tools such as analytics, hosting providers,
                    or payment processors. These providers have their own privacy policies,
                    and we encourage you to review them.
                </p>

                <h4 class="mt-5">7. Your Rights</h4>
                <p>
                    Depending on your location, you may have the right to access, update,
                    correct, or request deletion of your personal information. You may contact
                    us at any time regarding your privacy rights.
                </p>

                <h4 class="mt-5">8. Changes to This Policy</h4>
                <p>
                    We reserve the right to update this Privacy Policy at any time. Any changes
                    will be posted on this page with an updated revision date.
                </p>

                <h4 class="mt-5">9. Contact Us</h4>
                <p>
                    If you have any questions regarding this Privacy Policy or how we handle
                    your information, please contact us through our website's contact page
                    or via the email address provided on our website.
                </p>
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
