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
        include_once 'conecta_desconecta.php';
        conectar();
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Tasca assignada");
        }
        desconectar();
    }          
    /**
     * establirDurada
     *
     * @return void
     */
    private function establirDurada(){
        include_once 'conecta_desconecta.php';
        conectar();
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Durada establida");
        }
        desconectar();
    }    
    /**
     * eliminarTasca
     *
     * @return void
     */
    private function eliminarTasca(){
        include_once 'conecta_desconecta.php';
        conectar();
        if ($linea = mysqli_query ($query= "DELETE ... ;")){
            printf ("Tasca eliminada");
        }
        desconectar();
    }    
    /**
     * modificarDurada
     *
     * @return void
     */
    private function modificarDurada(){
        include_once 'conecta_desconecta.php';
        conectar();
        if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            printf ("Durada modificada");
        }
        desconectar();
    }    
    /**
     * desactivarTasca
     *
     * @return void
     */
    private function desactivarGant()
    {
    }
}
