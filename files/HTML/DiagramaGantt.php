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
        <div class="navbar navbar-expand-sm p-0" id="header-logo">
            <div class="container-fluid d-flex flex-row justify-content-between navbar-nav ">
                <div class="p-2" id="logo">
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../Img/logo_pymeshield.png" alt="Logo"
                                class="d-inline-block align-text-middle">
                            pymeshield</a></li>
                </div>

                <!--Ruptura del responsive en 576px a 575px-->
                <div class="p-2">
                    <div class="container" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2" style="--bs-scroll-height: 100px;">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="menu-dropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" id="menu-user">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card"></i>Editar
                                            Perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-language"></i>Idioma</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-palette"></i>Tema</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-right-from-bracket"></i>Cerrar Sesión</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-shield-halved"></i>Admin</a></li>
                                </ul>
                            </li>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Logo-->


        <nav class="navbar navbar-expand-lg p-0" id="main-navbar">
            <div class="container-fluid">
                <span class="p-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button></span>
                <div class="collapse navbar-collapse p-0" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-house"></i>Kanban</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-square-poll-vertical"></i>Informe</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i
                                    class="fa-solid fa-clipboard-question"></i>Cuestionario</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-qrcode"></i>QR</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--Header Menu-->

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