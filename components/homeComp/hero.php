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
                
                <!-- Main Headings (Exact Reference Spacing & Line-Breaks with Brand Gradient) -->
                <div class="flex flex-col justify-start">
                    <h2 class="text-manually-hero leading-tight font-medium drop-shadow-md">
                        <span class="bg-gradient-to-r from-white via-white to-slate-200 bg-clip-text text-transparent">Your</span> 
                        <span class="font-extrabold bg-gradient-to-r from-[#ffe57f] via-[#ffc835] to-[#f59e0b] bg-clip-text text-transparent drop-shadow-lg">Vision</span>
                    </h2>
                    <h2 class="text-manually-hero leading-none font-bold -mt-2 sm:-mt-4 md:-mt-5 drop-shadow-md">
                        <span class="bg-gradient-to-r from-white via-slate-100 to-slate-200 bg-clip-text text-transparent">Our Tech</span> 
                        <span class="font-extrabold tracking-relaxed bg-gradient-to-r from-white via-gray-100 to-slate-300 bg-clip-text text-transparent"><br/>Solutions</span>
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

                    <!-- Card 3: Clutch Reviews Badge (Fixed No Clipping) -->
                    <div class="bg-[#121620]/85 hover:bg-[#181e2c]/95 backdrop-blur-md border border-white/15 hover:border-white/30 rounded-2xl h-24 sm:h-28 w-44 sm:w-52 md:w-56 flex items-center justify-center px-3 sm:px-4 py-2 shadow-2xl transition-all duration-300 hover:-translate-y-1 shrink-0">
                        <div class="flex items-center justify-center w-full">
                            <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
                            <div class="clutch-widget"
                                data-url="https://widget.clutch.co"
                                data-widget-type="1"
                                data-height="48"
                                data-nofollow="false"
                                data-expandifr="true"
                                data-clutchcompany-id="2586525">
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>