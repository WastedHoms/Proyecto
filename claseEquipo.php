<?php
require_once("./claseJugador.php");
//Clase Equipo
class Equipo {
 //parámetros necesarios
  private $id;
  private $nombre;
  private $division;
    
  //Constructor
    function __construct($nombre, $id, $division) {
      $this->nombre = $nombre;
      $this->id = $id;
      $this->division = $division;
     
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
    
  function set_division($division) {
    $this->division = $division;
  }
  function get_division() {
    return $this->division;
  }
    

  public function cargarJugadores(){
    //Creación de un array para guardar los cóigos de los jugadores
    $jugadores=array();
    //apertura del canal para conectar a la base de datos
    $canal=new mysqli(IP,USUARIO,CLAVE,BD);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $canal->set_charset("utf8");
    
    //Preparación de la sentencia para seleccionar todos los códigos de los jugadores
    $stmt=$canal->prepare("SELECT codigo FROM jugadores where ID = ?"); 
    $sql->bind_param('d',$id);
    if (!$stmt){
        die("mal la sentencia");
    }
    //Ejecución de la sentencia
    if (!$stmt->execute()){
        die("de puta pena");
    }
    //El dato obtenido se guarda en esta variable
    $stmt->bind_result($j);


        $contador=0;
        //Bucle para introducir en el array todos los codigos de jugadores
        while($stmt->fetch()) {

            $jugadores[$contador]=$j;


           $contador++;
        }
    
       

           /* cerrar sentencia */
        $stmt->close();
       
        unset($stmt);
        
        //Se cierra el canal
        $canal->close();
        
}



}
?>