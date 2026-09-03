<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/e-commerce-banner.png",
    "assets/multiImages/e-commerce-banner-lg.png",
    "Custom E- Commerce",            // main page title
    "Solution",
    "We build powerful, user-friendly e-commerce platforms that help you sell more and grow faster. Our solutions focus on smooth shopping experiences, secure transactions, and modern designs that convert visitors into loyal customers. From product management to payment integration, we deliver everything you need to run a successful online store. Empower your business with a custom, scalable, and high-performing e-commerce solution built for results.",

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Release & Delivery",
        "text" => "We develop, test, and deploy your e-commerce platform, followed by complete support throughout the entire product lifecycle.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Setup & Optimization",
        "text" => "Using an agile approach, we collaborate closely with you to create a fully customized online store with intuitive navigation, attractive layouts, and optimized features for better engagement and conversions.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Planning & Strategy",
        "text" => "We understand your business goals, analyze your target audience, recommend the right features, and finalize a detailed roadmap and cost plan for your e-commerce project.",
    ],
];

renderWork(
    "assets/multiImages/e-commerce-howWork.png",
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
        "heading" => "Custom Store <br/> Design ",
        "text" => "We design visually appealing online stores that reflect your brand identity and provide a seamless shopping experience.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Mobile-Friendly 
         <br/> & Responsive",
        "text" => "We use firewalls, SSL, malware protection, and regular monitoring to keep your website safe and secure.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "User-Focused
        <br/> Experience ",
        "text" => "We design intuitive product navigation, fast loading pages, and a smooth checkout process that improves conversions.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "SEO-Optimized <br/>Structure",
        "text" => "With clean code and SEO best practices, your store is ready to rank higher and attract organic customers.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "Easy Product  <br/>Management (CMS)",
        "text" => "Manage products, inventory, categories, and pricing with a flexible, secure, and user-friendly content management system.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Secure & Scalable <br/>Platform",
        "text" => "We build your store on strong, scalable frameworks with advanced security features to support future growth.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Payment Gateway <br/>Integration",
        "text" => "We integrate secure and trusted payment systems like Razorpay, PayPal, Stripe, and UPI for smooth, safe checkout.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Ongoing Support <br/> & Maintenance    ",
        "text" => "We provide regular updates, technical assistance, and performance enhancements to keep your online store running at its best.",
    ],
];

renderBenefits(
    "Our E- Commerce Solution ",
    "We strategize your e-commerce idea and execute it using modern tools and best practices. Our developers ensure optimized performance, beautiful UI/UX, and an intuitive shopping experience that customers love. With cutting-edge techniques and powerful backend systems, we deliver solutions that are both attractive and easy to manage.",
    $Benefitscards
);
?>



<!-- Types -->
<?php include("components/multiComp/types.php") ?>
<?php
$Typecards = [
    [
        "img" => "assets/multiImages/custom-website-industries1.svg",
        "heading" => "Basic E-Commerce Store",
        "text" => "Perfect for small businesses and startups, offering all essential features to begin selling online.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "Advanced E-Commerce Platform",
        "text" => "A powerful solution for growing businesses needing more control, custom features, and better performance.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "Cloud-Based E-Commerce",
        "text" => "Flexible, scalable online store infrastructure designed for high-traffic websites and fast-growing brands.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Enterprise E-Commerce System",
        "text" => "A complete, fully customizable platform built for large businesses requiring maximum performance, security, and automation.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Managed E-Commerce (Shopify / Woo Commerce / Custom)",
        "text" => "End-to-end managed e-commerce solutions with optimized performance, secure checkout, and premium customer experience.",
    ],
];

$heading = "E-Commerce Features  <span class='font-extrabold'> We Deliver </span>";

renderType(
    "assets/multiImages/e-commerce-deliver.png",
    $heading,
    "We've built custom web solutions for businesses across diverse industries. Our experience allows us to understand your unique challenges and deliver tailored solutions.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "Shopify",
    "WooCommerce",
    "Magento",
    "React",
    "Next.js",
    "Node.js",
    "MongoDB",
    "PostgreSQL",
    "Firebase",
    "REST API",
    "Payment Gateways",
    "GraphQL",

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
    "Easy-to-manage product catalog",
    "Secure payments & encrypted checkout",
    "SEO-friendly store structure",
    "Fast loading speed & optimized performance",
    "Order tracking & notifications",
    "Inventory & stock management",
    "Coupons, discounts & offers",
    "Customer login dashboard with real-time updates",
    "Mobile-friendly and responsive design",
    "Analytics & reporting tools"
];









$heading = "Features of a <span class='font-extrabold'>good E-Commerce</span>";

renderFeature(
    "assets/multiImages/e-commerce-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>

<h1 class="hidden">Ecommerce Development Company in Delhi NCR</h1>