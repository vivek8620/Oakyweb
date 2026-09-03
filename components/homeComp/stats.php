<?php
$heroStats = [
    [
        "target" => 300,
        "prefix" => "",
        "suffix" => "+",
        "decimals" => 0,
        "title" => "Successful Projects",
        "subtitle" => "Global Delivery",
        "icon" => "fa-solid fa-laptop-code",
        "accent" => "from-blue-500/20 to-cyan-500/20",
        "icon_color" => "text-blue-400",
        "highlight_color" => "#38bdf8"
    ],
    [
        "target" => 9,
        "prefix" => "",
        "suffix" => "+ Yrs",
        "decimals" => 0,
        "title" => "Years Experience",
        "subtitle" => "Industry Leadership",
        "icon" => "fa-solid fa-award",
        "accent" => "from-amber-500/20 to-yellow-500/20",
        "icon_color" => "text-[#ffc835]",
        "highlight_color" => "#ffc835"
    ],
    [
        "target" => 95,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 0,
        "title" => "Client Retention",
        "subtitle" => "Proven Trust & Scalability",
        "icon" => "fa-solid fa-users-gear",
        "accent" => "from-emerald-500/20 to-teal-500/20",
        "icon_color" => "text-emerald-400",
        "highlight_color" => "#34d399"
    ],
    [
        "target" => 99.9,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 1,
        "title" => "Quality Score",
        "subtitle" => "Agile Engineering Standards",
        "icon" => "fa-solid fa-shield-halved",
        "accent" => "from-purple-500/20 to-indigo-500/20",
        "icon_color" => "text-purple-400",
        "highlight_color" => "#a78bfa"
    ]
];
?>

<!-- Impact & Experience Statistics Section (With Smooth Count-Up Scroll Animation) -->
<section class="relative w-full bg-[#070c18] py-14 lg:py-20 text-white border-y border-white/10 overflow-hidden" id="experience-stats">
    
    <!-- Ambient Glow Lights -->
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-[500px] h-[500px] bg-[#ffc835]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="contain relative z-10">

        <!-- 4-Column High-Tech Metric Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-7">
            <?php foreach ($heroStats as $index => $stat): ?>
                <div class="stat-card group relative bg-gradient-to-b from-[#111827]/90 via-[#0f172a]/95 to-[#0b1120]/95 hover:from-[#172033] hover:to-[#0f172a] p-7 lg:p-8 rounded-[24px] border border-white/10 hover:border-[#ffc835]/50 transition-all duration-500 shadow-xl hover:shadow-[0_10px_35px_rgba(0,0,0,0.5)] hover:-translate-y-2 backdrop-blur-xl flex flex-col justify-between">
                    
                    <!-- Top Icon & Counter Line Indicator -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-13 h-13 p-3.5 rounded-2xl bg-white/5 group-hover:bg-white/10 border border-white/10 flex items-center justify-center text-xl transition-all duration-300 <?= $stat['icon_color'] ?> shadow-inner group-hover:scale-110">
                            <i class="<?= $stat['icon'] ?>"></i>
                        </div>
                        
                        <!-- Mini Multi-Segment Progress Line -->
                        <div class="stat-lines flex gap-1 items-center">
                            <span class="stat-line-item w-2.5 h-1 rounded-full bg-[#ffc835] transition-all duration-700"></span>
                            <span class="stat-line-item w-2.5 h-1 rounded-full bg-[#ffc835] transition-all duration-700 delay-100"></span>
                            <span class="stat-line-item w-2.5 h-1 rounded-full <?= $index >= 1 ? 'bg-[#ffc835]' : 'bg-white/20' ?> transition-all duration-700 delay-200"></span>
                            <span class="stat-line-item w-2.5 h-1 rounded-full <?= $index >= 2 ? 'bg-[#ffc835]' : 'bg-white/20' ?> transition-all duration-700 delay-300"></span>
                        </div>
                    </div>

                    <!-- Big Animated Counter Number -->
                    <div class="my-2">
                        <div class="text-4xl sm:text-5xl lg:text-[52px] font-black text-white tracking-tight leading-none flex items-baseline">
                            <?php if ($stat['prefix']): ?>
                                <span class="text-3xl text-gray-400 font-bold"><?= $stat['prefix'] ?></span>
                            <?php endif; ?>
                            
                            <!-- The Counter Span -->
                            <span class="stat-counter font-black tracking-tight"
                                  data-target="<?= $stat['target'] ?>"
                                  data-decimals="<?= $stat['decimals'] ?>"
                                  data-suffix="<?= $stat['suffix'] ?>">0<?= $stat['suffix'] ?></span>
                        </div>
                    </div>

                    <!-- Title & Subtitle -->
                    <div class="mt-4 pt-3 border-t border-white/10">
                        <h4 class="text-xs sm:text-[13px] font-bold uppercase tracking-[2px] text-[#ffc835] group-hover:text-white transition-colors duration-300">
                            <?= $stat['title'] ?>
                        </h4>
                        <p class="mt-1 text-xs sm:text-[13px] text-gray-400 font-medium leading-relaxed">
                            <?= $stat['subtitle'] ?>
                        </p>
                    </div>

                    <!-- Ambient Glow Underline -->
                    <div class="absolute bottom-0 left-8 right-8 h-[2px] bg-gradient-to-r from-transparent via-transparent to-transparent group-hover:via-[#ffc835] transition-all duration-500 rounded-full"></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Scroll Triggered Counter Animation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const statsSection = document.getElementById("experience-stats");
    const counters = document.querySelectorAll(".stat-counter");
    let animated = false;

    function animateCount(el) {
        const target = parseFloat(el.getAttribute("data-target"));
        const decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
        const suffix = el.getAttribute("data-suffix") || "";
        const duration = 2000; // 2 seconds
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // EaseOutExpo curve for super smooth natural feel
            const easeOutProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const currentVal = (easeOutProgress * target);

            if (decimals > 0) {
                el.textContent = currentVal.toFixed(decimals) + suffix;
            } else {
                el.textContent = Math.floor(currentVal) + suffix;
            }

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                if (decimals > 0) {
                    el.textContent = target.toFixed(decimals) + suffix;
                } else {
                    el.textContent = target + suffix;
                }
            }
        }

        requestAnimationFrame(update);
    }

    if (statsSection && counters.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animated) {
                    animated = true;
                    counters.forEach(counter => {
                        animateCount(counter);
                    });
                }
            });
        }, {
            threshold: 0.25,
            rootMargin: "0px 0px -50px 0px"
        });

        observer.observe(statsSection);
    }
});
</script>
