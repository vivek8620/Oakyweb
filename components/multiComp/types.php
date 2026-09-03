<?php
function renderType($rightImage, $heading, $text, $Workcards)
{
    echo '
    <section class="contain2 marginy paddingy pb-0">
        <div class="contain flex flex-col items-start h-full">
        <h2 class="text-56 Abhaya font-medium leading-none" data-aos="fade-right" data-aos-duration="1600"> ' . $heading . '</h2>
        <p class="text-18 mt-4 2xl:mt-5">' . $text . '</p>

            <div class="grid grid-cols-1 md:grid-cols-[60%_40%] gap-6 xl:gap-10 mt-6 2xl:mt-10 w-full">
    ';

    // LEFT SIDE CARDS
    echo '<div class="space-y-6 flex flex-col justify-center">
    ';

    foreach ($Workcards as $card) {
        echo '
            <div class="flex gap-6 ">
               <!-- <img src="' . $card['img'] . '" alt="' . $card['heading'] . '" class=" object-contain" /> -->
                <div>
                    <h3 class="text-24 font-bold">' . $card['heading'] . '</h3>
                    <p class="text-18 2xl:pr-6 text-[#555555]">' . $card['text'] . '</p>
                </div>
            </div>
        ';
    }

    echo '</div>'; // end left column

    // RIGHT SIDE IMAGE
    echo '
        <div class="flex justify-center items-center 2xl:justify-end">
            <img src="' . $rightImage . '" alt="How we work" class=" " />
        </div>
    ';

    echo '
            </div>
        </div>
    </section>
    ';
}