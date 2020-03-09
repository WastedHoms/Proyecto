<?php
//Clase Jugador
class Jugador {
 //parámetros necesarios
  private $id;
  private $nombre;
  private $idequipo;
    
  //Constructor
    function __construct($nombre, $id, $idequipo) {
      $this->nombre = $nombre;
      $this->id = $id;
      $this->idequipo = $idequipo;
     
     }
     //Funciones para obtener los datos
  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  function get_nombre() {
    return $this->nombre;
  }

  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
    
  function set_idequipo($idequipo) {
    $this->idequipo = $idequipo;
  }
  function get_idequipo() {
    return $this->idequipo;
  }
    
}
?>