<?php 
$page = "insurance.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Insurance',
  'badge' => 'INSURTECH & CLAIMS AUTOMATION ENGINEERING',
  'heading' => 'Intelligent InsurTech Software Built For',
  'highlight' => 'Automated Policy Lifecycle & Claims Triage',
  'description' => 'We engineer digital policy administration platforms, instant quote calculators, AI automated claims processing, underwriting risk scoring, and agent portals.',
  'compliance' => ['IRDAI / ACORD Standards', 'PCI-DSS Level 1', 'Encrypted Document Vault'],
  'kpi' => ['stat' => '70%', 'label' => 'Faster Claims Settlement Time'],
  'capabilities' => [
    [
      'title' => 'Policy Administration Systems (PAS)',
      'desc' => 'End-to-end policy lifecycle management: multi-tier plan configuration, automated premium debit, endorsement changes, and renewal notices.',
      'tags' => ['Policy Lifecycle', 'Auto-Debit NACH', 'Renewals']
    ],
    [
      'title' => 'AI Automated Claims Processing',
      'desc' => 'Computer vision damage assessment for motor/property claims, automated bill OCR parsing, and instant fraud check flags.',
      'tags' => ['OCR Parsing', 'Damage Vision AI', 'Fast Settlement']
    ],
    [
      'title' => 'Underwriting & Risk Scoring Engine',
      'desc' => 'Rule-based and ML predictive risk scoring integrating telemetry data, medical records, and credit histories for dynamic premiums.',
      'tags' => ['Risk Scoring', 'Dynamic Premium', 'Underwriting Rules']
    ],
    [
      'title' => 'Omnichannel Quote & Buy Engine',
      'desc' => 'Instant multi-product comparison, premium calculators, customized riders selection, and instant policy generation.',
      'tags' => ['Instant Quote', 'Rider Configuration', 'Instant PDF']
    ],
    [
      'title' => 'Agent, Broker & POSP Portals',
      'desc' => 'Dedicated portals for insurance distributors: real-time commission reconciliation, quote dispatching, and KYC document uploads.',
      'tags' => ['Broker Portal', 'POSP Onboarding', 'Commission Ledger']
    ],
    [
      'title' => 'InsurTech Telematics & IoT (UBI)',
      'desc' => 'Usage-Based Insurance (UBI) platforms calculating pay-as-you-drive and health-habit discounts based on real-time sensor streams.',
      'tags' => ['Usage-Based UBI', 'Sensor Stream', 'Health Gamification']
    ]
  ]
]);

include("components/footer.php");
?>
