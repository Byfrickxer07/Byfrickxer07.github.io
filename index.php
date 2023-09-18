<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aviones</title>
    <link rel="stylesheet" href="style.css">
    <div class="header2">
        <h1>Galeria de Aviones de combate</h1>
    </div>

    <?php  

$conexionDatos = mysqli_connect('localhost', 'phpmyadmin', 'RedesInformaticas', 'db_fricker');
if (mysqli_connect_errno()) {
exit('Failed to connect to MySQL: ' . mysqli_connect_error());}

?>

<?php
		if (!empty($_GET['aviones'])) {
			$queryavionEspecifico = "SELECT * FROM aviones WHERE nombre = ". $_GET['aviones'];
			$resultavionEspecifico = mysqli_query($conexionDatos, $queryavionEspecifico);
			$avionEspecifico = mysqli_fetch_array($resultavionEspecifico);
			echo "<title></title>";
		} else {
			echo "<title></title>";
		}
	?>

</head>
<body>
<form action="index.php">
   <label for="">Elegí el avion que desea ver:</label>
  <select name="aviones">
    <option value="F15">F15</option>
    <option value="F16">F16</option>
    <option value="lookhead">lookhead</option>
     </select>
  <input type="submit">
  </form>
  <?php
	if (!empty($_GET['avionones'])) {
		echo "<h3>viendo:$avionEspecifico[1]</h3>";
		$queryfotoavion = "SELECT * FROM aviones WHERE id_foto =  ".$_GET['aviones'];
		echo "<img>$fotoavion[1]</img>";
		echo "<a href=\"index.php\">Volver</a>";
		} else {
			echo "<br>";
		}
		mysqli_close($conexionDatos);
	?>

</body>
</html>