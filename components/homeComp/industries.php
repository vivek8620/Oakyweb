<?php
$industriesList = [
    [
        'title' => 'Healthcare',
        'link' => 'healthcare.html',
        'desc' => 'Custom healthcare software development for secure, compliant digital platforms.',
        'icon' => 'fa-solid fa-heart-pulse'
    ],
    [
        'title' => 'Retail & E-Commerce',
        'link' => 'retail-ecommerce.html',
        'desc' => 'End-to-end retail & ecommerce software development solutions that drive conversions.',
        'icon' => 'fa-solid fa-cart-shopping'
    ],
    [
        'title' => 'Media & Entertainment',
        'link' => 'media-entertainment.html',
        'desc' => 'Scalable media and entertainment software development for seamless content delivery.',
        'icon' => 'fa-solid fa-film'
    ],
    [
        'title' => 'Finance & Banking',
        'link' => 'finance-banking.html',
        'desc' => 'Robust finance & banking software development for secure financial infrastructure.',
        'icon' => 'fa-solid fa-building-columns'
    ],
    [
        'title' => 'Automotive',
        'link' => 'automotive.html',
        'desc' => 'Advanced automotive software engineering for intelligent connected mobility.',
        'icon' => 'fa-solid fa-car-side'
    ],
    [
        'title' => 'Agriculture',
        'link' => 'agriculture.html',
        'desc' => 'Smart agriculture software development for agri-tech automation & precision farming.',
        'icon' => 'fa-solid fa-seedling'
    ],
    [
        'title' => 'Telecommunication',
        'link' => 'telecommunication.html',
        'desc' => 'Scalable telecom software development for robust network management platforms.',
        'icon' => 'fa-solid fa-tower-broadcast'
    ],
    [
        'title' => 'Manufacturing',
        'link' => 'manufacturing.html',
        'desc' => 'Custom manufacturing software development for automated production optimization.',
        'icon' => 'fa-solid fa-industry'
    ],
    [
        'title' => 'Public Sector & Government',
        'link' => 'public-sector-government.html',
        'desc' => 'Trusted government software development for secure digital governance platforms.',
        'icon' => 'fa-solid fa-landmark-dome'
    ],
    [
        'title' => 'Real Estate',
        'link' => 'real-estate.html',
        'desc' => 'Custom PropTech & real estate software development for smart property management platforms.',
        'icon' => 'fa-solid fa-city'
    ],
    [
        'title' => 'Energy & Utilities',
        'link' => 'energy-utilities.html',
        'desc' => 'Intelligent energy software development for real-time monitoring & utility management.',
        'icon' => 'fa-solid fa-bolt-lightning'
    ],
    [
        'title' => 'Travel & Hospitality',
        'link' => 'travel-hospitality.html',
        'desc' => 'Custom travel & hospitality software development for seamless booking experiences.',
        'icon' => 'fa-solid fa-plane-departure'
    ],
    [
        'title' => 'Education & E-Learning',
        'link' => 'education-elearning.html',
        'desc' => 'Scalable education & eLearning software development for modern digital classrooms.',
        'icon' => 'fa-solid fa-graduation-cap'
    ],
    [
        'title' => 'Insurance',
        'link' => 'insurance.html',
        'desc' => 'Custom insurance software development for automated policy & claims management.',
        'icon' => 'fa-solid fa-shield-halved'
    ],
    [
        'title' => 'Logistics & Supply Chain',
        'link' => 'logistics-supply-chain.html',
        'desc' => 'End-to-end logistics & supply chain software development for real-time visibility.',
        'icon' => 'fa-solid fa-truck-fast'
    ],
];
?>

<!-- INDUSTRIES WE SERVE SECTION -->
<section class="relative w-full py-12 sm:py-16 lg:py-20" id="industries-we-serve">
  <div class="contain relative z-10">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-14">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-gray-900 leading-tight">
        Tailored solutions for <span class="text-[#ffc835]">diverse industries</span>
      </h2>
      <p class="text-gray-600 text-sm sm:text-base mt-3 max-w-2xl mx-auto font-normal leading-relaxed">
        Comprehensive domain expertise and bespoke digital solutions designed to accelerate digital transformation.
      </p>
    </div>

    <!-- 15 Industries Grid (5 Columns on Desktop) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-5">
      <?php foreach ($industriesList as $item): ?>
        <a href="<?= $item['link'] ?>" class="group flex flex-col justify-between bg-white border border-gray-200/80 hover:border-[#ffc835] rounded-2xl p-5 sm:p-6 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl">
          <div>
            <!-- Icon Container with FontAwesome Icon -->
            <div class="w-12 h-12 rounded-xl bg-[#ffc835]/15 text-[#111827] flex items-center justify-center mb-4 group-hover:bg-[#ffc835] group-hover:text-black transition-all duration-300 shadow-sm text-lg">
              <i class="<?= $item['icon'] ?>"></i>
            </div>

            <!-- Title -->
            <h3 class="text-gray-900 font-bold text-[16px] mb-2 leading-snug tracking-tight group-hover:text-black transition-colors duration-200">
              <?= $item['title'] ?>
            </h3>

            <!-- Description -->
            <p class="text-[13px] text-gray-600 leading-relaxed font-normal">
              <?= $item['desc'] ?>
            </p>
          </div>

          <!-- Explore Link -->
          <div class="pt-3.5 mt-3.5 border-t border-gray-100 flex items-center justify-between">
            <span class="inline-flex items-center text-xs font-bold text-gray-900 group-hover:text-black transition-colors duration-200 gap-1.5">
              <span>Explore</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.2" stroke="currentColor" class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-1 group-hover:-translate-y-0.5 text-[#ffc835]">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
              </svg>
            </span>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>
