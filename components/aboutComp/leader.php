<section class="contain2 paddingy bg-[#F6F6F6]">
    <div class="contain">

        <!-- Heading -->
        <h2
            class="text-56 font-extrabold mb-2 flex flex-wrap justify-center md:justify-start Abhaya font-extrabold " data-aos="fade-right" data-aos-duration="1600">
            <span class="font-medium">Our&nbsp;</span> Leadership Team
        </h2>



        <!-- Grid Container -->
        <div id="leadersGrid" class="grid grid-cols-2 md:grid-cols-4 gap-y-3 gap-x-2 mt-10">
            <!-- Cards will be injected here -->
        </div>
    </div>
</section>

<script>
    // ========= 1️⃣ Data for each leader  =========
    const leaders = [{
            img: "assets/leaders/prd.png",
            alti: "Pradeep Deshwal — CEO at oakyweb",
            name: "Pradeep Deshwal",
            position: "Chief Executive Officer",
            desc: "I am a Co-Founder, thrives on innovation and technical excellence in web and.... "
        },
        {
            img: "assets/leaders/gjn.png",
            alti: "Gunjan Sharma — Director, Branding & Communications at oakyweb",
            name: "Gunjan Sharma",
            position: "Director, Branding & Communications",
            desc: "In a career spanning 19 years, I have worked as a journalist, health and science, ... "
        },
        {
            img: "assets/leaders/rtn.png",
            alti: "Ratna Deep Verma — Chief Technology Officer at oakyweb",
            name: "Ratna Deep Verma",
            position: "Chief Technology Officer",
            desc: "I design structure of applications. Always want to explore things Programming is.... "
        },
        {
            img: "assets/leaders/skn.png",
            alti: "Shaukeen Khan — Director, Engineering & Technology at oakyweb",
            name: "Shaukeen Khan",
            position: "Director, Engineering & Technology",
            desc: "At Oaky Web, we bring over a decade of hands-on experience in delivering high.... "
        }
    ];

    // ========= 2️⃣ Function to generate one leader card =========
    function createLeaderCard({
        img,
        alti,
        name,
        position,
        desc
    }) {
        return `
<div class="flex flex-col items-start px-[9px] mb-6 ">

<div class=" overflow-hidden">
<img src="${img}" alt="${alti}"
  class="w-full object-cover transition-transform duration-300 hover:scale-105" />
  </div>

<h2 class="text-[16px] leading-none lg:text-[20px] font-extrabold mt-2 after:content-[''] after:block after:h-[2px] after:bg-yellow-400 after:w-0 hover:after:w-full after:transition-all after:duration-300 cursor-pointer mt-4">
  ${name}
</h2>
<h2 class="text-[14px] mt-1 leading-tight lg:text-[17px] font-medium text-[#98A2B3]">${position}</h2>

</div>
`;
    }

    // ========= 3️⃣ Render all leader cards =========
    const leadersGrid = document.getElementById("leadersGrid");
    leadersGrid.innerHTML = leaders.map(createLeaderCard).join("");
</script>