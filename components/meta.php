<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17763245153"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-17763245153');
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  switch ($page) {
    case 'about-us.php':
      $title = "Oakyweb | Best Web Development &amp; Digital Marketing Experts in
Noida, Delhi NCR";
      $description = "Oakyweb is a leading team of Web Development &amp; Digital
Marketing Experts. We deliver custom software, app development, and
ROI-driven SEO solutions. Partner with us today";
      $keywords = "Oaky Web, Oaky Web Working Expert, Oaky Web Noida, Oaky Web Delhi, Oaky Web Delhi NCR, Oaky Web Pvt Ltd";
      $canonical = "https://www.oakyweb.com/about-us.html";
      break;

    case 'custom-software-solution.php':
      $title = "Custom Software Development Company in Delhi NCR |
OakyWeb";
      $description = "OakyWeb is a top Custom Software Development
Company in Delhi NCR. We build scalable, secure, and affordable
software solutions in Noida &amp; India";
      $keywords = "Web design company, website development company, web designing and development services, web design in Delhi NCR, web development in Noida";
      $canonical = "https://www.oakyweb.com/custom-software-solution.html";
      break;

    case 'web-design-development.php':
      $title = "Custom Website Development Company in Delhi NCR |
OakyWeb";
      $description = "OakyWeb is a premier Custom Website
Development Company in Delhi NCR. We build high-performance,
SEO-friendly, and responsive websites for every industry.";
      $keywords = "Web design company, website development company, web designing and development services, web design in Delhi NCR, web development in Noida";
      $canonical = "https://www.oakyweb.com/web-design-development.html";
      break;

    case 'e-commerce-solution.php':
      $title = "Ecommerce Development Company in Delhi NCR | OakyWeb";
      $description = "Ecommerce development company in Noida, Delhi NCR,
India. OakyWeb delivers professional, custom, and affordable solutions
tailored for your business";
      $keywords = "Ecommerce development company in Noida, E-commerce solutions in Delhi NCR, B2B Portal, customized e-commerce design and development company in Delhi NCR, India";
      $canonical = "https://www.oakyweb.com/e-commerce-solution.html";
      break;

    case 'mobile-application.php':
      $title = "Mobile App Development Company in Noida, Delhi NCR - Oaky Web";
      $description = "Oaky Web is a leading Mobile App Development Company in Noida, Delhi NCR, offering native, hybrid, and responsive mobile applications at great prices.";
      $keywords = "Mobile apps, mobile app development in Noida, mobile application development company in Delhi NCR, best mobile apps provider in Noida";
      $canonical = "https://www.oakyweb.com/mobile-application.html";
      break;

    case 'social-media.php':
      $title = "Digital Marketing Agency for Small Business in Noida |
OakyWeb";
      $description = "OakyWeb is a top Digital Marketing Agency in
Noida, Delhi NCR. We provide ROI-driven SEO, SMO, PPC, and
Social Media services for small businesses at affordable prices.";
      $keywords = "SEO company, SMO company in Delhi NCR, SEO service in Noida, PPC advertising, best SEO and SMO company in Noida, Delhi NCR";
      $canonical = "https://www.oakyweb.com/social-media.html";
      break;

    case 'web-hosting.php':
      $title = "Best Web Hosting Company in Noida | Dedicated Server in Delhi NCR | Cloud Hosting - Oaky Web";
      $description = "Oaky Web offers the best and most affordable web hosting services in Noida, Delhi NCR, including cloud hosting, email on cloud, dedicated servers, SSL, and VPS hosting.";
      $keywords = "Web hosting, web hosting services, top web hosting company in Noida, cloud hosting in Delhi NCR, business email-id";
      $canonical = "https://www.oakyweb.com/web-hosting.html";
      break;

    case 'portfolio.php':
      $title = "Oaky Web Valuable Clients, Projects, and Portfolio";
      $description = "Explore Oaky Web’s portfolio featuring successful projects for our valued clients.";
      $keywords = "Oaky Web clients, Oaky Web projects, Oaky Web portfolio, Oaky Web works";
      $canonical = "https://www.oakyweb.com/portfolio.html";
      break;

    case 'contact-us.php':
      $title = "Contact Us for Web Design & Development | Web Hosting in Delhi NCR, India";
      $description = "Get a quick quote for e-commerce, mobile app, web design, and hosting services in Delhi NCR, India. Call +91-9650381012 or visit Suite no. 302, H, BSi Business Park, Noida.";
      $keywords = "contact us, web design, web development, e-commerce solutions, mobile app development, web hosting";
      $canonical = "https://www.oakyweb.com/contact-us.html";
      break;

    case 'ui-ux-design.php':
      $title = "UI/UX Design Services in Delhi NCR | OakyWeb";
      $description = "Enhance user engagement with our UI/UX Design
Services in Delhi NCR. We craft intuitive and modern designs that drive
conversions.";
      $keywords = "UI UX design, UX agency Noida, user experience design, UI design services, product design Noida, UX research";
      $canonical = "https://www.oakyweb.com/ui-ux-design.html";
      break;

    case 'oee-dashboard.php':
      $title = "OEE Dashboard Software & Development | Manufacturing Analytics – Oaky Web";
      $description = "Oaky Web designs and develops custom OEE (Overall Equipment Effectiveness) dashboards to help manufacturing units visualize, analyze and improve operational efficiency in real-time.";
      $keywords = "OEE dashboard, manufacturing analytics, equipment effectiveness, production KPI, OEE software, real-time manufacturing dashboard";
      $canonical = "https://www.oakyweb.com/oee-dashboard.html";
      break;

    case 'privacy.php':
      $title = "Privacy Policy | Oaky Web – Data Protection & User Privacy";
      $description = "Read Oaky Web’s Privacy Policy to understand how we collect, use, store, and protect your personal information while using our website and services.";
      $keywords = "privacy policy, data protection, user privacy, personal data security, website privacy policy, Oaky Web privacy";
      $canonical = "https://www.oakyweb.com/privacy.html";
      break;


    default:
      $title = "Custom Software &amp; App Development Company in Delhi NCR | OakyWeb";
      $description = "OakyWeb offers expert Custom Software Solutions,
Mobile App Development, Website Design, and Digital Marketing. Scale
your business with our future-ready IT services";
      $keywords = "Custom software development,Digital marketing company, web solutions, web design, website development, e-commerce development, mobile app development, web hosting, SEO, SMO, Delhi, Ncr,Best Custom Software Development Company in Delhi Ncr";
      $canonical = "https://www.oakyweb.com/";
      break;
  }
  ?>

  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="<?php echo $keywords; ?>" />
  <link rel="canonical" href="<?php echo $canonical; ?>" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="google-site-verification" content="dP_MOGh4Bppg5T0izonUZ14wwhxQfKkzSp6EZsRITkY">

  
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="https://www.oakyweb.com/assets/logo.png">
  <meta property="og:url" content="<?php echo $canonical; ?>">
  <meta property="og:type" content="website">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2N936W4');</script>
<!-- End Google Tag Manager -->

  <link rel="icon" href="assets/oakyweb-favicon.ico" type="image/x-icon" />

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://www.oakyweb.com",
      "name": "Oaky Web Pvt. Ltd.",
      "description": "A new age web development & IT solutions company in Noida, Delhi-NCR region."
    }
  </script>

  <!-- Google tag -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-215TGMB9XN"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-215TGMB9XN');
  </script>




  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/latest-font.css" />
  <link rel="stylesheet" href="css/base.css" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body class="<?= isset($pageBg) ? $pageBg : '' ?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2N936W4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>