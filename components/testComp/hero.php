<section class="contain2  bg-white pb-16"
    id="hero">

    <div class="contain">


        <div class="grid md:grid-cols-2 xl:grid-cols-2 w-full md:gap-12 items-center xl:mt-6">

            <!-- Left Side -->
            <div class="flex justify-center sm:justify-start lg:items-end pt-12 xl:pt-0">

                <div class="flex flex-col gap-4 text-center sm:text-left justify-end">

                    <h2
                        class="define-text-manually-hero leading-tight Abhaya font-medium">
                        Your <span class="font-extrabold">Vision</span>
                    </h2>
                    <h2
                        class="define-text-manually-hero leading-tight Abhaya font-medium -mt-5">
                        Our <span class="font-extrabold">Tech Solutions</span>
                    </h2>

                    <p class="text-18 font-thin md:pr-12">
                        Where creativity meets engineering excellence to turn ideas into global success
                    </p>

                    <!-- Button -->
                    <div class="mt-4 flex justify-center sm:justify-start ">
                        <a href="contact-us.php">
                            <button
                                class="bg-[#0f0d0d] text-white text-[18px] lg:text-[20px] px-6 py-3 xl:px-8 hover:bg-gray-800 transition flex items-center justify-center hover:shadow-lg">
                                Talk to Us
                                <span class="pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </span>
                            </button>
                        </a>

                    </div>

                    <!-- Icons Row -->
                    <div class="flex flex-nowrap items-center justify-center sm:justify-start mt-6 mb-6 overflow-x-auto">

                        <!-- Icon 1 (Smaller) -->
                        <div class="flex items-center shrink-0">
                            <img src="./assets/iso3.png" alt="Icon 1" class="w-[32px] sm:w-[50px]" />
                        </div>

                        <!-- Divider -->
                        <div class="h-8 sm:h-10 md:h-12 w-px bg-gray-300 mx-2 sm:mx-6 shrink-0"></div>

                        <!-- Icon 2 (Larger) -->
                        <div class="flex items-center shrink-0">
                            <img src="./assets/aws3.png" alt="Icon 2" class="h-[28px] sm:h-[40px]" />
                        </div>

                        <!-- Divider -->
                        <div class="h-8 sm:h-10 md:h-12 w-px bg-gray-300 mx-2 sm:mx-6 shrink-0"></div>



                        <!-- Icon 3 - Clutch (Larger) -->
                        <div class="flex items-center justify-center shrink-0 w-[110px] sm:w-[140px] h-[40px] sm:h-[60px] overflow-hidden">
                            <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
                            <div class="clutch-widget overflow-hidden"
                                data-url="https://widget.clutch.co"
                                data-widget-type="1"
                                data-height="40"
                                data-nofollow="false"
                                data-expandifr="false"
                                data-clutchcompany-id="2586525">
                            </div>
                        </div>



                    </div>

                </div>
            </div>



            <!-- Right Side -->
            <div class="flex w-full h-full justify-end items-center">


                <div class="flex flex-col relative bg-[#0F172A] shadow-lg shadow-[#0F172A]/40 p-8 xl:p-10 h-fit pb-10 w-full xl:h-full xl:pb-24 md:max-w-[500px]">


                    <section class="w-full overflow-hidden">

                        <?php
                        $heroItems = [
                            ["250+", "Successful Projects", "Global Delivery"],
                            ["8+ Yrs", "Years Experience", "Industry Leadership"],
                            ["95%", "Client Retention", "Proven Trust"],
                        ];
                        ?>

                        <!-- SLIDER WRAPPER -->
                        <div class="relative h-[200px]">

                            <?php foreach ($heroItems as $index => $item): ?>

                                <div class="hero-slide absolute inset-0 flex flex-col items-center justify-center text-white text-center transition-opacity duration-700 
                            <?php echo $index === 0 ? 'opacity-100 active' : 'opacity-0'; ?>" data-index="<?php echo $index; ?>">

                                    <h2 class="text-[80px] lg:text-[90px] 2xl:text-[110px] font-bold leading-none"><?php echo $item[0]; ?></h2>
                                    <p class="mt-2 text-[15px] text-[#FBBF24] font-bold tracking-[4px] uppercase"><?php echo $item[1]; ?></p>
                                    <p class="mt-2 text-sm uppercase"><?php echo $item[2]; ?></p>

                                </div>

                            <?php endforeach; ?>
                        </div>

                    </section>


                    <div class="w-full flex justify-between items-center border-t-[1px] border-gray-500 pt-4 lg:pt-8 pb-10 xl:pb-0">

                        <div class="w-full flex justify-between items-end">
                            <p class="slider-counter-lines">
                                <span class="counter-line"></span>
                                <span class="counter-line"></span>
                                <span class="counter-line"></span>
                                <span class="counter-line"></span>
                                <span class="counter-line"></span>
                                <span class="counter-line"></span>
                            </p>

                            <div class="flex flex-col items-end ">
                                <p class="text-[#64747B] uppercase text-[11px] font-bold">
                                    Quality Score
                                </p>
                                <p class="text-white uppercase text-[12px] font-bold">
                                    99.9%
                                </p>
                            </div>

                        </div>

                    </div>



                   
                    <!-- 3 LINE PAGINATION -->
                    <div class="absolute bottom-8 xl:bottom-12 left-1/2 -translate-x-1/2 flex gap-2">
                        <?php foreach ($heroItems as $index => $item): ?>
                            <span
                                class="hero-line-3"
                                data-index="<?php echo $index; ?>">
                            </span>
                        <?php endforeach; ?>
                    </div>





                </div>

            </div>

        </div>

    </div>
