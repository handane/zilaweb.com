<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Cookies - ZilaWeb</title>

      <meta name="title" content="Cookies">
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
	  
      <section id="cookies" class="cookie-policy py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="mb-4">Cookie Policy</h2>
                    <p class="text-muted">Last Updated: July 2026</p>

                    <p>
                        This Cookie Policy explains how we use cookies and similar
                        technologies when you visit our website. By continuing to use
                        our website, you consent to the use of cookies as described
                        in this policy.
                    </p>

                    <h4 class="mt-5">1. What Are Cookies?</h4>
                    <p>
                        Cookies are small text files that are stored on your device
                        when you visit a website. They help websites remember your
                        preferences, improve functionality, and provide a better
                        browsing experience.
                    </p>

                    <h4 class="mt-5">2. How We Use Cookies</h4>
                    <p>We use cookies to:</p>
                    <ul>
                        <li>Ensure the website functions properly.</li>
                        <li>Remember your preferences and settings.</li>
                        <li>Analyze website traffic and visitor behavior.</li>
                        <li>Improve website performance and user experience.</li>
                        <li>Support security and prevent fraudulent activity.</li>
                    </ul>

                    <h4 class="mt-5">3. Types of Cookies We Use</h4>

                    <h5 class="mt-4">Essential Cookies</h5>
                    <p>
                        These cookies are necessary for the website to function
                        correctly and cannot be disabled in our systems.
                    </p>

                    <h5 class="mt-4">Analytics Cookies</h5>
                    <p>
                        These cookies help us understand how visitors interact with
                        our website by collecting anonymous information such as page
                        visits, traffic sources, and user behavior.
                    </p>

                    <h5 class="mt-4">Functional Cookies</h5>
                    <p>
                        Functional cookies remember your preferences, such as
                        language or previously entered information, to provide a
                        more personalized experience.
                    </p>

                    <h5 class="mt-4">Marketing Cookies</h5>
                    <p>
                        If enabled, marketing cookies may be used to deliver
                        relevant advertisements and measure the effectiveness of
                        advertising campaigns through trusted third-party services.
                    </p>

                    <h4 class="mt-5">4. Third-Party Cookies</h4>
                    <p>
                        We may use trusted third-party services such as analytics,
                        hosting providers, embedded content, or advertising
                        platforms that may place cookies on your device. These
                        providers have their own privacy and cookie policies.
                    </p>

                    <h4 class="mt-5">5. Managing Cookies</h4>
                    <p>
                        Most web browsers allow you to control, block, or delete
                        cookies through your browser settings. Please note that
                        disabling certain cookies may affect the functionality and
                        performance of this website.
                    </p>

                    <h4 class="mt-5">6. Changes to This Cookie Policy</h4>
                    <p>
                        We may update this Cookie Policy from time to time. Any
                        changes will be posted on this page with an updated revision
                        date.
                    </p>

                    <h4 class="mt-5">7. Contact Us</h4>
                    <p>
                        If you have any questions about our use of cookies, please
                        contact us using the contact information available on our
                        website.
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
