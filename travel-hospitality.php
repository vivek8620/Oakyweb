<?php 
$page = "travel-hospitality.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Travel & Hospitality',
  'badge' => 'TRAVELTECH & HOSPITALITY ENGINEERING',
  'heading' => 'Travel & Hospitality Platforms Built For',
  'highlight' => 'Seamless Booking & Dynamic Pricing',
  'description' => 'We engineer high-speed OTA booking engines, hotel property management systems (PMS), airline GDS integrations, and AI personalized trip concierge software.',
  'compliance' => ['IATA / NDC Standards', 'PCI-DSS Payment Security', 'GDPR Data Protection'],
  'kpi' => ['stat' => '3x', 'label' => 'Direct Booking Growth'],
  'capabilities' => [
    [
      'title' => 'OTA Booking Engine & GDS Integration',
      'desc' => 'Multi-source airline, hotel, and car rental inventory aggregation via Amadeus, Sabre, Travelport, and direct supplier APIs.',
      'tags' => ['Amadeus / Sabre', 'NDC Direct Connect', 'Flight + Hotel']
    ],
    [
      'title' => 'Hotel Property Management (PMS)',
      'desc' => 'Front desk check-in/out, room inventory matrix, housekeeping mobile status apps, and guest folio billing.',
      'tags' => ['Front Desk PMS', 'Channel Manager', 'Housekeeping']
    ],
    [
      'title' => 'AI Dynamic Pricing & Revenue Management',
      'desc' => 'Real-time room and ticket rate adjustments based on competitor pricing, local events, occupancy rate, and demand velocity.',
      'tags' => ['Dynamic Pricing', 'Occupancy AI', 'Revenue Optimization']
    ],
    [
      'title' => 'Contactless Guest Experience App',
      'desc' => 'Mobile digital room key unlocking (BLE/NFC), in-room dining orders, spa booking, and automated invoice delivery.',
      'tags' => ['BLE Digital Key', 'In-Room Ordering', 'Guest Concierge']
    ],
    [
      'title' => 'Tour & Activity Operator Booking',
      'desc' => 'Real-time slot availability, guide allocation calendars, mobile QR ticket scanning, and TripAdvisor/Viator syndication.',
      'tags' => ['Activity Bookings', 'QR Ticketing', 'Viator / GetYourGuide']
    ],
    [
      'title' => 'Loyalty & Travel Rewards Engine',
      'desc' => 'Miles/points earning and burn rules, tiered VIP status clubs, co-branded credit card rewards, and redemption engines.',
      'tags' => ['Loyalty Points', 'Tier Upgrades', 'Redemption Engine']
    ]
  ]
]);

include("components/footer.php");
?>
