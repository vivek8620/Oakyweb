<?php 
$page = "media-entertainment.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Media & Entertainment',
  'badge' => 'STREAMING & BROADCAST ENGINEERING',
  'heading' => 'High-Throughput Digital Platforms Built For',
  'highlight' => 'Global Media & Streaming Scale',
  'description' => 'We build ultra-low-latency OTT streaming platforms, media content management systems, live broadcasting apps, and digital rights management (DRM) infrastructure.',
  'compliance' => ['Widevine / FairPlay DRM', 'Multi-CDN Architecture', 'GDPR / COPPA Compliant'],
  'kpi' => ['stat' => '< 1.2s', 'label' => 'Video Startup Time'],
  'capabilities' => [
    [
      'title' => 'OTT Video Streaming Platforms',
      'desc' => 'Multi-device video-on-demand (VOD) and live streaming applications across Web, iOS, Android, Android TV, and Apple TV.',
      'tags' => ['HLS / DASH', 'Adaptive Bitrate', 'Smart TVs']
    ],
    [
      'title' => 'Digital Rights Management (DRM)',
      'desc' => 'Secure enterprise encryption with Widevine, FairPlay, and PlayReady integrations to protect copyrighted streams.',
      'tags' => ['Widevine', 'FairPlay', 'Watermarking']
    ],
    [
      'title' => 'Live Event Broadcasting & Chat',
      'desc' => 'Ultra-low-latency WebRTC and RTMP streaming with real-time interactive audience polling, chats, and monetization.',
      'tags' => ['Low-Latency', 'Live Chat', 'Virtual Gifts']
    ],
    [
      'title' => 'Audio & Podcast Ecosystems',
      'desc' => 'Dedicated audio streaming platforms with background playback, offline sync, RSS syndication, and dynamic ad insertion.',
      'tags' => ['Audio Streaming', 'Dynamic Ads', 'Podcasts']
    ],
    [
      'title' => 'Media Asset Management (MAM)',
      'desc' => 'Automated video transcoding, metadata indexing, automated subtitles generation, and cloud archival storage.',
      'tags' => ['Transcoding', 'AI Subtitles', 'Cloud Archive']
    ],
    [
      'title' => 'Subscription & Pay-Per-View (PPV)',
      'desc' => 'Flexible monetization models: SVOD recurring subscriptions, TVOD pay-per-view events, and AVOD programmatic ads.',
      'tags' => ['SVOD / TVOD', 'Payment Wall', 'Ad-Insertion']
    ]
  ]
]);

include("components/footer.php");
?>
