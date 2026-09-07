<?php 
$page = "energy-utilities.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Energy & Utilities',
  'badge' => 'SMART GRID & CLEANTECH ENGINEERING',
  'heading' => 'Intelligent Energy Platforms Built For',
  'highlight' => 'Smart Grid Telemetry & Utility Management',
  'description' => 'We engineer smart grid monitoring portals, automated smart metering (AMI) analytics, renewable solar/wind asset telemetry, and AI utility consumption forecasting.',
  'compliance' => ['IEC 61850 Substation Protocol', 'NERC CIP Security', 'CleanTech Data Standards'],
  'kpi' => ['stat' => '22%', 'label' => 'Peak Energy Load Optimization'],
  'capabilities' => [
    [
      'title' => 'Smart Metering & AMI Analytics',
      'desc' => 'High-frequency telemetry ingestion from millions of IoT smart electric, gas, and water meters with automated billing calculations.',
      'tags' => ['AMI Data Streams', 'Time-of-Use Rates', 'MDMS Engine']
    ],
    [
      'title' => 'Renewable Energy SCADA & Monitoring',
      'desc' => 'Inverter telemetry, string monitoring, solar irradiation tracking, and wind turbine yield visualization dashboards.',
      'tags' => ['Solar / Wind SCADA', 'Inverter Telemetry', 'Yield KPI']
    ],
    [
      'title' => 'Utility Billing & Customer Portals',
      'desc' => 'End-user mobile apps with hourly consumption graphs, bill payment, outage reporting, and energy efficiency tips.',
      'tags' => ['Consumer App', 'Instant Payment', 'Outage Map']
    ],
    [
      'title' => 'AI Energy Demand & Load Forecasting',
      'desc' => 'Predictive load modeling incorporating weather forecasts, industrial schedules, and historical peak consumption trends.',
      'tags' => ['Load Forecasting', 'Peak Shaving', 'Grid Stability']
    ],
    [
      'title' => 'Field Crew & Outage Dispatch Systems',
      'desc' => 'Automated grid failure detection with GPS-guided dispatching of emergency repair teams and material requisition.',
      'tags' => ['Crew Dispatch', 'GIS Outage Map', 'Work Tickets']
    ],
    [
      'title' => 'Carbon Accounting & ESG Compliance',
      'desc' => 'Automated Scope 1, 2, and 3 emissions tracking, carbon credit trading verification, and ESG sustainability reporting.',
      'tags' => ['Scope 1/2/3 ESG', 'Carbon Credits', 'Audit Reports']
    ]
  ]
]);

include("components/footer.php");
?>
