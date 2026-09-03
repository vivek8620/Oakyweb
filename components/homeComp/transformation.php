<!-- Beyond Development / Transformation Services Section with Smooth Scroll Animations -->
<section id="transformation-scroll-container" class="relative w-full lg:h-[280vh] bg-[#FBFBFC]">

  <!-- Sticky Viewport Area (Active on lg+ screens) -->
  <div class="lg:sticky lg:top-[80px] lg:h-[calc(100vh-80px)] w-full flex flex-col justify-between py-6 lg:py-8 px-4 sm:px-6 lg:px-12 xl:px-16 overflow-hidden">
    
    <!-- Top Header -->
    <div class="text-center max-w-4xl mx-auto mb-8 lg:mb-12">
      <h2 class="Abhaya text-3xl sm:text-4xl md:text-5xl lg:text-[54px] xl:text-[60px] font-medium text-[#111827] leading-tight tracking-tight">
        Beyond Development.<br />
        <span class="font-extrabold text-black">We Deliver Transformation.</span>
      </h2>
    </div>

    <!-- 4-Column Cards Wrapper -->
    <div class="w-full max-w-[1600px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-6 xl:gap-8 items-stretch">

      <!-- Column 1 (Base - Stays in place) -->
      <div id="scroll-card-1" class="w-full transition-transform duration-300 ease-out">
        <div class="group h-full flex flex-col justify-between bg-white border border-[#E5E7EB] hover:border-[#ffc835] rounded-[24px] p-6 sm:p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          
          <!-- Top: Icon & Content -->
          <div>
            <div class="w-14 h-14 rounded-2xl bg-[#F3F4F6] group-hover:bg-[#ffc835] flex items-center justify-center mb-8 transition-all duration-300 shadow-sm">
              <svg class="w-7 h-7 text-[#111827]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.322V19a2.25 2.25 0 002.25 2.25h9.5A2.25 2.25 0 0019 19v-4.678l-4.091-3.913a2.25 2.25 0 01-.659-1.591V3.104" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6M10 9h4" />
              </svg>
            </div>

            <h3 class="text-xl lg:text-[22px] font-bold text-[#111827] leading-snug mb-4">
              Strategic Technology<br class="hidden xl:inline" /> Consulting
            </h3>

            <p class="text-[15px] text-[#4B5563] leading-relaxed font-normal">
              From architecture audits to digital transformation strategy, we help leaders align technology with business goals for measurable ROI.
            </p>
          </div>

          <!-- Bottom: Button -->
          <div class="pt-8 mt-4">
            <a href="custom-software-solution.html" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 rounded-full border border-[#111827] text-[#111827] text-[13px] font-semibold transition-all duration-300 hover:bg-[#ffc835] hover:border-[#ffc835] hover:text-black group/btn">
              <span>View Consulting Services</span>
              <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>

        </div>
      </div>


      <!-- Column 2 (Scrolls up on scroll) -->
      <div id="scroll-card-2" class="w-full lg:translate-y-[260px] lg:opacity-30 transition-transform duration-100 ease-out will-change-transform">
        <div class="group h-full flex flex-col justify-between bg-white border border-[#E5E7EB] hover:border-[#ffc835] rounded-[24px] p-6 sm:p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          
          <!-- Top: Icon & Content -->
          <div>
            <div class="w-14 h-14 rounded-2xl bg-[#F3F4F6] group-hover:bg-[#ffc835] flex items-center justify-center mb-8 transition-all duration-300 shadow-sm">
              <svg class="w-7 h-7 text-[#111827]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
              </svg>
            </div>

            <h3 class="text-xl lg:text-[22px] font-bold text-[#111827] leading-snug mb-4">
              Digital Product<br class="hidden xl:inline" /> Development & Engineering
            </h3>

            <p class="text-[15px] text-[#4B5563] leading-relaxed font-normal">
              As your digital product engineering company, we handle the full lifecycle of software development—from cloud-native applications to complex ERP systems.
            </p>
          </div>

          <!-- Bottom: Button -->
          <div class="pt-8 mt-4">
            <a href="web-design-development.html" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 rounded-full border border-[#111827] text-[#111827] text-[13px] font-semibold transition-all duration-300 hover:bg-[#ffc835] hover:border-[#ffc835] hover:text-black group/btn">
              <span>View Product Engineering</span>
              <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>

        </div>
      </div>


      <!-- Column 3 (Scrolls up on scroll - 2nd wave) -->
      <div id="scroll-card-3" class="w-full lg:translate-y-[420px] lg:opacity-20 transition-transform duration-100 ease-out will-change-transform">
        <div class="group h-full flex flex-col justify-between bg-white border border-[#E5E7EB] hover:border-[#ffc835] rounded-[24px] p-6 sm:p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          
          <!-- Top: Icon & Content -->
          <div>
            <div class="w-14 h-14 rounded-2xl bg-[#F3F4F6] group-hover:bg-[#ffc835] flex items-center justify-center mb-8 transition-all duration-300 shadow-sm">
              <svg class="w-7 h-7 text-[#111827]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
              </svg>
            </div>

            <h3 class="text-xl lg:text-[22px] font-bold text-[#111827] leading-snug mb-4">
              AI, Data and<br class="hidden xl:inline" /> Analytics Solutions
            </h3>

            <p class="text-[15px] text-[#4B5563] leading-relaxed font-normal">
              We integrate advanced AI, generative AI, and machine learning models to automate operations, predict trends, and personalize customer experiences at scale.
            </p>
          </div>

          <!-- Bottom: Button -->
          <div class="pt-8 mt-4">
            <a href="mobile-application.html" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 rounded-full border border-[#111827] text-[#111827] text-[13px] font-semibold transition-all duration-300 hover:bg-[#ffc835] hover:border-[#ffc835] hover:text-black group/btn">
              <span>View AI Solutions</span>
              <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>

        </div>
      </div>


      <!-- Column 4 (Scrolls up on scroll - 3rd wave) -->
      <div id="scroll-card-4" class="w-full lg:translate-y-[580px] lg:opacity-10 transition-transform duration-100 ease-out will-change-transform">
        <div class="group h-full flex flex-col justify-between bg-white border border-[#E5E7EB] hover:border-[#ffc835] rounded-[24px] p-6 sm:p-8 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
          
          <!-- Top: Icon & Content -->
          <div>
            <div class="w-14 h-14 rounded-2xl bg-[#F3F4F6] group-hover:bg-[#ffc835] flex items-center justify-center mb-8 transition-all duration-300 shadow-sm">
              <svg class="w-7 h-7 text-[#111827]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.25-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
              </svg>
            </div>

            <h3 class="text-xl lg:text-[22px] font-bold text-[#111827] leading-snug mb-4">
              Cloud Operations<br class="hidden xl:inline" /> and Cybersecurity
            </h3>

            <p class="text-[15px] text-[#4B5563] leading-relaxed font-normal">
              As your IT service company, we engineer cloud-native environments rooted in Zero Trust principles, ensuring your infrastructure is as scalable as it is impenetrable.
            </p>
          </div>

          <!-- Bottom: Button -->
          <div class="pt-8 mt-4">
            <a href="web-hosting.html" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 rounded-full border border-[#111827] text-[#111827] text-[13px] font-semibold transition-all duration-300 hover:bg-[#ffc835] hover:border-[#ffc835] hover:text-black group/btn">
              <span>View Cybersecurity</span>
              <svg class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
          </div>

        </div>
      </div>

    </div>

    <!-- Bottom Center "View All Services" Pill Button -->
    <div class="text-center mt-8 lg:mt-10">
      <a href="start-project.php" class="inline-flex items-center gap-2 px-7 py-3 rounded-full border border-[#2563EB]/40 bg-[#EFF6FF] hover:bg-[#ffc835] hover:border-[#ffc835] hover:text-black text-[#2563EB] font-semibold text-sm transition-all duration-300 shadow-sm hover:shadow-md group">
        <span>View All Services</span>
        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
        </svg>
      </a>
    </div>

  </div>

</section>

<!-- Scroll Trigger Animation Script -->
<script>
  (function () {
    const container = document.getElementById("transformation-scroll-container");
    const card2 = document.getElementById("scroll-card-2");
    const card3 = document.getElementById("scroll-card-3");
    const card4 = document.getElementById("scroll-card-4");

    function updateCardScrolls() {
      if (!container || window.innerWidth < 1024) {
        // Reset transforms for smaller screens
        if (card2) { card2.style.transform = "none"; card2.style.opacity = "1"; }
        if (card3) { card3.style.transform = "none"; card3.style.opacity = "1"; }
        if (card4) { card4.style.transform = "none"; card4.style.opacity = "1"; }
        return;
      }

      const rect = container.getBoundingClientRect();
      const totalScrollable = container.offsetHeight - window.innerHeight;
      if (totalScrollable <= 0) return;

      const scrolled = -rect.top;
      const progress = Math.min(Math.max(scrolled / totalScrollable, 0), 1);

      // Easing function for organic smooth feel
      const ease = t => (t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t);

      // Card 2 animation: starts at 0.02, finishes at 0.38
      const p2 = Math.min(Math.max((progress - 0.02) / 0.35, 0), 1);
      const ease2 = ease(p2);
      const y2 = (1 - ease2) * 260;
      const op2 = 0.3 + ease2 * 0.7;
      if (card2) {
        card2.style.transform = `translate3d(0, ${y2.toFixed(1)}px, 0)`;
        card2.style.opacity = op2.toFixed(2);
      }

      // Card 3 animation: starts at 0.22, finishes at 0.65
      const p3 = Math.min(Math.max((progress - 0.22) / 0.38, 0), 1);
      const ease3 = ease(p3);
      const y3 = (1 - ease3) * 420;
      const op3 = 0.2 + ease3 * 0.8;
      if (card3) {
        card3.style.transform = `translate3d(0, ${y3.toFixed(1)}px, 0)`;
        card3.style.opacity = op3.toFixed(2);
      }

      // Card 4 animation: starts at 0.45, finishes at 0.95
      const p4 = Math.min(Math.max((progress - 0.45) / 0.42, 0), 1);
      const ease4 = ease(p4);
      const y4 = (1 - ease4) * 580;
      const op4 = 0.1 + ease4 * 0.9;
      if (card4) {
        card4.style.transform = `translate3d(0, ${y4.toFixed(1)}px, 0)`;
        card4.style.opacity = op4.toFixed(2);
      }
    }

    let ticking = false;
    function requestTick() {
      if (!ticking) {
        requestAnimationFrame(() => {
          updateCardScrolls();
          ticking = false;
        });
        ticking = true;
      }
    }

    window.addEventListener("scroll", requestTick, { passive: true });
    window.addEventListener("resize", requestTick, { passive: true });
    document.addEventListener("DOMContentLoaded", updateCardScrolls);
    setTimeout(updateCardScrolls, 100);
  })();
</script>
