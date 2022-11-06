<?php
include_once("connexioBDD.php");
include_once 'Tasca.php';
class Kanban extends Tasca
{
  function listarKanban($conn, $Estat)
  {
    // query por mejorar, ahora solo lista todas por estado
    $query = "SELECT * FROM `Tasca` WHERE `Estat` = '$Estat'";
    $result = mysqli_query($conn, $query) or trigger_error("Consulta SQL fallida!: $query - Error: " . mysqli_error($conn), E_USER_ERROR);
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
    } else {
      echo '<div class="alert alert-danger" role="alert">
         ¡No hay tareas!
       </div>';
    }
  }
}
