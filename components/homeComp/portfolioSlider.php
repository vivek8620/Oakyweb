<!-- ========================================== -->
<!-- INNOVATION / CASE STUDIES CIRCULAR 3D WHEEL -->
<!-- Spacious 5-Card Wide Circle Arc & Drag     -->
<!-- ========================================== -->

<style>
/* CSS Root Variables & Typography */
:root {
  --color-bg-dark: #000000;
  --color-yellow: #ffff37;
  --color-text-black: #111111;
  --color-text-white: #ffffff;
  --color-primary: #1a69fd;
  --color-primary-hover: #0c4fcb;
  --section-padding-fluid: clamp(48px, 6vw, 84px);
  --container-max-width: clamp(320px, 85vw, 1650px);
  --container-sm-max-width: 820px;
  --container-padding-inline: clamp(1rem, 4vw, 3rem);
  --font-family-primary: "Plus Jakarta Sans", sans-serif;
  --fs-base: clamp(0.875rem, 0.875rem + 0vw, 0.875rem);
  --fs-para: clamp(0.78rem, 0.75rem + 0.15vw, 0.88rem);
  --fs-subtitle: clamp(1.125rem, 0.9rem + 0.25vw, 1.25rem);
  --fs-h4: clamp(1.2rem, 1rem + 0.4vw, 1.45rem);
  --fs-h2: clamp(2rem, 1.5rem + 1.5vw, 2.75rem);
}

.appi-section {
  background-color: var(--color-bg-dark);
  padding-top: var(--section-padding-fluid);
  padding-bottom: var(--section-padding-fluid);
  position: relative;
  overflow: hidden;
  margin-top: -1px;
}

.layout-container-sm {
  max-width: var(--container-sm-max-width);
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--container-padding-inline);
  padding-right: var(--container-padding-inline);
}

.title-h2 {
  font-size: var(--fs-h2);
  line-height: 1.2;
}

.weight600 { font-weight: 600; }
.weight500 { font-weight: 500; }
.wht-text { color: #ffffff; }
.blk-text { color: #000000; }
.text-center { text-align: center; }
.mb0 { margin-bottom: 0; }
.head-gap { margin-top: clamp(20px, 3vw, 40px); }
.dp-flex { display: flex; }
.fdc { display: flex; flex-direction: column; }
.flex-center { align-items: center; }
.justify-center { justify-content: center; }
.justify-space-between { justify-content: space-between; }
.full-height { height: 100%; }
.gap8 { gap: 8px; }
.gap12 { gap: 12px; }
.gap16 { gap: 16px; }
.gap24 { gap: 24px; }
.grid-col2 { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); }
.br-28 { border-radius: 28px; }

/* Portfolio Slider Nav */
.portfolio-slider {
  position: relative;
  width: 100%;
}

.portfolio-slider__nav {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: clamp(20px, 2.5vw, 36px);
}

.portfolio-slider-arrow {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.16);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  flex-shrink: 0;
  color: #fff;
  outline: none;
}

.portfolio-slider-arrow:hover {
  background: #ffc835;
  color: #000;
  border-color: #ffc835;
  transform: scale(1.1);
}

.portfolio-slider-arrow:hover svg path {
  fill: #000000;
}

.portfolio-slider__nav-viewport {
  overflow-x: auto;
  scrollbar-width: none;
  -ms-overflow-style: none;
  max-width: 660px;
  padding: 6px 8px;
  scroll-behavior: smooth;
}

.portfolio-slider__nav-viewport::-webkit-scrollbar {
  display: none;
}

.portfolio-slider-button {
  padding: 8px 22px;
  border-radius: 9999px;
  background: rgba(255, 255, 255, 0.06);
  color: rgba(255, 255, 255, 0.72);
  border: 1px solid rgba(255, 255, 255, 0.12);
  font-size: 14px;
  font-weight: 500;
  white-space: nowrap;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  user-select: none;
  outline: none;
}

.portfolio-slider-button:hover {
  color: #ffffff;
  background: rgba(255, 255, 255, 0.15);
}

