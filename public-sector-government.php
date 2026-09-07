<?php 
$page = "public-sector-government.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Public Sector & Government',
  'badge' => 'E-GOVERNANCE & CIVIC PLATFORM ENGINEERING',
  'heading' => 'Secure Public Sector Platforms Built For',
  'highlight' => 'Transparent Digital Governance & Accessibility',
  'description' => 'We engineer high-accessibility citizen portals, digital grievance redressal systems, municipal tax collection platforms, and AI-enabled public record archives.',
  'compliance' => ['GIGW / WCAG 2.1 AA Accessibility', 'CERT-In Security Standards', 'MeitY Guidelines'],
  'kpi' => ['stat' => '10M+', 'label' => 'Citizens Scalably Supported'],
  'capabilities' => [
    [
      'title' => 'Citizen Services & E-Gov Portals',
      'desc' => 'Multi-lingual civic service delivery portals for permits, birth/death certificate issuance, and welfare benefit disbursement.',
      'tags' => ['Aadhaar/DigiLocker', 'Multi-Lingual', 'WCAG 2.1 AA']
    ],
    [
      'title' => 'Grievance Redressal & Helpdesk',
      'desc' => 'Automated ticket routing across municipal departments, SLA escalation timers, citizen SMS updates, and resolution tracking.',
      'tags' => ['SLA Escalations', 'Department Routing', 'SMS/WhatsApp']
    ],
    [
      'title' => 'Municipal Tax & Utility Revenue Collection',
      'desc' => 'Digital property tax, water bill, and commercial trade license assessment and instant online payment reconciliation.',
      'tags' => ['Payment Gateway', 'Tax Assessment', 'Reconciliation']
    ],
    [
      'title' => 'E-Procurement & Public Tendering',
      'desc' => 'Encrypted bidding rooms, digital signature certificate (DSC) verification, automated technical evaluation, and audit trails.',
      'tags' => ['DSC Signing', 'Encrypted Bidding', 'Audit Trail']
    ],
    [
      'title' => 'Smart City Dashboards & Command Centers',
      'desc' => 'Geographic GIS map overlays aggregating traffic sensors, waste management trackers, and street lighting energy telemetry.',
      'tags' => ['GIS Overlays', 'IoT Command Center', 'Real-Time Feeds']
    ],
    [
      'title' => 'Digital Document Archive & Verification',
      'desc' => 'Tamper-proof digital records registry with cryptographic QR code validation and government cloud integration.',
      'tags' => ['Cryptographic QR', 'DigiLocker API', 'Digital Seal']
    ]
  ]
]);

include("components/footer.php");
?>
