<section class="contain2 paddingy">

    <div class="contain">

        <!-- Heading -->
        <h2 class="text-45 text-start font-extrabold leading-none">
            <span class="font-medium">Our </span>

            <span class="relative inline-block">
                Leadership Team
            </span>
        </h2>

        <!-- Grid Container -->
        <div id="leadersGrid" class="grid grid-cols-2 md:grid-cols-4 gap-y-4 gap-x-3 lg:gap-x-6 mt-10">
            <!-- Cards will be injected here -->
        </div>
    </div>

</section>

<script>
    // ========= 1️⃣ Data for each leader  =========
    const leaders = [{
            img: "assets/homeImages/Pradeep Deshwal.png",
            alti: "Pradeep Deshwal — CEO at oakyweb",
            name: "Pradeep Deshwal",
            position: "Chief Executive Officer",
            linked: "https://www.linkedin.com/in/pradeep-kumar-b9b62a30/",
            desc: "I am a Co-Founder, thrives on innovation and technical excellence in web and.... "
        },
        {
            img: "assets/homeImages/Gunjan Sharma.png",
            alti: "Gunjan Sharma — Director, Branding & Communications at oakyweb",
            name: "Gunjan Sharma",
            position: "Director, Branding & Communications",
            linked: "https://www.linkedin.com/in/gunjan-sharma-4420871b/",
            desc: "In a career spanning 19 years, I have worked as a journalist, health and science, ... "
        },
        {
            img: "assets/homeImages/Ratna Deep Verma.png",
            alti: "Ratna Deep Verma — Chief Technology Officer at oakyweb",
            name: "Ratna Deep Verma",
            position: "Chief Technology Officer",
            linked: "https://www.linkedin.com/in/ratna-deep-verma-6446b33a/",
            desc: "I design structure of applications. Always want to explore things Programming is.... "
        },
        {
            img: "assets/homeImages/Shaukeen Khan.png",
            alti: "Shaukeen Khan — Director, Engineering & Technology at oakyweb",
            name: "Shaukeen Khan",
            position: "Director, Engineering & Technology",
            linked: "https://www.linkedin.com/in/shaukeen-khan-9b048954/",
            desc: "At Oaky Web, we bring over a decade of hands-on experience in delivering high.... "
        }
    ];

    // ========= 2️⃣ Function to generate one leader card =========
    function createLeaderCard({
        img,
        alti,
        name,
        position,
        linked,
        desc
    }) {
        return `
                <a href="${linked}" target="_blank" rel="noopener noreferrer">
                    <div class="flex flex-col items-center  group cursor-pointer ">

                        <div class="overflow-hidden bg-primary rounded-[30px]">
                            <img src="${img}" alt="${alti}" class="w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            />
                        </div>

                        <div class="flex flex-col items-center justify-center mt-2">
                            <h2 class="text-21 font-extrabold after:content-[''] after:block after:h-[2px] after:bg-yellow-400 after:w-0 group-hover:after:w-full after:transition-all after:duration-300 leading-none">
                                ${name}
                            </h2>

                            <h2 class="text-15 mt-1 leading-tight text-center font-medium text-secondary">
                            ${position}
                            </h2>
                        </div>

                    </div>
                </a>
                `;
    }

    // ========= 3️⃣ Render all leader cards =========
    const leadersGrid = document.getElementById("leadersGrid");
    leadersGrid.innerHTML = leaders.map(createLeaderCard).join("");
</script>