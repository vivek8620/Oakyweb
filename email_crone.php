<?php
include("db_config.php");


$query = "SELECT * FROM contact WHERE is_email_sent = 0";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $budget = $row['budget'];
        $duration = $row['duration'];
        $hear_about = $row['hear_about'];
        $message = $row['message'];

        $subjectcompany = "Contact Form Submission - Oakyweb";
        $subjectuser = "Thank you for contacting Oakyweb";

        // user email template   
        $bodyuser = "
        <html><body>
        Hello $name,<br><br>
        Thank you for contacting us. Our team will contact you shortly.<br><br>
        Regards,<br>
        Oakyweb Pvt Ltd
        </body></html>";

        // company email template   
        $bodycompany = "
        <html><body>
        <h2>New Contact Lead Details</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Email:</b> $email</p>
        <p><b>Budget:</b> $budget</p>
        <p><b>Duration:</b> $duration</p>
        <p><b>Heard About:</b> $hear_about</p>
        <p><b>Message:</b> $message</p>
        </body></html>";

       
        $send_company = send_email("Oakyweb Pvt Ltd", "info@oakyweb.com", "info@oakyweb.com", $bodycompany, $subjectcompany, $name);
        $send_user = send_email("Oakyweb Pvt Ltd", "info@oakyweb.com", $email, $bodyuser, $subjectuser, $name);

       
        if ($send_company && $send_user) {

            $update = "UPDATE contact SET is_email_sent = 1 WHERE email = '$email'";
            mysqli_query($conn, $update);

            $log = "INSERT INTO crone_log (log) VALUES ('Email sent to $email')";
            mysqli_query($conn, $log);

            echo "Email sent to $email <br>";

        } else {

            $log = "INSERT INTO crone_log (log) VALUES ('Failed to send email to $email')";
            mysqli_query($conn, $log);

            echo "Error sending email to $email <br>";
        }
    }

} else {
    $log = "INSERT INTO crone_log (log) VALUES ('No records found')";
    mysqli_query($conn, $log);
    echo "No records found<br>";
}





function send_email($from_name, $from_address, $to_address, $bodydesc, $subject, $name)
{
    $url = 'https://www.oakyweb.com/gmail_smtp.php';

    $payload = json_encode([
        "bodydesc" => $bodydesc,
        "from_address" => $from_address,
        "from_name" => $from_name,
        "subject" => $subject,
        "to_address" => $to_address,
        "to_name" => $name,
        "cc_address" => ""
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // optional; remove if SSL correct

    $response = curl_exec($ch);

    if ($response === false) {
        error_log("CURL Error: " . curl_error($ch));
        curl_close($ch);
        return false;
    }

    curl_close($ch);

    return !empty($response);
}

?>
