<?php
function renderFeature($image, $heading, $Featurecards)
{
    echo '
    <section class="contain2 paddingy bg-[url(' . $image . ')] bg-no-repeat">
        <div class="contain flex flex-col items-start h-full text-white ">

            <h2 class="text-56 Abhaya font-medium leading-none mb-6" 
                data-aos="fade-right" data-aos-duration="1600">
                ' . $heading . '
                </h2>


    ';

    foreach ($Featurecards as $card) {
        echo '
            <div class=" mt-2 ml-4">
                <ul class=" list-disc ">
                    <li>' . $card . '</li>
                </ul>
            </div>
        ';
    }

    echo '
    <!-- </div> -->
        </div>
    </section>
    ';
}
?>