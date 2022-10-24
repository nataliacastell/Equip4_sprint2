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
     * getIdGant
     *
     * @return void
     */
    public function getIdGant()
    {
        return $this->idGant;
    }    
    /**
     * getIdTasca
     *
     * @return void
     */
    public function getIdTasca()
    {
        return $this->idTasca;
    }    
    /**
     * getDescripcio
     *
     * @return void
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }    
    /**
     * getIdUsuari
     *
     * @return void
     */
    public function getIdUsuari()
    {
        return $this->idUsuari;
    }    
    /**
     * setIdGant
     *
     * @param  mixed $idGant
     * @return void
     */
    public function setIdGant($idGant)
    {
        $this->idGant = $idGant;
    }    
    /**
     * setIdTasca
     *
     * @param  mixed $idTasca
     * @return void
     */
    public function setIdTasca($idTasca)
    {
        $this->idTasca = $idTasca;
    }    
    /**
     * setIdDescripcio
     *
     * @param  mixed $descripcio
     * @return void
     */
    public function setIdDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;
    }    
    /**
     * setIdUsuari
     *
     * @param  mixed $idUsuari
     * @return void
     */
    public function setIdUsuari($idUsuari)
    {
        $this->idUsuari = $idUsuari;
    }    
    /**
     * assignarTasca
     *
     * @return void
     */
    private function assignarTasca()
    {
    }    
    /**
     * assignarUsuari
     *
     * @return void
     */
    private function assignarUsuari()
    {
    }    
    /**
     * crearTasca
     *
     * @return void
     */
    private function crearTasca()
    {
    }    
    /**
     * establirDurada
     *
     * @return void
     */
    private function establirDurada()
    {
    }    
    /**
     * eliminarTasca
     *
     * @return void
     */
    private function eliminarTasca()
    {
    }    
    /**
     * modificarDurada
     *
     * @return void
     */
    private function modificarDurada()
    {
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
