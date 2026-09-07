<?php 
$page = "manufacturing.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Manufacturing',
  'badge' => 'INDUSTRY 4.0 & INDUSTRIAL IOT ENGINEERING',
  'heading' => 'Industrial Manufacturing Software Built For',
  'highlight' => 'Factory Automation & OEE Optimization',
  'description' => 'We engineer Manufacturing Execution Systems (MES), Industrial IoT (IIoT) machine telemetry, production scheduling engines, and real-time OEE analytics dashboards.',
  'compliance' => ['ISA-95 Standard', 'OPC-UA / MQTT Protocols', 'ISO 9001 Compliant'],
  'kpi' => ['stat' => '+18%', 'label' => 'OEE Overall Equipment Effectiveness'],
  'capabilities' => [
    [
      'title' => 'Manufacturing Execution Systems (MES)',
      'desc' => 'Shop floor production tracking, digital work order dispatching, bill of materials (BOM), and scrap reduction.',
      'tags' => ['Work Orders', 'BOM Management', 'Shop Floor Control']
    ],
    [
      'title' => 'Real-Time OEE Analytics Dashboards',
      'desc' => 'Real-time calculation of Availability, Performance, and Quality metrics visualized on TV screens and tablet displays.',
      'tags' => ['OEE KPI', 'Downtime Tracking', 'Live Dashboards']
    ],
    [
      'title' => 'IIoT & PLC Machine Connectivity',
      'desc' => 'High-throughput data streaming from Siemens, Allen-Bradley, and Omron PLCs using OPC-UA, Modbus, and MQTT.',
      'tags' => ['OPC-UA', 'MQTT', 'PLC Telemetry']
    ],
    [
      'title' => 'AI Predictive Machine Maintenance',
      'desc' => 'Vibration, temperature, and acoustic sensor analytics that alert plant managers before spindle and motor failures.',
      'tags' => ['Vibration Analysis', 'Anomaly Detection', 'Zero Downtime']
    ],
    [
      'title' => 'Quality Control & Computer Vision QA',
      'desc' => 'Automated optical inspection (AOI) utilizing high-speed cameras and deep learning to spot micro-surface defects.',
      'tags' => ['Optical Inspection', 'Deep Learning QA', 'Defect Tagging']
    ],
    [
      'title' => 'Supply Chain & Raw Material ERP',
      'desc' => 'Just-In-Time (JIT) raw material procurement, vendor rating scorecards, automated re-order points, and warehouse barcode sync.',
      'tags' => ['JIT Inventory', 'Supplier Portal', 'Barcode Scanning']
    ]
  ]
]);

include("components/footer.php");
?>
