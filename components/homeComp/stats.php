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
        "badge_bg" => "bg-blue-50 text-blue-600 border-blue-100",
        "color_class" => "text-blue-600"
    ],
    [
        "target" => 9,
        "prefix" => "",
        "suffix" => "+ Yrs",
        "decimals" => 0,
        "title" => "Years Experience",
        "subtitle" => "Industry Leadership",
        "icon" => "fa-solid fa-award",
        "badge_bg" => "bg-amber-50 text-amber-600 border-amber-100",
        "color_class" => "text-amber-600"
    ],
    [
        "target" => 95,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 0,
        "title" => "Client Retention",
        "subtitle" => "Proven Trust & Scalability",
        "icon" => "fa-solid fa-user-check",
        "badge_bg" => "bg-emerald-50 text-emerald-600 border-emerald-100",
        "color_class" => "text-emerald-600"
    ],
    [
        "target" => 99.9,
        "prefix" => "",
        "suffix" => "%",
        "decimals" => 1,
        "title" => "Quality Score",
        "subtitle" => "Agile Engineering Standards",
        "icon" => "fa-solid fa-shield-halved",
        "badge_bg" => "bg-purple-50 text-purple-600 border-purple-100",
        "color_class" => "text-purple-600"
    ]
];
?>

<!-- Clean Statistics Section without Dark Section Background -->
<section class="relative w-full bg-[#FBFBFC] py-10 lg:py-12" id="experience-stats">
    <div class="contain relative z-10">

        <!-- 4-Column Stats Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
            <?php foreach ($heroStats as $index => $stat): ?>
                <div class="stat-card group bg-white p-6 lg:p-7 rounded-[22px] border border-[#E5E7EB] hover:border-[#ffc835] transition-all duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1.5 flex flex-col justify-between">
                    
                    <!-- Icon Badge -->
                    <div class="mb-4">
                        <div class="w-12 h-12 rounded-xl <?= $stat['badge_bg'] ?> border flex items-center justify-center text-lg transition-transform duration-300 group-hover:scale-110 shadow-sm">
                            <i class="<?= $stat['icon'] ?>"></i>
                        </div>
                    </div>

                    <!-- Counter Number -->
                    <div class="my-1">
                        <div class="text-4xl sm:text-5xl font-black text-[#111827] tracking-tight leading-none group-hover:text-black transition-colors">
                            <span class="stat-counter font-black tracking-tight"
                                  data-target="<?= $stat['target'] ?>"
                                  data-decimals="<?= $stat['decimals'] ?>"
                                  data-suffix="<?= $stat['suffix'] ?>">0<?= $stat['suffix'] ?></span>
                        </div>
                    </div>

                    <!-- Title & Subtitle with Divider -->
                    <div class="mt-4 pt-3.5 border-t border-gray-100">
                        <h4 class="text-xs sm:text-[13px] font-bold uppercase tracking-wider text-[#111827] group-hover:text-amber-600 transition-colors">
                            <?= $stat['title'] ?>
                        </h4>
                        <p class="mt-1 text-xs sm:text-[13px] text-gray-500 font-medium leading-relaxed">
                            <?= $stat['subtitle'] ?>
                        </p>
                    </div>
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
