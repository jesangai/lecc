<?php
 session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ='utf-8'>
		<title> INICIO SESION </title>
	</head>
	<body>
<?php
if(isset($_SESSION['MiSesion'])){
	echo"<p>Hola usuario:(" . $_SESSION['MiSesion']. ")
		[<a href='salir.php'>salir</a>]";


include_once('PerfilCollector.php');

$id =1;

$PerfilCollectorObj = new PerfilCollector();

foreach ($PerfilCollectorObj->showDemos() as $c){
  echo "<div>";
  echo "<form>";
 echo "<fieldset>";
  echo "<label>".$c->getIdPerfil().;
  echo $c->getNombre();
  echo $c->getTipo();
  echo $c->getFechaNacimiento();
	echo " " . "<img><a href='imagen.jpg'></a></img>";    
	echo " " . "<a href='eliminar.php?id=".$c->getIdPerfil()."'>ELiminar</a>";    
	echo " " . "<a href='formularioPerfilEditar.php?id=".$c->getIdPerfil()."'>Editar</a>";
  echo "</fieldset>"
echo "</form>";                        
  echo "</div>"; 
}





}else{
?>

		<form action ="login.php" method="get">
		<fieldset>
			<label> USUARIO </label>
		     		<input type="text" name="usuario"/></br>
		     	<label> CLAVE</label>
				<input type="text" name="clave"/></br>
		     	<button type="submit">ACEPTAR</button>
		</fieldset>
		</form> 

<?php } ?>

		
	</body>
</html>

