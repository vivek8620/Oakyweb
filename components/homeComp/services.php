<style>
    @keyframes spinSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes reverseSpinSlow {
        from { transform: rotate(360deg); }
        to { transform: rotate(0deg); }
    }

    @keyframes dashFlow {
        0% {
            stroke-dasharray: 120 1200;
            stroke-dashoffset: 1320;
        }
        100% {
            stroke-dasharray: 120 1200;
            stroke-dashoffset: -1320;
        }
    }

    @keyframes dashFlowRev {
        0% {
            stroke-dasharray: 140 1200;
            stroke-dashoffset: -1340;
        }
        100% {
            stroke-dasharray: 140 1200;
            stroke-dashoffset: 1340;
        }
    }

    @keyframes pulseGlow {
        0%, 100% { transform: scale(1); opacity: 0.6; }
        50% { transform: scale(1.6); opacity: 1; }
    }

    .animate-spin-ultra-slow {
        animation: spinSlow 65s linear infinite;
        transform-origin: 50% 50%;
    }

    .animate-reverse-spin-slow {
        animation: reverseSpinSlow 50s linear infinite;
        transform-origin: 50% 50%;
    }

    .animate-dash-flow {
        animation: dashFlow 7s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animate-dash-flow-rev {
        animation: dashFlowRev 9s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .animate-node-pulse {
        animation: pulseGlow 3s ease-in-out infinite;
        transform-origin: center;
    }
</style>

<section class="contain2 marginy" id="our-secvices">
    <div class="contain relative">

        <!-- Outer Dark Container with Rounded Corners -->
        <div class="relative w-full h-full bg-[#0a0d16] rounded-[32px] md:rounded-[40px] overflow-hidden border border-white/10 shadow-2xl">

            <!-- Dynamic Animated Background & Orbital Wireframe Graphics -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Center Radial Glow -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[450px] bg-[#ffc835]/12 blur-[130px] rounded-full"></div>

                <!-- Subtle Tech Grid Lines Overlay -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] opacity-30"></div>

                <!-- Animated Network & Light Pulse Container -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1300px] h-[750px] opacity-40">
                    
                    <!-- Outer Rotating Dashed Ring -->
                    <svg class="absolute inset-0 w-full h-full animate-spin-ultra-slow text-[#ffc835]" viewBox="0 0 1300 750" fill="none">
                        <ellipse cx="650" cy="375" rx="580" ry="320" stroke="currentColor" stroke-width="1" stroke-dasharray="10 15" opacity="0.5" />
                    </svg>

                    <!-- Counter Rotating Ring -->
                    <svg class="absolute inset-0 w-full h-full animate-reverse-spin-slow text-[#ffc835]" viewBox="0 0 1300 750" fill="none">
                        <ellipse cx="650" cy="375" rx="460" ry="240" stroke="currentColor" stroke-width="1.2" stroke-dasharray="6 24" opacity="0.6" />
                        <circle cx="1110" cy="375" r="4" fill="#ffc835" />
                        <circle cx="190" cy="375" r="4" fill="#ffc835" />
                    </svg>

                    <!-- Intersecting Network Lines & Traveling Light Beams -->
                    <svg class="absolute inset-0 w-full h-full text-[#ffc835]" viewBox="0 0 1300 750" fill="none">
                        <defs>
                            <!-- Light beam gradient 1 -->
                            <linearGradient id="beamGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#ffc835" stop-opacity="0" />
                                <stop offset="60%" stop-color="#ffc835" stop-opacity="0.9" />
                                <stop offset="100%" stop-color="#ffffff" stop-opacity="1" />
                            </linearGradient>

                            <!-- Light beam gradient 2 -->
                            <linearGradient id="beamGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#ffffff" stop-opacity="1" />
                                <stop offset="40%" stop-color="#ffc835" stop-opacity="0.9" />
                                <stop offset="100%" stop-color="#ffc835" stop-opacity="0" />
                            </linearGradient>

                            <radialGradient id="glowDot" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#ffffff" />
                                <stop offset="50%" stop-color="#ffc835" />
                                <stop offset="100%" stop-color="#ffc835" stop-opacity="0" />
                            </radialGradient>
                        </defs>

                        <!-- Base mesh paths -->
                        <path d="M 60 375 Q 650 40 1240 375" stroke="currentColor" stroke-width="1" opacity="0.25" />
                        <path d="M 60 375 Q 650 710 1240 375" stroke="currentColor" stroke-width="1" opacity="0.25" />
                        <path d="M 650 40 Q 300 375 650 710" stroke="currentColor" stroke-width="1" opacity="0.2" />
                        <path d="M 650 40 Q 1000 375 650 710" stroke="currentColor" stroke-width="1" opacity="0.2" />

                        <!-- Traveling Light Beams (GIF effect equivalent) -->
                        <path d="M 60 375 Q 650 40 1240 375" stroke="url(#beamGrad1)" stroke-width="2.5" class="animate-dash-flow" />
                        <path d="M 1240 375 Q 650 710 60 375" stroke="url(#beamGrad2)" stroke-width="2.5" class="animate-dash-flow-rev" />

                        <!-- Pulsing Network Nodes -->
                        <g>
                            <circle cx="650" cy="207" r="5" fill="url(#glowDot)" class="animate-node-pulse" />
                            <circle cx="475" cy="375" r="4" fill="url(#glowDot)" class="animate-node-pulse" style="animation-delay: 1s;" />
                            <circle cx="825" cy="375" r="4" fill="url(#glowDot)" class="animate-node-pulse" style="animation-delay: 2s;" />
                            <circle cx="650" cy="542" r="5" fill="url(#glowDot)" class="animate-node-pulse" style="animation-delay: 1.5s;" />
                        </g>
                    </svg>

                </div>
            </div>

            <!-- Content Wrapper -->
            <div class="relative z-10 p-6 sm:p-10 lg:p-14 xl:p-16">

                <!-- Header Section with Pill Badge & Title -->
                <div class="text-white max-w-3xl">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#ffc835]/10 border border-[#ffc835]/30 text-xs font-semibold text-[#ffc835] tracking-widest uppercase mb-5 shadow-[0_0_15px_rgba(255,200,53,0.1)]">
                        <span class="w-2 h-2 rounded-full bg-[#ffc835] animate-pulse"></span>
                        <span>HOW WE DO IT</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl leading-tight font-medium text-white tracking-tight">
                        We craft services that drive <br class="hidden md:inline" />
                        <span class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white via-white to-[#ffc835]">transformational change</span>
                    </h2>
                </div>

                <!-- Grid of Service Cards -->
                <div id="services-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-10 sm:mt-12"></div>

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
    <div class="group relative flex flex-col justify-between bg-[#0e1424]/80 backdrop-blur-md border border-white/10 hover:border-[#ffc835]/50 rounded-[20px] p-5 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_28px_rgba(0,0,0,0.6),0_0_20px_rgba(255,200,53,0.12)]">
      
      <!-- Subtle internal hover glow -->
      <div class="absolute inset-0 rounded-[20px] bg-gradient-to-b from-[#ffc835]/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

      <div class="relative z-10">
        <!-- Icon Container -->
        <div class="w-11 h-11 rounded-xl bg-[#ffc835]/10 border border-[#ffc835]/20 flex items-center justify-center mb-4 group-hover:bg-[#ffc835] group-hover:border-[#ffc835] transition-all duration-300 shadow-[0_0_12px_rgba(255,200,53,0.08)]">
          <img src="${icon}" alt="${title}" class="max-w-[22px] max-h-[22px] group-hover:brightness-0 transition-all duration-300" />
        </div>

        <!-- Title -->
        <h3 class="text-white font-bold text-lg mb-2 tracking-tight group-hover:text-[#ffc835] transition-colors duration-300">
          ${title}
        </h3>

        <!-- Description -->
        <p class="text-sm text-slate-400 line-clamp-3 leading-normal font-normal">
          ${description}
        </p>
      </div>

      <!-- Learn More Link -->
      <div class="relative z-10 pt-4 mt-1">
        <a href="${btlink}" class="inline-flex items-center text-sm font-semibold text-white group-hover:text-[#ffc835] transition-colors duration-300 gap-1.5 cursor-pointer w-fit">
          <span>Learn More</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5">
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