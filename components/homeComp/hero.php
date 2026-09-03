<section class="contain2  bg-white paddingy" id="hero">

    <div class="contain">


        <div class="grid md:grid-cols-[1fr_45%] w-full md:gap-8 items-center">

            <!-- Left Side -->
            <div class="flex justify-start lg:items-end">

                <div class="flex flex-col gap-4 justify-start">

                    <h2
                        class="text-manually-hero leading-tight text-secondary font-medium ">
                        Your <span class="font-extrabold">Vision</span>
                    </h2>
                    <h2
                        class="text-manually-hero leading-none font-bold -mt-5">
                        Our Tech <span class="font-extrabold tracking-relaxed"><br/>Solutions</span>
                    </h2>

                    <p class="text-20">
                        Where creativity meets engineering excellence to <br class="hidden sm:block" />turn ideas into global success
                    </p>

                    <!-- Button -->
                    <div class="hidden lg:block flex justify-start ">
                        <a href="contact-us.php">
                            <button
                                class="bg-bgsecondary text-white text-[14px] px-4 py-2 xl:px-6 xl:py-3 flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#ffc835] hover:text-black hover:shadow-lg font-medium">
                                Talk to Us
                                <span class="pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3 xl:w-4 xl:h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </span>
                            </button>
                        </a>
                    </div>

                    <div class="lg:hidden flex justify-start ">
                        <a href="start-project.php">
                            <button class="bg-bgsecondary group text-white text-[12px] px-5 py-3 uppercase font-semibold flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#ffc835] hover:text-black hover:shadow-lg font-medium">
                                Start Project
                                <span class="pl-1 transition-transform duration-300 ease-in-out  arrow-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3 xl:w-4 xl:h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                    </svg>
                                </span>

                            </button>
                        </a>
                    </div>

                    <!-- Icons Row -->
                    <div class="w-full flex flex-nowrap items-center justify-start overflow-x-auto mt-4 md:mt-0">

                        <!-- Icon 1 (Smaller) -->
                        <div class="flex items-center shrink-0">
                            <img src="./assets/homeImages/iso.png" alt="Icon 1" class="w-[40px] lg:w-[50px]" />
                        </div>

                        <!-- Divider -->
                        <div class="h-10 sm:h-10 md:h-12 w-px bg-gray-300 mx-2 lg:mx-6 shrink-0"></div>

                        <!-- Icon 2 (Larger) -->
                        <div class="flex items-center shrink-0">
                            <img src="./assets/homeImages/aws.png" alt="Icon 2" class="h-[30px] lg:h-[40px]" />
                        </div>

                        <!-- Divider -->
                        <div class="h-10 sm:h-10 md:h-12 w-px bg-gray-300 mx-2 lg:mx-6 shrink-0"></div>

                        <!-- Icon 3 - Clutch (Larger) -->
                        <div class="flex items-center justify-center shrink-0 w-[120px] lg:w-[140px] overflow-hidden">
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
            <div class="flex w-full h-full justify-end items-center mt-8 md:mt-0">


                <div class="flex flex-col relative bg-bgsecondary rounded-[30px] shadow-lg shadow-[#0F172A]/40 p-8 xl:p-10 h-fit pb-10 w-full xl:h-full xl:pb-24 md:max-w-[500px]">


                    <section class="w-full overflow-hidden">

                        <?php
                        $heroItems = [
                            ["250+", "Successful Projects", "Global Delivery"],
                            ["8+ Yrs", "Years Experience", "Industry Leadership"],
                            ["95%", "Client Retention", "Proven Trust"],
                        ];
                        ?>

                        <!-- SLIDER WRAPPER -->
                        <div class="relative h-[200px] lg:h-[230px] xl:h-[260px]">

                            <?php foreach ($heroItems as $index => $item): ?>

                                <div class="hero-slide absolute inset-0 flex flex-col items-center justify-center text-white text-center transition-opacity duration-700 
                            <?php echo $index === 0 ? 'opacity-100 active' : 'opacity-0'; ?>" data-index="<?php echo $index; ?>">

                                    <h2 class="text-[80px] lg:text-[100px] xl:text-[130px] font-bold leading-none"><?php echo $item[0]; ?></h2>
                                    <p class="mt-2 text-[15px] xl:text-[16px] text-primary font-bold tracking-[4px] uppercase"><?php echo $item[1]; ?></p>
                                    <p class="mt-2 text-[10px] xl:text-[12px] text-secondary uppercase"><?php echo $item[2]; ?></p>

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
                                <p class="text-secondary uppercase text-[11px] font-bold">
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
        background: #ffc835;
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