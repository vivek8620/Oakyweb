<?php
/**
 * OakyWeb Premium Industry Page Template
 * Complete replica of the Akoode Industry Suite architecture styled in OakyWeb's brand theme.
 * Brand colors: #ffc835 (Gold Accent), #0A0D18 (Primary Dark), #11172A (Card Dark), #F8FAFF (Light Section)
 */

function renderIndustryPage($data) {
  $name = $data['name'] ?? 'Healthcare';
  $slug = strtolower(str_replace([' & ', ' ', '/'], ['-', '-', '-'], $name));
  $badge = $data['badge'] ?? 'CUSTOM SOFTWARE DEVELOPMENT';
  $heading = $data['heading'] ?? 'Custom ' . $name . ' Software Development Company';
  $highlight = $data['highlight'] ?? '';
  $description = $data['description'] ?? 'We build enterprise platforms, modern web and mobile apps, and AI-powered tools engineered specifically for ' . $name . ' organisations.';
  $compliance = $data['compliance'] ?? ['ISO 9001:2015', 'AI-First Architecture', '24/7 Production SLA', 'Enterprise Grade'];
  
  // Image resolution for all 15 industries
  $image = $data['image'] ?? '';
  if (empty($image)) {
    $industryImageMap = [
      'real-estate' => 'assets/industries/industries/Real Estate.jpeg',
      'healthcare' => 'assets/industries/industries/Healthcare.jpg',
      'retail' => 'assets/industries/industries/Retail & E-Commerce.jpg',
      'commerce' => 'assets/industries/industries/Retail & E-Commerce.jpg',
      'media' => 'assets/industries/industries/Media & Entertainment.jpeg',
      'entertainment' => 'assets/industries/industries/Media & Entertainment.jpeg',
      'finance' => 'assets/industries/industries/Finance & Banking.jpeg',
      'banking' => 'assets/industries/industries/Finance & Banking.jpeg',
      'auto' => 'assets/industries/industries/Automotive.jpeg',
      'agri' => 'assets/industries/industries/Agriculture.jpeg',
      'telecom' => 'assets/industries/industries/Telecommunication.jpeg',
      'manufactur' => 'assets/industries/industries/Manufacturing.jpeg',
      'public' => 'assets/industries/industries/Public Sector & Govt.jpeg',
      'govt' => 'assets/industries/industries/Public Sector & Govt.jpeg',
      'energy' => 'assets/industries/industries/Energy & Utilities.jpeg',
      'utilit' => 'assets/industries/industries/Energy & Utilities.jpeg',
      'travel' => 'assets/industries/industries/Travel & Hospitality.jpeg',
      'hospitality' => 'assets/industries/industries/Travel & Hospitality.jpeg',
      'education' => 'assets/industries/industries/Education & E-Learning.jpeg',
      'elearning' => 'assets/industries/industries/Education & E-Learning.jpeg',
      'insurance' => 'assets/industries/industries/Insurance.jpeg',
      'logistic' => 'assets/industries/industries/Logistics & Supply Chain.jpeg',
      'supply' => 'assets/industries/industries/Logistics & Supply Chain.jpeg',
    ];

    foreach ($industryImageMap as $key => $imgPath) {
      if (strpos($slug, $key) !== false && file_exists($imgPath)) {
        $image = $imgPath;
        break;
      }
    }
    if (empty($image)) {
      if (file_exists("assets/industries/industries/{$name}.jpeg")) {
        $image = "assets/industries/industries/{$name}.jpeg";
      } elseif (file_exists("assets/industries/industries/{$name}.jpg")) {
        $image = "assets/industries/industries/{$name}.jpg";
      } elseif (file_exists("assets/industries/{$slug}.jpg")) {
        $image = "assets/industries/{$slug}.jpg";
      } else {
        $image = file_exists("assets/industries/industries/Healthcare.jpg") ? "assets/industries/industries/Healthcare.jpg" : "assets/industries/healthcare.jpg";
      }
    }
  }

  // 1. Challenges / Pain Points
  $challengesTitle = $data['challenges_title'] ?? "Why {$name} Organisations Are Losing Time and Revenue to Outdated Systems";
  $challengesSubtitle = $data['challenges_subtitle'] ?? "Legacy systems, disconnected data, and manual workflows cost {$name} organisations in ways that show up in operating budgets every single month.";
  $challenges = $data['challenges'] ?? [
    [
      'title' => 'Compliance Risk From Manual Processes',
      'desc' => 'Regulatory violations start with manual data handling, unencrypted file transfers, and audit records stored in spreadsheets. Penalties can run into millions.'
    ],
    [
      'title' => 'No Interoperability Between Systems',
      'desc' => 'Core operational systems operate in silos without connected APIs. Staff waste hours re-entering data between disconnected platforms.'
    ],
    [
      'title' => 'Infrastructure That Cannot Scale',
      'desc' => 'Legacy servers and bolted-on third party tools break under high concurrent user load, causing downtime and lost revenue opportunities.'
    ],
    [
      'title' => 'No Predictive or AI Capability',
      'desc' => 'Organisations lack intelligent pattern recognition and automated forecasting. Decision makers operate on outdated historical data.'
    ],
    [
      'title' => 'Staff Burnout From Administrative Overload',
      'desc' => 'Teams spend over 30% of their day on manual reporting and administrative busywork that intelligent software automation easily eliminates.'
    ],
    [
      'title' => 'Software That Cannot Support Multi-Site Growth',
      'desc' => 'Expanding to new branch locations requires rebuilding operations from scratch instead of scaling seamlessly across multi-tenant architectures.'
    ]
  ];

  // Floating challenges badges for the visual
  $challengeBadges = $data['challenge_badges'] ?? [
    ['title' => 'Fragmented Data Silos', 'desc' => 'Records split across disparate systems.'],
    ['title' => 'Manual Scheduling & Errors', 'desc' => 'Billing mistakes and operational delays.'],
    ['title' => 'No Real-Time Visibility', 'desc' => 'Managers making decisions on stale data.'],
    ['title' => 'Customer Experience Friction', 'desc' => 'Complex manual booking and slow response.']
  ];

  // 2. Engineering Framework Steps (01-04)
  $frameworkTitle = $data['framework_title'] ?? "We Build {$name} Technology That Cuts Costs, Reduces Errors, and Scales With You";
  $frameworkSubtitle = $data['framework_subtitle'] ?? "We are a team of senior software engineers who specialise in custom {$name} platforms, AI integration, and resilient cloud architectures.";
  $frameworkSteps = $data['framework_steps'] ?? [
    [
      'num' => '01',
      'title' => 'AI-First Development',
      'desc' => "We architect artificial intelligence and machine learning models directly into your {$name} platform from day one, enabling automated workflows and predictive analytics."
    ],
    [
      'num' => '02',
      'title' => 'End-to-End Platform Engineering',
      'desc' => "We design, build, and deploy complete solutions from web and mobile apps to backend microservices, billing engines, and real-time operational dashboards."
    ],
    [
      'num' => '03',
      'title' => 'Revenue-Focused Architecture',
      'desc' => "Every engineering decision is evaluated for direct business ROI—streamlining transaction funnels, reducing administrative headcount costs, and maximizing user retention."
    ],
    [
      'num' => '04',
      'title' => 'Domain-Deep Expertise',
      'desc' => "Our vertical engineering pods understand specific regulatory standards, security compliance protocols, and specialized data integration requirements in {$name}."
    ]
  ];

  // 3. Services Grid (8 Cards)
  $servicesTitle = $data['services_title'] ?? "{$name} Software Development Services Built for Operational Impact";
  $servicesSubtitle = $data['services_subtitle'] ?? "From custom enterprise software to AI-driven products, we build every system an ambitious {$name} organisation needs to lead their industry.";
  $services = $data['services'] ?? ($data['capabilities'] ?? [
    ['title' => "Custom {$name} ERP & Core Platforms", 'desc' => 'Tailored software architectures built around your exact operational workflows, eliminating generic software compromises.'],
    ['title' => 'Mobile Applications (iOS & Android)', 'desc' => 'Native and cross-platform apps built with Flutter and React Native for exceptional user engagement and offline-first reliability.'],
    ['title' => 'Cloud Migration & Modernization', 'desc' => 'Migrate legacy monolithic software into containerized microservices on AWS, Azure, or GCP with zero data loss.'],
    ['title' => 'AI Diagnostics & Predictive Analytics', 'desc' => 'Custom machine learning models, natural language processing, and automated decision-support intelligence.'],
    ['title' => 'Real-Time Tracking & IoT Telemetry', 'desc' => 'Connected hardware, smart sensor telemetry, and live geofenced tracking pipelines with sub-second latency.'],
    ['title' => 'Enterprise API & System Integration', 'desc' => 'Secure webhook and REST/GraphQL API bridges connecting CRM, billing, accounting, and third-party partner portals.'],
    ['title' => "Multi-Tenant SaaS Product Engineering", 'desc' => 'Turn your proprietary domain expertise into a scalable subscription SaaS product with automated tenant provisioning.'],
    ['title' => 'Security, Compliance & Audit Readiness', 'desc' => 'End-to-end data encryption, role-based access control (RBAC), and rigorous automated security compliance verification.']
  ]);

  // 4. Workflow / Operational Timeline (6 Steps)
  $workflowTitle = $data['workflow_title'] ?? "Software Built Around How Your {$name} Business Actually Works";
  $workflowSubtitle = $data['workflow_subtitle'] ?? "We design custom software around your real-world team workflows, compliance parameters, and multi-year scale milestones.";
  $workflowSteps = $data['workflow_steps'] ?? [
    [
      'num' => '01',
      'title' => "Operations & ERP Suite",
      'tagline' => 'Operations, Multi-Department, Scale',
      'points' => ['Multi-location sync', 'Role-based access', 'Billing integration', 'Live dashboards']
    ],
    [
      'num' => '02',
      'title' => "Digital Customer Portal",
      'tagline' => 'Self-Service, Payments, Mobile',
      'points' => ['Instant onboarding', 'Online payment gateways', 'Automated notifications', 'Digital documents']
    ],
    [
      'num' => '03',
      'title' => "Core Record & Audit Engine",
      'tagline' => 'Interoperability, Security, Logs',
      'points' => ['Encrypted data vault', 'Comprehensive audit trails', 'Third-party API sync', 'Automated reporting']
    ],
    [
      'num' => '04',
      'title' => "AI Decision Support Engine",
      'tagline' => 'Machine Learning, Predictive Models',
      'points' => ['Trend forecasting', 'Anomaly detection', 'Automated risk scoring', 'Smart recommendations']
    ],
    [
      'num' => '05',
      'title' => "Mobile Field & Staff Apps",
      'tagline' => 'Field Operations, Real-Time Sync',
      'points' => ['Offline data cache', 'GPS geolocation', 'Instant task dispatch', 'Direct messaging']
    ],
    [
      'num' => '06',
      'title' => "Multi-Tenant SaaS Platform",
      'tagline' => 'Subscription Engine, White-Label',
      'points' => ['Tenant data isolation', 'Usage-based billing', 'Custom domain routing', 'Executive telemetry']
    ]
  ];

  // 5. Revenue Impact Grid (6 Cards)
  $revenueTitle = $data['revenue_title'] ?? "What a Well-Built {$name} Platform Actually Does for Your Revenue";
  $revenueSubtitle = $data['revenue_subtitle'] ?? "Technology is not an overhead expense. It is the core operating system that determines how fast you scale and how much margin you capture.";
  $revenuePoints = $data['revenue_points'] ?? [
    [
      'title' => 'Reduced Transaction & Invoicing Errors',
      'desc' => 'Automated reconciliation and verified payment pipelines eliminate manual calculation leaks and speed up cash flow cycles.'
    ],
    [
      'title' => 'Lower Administrative Headcount Costs',
      'desc' => 'Intelligent workflow automation gives your teams back dozens of hours every week previously lost to repetitive spreadsheet entries.'
    ],
    [
      'title' => 'Higher Customer Retention & Lifetime Value',
      'desc' => 'Frictionless digital self-service portals and mobile applications build brand loyalty and significantly reduce churn rates.'
    ],
    [
      'title' => 'Investor & Stakeholder Confidence',
      'desc' => 'Real-time telemetry and transparent reporting dashboards give board members and institutional investors rock-solid operational proof.'
    ],
    [
      'title' => 'New High-Margin Digital Revenue Streams',
      'desc' => 'Monetize digital self-service, subscription premium features, and API integrations that your existing legacy setup could never support.'
    ],
    [
      'title' => 'Security & Compliance as a Selling Point',
      'desc' => 'Enterprise-grade encryption and audited security certifications allow you to win lucrative enterprise B2B contracts effortlessly.'
    ]
  ];

  // 6. FAQs
  $faqs = $data['faqs'] ?? [
    [
      'q' => "How quickly can your {$name} software development team start?",
      'a' => "For dedicated pods and sprint engagements, our senior engineering pods can mobilize within 5 business days. Fixed-scope projects kick off with a 1-to-2 week technical discovery phase to map architectural workflows, data contracts, and integration points."
    ],
    [
      'q' => "What does a custom {$name} software development project typically cost?",
      'a' => "Scope, regulatory compliance, and architectural complexity drive costs. A focused MVP or client portal typically ranges between $20,000 to $45,000, while a comprehensive enterprise ERP or AI platform is scoped in milestone phases during discovery. We provide clear milestone billing with zero hidden costs."
    ],
    [
      'q' => "Is your software compliant with industry security standards?",
      'a' => "Yes. We build under strict global standards (HIPAA, SOC 2, ISO 27001, GDPR, and DPDP ready). End-to-end TLS encryption, role-based access controls, comprehensive audit logging, and automated vulnerability scanning are built into the foundation from day one."
    ],
    [
      'q' => "Can you integrate with our existing legacy systems and databases?",
      'a' => "Yes. We specialize in API middleware engineering and data migration pipelines. We connect with legacy SQL/Oracle databases, third-party ERPs, payment providers, and proprietary hardware without causing operational downtime."
    ],
    [
      'q' => "Who owns the intellectual property (IP) and source code?",
      'a' => "You own 100% of the source code, intellectual property, design assets, and database schemas from day one. Full copyright assignment agreements are executed prior to project kickoff, with no vendor lock-in or recurring licensing fees."
    ],
    [
      'q' => "Do you provide post-launch maintenance and continuous support?",
      'a' => "Yes. We provide 24/7 production SLAs, security patching, cloud infrastructure monitoring, database optimization, and continuous feature sprints to ensure your platform evolves seamlessly alongside your business growth."
    ]
  ];
?>

<!-- ========================================== -->
<!-- 1. HERO SECTION                            -->
<!-- ========================================== -->
<section class="relative overflow-hidden bg-[#0A0D18] pt-8 pb-16 lg:pt-12 lg:pb-24 text-white">
  <!-- Ambient Background Gradients -->
  <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
    <div class="absolute -top-40 right-1/4 w-[750px] h-[750px] bg-[#ffc835]/10 blur-[190px] rounded-full"></div>
    <div class="absolute -bottom-40 left-10 w-[650px] h-[650px] bg-[#3B82F6]/10 blur-[190px] rounded-full"></div>
  </div>

  <div class="contain relative z-10">
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="mb-6 lg:mb-8">
      <ol class="inline-flex items-center gap-2 text-xs sm:text-sm font-medium text-slate-400">
        <li><a href="./" class="hover:text-white transition-colors">Home</a></li>
        <li class="text-slate-600">&gt;</li>
        <li><a href="./#industries-we-serve" class="hover:text-white transition-colors">Industries</a></li>
        <li class="text-slate-600">&gt;</li>
        <li class="text-white font-semibold"><?php echo htmlspecialchars($name); ?></li>
      </ol>
    </nav>

    <!-- Main 2-Column Grid -->
    <div class="grid items-center gap-12 lg:gap-14 lg:grid-cols-12">
      
      <!-- Left Column: Heading, Description, Buttons & 3 Stats -->
      <div class="lg:col-span-6 flex flex-col justify-between">
        <div>
          <!-- Main Heading matching Screenshots with perfect line-height & gold highlight -->
          <h1 class="text-3xl sm:text-4xl lg:text-[46px] xl:text-[52px] font-extrabold leading-[1.14] sm:leading-[1.12] tracking-tight text-white">
            <?php echo htmlspecialchars($heading); ?>
            <?php if (!empty($highlight)): ?>
              <span class="block mt-1 sm:mt-1.5 text-[#ffc835] font-extrabold">
                <?php echo htmlspecialchars($highlight); ?>
              </span>
            <?php endif; ?>
          </h1>

          <p class="mt-6 text-[15px] sm:text-[16.5px] text-slate-300 font-normal leading-[1.65] max-w-xl">
            <?php echo htmlspecialchars($description); ?>
          </p>

          <!-- CTA Action Buttons -->
          <div class="mt-8 flex flex-wrap items-center gap-4">
            <a href="contact-us.html" class="inline-flex items-center gap-2 rounded-full px-7 py-3.5 bg-[#ffc835] hover:bg-white text-black font-semibold text-[14.5px] transition-all duration-300 hover:scale-105">
              <span>Book a Free Strategy Call</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="case-studies.html#Portfolio" class="inline-flex items-center gap-2 rounded-full px-7 py-3.5 bg-white/5 hover:bg-white/10 border border-white/20 text-white font-semibold text-[14.5px] transition-all duration-300">
              <span>View Our Work</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Right Column: Hero Image -->
      <div class="lg:col-span-6 relative mt-6 lg:mt-0 flex items-center justify-center">
        
        <!-- Main Image Container with Equal Uniform Height -->
        <div class="relative w-full h-[360px] sm:h-[440px] lg:h-[480px] xl:h-[500px] rounded-3xl overflow-hidden shadow-2xl border border-white/15 group">
          <img 
            src="<?php echo htmlspecialchars($image); ?>" 
            alt="<?php echo htmlspecialchars($name); ?> Software Engineering" 
            class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700" 
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20 pointer-events-none"></div>
        </div>

      </div>

    </div>

  </div>
</section>


<!-- ========================================== -->
<!-- 2. PAIN POINTS / CHALLENGES SECTION        -->
<!-- ========================================== -->
<section class="bg-[#F8FAFF] py-16 sm:py-20 lg:py-24 text-slate-900">
  <div class="contain">
    <div class="mb-10 max-w-3xl">
      <span class="text-xs font-bold uppercase tracking-widest text-[#B45309]">Overcoming Operational Bottlenecks</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight text-[#111827] mt-2">
        <?php echo htmlspecialchars($challengesTitle); ?>
      </h2>
      <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
        <?php echo htmlspecialchars($challengesSubtitle); ?>
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
      
      <!-- Left Visual Container with Floating Challenge Tags -->
      <div class="lg:col-span-5 relative bg-[#0F172A] rounded-3xl p-6 sm:p-8 text-white border border-slate-800 shadow-xl overflow-hidden flex flex-col justify-between min-h-[440px]">
        <div class="absolute inset-0 bg-gradient-to-br from-[#ffc835]/10 via-transparent to-[#3B82F6]/10 pointer-events-none"></div>
        
        <div>
          <h3 class="text-xl font-bold text-white mb-2">The Hidden Cost of Legacy Workflows</h3>
          <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
            Outdated software creates data silos, increases compliance vulnerability, and frustrates customers who demand real-time digital access.
          </p>
        </div>

        <!-- 4 Badges in Grid with Distinct Icons -->
        <?php 
        $badgeDefaultIcons = [
          'fa-solid fa-database',
          'fa-solid fa-calendar-xmark',
          'fa-solid fa-eye-slash',
          'fa-solid fa-user-xmark',
        ];
        ?>
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-3 relative z-10">
          <?php foreach ($challengeBadges as $bIdx => $cb): ?>
            <div class="p-3.5 rounded-2xl bg-white/5 border border-white/10 hover:border-[#ffc835]/50 transition-colors">
              <div class="flex items-center gap-2 mb-1.5">
                <span class="w-5 h-5 rounded-md bg-[#ffc835]/20 text-[#ffc835] flex items-center justify-center shrink-0 text-[10px]">
                  <i class="<?php echo $cb['icon'] ?? ($badgeDefaultIcons[$bIdx % count($badgeDefaultIcons)] ?? 'fa-solid fa-circle-exclamation'); ?>"></i>
                </span>
                <p class="text-[12px] font-bold text-white leading-tight"><?php echo htmlspecialchars($cb['title']); ?></p>
              </div>
              <p class="text-[10.5px] text-slate-400 leading-tight"><?php echo htmlspecialchars($cb['desc']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-6 pt-4 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400">
          <span>Enterprise Modernization</span>
          <span class="text-[#ffc835] font-semibold">Zero-Downtime Migration →</span>
        </div>
      </div>

      <!-- Right Column: 6 Challenge Cards -->
      <?php 
      $challengeIcons = [
        'fa-solid fa-shield-halved',
        'fa-solid fa-network-wired',
        'fa-solid fa-server',
        'fa-solid fa-brain',
        'fa-solid fa-user-clock',
        'fa-solid fa-building-circle-arrow-right',
      ];
      ?>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php foreach ($challenges as $idx => $item): ?>
          <div class="p-5 sm:p-6 bg-white rounded-2xl border border-slate-200 hover:border-[#ffc835] hover:shadow-lg transition-all duration-300 flex flex-col justify-start">
            <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-3.5 text-base shadow-sm">
              <i class="<?php echo $item['icon'] ?? ($challengeIcons[$idx % count($challengeIcons)] ?? 'fa-solid fa-circle-exclamation'); ?>"></i>
            </div>
            <h4 class="text-[15px] font-bold text-slate-900 mb-1.5 leading-snug">
              <?php echo htmlspecialchars($item['title']); ?>
            </h4>
            <p class="text-[13px] text-slate-600 leading-relaxed">
              <?php echo htmlspecialchars($item['desc']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 3. ENGINEERING DELIVERY FRAMEWORK (01-04)  -->
<!-- ========================================== -->
<section class="bg-white py-16 sm:py-20 lg:py-24 text-slate-900 border-t border-slate-100">
  <div class="contain">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-xs font-bold uppercase tracking-widest text-[#B45309]">Our Engineering Methodology</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight text-[#111827] mt-2">
        <?php echo htmlspecialchars($frameworkTitle); ?>
      </h2>
      <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
        <?php echo htmlspecialchars($frameworkSubtitle); ?>
      </p>
    </div>

    <!-- 4 Numbered Steps Diagram with Connectors -->
    <div class="max-w-4xl mx-auto space-y-6 sm:space-y-8">
      <?php foreach ($frameworkSteps as $idx => $step): ?>
        <?php $isEven = ($idx % 2 === 1); ?>
        <div class="flex items-center gap-4 sm:gap-6 <?php echo $isEven ? 'sm:pl-16' : 'sm:pr-16'; ?>">
          
          <!-- Number Badge -->
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#0F172A] text-white flex items-center justify-center font-extrabold text-lg sm:text-xl shrink-0 shadow-md">
            <span class="text-[#ffc835]"><?php echo htmlspecialchars($step['num']); ?></span>
          </div>

          <!-- Content Card -->
          <div class="flex-1 p-5 sm:p-6 bg-[#F8FAFF] rounded-2xl border border-slate-200 hover:border-[#ffc835] transition-colors shadow-sm">
            <h3 class="text-base sm:text-lg font-bold text-slate-900 mb-1.5">
              <?php echo htmlspecialchars($step['title']); ?>
            </h3>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
              <?php echo htmlspecialchars($step['desc']); ?>
            </p>
          </div>

        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 text-center">
      <a href="contact-us.html" class="inline-flex items-center gap-2 rounded-full px-8 py-4 bg-[#0F172A] hover:bg-[#ffc835] hover:text-black text-white font-semibold text-[14.5px] transition-all duration-300 shadow-xl hover:scale-105">
        <span>Let's Discuss Your <?php echo htmlspecialchars($name); ?> Platform</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 4. CORE SERVICES GRID (8 CARDS)            -->
<!-- ========================================== -->
<?php 
$serviceIcons = [
  'fa-solid fa-laptop-code',
  'fa-solid fa-mobile-screen-button',
  'fa-solid fa-cloud-arrow-up',
  'fa-solid fa-microchip',
  'fa-solid fa-tower-broadcast',
  'fa-solid fa-code-merge',
  'fa-solid fa-layer-group',
  'fa-solid fa-lock',
];
?>
<section class="py-16 sm:py-20 lg:py-24 bg-[#0A0D18] text-white" id="services">
  <div class="contain">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-[#ffc835] font-bold text-xs uppercase tracking-widest">End-to-End Capabilities</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mt-2">
        <?php echo htmlspecialchars($servicesTitle); ?>
      </h2>
      <p class="text-slate-400 text-sm sm:text-base mt-3">
        <?php echo htmlspecialchars($servicesSubtitle); ?>
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php foreach ($services as $sIdx => $srv): ?>
        <div class="p-6 sm:p-7 rounded-3xl bg-[#11172A] border border-white/10 hover:border-[#ffc835]/70 hover:bg-[#161F38] transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between shadow-xl group">
          <div>
            <div class="w-11 h-11 rounded-xl bg-white/5 border border-white/10 text-[#ffc835] flex items-center justify-center mb-5 group-hover:bg-[#ffc835] group-hover:text-black transition-colors duration-300 text-lg">
              <i class="<?php echo $srv['icon'] ?? ($serviceIcons[$sIdx % count($serviceIcons)] ?? 'fa-solid fa-cube'); ?>"></i>
            </div>
            <h3 class="text-base sm:text-lg font-bold text-white mb-2.5 leading-snug">
              <?php echo htmlspecialchars($srv['title']); ?>
            </h3>
            <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
              <?php echo htmlspecialchars($srv['desc']); ?>
            </p>
          </div>

          <?php if (!empty($srv['tags'])): ?>
            <div class="mt-5 pt-4 border-t border-white/10 flex flex-wrap gap-1.5">
              <?php foreach ($srv['tags'] as $tag): ?>
                <span class="text-[10.5px] px-2 py-0.5 rounded-md bg-white/5 text-slate-300 font-mono border border-white/10"><?php echo htmlspecialchars($tag); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 5. OPERATIONAL TIMELINE / WORKFLOW (01-06) -->
<!-- ========================================== -->
<section class="w-full bg-white py-16 sm:py-20 lg:py-24 text-slate-900 border-t border-slate-100">
  <div class="contain">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-xs font-bold uppercase tracking-widest text-[#B45309]">Built For Practical Operations</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight text-[#111827] mt-2">
        <?php echo htmlspecialchars($workflowTitle); ?>
      </h2>
      <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
        <?php echo htmlspecialchars($workflowSubtitle); ?>
      </p>
    </div>

    <!-- 6 Column Step Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4 border border-slate-200 rounded-2xl overflow-hidden bg-slate-50 p-2 sm:p-3">
      <?php foreach ($workflowSteps as $ws): ?>
        <div class="bg-white p-5 rounded-xl border border-slate-200 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
          <div>
            <div class="w-8 h-8 rounded-lg bg-[#0F172A] text-white flex items-center justify-center font-bold text-xs mb-3">
              <span class="text-[#ffc835]"><?php echo htmlspecialchars($ws['num']); ?></span>
            </div>
            <h3 class="text-sm sm:text-[15px] font-bold text-slate-900 mb-1 leading-snug">
              <?php echo htmlspecialchars($ws['title']); ?>
            </h3>
            <p class="text-[11px] font-semibold text-[#4F60B5] mb-3 leading-tight">
              <?php echo htmlspecialchars($ws['tagline']); ?>
            </p>
          </div>

          <ul class="space-y-1.5 pt-3 border-t border-slate-100">
            <?php foreach ($ws['points'] as $pt): ?>
              <li class="flex items-start gap-1.5 text-[11.5px] text-slate-600 leading-tight">
                <span class="text-[#ffc835] font-bold">•</span>
                <span><?php echo htmlspecialchars($pt); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 6. REVENUE IMPACT GRID (6 CARDS)           -->
<!-- ========================================== -->
<section class="w-full py-16 sm:py-20 lg:py-24 bg-[#F8FAFF] text-slate-900 border-t border-slate-100">
  <div class="contain">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-xs font-bold uppercase tracking-widest text-[#B45309]">Measurable Business ROI</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight text-[#111827] mt-2">
        <?php echo htmlspecialchars($revenueTitle); ?>
      </h2>
      <p class="mt-3 text-sm sm:text-base text-slate-600 leading-relaxed">
        <?php echo htmlspecialchars($revenueSubtitle); ?>
      </p>
    </div>

    <div class="max-w-4xl mx-auto bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-lg grid grid-cols-1 md:grid-cols-2">
      <?php foreach ($revenuePoints as $idx => $rp): ?>
        <div class="p-6 sm:p-8 flex items-start gap-4 border-b border-slate-100 <?php echo ($idx % 2 === 0) ? 'md:border-r' : ''; ?>">
          <div class="w-10 h-10 rounded-xl bg-[#0F172A] text-[#ffc835] flex items-center justify-center shrink-0 font-bold">
            ✓
          </div>
          <div>
            <h3 class="text-[15px] sm:text-[16px] font-bold text-slate-900 mb-1 leading-snug">
              <?php echo htmlspecialchars($rp['title']); ?>
            </h3>
            <p class="text-[12.5px] sm:text-[13px] text-slate-600 leading-relaxed">
              <?php echo htmlspecialchars($rp['desc']); ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 7. FREQUENTLY ASKED QUESTIONS (FAQS)       -->
<!-- ========================================== -->
<section class="py-16 sm:py-20 lg:py-24 bg-white text-slate-900 border-t border-slate-100" id="faqs">
  <div class="contain">
    <div class="text-center max-w-3xl mx-auto mb-14">
      <span class="text-xs font-bold uppercase tracking-widest text-[#B45309]">Have Questions?</span>
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#111827] mt-2">
        Frequently Asked Questions about <?php echo htmlspecialchars($name); ?> Software
      </h2>
      <p class="text-slate-600 text-sm sm:text-base mt-3">
        Clear, direct answers regarding development workflows, compliance, pricing, and IP ownership.
      </p>
    </div>

    <div class="max-w-3xl mx-auto space-y-4">
      <?php foreach ($faqs as $i => $faq): ?>
        <details class="group rounded-2xl bg-[#F8FAFF] border border-slate-200 p-5 sm:p-6 [&_summary::-webkit-details-marker]:hidden transition-all duration-300" <?php echo ($i === 0) ? 'open' : ''; ?>>
          <summary class="flex items-center justify-between cursor-pointer font-bold text-slate-900 text-sm sm:text-base select-none">
            <span class="pr-4"><?php echo htmlspecialchars($faq['q']); ?></span>
            <span class="w-7 h-7 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-180">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </span>
          </summary>
          <div class="mt-4 pt-4 border-t border-slate-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
            <p><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ========================================== -->
<!-- 8. FINAL HIGH-CONVERTING CTA BANNER        -->
<!-- ========================================== -->
<section class="py-16 sm:py-20 bg-[#0A0D18] text-white relative overflow-hidden">
  <div class="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
    <div class="absolute -bottom-40 right-10 w-[500px] h-[500px] bg-[#ffc835]/10 blur-[180px] rounded-full"></div>
  </div>

  <div class="contain relative z-10 text-center max-w-3xl mx-auto">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/5 border border-white/10 text-[11px] font-bold text-[#ffc835] tracking-widest uppercase mb-4">
      <span>Get Technical Scoping &amp; Estimates</span>
    </div>

    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-white mb-4">
      Ready to Build Your <span class="text-[#ffc835]"><?php echo htmlspecialchars($name); ?></span> Platform?
    </h2>

    <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-8 max-w-xl mx-auto">
      Speak directly with a Solutions Architect. We will review your workflows, compliance needs, and provide a clear milestone roadmap.
    </p>

    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact-us.html" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-[#ffc835] hover:bg-white text-black font-bold text-sm sm:text-base transition-all hover:scale-105">
        <span>Book a Discovery Call</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
      </a>
      <a href="case-studies.html#Portfolio" class="px-7 py-4 rounded-full bg-white/5 hover:bg-white/10 border border-white/20 text-white font-semibold text-sm sm:text-base transition-all">
        View Portfolio
      </a>
    </div>
  </div>
</section>

<?php
}
?>
