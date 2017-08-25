<?php
 session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> ELIMINAR</title>
	</head>
	<body>
		<p>Edicion en proceso......</p>
		<?php
		$idperfil =$_GET["id"];
		include_once("PerfilCollector.php");
		$PerfilCollectorObj = new PerfilCollector();
		$PerfilCollectorObj->deleteDemo($idperfil);
		echo "se ha eliminado el id: ".$idperfil." </br>";
		?>
		<div><a href="index.php">Volver al Inicio</a></div>
	</body>
</html>