.portfolio-slider-button[data-portfolio-slider-control-status="active"] {
  background: #ffffff;
  color: #000000;
  font-weight: 700;
  transform: scale(1.05);
  box-shadow: 0 4px 20px rgba(255, 255, 255, 0.25);
  border-color: #ffffff;
}

/* 3D Circular Orbit Stage */
.portfolio-slider-collection {
  position: relative;
  width: 100%;
  height: 525px;
  overflow: hidden;
  user-select: none;
  cursor: grab;
  mask-image: linear-gradient(to bottom, #000 85%, rgba(0, 0, 0, 0.3) 96%, transparent 100%);
  -webkit-mask-image: linear-gradient(to bottom, #000 85%, rgba(0, 0, 0, 0.3) 96%, transparent 100%);
}

.portfolio-slider-collection.is-dragging {
  cursor: grabbing;
}

.portfolio-mouse-follower {
  pointer-events: none;
  position: fixed;
  z-index: 99999;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: rgba(20, 20, 25, 0.9);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.35);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 11px;
  font-weight: 800;
  letter-spacing: 2px;
  color: #ffffff;
  opacity: 0;
  transform: translate(-50%, -50%) scale(0.85);
  transition: opacity 0.25s ease, transform 0.12s ease-out, width 0.3s cubic-bezier(0.16, 1, 0.3, 1), height 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-radius 0.3s cubic-bezier(0.16, 1, 0.3, 1), background 0.3s ease;
  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.85);
  white-space: nowrap;
}

.portfolio-mouse-follower.is-visible {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
}

.portfolio-mouse-follower.is-active {
  transform: translate(-50%, -50%) scale(0.92);
  background: rgba(255, 200, 53, 0.95);
  color: #000;
  border-color: #ffc835;
}

/* Card Hover Morph into "View case study" pill */
.portfolio-mouse-follower.is-card-hover {
  width: auto;
  height: auto;
  padding: 12px 24px;
  border-radius: 9999px;
  background: rgba(18, 18, 22, 0.94);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.22);
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0px;
  color: #ffffff;
  box-shadow: 0 14px 35px rgba(0, 0, 0, 0.85);
}

.gsap-slider__list {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

/* 3 Large Visible Cards on Front Screen */
.gsap-slider__item {
  position: absolute;
  top: 10px;
  left: 50%;
  width: 410px;
  margin-left: -205px;
  height: 490px;
  transform-origin: 50% 1200px;
  user-select: none;
  will-change: transform, opacity;
  transition: filter 0.3s ease;
}

@media (max-width: 1280px) {
  .portfolio-slider-collection {
    height: 480px;
  }
  .gsap-slider__item {
    width: 360px;
    margin-left: -180px;
    height: 450px;
    transform-origin: 50% 1050px;
  }
}

@media (max-width: 768px) {
  .portfolio-slider-collection {
    height: 440px;
  }
  .gsap-slider__item {
    width: 300px;
    margin-left: -150px;
    height: 415px;
    transform-origin: 50% 850px;
  }
}

.portfolio-card {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  padding: 22px 22px 18px 22px;
  border-radius: 28px;
  text-decoration: none;
  box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.85);
  overflow: hidden;
  transition: box-shadow 0.3s ease;
  user-select: none;
  -webkit-user-select: none;
  cursor: pointer;
}

.portfolio-card * {
  user-select: none;
  -webkit-user-select: none;
  -webkit-user-drag: none;
}

.portfolio-card img {
  pointer-events: none;
  -webkit-user-drag: none;
}

.gsap-slider__item:hover .portfolio-card {
  box-shadow: 0 35px 80px -5px rgba(0, 0, 0, 0.95);
}

/* Rounded Case Study Card Themes */
.is-1click { 
  background: #FFFDF0; 
  color: #000; 
}
.is-credai { 
  background: #FDE797; 
  color: #000; 
}
.is-hrbabu { 
  background: #E2F8F5; 
  color: #000; 
}
.is-cytometry { 
  background: #0B132B; 
  color: #fff; 
  border: 1px solid rgba(255, 255, 255, 0.15); 
}

