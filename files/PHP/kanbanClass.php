<?php
include 'connexioBDD.php';

    class Kanban{
        public $id;
        public $idTasca;
        public $nomTasca;
        public $descripcioTasca;
        public $estat;
        public $assignament;

       
        public function __construct($id, $idTasca, $nomTasca, $descripcioTasca, $estat, $assignament){
            $arrayKanban[$contador]->id=$id;
            $arrayKanban[$contador]->idTasca=$idTasca;
            $arrayKanban[$contador]->nomTasca=$nomTasca;
            $arrayKanban[$contador]->descripcioTasca=$descripcioTasca;
            $arrayKanban[$contador]->estat=$estat;
            $arrayKanban[$contador]->assignament=$assignament;
            return $arrayKanban;
        }
        function consultarKanban($id){
            include_once 'connexioBDD.php';
            if ($linea = mysqli_query ($query= "SELECT * FROM Kanban WHERE id.Kanban = '$id';")){
            }
            $connexioDB->close();
            return $linea;
        }

        function consultaTasca($idTasca){
            include_once 'connexioBDD.php';
            if ($linea = mysqli_query ($query= "SELECT * FROM Tasca ... ;")){
            }
            $connexioDB->close();
            return $linea;
        }
        
        function assignarTasca($idTasca,$idUsuari){
            include_once 'connexioBDD.php';
            if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            }
            $connexioDB->close();
            return $linea;

        }

        function modificarEstat(){
            include_once 'connexioBDD.php';
            if ($linea = mysqli_query ($query= "UPDATE ... ;")){
            }
            $connexioDB->close();
            return $linea;
        }
    }
?>