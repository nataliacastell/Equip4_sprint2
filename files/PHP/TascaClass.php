<?php
# VARIABLES GLOBALS
session_start();
$_SESSION['id'] = 1;

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
   function __construct()
   {
      //obtengo un array con los parámetros enviados a la función
      $params = func_get_args();
      //saco el número de parámetros que estoy recibiendo
      $num_params = func_num_args();
      //cada constructor de un número dado de parámtros tendrá un nombre de función
      //atendiendo al siguiente modelo __construct1() __construct2()...
      $funcion_constructor = '__construct' . $num_params;
      //compruebo si hay un constructor con ese número de parámetros
      if (method_exists($this, $funcion_constructor)) {
         //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
         call_user_func_array(array($this, $funcion_constructor), $params);
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
      $this->idUsuari = $_SESSION['id'];
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
      if ($estat == "InProgress") {
         $query = "UPDATE `tasks` SET `state` = '$estat', `percentage` = 50 WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      } else if ($estat == "Done") {
         $query = "UPDATE `tasks` SET `state` = '$estat', `percentage` = 100 WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      } else {
         $query = "UPDATE `tasks` SET `state` = '$estat', `percentage` = 0 WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      }
   }
   function modificarPorcentaje($id, $porcentaje)
   {
      include 'connexioBDD.php';
      if ($porcentaje > 0 && $porcentaje < 100) {
         $query = "UPDATE `tasks` SET `state` = 'InProgress', `percentage` = $porcentaje WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      } else if ($porcentaje == 100) {
         $query = "UPDATE `tasks` SET `state` = 'Done', `percentage` = $porcentaje WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      } else {
         $query = "UPDATE `tasks` SET `state` = 'ToDo', `percentage` = $porcentaje WHERE `tasks`.`id_task` = $id";
         mysqli_query($connexioDB, $query);
      }
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
      $query = "SELECT * FROM `tasks` WHERE `state` = '$Estat';";
      $result = mysqli_query($connexioDB, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($connexioDB), E_USER_ERROR);
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
         echo '<div class="alert alert-' . $row["importance"] . '" id="tasca' . $row["id_task"] . '" data-bs-toggle="modal" data-bs-target="#modal' . $row["id_task"] . '" draggable="true" ondragstart="drag(event)">';
         echo $row["name_task"];
         echo '</div>';
         echo '<div class="modal fade" id="modal' . $row["id_task"] . '" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel"> <i class="fa-solid fa-list-check"></i>' . $row["name_task"] . '</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body"><h2 class="fs-5"><i class="fa-regular fa-clipboard"></i>Descripción</h2><p>'
            . $row["description_task"] .
            '</p><hr><h2 class="fs-5"><i class="fa-regular fa-clock"></i>Fecha</h2><p>' . $row["start_date"] . ' a ' . $row["final_date"] .
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
      $query = $connexioDB->prepare('SELECT name_task, `start_date`, final_date, importance, `percentage`, id_task FROM `tasks`');
      $query->execute();
      $result = $query->get_result();
      $outp = $result->fetch_all();

      echo json_encode($outp);
   }
   function listarGantt()
   {
      include 'connexioBDD.php';
      // query por mejorar, ahora solo lista todas por estado
      $query = "SELECT * FROM `tasks`";
      return $connexioDB->query($query);
   }
}
