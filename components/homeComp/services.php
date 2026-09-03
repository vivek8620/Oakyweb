<style>
    @keyframes hudSpinClockwise {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes hudSpinCounter {
        from { transform: rotate(360deg); }
        to { transform: rotate(0deg); }
    }

    @keyframes laserPulseFlow {
        0% {
            stroke-dasharray: 100 1000;
            stroke-dashoffset: 1100;
        }
        100% {
            stroke-dasharray: 100 1000;
            stroke-dashoffset: -1100;
        }
    }

    @keyframes laserPulseRev {
        0% {
            stroke-dasharray: 120 1000;
            stroke-dashoffset: -1120;
        }
        100% {
            stroke-dasharray: 120 1000;
            stroke-dashoffset: 1120;
        }
    }

    @keyframes rippleExpand {
        0% { r: 4px; opacity: 0.9; stroke-width: 2px; }
        100% { r: 24px; opacity: 0; stroke-width: 0.5px; }
    }

    .animate-hud-clockwise {
        animation: hudSpinClockwise 50s linear infinite;
        transform-origin: 400px 250px;
    }

    .animate-hud-counter {
        animation: hudSpinCounter 35s linear infinite;
        transform-origin: 400px 250px;
    }

    .animate-laser-beam {
        animation: laserPulseFlow 6s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    }

    .animate-laser-beam-rev {
        animation: laserPulseRev 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    }

    .animate-ripple {
        animation: rippleExpand 3s ease-out infinite;
    }
</style>

<section class="contain2 marginy" id="our-secvices">
    <div class="contain relative">

        <!-- Outer Dark Container with Rounded Corners -->
        <div class="relative w-full h-full bg-[#0a0d16] rounded-[32px] md:rounded-[40px] overflow-hidden border border-white/10 shadow-2xl">

            <!-- Cyber IT Tech Animated Background Layer -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Center Radial Glow -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[400px] bg-[#ffc835]/14 blur-[120px] rounded-full"></div>

                <!-- Subtle Tech Grid Lines Overlay -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] opacity-35"></div>

                <!-- Centered Cyber Tech HUD & Neural Network graphic -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] sm:w-[900px] lg:w-[960px] h-[500px] opacity-85 pointer-events-none flex items-center justify-center">
                    
                    <svg class="w-full h-full text-[#ffc835]" viewBox="0 0 800 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <!-- Light beam gradient 1 -->
                            <linearGradient id="cyberGrad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#ffc835" stop-opacity="0" />
                                <stop offset="50%" stop-color="#ffc835" stop-opacity="1" />
                                <stop offset="100%" stop-color="#ffffff" stop-opacity="1" />
                            </linearGradient>

                            <linearGradient id="cyberGrad2" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#ffffff" stop-opacity="1" />
                                <stop offset="50%" stop-color="#ffc835" stop-opacity="1" />
                                <stop offset="100%" stop-color="#ffc835" stop-opacity="0" />
                            </linearGradient>

                            <radialGradient id="cyberGlowDot" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#ffffff" />
                                <stop offset="40%" stop-color="#ffc835" />
                                <stop offset="100%" stop-color="#ffc835" stop-opacity="0" />
                            </radialGradient>
                        </defs>

                        <!-- Outer Rotating Tech Compass / Ring -->
                        <g class="animate-hud-clockwise" opacity="0.6">
                            <circle cx="400" cy="250" r="210" stroke="currentColor" stroke-width="1" stroke-dasharray="8 12" />
                            <circle cx="400" cy="250" r="230" stroke="currentColor" stroke-width="0.75" stroke-dasharray="3 24" />
                            <!-- Tick marks -->
                            <line x1="400" y1="30" x2="400" y2="45" stroke="currentColor" stroke-width="2" />
                            <line x1="400" y1="455" x2="400" y2="470" stroke="currentColor" stroke-width="2" />
                            <line x1="180" y1="250" x2="195" y2="250" stroke="currentColor" stroke-width="2" />
                            <line x1="605" y1="250" x2="620" y2="250" stroke="currentColor" stroke-width="2" />
                        </g>

                        <!-- Counter Rotating Inner Tech HUD Ring -->
                        <g class="animate-hud-counter" opacity="0.7">
                            <circle cx="400" cy="250" r="160" stroke="currentColor" stroke-width="1.2" stroke-dasharray="40 10 5 10" />
                            <circle cx="400" cy="250" r="140" stroke="currentColor" stroke-width="0.8" stroke-dasharray="2 10" />
                            <!-- Crosshair ticks -->
                            <circle cx="560" cy="250" r="4" fill="#ffc835" />
                            <circle cx="240" cy="250" r="4" fill="#ffc835" />
                            <circle cx="400" cy="90" r="4" fill="#ffc835" />
                            <circle cx="400" cy="410" r="4" fill="#ffc835" />
                        </g>

                        <!-- IT Data Waves & Curved Circuit Highways -->
                        <path d="M 50 250 Q 400 40 750 250" stroke="currentColor" stroke-width="1" opacity="0.3" />
                        <path d="M 50 250 Q 400 460 750 250" stroke="currentColor" stroke-width="1" opacity="0.3" />
                        <path d="M 120 250 C 250 100, 550 400, 680 250" stroke="currentColor" stroke-width="1" opacity="0.25" />

                        <!-- Traveling High-Speed Laser Packets -->
                        <path d="M 50 250 Q 400 40 750 250" stroke="url(#cyberGrad1)" stroke-width="3" class="animate-laser-beam" />
                        <path d="M 750 250 Q 400 460 50 250" stroke="url(#cyberGrad2)" stroke-width="3" class="animate-laser-beam-rev" />
                        <path d="M 120 250 C 250 100, 550 400, 680 250" stroke="url(#cyberGrad1)" stroke-width="2.5" class="animate-laser-beam" style="animation-duration: 9s;" />

                        <!-- Central Quantum Core with Pulse Ripples -->
                        <circle cx="400" cy="250" r="8" fill="url(#cyberGlowDot)" />
                        <circle cx="400" cy="250" r="16" stroke="#ffc835" fill="none" class="animate-ripple" />
                        <circle cx="400" cy="250" r="16" stroke="#ffc835" fill="none" class="animate-ripple" style="animation-delay: 1.5s;" />

                        <!-- Intersecting Data Nodes -->
                        <g>
                            <circle cx="280" cy="135" r="4.5" fill="url(#cyberGlowDot)" />
                            <circle cx="520" cy="135" r="4.5" fill="url(#cyberGlowDot)" />
                            <circle cx="280" cy="365" r="4.5" fill="url(#cyberGlowDot)" />
                            <circle cx="520" cy="365" r="4.5" fill="url(#cyberGlowDot)" />
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
                        <span class="font-extrabold text-[#ffc835]">transformational change</span>
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
    <div class="group relative flex flex-col justify-between bg-[#070b16]/40 hover:bg-[#070b16]/65 backdrop-blur-md border border-white/10 hover:border-[#ffc835]/50 rounded-[20px] p-5 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_28px_rgba(0,0,0,0.6),0_0_20px_rgba(255,200,53,0.12)]">
      
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