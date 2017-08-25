<?php
include_once("PerfilCollector.php");

$id =1;

$PerfilCollectorObj = new PerfilCollector();

foreach ($PerfilCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdPerfil() . "  && " .$c->getNombre() . " && " .$c->getTipo() . " && ".$c->getFechaNacimiento();                                     
  echo "</div>"; 
}


?>
