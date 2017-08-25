<?php

class Perfil
{
    private $idperfil;
    private $nombre;
    private $tipo;
private $fechanacimiento;
    
     function __construct($idperfil, $nombre, $tipo, $fechanacimiento) {
       $this->idPerfil = $idperfil;
       $this->nombre = $nombre;
	$this->tipo = $tipo;
	$this->fechaNacimiento = $fechanacimiento;
     }
    
     function setIdPerfil($idperfil){
       $this->idPerfil = $idperfil;
     } 
     function getIdPerfil(){
       return $this->idPerfil;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
 function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
 function setFechaNacimiento($fechanacimiento){
       $this->fechaNacimiento = $nombre;
     } 
     function getFechaNacimiento(){
       return $this->fechaNacimiento;
     } 

}

?> 
