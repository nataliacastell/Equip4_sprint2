<?php 
include 'connexioBDD.php';


class Tasca {
    private $id;
    private $Nom;
    private $descripcio;
    private $Participant;
    private $Estat;

    public function __construct($id, $Nom, $descripcio, $Participant, $Estat) {
        $this->id = $id;
        $this->Nom = $Nom;
        $this->descripcio = $descripcio;
        $this->Participant = $Participant;
        $this->Estat = $Estat;
     }     

//getters
public function getId(){
    return $this->id;
 }
 public function getNom(){
    return $this->Nom;
 }
 public function getParticipant(){
    return $this->Participant;
 }
 public function getEstat(){
    return $this->Estat;
 }
   
//setters

public function setId($id){
    $this->id = $id;
 }
 public function setNom($Nom){
    $this->Nom = $Nom;
 }
 public function setParticipant($Participant){
    $this->Participant = $Participant;
 }
 public function setEstat($Estat){
    $this->Estat = $Estat;
 }
    
    
  
  /*  function crearTasca(){
        
    }*/
    function eliminarTasca(){
    }
    function modificarTasca(){
    }
    function assignarTasca(){
    }
    function desassignarasca(){
    }
    function modificarEstatTasca(){
    }
}
