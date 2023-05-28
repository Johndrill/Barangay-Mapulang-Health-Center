<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "pms_db";
$con = mysqli_connect($host, $user, $password, $db);

// $Servername = "sql1596.main-hosting.eu";
// $database = "u876447700_integration";
// $username = "u86447700_root";
// $password = "Admin123";

// $conn = mysqli_connect($Servername, $database, $username, $password);

if (!$con) {
  die("Cpnnection failed ". mysqli_connect_error());

}



// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "pms_db";
// $con = mysqli_connect($host, $user, $password, $db);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}

session_start();

// 24 minutes default idle time
// if(isset($_SESSION['ABC'])) {
// 	unset($_SESSION['ABC']);
// }
?>

?>