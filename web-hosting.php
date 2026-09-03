<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/web-hosting-banner.png",
    "assets/multiImages/web-hosting-banner-lg.png",
    "Custom Web",            // main page title
    "Hosting",
    "We provide fast, secure, and reliable web hosting solutions designed for businesses of all sizes. Our hosting platforms ensure high uptime, superior performance, and complete peace of mind. From setup to ongoing support, we make hosting effortless and seamless. Empower your website with robust infrastructure and enterprise-grade security. Experience hosting that keeps your business always online and always growing.",

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Release & Delivery",
        "text" => "We set up, configure, and optimize your hosting environment, followed by full-service support throughout the lifecycle of your website.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Setup & Optimization",
        "text" => "We configure your hosting with best practices, ensuring maximum speed, top-level security, and smooth performance across all devices.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Planning & Strategy",
        "text" => "We assess your website needs, recommend the right hosting plan, and finalize a scalable and cost-efficient hosting solution.",
    ],
];

renderWork(
    "assets/multiImages/web-hosting-howWork.png",
    $Workcards
);
?>


<!-- Benefits of -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "Fully Managed <br/> Hosting",
        "text" => "We handle everything—from server setup to maintenance—so you can focus on your business.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "High-Speed <br/> Performance",
        "text" => "We use firewalls, SSL, malware protection, and regular monitoring to keep your website safe and secure.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "Advanced <br/>Security ",
        "text" => "We design with your users in mind, ensuring easy navigation, fast loading, and a seamless browsing journey.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "Guaranteed <br/>Uptime",
        "text" => "With robust infrastructure, we ensure high availability and uptime so your website stays online 24/7.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "Easy Control <br/>Panel",
        "text" => "Manage files, emails, databases, and settings effortlessly with an intuitive control panel.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Scalable Hosting <br/>Plans",
        "text" => "Hosting that grows with you—upgrade resources anytime as your website expands.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Backup & <br/>Recovery",
        "text" => "We provide regular backups and quick restoration options to protect your data at all times.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "24/7 Expert <br/> Support    ",
        "text" => "Our technical support team is always available to help you with hosting issues, updates, or troubleshooting.",
    ],
];

renderBenefits(
    "Our Hosting",
    "We design hosting environments that deliver speed, stability, and security. Our technology ensures your website performs at its best, backed by a support team you can trust. With modern hosting techniques and enterprise-grade systems, we provide a smooth and reliable digital experience.",
    $Benefitscards
);
?>



<!-- Expertise Across Industries -->
<?php include("components/multiComp/types.php") ?>
<?php
$Typecards = [
    [
        "img" => "assets/multiImages/custom-website-industries1.svg",
        "heading" => "Shared Hosting ",
        "text" => "Affordable hosting ideal for small businesses and new websites.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "VPS Hosting",
        "text" => "Powerful virtual servers for businesses needing more control and performance.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "Cloud Hosting",
        "text" => "Flexible, scalable cloud infrastructure for high-traffic and mission-critical websites.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Dedicated Hosting",
        "text" => "Complete server ownership for maximum power, customization, and security.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Managed WordPress Hosting",
        "text" => "Fast, secure, and optimized hosting specially built for WordPress sites.",
    ],
];

$heading = "Types of Hosting  <span class='font-extrabold'> We Provide </span>";

renderType(
    "assets/multiImages/web-hosting-types.png",
    $heading,
    "We've built custom web solutions for businesses across diverse industries. Our experience allows us to understand your unique challenges and deliver tailored solutions.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "cPanel",
    "LiteSpeed",
    "CloudLinux",
    "Apache",
    "Nginx",
    "MySQL",
    "PHP",
    "Cloudflare",
    "SSL",
    "CDN",
    "AWS",
    "DigitalOcean",

];

$heading = "Technologies  <span class='font-extrabold'> We Use </span>";

renderTechnologies(
    $heading,
    "We leverage the latest technologies and frameworks to build robust, scalable solutions",
    $Techcards
);
?>



<!-- Features -->
<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
    "Easy to use",
    "Responsive to adapt any screen size",
    "Reliable and secure",
    "Cost-effective",
    "High performance",
    "Customizable",
    "Search engine & social media friendly",
    "Admin & seller login dashboard with real-time updates",
];

$heading = "Features of a <span class='font-extrabold'>good Software</span>";

renderFeature(
    "assets/multiImages/web-hosting-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>

<h1 class="hidden">Best Web Hosting Company in Noida | Dedicated Server
in Delhi NCR | Cloud Hosting</h1>