<?php include("components/header.php") ?>

<!-- banner -->
<?php include("components/multiComp/banner.php") ?>
<?php
renderBanner(
    "assets/multiImages/custom-website-banner.png",
    "assets/multiImages/custom-website-banner-lg.png",
    "Custom Website ",            // main page title
    "Development",
    "We design and develop user-friendly websites that deliver seamless experiences. Our focus is on performance, usability, and innovation. From concept to launch, we create websites that engage users and drive results. Empower your business with powerful, custom-built digital solutions."

);
?>


<!-- how we work -->
<?php include("components/multiComp/howWork.php") ?>
<?php
$Workcards = [
    [
        "img" => "assets/multiImages/custom-website-howWork1.svg",
        "heading" => "Planning & Strategy",
        "text" => "We develop, test, and deploy your project, followed by a full-service support package throughout the product lifecycle.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork2.svg",
        "heading" => "Design & Development",
        "text" => "We follow an agile development approach, collaborating closely with each client to customize every feature. Our process ensures flexibility and easy upgrades in the future.",
    ],
    [
        "img" => "assets/multiImages/custom-website-howWork3.svg",
        "heading" => "Release & Delivery",
        "text" => "We discuss your requirements, understand your objectives, offer expert recommendations, and finalize the project plan along with cost approvals.",
    ],
];

renderWork(
    "assets/multiImages/custom-website-howWork.png",
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
        "heading" => "Custom Website <br/> Design",
        "text" => "We create unique, visually appealing websites that reflect your brand identity and engage your audience.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "02",
        "heading" => "Responsive & <br/>Mobile-Friendly",
        "text" => "Our websites adapt smoothly to all screen sizes—desktops, tablets, and smartphones.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "03",
        "heading" => "User-Centric <br/>Experience",
        "text" => "We design with your users in mind, ensuring easy navigation, fast loading, and a seamless browsing journey.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "04",
        "heading" => "SEO-Optimized <br/>Structure",
        "text" => "Built with clean code and SEO best practices, your website is ready to rank higher and attract organic traffic.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "05",
        "heading" => "CMS <br/>Integration",
        "text" => "Manage your content easily with flexible and secure CMS solutions, giving you full control.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "06",
        "heading" => "Secure & <br/>Scalable Platforms",
        "text" => "We develop websites with strong security and scalable frameworks to support future growth.",
    ],
    [
        "bgcolor" => "bg-bgdark text-white",
        "num" => "07",
        "heading" => "Performance <br/>Testing & Launch",
        "text" => "Every website undergoes rigorous testing to ensure speed, reliability, and flawless functionality before launch.",
    ],
    [
        "bgcolor" => "bg-secondary",
        "num" => "08",
        "heading" => "Ongoing Support <br/>& Maintenance   ",
        "text" => "We provide continuous updates, technical support, and enhancements to keep your website performing at its best.",
    ],
];

renderBenefits(
    "Custom Development",
    "We strategize your ideas and apply the right methodology to build the perfect digital solution. Our skilled developers use the latest tools to ensure the application performs at its best. Using cutting-edge techniques, we create rich, intuitive, and visually appealing user experiences.",
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
        "assets/multiImages/custom-website-work-discovery.svg",
        "Discovery & Planning",
        "We analyze your requirements, goals, and audience to create a complete project roadmap."
    ),
    renderWork2(
        "assets/multiImages/custom-website-work-design.svg",
        "Design & Prototyping",
        "Our designers create stunning, user-focused interfaces with interactive prototypes for your approval."
    ),
    renderWork2(
        "assets/multiImages/custom-website-work-development.svg",
        "Development",
        "Our expert developers bring the designs to life using advanced coding practices and modern technologies."
    ),
    renderWork2(
        "assets/multiImages/custom-website-work-launch.svg",
        "Launch & Support",
        "We deploy your website, monitor performance, and provide continuous maintenance and optimization."
    ),
];
?>

<!-- 3. OUTPUT SECTION -->
<section class="contain2 marginy">
    <div class="contain flex h-full">

        <div>
            <h2 class="text-56 Abhaya font-medium leading-none" data-aos="fade-right" data-aos-duration="1600">
                How We <span class="font-extrabold">Work</span>
            </h2>

            <p class="text-18 mt-4">
                A proven, transparent process that ensures your project is delivered on time and exceeds expectations
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 md:gap-6 mt-12  2xl:mt-16 h-fit">

                <?php foreach ($renderWork2 as $card): ?>
                    <div class="flex flex-col px-5 items-center ">

                        <div class="flex justify-center">
                            <img src="<?= $card['image'] ?>"
                                alt="How we work"
                                class="" />
                        </div>

                        <h3 class="text-28 Abhaya leading-tight font-bold mt-2 xl:mt-4 text-center">
                            <?= $card['heading'] ?>
                        </h3>

                        <p class="text-16 leading-relaxed mt-2 xl:mt-4 text-center 2xl:px-8">
                            <?= $card['text'] ?>
                        </p>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>







<!-- Expertise Across Industries -->
<?php include("components/multiComp/types.php") ?>
<?php
$Typecards = [
    [
        "img" => "assets/multiImages/custom-website-industries1.svg",
        "heading" => "Custom Software Development ",
        "text" => "Our custom software solutions streamline workflows, boost revenue, and optimize business operations—from concept to deployment.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries2.svg",
        "heading" => "Software Implementation Services",
        "text" => "We design a complete implementation and deployment plan based on your needs, ensuring a smooth and enhanced user experience.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries3.svg",
        "heading" => "API Development Services",
        "text" => "We develop reliable, well-documented APIs that enable flexible integrations and easy customization for existing products.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries4.svg",
        "heading" => "Software Integration Services",
        "text" => "Our engineers adopt modern technologies to overcome challenges in architecture, testing, and execution.",
    ],
    [
        "img" => "assets/multiImages/custom-website-industries5.svg",
        "heading" => "Software Modernization Services",
        "text" => "We upgrade legacy systems with modern technologies to improve performance, scalability, and usability while maintaining compatibility.",
    ],
];

$heading = "Expertise Across <span class='font-extrabold'> Industries </span>";

renderType(
    "assets/multiImages/custom-website-types.png",
    $heading,
    "We’ve built custom web solutions for businesses across diverse sectors. Our experience helps us understand unique challenges and deliver tailored, high-quality solutions.",
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
    "assets/multiImages/custom-website-feature.png",
    $heading,
    $Featurecards
);
?>



<!-- footer -->
<?php include("components/footer.php") ?>

<h1 class="hidden">Custom Website Development Company in Delhi NCR</h1>