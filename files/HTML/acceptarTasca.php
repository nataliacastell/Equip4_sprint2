<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pymeshield Kanban</title>
  <?php require_once("head.php");?>
  <script src="../JavaScript/kanban.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
  <header class="sticky-top">
  <?php require_once("header.php");?>
  </header class="sticky-top">


    <div id="container0">
        <div id="container1">
            <p>Inseguredad detectada</p>
            <p class="inseguretat"><php?
              include_once 'canviTasca.php';
              function consultaincidencia();
              ?>
            </p>
            <br>
            <p>Solucions viables:</p>
            
            <form >
                <div class="mb-3">
                    <select class="solucio" type="text" id="solucio" class="form-select" placeholder="select">
                    <option>opcio A (info volcada desde bbdd)</option>
                    <option>opcio B (info volcada desde bbdd)</option>
                    <option>opcio C (info volcada desde bbdd)</option>
                    </select>
                </div>
                <!-- Enviem el form segons si la acepta + id pimeralia o +id empresa Auditada (opcio de crear 2 arxius amb el id de la empresa i crear tasca desde alli)-->
                <button href="seguent tasca a aceptar" class="boto esquerra">Ignore</button>
                <button type="submit" class="boto">Make myself</button>
                <button type="submit" class="boto dreta">Pymeralia</button>
            </form>
        </div>
        <!-- Cambiar contingut info del div de dalt  -->

        <button class="boto">Previous</button>
        <button class="boto dreta">Next</button>
      </div>

    <main>
        <footer class="bg-black text-center text-lg-center mt-auto">
            <?php require_once("footer.php");?>
            </footer>
          </body>
          
          </html>