<?php 
$page = "logistics-supply-chain.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Logistics & Supply Chain',
  'badge' => 'LOGISTICS & SUPPLY CHAIN ENGINEERING',
  'heading' => 'End-to-End Logistics Platforms Built For',
  'highlight' => 'Real-Time Visibility & Route Optimization',
  'description' => 'We engineer Transportation Management Systems (TMS), Warehouse Management (WMS), automated 3PL dispatching, dynamic multi-stop route optimization, and cross-border freight platforms.',
  'compliance' => ['EDI / GS1 Barcode Standards', 'Real-Time GPS APIs', 'Customs Clearance Compliant'],
  'kpi' => ['stat' => '28%', 'label' => 'Fuel & Route Cost Savings'],
  'capabilities' => [
    [
      'title' => 'Transportation Management (TMS)',
      'desc' => 'Carrier bidding, freight load consolidation, trip dispatching, rate contract management, and electronic proof of delivery (e-POD).',
      'tags' => ['Freight Load', 'Carrier Bidding', 'e-POD']
    ],
    [
      'title' => 'Warehouse Management (WMS)',
      'desc' => 'Multi-location bin mapping, automated put-away algorithms, pick-and-pack optimization, and handheld RFID/barcode syncing.',
      'tags' => ['Bin Allocation', 'Pick-and-Pack', 'RFID / Barcodes']
    ],
    [
      'title' => 'AI Route Optimization & Dispatch',
      'desc' => 'Genetic algorithms factoring traffic congestion, vehicle capacity, delivery time windows, and toll expenses for optimal routing.',
      'tags' => ['Route Optimization', 'Fleet Telemetry', 'ETA Prediction']
    ],
    [
      'title' => 'Last-Mile Delivery & Driver App',
      'desc' => 'Native driver mobile apps with turn-by-turn navigation, digital customer signature capture, cash-on-delivery (COD) reconciliation.',
      'tags' => ['Driver Navigation', 'COD Reconciliation', 'Customer Tracking']
    ],
    [
      'title' => 'Freight Forwarding & Customs Portal',
      'desc' => 'Sea, air, and multimodal shipment tracking, automated Bill of Lading (BOL) generation, and customs documentation compliance.',
      'tags' => ['Bill of Lading', 'Customs Docs', 'Container Tracking']
    ],
    [
      'title' => 'End-to-End Supply Chain Control Tower',
      'desc' => 'Real-time geographic visibility dashboard aggregating supplier lead times, port delays, inventory burn rates, and exception alerts.',
      'tags' => ['Control Tower', 'GIS Map', 'Predictive Delays']
    ]
  ]
]);

include("components/footer.php");
?>
