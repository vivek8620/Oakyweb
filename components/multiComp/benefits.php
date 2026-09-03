<?php
function renderBenefits($heading, $text,  $Benefitscards)
{
    echo '
    <section class="contain2 marginy ">
        <div class="contain flex h-full">

    ';

    echo '<div class="">
    <h2 class="text-56 Abhaya font-medium leading-none" data-aos="fade-right" data-aos-duration="1600">Benefits of <span class="font-extrabold"> ' . $heading . '</span></h2>
    <p class="text-18 mt-4">' . $text . '</p>
    

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mt-10">';
    foreach ($Benefitscards as $card) {
        echo '
            <div class="flex flex-col p-5 lg:py-12 2xl:pb-20   ' . $card['bgcolor'] . '">
                    <h3 class="text-60  leading-tight font-medium">' . $card['num'] . '</h3>
                    <h3 class="text-40 Abhaya leading-tight font-extrabold">' . $card['heading'] . '</h3>
                    <p class="text-18 leading-relaxed mt-4 2xl:pr-6">' . $card['text'] . '</p>
            </div>
        ';
    }


    echo '</div>
    </div>'; // end left column


    echo '

        </div>
    </section>
    ';
}
