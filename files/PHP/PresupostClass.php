<?php


    class Presupost{
        private $id;
        private $presupost;
        private $descripcio;
        private $id_tasca;


        /**
     * __construct
     *
     * @param  mixed $idUsuari
     * @return void
     */
    function __construct(){
		//obtengo un array con los parámetros enviados a la función
		$params = func_get_args();
		//saco el número de parámetros que estoy recibiendo
		$num_params = func_num_args();
		//cada constructor de un número dado de parámtros tendrá un nombre de función
		//atendiendo al siguiente modelo __construct1() __construct2()...
		$funcion_constructor ='__construct'.$num_params;
		//compruebo si hay un constructor con ese número de parámetros
		if (method_exists($this,$funcion_constructor)) {
			//si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
			call_user_func_array(array($this,$funcion_constructor),$params);
		}
	}
  
	//ahora declaro una serie de métodos constructores que aceptan diversos números de parámetros
	/**
     * constructor1 --> IDUsuari
     *
     * @return void
     */
    function __construct1()
	{
		$this->idUsuari=$_SESSION['id'];
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
