<?php
include 'connexioBDD.php';


class Tasca
{
   private $id;
   private $Nom;
   private $descripcio;
   private $Participant;
   private $Estat;

   /*public function __construct($id, $Nom, $descripcio, $Participant, $Estat) {
        $this->id = $id;
        $this->Nom = $Nom;
        $this->descripcio = $descripcio;
        $this->Participant = $Participant;
        $this->Estat = $Estat;
     }     */

   //getters
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
   function modificarTasca($connexioDB, $id, $estat)
   {
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
   function listarKanban($connexioDB, $Estat)
   {
      // query por mejorar, ahora solo lista todas por estado
      $query = "SELECT * FROM `Tasca` WHERE `Estat` = '$Estat'";
      $result = mysqli_query($connexioDB, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($connexioDB), E_USER_ERROR);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
         mysqli_data_seek($result, 0);
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo '<div class="alert alert-success" id="tasca' . $row["Id"] . '" data-bs-toggle="modal" data-bs-target="#modal' . $row["Id"] . '" draggable="true" ondragstart="drag(event)">';
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
   }
}
