<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/digital-banner.png",
    "assets/multiImages/digital-banner-lg.png",
    "Digital Marketing ",            // main page title
    "& Social Media",
    "We drive growth through data-driven digital marketing strategies. From SEO and SMO to PPC advertising and content marketing, we help your brand reach the right audience and convert leads into customers."
);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Audit & Strategy ",
        "text" => "We analyze your current presence, competitors, and target audience to build a data-driven marketing roadmap.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Campaign Planning",
        "text" => "We create targeted campaigns across SEO, social media, paid ads, and content to maximize ROI.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Monitoring & Optimization",
        "text" => "We track performance, adjust strategies, and optimize for continuous improvement and better results.",
    ],
];

renderWork(
    "assets/multiImages/digital-howWork.png",
    $Workcards
);
?>


<!-- Benefits of Digital Marketing -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "SEO Optimization <br/>& Rankings",
        "text" => "Improve visibility in search results, increase organic traffic, and rank for high-intent keywords.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Social Media <br/> Management",
        "text" => "Engaging content, community management, and social strategies to build brand loyalty.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "PPC & Paid <br/>Advertising",
        "text" => "Google Ads, Facebook, Instagram, and LinkedIn campaigns with optimized targeting and budgets.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "Content Marketing <br/> & Strategy",
        "text" => "High-quality blogs, videos, infographics, and whitepapers that attract and engage your audience.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "Email Marketing <br/> Campaigns",
        "text" => "Personalized email sequences and automation to nurture leads and drive conversions.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Influencer & <br/>Affiliate Marketing",
        "text" => "Partner collaborations and affiliate programs to expand reach and credibility.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Analytics & <br/>Reporting",
        "text" => "In-depth performance tracking, insights, and dashboards for data-driven decisions.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Brand Building <br/>& Reputation",
        "text" => "Strategic positioning, PR, and reputation management to strengthen your market presence.",
    ],
];

renderBenefits(
    "Digital Marketing Services",
    "We combine creative storytelling with data analytics to drive measurable business results. Our team uses the latest tools and strategies to help your brand grow, engage customers, and dominate your market.",
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
        "Competitive Analysis",
        "We benchmark your position against competitors and identify market opportunities."
    ),
    renderWork2(
        "assets/multiImages/work-design.svg",
        "Strategy & Planning",
        "Custom strategies aligned with your business goals and target demographics."
    ),
    renderWork2(
        "assets/multiImages/work-development.svg",
        "Execution",
        "Implement campaigns across all channels with ongoing optimization and A/B testing."
    ),
    renderWork2(
        "assets/multiImages/work-launch.svg",
        "Reporting & Growth",
        "Monthly insights, ROI analysis, and recommendations to scale what's working."
    ),
];
?>





<!-- Industries We Serve -->
<?php include("components/multiComp/types.php") ?>
<?php
$Typecards = [
    [
        "img" => "assets/multiImages/custom-website-industries1.svg",
        "heading" => "E-commerce & Retail",
        "text" => "Drive online sales with SEO, social ads, and conversion rate optimization.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "SaaS & Technology",
        "text" => "Build awareness and qualified leads through thought leadership and demand generation.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "Healthcare & Services",
        "text" => "Attract patients and clients with local SEO, PPC, and reputation management.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Real Estate",
        "text" => "Generate property leads and buyer inquiries through targeted digital campaigns.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Finance & Banking",
        "text" => "Build trust and acquire customers with compliance-first digital strategies.",
    ],
];

$heading = "Industries We <span class='font-extrabold'> Serve </span>";

renderType(
    "assets/multiImages/digital-types.png",
    $heading,
    "We've driven digital growth for businesses across sectors. Our industry expertise helps us craft campaigns that resonate with your market.",
    $Typecards
);
?>



<!-- Digital Channels We Master -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
  "SEO",
  "Google Ads",
  "FB & IG",
  "LinkedIn",
  "Email",
  "Content",
  "Analytics",
  "Automation",
  "CRM",
  "Social Listening",
  "Conversion",
];


$heading = "Channels & Tools  <span class='font-extrabold'> We Master </span>";

renderTechnologies(
    $heading,
    "We leverage all major digital channels and marketing automation platforms for integrated campaigns.",
    $Techcards
);
?>



<!-- Features -->
<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
    "Data-driven strategy",
    "Multi-channel campaigns",
    "Real-time analytics & dashboards",
    "A/B testing & optimization",
    "Dedicated account management",
    "Transparent reporting",
    "ROI-focused approach",
    "Scalable solutions",
];

$heading = "Features of Our <span class='font-extrabold'>Digital Marketing</span>";

renderFeature(
    "assets/multiImages/digital-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>


<h1 class="hidden">Digital Marketing Agency for Small Business in Noida</h1>