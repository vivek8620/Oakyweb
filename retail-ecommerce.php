<?php 
$page = "retail-ecommerce.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Retail & E-Commerce',
  'badge' => 'RETAIL & E-COMMERCE ENGINEERING',
  'heading' => 'Retail Software Development Company For',
  'highlight' => 'E-Commerce And In-Store',
  'description' => 'We build custom ecommerce storefronts, order management systems, inventory sync platforms, and AI personalisation engines for modern brands.',
  'compliance' => ['PCI-DSS Level 1', 'SOC 2 Type II', 'Sub-Second CDN', 'Omnichannel Sync'],
  'kpi' => ['stat' => '400ms', 'label' => 'Average Page Load Time'],
  'capabilities' => [
    [
      'title' => 'Headless Commerce Storefronts',
      'desc' => 'Next.js & API-driven headless shopping experiences that deliver lightning speed and dynamic checkout funnels.',
      'tags' => ['Next.js', 'GraphQL', 'Shopify / Custom API']
    ],
    [
      'title' => 'Multi-Vendor Marketplaces',
      'desc' => 'Amazon/Etsy style multi-seller portals with split payments, automated vendor payouts, and seller analytics.',
      'tags' => ['Stripe Connect', 'Seller Dashboard', 'Commissions']
    ],
    [
      'title' => 'Inventory & Order Management (OMS)',
      'desc' => 'Unified multi-channel stock sync across online stores, physical warehouses, and retail POS terminals.',
      'tags' => ['Real-Time Sync', 'Warehouse Management', 'Barcodes']
    ],
    [
      'title' => 'AI Recommendation & Search',
      'desc' => 'Algolia/Elasticsearch semantic search with predictive product recommendations that maximize average order value.',
      'tags' => ['Vector Search', 'Dynamic Bundles', 'AI Upsell']
    ],
    [
      'title' => 'POS & Retail Store Integration',
      'desc' => 'Cloud-connected point-of-sale systems with offline caching, mobile checkout, and loyalty card recognition.',
      'tags' => ['Cloud POS', 'Barcode Scanner', 'Loyalty Rewards']
    ],
    [
      'title' => 'B2B Wholesale & Wholesale Portals',
      'desc' => 'Tiered bulk pricing, minimum order quantities, credit lines, custom quote generation, and invoice management.',
      'tags' => ['Net 30/60 Terms', 'Bulk Pricing', 'RFQ Engine']
    ]
  ]
]);

include("components/footer.php");
?>
