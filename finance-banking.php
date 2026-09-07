<?php 
$page = "finance-banking.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Finance & Banking',
  'badge' => 'FINTECH & BFSI PLATFORM ENGINEERING',
  'heading' => 'Secure Fintech & Banking Software Built For',
  'highlight' => 'Financial Integrity & High Concurrency',
  'description' => 'We engineer bank-grade financial platforms, digital wallets, loan origination systems (LOS), automated credit scoring, and AI-driven anti-money laundering (AML) detection.',
  'compliance' => ['RBI / PCI-DSS Level 1', 'AES-256 Encryption', 'ISO 20022 Financial Messaging', 'SOC 2 Ready'],
  'kpi' => ['stat' => '100K+', 'label' => 'Transactions Per Second'],
  'capabilities' => [
    [
      'title' => 'Digital Banking & Neobanks',
      'desc' => 'Multi-currency mobile and web banking apps with biometric authentication, instant account opening, and card controls.',
      'tags' => ['Biometrics', 'Virtual Cards', 'UPI / IMPS']
    ],
    [
      'title' => 'Loan Origination & Underwriting (LOS)',
      'desc' => 'Automated paperless loan application pipelines, credit bureau integrations (CIBIL/Experian), and digital e-signing.',
      'tags' => ['Credit Bureau API', 'Automated Scoring', 'E-Sign']
    ],
    [
      'title' => 'Payment Gateways & Wallets',
      'desc' => 'Ultra-reliable payment processing supporting credit cards, net banking, UPI, recurring subscriptions, and split payouts.',
      'tags' => ['Payment Gateway', 'Recurring Billing', 'QR Codes']
    ],
    [
      'title' => 'Fraud Detection & AML Monitoring',
      'desc' => 'Real-time transaction scoring with machine learning models that detect anomalies, velocity spikes, and suspicious transfers.',
      'tags' => ['AML / KYC', 'ML Fraud Engine', 'Risk Rules']
    ],
    [
      'title' => 'Wealth Management & Trading',
      'desc' => 'Portfolio tracking, mutual funds distribution, automated robo-advisory algorithms, and real-time stock ticker dashboards.',
      'tags' => ['Robo-Advisory', 'Market Data', 'Portfolio Analytics']
    ],
    [
      'title' => 'Open Banking & API Ecosystems',
      'desc' => 'Secure OAuth 2.0 financial APIs connecting core banking systems to third-party fintech apps and accounting software.',
      'tags' => ['Open Banking API', 'OAuth 2.0', 'Microservices']
    ]
  ]
]);

include("components/footer.php");
?>
