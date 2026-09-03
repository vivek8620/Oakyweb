<section class=" contain2 marginy" id="our-secvices">
    <div class="contain relative">


        <!-- Background Image -->

        <div class="w-full h-full bg-cover bg-center rounded-[30px]"
            style="background-image: url('./assets/service.png');">


            <!-- Content Wrapper -->
            <div class="relative z-10 lg:p-12 xl:p-16 p-4">

                <!-- Text -->
                <div class="text-white">
                    <p class="text-12 font-medium uppercase text-primary mb-2">HOW WE DO IT</p>
                    <h2 class="text-45 leading-none font-medium">
                        We craft services that drive <br class="hidden md:inline" />
                        <span class="font-extrabold">transformational change</span>
                    </h2>
                </div>

                <div id="services-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[2px] mt-10"></div>


            </div>

        </div>

    </div>
</section>



<script>
    function createServiceCard({
        icon,
        title,
        description,
        btlink
    }) {
        return `
    <div class="flex">
      <div class="w-full flex flex-col bg-black/75 p-5 hover:bg-[#0f172a]">

      <div class="">
        <img src="${icon}" alt="${title}" class="max-w-[47px]" />
        </div>

        <h3 class="text-white font-medium text-22 mt-5 tracking-tight">
          ${title}
        </h3>

        <p class="text-16 text-secondary line-clamp-3 mt-5 leading-relaxed">
          ${description}
        </p>

        <a href="${btlink}" class="flex items-center text-white mt-3 cursor-pointer w-fit group ">
          <span class="mr-2 text-16">Learn More</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 arrow-move">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
            </svg>
        </a>

      </div>
    </div>
  `;
    }


    const services = [{
            icon: "assets/icons/custom.svg",
            title: "Custom Software Solutions",
            description: "At OakyWeb, we design and develop custom software solutions tailored to your business’s specific needs. Whether you're looking to automate internal processes, manage complex data, or enhance customer engagement, our expert developers deliver scalable, secure, and high-performing applications. Our end-to-end development process ensures seamless integration, intuitive interfaces, and long-term value—empowering your business to grow smarter and faster in an evolving digital world.",
            btlink: "custom-software-solution.html"
        },
        {
            icon: "assets/icons/mobile.svg",
            title: "Mobile App Development",
            description: "We specialize in creating intuitive, robust, and feature-rich mobile applications for Android and iOS platforms. Whether you’re a startup or an enterprise, our mobile solutions are built to enhance user experience, drive engagement, and meet your business goals. From concept to launch, we ensure every app is responsive, visually compelling, and performance-optimized—designed to deliver results and scale with your business.",
            btlink: "mobile-application.html"
        },
        {
            icon: "assets/icons/website.svg",
            title: "Website Development",
            description: "OakyWeb offers comprehensive web development services using modern frameworks and technologies. From sleek corporate websites to powerful web applications, we craft responsive, SEO-friendly platforms that reflect your brand and drive user interaction. With expertise in .net, NextJS, React, Angular, Core PHP, WordPress, Magento, Laravel, and more, we develop secure, high-speed, and fully functional websites that help businesses stand out in the competitive digital landscape.",
            btlink: "web-design-development.html"
        },
        {
            icon: "assets/icons/E-commerce.svg",
            title: "E-Commerce Solutions",
            description: "Looking to launch or scale your online store? OakyWeb provides comprehensive e-commerce development services using platforms like Shopify, WooCommerce, and Magento. From intuitive product catalogs to secure payment integrations and streamlined checkout experiences, we create e-commerce websites that deliver smooth, user-friendly shopping and drive sales globally.",
            btlink: "e-commerce-solution.html"
        },
        {
            icon: "assets/icons/ui-ux.svg",
            title: "UI & UX Design",
            description: "We believe that great design is more than just aesthetics—it’s about creating seamless user experiences. Our UI/UX design services are focused on user behavior, accessibility, and interaction. We design intuitive interfaces and engaging journeys across web and mobile platforms, ensuring your users connect, stay, and convert. Every design is crafted to align with your brand and business objectives while maintaining industry best practices.",
            btlink: "ui-ux-design.html"
        },
        {
            icon: "assets/icons/digital-marketing.svg",
            title: "Digital Marketing",
            description: "We help businesses grow online with result-driven digital marketing strategies. From SEO and content marketing to Google Ads, social media management, and performance analytics — OakyWeb offers end-to-end digital marketing services that boost visibility, generate quality leads, and convert engagement into action. Let us amplify your brand’s digital presence.",
            btlink: "social-media.html"
        },
        {
            icon: "assets/icons/cloud.svg",
            title: "Cloud & DevOps",
            description: "Our Cloud & DevOps services help businesses achieve faster delivery, higher efficiency, and better scalability. We design and manage secure cloud infrastructures tailored to your needs. With automation, CI/CD pipelines, and real-time monitoring, we ensure smooth operations and quick deployments. Our team focuses on optimizing performance while reducing costs. Partner with us to transform your IT into a flexible, future-ready system..",
            btlink: "web-hosting.html"
        },
    ];

    document.getElementById("services-grid").innerHTML =
        services.map(createServiceCard).join("");
</script>