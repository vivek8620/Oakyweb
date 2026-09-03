<?php
$heroStats = [
    [
        "number" => "300+",
        "title" => "Successful Projects",
        "subtitle" => "Global Delivery",
        "icon" => "fa-solid fa-laptop-code",
        "highlight" => "#3b82f6"
    ],
    [
        "number" => "9+ Yrs",
        "title" => "Years Experience",
        "subtitle" => "Industry Leadership",
        "icon" => "fa-solid fa-award",
        "highlight" => "#ffc835"
    ],
    [
        "number" => "95%",
        "title" => "Client Retention",
        "subtitle" => "Proven Trust & Scalability",
        "icon" => "fa-solid fa-users-gear",
        "highlight" => "#10b981"
    ],
    [
        "number" => "99.9%",
        "title" => "Quality Score",
        "subtitle" => "Agile Engineering Standards",
        "icon" => "fa-solid fa-shield-halved",
        "highlight" => "#8b5cf6"
    ]
];
?>

<!-- Impact & Experience Statistics Section (Positioned directly below Hero) -->
<section class="relative w-full bg-[#0b1120] py-12 lg:py-16 text-white border-y border-white/10 overflow-hidden" id="experience-stats">
    <!-- Ambient Glow Backgrounds -->
    <div class="absolute -top-24 left-1/4 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 right-1/4 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="contain relative z-10">

        <!-- 4-Column High-Tech Metric Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($heroStats as $index => $stat): ?>
                <div class="group relative bg-[#0f172a]/90 hover:bg-[#131d35] p-6 lg:p-8 rounded-2xl border border-white/10 hover:border-white/20 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-1">
                    
                    <!-- Top Icon & Counter Line Indicator -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-white/5 group-hover:bg-white/10 border border-white/10 flex items-center justify-center text-xl transition-all duration-300" style="color: <?= $stat['highlight'] ?>;">
                            <i class="<?= $stat['icon'] ?>"></i>
                        </div>
                        
                        <!-- Mini Multi-Segment Progress Line -->
                        <div class="flex gap-1 items-center">
                            <span class="w-2.5 h-1 rounded-full bg-[#ffc835]"></span>
                            <span class="w-2.5 h-1 rounded-full bg-[#ffc835]"></span>
                            <span class="w-2.5 h-1 rounded-full <?= $index >= 1 ? 'bg-[#ffc835]' : 'bg-gray-700' ?>"></span>
                            <span class="w-2.5 h-1 rounded-full <?= $index >= 2 ? 'bg-[#ffc835]' : 'bg-gray-700' ?>"></span>
                        </div>
                    </div>

                    <!-- Big Number -->
                    <div class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight group-hover:scale-105 transition-transform duration-300 origin-left">
                        <?= $stat['number'] ?>
                    </div>

                    <!-- Title & Subtitle -->
                    <div class="mt-3">
                        <h4 class="text-sm sm:text-[15px] font-bold uppercase tracking-[2px] text-[#ffc835]">
                            <?= $stat['title'] ?>
                        </h4>
                        <p class="mt-1 text-xs sm:text-[13px] text-gray-400 font-medium">
                            <?= $stat['subtitle'] ?>
                        </p>
                    </div>

                    <!-- Bottom Glow Line -->
                    <div class="absolute bottom-0 left-6 right-6 h-[2px] bg-gradient-to-r from-transparent via-white/20 to-transparent group-hover:via-[#ffc835] transition-all duration-300"></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
