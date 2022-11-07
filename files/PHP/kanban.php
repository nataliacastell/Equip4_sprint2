<?php
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
        
    }
?>