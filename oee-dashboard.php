<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/oee1.png",
    "assets/multiImages/oee1-lg.png",
    "OEE Dashboard",            // main page title
    "Solution",
    "We provide comprehensive OEE dashboard solutions to monitor and improve your manufacturing efficiency. Real-time data visualization and analytics for better decision making."

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Data Collection",
        "text" => "Automated data collection from machines to ensure accuracy and real-time monitoring.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Analysis & Insights",
        "text" => "Advanced analytics to identify bottlenecks and areas for improvement in your production line.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Optimization",
        "text" => "Actionable insights to optimize performance, availability, and quality of your manufacturing process.",
    ],
];

renderWork(
    "assets/multiImages/oee2.png",
    $Workcards
);
?>


<!-- Benefits of OEE Dashboard -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "Real-time <br/>Monitoring",
        "text" => "Track production performance in real-time to address issues immediately.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Reduced <br/> Downtime",
        "text" => "Identify causes of downtime and implement preventive measures.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "Improved <br/>Quality",
        "text" => "Monitor quality metrics to reduce defects and waste.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "Data-Driven <br/> Decisions",
        "text" => "Make informed decisions based on accurate and timely data.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "05",
        "heading" => "Increased <br/>Productivity",
        "text" => "Optimize machine utilization and workforce efficiency.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "06",
        "heading" => "Cost <br/>Reduction",
        "text" => "Lower operational costs by improving efficiency and reducing waste.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "07",
        "heading" => "Scalable <br/>Solution",
        "text" => "Grow your dashboard capabilities as your manufacturing needs expand.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "08",
        "heading" => "Maintenance <br/>Scheduling",
        "text" => "Predictive maintenance scheduling to prevent unexpected breakdowns.",
    ],
];

renderBenefits(
    "OEE Dashboard Benefits",
    "Our OEE Dashboard empowers manufacturers to maximize productivity and minimize losses. By providing visibility into every aspect of production, we help you achieve operational excellence.",
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
        "Assessment",
        "We assess your current production setup and identify key performance indicators."
    ),
    renderWork2(
        "assets/multiImages/work-design.svg",
        "Integration",
        "Seamless integration with your existing machinery and software systems."
    ),
    renderWork2(
        "assets/multiImages/work-development.svg",
        "Implementation",
        "Deploying the dashboard and configuring it to your specific requirements."
    ),
    renderWork2(
        "assets/multiImages/work-launch.svg",
        "Training & Support",
        "Training your team and providing ongoing support to ensure success."
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
        "heading" => "Automotive",
        "text" => "Optimizing assembly lines and parts manufacturing.",
    ],
];

$heading = "Expertise Across <span class='font-extrabold'> Industries </span>";

renderType(
    "assets/multiImages/oee3.png",
    $heading,
    "Our OEE solutions are adaptable to various manufacturing sectors, driving efficiency and growth.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "IoT Sensors",
    "Cloud Computing",
    "Big Data",
    "Machine Learning",
    "Real-time DB",
    "Dashboard UI",
    "API Integration",
    "Edge Computing",
    "SCADA",
    "PLC",
    "Industrial Protocols",
    "Security",
];

$heading = "Technologies  <span class='font-extrabold'> We Use </span>";

renderTechnologies(
    $heading,
    "We utilize cutting-edge technologies to capture, process, and visualize your production data.",
    $Techcards
);
?>



<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
   "Real-time OEE Calculation",
    "Downtime Tracking & Analysis",
    "Production Scheduling",
    "Quality Management",
    "Performance Trending",
    "Customizable Reports",
    "Mobile Access",
    "Alerts & Notifications",
];

$heading = "Features of a <span class='font-extrabold'>good Dashboard</span>";

renderFeature(
    "assets/multiImages/mobile-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>
