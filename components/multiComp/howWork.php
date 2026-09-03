<?php
function renderWork($rightImage, $Workcards)
{
    echo '
    <section class="contain2 paddingy bg-bgdark marginy pb-0">
        <div class="contain flex h-full">
            <div class="grid grid-cols-1 md:grid-cols-[60%_40%] gap-6 xl:gap-10 text-white w-full">
    ';

    // LEFT SIDE CARDS
    echo '<div class="space-y-10">
    <h2 class="text-56 Abhaya font-extrabold" data-aos="fade-right" data-aos-duration="1600">How We Work</h2>
    ';

    foreach ($Workcards as $card) {
        echo '
            <div class="flex gap-2 -mt-2">
                <!-- <img src="' . $card['img'] . '" alt="' . $card['heading'] . '" class=" object-contain" /> -->
                <div>
                    <h3 class="text-24 font-bold relative after:content-[\'\'] after:block after:w-12 after:-mt-1 after:h-[1px] after:bg-[#ffda31] w-fit">' . $card['heading'] . '</h3>
                    <p class="text-18 2xl:pr-6 mt-1">' . $card['text'] . '</p>
                </div>
            </div>
        ';
    }

    echo '</div>'; // end left column

    // RIGHT SIDE IMAGE
    echo '
        <div class="flex justify-center w-full">
            <img src="' . $rightImage . '" alt="How we work" class="" />
        </div>
    ';

    echo '
            </div>
        </div>
    </section>
    ';
}