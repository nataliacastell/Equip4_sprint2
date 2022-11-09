<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pymeshield Kanban</title>
  <?php require_once("head.php");?>
  <script src="../JavaScript/gantt.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
    <?php require_once("header.php");?>
    </header>
    <main>
        <h1 style="text-align: center;">Gantt Projecte</h1>
        <div id="gantt"></div>
        <script type="text/javascript">

            var prymeralia = "#d46b00";
            var empresa = "#0b9971";
            var client = "#4287f5";

            const obj = new Gantt([
                ['Tasca 1', '2022/05/12', '2022/05/13', prymeralia, 80],
                ['Tasca 2', '2022/05/13', '2022/05/14', empresa, 10],
                ['Tasca 3', '2022/05/14', '2022/05/17', client, 20],
                ['Tasca 4', '2022/05/17', '2022/05/22', prymeralia, 100],
                ['Tasca 5', '2022/05/19', '2022/05/24', empresa, 55],
            ]);
        </script>
    </main>
    <footer class="bg-black text-center text-lg-center mt-auto">
        <?php require_once("footer.php");?>
        </footer>
      </body>
      
      </html>