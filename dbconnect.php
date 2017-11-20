<!--?php

$db_host = "localhost";
$db_name = "register";
$db_user = "root";
$db_pass = "toor";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
--->

<?php

$db_username = 'root';
$db_password = '';
$db_name = 'register';
$db_host = 'localhost';

					
//connect to MySql						
$conn = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>

