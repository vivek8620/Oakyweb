<?php
$allClientLogos = [
    ["src" => "assets/client_logo/AIIMS1.png", "alt" => "AIIMS"],
    ["src" => "assets/client_logo/IGL.png", "alt" => "IGL"],
    ["src" => "assets/client_logo/ICAI.png", "alt" => "ICAI"],
    ["src" => "assets/client_logo/DCM.png", "alt" => "DCM Shriram"],
    ["src" => "assets/client_logo/AIIMSR.png", "alt" => "AIIMS Rishikesh"],

    ["src" => "assets/client_logo/VP.png", "alt" => "Vigyan Prasar"],
    ["src" => "assets/client_logo/ICAR.png", "alt" => "ICAR"],
    ["src" => "assets/client_logo/SIGMA.png", "alt" => "SIGMA"],
    ["src" => "assets/client_logo/WSAR.png", "alt" => "WSAR"],
    ["src" => "assets/client_logo/PPAP.png", "alt" => "PPAP"],

    ["src" => "assets/client_logo/USIEF.png", "alt" => "USIEF"],
    ["src" => "assets/client_logo/ONCQUEST.png", "alt" => "Oncquest"],
    ["src" => "assets/client_logo/SRM.png", "alt" => "SRM"],
    ["src" => "assets/client_logo/PWC.png", "alt" => "PwC"],
    ["src" => "assets/client_logo/TAJ.png", "alt" => "Taj Hotels"],

    ["src" => "assets/client_logo/EVEKARE.png", "alt" => "EveKare"],
    ["src" => "assets/client_logo/MGRM.png", "alt" => "MGRM"],
    ["src" => "assets/client_logo/TCG.png", "alt" => "TCG Global"],
    ["src" => "assets/client_logo/URC.png", "alt" => "URC"],
    ["src" => "assets/client_logo/ELCON.png", "alt" => "Elcon"],
];
?>

<!-- Client Logos Section - Appinventiv Dark Section with High-Contrast Crisp Cards -->
<section class="relative w-full bg-[#000000] py-16 sm:py-20 lg:py-24 text-white border-t border-white/10 overflow-hidden" id="clients-section">
    
    <!-- Background Ambient Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-blue-600/10 rounded-full blur-[140px] pointer-events-none"></div>

    <div class="contain relative z-10">

        <!-- Heading -->
        <div class="text-center max-w-4xl mx-auto mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-extrabold text-white tracking-tight">
                Trusted By Clients <span class="text-[#ffc835]">Worldwide</span>
            </h2>
            <div class="w-20 h-1 bg-[#ffc835] mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- High-Visibility Responsive Grid Showing All 20 Logos (Significantly Bigger) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5 sm:gap-7 lg:gap-8 items-center justify-items-center w-full">
            <?php foreach ($allClientLogos as $logo): ?>
                <div class="client-grid-card group flex items-center justify-center w-full bg-white rounded-2xl p-2 sm:p-3 h-28 sm:h-32 md:h-36 shadow-2xl hover:shadow-[0_15px_40px_rgba(255,200,53,0.3)] border border-white/30 hover:border-[#ffc835] transition-all duration-300 hover:-translate-y-2 hover:scale-[1.04] overflow-hidden">
                    <img src="<?= $logo['src'] ?>" 
                         alt="<?= $logo['alt'] ?>" 
                         class="h-full w-full object-contain scale-[1.35] sm:scale-[1.45] md:scale-[1.55] transition-transform duration-300 group-hover:scale-[1.65]" />
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>