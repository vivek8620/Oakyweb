<?php
/**
 * OakyWeb Clean Coming Soon Page Template
 * Navbar at top, Coming Soon banner image in middle, Footer at bottom.
 */
function renderComingSoonPage() {
?>
  <section class="contain2 py-10 md:py-16 bg-[#0B0F19] min-h-[70vh] flex items-center justify-center">
    <div class="contain text-center">
      <div class="relative overflow-hidden rounded-2xl md:rounded-3xl border border-[#ffc835]/40 shadow-2xl group max-w-5xl mx-auto">
        <!-- Glow Effect behind banner -->
        <div class="absolute -inset-1 bg-gradient-to-r from-[#ffc835]/50 via-amber-400/30 to-[#ffc835]/50 rounded-2xl md:rounded-3xl blur opacity-40 group-hover:opacity-75 transition duration-500"></div>
        
        <!-- Banner Image -->
        <div class="relative bg-[#0F1420] rounded-2xl md:rounded-3xl overflow-hidden">
          <img src="assets/coming-soon-banner.jpg" alt="Oaky Web Coming Soon" class="w-full h-auto object-cover max-h-[650px] mx-auto block shadow-2xl transform transition duration-700 hover:scale-[1.01]" />
        </div>
      </div>
    </div>
  </section>
<?php
}
?>
