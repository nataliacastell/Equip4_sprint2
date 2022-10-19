<?php

    class Presupost{
        private $id;
        private $presupost;
        private $descripcio;
        private $id_tasca;


        public function __construct($id, $presupost, $descripcio, $id_tasca) {
        
            $this->id = $id;
            $this->presupost = $presupost;
            $this->descripcio = $descripcio;
            $this->id_tasca = $id_tasca;
        }

        /* Getters */

        public function getId() {
            return $this->id;
        }

        public function getPresupost() {
            return $this->presupost;
        }

        public function getDescripcio() {
            return $this->descripcio;
        }

        public function getTasca() {
            return $this-> id_tasca;
        }

        /* Setters */

        public function setId($id) {
            $this->id = $id;
        }

        public function setPresupost($presupost) {
            $this->presupost = $presupost;
        }

        public function setDescripcio($descripcio) {
            $this->descripcio = $descripcio;
        }

        public function setTasca($id_tasca) {
            $this->id_tasca = $id_tasca;
        }

        /* Mètodes / Funcions */

        public function calcularPresupost($presupost_1, $presupost_2, $presupost_3){
            
            $totalPresupost = $presupost_1 + $presupost_2 + $presupost_3;

            return $totalPresupost;
        }

        public function modificarPresupost($id, $presupost){
            $this->id = $id;
            $this->presupost = $presupost;
        }

        public function eliminarPresupost($id){
            $this->id = $id;
            $this->presupost = "Presupost eliminat";
        }
    
    
    
    
    }
