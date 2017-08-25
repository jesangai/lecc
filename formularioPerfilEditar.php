<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> FORMULARIO Editar Perfil</title>
	</head>
	<body>
<?php
$id =$_GET["id"];
echo "valor id: ". $id;
include_once('PerfilCollector.php');
include_once('Perfil.php');
$PerfilCollectorObj = new PerfilCollector();
$ObjDemo = $PerfilCollectorObj->showDemo($id);
print_r($ObjDemo);
?>
<h2>EDITAR OBJETO PERFIL</h2>
<form action ="actualizar.php" method="get">
<p>
id:  <input type="text" name="idperfil" value="<?php echo $ObjDemo->getIdperfil(); ?>" readonly />
</p>
<p>
nombre: <input type="text" name="nombre" value="<?php echo $ObjDemo->getnombre(); ?>" autofocus required />
</p>
<p>
tipo: <input type="text" name="tipo" value="<?php echo $ObjDemo->gettipo(); ?>" autofocus required />
</p>
<p>
fechaNacimiento: <input type="text" name="nombre" value="<?php echo $ObjDemo->getFechanacimiento(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>	
<input type="submit" value="Guardar" /> 
</form> 

</body>
</html>

