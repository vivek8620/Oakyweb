<section class="relative w-full min-h-[88vh] lg:min-h-[90vh] flex flex-col justify-between overflow-hidden bg-[#070c18] pt-8 sm:pt-12 lg:pt-14 pb-10 sm:pb-12 lg:pb-10" id="hero">

    <!-- Background Video (No Overlay) -->
    <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="assets/appi-home-hero-video/appi-home-hero-video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content Container -->
    <div class="contain relative z-10 h-full flex flex-col justify-between flex-1">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-start h-full flex-1">

            <!-- Left Content Area (Aligned with comfortable vertical spacing) -->
            <div class="lg:col-span-7 flex flex-col justify-start items-start text-left pt-6 sm:pt-10 lg:pt-14 xl:pt-16">
                
                <!-- Hero Text Content (Balanced & Enhanced Size) -->
                <div class="hero-text-content flex flex-col justify-start max-w-[680px] xl:max-w-[780px]">
                    <h1 class="text-[38px] sm:text-[46px] md:text-[52px] lg:text-[58px] xl:text-[62px] font-semibold text-white leading-[1.15] drop-shadow-md">
                        Engineering the <span class="text-[#ffc835]">Next Generation</span> of Digital Systems
                    </h1>

                    <p class="text-[17px] sm:text-[18px] md:text-[19px] lg:text-[20px] leading-[1.65] font-normal sm:font-medium text-white/95 mt-4 sm:mt-5 max-w-[660px] drop-shadow">
                        Oakyweb engineers secure, scalable digital systems by combining robust software architecture, modern web &amp; mobile engineering, and innovative tech capabilities, helping organizations move from strategy to reliable systems in production.
                    </p>

                    <!-- CTA Button -->
                    <div class="mt-7 sm:mt-9 flex justify-start">
                        <a href="contact-us.php">
                            <button
                                class="bg-[#0f172a] text-white text-[15px] px-7 py-3.5 xl:px-8 xl:py-3.5 flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#ffc835] hover:text-black hover:shadow-lg font-medium shadow-md rounded-md">
                                Talk to Us
                                <span class="pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Bottom 3 Dark Translucent Cards (Responsive 3-in-a-row on mobile) -->
            
            <div class="lg:col-span-5 flex flex-col justify-end items-start lg:items-end w-full lg:self-end mt-6 sm:mt-8 lg:mt-auto pt-2 pb-1 sm:pb-0">
                <div class="grid grid-cols-3 sm:flex sm:items-center justify-start lg:justify-end gap-2 sm:gap-3.5 w-full">
                    
                    <!-- Card 1: ISO Certified -->
                    <div class="bg-white/10 hover:bg-white/[0.18] backdrop-blur-md border border-white/15 hover:border-white/30 rounded-xl sm:rounded-[16px] h-[72px] sm:h-[86px] w-full sm:w-[170px] md:w-[185px] flex items-center justify-center p-1.5 sm:p-2.5 shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <img src="./assets/homeImages/iso.png" alt="ISO 9001:2015 Certified" class="h-10 sm:h-14 w-auto max-w-full object-contain bg-white rounded-full p-0.5 shadow-sm" />
                    </div>

                    <!-- Card 2: AWS Partner Network -->
                    <div class="bg-white/10 hover:bg-white/[0.18] backdrop-blur-md border border-white/15 hover:border-white/30 rounded-xl sm:rounded-[16px] h-[72px] sm:h-[86px] w-full sm:w-[170px] md:w-[185px] flex items-center justify-center p-1.5 sm:p-2.5 shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="bg-white rounded-md sm:rounded-lg px-2 py-1 sm:px-3 sm:py-1.5 shadow-sm flex items-center justify-center max-w-[95%] sm:max-w-[90%]">
                            <img src="./assets/homeImages/aws.png" alt="AWS Partner Network" class="h-5 sm:h-8 md:h-8.5 w-auto object-contain" />
                        </div>
                    </div>

                    <!-- Card 3: Clutch Reviews Badge -->
                    <div class="bg-white/10 hover:bg-white/[0.18] backdrop-blur-md border border-white/15 hover:border-white/30 rounded-xl sm:rounded-[16px] h-[72px] sm:h-[86px] w-full sm:w-[170px] md:w-[185px] flex items-center justify-center px-1.5 sm:px-3 py-1.5 sm:py-2 shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center justify-center gap-1.5 sm:gap-3 w-full">
                            <!-- Clutch 'C' Mark -->
                            <svg class="w-6 sm:w-9 h-6 sm:h-9 shrink-0 drop-shadow" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 4C11.1634 4 4 11.1634 4 20C4 28.8366 11.1634 36 20 36C25.074 36 29.5898 33.6429 32.5539 29.9328L26.5414 24.9085C25.0211 26.8122 22.6583 28 20 28C15.5817 28 12 24.4183 12 20C12 15.5817 15.5817 12 20 12C22.6583 12 25.0211 13.1878 26.5414 15.0915L32.5539 10.0672C29.5898 6.35713 25.074 4 20 4Z" fill="#1C303A"/>
                                <circle cx="20" cy="20" r="5.5" fill="#FF3722"/>
                            </svg>
                            <!-- 5 Red Stars & 1 Review -->
                            <div class="flex flex-col items-start justify-center">
                                <div class="flex items-center gap-0.5 text-[#FF3722] text-[9px] sm:text-[14px] leading-none">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="text-[8px] sm:text-[11px] font-bold text-gray-300 uppercase tracking-wider mt-1 sm:mt-1.5 leading-none">1 REVIEW</span>
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