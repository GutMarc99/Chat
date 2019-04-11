<?php
$servername = "sql110.epizy.com";
$username = "epiz_23753804";
$password = "eKx4SktOTc";
$dbname = "epiz_23753804_chat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Conexión fallida: " . mysqli_connect_error());
}

?>
