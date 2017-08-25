<?php

include_once('Perfil.php');
include_once('Collector.php');

class PerfilCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM perfil ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Perfil($c{'idperfil'},$c{'nombre'},$c{'tipo'},$c{'fechanacimiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

 function showDemo($id) {
   $row = self::$db->getRows("SELECT * FROM perfil where idperfil= ?", array("{$id}"));        
   $ObjDemo = new Perfil($row[0]{'idperfil'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0]{'fechanacimiento'});
  echo "Linea 1";
   return $ObjDemo;   
 }

function updateDemo($id,$nombre) {
   $insertrow = self::$db->updateRow("UPDATE public.perfil SET nombre = ? WHERE idperfil= ? ", array("{$nombre}","$id"));        
 }

function deleteDemo($id) {
   $insertrow = self::$db->deleteRow("DELETE FROM perfil WHERE idperfil= ? ", array("{$id}"));        
 }


function createDemo($nombre) {
   $insertrow = self::$db->insertRow("INSERT INTO public.perfil (nombre) VALUES (?) ", array("{$nombre}"));        
 }
}
?>

