<?php
require_once ("connexioBDD.php");
    class Kanban{
        public $id;
        public $idTasca;
        public $nomTasca;
        public $descripcioTasca;
        public $estat;
        public $assignament;

        function setIDkanban($id){
            $this->id = $id;
        }
        function getIDkanban(){
            return $this->id;
        }
        function setIDtasca($idTasca){
            $this->idTasca = $idTasca;
        }
        function getIDtasca(){
            return $this->idTasca;
        }
        function setNomTasca($nomTasca){
            $this->nomTasca = $nomTasca;
        }
        function getNomTasca(){
            return $this->nomTasca;
        }
        function setDescripcioTasca($descripcioTasca){
            $this->descripcioTasca = $descripcioTasca;
        }
        function getDescripcioTasca(){
            return $this->descripcioTasca;
        }
        function setEstatTasca($estat){
            $this->estat = $estat;
        }
        function getEstatTasca(){
            return $this->estat;
        }
        function setAssignamentTasca($assignament){
            $this->assignament = $assignament;
        }
        function getAssignamentTasca(){
            return $this->assignament;
        }
        function newObjKanban($id, $idTasca, $nomTasca, $descripcioTasca, $estat, $assignament){
            $arrayKanban[$contador]->id=$id;
            $arrayKanban[$contador]->idTasca=$idTasca;
            $arrayKanban[$contador]->nomTasca=$nomTasca;
            $arrayKanban[$contador]->descripcioTasca=$descripcioTasca;
            $arrayKanban[$contador]->estat=$estat;
            $arrayKanban[$contador]->assignament=$assignament;

            $contarKanban ++;
            return $arrayKanban;
        }
    }
?>