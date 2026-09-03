<?php
function renderTechnologies($heading, $text, $Techcards)
{
    echo '
    <section class="contain2 paddingy bg-bglight">
        <div class="contain flex flex-col items-start h-full">
            <h2 class="text-56 Abhaya font-medium leading-none" data-aos="fade-right" data-aos-duration="1600"> ' . $heading . '</h2>
            <p class="text-18 mt-4">' . $text . '</p>

            <div class="grid grid-cols-2 sm:grid-cols-4 sm:grid-cols-6 xl:grid-cols-7 gap-3 w-full justify-center mt-8 2xl:flex 2xl:flex-wrap 2xl:justify-start">
    ';

    foreach ($Techcards as $card) {
        echo '
            <div class="flex items-center justify-center border bg-white py-2 rounded-md 2xl:px-10">
                <h3 class="text-18 ">' . $card . '</h3>
            </div>
        ';
    }

    echo '
            </div>
        </div>
    </section>
    ';
}