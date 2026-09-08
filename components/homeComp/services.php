<section class="relative w-full pt-4 sm:pt-6 lg:pt-8 pb-12 sm:pb-16 lg:pb-20" id="our-secvices">
    <div class="contain relative z-10">

        <!-- Centered Header Section (No Badge) -->
        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl leading-tight font-extrabold text-gray-900 tracking-tight">
                We craft services that drive <br class="hidden md:inline" />
                <span class="text-[#ffc835]">transformational change</span>
            </h2>

            <p class="text-gray-600 text-sm sm:text-base mt-3 max-w-2xl mx-auto font-normal leading-relaxed">
                Comprehensive, scalable digital solutions designed to help modern businesses innovate, scale, and lead their industries.
            </p>
        </div>

        <!-- Grid of Service Cards -->
        <div id="services-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-6"></div>

    </div>
</section>

<script>
    function createServiceCard({
        iconSvg,
        title,
        description,
        btlink
    }) {
        return `
    <div class="group relative flex flex-col justify-between bg-white border border-gray-200/80 hover:border-[#ffc835] rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
      
      <div>
        <!-- Modern SVG Icon Container -->
        <div class="w-12 h-12 rounded-xl bg-[#ffc835]/15 text-[#111827] flex items-center justify-center mb-4 group-hover:bg-[#ffc835] group-hover:text-black transition-all duration-300 shadow-sm">
          ${iconSvg}
        </div>

        <!-- Title -->
        <h3 class="text-gray-900 font-bold text-[17.5px] mb-2 leading-snug tracking-tight group-hover:text-black transition-colors duration-200">
          ${title}
        </h3>

        <!-- Description -->
        <p class="text-[13.5px] text-gray-600 line-clamp-3 leading-relaxed font-normal">
          ${description}
        </p>
      </div>

      <!-- Learn More Link -->
      <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between">
        <a href="${btlink}" class="inline-flex items-center text-xs font-bold text-gray-900 group-hover:text-black transition-colors duration-200 gap-1.5 cursor-pointer">
          <span>Learn More</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-1 group-hover:-translate-y-0.5 text-[#ffc835]">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
          </svg>
        </a>
      </div>

    </div>
  `;
    }

    const services = [{
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
            </svg>`,
            title: "Custom Software Solutions",
            description: "At OakyWeb, we design and develop custom software solutions tailored to your business’s specific needs. Whether you're looking to automate internal processes, manage complex data, or enhance customer engagement, our expert developers deliver scalable, secure, and high-performing applications. Our end-to-end development process ensures seamless integration, intuitive interfaces, and long-term value—empowering your business to grow smarter and faster in an evolving digital world.",
            btlink: "custom-software-solution.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
            </svg>`,
            title: "Mobile App Development",
            description: "We specialize in creating intuitive, robust, and feature-rich mobile applications for Android and iOS platforms. Whether you’re a startup or an enterprise, our mobile solutions are built to enhance user experience, drive engagement, and meet your business goals. From concept to launch, we ensure every app is responsive, visually compelling, and performance-optimized—designed to deliver results and scale with your business.",
            btlink: "mobile-application.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>`,
            title: "Website Development",
            description: "OakyWeb offers comprehensive web development services using modern frameworks and technologies. From sleek corporate websites to powerful web applications, we craft responsive, SEO-friendly platforms that reflect your brand and drive user interaction. With expertise in .net, NextJS, React, Angular, Core PHP, WordPress, Magento, Laravel, and more, we develop secure, high-speed, and fully functional websites that help businesses stand out in the competitive digital landscape.",
            btlink: "web-design-development.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>`,
            title: "E-Commerce Solutions",
            description: "Looking to launch or scale your online store? OakyWeb provides comprehensive e-commerce development services using platforms like Shopify, WooCommerce, and Magento. From intuitive product catalogs to secure payment integrations and streamlined checkout experiences, we create e-commerce websites that deliver smooth, user-friendly shopping and drive sales globally.",
            btlink: "e-commerce-solution.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
            </svg>`,
            title: "UI & UX Design",
            description: "We believe that great design is more than just aesthetics—it’s about creating seamless user experiences. Our UI/UX design services are focused on user behavior, accessibility, and interaction. We design intuitive interfaces and engaging journeys across web and mobile platforms, ensuring your users connect, stay, and convert. Every design is crafted to align with your brand and business objectives while maintaining industry best practices.",
            btlink: "ui-ux-design.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
            </svg>`,
            title: "Digital Marketing",
            description: "We help businesses grow online with result-driven digital marketing strategies. From SEO and content marketing to Google Ads, social media management, and performance analytics — OakyWeb offers end-to-end digital marketing services that boost visibility, generate quality leads, and convert engagement into action. Let us amplify your brand’s digital presence.",
            btlink: "social-media.html"
        },
        {
            iconSvg: `<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
            </svg>`,
            title: "Cloud & DevOps",
            description: "Our Cloud & DevOps services help businesses achieve faster delivery, higher efficiency, and better scalability. We design and manage secure cloud infrastructures tailored to your needs. With automation, CI/CD pipelines, and real-time monitoring, we ensure smooth operations and quick deployments. Our team focuses on optimizing performance while reducing costs. Partner with us to transform your IT into a flexible, future-ready system.",
            btlink: "web-hosting.html"
        },
    ];

    document.getElementById("services-grid").innerHTML =
        services.map(createServiceCard).join("");
</script>