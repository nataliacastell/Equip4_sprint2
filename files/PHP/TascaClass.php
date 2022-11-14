<?php

class Tasca
{
   private $id;
   private $Nom;
   private $descripcio;
   private $Participant;
   private $Estat;

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
   public function getId()
   {
      return $this->id;
   }
   public function getNom()
   {
      return $this->Nom;
   }
   public function getParticipant()
   {
      return $this->Participant;
   }
   public function getEstat()
   {
      return $this->Estat;
   }

   //setters

   public function setId($id)
   {
      $this->id = $id;
   }
   public function setNom($Nom)
   {
      $this->Nom = $Nom;
   }
   public function setParticipant($Participant)
   {
      $this->Participant = $Participant;
   }
   public function setEstat($Estat)
   {
      $this->Estat = $Estat;
   }



   /*  function crearTasca(){
        
    }*/
   function eliminarTasca()
   {
   }
   function modificarTasca($id, $estat)
   {
      include 'connexioBDD.php';
      $query = "UPDATE `Tasca` SET `Estat` = '$estat' WHERE `Tasca`.`Id` = $id";
      mysqli_query($connexioDB, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($connexioDB), E_USER_ERROR);
   }
   function assignarTasca()
   {
   }
   function desassignarasca()
   {
   }
   function modificarEstatTasca()
   {
   }
   function listarKanban($Estat)
   {
      include 'connexioBDD.php';
      // query por mejorar, ahora solo lista todas por estado
      $query = "SELECT * FROM `Tasca` WHERE `Estat` = '$Estat'";
      $result = mysqli_query($connexioDB, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($connexioDB), E_USER_ERROR);
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
         echo '<div class="alert alert-' . $row["grado"] . '" id="tasca' . $row["Id"] . '" data-bs-toggle="modal" data-bs-target="#modal' . $row["Id"] . '" draggable="true" ondragstart="drag(event)">';
         echo $row["Nom"];
         echo '</div>';
         echo '<div class="modal fade" id="modal' . $row["Id"] . '" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel"> <i class="fa-solid fa-list-check"></i>' . $row["Nom"] . '</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body"><h2 class="fs-5"><i class="fa-regular fa-clipboard"></i>Descripción</h2><p>'
            . $row["Descripcio"] .
            '</p><hr><h2 class="fs-5"><i class="fa-regular fa-clock"></i>Fecha</h2><p>' . $row["DataInici"] . ' a ' . $row["DataFinal"] .
            '</p></div>
                </div>
              </div>
            </div>';
      }
      //mysqli_close($conn);
   }
   function jsonGantt()
   {
      include 'connexioBDD.php';
      $query = $connexioDB->prepare('SELECT Nom, DataInici, DataFinal, grado, porcentaje, id FROM `Tasca`');
      $query->execute();
      $result = $query->get_result();
      $outp = $result->fetch_all();

      echo json_encode($outp);
   }
   function listarGantt()
   {
      include 'connexioBDD.php';
      // query por mejorar, ahora solo lista todas por estado
      $query = "SELECT * FROM `Tasca`";
      return $connexioDB->query($query);
   }
}
