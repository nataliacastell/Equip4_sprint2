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
   function modificarTasca()
   {
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
   function listarTascas($conn, $Estat)
   {
      $query = "SELECT * FROM `Tasca` WHERE `Estat` = '$Estat'";
      $result = mysqli_query($conn, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($conn), E_USER_ERROR);
      $count = mysqli_num_rows($result);
      if ($count > 0) {
         echo '<div id="tasca" class="flex-container p-2" draggable="true" ondragstart="drag(event)">';
         echo '<table class="table table-striped table-sm">';
         $row = mysqli_fetch_assoc($result);
         echo '<thead><tr>';
         foreach ($row as $col => $value) {
            echo '<th scope="col">';
            echo $col;
            echo "</th>";
         }
         echo '</tr></thead><tbody>';
         mysqli_data_seek($result, 0);
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            foreach ($row as $field => $value) {
               echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
         }
         echo "</tbody></table></div>";
         //mysqli_close($conn);
      } else {
         echo '<div class="alert alert-danger" role="alert">
         Sense resultats!
       </div>';
      }
   }
}
