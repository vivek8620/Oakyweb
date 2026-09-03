<section class="contain2 bg-[#f6f6f6] paddingy" id="Portfolio">
  <div class="contain">
    <!-- Heading -->
    <h2 class="text-45 text-start font-extrabold leading-none">
      <span class="font-medium">Our </span>

      <span class="relative inline-block">
        Finest Work
      </span>
    </h2>

    <p class="text-18 text-start mt-2">
      Championing user experience design across industries, geographies, & demographics
    </p>

    <!-- Work Items Grid -->
    <div id="portfolioGrid"
      class="grid grid-cols-2 md:grid-cols-4  gap-y-4 gap-x-3 lg:gap-x-6 mt-10">
      <!-- Cards will be injected here -->
    </div>
  </div>
</section>

<script>
  // ========= 1️⃣ Data for Portfolio Cards (unaltered text) =========
  const portfolioItems = [{
      img: "assets/homeImages/1click.png",
      title: "1Click",
      alt: "1Click mobile app for insurance policy management and tracking",
      lnk: "#",
      desc: "1Click Mobile App makes policy management simple, smart, and accessible anytime. It allows users to view, track, and renew all their insurance policies in one place. With instant alerts, secure storage, and easy navigation, managing policies becomes effortless. The app ensures transparency and helps users stay informed about their coverage. 1Click is your one-stop mobile solution for complete policy control and peace of mind.",
    },
    {
      img: "assets/homeImages/credai.png",
      title: "Credai",
      alt: "CREDAI creative corporate event management and planning platform",
      lnk: "https://credai.org/",
      desc: "Creadai is a creative event management company that blends innovation with flawless execution. We plan, design, and manage events that leave lasting impressions. Our team focuses on every detail to ensure smooth coordination and stunning results. From corporate events to grand celebrations, we bring ideas to life with style. With Creadai, every event becomes a perfect mix of creativity and excellence.",
    },
    {
      img: "assets/homeImages/hrbabu.png",
      title: "HR BABU",
      alt: "HR BABU employee management and HR automation system ",
      lnk: "#",
      desc: "HR Bahu is a smart mobile app designed to simplify employee management for modern businesses. It helps HR teams handle attendance, payroll, leave, and performance in one easy platform. With real-time updates and automation, it reduces manual work and saves valuable time. Employees can access their records, apply for leave, and track attendance anytime. HR Bahu makes managing people simple, transparent, and efficient.",
    },
    {
      img: "assets/homeImages/Cytometry.png",
      title: "Cytometry",
      alt: "Cytometry professional conference and scientific event management system",
      lnk: "https://tcs.res.in/",
      desc: "We specialize in organizing and managing professional conferences with precision and creativity. Our team ensures smooth coordination, from planning and logistics to execution and post-event support. We create engaging environments that inspire learning, networking, and collaboration. With advanced technology and expert management, we deliver flawless experiences. Trust us to make your conference impactful, efficient, and unforgettable.",
    },
  ];

  // ========= 2️⃣ Function to Create Each Work Card =========
  function createWorkCard({
    img,
    title,
    lnk,
    alt,
    desc
  }) {
    return `
    <a href="${lnk}" target="_blank" rel="noopener noreferrer">
      <div class="group flex flex-col items-center h-fit">

        <div class=" overflow-hidden rounded-[30px]">
          <img src="${img}" alt="${alt}" class="w-full object-cover grayscale transition-all duration-[700ms] ease-in-out group-hover:grayscale-0 group-hover:scale-[1.07]" />
        </div>

        <h2 class="text-21 uppercase font-bold after:content-[''] after:block after:h-[2px] after:bg-yellow-400 after:w-0 group-hover:after:w-full after:transition-all after:duration-300 leading-none w-fit mt-2 lg:mt-3">
              ${title}
        </h2>

        <!--  <p class="text-16 font-thin line-clamp-2 lg:mt-2">${desc}</p>  -->
        
        </div>

    </a>
  `;
  }


  // ========= 3️⃣ Render All Work Cards =========
  const portfolioGrid = document.getElementById("portfolioGrid");
  portfolioGrid.innerHTML = portfolioItems.map(createWorkCard).join("");
</script>