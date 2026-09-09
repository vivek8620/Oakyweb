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
      <div class="hidden lg:flex items-center gap-[50px] text-black font-medium text-[13px] xl:[text-17px]">
        <a href="./"
          class="relative link-underline tracking-[2px] <?php echo ($page === 'index.php') ? 'text-black' : ''; ?>">
          Home
        </a>
        <!-- About -->
        <div class="relative group inline-block">

          <a class="flex items-center gap-1 cursor-pointer">

            <span class="relative link-underline tracking-[2px] <?php echo in_array($page, ['about-us.php', 'core-team.php']) ? 'text-black' : ''; ?>">About</span>

            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
              fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
            </svg>
          </a>

          <!-- DROPDOWN -->
          <div class="absolute -left-6 w-[200px] bg-white shadow-xl rounded-lg p-2 hidden group-hover:block z-50 dropdown-anim tracking-wide">

            <a href="about-us.html" style="animation-delay: .05s;"
              class="dropdown-item block px-3 py-2 rounded 
              <?php echo ($page === 'about-us.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">About Us</span>
            </a>

            <a href="core-team.html" style="animation-delay: .10s;"
              class="dropdown-item block px-3 py-2 rounded
              <?php echo ($page === 'core-team.php') ? 'text-black' : ''; ?>">
              <span class="relative link-underline">Our Core Team</span>
            </a>

          </div>
        </div>


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

        <!-- Industries -->
        <div class="relative group inline-block">

          <a class="flex items-center gap-1 cursor-pointer">

            <span class="relative link-underline tracking-[2px] <?php echo in_array($page, ['healthcare.php', 'industry-social-media.php', 'media-entertainment.php', 'finance.php', 'finance-banking.php', 'e-commerce-industry.php', 'retail-ecommerce.php', 'event-management.php', 'insurance.php', 'saas.php', 'real-estate.php', 'travel.php', 'travel-hospitality.php', 'education.php', 'education-elearning.php', 'automotive.php', 'agriculture.php', 'telecommunication.php', 'manufacturing.php', 'public-sector-government.php', 'energy-utilities.php', 'logistics-supply-chain.php']) ? 'text-black font-bold' : ''; ?>">Industries</span>

            <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
              fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
            </svg>
          </a>

          <!-- DROPDOWN MEGA-MENU (15 Industries in 3 Columns) -->
          <div class="absolute -left-[280px] xl:-left-[320px] w-[760px] xl:w-[820px] bg-white shadow-2xl rounded-2xl p-6 hidden group-hover:grid grid-cols-3 gap-x-5 gap-y-2.5 z-50 dropdown-anim tracking-wide border border-gray-100">

            <!-- Real Estate -->
            <a href="real-estate.html" style="animation-delay: .02s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'real-estate.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-city text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Real Estate</span>
            </a>

            <!-- Healthcare -->
            <a href="healthcare.html" style="animation-delay: .04s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'healthcare.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-heart-pulse text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Healthcare</span>
            </a>

            <!-- Retail & E-Commerce -->
            <a href="retail-ecommerce.html" style="animation-delay: .06s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['retail-ecommerce.php', 'e-commerce-industry.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-cart-shopping text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Retail &amp; E-Commerce</span>
            </a>

            <!-- Media & Entertainment -->
            <a href="media-entertainment.html" style="animation-delay: .08s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'media-entertainment.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-film text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Media &amp; Entertainment</span>
            </a>

            <!-- Finance & Banking -->
            <a href="finance-banking.html" style="animation-delay: .10s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['finance-banking.php', 'finance.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-building-columns text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Finance &amp; Banking</span>
            </a>

            <!-- Automotive -->
            <a href="automotive.html" style="animation-delay: .12s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'automotive.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-car-side text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Automotive</span>
            </a>

            <!-- Agriculture -->
            <a href="agriculture.html" style="animation-delay: .14s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'agriculture.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-seedling text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Agriculture</span>
            </a>

            <!-- Telecommunication -->
            <a href="telecommunication.html" style="animation-delay: .16s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'telecommunication.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-tower-broadcast text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Telecommunication</span>
            </a>

            <!-- Manufacturing -->
            <a href="manufacturing.html" style="animation-delay: .18s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'manufacturing.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-industry text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Manufacturing</span>
            </a>

            <!-- Public Sector & Government -->
            <a href="public-sector-government.html" style="animation-delay: .20s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'public-sector-government.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-landmark-dome text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Public Sector &amp; Govt</span>
            </a>

            <!-- Energy & Utilities -->
            <a href="energy-utilities.html" style="animation-delay: .22s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'energy-utilities.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-bolt-lightning text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Energy &amp; Utilities</span>
            </a>

            <!-- Travel & Hospitality -->
            <a href="travel-hospitality.html" style="animation-delay: .24s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['travel-hospitality.php', 'travel.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-plane-departure text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Travel &amp; Hospitality</span>
            </a>

            <!-- Education & E-Learning -->
            <a href="education-elearning.html" style="animation-delay: .26s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['education-elearning.php', 'education.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-graduation-cap text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Education &amp; E-Learning</span>
            </a>

            <!-- Insurance -->
            <a href="insurance.html" style="animation-delay: .28s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'insurance.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-shield-halved text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Insurance</span>
            </a>

            <!-- Logistics & Supply Chain -->
            <a href="logistics-supply-chain.html" style="animation-delay: .30s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'logistics-supply-chain.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <i class="fa-solid fa-truck-fast text-[14px] text-slate-700 group-hover/item:text-black"></i>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Logistics &amp; Supply Chain</span>
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
  <div id="mobile-menu" data-lenis-prevent
    class="fixed inset-0 w-full h-screen h-[100dvh] max-h-screen bg-[#1e1e1e] text-white transform -translate-y-full transition-transform duration-300 ease-in-out z-[9999] flex flex-col overflow-hidden lg:hidden">

    <!-- TOP BAR (Fixed at top of drawer) -->
    <div class="shrink-0 flex justify-between items-center px-5 py-4 border-b border-white/10 bg-[#1e1e1e]">
      <a href="./">
        <img src="assets/icons/logo.svg" alt="OakyWeb" class="w-[110px] h-[40px] object-contain" />
      </a>

      <button id="mobile-menu-close" class="text-white p-2 rounded-lg hover:bg-white/10 transition-colors cursor-pointer" aria-label="Close menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- SCROLLABLE CONTENT -->
    <div data-lenis-prevent class="flex-1 overflow-y-auto overscroll-contain px-5 py-5 text-white" style="-webkit-overflow-scrolling: touch; touch-action: pan-y;">

      <!-- Home -->
      <a href="./" class="block py-3 text-xl font-medium border-b border-white/5 hover:text-[#ffc835] transition-colors <?php echo ($page === 'index.php') ? 'text-[#ffc835] font-bold' : ''; ?>">
        Home
      </a>

      <!-- ABOUT ACCORDION -->
      <div class="w-full border-b border-white/5">
        <button id="mobileAboutBtn"
          class="flex items-center justify-between py-3.5 w-full text-left text-xl font-medium hover:text-[#ffc835] transition-colors cursor-pointer">
          <span>About</span>
          <svg id="mobileAboutArrow" class="w-4 h-4 transition-transform duration-300 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
          </svg>
        </button>

        <div id="mobileAboutMenu" class="hidden pl-4 pb-3 space-y-1 text-base text-gray-300">
          <a href="about-us.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'about-us.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">About Us</a>
          <a href="core-team.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'core-team.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Our Core Team</a>
        </div>
      </div>

      <!-- SERVICES ACCORDION -->
      <div class="w-full border-b border-white/5">
        <button id="mobileServicesBtn"
          class="flex items-center justify-between py-3.5 w-full text-left text-xl font-medium hover:text-[#ffc835] transition-colors cursor-pointer">
          <span>Services</span>
          <svg id="mobileArrow" class="w-4 h-4 transition-transform duration-300 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
          </svg>
        </button>

        <div id="mobileServicesMenu" class="hidden pl-4 pb-3 space-y-1 text-base text-gray-300">
          <a href="custom-software-solution.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'custom-software-solution.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Custom Software Solutions</a>
          <a href="mobile-application.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'mobile-application.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Mobile App Development</a>
          <a href="web-design-development.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'web-design-development.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Website Development</a>
          <a href="e-commerce-solution.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'e-commerce-solution.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">E-Commerce Solutions</a>
          <a href="ui-ux-design.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'ui-ux-design.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">UI &amp; UX Design</a>
          <a href="social-media.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'social-media.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Digital Marketing</a>
          <a href="web-hosting.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'web-hosting.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Cloud &amp; DevOps</a>
          <a href="oee-dashboard.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'oee-dashboard.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">OEE Dashboard</a>
        </div>
      </div>

      <!-- INDUSTRIES ACCORDION -->
      <div class="w-full border-b border-white/5">
        <button id="mobileIndustriesBtn"
          class="flex items-center justify-between py-3.5 w-full text-left text-xl font-medium hover:text-[#ffc835] transition-colors cursor-pointer">
          <span>Industries</span>
          <svg id="mobileIndustriesArrow" class="w-4 h-4 transition-transform duration-300 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.08 1.04l-4.25 4.25a.75.75 0 01-1.08 0L5.21 6.27a.75.75 0 01.02-1.06z" />
          </svg>
        </button>

        <div id="mobileIndustriesMenu" class="hidden pl-4 pb-3 space-y-1 text-base text-gray-300">
          <a href="real-estate.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'real-estate.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Real Estate</a>
          <a href="healthcare.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'healthcare.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Healthcare</a>
          <a href="retail-ecommerce.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo in_array($page, ['retail-ecommerce.php', 'e-commerce-industry.php']) ? 'text-[#ffc835] font-semibold' : ''; ?>">Retail &amp; E-Commerce</a>
          <a href="media-entertainment.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'media-entertainment.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Media &amp; Entertainment</a>
          <a href="finance-banking.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo in_array($page, ['finance-banking.php', 'finance.php']) ? 'text-[#ffc835] font-semibold' : ''; ?>">Finance &amp; Banking</a>
          <a href="automotive.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'automotive.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Automotive</a>
          <a href="agriculture.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'agriculture.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Agriculture</a>
          <a href="telecommunication.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'telecommunication.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Telecommunication</a>
          <a href="manufacturing.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'manufacturing.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Manufacturing</a>
          <a href="public-sector-government.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'public-sector-government.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Public Sector &amp; Government</a>
          <a href="energy-utilities.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'energy-utilities.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Energy &amp; Utilities</a>
          <a href="travel-hospitality.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo in_array($page, ['travel-hospitality.php', 'travel.php']) ? 'text-[#ffc835] font-semibold' : ''; ?>">Travel &amp; Hospitality</a>
          <a href="education-elearning.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo in_array($page, ['education-elearning.php', 'education.php']) ? 'text-[#ffc835] font-semibold' : ''; ?>">Education &amp; E-Learning</a>
          <a href="insurance.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'insurance.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Insurance</a>
          <a href="logistics-supply-chain.html" class="block py-2 hover:text-[#ffc835] transition-colors <?php echo ($page === 'logistics-supply-chain.php') ? 'text-[#ffc835] font-semibold' : ''; ?>">Logistics &amp; Supply Chain</a>
        </div>
      </div>

      <a href="case-studies.html" class="block py-3.5 text-xl font-medium border-b border-white/5 hover:text-[#ffc835] transition-colors <?php echo ($page === 'case-studies.php') ? 'text-[#ffc835] font-bold' : ''; ?>">
        Case Studies
      </a>

      <a href="contact-us.html" class="block py-3.5 text-xl font-medium border-b border-white/5 hover:text-[#ffc835] transition-colors <?php echo ($page === 'contact-us.php') ? 'text-[#ffc835] font-bold' : ''; ?>">
        Contact Us
      </a>

      <!-- START PROJECT BUTTON -->
      <div class="pt-6 pb-2">
        <a href="start-project.php" class="block w-full text-center bg-[#ffc835] hover:bg-[#ffc835]/90 text-black font-bold py-3.5 px-6 rounded-xl transition-all shadow-md">
          Start Project
        </a>
      </div>

      <!-- SOCIAL ICONS & COPYRIGHT (INSIDE SCROLLER) -->
      <div class="pt-6 pb-10 border-t border-white/10 mt-6">
        <p class="text-xs uppercase tracking-wider text-gray-400 font-semibold mb-3">Connect with us</p>
        <div class="flex gap-4 items-center">
          <a href="https://www.linkedin.com/company/oakyweb/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#ffc835] hover:bg-[#ffc835]/10 transition-colors">
            <img src="assets/icons/linkedin.svg" class="h-5 w-5" alt="LinkedIn" />
          </a>
          <a href="https://www.facebook.com/OakyWeb/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#ffc835] hover:bg-[#ffc835]/10 transition-colors">
            <img src="assets/icons/fb-sicon.svg" class="h-5 w-5" alt="Facebook" />
          </a>
          <a href="https://twitter.com/oakyweb" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#ffc835] hover:bg-[#ffc835]/10 transition-colors">
            <img src="assets/icons/x-sicon.svg" class="h-5 w-5" alt="X / Twitter" />
          </a>
          <a href="https://www.instagram.com/oaky_web/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#ffc835] hover:bg-[#ffc835]/10 transition-colors">
            <img src="assets/icons/insta-sicon.svg" class="h-5 w-5" alt="Instagram" />
          </a>
        </div>
      </div>

    </div>

  </div>


</nav>



<script>
  const menu = document.getElementById("mobile-menu");
  const menuBtn = document.getElementById("menu-btn");
  const closeBtn = document.getElementById("mobile-menu-close");

  function openMobileMenu() {
    if (menu) {
      menu.classList.remove("-translate-y-full");
      document.body.style.overflow = "hidden";
      document.documentElement.style.overflow = "hidden";
      if (window.lenis) {
        window.lenis.stop();
      }
    }
  }

  function closeMobileMenu() {
    if (menu) {
      menu.classList.add("-translate-y-full");
      document.body.style.overflow = "";
      document.documentElement.style.overflow = "";
      if (window.lenis) {
        window.lenis.start();
      }
    }
  }

  if (menuBtn) {
    menuBtn.addEventListener("click", openMobileMenu);
  }

  if (closeBtn) {
    closeBtn.addEventListener("click", closeMobileMenu);
  }

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

    const aboutBtn = document.getElementById("mobileAboutBtn");
    const aboutMenu = document.getElementById("mobileAboutMenu");
    const aboutArrow = document.getElementById("mobileAboutArrow");

    if (aboutBtn && aboutMenu && aboutArrow) {
      aboutBtn.addEventListener("click", () => {
        aboutMenu.classList.toggle("hidden");
        aboutArrow.classList.toggle("rotate-180");
      });
    }

    const btn = document.getElementById("mobileServicesBtn");
    const serviceMenu = document.getElementById("mobileServicesMenu");
    const arrow = document.getElementById("mobileArrow");

    if (btn && serviceMenu && arrow) {
      btn.addEventListener("click", () => {
        serviceMenu.classList.toggle("hidden");
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