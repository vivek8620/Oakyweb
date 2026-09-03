<?php
function renderClientLogos($arr)
{
    foreach ($arr as $img) {
        echo '
            <div class="logo-item flex w-full h-full">
                <img src="' . $img['src'] . '" alt="' . $img['alt'] . '" class="marq-logo" />
            </div>';
    }
}
?>



<?php
$images = [
    ["src" => "assets/client_logo/AIIMS1.png", "alt" => "brand logo of AIIMS"],
    ["src" => "assets/client_logo/IGL.png", "alt" => "brand logo of IGL"],
    ["src" => "assets/client_logo/ICAI.png", "alt" => "brand logo of ICAI"],
    ["src" => "assets/client_logo/DCM.png", "alt" => "brand logo of DCM"],
    ["src" => "assets/client_logo/AIIMSR.png", "alt" => "brand logo of AIIMSR"],

    ["src" => "assets/client_logo/VP.png", "alt" => "brand logo of VP"],
    ["src" => "assets/client_logo/ICAR.png", "alt" => "brand logo of ICAR"],
    ["src" => "assets/client_logo/SIGMA.png", "alt" => "brand logo of SIGMA"],
    ["src" => "assets/client_logo/WSAR.png", "alt" => "brand logo of WSAR"],
    ["src" => "assets/client_logo/PPAP.png", "alt" => "brand logo of PPAP"],

    ["src" => "assets/client_logo/USIEF.png", "alt" => "brand logo of USIEF"],
    ["src" => "assets/client_logo/ONCQUEST.png", "alt" => "brand logo of Oncquest"],
    ["src" => "assets/client_logo/SRM.png", "alt" => "brand logo of SRM"],
    ["src" => "assets/client_logo/PWC.png", "alt" => "brand logo of PWC"],
    ["src" => "assets/client_logo/TAJ.png", "alt" => "brand logo of Taj"],

    ["src" => "assets/client_logo/EVEKARE.png", "alt" => "brand logo of EveKare"],
    ["src" => "assets/client_logo/MGRM.png", "alt" => "brand logo of MGRM"],
    ["src" => "assets/client_logo/TCG.png", "alt" => "brand logo of TCG Global"],
    ["src" => "assets/client_logo/URC.png", "alt" => "brand logo of URC"],
    ["src" => "assets/client_logo/ELCON.png", "alt" => "brand logo of Elcon"],
];
?>



<section class="contain2 paddingy mt-6 bg-[#FAFAFA]">
    <div class="contain">

        <h2 class="text-2xl md:text-3xl xl:text-[56px] font-bold mb-2 flex flex-wrap justify-center md:justify-start Abhaya font-extrabold ">
            <span class="font-medium">Collaborations&nbsp;</span> & Partnerships
        </h2>

        <p class="text-[16px] lg:text-[17px] xl:text-[18px] text-[#313039] mt-6 mb-12">
            We deliver high-performance software solutions tailored to diverse industries—from automotive and telecom to engineering, food, healthcare, and environmental sectors. Some of our reputed clients include Fortune 500 companies, multinational organisations, and industry leaders who rely on us for mission-critical software solutions.
        </p>



        <div class="grid grid-cols-2 w-full md:hidden ">
            <div class="flex w-full h-full">
                <img src="assets/client_logo/USIEF.png" alt="brand logo of USIEF" class="" />
            </div>
            <div class="flex w-full h-full">
                <img src="assets/client_logo/ELCON.png" alt="brand logo of Elcon" class="" />
            </div>
            <div class="flex w-full h-full">
                <img src="assets/client_logo/SIGMA.png" alt="brand logo of SIGMA" class="marq-logo" />
            </div>
            <div class="flex w-full h-full">
                <img src="assets/client_logo/PWC.png" alt="brand logo of PWC" class="marq-logo" />
            </div>
            <div class="flex w-full h-full">
                <img src="assets/client_logo/ONCQUEST.png" alt="brand logo of UNCQUEST" class="marq-logo" />
            </div>
            <div class="flex w-full h-full">
                <img src="assets/client_logo/AIIMS1.png" alt="brand logo of AIIMS" class="marq-logo" />
            </div>
        </div>


        <div class="overflow-hidden w-full hidden md:block">
            <div class="marquee">
                <div class="marquee-group ">
                    <?php renderClientLogos($images); ?>
                </div>

                <!-- duplicate for smooth infinite loop -->
                <div class="marquee-group" aria-hidden="true">
                    <?php renderClientLogos($images); ?>
                </div>
            </div>
        </div>

    </div>
</section>







<style>
    .marquee {
        display: flex;
        width: max-content;
        animation: scroll 70s linear infinite;
        gap: 0rem;
    }

    .marquee-group {
        display: flex;
        align-items: center;
        gap: 0rem;
    }

    .logo-item {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .marq-logo {
        width: 238px;
        height: auto;
        object-fit: contain;
        filter: drop-shadow(0 2px 2px rgba(0, 0, 0, 0.1));
    }

    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* responsive tweaks */
    @media (max-width: 768px) {
        .marq-logo {
            width: 238px;
            height: auto;
        }

        .marquee {
            animation-duration: 50s;
        }
    }
</style>