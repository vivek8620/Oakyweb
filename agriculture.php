<?php 
$page = "agriculture.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Agriculture',
  'badge' => 'AGRITECH & PRECISION FARMING ENGINEERING',
  'heading' => 'Smart AgriTech Platforms Built For',
  'highlight' => 'Precision Farming & Yield Optimization',
  'description' => 'We engineer farm management software, satellite NDVI crop monitoring, IoT soil moisture telemetry, AI yield prediction, and agricultural supply chain marketplaces.',
  'compliance' => ['IoT Sensor Protocols', 'Satellite Geospatial Data', 'Traceability Compliance'],
  'kpi' => ['stat' => '25%', 'label' => 'Average Crop Yield Increase'],
  'capabilities' => [
    [
      'title' => 'Farm Management & ERP',
      'desc' => 'Field mapping, labor assignment, crop calendar scheduling, fertilizer usage tracking, and harvest revenue reporting.',
      'tags' => ['Field Mapping', 'Crop Lifecycle', 'Input Tracking']
    ],
    [
      'title' => 'Satellite & Drone Crop Health (NDVI)',
      'desc' => 'Multispectral satellite imagery integration delivering normalized difference vegetation index (NDVI) vegetation health maps.',
      'tags' => ['Satellite Imagery', 'NDVI Index', 'Geospatial']
    ],
    [
      'title' => 'IoT Soil & Irrigation Telemetry',
      'desc' => 'Real-time telemetry from wireless soil moisture, pH, and ambient weather sensors connected to automated smart valves.',
      'tags' => ['Smart Irrigation', 'IoT Sensors', 'Weather API']
    ],
    [
      'title' => 'AI Yield Forecasting & Pest Detection',
      'desc' => 'Computer vision plant disease diagnosis via mobile phone cameras and predictive harvest volume estimations.',
      'tags' => ['Computer Vision', 'Plant Disease AI', 'Harvest Forecast']
    ],
    [
      'title' => 'Agri-Commodity Marketplace & Mandi',
      'desc' => 'B2B farmer-to-buyer trade portals with real-time mandi rate feeds, digital escrow payments, and freight booking.',
      'tags' => ['Mandi Prices', 'B2B Trade', 'Direct Sourcing']
    ],
    [
      'title' => 'Cold Chain & Supply Chain Traceability',
      'desc' => 'Farm-to-fork batch traceability with temperature monitoring for perishable fruits, vegetables, and dairy products.',
      'tags' => ['Cold Chain', 'Traceability', 'QR Authenticity']
    ]
  ]
]);

include("components/footer.php");
?>
