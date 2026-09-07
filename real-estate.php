<?php 
$page = "real-estate.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Real Estate',
  'badge' => 'PROPTECH & REAL ESTATE ENGINEERING',
  'heading' => 'Intelligent PropTech Software Built For',
  'highlight' => 'Modern Property Ecosystems',
  'description' => 'We engineer high-performance real estate portals, brokerage CRMs, 3D virtual tour integrations, automated lease management, and AI property valuation engines.',
  'compliance' => ['RESO Standards', 'IDX / MLS Feeds', 'GDPR / DPDP Ready', 'Secure Escrow'],
  'kpi' => ['stat' => '3.5x', 'label' => 'Lead Conversion Boost'],
  'capabilities' => [
    [
      'title' => 'Property Listing & MLS Portals',
      'desc' => 'High-speed searchable marketplaces with automated MLS/IDX synchronization, geo-spatial map search, and filters.',
      'tags' => ['MLS / IDX', 'Mapbox/Google Maps', 'Fast Search']
    ],
    [
      'title' => 'Real Estate CRM & Automation',
      'desc' => 'Lead pipeline tracking, automated drip email/WhatsApp campaigns, agent commission tracking, and client logs.',
      'tags' => ['Lead Scoring', 'WhatsApp API', 'Automations']
    ],
    [
      'title' => 'Virtual 3D Tours & Floorplans',
      'desc' => 'Interactive 360-degree Matterport embeds, WebGL 3D floor plan visualizers, and virtual staging tools.',
      'tags' => ['Matterport', 'WebGL 3D', 'Virtual Staging']
    ],
    [
      'title' => 'Lease & Property Management',
      'desc' => 'Tenant onboarding, automated rent invoicing, online maintenance request ticketing, and digital lease e-signatures.',
      'tags' => ['E-Sign', 'Payment Gateway', 'Tenant Portal']
    ],
    [
      'title' => 'AI Automated Valuation (AVM)',
      'desc' => 'Machine learning price forecasting based on hyper-local transaction histories, square footage, and market trends.',
      'tags' => ['ML Valuation', 'Market Analytics', 'Predictive']
    ],
    [
      'title' => 'Real Estate Investment & Crowdfunding',
      'desc' => 'Fractional ownership portals, investor KPI dashboards, dividend distribution, and KYC compliance engines.',
      'tags' => ['Fractional Real Estate', 'KYC Engine', 'Investor Portal']
    ]
  ]
]);

include("components/footer.php");
?>
