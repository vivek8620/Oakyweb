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

        <a href="case-studies.html#Portfolio"
          class=" relative link-underline tracking-[2px] <?php echo ($page === 'portofolio.php' || $page === 'portfolio.php') ? 'text-black' : ''; ?>">
          Portfolio
        </a>

        <!-- Industries -->
        <div class="relative group inline-block">

          <a href="industries.html" class="flex items-center gap-1 cursor-pointer">

            <span class="relative link-underline tracking-[2px] <?php echo in_array($page, ['industries.php', 'healthcare.php', 'industry-social-media.php', 'media-entertainment.php', 'finance.php', 'finance-banking.php', 'e-commerce-industry.php', 'retail-ecommerce.php', 'event-management.php', 'insurance.php', 'saas.php', 'real-estate.php', 'travel.php', 'travel-hospitality.php', 'education.php', 'education-elearning.php', 'automotive.php', 'agriculture.php', 'telecommunication.php', 'manufacturing.php', 'public-sector-government.php', 'energy-utilities.php', 'logistics-supply-chain.php']) ? 'text-black font-bold' : ''; ?>">Industries</span>

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
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Real Estate</span>
            </a>

            <!-- Healthcare -->
            <a href="healthcare.html" style="animation-delay: .04s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'healthcare.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Healthcare</span>
            </a>

            <!-- Retail & E-Commerce -->
            <a href="retail-ecommerce.html" style="animation-delay: .06s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['retail-ecommerce.php', 'e-commerce-industry.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Retail &amp; E-Commerce</span>
            </a>

            <!-- Media & Entertainment -->
            <a href="media-entertainment.html" style="animation-delay: .08s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'media-entertainment.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Media &amp; Entertainment</span>
            </a>

            <!-- Finance & Banking -->
            <a href="finance-banking.html" style="animation-delay: .10s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['finance-banking.php', 'finance.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Finance &amp; Banking</span>
            </a>

            <!-- Automotive -->
            <a href="automotive.html" style="animation-delay: .12s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'automotive.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Automotive</span>
            </a>

            <!-- Agriculture -->
            <a href="agriculture.html" style="animation-delay: .14s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'agriculture.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Agriculture</span>
            </a>

            <!-- Telecommunication -->
            <a href="telecommunication.html" style="animation-delay: .16s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'telecommunication.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.393 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Telecommunication</span>
            </a>

            <!-- Manufacturing -->
            <a href="manufacturing.html" style="animation-delay: .18s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'manufacturing.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Manufacturing</span>
            </a>

            <!-- Public Sector & Government -->
            <a href="public-sector-government.html" style="animation-delay: .20s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'public-sector-government.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Public Sector &amp; Govt</span>
            </a>

            <!-- Energy & Utilities -->
            <a href="energy-utilities.html" style="animation-delay: .22s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'energy-utilities.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Energy &amp; Utilities</span>
            </a>

            <!-- Travel & Hospitality -->
            <a href="travel-hospitality.html" style="animation-delay: .24s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['travel-hospitality.php', 'travel.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Travel &amp; Hospitality</span>
            </a>

            <!-- Education & E-Learning -->
            <a href="education-elearning.html" style="animation-delay: .26s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo in_array($page, ['education-elearning.php', 'education.php']) ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Education &amp; E-Learning</span>
            </a>

            <!-- Insurance -->
            <a href="insurance.html" style="animation-delay: .28s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'insurance.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </span>
              <span class="text-[13.5px] font-medium group-hover/item:text-black">Insurance</span>
            </a>

            <!-- Logistics & Supply Chain -->
            <a href="logistics-supply-chain.html" style="animation-delay: .30s;"
              class="dropdown-item group/item flex items-center gap-3 px-3 py-2.5 rounded-xl hover:bg-amber-50/60 transition-all duration-200 <?php echo ($page === 'logistics-supply-chain.php') ? 'bg-amber-50 text-black font-semibold' : 'text-gray-700'; ?>">
              <span class="w-8 h-8 rounded-lg bg-slate-100 group-hover/item:bg-[#ffc835]/25 flex items-center justify-center shrink-0 transition-colors">
                <svg class="w-4 h-4 text-slate-700 group-hover/item:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
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

      <!-- ABOUT DROPDOWN MOBILE -->
      <div class="w-full">
        <button id="mobileAboutBtn"
          class="flex items-center gap-2 py-4 w-full text-left nav-link">
          <span>About</span>
          <img id="mobileAboutArrow"
            src="assets/icons/down-white.svg"
            class="h-4 w-4 ml-2 transition-transform duration-300" />
        </button>

        <div id="mobileAboutMenu" class="hidden pl-6 pb-2 space-y-2 text-22">
          <a href="about-us.html" class="block py-2 hover:underline">About Us</a>
          <a href="core-team.html" class="block py-2 hover:underline">Our Core Team</a>
        </div>
      </div>

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

      <a href="case-studies.html#Portfolio" class="block py-4 nav-link relative">Portfolio</a>

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
          <a href="industries.html" class="block py-2 font-bold text-primary hover:underline">All Industries Overview</a>
          <a href="real-estate.html" class="block py-2 hover:underline">Real Estate</a>
          <a href="healthcare.html" class="block py-2 hover:underline">Healthcare</a>
          <a href="retail-ecommerce.html" class="block py-2 hover:underline">Retail &amp; E-Commerce</a>
          <a href="media-entertainment.html" class="block py-2 hover:underline">Media &amp; Entertainment</a>
          <a href="finance-banking.html" class="block py-2 hover:underline">Finance &amp; Banking</a>
          <a href="automotive.html" class="block py-2 hover:underline">Automotive</a>
          <a href="agriculture.html" class="block py-2 hover:underline">Agriculture</a>
          <a href="telecommunication.html" class="block py-2 hover:underline">Telecommunication</a>
          <a href="manufacturing.html" class="block py-2 hover:underline">Manufacturing</a>
          <a href="public-sector-government.html" class="block py-2 hover:underline">Public Sector &amp; Government</a>
          <a href="energy-utilities.html" class="block py-2 hover:underline">Energy &amp; Utilities</a>
          <a href="travel-hospitality.html" class="block py-2 hover:underline">Travel &amp; Hospitality</a>
          <a href="education-elearning.html" class="block py-2 hover:underline">Education &amp; E-Learning</a>
          <a href="insurance.html" class="block py-2 hover:underline">Insurance</a>
          <a href="logistics-supply-chain.html" class="block py-2 hover:underline">Logistics &amp; Supply Chain</a>
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