<?php
$heroStats = [
    [
        "target" => 300,
        "prefix" => "",
        "suffix" => "+",
        "decimals" => 0,
        "title" => "Successful Projects",
        "subtitle" => "Global Delivery",
        "icon" => "fa-solid fa-code-branch",
        "glow" => "rgba(59, 130, 246, 0.25)",
        "badge_bg" => "bg-blue-500/10 border-blue-500/30 text-blue-400",
        "color_class" => "text-blue-400"
    ],
    [
        "target" => 9,
        "prefix" => "",
        "suffix" => "+ Yrs",
        "decimals" => 0,
        "title" => "Years Experience",
        "subtitle" => "Industry Leadership",
        "icon" => "fa-solid fa-award",
        "glow" => "rgba(255, 200, 53, 0.25)",
        "badge_bg" => "bg-amber-500/10 border-amber-500/30 text-[#ffc835]",
        "color_class" => "text-[#ffc835]"
    ],
    [
        "target" => 95,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 0,
        "title" => "Client Retention",
        "subtitle" => "Proven Trust & Scalability",
        "icon" => "fa-solid fa-user-check",
        "glow" => "rgba(16, 185, 129, 0.25)",
        "badge_bg" => "bg-emerald-500/10 border-emerald-500/30 text-emerald-400",
        "color_class" => "text-emerald-400"
    ],
    [
        "target" => 99.9,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 1,
        "title" => "Quality Score",
        "subtitle" => "Agile Engineering Standards",
        "icon" => "fa-solid fa-shield-halved",
        "glow" => "rgba(168, 85, 247, 0.25)",
        "badge_bg" => "bg-purple-500/10 border-purple-500/30 text-purple-400",
        "color_class" => "text-purple-400"
    ]
];
?>

<!-- Premium Impact & Experience Statistics Section -->
<section class="relative w-full bg-gradient-to-b from-[#070c18] via-[#0c1324] to-[#070c18] py-12 lg:py-16 text-white border-y border-white/10 overflow-hidden" id="experience-stats">
    
    <!-- Background Ambient Lights -->
    <div class="absolute top-0 left-1/3 w-[500px] h-48 bg-[#1a73e8]/15 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/3 w-[500px] h-48 bg-[#ffc835]/10 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="contain relative z-10">

        <!-- 4-Column High-Tech Metric Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
            <?php foreach ($heroStats as $index => $stat): ?>
                <div class="stat-card group relative bg-gradient-to-br from-white/[0.08] via-white/[0.03] to-white/[0.01] hover:from-white/[0.12] hover:via-white/[0.05] hover:to-white/[0.02] p-6 lg:p-7 rounded-[22px] border border-white/15 hover:border-[#ffc835]/60 transition-all duration-500 shadow-2xl hover:shadow-[0_15px_35px_rgba(0,0,0,0.6)] hover:-translate-y-2 backdrop-blur-xl flex flex-col justify-between overflow-hidden">
                    
                    <!-- Subtle Glow on Hover -->
                    <div class="absolute -top-16 -right-16 w-32 h-32 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="background-color: <?= $stat['glow'] ?>;"></div>

                    <!-- Top Row: Icon Badge & Multi-Segment Progress -->
                    <div class="flex items-center justify-between mb-5 relative z-10">
                        <div class="w-12 h-12 rounded-xl <?= $stat['badge_bg'] ?> border flex items-center justify-center text-lg transition-transform duration-300 group-hover:scale-110 shadow-sm">
                            <i class="<?= $stat['icon'] ?>"></i>
                        </div>
                        
                        <!-- Mini Multi-Segment Progress Lines -->
                        <div class="flex gap-1.5 items-center bg-black/30 px-2.5 py-1.5 rounded-full border border-white/5">
                            <span class="w-2.5 h-1 rounded-full bg-[#ffc835]"></span>
                            <span class="w-2.5 h-1 rounded-full bg-[#ffc835]"></span>
                            <span class="w-2.5 h-1 rounded-full <?= $index >= 1 ? 'bg-[#ffc835]' : 'bg-gray-700' ?>"></span>
                            <span class="w-2.5 h-1 rounded-full <?= $index >= 2 ? 'bg-[#ffc835]' : 'bg-gray-700' ?>"></span>
                        </div>
                    </div>

                    <!-- Big Counter Number -->
                    <div class="my-2 relative z-10">
                        <div class="text-4xl sm:text-5xl lg:text-[54px] font-black text-white tracking-tight leading-none flex items-baseline group-hover:text-[#ffc835] transition-colors duration-300">
                            <!-- The Counter Span -->
                            <span class="stat-counter font-black tracking-tight"
                                  data-target="<?= $stat['target'] ?>"
                                  data-decimals="<?= $stat['decimals'] ?>"
                                  data-suffix="<?= $stat['suffix'] ?>">0<?= $stat['suffix'] ?></span>
                        </div>
                    </div>

                    <!-- Title & Subtitle with Sleek Divider -->
                    <div class="mt-4 pt-3.5 border-t border-white/10 relative z-10">
                        <h4 class="text-xs sm:text-[13px] font-extrabold uppercase tracking-[2px] text-[#ffc835]">
                            <?= $stat['title'] ?>
                        </h4>
                        <p class="mt-1 text-xs sm:text-[13px] text-gray-300 font-medium leading-relaxed">
                            <?= $stat['subtitle'] ?>
                        </p>
                    </div>

                    <!-- Bottom Accent Hover Border Glow -->
                    <div class="absolute bottom-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-[#ffc835] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Smooth Live Count-Up Animation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const statsSection = document.getElementById("experience-stats");
    const counters = document.querySelectorAll(".stat-counter");
    let animated = false;

    function animateCount(el) {
        const target = parseFloat(el.getAttribute("data-target"));
        const decimals = parseInt(el.getAttribute("data-decimals") || "0", 10);
        const suffix = el.getAttribute("data-suffix") || "";
        const duration = 2000;
        const startTime = performance.now();

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Ultra-smooth EaseOutExpo curve
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
            threshold: 0.2,
            rootMargin: "0px 0px -40px 0px"
        });

        observer.observe(statsSection);
    }
});
</script>
