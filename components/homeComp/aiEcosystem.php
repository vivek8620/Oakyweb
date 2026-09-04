<!-- AI Ecosystem Section - Full Width Edge-to-Edge Design (Appinventiv Style) -->
<section class="w-full bg-[#000000] py-12 sm:py-16 lg:py-20 xl:py-24 overflow-hidden relative" id="ai-ecosystem">

  <!-- Ambient Glow Effects -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-40 right-0 w-[650px] h-[650px] bg-purple-600/10 blur-[160px] rounded-full"></div>
    <div class="absolute -bottom-40 left-0 w-[650px] h-[650px] bg-blue-600/10 blur-[160px] rounded-full"></div>
  </div>

  <!-- Full-Width Fluid Container -->
  <div class="contain relative z-10">

    <!-- 2-Column Grid: Left Video / Right Content -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 xl:gap-12 items-stretch">

      <!-- Left Column: Video Container -->
      <div class="lg:col-span-5 w-full flex">
        <div class="relative w-full min-h-[380px] sm:min-h-[460px] lg:min-h-[560px] h-full rounded-[24px] lg:rounded-[32px] overflow-hidden border border-[#262626] bg-[#0A0A0A] shadow-2xl group flex flex-col">
          
          <!-- Video -->
          <video 
            class="w-full h-full object-cover flex-1 transform transition-transform duration-700 group-hover:scale-105"
            autoplay 
            muted 
            loop 
            playsinline
            preload="auto">
            <source src="assets/appi-home-inventivai/appi-home-inventivai-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>

          <!-- Subtle Video Overlay Gradient -->
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-black/40 pointer-events-none"></div>

          <!-- Top-Left Logo Overlay: InventivAi with Teal Sparkle -->
          <div class="absolute top-6 left-6 lg:top-8 lg:left-8 z-20 flex items-center">
            <span class="text-white font-bold text-2xl sm:text-3xl lg:text-4xl tracking-tight flex items-center">
              InventivA<span class="relative inline-block">i<span class="absolute -top-2 -right-2 text-[#38bdf8] text-sm lg:text-base">✦</span></span>
            </span>
          </div>

        </div>
      </div>

      <!-- Right Column: Heading, Description, 3 Cards & Action Buttons -->
      <div class="lg:col-span-7 flex flex-col justify-between h-full space-y-6 lg:space-y-8 lg:py-2">
        
        <!-- Top Heading & Description -->
        <div>
          <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[44px] xl:text-[50px] 2xl:text-[54px] text-white leading-[1.14] font-medium tracking-tight">
            Building AI Ecosystem<br />
            <span class="font-extrabold text-[#ffc835]">That Align With Your Organization</span>
          </h2>

          <p class="text-[15px] sm:text-[16px] text-[#A1A1AA] font-normal leading-relaxed mt-4 sm:mt-5 max-w-3xl">
            <strong class="text-white font-bold">InventivAI</strong> is our dedicated center of excellence, to help enterprises navigate the AI revolution. From custom LLMs to automated workflows, we move your business beyond the hype into practical, revenue-generating AI implementation.
          </p>
        </div>

        <!-- 3 Feature Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 xl:gap-5">

          <!-- Card 1: GenAI Integration -->
          <div class="group bg-[#0D0D0D] hover:bg-[#141414] border border-[#242424] hover:border-[#38bdf8]/50 rounded-[22px] p-5 sm:p-6 transition-all duration-300 hover:-translate-y-1 shadow-lg flex flex-col justify-between min-h-[220px]">
            <div>
              <!-- Icon Box -->
              <div class="w-11 h-11 rounded-xl bg-[#1A1A1A] border border-[#2E2E2E] flex items-center justify-center mb-4 text-white group-hover:border-[#38bdf8] transition-colors duration-300">
                <svg class="w-5 h-5 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                </svg>
              </div>

              <h3 class="text-white font-semibold text-[17px] mb-3.5 leading-snug">
                GenAI Integration
              </h3>

              <!-- Checklist -->
              <ul class="space-y-2.5 text-[13.5px] text-white/90">
                <li class="flex items-center gap-2">
                  <span class="text-[#38bdf8] font-bold text-xs tracking-tighter">✓✓</span>
                  <span>AI Agents</span>
                </li>
                <li class="flex items-center gap-2">
                  <span class="text-[#38bdf8] font-bold text-xs tracking-tighter">✓✓</span>
                  <span>Chatbots</span>
                </li>
                <li class="flex items-center gap-2">
                  <span class="text-[#38bdf8] font-bold text-xs tracking-tighter">✓✓</span>
                  <span>Coding Assistants</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Card 2: Computer Vision -->
          <div class="group bg-[#0D0D0D] hover:bg-[#141414] border border-[#242424] hover:border-[#38bdf8]/50 rounded-[22px] p-5 sm:p-6 transition-all duration-300 hover:-translate-y-1 shadow-lg flex flex-col justify-between min-h-[220px]">
            <div>
              <!-- Icon Box -->
              <div class="w-11 h-11 rounded-xl bg-[#1A1A1A] border border-[#2E2E2E] flex items-center justify-center mb-4 text-white group-hover:border-[#38bdf8] transition-colors duration-300">
                <svg class="w-5 h-5 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>

              <h3 class="text-white font-semibold text-[17px] mb-3.5 leading-snug">
                Computer Vision
              </h3>

              <!-- Checklist -->
              <ul class="space-y-2.5 text-[13.5px] text-white/90">
                <li class="flex items-center gap-2">
                  <span class="text-[#38bdf8] font-bold text-xs tracking-tighter">✓✓</span>
                  <span>Quality Control</span>
                </li>
                <li class="flex items-center gap-2">
                  <span class="text-[#38bdf8] font-bold text-xs tracking-tighter">✓✓</span>
                  <span>Facial Recognition</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Card 3: Data Engineering -->
          <div class="group bg-[#0D0D0D] hover:bg-[#141414] border border-[#242424] hover:border-[#38bdf8]/50 rounded-[22px] p-5 sm:p-6 transition-all duration-300 hover:-translate-y-1 shadow-lg flex flex-col justify-between min-h-[220px]">
            <div>
              <!-- Icon Box -->
              <div class="w-11 h-11 rounded-xl bg-[#1A1A1A] border border-[#2E2E2E] flex items-center justify-center mb-4 text-white group-hover:border-[#38bdf8] transition-colors duration-300">
                <svg class="w-5 h-5 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.8">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 5.625c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                </svg>
              </div>

              <h3 class="text-white font-semibold text-[17px] mb-3.5 leading-snug">
                Data Engineering
              </h3>

              <!-- Description -->
              <p class="text-[13.5px] text-white/90 leading-snug flex items-start gap-2">
                <span class="text-[#38bdf8] font-bold text-xs tracking-tighter mt-0.5">✓✓</span>
                <span>Building the infrastructure that feeds the AI.</span>
              </p>
            </div>
          </div>

        </div>

        <!-- Bottom Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center gap-4 pt-2">
          <a href="contact-us.html" class="w-full sm:w-auto text-center px-8 py-3.5 rounded-full bg-white hover:bg-[#ffc835] text-black font-semibold text-[14.5px] transition-all duration-300 shadow-md hover:shadow-xl hover:scale-105">
            Book Your AI Advisory Session
          </a>

          <a href="start-project.php" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full border border-white/60 hover:border-[#ffc835] text-white hover:text-[#ffc835] font-semibold text-[14.5px] transition-all duration-300 hover:bg-white/5">
            <span>Discover InventivAI</span>
            <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
            </svg>
          </a>
        </div>

      </div>

    </div>

  </div>
</section>
