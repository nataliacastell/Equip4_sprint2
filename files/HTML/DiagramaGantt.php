<?php
require_once("../PHP/TascaClass.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pymeshield Gantt</title>
    <?php require_once("head.php"); ?>
    <script src="../JavaScript/gantt.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <?php require_once("header.php"); ?>
    </header>
    <main>
        <p class="h1 text-center pb-3">{Nombre del informe}</p>
        <div class="table-responsive rounded-top" id="gantt"></div>
        <?php
        $ganntt1 = new Tasca;
        $modal = $ganntt1->listarGantt($connexioDB);
        while ($row = mysqli_fetch_array($modal, MYSQLI_ASSOC)) {
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
        ?>
    </main>
    <footer class="bg-black text-center text-lg-center mt-auto">
        <?php require_once("footer.php"); ?>
    </footer>
</body>

</html>