.appi-portfolio-card-logo {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: rgba(0, 0, 0, 0.05);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 6px;
}

.is-cytometry .appi-portfolio-card-logo {
  background: rgba(255, 255, 255, 0.12);
}

.appi-portfolio-card-logo img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

.appi-portfolio-card-title span {
  font-size: 1.35rem;
  font-weight: 700;
  line-height: 1.2;
}

.appi-portfolio-card-description p {
  font-size: 14px;
  line-height: 1.45;
  margin-top: 6px;
  opacity: 0.92;
}

.appi-portfolio-card-metrics {
  margin-top: 8px;
}

.appi-portfolio-card-metrics .subtitle {
  font-size: 1.55rem;
  font-weight: 700;
  line-height: 1.1;
  margin-bottom: 3px;
}

.appi-portfolio-card-metrics .fs-para {
  font-size: 13px;
  line-height: 1.35;
  opacity: 0.88;
}

.portfolio-card-footer {
  flex: 1;
  display: flex;
  flex-direction: column;
  margin-top: 12px;
  min-height: 0;
}

.appi-portfolio-card-image {
  width: 100%;
  height: 100%;
  flex: 1;
  min-height: 210px;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}

@media (max-width: 1280px) {
  .appi-portfolio-card-image {
    min-height: 190px;
  }
}

@media (max-width: 768px) {
  .appi-portfolio-card-image {
    min-height: 180px;
  }
}

.is-cytometry .appi-portfolio-card-image {
  background: rgba(255, 255, 255, 0.08);
}

.appi-portfolio-card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  border-radius: 20px;
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.portfolio-card:hover .appi-portfolio-card-image img {
  transform: scale(1.06);
}

/* Mobile Responsive */
.mobile-block { display: none; }
.desktop-block { display: block; }

@media (max-width: 768px) {
  .desktop-block { display: none; }
  .mobile-block { display: block; }
  .portfolio-mobile-carousel {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 16px;
    padding: 12px 16px 24px 16px;
    scrollbar-width: none;
  }
  .portfolio-mobile-carousel::-webkit-scrollbar { display: none; }
  .portfolio-mobile-carousel .item {
    flex: 0 0 86%;
    scroll-snap-align: center;
    height: 480px;
  }
}
</style>

