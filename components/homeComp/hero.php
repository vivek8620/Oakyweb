<section class="relative w-full min-h-[88vh] lg:min-h-[90vh] flex flex-col justify-between overflow-hidden bg-[#070c18] pt-8 sm:pt-12 lg:pt-14 pb-8 sm:pb-12" id="hero">

    <!-- Background Video (No Overlay) -->
    <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="assets/appi-home-hero-video/appi-home-hero-video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content Container -->
    <div class="contain relative z-10 w-full h-full flex flex-col justify-between flex-1">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-start h-full flex-1">

            <!-- Left Content Area (Aligned to Top) -->
            <div class="lg:col-span-7 flex flex-col justify-start items-start text-left pt-2 sm:pt-4">
                
                <!-- Main Headings (Exact Reference Spacing & Line-Breaks) -->
                <div class="flex flex-col justify-start">
                    <h2 class="text-manually-hero leading-tight text-white font-medium drop-shadow-md">
                        Your <span class="font-extrabold text-[#ffc835]">Vision</span>
                    </h2>
                    <h2 class="text-manually-hero leading-none font-bold -mt-2 sm:-mt-4 md:-mt-5 text-white drop-shadow-md">
                        Our Tech <span class="font-extrabold tracking-relaxed"><br/>Solutions</span>
                    </h2>

                    <p class="text-20 mt-4 sm:mt-5 text-gray-200/95 max-w-xl font-normal leading-relaxed drop-shadow">
                        Where creativity meets engineering excellence to <br class="hidden sm:block" />turn ideas into global success
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="mt-6 sm:mt-8 flex justify-start">
                    <a href="contact-us.php">
                        <button
                            class="bg-[#0f172a] text-white text-[14px] px-6 py-3.5 xl:px-7 xl:py-3.5 flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#ffc835] hover:text-black hover:shadow-lg font-medium shadow-md">
                            Talk to Us
                            <span class="pl-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-3.5 h-3.5 xl:w-4 xl:h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>

            </div>

            <!-- Right Bottom 3 Dark Translucent Cards (Self-End Alignment) -->
            <div class="lg:col-span-5 flex flex-col justify-end items-start lg:items-end w-full lg:self-end mt-8 lg:mt-auto pt-4">
                
                <div class="flex items-center justify-start lg:justify-end gap-3.5 sm:gap-4 w-full flex-wrap sm:flex-nowrap">
                    
                    <!-- Card 1: ISO Certified -->
                    <div class="bg-[#121620]/85 hover:bg-[#181e2c]/95 backdrop-blur-md border border-white/15 hover:border-white/30 rounded-2xl h-24 sm:h-28 w-36 sm:w-44 md:w-48 flex items-center justify-center p-3 shadow-2xl transition-all duration-300 hover:-translate-y-1 shrink-0">
                        <img src="./assets/homeImages/iso.png" alt="ISO 9001:2015 Certified" class="h-16 sm:h-20 w-auto max-w-full object-contain bg-white rounded-full p-0.5 shadow-md" />
                    </div>

                    <!-- Card 2: AWS Partner Network -->
                    <div class="bg-[#121620]/85 hover:bg-[#181e2c]/95 backdrop-blur-md border border-white/15 hover:border-white/30 rounded-2xl h-24 sm:h-28 w-36 sm:w-44 md:w-48 flex items-center justify-center p-3 shadow-2xl transition-all duration-300 hover:-translate-y-1 shrink-0">
                        <div class="bg-white rounded-xl px-3 py-1.5 shadow-md flex items-center justify-center max-w-[90%]">
                            <img src="./assets/homeImages/aws.png" alt="AWS Partner Network" class="h-9 sm:h-11 md:h-12 w-auto object-contain" />
                        </div>
                    </div>

                    <!-- Card 3: Clutch Reviews Badge (Perfect Dead Center) -->
                    <div class="bg-[#121620]/85 hover:bg-[#181e2c]/95 backdrop-blur-md border border-white/15 hover:border-white/30 rounded-2xl h-24 sm:h-28 w-36 sm:w-44 md:w-48 flex items-center justify-center p-3 shadow-2xl transition-all duration-300 hover:-translate-y-1 shrink-0">
                        <div class="flex items-center justify-center gap-2 sm:gap-3 w-full">
                            <!-- Clutch 'C' Mark -->
                            <svg class="w-8 sm:w-10 h-8 sm:h-10 shrink-0" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 4C11.1634 4 4 11.1634 4 20C4 28.8366 11.1634 36 20 36C25.074 36 29.5898 33.6429 32.5539 29.9328L26.5414 24.9085C25.0211 26.8122 22.6583 28 20 28C15.5817 28 12 24.4183 12 20C12 15.5817 15.5817 12 20 12C22.6583 12 25.0211 13.1878 26.5414 15.0915L32.5539 10.0672C29.5898 6.35713 25.074 4 20 4Z" fill="#1C303A"/>
                                <circle cx="20" cy="20" r="5.5" fill="#FF3722"/>
                            </svg>
                            <!-- 5 Red Stars & 1 Review -->
                            <div class="flex flex-col items-start justify-center">
                                <div class="flex items-center gap-0.5 text-[#FF3722] text-xs sm:text-[14px] leading-none">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-[10px] sm:text-[11px] font-bold text-gray-400 uppercase tracking-wider mt-1 leading-none">1 REVIEW</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<style>
    .clutch-center-wrap,
    .clutch-center-wrap .clutch-widget,
    .clutch-center-wrap .clutch-widget iframe {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        margin: 0 auto !important;
        text-align: center !important;
    }
</style>