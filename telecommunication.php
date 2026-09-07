<?php 
$page = "telecommunication.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Telecommunication',
  'badge' => 'TELECOM & NETWORK ENGINEERING',
  'heading' => 'Telecom Software Built For',
  'highlight' => 'High-Capacity Network Operations',
  'description' => 'We engineer scalable telecom BSS/OSS platforms, automated customer self-service apps, VoIP and SIP infrastructure, and AI network anomaly detection.',
  'compliance' => ['TM Forum Open APIs', 'ETSI Standards', 'Carrier Grade 99.999%'],
  'kpi' => ['stat' => '99.999%', 'label' => 'Five-Nines Network Availability'],
  'capabilities' => [
    [
      'title' => 'BSS & Billing Systems',
      'desc' => 'Real-time rating engines, prepaid/postpaid subscriber billing, multi-play bundle provisioning, and invoice automation.',
      'tags' => ['Rating Engine', 'Prepaid/Postpaid', 'E-Invoicing']
    ],
    [
      'title' => 'OSS & Network Inventory Management',
      'desc' => 'Physical and logical network topology visualization, fiber route mapping, and automated device activation workflows.',
      'tags' => ['Network Topology', 'Fiber Mapping', 'Device Provisioning']
    ],
    [
      'title' => 'Subscriber Self-Care Mobile Apps',
      'desc' => 'Data balance dashboards, instant plan recharge, eSIM profile downloads, automated ticket resolution, and loyalty programs.',
      'tags' => ['eSIM Support', 'Instant Recharge', 'Self-Care App']
    ],
    [
      'title' => 'VoIP, SIP & WebRTC Communications',
      'desc' => 'Carrier-grade SIP trunking platforms, virtual PBX portals, WebRTC browser calling, and call center dialers.',
      'tags' => ['SIP Trunking', 'Cloud PBX', 'WebRTC Softphone']
    ],
    [
      'title' => 'AI Network Anomaly & Churn Prediction',
      'desc' => 'Machine learning models analyzing cell tower telemetry to detect outages and identify subscribers at risk of porting.',
      'tags' => ['Churn Prevention', 'AIOps', 'Traffic Analysis']
    ],
    [
      'title' => 'Partner & MVNO Management Portals',
      'desc' => 'Wholesale bandwidth reselling, MVNO tenant isolation, partner revenue sharing, and automated settlement reports.',
      'tags' => ['MVNO Architecture', 'Partner Settlement', 'Multi-Tenant']
    ]
  ]
]);

include("components/footer.php");
?>
