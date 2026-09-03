 

 <?php 
 $base_url = dirname(__FILE__);
 define("base_url",$base_url);
 define('site_url','https://www.oakyweb.com/');


$hostname	=	'localhost';
$username   =   'oakyweb2a_oakyweb_user';
$password   =    'B{!6ORMn-{~,';
$database   =   'oakyweb2a_oakyweb_db';

// $conn  		= mysql_connect($hostname, $username, $password) ;//or die("Sorry connection could not estalished");
$conn = mysqli_connect($hostname, $username, $password, $database);

// alert('');
//if (!$conn) {
    // Print the error message if the connection failed
  //  echo("Connection failed: " . mysql_error());
    
    // die("Connection failed: " . mysql_error());
//}
//mysql_select_db($database,$conn)
 // die("Connection failed: " . mysql_error());
// or die("sorry database could not found"); 
if ($conn->connect_error) {
    // If connection failed, output a JavaScript alert with the error message
   echo "<script>alert('Connection failed: " . $conn->connect_error . "');</script>";
} else {
    // If connected successfully, you can proceed with your database operations
    //echo "<script>alert('Connected successfully');</script>";
}

?>
