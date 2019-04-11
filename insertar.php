<?php
include 'connexioBD.php';
$nombre = htmlspecialchars($_POST['nombre']);
$mensaje = htmlspecialchars($_POST['mensaje']);
$tiempo = date("H:i:s");

if(is_null($nombre) or is_null($mensaje) or empty($nombre) or empty($mensaje)) {
$alerta = "No+se+pueden+chatear+valores+nulos+o+en+blanco.";
} 

else {

$nombre = mysqli_real_escape_string($conn, $nombre);
$mensaje = mysqli_real_escape_string($conn, $mensaje);
$tiempo = mysqli_real_escape_string($conn, $tiempo);

$sql = "INSERT INTO missatges (hora, text, usuari) 
VALUES ('$tiempo', '$mensaje', '$nombre')";

if (mysqli_query($conn, $sql)) {
   $alerta = "El+mensaje+se+ha+enviado+correctamente.";
} else {
   $alerta = "Error:+" . $sql . "+<br>+" . mysqli_error($conn);
}

}

mysqli_close($conn);

header("Location: index.php?alert=$alerta");
exit();
?> 
