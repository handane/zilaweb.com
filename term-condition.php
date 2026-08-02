<?php 
   include("./koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Term & Condition - ZilaWeb</title>

      <meta name="title" content="Term & Condition">
      <meta name="description" content="zilaweb">
      <meta name="keywords" content="Term zilaweb">
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
	  
      <section id="terms" class="terms-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="mb-4">Terms &amp; Conditions</h2>
                    <p class="text-muted">Last Updated: July 2026</p>

                    <p>
                        Welcome to our website. By accessing our website or using our web
                        development services, you agree to be bound by these Terms &amp;
                        Conditions. If you do not agree with any part of these terms,
                        please do not use our services.
                    </p>

                    <h4 class="mt-5">1. Services</h4>
                    <p>
                        We provide professional web development services, including website
                        design, development, maintenance, optimization, and related digital
                        solutions based on the agreed project scope.
                    </p>

                    <h4 class="mt-5">2. Project Requirements</h4>
                    <p>
                        Clients are responsible for providing accurate project requirements,
                        content, images, branding materials, and any other resources required
                        to complete the project. Delays in providing these materials may affect
                        the project timeline.
                    </p>

                    <h4 class="mt-5">3. Pricing &amp; Payments</h4>
                    <ul>
                        <li>Project pricing is based on the agreed quotation or proposal.</li>
                        <li>Payments must be made according to the agreed payment schedule.</li>
                        <li>Additional features or revisions outside the original scope may incur additional charges.</li>
                        <li>Late payments may result in project delays or suspension of services.</li>
                    </ul>

                    <h4 class="mt-5">4. Revisions</h4>
                    <p>
                        Reasonable revisions are provided according to the project agreement.
                        Requests beyond the agreed revision limit or outside the original scope
                        may be treated as additional work and billed separately.
                    </p>

                    <h4 class="mt-5">5. Intellectual Property</h4>
                    <p>
                        Upon full payment, ownership of the completed website and custom
                        project assets will be transferred to the client unless otherwise
                        agreed in writing. We reserve the right to retain ownership of any
                        proprietary frameworks, reusable code, tools, or third-party
                        components used in the project.
                    </p>

                    <h4 class="mt-5">6. Client Responsibilities</h4>
                    <p>The client agrees to:</p>
                    <ul>
                        <li>Provide accurate information and project requirements.</li>
                        <li>Review submitted work within a reasonable timeframe.</li>
                        <li>Obtain legal rights for any content supplied to the project.</li>
                        <li>Not use the website for unlawful or prohibited activities.</li>
                    </ul>

                    <h4 class="mt-5">7. Limitation of Liability</h4>
                    <p>
                        We strive to deliver reliable and secure websites. However, we are
                        not liable for indirect, incidental, or consequential damages,
                        including loss of profits, business interruption, or data loss arising
                        from the use of our services or website.
                    </p>

                    <h4 class="mt-5">8. Third-Party Services</h4>
                    <p>
                        Projects may integrate third-party services such as hosting providers,
                        payment gateways, APIs, plugins, or analytics tools. We are not
                        responsible for the availability, performance, or policies of these
                        third-party services.
                    </p>

                    <h4 class="mt-5">9. Termination</h4>
                    <p>
                        Either party may terminate the project in accordance with the agreed
                        contract. Any completed work and outstanding payments up to the
                        termination date remain payable.
                    </p>

                    <h4 class="mt-5">10. Warranty</h4>
                    <p>
                        We provide a limited warranty period for fixing bugs related to the
                        original project deliverables. This warranty does not cover new
                        features, third-party updates, client modifications, or misuse.
                    </p>

                    <h4 class="mt-5">11. Changes to These Terms</h4>
                    <p>
                        We reserve the right to update these Terms &amp; Conditions at any
                        time. Any revisions will become effective immediately upon being
                        published on this page.
                    </p>

                    <h4 class="mt-5">12. Contact</h4>
                    <p>
                        If you have any questions regarding these Terms &amp; Conditions,
                        please contact us through the contact information provided on our
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
