<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/ui-ux-banner.png",
    "assets/multiImages/ui-ux-banner-lg.png",
    "UI/UX ",            // main page title
    "Design",
    "We craft intuitive, user-centered digital experiences. From research and strategy to prototypes and design systems, our UI/UX services improve usability, engagement, and conversion across web and mobile."

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Research & Discovery",
        "text" => "User research, stakeholder interviews and analytics review to identify real user needs.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Wireframes & Prototypes",
        "text" => "Low to high-fidelity prototypes to validate flows and test interactions early.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Visual Design & Handoff",
        "text" => "Pixel-perfect UI, design systems and developer-ready specs for smooth implementation.",
    ],
];

renderWork(
    "assets/multiImages/ui-ux-howWork.png",
    $Workcards
);
?>


<!-- Benefits of UI/UX -->
<?php include("components/multiComp/benefits.php") ?>
<?php
$Benefitscards = [
    [
        "bgcolor" => "bg-primary",
        "num" => "01",
        "heading" => "User Research <br/> & Insights",
        "text" => "Understand your users to make data-informed product decisions.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Interaction <br/> Design",
        "text" => "Design smooth, predictable interactions that delight users.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "Prototyping & <br/>Testing",
        "text" => "Validate ideas quickly with interactive prototypes and usability testing.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "Design Systems <br/> & Guidelines",
        "text" => "Reusable components and style guides that speed up development and ensure consistency.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "Accessibility <br/> Compliance",
        "text" => "Inclusive designs that meet WCAG standards and broaden your audience.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Conversion <br/> Optimization",
        "text" => "Design improvements focused on increasing user engagement and conversions.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Cross-Platform <br/>Consistency",
        "text" => "Designs that work seamlessly across web, iOS, and Android platforms.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Developer <br/>Handoff",
        "text" => "Clear specs, assets and tokens for efficient implementation.",
    ],
];

renderBenefits(
    "UI/UX Design Services",
    "We blend user research, product thinking and visual design to create interfaces that are both beautiful and effective—helping you reduce friction and increase conversions.",
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
        "Discovery & Research",
        "Market, user and competitor research to shape the product direction."
    ),
    renderWork2(
        "assets/multiImages/work-design.svg",
        "Ideation & Prototyping",
        "Sketches, wireframes and interactive prototypes to validate flows."
    ),
    renderWork2(
        "assets/multiImages/work-development.svg",
        "Design Implementation",
        "We collaborate with engineers to ensure designs are feasible and performant."
    ),
    renderWork2(
        "assets/multiImages/work-launch.svg",
        "Testing & Iteration",
        "Usability testing, analytics and iterative improvements after launch."
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
        "heading" => "E-commerce",
        "text" => "Designs focused on conversion, cart flows and product discovery.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "SaaS & Platforms",
        "text" => "Usable dashboards and flows for complex, data-driven products.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "Healthcare",
        "text" => "Accessible and compliant patient-facing and clinician tools.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Fintech",
        "text" => "Trustworthy, secure interfaces for financial products.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Enterprise",
        "text" => "Design systems and tooling for internal teams and workflows.",
    ],
];

$heading = "Industries We <span class='font-extrabold'>Design For</span>";

renderType(
    "assets/multiImages/ui-ux-types.png",
    $heading,
    "We design for products across industries—focusing on usability, accessibility and measurable outcomes.",
    $Typecards
);
?>



<!--Technologies We Use -->
<?php include("components/multiComp/technologies.php") ?>
<?php
$Techcards = [
    "Figma",
    "Sketch",
    "Adobe XD",
    "Framer",
    "InVision",
    "Storybook",
    "Design Systems",
    "HTML/CSS",
    "React",
    "Accessibility Tools",
    "UserTesting",
    "Analytics",
];

$heading = "Tools & Methods  <span class='font-extrabold'> We Use </span>";

renderTechnologies(
    $heading,
    "Design tools, prototyping platforms and processes we use to deliver great UX.",
    $Techcards
);
?>



<!-- Features -->
<?php include("components/multiComp/features.php") ?>

<?php
$Featurecards = [
    "User research & interviews",
    "Wireframes & prototypes",
    "Design systems & tokens",
    "Accessibility-first design",
    "Usability testing",
    "Responsive & adaptive UI",
    "Performance-minded design",
    "Developer-ready handoff",
];

$heading = "Features of <span class='font-extrabold'>Great UI/UX</span>";

renderFeature(
    "assets/multiImages/ui-ux-features.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>


<h1 class="hidden">UI UX Design Services in Delhi NCR</h1>