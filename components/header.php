<?php
$page = basename($_SERVER['PHP_SELF']);
include 'components/meta.php';

?>

<nav id="site-header" class="contain2 sticky top-0 z-50 transition-all duration-500 ease-in-out">

  <div id="header-inner" class="contain pt-3 pb-2 transition-all ease-in-out duration-500">

    <div class="flex justify-between items-center">

      <!-- Logo -->
      <div class="">
        <a href="./">
          <img id="header-logo" src="./assets/logo.png" alt="OkayWeb" class="w-[110px] lg:w-[130px] xl:w-[150px] transition-all ease-in-out duration-500" />
        </a>
      </div>


      <!-- Desktop Menu -->
      <div class="hidden lg:flex items-center gap-[50px] text-secondary font-medium text-[13px] xl:[text-17px]">
        <a href="./"
          class="relative link-underline tracking-[2px] <?php echo ($page === 'index.php') ? 'text-black' : ''; ?>">
          Home
        </a>
        <a href="about-us.html"
          class="relative link-underline tracking-[2px] <?php echo ($page === 'about-us.php') ? 'text-black' : ''; ?>">
          About Us
        </a>


        <!-- services -->
        <div class="relative group inline-block">

          <a class="flex items-center gap-1 cursor-pointer">

            <span class="relative link-underline tracking-[2px]">Services</span>

            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
              fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
            </svg>
          </a>

          <!-- DROPDOWN -->
          <div class="absolute -left-10 w-[210px] bg-white shadow-xl rounded-lg p-2 hidden group-hover:block z-50 dropdown-anim tracking-wide">

            <a href="custom-software-solution.html" style="animation-delay: .05s;"
              class="dropdown-item block px-3 py-2 rounded 
              <?php echo ($page === 'custom-software-solution.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Custom Software Solutions</span>
            </a>

            <a href="mobile-application.html" style="animation-delay: .10s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'mobile-application.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Mobile App Development</span>
            </a>

            <a href="web-design-development.html" style="animation-delay: .15s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'web-design-development.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Website Development</span>
            </a>

            <a href="e-commerce-solution.html" style="animation-delay: .20s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'e-commerce-solution.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">E-Commerce Solutions</span>
            </a>

            <a href="ui-ux-design.html" style="animation-delay: .25s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'ui-ux-design.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">UI & UX Design</span>
            </a>

            <a href="social-media.html" style="animation-delay: .30s;"
              class="dropdown-item block px-3 py-2  rounded
              <?php echo ($page === 'social-media.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Digital Marketing</span>
            </a>

            <a href="web-hosting.html" style="animation-delay: .35s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'web-hosting.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Cloud & DevOps</span>
            </a>
            <a href="oee-dashboard.html" style="animation-delay: .35s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'oee-dashboard.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">OEE Dashboard</span>
            </a>
          </div>
        </div>

        <a href="index.php#Portfolio"
          class=" relative link-underline tracking-[2px] <?php echo ($page === 'portofolio.php' || $page === 'portfolio.php') ? 'text-black' : ''; ?>">
          Portfolio
        </a>

        <!-- Industries -->
        <div class="relative group inline-block">

          <a class="flex items-center gap-1 cursor-pointer">

            <span class="relative link-underline tracking-[2px] <?php echo in_array($page, ['healthcare.php', 'industry-social-media.php', 'media-entertainment.php', 'finance.php', 'e-commerce-industry.php', 'event-management.php', 'insurance.php', 'saas.php', 'real-estate.php', 'travel.php', 'education.php']) ? 'text-black font-bold' : ''; ?>">Industries</span>

            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
              fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
            </svg>
          </a>

          <!-- DROPDOWN -->
          <div class="absolute -left-6 w-[220px] bg-white shadow-xl rounded-lg p-2 hidden group-hover:block z-50 dropdown-anim tracking-wide">

            <a href="healthcare.html" style="animation-delay: .05s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'healthcare.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Healthcare</span>
            </a>

            <a href="industry-social-media.html" style="animation-delay: .10s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'industry-social-media.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Social Media</span>
            </a>

            <a href="media-entertainment.html" style="animation-delay: .15s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'media-entertainment.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Media Entertainment</span>
            </a>

            <a href="finance.html" style="animation-delay: .20s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'finance.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Finance</span>
            </a>

            <a href="e-commerce-industry.html" style="animation-delay: .25s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'e-commerce-industry.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">E-Commerce</span>
            </a>

            <a href="event-management.html" style="animation-delay: .30s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'event-management.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Event Management</span>
            </a>

            <a href="insurance.html" style="animation-delay: .35s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'insurance.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Insurance</span>
            </a>

            <a href="saas.html" style="animation-delay: .40s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'saas.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Saas</span>
            </a>

            <a href="real-estate.html" style="animation-delay: .45s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'real-estate.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Real Estate</span>
            </a>

            <a href="travel.html" style="animation-delay: .50s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'travel.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Travel</span>
            </a>

            <a href="education.html" style="animation-delay: .55s;"
              class="dropdown-item block px-3 py-2 rounded <?php echo ($page === 'education.php') ? 'text-black font-bold' : ''; ?>">
              <span class="relative link-underline">Education</span>
            </a>

          </div>
        </div>

        <!-- Case Studies -->
        <a href="case-studies.html"
          class="relative link-underline tracking-[2px] <?php echo ($page === 'case-studies.php') ? 'text-black font-bold' : ''; ?>">
          Case Studies
        </a>

        <a href="contact-us.html"
          class="relative link-underline tracking-[2px] <?php echo ($page === 'contact-us.php') ? 'text-black' : ''; ?>">
          Contact Us
        </a>
      </div>


      <!-- Button -->
      <div class="hidden lg:block flex justify-center sm:justify-start ">
        <a href="start-project.php">
          <button class="bg-bgsecondary group text-white text-[12px] px-4 py-2 xl:px-6 xl:py-3 uppercase font-semibold flex items-center justify-center transition-all duration-300 ease-in-out hover:bg-[#ffc835] hover:text-black hover:shadow-lg">
            Start Project
            <span class="pl-1 transition-transform duration-300 ease-in-out group-hover:translate-x-1 group-hover:-translate-y-1 group-hover:scale-[1.08]  arrow-hover">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-3 h-3 xl:w-4 xl:h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
              </svg>
            </span>

          </button>
        </a>
      </div>


      <!-- Hamburger Menu -->
      <div class="lg:hidden flex pr-1">
        <button id="menu-btn" class="group flex flex-col gap-[6px] focus:outline-none">
          <span class="block w-8 h-[2px] bg-bgdark"></span>
          <span class="block w-6 h-[2px] bg-bgdark"></span>
          <span class="block w-4 h-[2px] bg-bgdark"></span>
        </button>
      </div>


    </div>

  </div>


  <!-- Mobile Menu -->
  <div id="mobile-menu"
    class="fixed top-0 left-0 w-full h-screen bg-[#222222] transform -translate-y-full transition-transform duration-300 ease-in-out z-50 flex flex-col lg:hidden">

    <!-- TOP BAR -->
    <div class="flex justify-between items-center px-4 py-6 ">
      <a href="./">
        <img src="assets/icons/logo.svg" alt="MyLogo" class="w-[110px] h-[44px]" />
      </a>

      <button id="mobile-menu-close" class="text-white">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- SCROLLABLE CONTENT -->
    <div class="flex-1 overflow-y-auto flex flex-col text-28 font-medium px-4 py-6 text-white">

      <!-- About -->
      <a href="about-us.html" class="block py-4 nav-link relative">About</a>

      <!-- SERVICES DROPDOWN -->
      <div class="w-full">
        <button id="mobileServicesBtn"
          class="flex items-center gap-2 py-4 w-full text-left nav-link">
          <span>Services</span>
          <img id="mobileArrow"
            src="assets/icons/down-white.svg"
            class="h-4 w-4 ml-2 transition-transform duration-300" />
        </button>

        <div id="mobileServicesMenu" class="hidden pl-6 pb-2 space-y-2 text-22">
          <a href="custom-software-solution.html" class="block py-2 hover:underline">Custom Software Solutions</a>
          <a href="mobile-application.html" class="block py-2 hover:underline">Mobile App Development</a>
          <a href="web-design-development.html" class="block py-2 hover:underline">Website Development</a>
          <a href="e-commerce-solution.html" class="block py-2 hover:underline">E-Commerce Solutions</a>
          <a href="ui-ux-design.html" class="block py-2 hover:underline">UI & UX Design</a>
          <a href="social-media.html" class="block py-2 hover:underline">Digital Marketing</a>
          <a href="web-hosting.html" class="block py-2 hover:underline">Cloud & DevOps</a>
          <a href="oee-dashboard.html" class="block py-2 hover:underline">OEE Dashboard</a>
        </div>
      </div>

      <a href="index.php#Portfolio" class="block py-4 nav-link relative">Portfolio</a>

      <!-- INDUSTRIES DROPDOWN MOBILE -->
      <div class="w-full">
        <button id="mobileIndustriesBtn"
          class="flex items-center gap-2 py-4 w-full text-left nav-link">
          <span>Industries</span>
          <img id="mobileIndustriesArrow"
            src="assets/icons/down-white.svg"
            class="h-4 w-4 ml-2 transition-transform duration-300" />
        </button>

        <div id="mobileIndustriesMenu" class="hidden pl-6 pb-2 space-y-2 text-22">
          <a href="healthcare.html" class="block py-2 hover:underline">Healthcare</a>
          <a href="industry-social-media.html" class="block py-2 hover:underline">Social Media</a>
          <a href="media-entertainment.html" class="block py-2 hover:underline">Media Entertainment</a>
          <a href="finance.html" class="block py-2 hover:underline">Finance</a>
          <a href="e-commerce-industry.html" class="block py-2 hover:underline">E-Commerce</a>
          <a href="event-management.html" class="block py-2 hover:underline">Event Management</a>
          <a href="insurance.html" class="block py-2 hover:underline">Insurance</a>
          <a href="saas.html" class="block py-2 hover:underline">Saas</a>
          <a href="real-estate.html" class="block py-2 hover:underline">Real Estate</a>
          <a href="travel.html" class="block py-2 hover:underline">Travel</a>
          <a href="education.html" class="block py-2 hover:underline">Education</a>
        </div>
      </div>

      <a href="case-studies.html" class="block py-4 nav-link relative">Case Studies</a>
      <a href="contact-us.html" class="block py-4 nav-link relative">Contact</a>
    </div>

    <!-- STICKY BOTTOM ICONS -->
    <div class="px-6 py-4 flex gap-6 items-center mb-20">

      <div class="flex items-center border border-white rounded-full">
        <a href="https://www.linkedin.com/company/oakyweb/">
          <img src="assets/icons/linkedin.svg" class="h-8 w-8 ">
        </a>
      </div>
      <div class="flex items-center border border-white rounded-full">
        <a href="https://www.facebook.com/OakyWeb/">
          <img src="assets/icons/fb-sicon.svg" class="h-8 w-8 ">
        </a>
      </div>
      <div class="flex items-center border border-white rounded-full">
        <a href="https://twitter.com/oakyweb">
          <img src="assets/icons/x-sicon.svg" class="h-8 w-8">
        </a>
      </div>
      <div class="flex items-center border border-white rounded-full">
        <a href="https://www.instagram.com/oaky_web/">
          <img src="assets/icons/insta-sicon.svg" class="h-8 w-8">
        </a>
      </div>

    </div>

  </div>


</nav>



<script>
  const menu = document.getElementById("mobile-menu");
  const menuBtn = document.getElementById("menu-btn");
  const closeBtn = document.getElementById("mobile-menu-close");

  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("-translate-y-full");

    if (!menu.classList.contains("-translate-y-full")) {
      document.body.classList.add("overflow-hidden"); // disable scroll
    } else {
      document.body.classList.remove("overflow-hidden"); // enable scroll
    }
  });

  closeBtn.addEventListener("click", () => {
    menu.classList.add("-translate-y-full");
    document.body.classList.remove("overflow-hidden");
  });


  tailwind.config = {
    theme: {
      extend: {
        screens: {
          'lg-mid': '1100px',
          '3xl': '1748px',
        },
      },
    },
  }
