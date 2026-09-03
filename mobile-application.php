<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/mobile-banner.png",
    "assets/multiImages/mobile-banner-lg.png",
    "Mobile Application ",            // main page title
    "Development",
    "We design and develop high-performance mobile applications for Android and iOS. From concept and UX to deployment and maintenance, our apps deliver engaging user experiences and reliable backend integration."

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Planning & Strategy ",
        "text" => "We define product goals, target users, and a roadmap for a successful mobile launch.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "UI/UX Design",
        "text" => "We craft intuitive interfaces and prototypes focused on usability and retention.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Development & QA",
        "text" => "Native or cross-platform development with rigorous testing for performance and stability.",
    ],
];

renderWork(
    "assets/multiImages/mobile-howWork.png",
    $Workcards
);
?>


<!-- Benefits of Mobile Apps -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "Native iOS & <br/>Android",
        "text" => "High-performance apps tailored for the platform to deliver the best user experience.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Cross-Platform <br/> Solutions",
        "text" => "Use React Native or Flutter to reach more users with a single, maintainable codebase.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "Performance <br/>Optimization",
        "text" => "Smooth animations, fast loading, and efficient background processing for real-world usage.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "App Store <br/> Optimization",
        "text" => "Improve discoverability and conversion with optimized metadata and store assets.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "Secure & <br/>Scalable",
        "text" => "Secure authentication, data encryption, and scalable backend integrations.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Push & <br/>Integrations",
        "text" => "Real-time updates, push notifications and third-party integrations to boost engagement.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Offline <br/>Support",
        "text" => "Offline caching and background sync to keep core features available without connectivity.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Maintenance <br/>& Support",
        "text" => "Ongoing updates, monitoring, and improvements to keep your app competitive.",
    ],
];

renderBenefits(
    "Mobile App Development",
    "We build mobile applications that combine beautiful design with reliable engineering. Our team delivers apps optimized for performance, security, and user retention—helping you grow engagement and revenue.",
    $Benefitscards
);
?>



<!-- How We Work 2  -->
<?php
// 1. FUNCTION
function renderWork2($image, $heading, $text)
{
    return [
        "image" => $image,
        "heading" => $heading,
        "text" => $text
    ];
}

// 2. DATA ARRAY
$renderWork2 = [
    renderWork2(
        "assets/multiImages/work-discovery.svg",
        "Discovery & Planning",
        "We analyze target users, platforms, and monetization strategies to build a clear product roadmap."
    ),
    renderWork2(
        "assets/multiImages/work-design.svg",
        "Design & Prototyping",
        "Interactive prototypes and platform-specific UI guidelines ensure a delightfully usable product."
    ),
    renderWork2(
        "assets/multiImages/work-development.svg",
        "Development",
        "Experienced engineers deliver native and cross-platform solutions with robust APIs and CI/CD."
    ),
    renderWork2(
        "assets/multiImages/work-launch.svg",
        "Launch & Support",
        "We publish to the App Store and Play Store, monitor performance, and provide post-launch support."
    ),
];
?>

<!-- 3. OUTPUT SECTION -->






<!-- Expertise Across Industries -->
<?php include("components/multiComp/types.php") ?>
<?php
$Typecards = [
    [
        "img" => "assets/multiImages/custom-website-industries1.svg",
        "heading" => "Fintech & Payments",
        "text" => "Secure, compliant apps for payments, wallets, and banking services.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "Healthcare & Telemedicine",
        "text" => "HIPAA-aware mobile solutions for patient care, scheduling, and remote monitoring.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "E‑commerce & Retail",
        "text" => "Seamless shopping experiences with optimized checkout and in-app purchases.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "On‑demand & Logistics",
        "text" => "Real-time tracking, routing, and matching logic for marketplaces and delivery apps.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Enterprise Mobility",
        "text" => "Scalable internal apps for workforce productivity and business processes.",
    ],
];

$heading = "Expertise Across <span class='font-extrabold'> Industries </span>";

renderType(
    "assets/multiImages/mobile-types.png",
    $heading,
    "We’ve built mobile apps for diverse sectors, helping businesses increase engagement and reduce friction for their customers.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "React Native",
    "Flutter",
    "Swift",
    "Kotlin",
    "Ionic",
    "Firebase",
    "GraphQL",
    "REST API",
    "AWS",
    "Azure",
    "SQLite",
    "Docker",
];

$heading = "Technologies  <span class='font-extrabold'> We Use </span>";

renderTechnologies(
    $heading,
    "We leverage modern mobile frameworks and cloud services to deliver robust, maintainable apps.",
    $Techcards
);
?>



<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
   "Simple and intuitive UI/UX",
    "Fast load times and smooth navigation",
    "Offline mode for essential features",
    "Secure authentication (biometric, OTP, social login)",
    "Push notifications for real-time updates",
    "Cloud-based data sync and storage",
    "Multi-language support",
    "Admin dashboard with analytics & reporting",
];

$heading = "Features of a <span class='font-extrabold'>good Application</span>";

renderFeature(
    "assets/multiImages/mobile-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>