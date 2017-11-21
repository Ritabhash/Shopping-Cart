

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

