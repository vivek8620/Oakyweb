<?php 
$page = "automotive.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Automotive',
  'badge' => 'CONNECTED MOBILITY & FLEET ENGINEERING',
  'heading' => 'Advanced Automotive Software Built For',
  'highlight' => 'Intelligent Connected Mobility',
  'description' => 'We engineer connected vehicle platforms, telematics IoT pipelines, EV charging station management, dealership DMS systems, and AI predictive maintenance software.',
  'compliance' => ['CAN Bus / OBD-II Standards', 'ISO 26262 Functional Safety', 'OCPP for EV Charging'],
  'kpi' => ['stat' => '30%', 'label' => 'Fleet Downtime Reduction'],
  'capabilities' => [
    [
      'title' => 'Fleet Management & Telematics',
      'desc' => 'Real-time GPS tracking, driver behavior analytics, fuel consumption monitoring, and automated geofencing alerts.',
      'tags' => ['GPS / Telematics', 'OBD-II Data', 'Geofencing']
    ],
    [
      'title' => 'EV Charging Station Management (CSMS)',
      'desc' => 'OCPP compliant electric vehicle charging network platform with remote session controls, load balancing, and billing.',
      'tags' => ['OCPP 1.6 / 2.0', 'Smart Charging', 'Mobile Wallet']
    ],
    [
      'title' => 'Dealership Management (DMS)',
      'desc' => 'End-to-end showroom management: inventory allocation, test drive booking apps, service bay scheduling, and warranty claims.',
      'tags' => ['Showroom POS', 'Service Booking', 'Inventory']
    ],
    [
      'title' => 'AI Predictive Vehicle Maintenance',
      'desc' => 'Sensor telemetry algorithms that anticipate mechanical wear and battery degradation before breakdown occurs.',
      'tags' => ['Predictive Maintenance', 'IoT Sensors', 'Telemetry']
    ],
    [
      'title' => 'Car Rental & Peer-to-Peer Sharing',
      'desc' => 'Keyless digital car unlock, automated security deposits, digital rental contracts, and hourly pricing algorithms.',
      'tags' => ['Keyless Entry', 'E-KYC Verification', 'Dynamic Rates']
    ],
    [
      'title' => 'Automotive Aftermarket & Parts Portals',
      'desc' => 'B2B/B2C spare parts catalogs with VIN lookup, diagram breakdowns, and distributor inventory integration.',
      'tags' => ['VIN Decoder', 'Parts Catalog', 'Logistics Sync']
    ]
  ]
]);

include("components/footer.php");
?>
