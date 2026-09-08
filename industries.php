<?php 
$page = "industries.php";
include("components/header.php"); 
?>

<!-- 1. HERO SECTION -->
<section class="relative overflow-hidden bg-[#0A0D18] pt-12 pb-16 lg:pt-16 lg:pb-24 text-white font-figtree">
  <!-- Ambient Gradients -->
  <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
    <div class="absolute -top-40 right-10 w-[600px] h-[600px] bg-[#ffc835]/10 blur-[180px] rounded-full"></div>
    <div class="absolute bottom-0 left-0 w-[650px] h-[650px] bg-[#3B82F6]/10 blur-[180px] rounded-full"></div>
  </div>

  <div class="contain relative z-10">
    <div class="grid items-center gap-10 lg:grid-cols-12">
      
      <!-- Left Content -->
      <div class="lg:col-span-7">
        <!-- Breadcrumb -->
        <nav aria-label="Breadcrumb" class="mb-6">
          <ol class="inline-flex items-center gap-2 rounded-full px-4 py-1.5 bg-white/5 border border-white/10 text-xs sm:text-sm font-medium">
            <li><a href="./" class="text-white/80 hover:text-[#ffc835] transition-colors">Home</a></li>
            <li class="text-white/40">&gt;</li>
            <li class="text-[#ffc835] font-semibold">Industries</li>
          </ol>
        </nav>

        <h1 class="text-3xl sm:text-4xl lg:text-[48px] xl:text-[56px] font-extrabold leading-[1.14] sm:leading-[1.12] tracking-tight text-white">
          Software Built For The <br />
          <span class="text-[#ffc835] font-extrabold">Industry You Work In</span>
        </h1>

        <p class="mt-6 text-base sm:text-lg text-slate-300 font-normal leading-relaxed max-w-2xl">
          Every industry runs on different data, different compliance requirements, and different user expectations. We build software that fits how your business actually works - not templates dressed up to look like they do.
        </p>

        <div class="mt-8 sm:mt-10 flex flex-wrap items-center gap-4">
          <a href="contact-us.html" class="inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ffc835] hover:bg-white text-black font-semibold text-base transition-all duration-300 hover:-translate-y-0.5">
            <span>Tell Us What You're Building</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
          </a>
          <a href="#industry-verticals" class="inline-flex items-center gap-2 rounded-full px-6 py-4 bg-white/5 hover:bg-white/10 border border-white/20 text-white font-medium text-base transition-all duration-300">
            <span>Explore 15 Verticals</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
          </a>
        </div>
      </div>

      <!-- Right Graphic / Dashboard Visual -->
      <div class="lg:col-span-5">
        <div class="relative rounded-3xl p-3 bg-gradient-to-tr from-[#1E2538] to-[#141A2E] border border-white/10 shadow-2xl group">
          <div class="relative rounded-2xl overflow-hidden bg-[#0A0D18] p-6 border border-[#262D45]">
            <!-- Visual Header -->
            <div class="flex items-center justify-between pb-4 border-b border-white/10">
              <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
              </div>
              <span class="text-xs font-mono text-slate-400">OakyWeb Industry Suite</span>
            </div>

            <!-- Stats preview inside graphic -->
            <div class="mt-6 space-y-4">
              <div class="p-4 rounded-xl bg-white/5 border border-white/10 flex items-center justify-between">
                <div>
                  <p class="text-xs text-slate-400">Enterprise Compliance</p>
                  <p class="text-base font-bold text-white">HIPAA • PCI-DSS • DPDP</p>
                </div>
                <span class="px-2.5 py-1 rounded bg-emerald-500/20 text-emerald-400 text-xs font-semibold">100% Certified</span>
              </div>

              <div class="p-4 rounded-xl bg-white/5 border border-white/10 flex items-center justify-between">
                <div>
                  <p class="text-xs text-slate-400">AI Integration Engine</p>
                  <p class="text-base font-bold text-white">Automated Domain Models</p>
                </div>
                <span class="px-2.5 py-1 rounded bg-[#ffc835]/20 text-[#ffc835] text-xs font-semibold">Active</span>
              </div>

              <div class="p-4 rounded-xl bg-white/5 border border-white/10 flex items-center justify-between">
                <div>
                  <p class="text-xs text-slate-400">Industry Performance</p>
                  <p class="text-base font-bold text-white">Sub-100ms API Latency</p>
                </div>
                <span class="px-2.5 py-1 rounded bg-sky-500/20 text-sky-400 text-xs font-semibold">Ultra Fast</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick KPI Stats Bar -->
    <div class="mt-14 rounded-3xl p-6 sm:p-8 bg-gradient-to-r from-[#111628] via-[#161D33] to-[#111628] border border-white/10 shadow-xl">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
        
        <!-- Stat 1 -->
        <div class="flex items-center gap-4">
          <span class="w-12 h-12 rounded-xl bg-[#ffc835]/10 border border-[#ffc835]/30 flex items-center justify-center shrink-0 text-[#ffc835]">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          </span>
          <div>
            <p class="text-2xl sm:text-3xl font-bold text-white">4.9</p>
            <p class="text-sm font-medium text-slate-200">Google Rating</p>
            <p class="text-xs text-slate-400">Trusted by clients worldwide</p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="flex items-center gap-4">
          <span class="w-12 h-12 rounded-xl bg-[#ffc835]/10 border border-[#ffc835]/30 flex items-center justify-center shrink-0 text-[#ffc835]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          </span>
          <div>
            <p class="text-2xl sm:text-3xl font-bold text-white">97%</p>
            <p class="text-sm font-medium text-slate-200">Client Retention</p>
            <p class="text-xs text-slate-400">Long-term partnerships since 2019</p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="flex items-center gap-4">
          <span class="w-12 h-12 rounded-xl bg-[#ffc835]/10 border border-[#ffc835]/30 flex items-center justify-center shrink-0 text-[#ffc835]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </span>
          <div>
            <p class="text-2xl sm:text-3xl font-bold text-white">180+</p>
            <p class="text-sm font-medium text-slate-200">Clients Served</p>
            <p class="text-xs text-slate-400">Building products across domains</p>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="flex items-center gap-4">
          <span class="w-12 h-12 rounded-xl bg-[#ffc835]/10 border border-[#ffc835]/30 flex items-center justify-center shrink-0 text-[#ffc835]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </span>
          <div>
            <p class="text-2xl sm:text-3xl font-bold text-white">15+</p>
            <p class="text-sm font-medium text-slate-200">Industries Served</p>
            <p class="text-xs text-slate-400">Delivering software globally</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<!-- 2. THE INDUSTRIES WE BUILD FOR (15 VERTICALS) -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#070A12] text-white relative font-figtree" id="industry-verticals">
  <div class="contain">
    
    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto mb-14">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold tracking-tight text-white leading-tight">
        The Industries <span class="text-[#ffc835]">We Build For</span>
      </h2>
      <p class="text-slate-300 text-base sm:text-lg mt-4 leading-relaxed">
        Deep domain knowledge, production-grade engineering, and team models that scale with your delivery timeline.
      </p>
    </div>

    <!-- 15 Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">

      <!-- 1. Real Estate -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-city"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Real Estate</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build property marketplaces, brokerage CRMs, investment platforms, and management systems. AI built in from day one. Talk to us today.</p>
        </div>
        <a href="real-estate.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Real Estate</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 2. Healthcare -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-heart-pulse"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Healthcare</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build EHR systems, telehealth platforms, HMS software, and AI diagnostic tools. HIPAA and DPDP compliant. Senior engineers. Reply in 30 minutes.</p>
        </div>
        <a href="healthcare.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Healthcare</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 3. Retail & E-Commerce -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-cart-shopping"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Retail &amp; E-Commerce</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build custom retail and ecommerce software: storefronts, OMS, inventory systems, and AI personalisation engines. Senior engineers. Reply in 30 minutes.</p>
        </div>
        <a href="retail-ecommerce.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Retail &amp; E-Com</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 4. Media & Entertainment -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-film"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Media &amp; Entertainment</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build OTT platforms, streaming apps, CMS, and AI content tools for media companies and entertainment businesses. Senior engineers. Reply in 30 minutes.</p>
        </div>
        <a href="media-entertainment.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Media</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 5. Finance & Banking -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-building-columns"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Finance &amp; Banking</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build digital banking platforms, lending systems, payment infrastructure, and AI fraud detection tools. RBI, PCI-DSS, and GDPR compliant.</p>
        </div>
        <a href="finance-banking.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Finance</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 6. Automotive -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-car-side"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Automotive</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build fleet management systems, dealer platforms, connected vehicle software, and AI diagnostics tools for OEMs, dealers, and mobility businesses.</p>
        </div>
        <a href="automotive.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Automotive</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 7. Agriculture -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-seedling"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Agriculture</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build farm management systems, precision agriculture platforms, IoT crop monitoring, and AI yield forecasting tools for agribusinesses and AgriTech startups</p>
        </div>
        <a href="agriculture.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Agriculture</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 8. Telecommunication -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-tower-broadcast"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Telecommunication</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build BSS/OSS platforms, network management systems, VoIP infrastructure, and AI-powered churn and fraud tools for telcos and telecom software companies.</p>
        </div>
        <a href="telecommunication.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Telecom</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 9. Manufacturing -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-industry"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Manufacturing</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build MES, ERP, IIoT, predictive maintenance, and supply chain platforms for manufacturers. AI-powered. ISO-compliant. Senior engineers. Reply in 30 minutes.</p>
        </div>
        <a href="manufacturing.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Manufacturing</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 10. Public Sector & Government -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-landmark-dome"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Public Sector &amp; Govt</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build citizen portals, case management systems, and AI-powered public service tools for government bodies and public sector organisations.</p>
        </div>
        <a href="public-sector-government.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Public Sector</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 11. Energy & Utilities -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-bolt-lightning"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Energy &amp; Utilities</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build smart grid platforms, energy management systems, and AI-powered consumption analytics for utilities and cleantech businesses.</p>
        </div>
        <a href="energy-utilities.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Energy</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 12. Travel & Hospitality -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-plane-departure"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Travel &amp; Hospitality</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build OTA platforms, hotel management systems, booking engines, and AI-powered travel personalisation tools for travel companies.</p>
        </div>
        <a href="travel-hospitality.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Travel</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 13. Education & E-Learning -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-graduation-cap"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Education &amp; E-Learning</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build LMS platforms, eLearning apps, and AI-powered adaptive learning tools for EdTech startups, schools, and corporate training.</p>
        </div>
        <a href="education-elearning.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Education</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 14. Insurance -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-shield-halved"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Insurance</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build policy management systems, claims platforms, underwriting tools, and AI fraud detection for insurers and InsurTech startups.</p>
        </div>
        <a href="insurance.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Insurance</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

      <!-- 15. Logistics & Supply Chain -->
      <div class="group flex flex-col justify-between rounded-3xl bg-[#0F1424] p-7 border border-[#222A42] hover:border-[#ffc835]/70 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_16px_36px_rgba(0,0,0,0.6)]">
        <div>
          <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#1A223B] group-hover:bg-[#ffc835]/20 border border-[#2C375C] group-hover:border-[#ffc835]/50 text-[#889AF5] group-hover:text-[#ffc835] transition-colors text-lg">
            <i class="fa-solid fa-truck-fast"></i>
          </span>
          <h3 class="mt-5 text-xl font-semibold text-white group-hover:text-[#ffc835] transition-colors">Logistics &amp; Supply Chain</h3>
          <p class="mt-3 text-sm text-slate-400 leading-relaxed">We build TMS, WMS, fleet tracking, supply chain visibility, and AI route optimisation platforms for logistics companies and supply chain businesses.</p>
        </div>
        <a href="logistics-supply-chain.html" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-[#ffc835] group-hover:text-white transition-colors">
          <span>Explore Logistics</span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- 3. WHAT A WELL-BUILT INDUSTRY PLATFORM ACTUALLY DOES FOR YOUR REVENUE -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#0B0F1D] text-white font-figtree">
  <div class="contain">
    <div class="grid items-stretch gap-10 lg:grid-cols-12">
      
      <!-- Left Column -->
      <div class="lg:col-span-5 flex flex-col justify-between">
        <div>
          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
            What A Well-Built Industry Platform Actually Does For <br />
            <span class="text-[#ffc835]">Your Revenue</span>
          </h2>

          <div class="mt-8 pl-5 border-l-4 border-[#ffc835]">
            <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
              Generic software development moves fast on paper and stalls in practice. Compliance logic added after the fact. Workflows rebuilt because the original architecture did not account for how the industry actually operates. Integrations that work in staging and break in production because a domain-specific edge case was never anticipated.
            </p>
          </div>

          <p class="mt-6 text-slate-400 text-sm sm:text-base leading-relaxed">
            Industry-focused engineering costs less to maintain, launches closer to specification, and earns user adoption faster because it fits how people in that vertical already work. That is not a positioning statement. It is what we have observed across 180+ client engagements.
          </p>
        </div>

        <div class="mt-8 rounded-2xl bg-[#141A2E] p-6 border border-[#273254] flex items-center gap-5">
          <span class="w-14 h-14 rounded-2xl bg-[#ffc835]/15 border border-[#ffc835]/40 flex items-center justify-center shrink-0 text-[#ffc835]">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          </span>
          <div>
            <p class="text-3xl font-extrabold text-white">180+</p>
            <p class="text-sm font-semibold text-[#ffc835]">Client Engagements</p>
            <p class="text-xs text-slate-400">Observed across 180+ client engagements delivering industry-focused software.</p>
          </div>
        </div>
      </div>

      <!-- Right Column: 4 Core Benefits -->
      <div class="lg:col-span-7 rounded-3xl bg-[#121729] p-8 sm:p-10 border border-[#263050] shadow-2xl flex flex-col justify-between">
        <h3 class="text-2xl font-semibold text-white mb-8">Four Core Architecture Outcomes</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          
          <!-- Card 1 -->
          <div class="p-5 rounded-2xl bg-[#0B0F1D] border border-[#222B45] hover:border-[#ffc835]/50 transition-colors">
            <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-3">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </span>
            <h4 class="text-base font-bold text-white">Fewer Architecture Reworks</h4>
            <p class="mt-2 text-xs sm:text-sm text-slate-400 leading-relaxed">Because compliance and data constraints are factored in from discovery.</p>
          </div>

          <!-- Card 2 -->
          <div class="p-5 rounded-2xl bg-[#0B0F1D] border border-[#222B45] hover:border-[#ffc835]/50 transition-colors">
            <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-3">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </span>
            <h4 class="text-base font-bold text-white">Faster User Adoption</h4>
            <p class="mt-2 text-xs sm:text-sm text-slate-400 leading-relaxed">Because the product fits existing workflows rather than asking teams to adapt to it.</p>
          </div>

          <!-- Card 3 -->
          <div class="p-5 rounded-2xl bg-[#0B0F1D] border border-[#222B45] hover:border-[#ffc835]/50 transition-colors">
            <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-3">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            </span>
            <h4 class="text-base font-bold text-white">Lower Integration Costs</h4>
            <p class="mt-2 text-xs sm:text-sm text-slate-400 leading-relaxed">Because third-party systems in each vertical are already known and mapped.</p>
          </div>

          <!-- Card 4 -->
          <div class="p-5 rounded-2xl bg-[#0B0F1D] border border-[#222B45] hover:border-[#ffc835]/50 transition-colors">
            <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-3">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </span>
            <h4 class="text-base font-bold text-white">Fewer Surprises in QA</h4>
            <p class="mt-2 text-xs sm:text-sm text-slate-400 leading-relaxed">Because edge cases specific to the industry are anticipated, not discovered post-launch.</p>
          </div>

        </div>

        <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between">
          <span class="text-xs sm:text-sm text-slate-300">Ready to build your industry platform?</span>
          <a href="contact-us.html" class="text-xs sm:text-sm font-bold text-[#ffc835] hover:underline flex items-center gap-1">
            <span>Schedule Scoping Session</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- 4. THE WAY WE WORK ACROSS EVERY INDUSTRY (4 STEPS) -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#080B14] text-white font-figtree">
  <div class="contain">
    
    <!-- Header -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-14 gap-6">
      <div>
        <span class="text-[#ffc835] font-bold text-xs sm:text-sm uppercase tracking-widest">Our Engineering Process</span>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mt-2">
          The Way We Work Across <span class="text-[#ffc835]">Every Industry</span>
        </h2>
      </div>
      <p class="text-slate-300 text-sm sm:text-base max-w-md lg:border-l-2 lg:border-[#ffc835] lg:pl-4">
        Our delivery model does not change per industry. What changes is the domain expertise our engineers bring to each phase.
      </p>
    </div>

    <!-- 4 Step Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      
      <!-- Step 01 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-6">
            <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 border border-[#ffc835]/30 flex items-center justify-center text-[#ffc835]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </span>
            <span class="text-3xl font-extrabold text-white/20">01</span>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Discovery and Scoping</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            We start by mapping the domain constraints before touching architecture. Compliance requirements, integration dependencies, and industry-specific data models are documented in week one, not discovered in QA.
          </p>
        </div>
      </div>

      <!-- Step 02 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-6">
            <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 border border-[#ffc835]/30 flex items-center justify-center text-[#ffc835]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            </span>
            <span class="text-3xl font-extrabold text-white/20">02</span>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Architecture and Stack Selection</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Stack decisions are made against your platform's actual requirements - scale targets, compliance constraints, and third-party integration needs. No default stacks assigned before the scoping conversation.
          </p>
        </div>
      </div>

      <!-- Step 03 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-6">
            <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 border border-[#ffc835]/30 flex items-center justify-center text-[#ffc835]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </span>
            <span class="text-3xl font-extrabold text-white/20">03</span>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Build and Sprint Delivery</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Engineering runs in two-week sprints with demos, written progress updates, and a living backlog visible to your team. No black boxes. No surprises at milestone handoffs.
          </p>
        </div>
      </div>

      <!-- Step 04 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all duration-300 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between mb-6">
            <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 border border-[#ffc835]/30 flex items-center justify-center text-[#ffc835]">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </span>
            <span class="text-3xl font-extrabold text-white/20">04</span>
          </div>
          <h3 class="text-lg font-bold text-white mb-2">Launch, Integration, and Handoff</h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            Go-live preparation includes deployment planning, load testing, and documentation that your internal team can actually use. We stay available post-launch to resolve issues that emerge in production.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- 5. WHY INDUSTRY-SPECIFIC SOFTWARE IS BEING REBUILT IN 2026 -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#0A0D18] text-white border-t border-white/5 font-figtree">
  <div class="contain">
    
    <div class="grid items-start gap-8 lg:grid-cols-2 lg:gap-16 mb-12">
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold leading-tight">
        Why Industry-Specific Software Is Being <br />
        <span class="text-[#ffc835]">Rebuilt in 2026</span>
      </h2>
      <div class="flex gap-4 lg:pt-2">
        <span class="mt-1 w-[3px] shrink-0 rounded bg-[#ffc835]" aria-hidden="true"></span>
        <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
          What worked three years ago is already losing ground. The platforms winning in 2026 are built differently. Here is what is driving the shift.
        </p>
      </div>
    </div>

    <!-- 5 Drivers Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Driver 1 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all">
        <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </span>
        <h3 class="text-lg font-bold text-white mb-2">Compliance Complexity Has Accelerated</h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          DPDP in India, evolving data residency requirements, and sector-specific mandates across Finance, Healthcare, and Government are forcing architectural rethinks for platforms that were built on simpler assumptions.
        </p>
      </div>

      <!-- Driver 2 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all">
        <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </span>
        <h3 class="text-lg font-bold text-white mb-2">AI Integration Is Now a Table Stake</h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          In 2026, buyers across every vertical expect intelligent automation, predictive analytics, and workflow AI to be part of the platform - not a future roadmap item. Platforms shipping without these are already behind.
        </p>
      </div>

      <!-- Driver 3 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all">
        <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
        </span>
        <h3 class="text-lg font-bold text-white mb-2">Integration Debt Is Killing Product Velocity</h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          Platforms built on siloed architectures are struggling to connect internal tools, third-party APIs, and data sources at the speed modern operations demand. Clean integration architecture is now a competitive advantage, not a technical detail.
        </p>
      </div>

      <!-- Driver 4 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all">
        <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
        </span>
        <h3 class="text-lg font-bold text-white mb-2">Legacy Modernisation Is the Dominant Spend Category</h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          From Banking to Manufacturing to Government, the dominant engineering budget in 2026 is not new builds - it is replacing legacy systems that are holding operational scale back. Staff augmentation and dedicated teams are the preferred model for this work.
        </p>
      </div>

      <!-- Driver 5 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52] hover:border-[#ffc835]/50 transition-all md:col-span-2 lg:col-span-1">
        <span class="w-12 h-12 rounded-2xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </span>
        <h3 class="text-lg font-bold text-white mb-2">Mobile-First User Expectations Have Reached B2B</h3>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          Field workers, logistics operators, and healthcare teams now expect the same UX quality from their work applications that they get from consumer apps. Platforms that ignore mobile experience are losing adoption from the teams they are built to serve.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- 6. WHY ENGINEERING TEAMS CHOOSE OAKYWEB -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#080B14] text-white font-figtree">
  <div class="contain">
    
    <div class="max-w-3xl mb-12">
      <span class="text-[#ffc835] font-bold text-xs uppercase tracking-widest">Engineering Excellence</span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mt-2">
        Why Engineering Teams <span class="text-[#ffc835]">Choose OakyWeb</span>
      </h2>
      <p class="text-slate-300 text-sm sm:text-base mt-3 leading-relaxed">
        Senior engineers, AI-first architecture, and full-stack ownership - applied with domain context built up across 15 industries. These are the reasons engineering teams keep choosing OakyWeb to build platforms that move real business metrics.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      
      <!-- Card 1 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52]">
        <div class="flex items-center gap-4 mb-3">
          <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center font-bold">01</span>
          <h3 class="text-lg font-bold text-white">AI-First Development</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          We build AI into the platform architecture from the start, not as a feature layer added after launch. Across every industry we work in, AI-first means the intelligence is embedded where it generates the most operational value - in the workflows your teams use every day, not in a dashboard that no one opens.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52]">
        <div class="flex items-center gap-4 mb-3">
          <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center font-bold">02</span>
          <h3 class="text-lg font-bold text-white">End-to-End Platform Engineering</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          We cover the full build - frontend, backend, infrastructure, integrations, QA, and deployment. Working with one team across the entire stack eliminates handoff gaps, reduces rework from integration mismatches, and keeps decision-making tight across the full build cycle.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52]">
        <div class="flex items-center gap-4 mb-3">
          <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center font-bold">03</span>
          <h3 class="text-lg font-bold text-white">Revenue-Focused Architecture</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          Every architectural decision we make maps back to a business outcome: faster onboarding, lower drop-off, higher transaction completion, reduced churn. We track those outcomes through the build so the decisions we make in sprint three reflect what actually happened in sprint one, not what was assumed in the original scope document.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="rounded-3xl bg-[#11172A] p-7 border border-[#232F52]">
        <div class="flex items-center gap-4 mb-3">
          <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center font-bold">04</span>
          <h3 class="text-lg font-bold text-white">Domain-Deep Expertise</h3>
        </div>
        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
          Our engineers have delivered platforms across 15 industries. They understand the compliance frameworks, third-party systems, and domain-specific data patterns before your project starts. That context reduces the time spent explaining your industry and increases the time spent building the right solution.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- 7. THE SERVICES WE DELIVER ACROSS THESE INDUSTRIES -->
<section class="py-16 sm:py-20 lg:py-24 bg-[#0A0D18] text-white border-t border-white/5 font-figtree">
  <div class="contain">
    
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-[#ffc835] font-bold text-xs uppercase tracking-widest">Full-Stack Capabilities</span>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold mt-2">
        The Services We Deliver <span class="text-[#ffc835]">Across These Industries</span>
      </h2>
      <p class="text-slate-400 text-sm sm:text-base mt-3">
        Our industry expertise is backed by deep capability in the platforms we build. Every engagement draws on one or more of the following service areas.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- 01. Artificial Intelligence -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">01</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Artificial Intelligence</h3>
          <p class="text-xs sm:text-sm text-slate-300">Strategic AI solutions built for explainability, precision, and real business outcomes.</p>
        </div>
      </div>

      <!-- 02. Digital Transformation -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">02</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Digital Transformation</h3>
          <p class="text-xs sm:text-sm text-slate-300">Modernise legacy systems, processes, and customer experiences through data-led transformation.</p>
        </div>
      </div>

      <!-- 03. Software Development -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">03</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Software Development</h3>
          <p class="text-xs sm:text-sm text-slate-300">End-to-end custom software engineered for scalability, security, and long-term performance.</p>
        </div>
      </div>

      <!-- 04. IOT Development -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">04</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">IOT Development</h3>
          <p class="text-xs sm:text-sm text-slate-300">Connected device ecosystems that generate real operational data and business value.</p>
        </div>
      </div>

      <!-- 05. Big Data Analytics Services -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">05</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Big Data Analytics Services</h3>
          <p class="text-xs sm:text-sm text-slate-300">Structured data pipelines and analytics platforms that transform volume into decisions.</p>
        </div>
      </div>

      <!-- 06. Cloud & DevOps Solutions -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">06</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Cloud &amp; DevOps Solutions</h3>
          <p class="text-xs sm:text-sm text-slate-300">Scalable cloud infrastructure, CI/CD pipelines, and DevOps culture from day one.</p>
        </div>
      </div>

      <!-- 07. Blockchain Development -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">07</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Blockchain Development</h3>
          <p class="text-xs sm:text-sm text-slate-300">Transparent, tamper-proof distributed systems for trust-critical operations and supply chains.</p>
        </div>
      </div>

      <!-- 08. IT Staff Augmentation Services -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">08</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">IT Staff Augmentation Services</h3>
          <p class="text-xs sm:text-sm text-slate-300">Senior engineers embedded in your team - no ramp-up overhead, immediate contribution.</p>
        </div>
      </div>

      <!-- 09. 360 Digital Marketing -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">09</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">360 Digital Marketing</h3>
          <p class="text-xs sm:text-sm text-slate-300">SEO, paid media, content, and analytics integrated into one performance-driven growth engine.</p>
        </div>
      </div>

      <!-- 10. Mobile App Development Services -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">10</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Mobile App Development Services</h3>
          <p class="text-xs sm:text-sm text-slate-300">Full-cycle iOS and Android development - strategy, design, build, and launch under one roof.</p>
        </div>
      </div>

      <!-- 11. Web Application Development -->
      <div class="p-6 rounded-2xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/60 transition-all flex items-start gap-4 md:col-span-2 lg:col-span-1">
        <span class="w-10 h-10 rounded-xl bg-[#ffc835]/15 text-[#ffc835] flex items-center justify-center shrink-0 font-bold">11</span>
        <div>
          <h3 class="text-base font-bold text-white mb-1">Web Application Development</h3>
          <p class="text-xs sm:text-sm text-slate-300">Modern, responsive web apps built with high-performance architectures and clean code.</p>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- 8. FINAL CTA BANNER -->
<section class="py-16 sm:py-20 bg-[#070A12] text-white relative overflow-hidden font-figtree">
  <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
    <div class="absolute -bottom-40 right-10 w-[500px] h-[500px] bg-[#ffc835]/10 blur-[180px] rounded-full"></div>
  </div>

  <div class="contain relative z-10 text-center max-w-3xl mx-auto">
    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-[11px] font-bold text-[#ffc835] tracking-widest uppercase mb-4">
      <span>Get Technical Scoping &amp; Architecture Roadmap</span>
    </div>

    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-4">
      Ready to Build Your <span class="text-[#ffc835]">Industry Platform</span>?
    </h2>

    <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-8 max-w-xl mx-auto">
      Speak directly with our senior software architects to review workflows, regulatory compliance, and delivery timelines.
    </p>

    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact-us.html" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-[#ffc835] hover:bg-white text-black font-bold text-sm sm:text-base transition-all hover:scale-105">
        <span>Book a Discovery Call</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
      </a>
      <a href="case-studies.html#Portfolio" class="px-7 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/20 text-white font-semibold text-sm sm:text-base transition-all">
        View Client Case Studies
      </a>
    </div>
  </div>
</section>

<?php include("components/footer.php"); ?>
