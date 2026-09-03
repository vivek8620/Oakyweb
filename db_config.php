<?php 
$base_url = dirname(__FILE__);
if (!defined("base_url")) {
    define("base_url", $base_url);
}
if (!defined("site_url")) {
    define("site_url", "https://www.oakyweb.com/");
}

$hostname = 'localhost';
$username = 'oakyweb2a_oakyweb_user';
$password = 'B{!6ORMn-{~,';
$database = 'oakyweb2a_oakyweb_db';

// Disable default mysqli exception throwing to prevent fatal error crashes
mysqli_report(MYSQLI_REPORT_OFF);

$conn = null;
try {
    $conn = @mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        // Try fallback for local XAMPP environment
        $conn = @mysqli_connect('localhost', 'root', '', $database);
    }
} catch (Throwable $e) {
    $conn = null;
}

if (!$conn || (isset($conn->connect_error) && $conn->connect_error)) {
    $conn = null;
}
?>