<div class="dark-bg section appi-section">
  
  <div class="layout-container-sm">
    <div class="appi-portfolio-cards-slider-header">
      <h2 class="title-h2 weight600 line-anim wht-text mb0 text-center">
        <span>Innovation, Engineered by <span style="color:#ffc835;">OakyWeb</span></span>
      </h2>
    </div>
  </div>

  <div class="appi-portfolio-cards-slider head-gap">
    <div class="portfolio-slider">
      <div class="portfolio-slider__inner">
        
        <!-- DESKTOP 3D CIRCULAR CAROUSEL BLOCK -->
        <div class="desktop-block">
          <div data-portfolio-slider-rotate="20" data-portfolio-slider-init="" data-portfolio-slider-loop="true" data-portfolio-slider-center="true" class="gsap-slider" data-portfolio-drag-status="grab">
            
            <!-- NAV HEADER -->
            <div class="portfolio-slider__nav dp-flex gap12">
              <button class="portfolio-slider-arrow portfolio-slider-arrow-prev" id="appiPortPrev" data-portfolio-slider-control="prev" data-portfolio-slider-control-status="active" aria-label="Previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M11.6654 15L10.4987 13.7917L13.457 10.8333H3.33203V9.16667H13.457L10.4987 6.20833L11.6654 5L16.6654 10L11.6654 15Z" fill="white" transform="rotate(180 10 10)"></path>
                </svg>
              </button>

              <div class="portfolio-slider__nav-viewport" id="appiPortNavViewport">
                <div class="portfolio-slider__nav-track dp-flex gap12" id="appiPortNavTrack">
                  <button class="portfolio-slider-button fs-base weight600" data-portfolio-slider-control-status="active" data-portfolio-slider-control="1"><div class="button-label-wrapper"><span>1Click</span></div></button>
                  <button class="portfolio-slider-button fs-base weight600" data-portfolio-slider-control-status="not-active" data-portfolio-slider-control="2"><div class="button-label-wrapper"><span>Credai</span></div></button>
                  <button class="portfolio-slider-button fs-base weight600" data-portfolio-slider-control-status="not-active" data-portfolio-slider-control="3"><div class="button-label-wrapper"><span>HR BABU</span></div></button>
                  <button class="portfolio-slider-button fs-base weight600" data-portfolio-slider-control-status="not-active" data-portfolio-slider-control="4"><div class="button-label-wrapper"><span>Cytometry</span></div></button>
                </div>
              </div>

              <button class="portfolio-slider-arrow portfolio-slider-arrow-next" id="appiPortNext" data-portfolio-slider-control="next" data-portfolio-slider-control-status="active" aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M11.6654 15L10.4987 13.7917L13.457 10.8333H3.33203V9.16667H13.457L10.4987 6.20833L11.6654 5L16.6654 10L11.6654 15Z" fill="white"></path>
                </svg>
              </button>
            </div>

            <!-- 3D CIRCULAR WHEEL STAGE -->
            <div data-portfolio-slider-collection="" class="portfolio-slider-collection is-portfolio" id="appiPortStage">
              
              <!-- MOUSE FOLLOWER -->
              <div class="portfolio-mouse-follower fs-para weight500 wht-text" id="appiMouseFollower">DRAG</div>

              <!-- SLIDER LIST -->
              <div data-portfolio-slider-list="" class="gsap-slider__list" id="appiSliderList">
                
                <!-- 1. 1Click -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="case-studies.php" class="portfolio-card br-28 is-1click">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/1click.png" alt="1Click">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">1Click</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">1Click Mobile App makes insurance policy management simple, smart, and accessible anytime.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">100%</div>
                            <div class="fs-para weight500 blk-text">Digital Policy Tracking</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">3X</div>
                            <div class="fs-para weight500 blk-text">Faster Renewal & Alerts</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/1click.png" alt="1Click App">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 2. Credai -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="https://credai.org/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-credai">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/credai.png" alt="Credai">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">Credai</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">Creative corporate event management platform blending innovation with flawless execution.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">50K+</div>
                            <div class="fs-para weight500 blk-text">Event Attendees Managed</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">99.9%</div>
                            <div class="fs-para weight500 blk-text">Operational Coordination</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/credai.png" alt="Credai Events">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 3. HR BABU -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="case-studies.php" class="portfolio-card br-28 is-hrbabu">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/hrbabu.png" alt="HR BABU">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">HR BABU</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">Smart mobile app simplifying attendance, payroll, leaves, and enterprise workforce performance.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">85%</div>
                            <div class="fs-para weight500 blk-text">Workflow Automation</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">10X</div>
                            <div class="fs-para weight500 blk-text">HR Time Saved</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/hrbabu.png" alt="HR BABU App">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 4. Cytometry -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="https://tcs.res.in/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-cytometry">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/Cytometry.png" alt="Cytometry">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 wht-text mb0">Cytometry</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 wht-text">Digital ecosystem for organizing scientific conferences, medical summits, and academic collaboration.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 wht-text mb0">15+</div>
                            <div class="fs-para weight500 wht-text">Global Scientific Summits</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 wht-text mb0">100%</div>
                            <div class="fs-para weight500 wht-text">Paperless Coordination</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/Cytometry.png" alt="Cytometry Conference">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 5. 1Click (Loop 2) -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="case-studies.php" class="portfolio-card br-28 is-1click">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/1click.png" alt="1Click">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">1Click</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">1Click Mobile App makes insurance policy management simple, smart, and accessible anytime.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">100%</div>
                            <div class="fs-para weight500 blk-text">Digital Policy Tracking</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">3X</div>
                            <div class="fs-para weight500 blk-text">Faster Renewal & Alerts</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/1click.png" alt="1Click App">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 6. Credai (Loop 2) -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="https://credai.org/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-credai">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/credai.png" alt="Credai">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">Credai</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">Creative corporate event management platform blending innovation with flawless execution.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">50K+</div>
                            <div class="fs-para weight500 blk-text">Event Attendees Managed</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">99.9%</div>
                            <div class="fs-para weight500 blk-text">Operational Coordination</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/credai.png" alt="Credai Events">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 7. HR BABU (Loop 2) -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="case-studies.php" class="portfolio-card br-28 is-hrbabu">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/hrbabu.png" alt="HR BABU">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 blk-text mb0">HR BABU</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 blk-text">Smart mobile app simplifying attendance, payroll, leaves, and enterprise workforce performance.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">85%</div>
                            <div class="fs-para weight500 blk-text">Workflow Automation</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 blk-text mb0">10X</div>
                            <div class="fs-para weight500 blk-text">HR Time Saved</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/hrbabu.png" alt="HR BABU App">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <!-- 8. Cytometry (Loop 2) -->
                <div data-portfolio-slider-item="" class="gsap-slider__item">
                  <a href="https://tcs.res.in/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-cytometry">
                    <div class="fdc full-height">
                      <div class="portfolio-card-header fdc gap10">
                        <div class="appi-portfolio-title-header">
                          <div class="dp-flex gap12 flex-center">
                            <div class="appi-portfolio-card-logo">
                              <img src="assets/homeImages/Cytometry.png" alt="Cytometry">
                            </div>
                            <div class="appi-portfolio-card-title">
                              <span class="subtitle weight600 wht-text mb0">Cytometry</span>
                            </div>
                          </div>
                        </div>
                        <div class="appi-portfolio-card-description">
                          <p class="fs-para weight500 wht-text">Digital ecosystem for organizing scientific conferences, medical summits, and academic collaboration.</p>
                        </div>
                        <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                          <div class="fdc gap4">
                            <div class="subtitle weight600 wht-text mb0">15+</div>
                            <div class="fs-para weight500 wht-text">Global Scientific Summits</div>
                          </div>
                          <div class="fdc gap4">
                            <div class="subtitle weight600 wht-text mb0">100%</div>
                            <div class="fs-para weight500 wht-text">Paperless Coordination</div>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-card-footer mt-auto">
                        <div class="appi-portfolio-card-image">
                          <img src="assets/homeImages/Cytometry.png" alt="Cytometry Conference">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>

          </div>
        </div>

        <!-- MOBILE RESPONSIVE CAROUSEL -->
        <div class="mobile-block">
          <div class="portfolio-mobile-carousel">
            <!-- 1. 1Click -->
            <div class="item">
              <a href="case-studies.php" class="portfolio-card br-28 is-1click">
                <div class="fdc full-height">
                  <div class="portfolio-card-header fdc gap10">
                    <div class="appi-portfolio-title-header">
                      <div class="dp-flex gap12 flex-center">
                        <div class="appi-portfolio-card-logo"><img src="assets/homeImages/1click.png" alt="1Click"></div>
                        <div class="appi-portfolio-card-title"><span class="subtitle weight600 blk-text mb0">1Click</span></div>
                      </div>
                    </div>
                    <div class="appi-portfolio-card-description"><p class="fs-para weight500 blk-text">1Click Mobile App makes insurance policy management simple, smart, and accessible anytime.</p></div>
                    <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">100%</div><div class="fs-para weight500 blk-text">Digital Tracking</div></div>
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">3X</div><div class="fs-para weight500 blk-text">Faster Alerts</div></div>
                    </div>
                  </div>
                  <div class="portfolio-card-footer mt-auto">
                    <div class="appi-portfolio-card-image"><img src="assets/homeImages/1click.png" alt="1Click"></div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 2. Credai -->
            <div class="item">
              <a href="https://credai.org/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-credai">
                <div class="fdc full-height">
                  <div class="portfolio-card-header fdc gap10">
                    <div class="appi-portfolio-title-header">
                      <div class="dp-flex gap12 flex-center">
                        <div class="appi-portfolio-card-logo"><img src="assets/homeImages/credai.png" alt="Credai"></div>
                        <div class="appi-portfolio-card-title"><span class="subtitle weight600 blk-text mb0">Credai</span></div>
                      </div>
                    </div>
                    <div class="appi-portfolio-card-description"><p class="fs-para weight500 blk-text">Creative corporate event management platform blending innovation with flawless execution.</p></div>
                    <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">50K+</div><div class="fs-para weight500 blk-text">Attendees</div></div>
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">99.9%</div><div class="fs-para weight500 blk-text">Coordination</div></div>
                    </div>
                  </div>
                  <div class="portfolio-card-footer mt-auto">
                    <div class="appi-portfolio-card-image"><img src="assets/homeImages/credai.png" alt="Credai"></div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 3. HR BABU -->
            <div class="item">
              <a href="case-studies.php" class="portfolio-card br-28 is-hrbabu">
                <div class="fdc full-height">
                  <div class="portfolio-card-header fdc gap10">
                    <div class="appi-portfolio-title-header">
                      <div class="dp-flex gap12 flex-center">
                        <div class="appi-portfolio-card-logo"><img src="assets/homeImages/hrbabu.png" alt="HR BABU"></div>
                        <div class="appi-portfolio-card-title"><span class="subtitle weight600 blk-text mb0">HR BABU</span></div>
                      </div>
                    </div>
                    <div class="appi-portfolio-card-description"><p class="fs-para weight500 blk-text">Smart mobile app simplifying attendance, payroll, leaves, and enterprise workforce performance.</p></div>
                    <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">85%</div><div class="fs-para weight500 blk-text">Automation</div></div>
                      <div class="fdc gap4"><div class="subtitle weight600 blk-text mb0">10X</div><div class="fs-para weight500 blk-text">Time Saved</div></div>
                    </div>
                  </div>
                  <div class="portfolio-card-footer mt-auto">
                    <div class="appi-portfolio-card-image"><img src="assets/homeImages/hrbabu.png" alt="HR BABU"></div>
                  </div>
                </div>
              </a>
            </div>

            <!-- 4. Cytometry -->
            <div class="item">
              <a href="https://tcs.res.in/" target="_blank" rel="noopener noreferrer" class="portfolio-card br-28 is-cytometry">
                <div class="fdc full-height">
                  <div class="portfolio-card-header fdc gap10">
                    <div class="appi-portfolio-title-header">
                      <div class="dp-flex gap12 flex-center">
                        <div class="appi-portfolio-card-logo"><img src="assets/homeImages/Cytometry.png" alt="Cytometry"></div>
                        <div class="appi-portfolio-card-title"><span class="subtitle weight600 wht-text mb0">Cytometry</span></div>
                      </div>
                    </div>
                    <div class="appi-portfolio-card-description"><p class="fs-para weight500 wht-text">Digital ecosystem for organizing scientific conferences, medical summits, and academic collaboration.</p></div>
                    <div class="grid-col2 gap12 appi-portfolio-card-metrics">
                      <div class="fdc gap4"><div class="subtitle weight600 wht-text mb0">15+</div><div class="fs-para weight500 wht-text">Global Summits</div></div>
                      <div class="fdc gap4"><div class="subtitle weight600 wht-text mb0">100%</div><div class="fs-para weight500 wht-text">Paperless</div></div>
                    </div>
                  </div>
                  <div class="portfolio-card-footer mt-auto">
                    <div class="appi-portfolio-card-image"><img src="assets/homeImages/Cytometry.png" alt="Cytometry"></div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const stage = document.getElementById("appiPortStage");
  const cards = Array.from(document.querySelectorAll("#appiSliderList .gsap-slider__item"));
  const navButtons = Array.from(document.querySelectorAll("#appiPortNavTrack .portfolio-slider-button"));
  const prevArrow = document.getElementById("appiPortPrev");
  const nextArrow = document.getElementById("appiPortNext");
  const follower = document.getElementById("appiMouseFollower");
  
  if (!cards.length || !navButtons.length) return;

  const total = cards.length;
  const navCount = navButtons.length;
  
  function getAngleStep() {
    if (window.innerWidth <= 768) return 26;
    if (window.innerWidth <= 1280) return 28;
    return 30;
  }

  let targetPos = 0;
  let currentPos = 0; // continuous floating index
  let isDragging = false;
  let startX = 0;
  let lastX = 0;
  let dragVelocity = 0;
  let hasMovedFar = false;

  function updateCircleWheel() {
    const activeInt = Math.round(currentPos);
    const normalizedActive = ((activeInt % navCount) + navCount) % navCount;
    const angleStep = getAngleStep();

    // Update active nav button
    navButtons.forEach((btn, idx) => {
      if (idx === normalizedActive) {
        btn.setAttribute("data-portfolio-slider-control-status", "active");
      } else {
        btn.setAttribute("data-portfolio-slider-control-status", "not-active");
      }
    });

    // Update continuous circular rotation for each card
    cards.forEach((card, idx) => {
      let diff = idx - currentPos;
      while (diff > total / 2) diff -= total;
      while (diff < -total / 2) diff += total;

      const angle = diff * angleStep;
      const absDiff = Math.abs(diff);

      // Strictly 3 large cards visible on front screen (Center, Left, Right)
      const scale = Math.max(0.88, 1 - absDiff * 0.04);
      
      let opacity = 0;
      if (absDiff <= 1.05) {
        opacity = 1;
      } else if (absDiff <= 1.35) {
        opacity = Math.max(0, 1 - (absDiff - 1.05) * 3.3);
      } else {
        opacity = 0;
      }
      
      const zIndex = Math.round(100 - absDiff * 25);

      card.style.transform = `rotate(${angle.toFixed(2)}deg) scale(${scale.toFixed(3)})`;
      card.style.zIndex = zIndex;
      card.style.opacity = opacity.toFixed(3);

      if (absDiff < 0.45) {
        card.setAttribute("data-portfolio-slider-item-status", "active");
        card.style.pointerEvents = "auto";
        card.style.filter = "blur(0px) brightness(1)";
      } else if (absDiff < 1.35) {
        card.setAttribute("data-portfolio-slider-item-status", "inview");
        card.style.pointerEvents = "auto";
        card.style.filter = "blur(0px) brightness(0.97)";
      } else {
        card.setAttribute("data-portfolio-slider-item-status", "not-active");
        card.style.pointerEvents = "none";
        card.style.filter = "blur(2px)";
      }
    });
  }

  // Smooth Fluid Momentum & Snapping Physics Engine
  function animate() {
    // Continuously lerp currentPos towards targetPos for velvety smoothness
    const diff = targetPos - currentPos;
    currentPos += diff * 0.16;

    if (Math.abs(diff) < 0.0005 && !isDragging) {
      currentPos = targetPos;
    }

    updateCircleWheel();
    requestAnimationFrame(animate);
  }

  function setTarget(idx) {
    let diff = idx - currentPos;
    while (diff > total / 2) diff -= total;
    while (diff < -total / 2) diff += total;
    targetPos = currentPos + diff;
  }

  // Nav Arrows
  if (prevArrow) {
    prevArrow.addEventListener("click", () => {
      setTarget(Math.round(currentPos) - 1);
    });
  }
  if (nextArrow) {
    nextArrow.addEventListener("click", () => {
      setTarget(Math.round(currentPos) + 1);
    });
  }

  // Nav Buttons
  navButtons.forEach((btn, idx) => {
    btn.addEventListener("click", () => {
      const cur = Math.round(currentPos);
      let bestIdx = idx;
      let minDiff = 9999;
      for (let k = -2; k <= 2; k++) {
        let candidate = idx + k * navCount;
        if (Math.abs(candidate - cur) < minDiff) {
          minDiff = Math.abs(candidate - cur);
          bestIdx = candidate;
        }
      }
      setTarget(bestIdx);
    });
  });

  // Direct Card Hover & Click Engine
  cards.forEach((cardItem, idx) => {
    const cardLink = cardItem.querySelector(".portfolio-card");

    // Mouse hover morph into "View case study" pill follower
    cardItem.addEventListener("mouseenter", () => {
      if (follower) {
        follower.textContent = "View case study";
        follower.classList.add("is-card-hover");
      }
    });

    cardItem.addEventListener("mouseleave", () => {
      if (follower) {
        follower.textContent = "DRAG";
        follower.classList.remove("is-card-hover");
      }
    });

    cardItem.addEventListener("click", (e) => {
      e.preventDefault();
      
      // If dragged significantly, prevent accidental click
      if (hasMovedFar) {
        return;
      }

      const activeInt = ((Math.round(currentPos) % total) + total) % total;

      if (idx !== activeInt) {
        // If side card clicked, bring it smoothly to center
        setTarget(idx);
      } else {
        // If center card clicked, navigate only once
        if (cardLink) {
          const href = cardLink.getAttribute("href");
          const target = cardLink.getAttribute("target");
          if (href && href !== "#") {
            if (target === "_blank") {
              window.open(href, "_blank", "noopener,noreferrer");
            } else {
              window.location.href = href;
            }
          }
        }
      }
    });
  });

  // Real-time Smooth Circular Drag Engine
  if (stage) {
    // Mouse follower
    if (follower) {
      stage.addEventListener("mouseenter", () => follower.classList.add("is-visible"));
      stage.addEventListener("mouseleave", () => {
        follower.classList.remove("is-visible", "is-active");
        if (isDragging) {
          isDragging = false;
          stage.classList.remove("is-dragging");
          targetPos = Math.round(targetPos);
        }
      });
      window.addEventListener("mousemove", (e) => {
        follower.style.left = `${e.clientX}px`;
        follower.style.top = `${e.clientY}px`;
      });
    }

    // Mouse Drag
    stage.addEventListener("mousedown", (e) => {
      if (e.button !== 0) return; // only left click
      isDragging = true;
      hasMovedFar = false;
      startX = e.clientX;
      lastX = e.clientX;
      dragVelocity = 0;
      stage.classList.add("is-dragging");
      if (follower) follower.classList.add("is-active");
      e.preventDefault(); // prevent default browser drag/selection
    });

    window.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      const delta = e.clientX - lastX;
      lastX = e.clientX;

      if (Math.abs(e.clientX - startX) > 6) {
        hasMovedFar = true;
      }

      // Smooth damped delta
      const step = delta / 380;
      targetPos -= step;
      dragVelocity = 0.7 * dragVelocity + 0.3 * step;
    });

    window.addEventListener("mouseup", (e) => {
      if (!isDragging) return;
      isDragging = false;
      stage.classList.remove("is-dragging");
      if (follower) follower.classList.remove("is-active");

      // Butter-smooth momentum glide & snap
      const momentum = dragVelocity * 8.5;
      targetPos = Math.round(targetPos - momentum);
    });

    // Touch Support for Mobile / Tablets
    stage.addEventListener("touchstart", (e) => {
      isDragging = true;
      hasMovedFar = false;
      startX = e.touches[0].clientX;
      lastX = e.touches[0].clientX;
      dragVelocity = 0;
    }, { passive: true });

    stage.addEventListener("touchmove", (e) => {
      if (!isDragging) return;
      const clientX = e.touches[0].clientX;
      const delta = clientX - lastX;
      lastX = clientX;

      if (Math.abs(clientX - startX) > 6) {
        hasMovedFar = true;
      }

      const step = delta / 340;
      targetPos -= step;
      dragVelocity = 0.7 * dragVelocity + 0.3 * step;
    }, { passive: true });

    stage.addEventListener("touchend", () => {
      if (!isDragging) return;
      isDragging = false;
      const momentum = dragVelocity * 9;
      targetPos = Math.round(targetPos - momentum);
    }, { passive: true });
  }

  // Keyboard controls
  window.addEventListener("keydown", (e) => {
    if (document.activeElement.tagName === "INPUT" || document.activeElement.tagName === "TEXTAREA") return;
    if (e.key === "ArrowLeft") setTarget(Math.round(currentPos) - 1);
    if (e.key === "ArrowRight") setTarget(Math.round(currentPos) + 1);
  });

  // Start continuous loop
  animate();
});
</script>