</section>





<script>
    const slides = document.querySelectorAll(".hero-slide");
    const dots = document.querySelectorAll(".hero-dot");

    let current = 0;
    const total = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
            slide.style.opacity = i === index ? "1" : "0";
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });

        current = index;
    }

    // Auto fade
    setInterval(() => {
        showSlide((current + 1) % total);
    }, 3000);

    // Pagination click
    dots.forEach(dot => {
        dot.addEventListener("click", () => {
            showSlide(Number(dot.dataset.index));
        });
    });

    // Init
    showSlide(0);
</script>


<script>
    (function() {
        const lines3 = document.querySelectorAll(".hero-line-3");
        if (!lines3.length) return;

        function update3LinePagination(index) {
            lines3.forEach((line, i) => {
                line.classList.toggle("active", i === index);
            });
        }

        // hook safely
        const originalShowSlide = window.showSlide;
        window.showSlide = function(index) {
            originalShowSlide(index);
            update3LinePagination(index);
        };

        // click support
        lines3.forEach(line => {
            line.addEventListener("click", () => {
                showSlide(Number(line.dataset.index));
            });
        });

        update3LinePagination(0);
    })();
</script>




<style>
    .hero-line-3 {
        width: 8px;
        height: 3px;
        background: #334155;
        border-radius: 999px;
        transition: background-color 0.3s ease, width 0.3s ease;
        cursor: pointer;
    }

    .hero-line-3.active {
        background: #ffffff;
        width: 28px;
    }





    .slider-counter-lines {
        display: flex;
        gap: 6px;
        align-items: center;
    }

    .counter-line {
        width: 20px;
        height: 5px;
        background: #1E293B;
        border-radius: 999px;
        transition: background-color 0.4s ease;
    }

    .counter-line.filled {
        background: #FBBF24;
    }
</style>



<script>
    const counterLines = document.querySelectorAll(".counter-line");

    const BASE_FILLED = 2; // first 2 lines always filled
    const MAX_PROGRESS = 3; // number of animated steps (3 → lines 3,4,5)

    function updateCounterLines(index) {
        const progress = index % MAX_PROGRESS;

        counterLines.forEach((line, i) => {
            if (i < BASE_FILLED) {
                // always filled
                line.classList.add("filled");
            } else if (i < BASE_FILLED + progress + 1) {
                // progressive fill
                line.classList.add("filled");
            } else {
                line.classList.remove("filled");
            }
        });
    }

    // Hook into existing slider safely
    const originalShowSlide = showSlide;
    window.showSlide = function(index) {
        originalShowSlide(index);
        updateCounterLines(index);
    };

    updateCounterLines(0);
</script>