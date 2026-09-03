<?php
function renderBanner($bgImage, $bgImagelg, $pageTitle, $pageTitle2, $text = "",)
{
    echo '
    <section class="contain2 pt-10 md:pt-6 2xl:pt-0" >
           
        <div class="contain flex h-full ">

            <!-- Left Content -->
            <div class="grid grid-cols-1 sm:grid-cols-[1fr_48%] gap-6 2xl:gap-8">

                <!-- Title Block -->
                <div class="flex flex-col justify-end">
                    <h2 class="text-92 font-medium leading-none" data-aos="fade-right" data-aos-duration="1600">' . $pageTitle . '</h2>  

                    <h2 class="text-92 font-extrabold Abhaya leading-none" data-aos="fade-left" data-aos-duration="1600"> 
                    ' . $pageTitle2 . ' 
                    </h2>   ';

    if (!empty($text)) {
        echo '<p class=" text-24 mt-5 leading-relaxed 2xl:pr-6">' . $text . '</p>';
    }



    echo '
                </div>

                <div class="flex justify-center md:justify-end">
                    <img src=" ' . $bgImage . ' " alt="custom website" class=" md:hidden" />
                    <img src=" ' . $bgImagelg . ' " alt="custom website" class=" 2xl:aspect-[594/409] hidden md:block" />
                </div>

                </div>

   
        </div>
        
    </section>';
}
