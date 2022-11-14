<?php

class Gant
{
    private $idGant;
    private $idTasca;
    private $descripcio;
    private $idUsuari;
    
    /**
     * __construct
     *
     * @param  mixed $idGant
     * @param  mixed $idTasca
     * @param  mixed $descripcio
     * @param  mixed $idUsuari
     * @return void
     */
    public function __construct($idGant, $idTasca, $descripcio, $idUsuari)
    {
        $this->idGant = $idGant;
        $this->idTasca = $idTasca;
        $this->descripcio = $descripcio;
        $this->idUsuari = $idUsuari;
    }    
    /**
     * assignarTasca
     *
     * @return void
     */
    private function assignarTasca($idTasca){
        include_once 'connexioBDD.php';
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Tasca assignada");
        }
        $connexioDB->close();
    }          
    /**
     * establirDurada
     *
     * @return void
     */
    private function establirDurada(){
        include_once 'connexioBDD.php';
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Durada establida");
        }
        $connexioDB->close();
    }    
    /**
     * eliminarTasca
     *
     * @return void
     */
    private function eliminarTasca(){
        include_once 'connexioBDD.php';
        if ($linea = mysqli_query ($query= "DELETE ... ;")){
            printf ("Tasca eliminada");
        }
        $connexioDB->close();
    }    
    /**
     * modificarDurada
     *
     * @return void
     */
    private function modificarDurada(){
        include_once 'connexioBDD.php';
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Durada modificada");
        }
        $connexioDB->close();
    }    
    /**
     * desactivarTasca
     *
     * @return void
     */
    private function desactivarGant(){
        include_once 'connexioBDD.php';
        if ($linea = mysqli_query ($query= "DELETE ... ;")){
            printf ("Gantt desactivat");
        }
        $connexioDB->close();
    }
}
