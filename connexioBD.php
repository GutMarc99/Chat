<?php
$servername = "198.91.81.5";
$username = "mmlchatx_user";
$password = "eKx4SktOTc";
$dbname = "mmlchatx_chat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Conexión fallida: " . mysqli_connect_error());
}

?>
