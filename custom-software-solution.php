<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/sortware-banner.png",
    "assets/multiImages/sortware-banner-lg.png",
    "Custom Software ",            // main page title
    "Solution",
    "We design and develop scalable, secure, and maintainable custom software solutions tailored to your business. From architecture and integration to deployment and support, we deliver reliable applications that drive results."

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Planning & Strategy ",
        "text" => "We gather requirements, define objectives, and create a product roadmap aligned with business outcomes.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Architecture & Design",
        "text" => "We design robust system architectures, data models, and UX patterns for scalable products.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Development & QA",
        "text" => "Engineering teams implement features, write automated tests, and ensure quality through CI/CD pipelines.",
    ],
];

renderWork(
    "assets/multiImages/software-howWork.png",
    $Workcards
);
?>


<!-- Benefits of Custom Software -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "Tailored Business <br/>Logic",
        "text" => "Solutions built to match your specific workflows and KPIs, not one-size-fits-all software.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Scalable & <br/>Extensible",
        "text" => "Architectures designed to grow with your business and integrate with existing systems.",
    ],
    [
        "bgcolor" => "bg-secondary ",
        "num" => "03",
        "heading" => "Secure & <br/>Compliant",
        "text" => "Enterprise-grade security, access controls, and compliance for regulated industries.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "Performance <br/>Optimization",
        "text" => "Optimized backend systems and caching strategies for fast, reliable operations.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "API & <br/>Integration",
        "text" => "Robust APIs and middleware to connect with third-party services and data sources.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Automated <br/>Testing & CI",
        "text" => "Continuous integration and automated testing to maintain high code quality.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Monitoring & <br/>Support",
        "text" => "Proactive monitoring, logging, and dedicated support to reduce downtime.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Cloud-Native <br/>Deployments",
        "text" => "Containerized and cloud-ready deployments for scalability and resilience.",
    ],
];

renderBenefits(
    "Custom Software Development",
    "We deliver enterprise-grade, custom software tailored to solve complex business problems—built with maintainability, security, and growth in mind.",
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
        "text" => "Secure, compliant software for payments, wallets, and banking platforms.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "Healthcare & Telemedicine",
        "text" => "Regulated software for EHR, telemedicine, scheduling, and patient portals.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "E-commerce & Retail",
        "text" => "Order management, inventory systems, and personalized commerce platforms.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Logistics & Supply Chain",
        "text" => "Routing, tracking, and warehouse management systems for efficient operations.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Enterprise Software",
        "text" => "Internal systems for CRM, ERP, HR, and operational workflows.",
    ],
];

$heading = "Expertise Across <span class='font-extrabold'> Industries </span>";

renderType(
    "assets/multiImages/software-types.png",
    $heading,
    "We've built mobile apps for diverse sectors, helping businesses increase engagement and reduce friction for their customers.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "React",
    "Next.js",
    "TypeScript",
    "Tailwind CSS",
    "Node.js",
    "PostgreSQL",
    "MongoDB",
    "AWS",
    "Docker",
    "GraphQL",
    "REST API",
    "Firebase",

];

$heading = "Technologies  <span class='font-extrabold'> We Use </span>";

renderTechnologies(
    $heading,
    "We leverage modern mobile frameworks and cloud services to deliver robust, maintainable apps.",
    $Techcards
);
?>



<!-- Features -->
<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
    "Scalable architectures",
    "API-first integrations",
    "Role-based security & encryption",
    "Automated testing & CI/CD",
    "Monitoring & observability",
    "Data-driven analytics",
    "Modular microservices",
    "Long-term maintenance & support",
];

$heading = "Features of a <span class='font-extrabold'>great Mobile App</span>";

renderFeature(
    "assets/multiImages/software-feature.png",
    "Features of <span class='font-extrabold'>Custom Software</span>",
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>


<h1 class="hidden"> Custom Software Development Company in Delhi NCR </h1>