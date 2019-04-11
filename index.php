<html lang="es">
<head>
<meta charset="UTF-8" />
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<section id="titol">
<h1>xateja-ho!</h1>
</section>
<br>
<section id="missatges">
<?php
include 'connexioBD.php';
$sql="select * FROM(SELECT hora,usuari,text,id from missatges order by id desc limit 10) as chat ORDER BY id asc";
$result=mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
	printf("%s - (%s): %s",$row["hora"],$row["usuari"],$row["text"]);
	echo "</p>";
    }

mysqli_free_result($result);

mysqli_close($conn);

?>
</section>
<br>
<section id="formulari">
<form method="post" action="insertar.php">
  <input type="text" name="nombre" placeholder="el teu nom">
  <br>
  <input type="text" name="mensaje" placeholder="el teu missatge">
  <br><br>
  <input type="submit" value="Chatea">
</form>
</section>
<br>
<section id="errors">
<p>
<?php 
if(isset($_GET['alert'])) {
printf(htmlspecialchars($_GET['alert']));
} else {
printf("Linea de alertas");
}
?>
</p>
</section>
</body>
</html>
