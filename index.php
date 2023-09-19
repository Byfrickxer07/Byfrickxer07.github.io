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
	<img src="" alt="">

    <?php  

$mysqli = mysqli_connect('localhost', 'phpmyadmin', 'RedesInformaticas', 'db_fricker');
if (mysqli_connect_errno()) {
exit('Failed to connect to MySQL: ' . mysqli_connect_error());}

?>

</head>
<body>
<form action="index.php">
   <label for="">Elegí el avion que desea ver:</label>
  <select name="aviones">
    <option value="F15">F15</option>
    <option value="F16">F16</option>
     </select>
  <input type="submit">
  </form>
  
  
 <?php
  $test=$_GET['aviones'];
	if (!empty($test)){

		$queryavionEspecifico = "SELECT * FROM aviones WHERE nombre =\"" . $test. "\"";
		$resultavionEspecifico = mysqli_query($mysqli, $queryavionEspecifico);
		$avionEspecifico = mysqli_fetch_array($resultavionEspecifico);
		
		echo "<h3>viendo:$avionEspecifico[1]</h3>";
		echo "<img src=$avionEspecifico[2]>";
		} else {
			echo "<br>";
		}
		mysqli_close($mysqli);
	?>

</body>
</html>