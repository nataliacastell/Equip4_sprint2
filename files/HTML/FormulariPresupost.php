<?php require_once("../PHP/PresupostClass.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pymeshield Kanban</title>
    <?php require_once("head.php"); ?>
    <script src="../JavaScript/kanban.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <?php require_once("header.php"); ?>
    </header class="sticky-top">
  
    <!--Header Menu-->

    </header>

    <div class="container p-3">
        <main>
            <div class="row">
                <div class="">
                    <h4 class="mb-3">Presupost</h4>

                    <form action="" method="post" class="needs-validation" novalidate>
                        <div class="row g-3 ">

                            <div class="col-12">
                                <label for="preg1" class="form-label">
                                    <?php 
                                        $presupuesto = new Presupost();
                                        $resultat = $presupuesto->mostrarTasca(); ?>
                                </label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg1" placeholder="Cost" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="preg2" class="form-label">Tasca a presupostar 2 -->Dades desde la bbdd</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg2" placeholder="Cost" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <label for="preg3" class="form-label"> Tasca a presupostar -->Dades desde la bbdd</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg3" placeholder="Cost" required>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Presupost</button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="bg-black text-center text-lg-center mt-auto">
            <?php require_once("footer.php"); ?>
        </footer>
</body>

</html>