<section class="contain2 paddingy" id="our-leader">
    <div class="contain">
        <!-- Heading -->
        <h2
            class="text-56 font-bold mb-2 lg:mb-[36px] lg:mt-[36px] flex flex-wrap justify-center md:justify-start Abhaya font-extrabold" data-aos="fade-right" data-aos-duration="1600">
            <span class="font-medium pr-2">Life at</span> OakyWeb
        </h2>

        <!-- Swiper -->
        <div class="relative mt-8">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper" id="lifeCardsWrapper">
                    <!-- Cards will be injected here -->
                </div>
            </div>
        </div>

    </div>
</section>


<script>
    // ========= 1️⃣ Card Data =========
    const lifeCards = [{
            img: "assets/life_at/Rectangle 3892.png",
            title: "Studio Vibes",
            desc: "Design, disruption, & lots of happy yellow vibes. Day in & day out.",
        },
        {
            img: "assets/life_at/Rectangle 3892 (1).png",
            title: "Design Days",
            desc: "Where design superheroes assemble to showcase their best work.",
        },
        {
            img: "assets/life_at/Rectangle 3892 (2).png",
            title: "Upskilling Workshops",
            desc: "In a constant state of unlearning & learning, & sharing these with the design community.",
        },
        {
            img: "assets/life_at/Rectangle 3892 (3).png",
            title: "Offsite Meets",
            desc: "Team activities & organization-wide learning + fun sessions",
        },
        {
            img: "assets/life_at/Rectangle 3892 (4).png",
            title: "Learning for Community",
            desc: "Sharing experiences, insights, & learnings with the Design community",
        },
        {
            img: "assets/life_at/Rectangle 3892 (5).png",
            title: "Awards & Accolades",
            desc: "Recognition of great work every year, celebration of expertise & passion",
        },
    ];

    // ========= 2️⃣ Create Card =========
    function createCard({
        img,
        title,
        desc
    }) {
        return `
      <div class="swiper-slide flex flex-col items-start ">

      <div class=" overflow-hidden">
        <img src="${img}" alt="${title}"
          class="w-full object-cover transition-transform duration-300 hover:scale-105" />
          </div>

        <h2 class="text-35 Abhaya font-extrabold mt-4 leading-none">${title}</h2>
        <p class="text-18 mt-4 xl:pr-4">${desc}</p>
      </div>`;
    }

    // ========= 3️⃣ Render Cards THEN Init Swiper =========
    const wrapper = document.getElementById("lifeCardsWrapper");
    wrapper.innerHTML = lifeCards.map(createCard).join("");

    // initialize AFTER rendering
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false, // keep looping after interaction
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
            1280: {
                slidesPerView: 3
            },
            1680: {
                slidesPerView: 4
            },
        },
    });
</script>