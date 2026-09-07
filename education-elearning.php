<?php 
$page = "education-elearning.php";
include("components/header.php");
include("components/industryTemplate.php");

renderIndustryPage([
  'name' => 'Education & E-Learning',
  'badge' => 'EDTECH & LEARNING MANAGEMENT ENGINEERING',
  'heading' => 'Scalable EdTech Platforms Built For',
  'highlight' => 'Modern Digital Classrooms & Adaptive Learning',
  'description' => 'We engineer custom Learning Management Systems (LMS), live interactive virtual classrooms, proctored examination portals, and AI adaptive tutoring algorithms.',
  'compliance' => ['SCORM / xAPI / LTI Compatible', 'COPPA & FERPA Compliant', 'GDPR / DPDP Ready'],
  'kpi' => ['stat' => '85%', 'label' => 'Student Course Completion Rate'],
  'capabilities' => [
    [
      'title' => 'Custom Learning Management (LMS)',
      'desc' => 'Multi-tier curriculum structuring, video lessons with DRM, downloadable notes, homework grading, and automated certificates.',
      'tags' => ['SCORM / xAPI', 'Course Builder', 'Certificates']
    ],
    [
      'title' => 'Live Virtual Classrooms & Whiteboard',
      'desc' => 'Ultra-low latency interactive video conferencing, collaborative multiplayer digital whiteboards, and breakout rooms.',
      'tags' => ['WebRTC Video', 'Interactive Whiteboard', 'Breakout Rooms']
    ],
    [
      'title' => 'AI Adaptive Learning & Tutoring',
      'desc' => 'Intelligent student performance diagnostics that dynamically calibrate quiz difficulty and recommend remedial lessons.',
      'tags' => ['Adaptive AI', 'Knowledge Graphs', 'Smart Quizzes']
    ],
    [
      'title' => 'AI Proctored Examination Portals',
      'desc' => 'Secure online testing with webcam facial tracking, multiple face detection, tab-switching lockdown, and automated grading.',
      'tags' => ['AI Proctoring', 'Browser Lockdown', 'Automated Grading']
    ],
    [
      'title' => 'School & University ERP Systems',
      'desc' => 'Student admissions, attendance biometric sync, timetable scheduling, fee payment gateway, and parent mobile portal.',
      'tags' => ['Admissions ERP', 'Fee Collection', 'Parent Portal']
    ],
    [
      'title' => 'Gamified Learning & Micro-Credentials',
      'desc' => 'XP points, student leaderboards, digital badge awards, streak trackers, and verifiable LinkedIn credential integrations.',
      'tags' => ['Gamification', 'Badges', 'Micro-Credentials']
    ]
  ]
]);

include("components/footer.php");
?>