</script>



<script>
  document.addEventListener("DOMContentLoaded", () => {

    const btn = document.getElementById("mobileServicesBtn");
    const menu = document.getElementById("mobileServicesMenu");
    const arrow = document.getElementById("mobileArrow");

    if (btn && menu && arrow) {
      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        arrow.classList.toggle("rotate-180");
      });
    }

    const indBtn = document.getElementById("mobileIndustriesBtn");
    const indMenu = document.getElementById("mobileIndustriesMenu");
    const indArrow = document.getElementById("mobileIndustriesArrow");

    if (indBtn && indMenu && indArrow) {
      indBtn.addEventListener("click", () => {
        indMenu.classList.toggle("hidden");
        indArrow.classList.toggle("rotate-180");
      });
    }

  });
</script>



<script>
  const header = document.getElementById("site-header");
  const inner = document.getElementById("header-inner");
  const logo = document.getElementById("header-logo");

  let isShrunk = false;

  const SHRINK_AT = 60;
  const EXPAND_AT = 20;

  function shrinkHeader() {
    header.classList.add("bg-white/90", "backdrop-blur-md", "shadow-md");

    inner.classList.remove("pt-3", "pb-2");
    inner.classList.add("pt-3", "pb-3");

    logo.classList.remove("w-[110px]", "lg:w-[130px]", "xl:w-[150px]");
    logo.classList.add("w-[80px]", "lg:w-[80px]", "xl:w-[110px]");

    isShrunk = true;
  }

  function expandHeader() {
    header.classList.remove("bg-white/90", "backdrop-blur-md", "shadow-md");

    inner.classList.remove("pt-3", "pb-3");
    inner.classList.add("pt-3", "pb-2");

    logo.classList.remove("w-[80px]", "lg:w-[90px]", "xl:w-[110px]");
    logo.classList.add("w-[110px]", "lg:w-[130px]", "xl:w-[150px]");

    isShrunk = false;
  }

  window.addEventListener("scroll", () => {
    const y = window.scrollY;

    if (y > SHRINK_AT && !isShrunk) {
      shrinkHeader();
    }

    if (y < EXPAND_AT && isShrunk) {
      expandHeader();
    }
  });
</script>