<?php
 session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> ACTUALIZAR</title>
	</head>
	<body>
		<p>Edicion en proceso......</p>
		<?php
		$id =$_GET["idperfil"];
		$nombre =$_GET["nombre"];
		include_once("PerfilCollector.php");
		$PerfilCollectorObj = new PerfilCollector();
		$PerfilCollectorObj->updateDemo($idperfil,$nombre);
		echo "id: ".$idperfil." actualizado a: ".$nombre." </br>";
		?>
		<div><a href="index.php">Volver al Inicio</a></div>
	</body>
</html>
