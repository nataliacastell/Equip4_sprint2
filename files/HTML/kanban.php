<?php
require_once("../PHP/kanban.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pymeshield Kanban</title>
  <?php require_once("./head.php");?>
  <script src="../JavaScript/kanban.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
  <header class="sticky-top">
  <?php require_once("./header.php");?>
  </header>
  <main>
    <div class="container-fluid text-center">
      <div class="row align-items-start border rounded-top pt-2">
        <div class="col-4 pymeshield-kanban border-end" id="toDo" ondrop="drop(event)" ondragover="allowDrop(event)">
          <p><strong>To-Do</strong></p>
          <div class="flex-container"> 
            <?php
            $tasca = new Kanban;
            $tasca->listarKanban($conn, 'ToDo');
            ?>
            </div>
          </div>
        <div class="col-4 pymeshield-kanban border-end" id="inProgress" ondrop="drop(event)" ondragover="allowDrop(event)">
          <p><strong>In Progress</strong></p>
          <?php
          $tasca->listarKanban($conn, 'InProgress');
          ?>
        </div>
        <div class="col-4 pymeshield-kanban" id="done" ondrop="drop(event)" ondragover="allowDrop(event)">
          <p><strong>Done</strong></p>
          <?php
          $tasca->listarKanban($conn, 'Done');
          ?>
        </div>
      </div>
    </div>
  </main>
  <footer class="bg-black text-center text-lg-center mt-auto">
  <?php require_once("./footer.php");?>
  </footer>
</body>

</html>