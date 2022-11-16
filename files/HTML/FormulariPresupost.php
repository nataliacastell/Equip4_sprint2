<?php require_once("../PHP/PresupostClass.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pymeshield Presupuesto</title>
    <?php require_once("head.php"); ?>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="sticky-top">
        <?php require_once("header.php"); ?>
    </header>
    <main>
        <div class="container p-3">
            <div class="row">
                <div class="">
                    <h4 class="mb-3">Presupost</h4>

                    <form action="enviarPressupost.php" method="post" class="row g-3" novalidate>
                        <div class="row g-3 ">

                            <div class="col-12">
                                <label for="preg1" class="form-label">
                                    <?php
                                    $presupuesto = new Presupost();
                                    $resultat = $presupuesto->mostrarTasca();

                                    foreach ($resultat as $row) {
                                        echo '<div class="col-auto">',
                                        '<label for="preg2" class="form-label">' . $row['name_task'] . '<br>' . $row['description_task'] . '</label>',
                                        '<div class="input-group has-validation">',
                                        '<span class="input-group-text">€</span>',
                                        '<input type="number" min="0" step="2.5" class="form-control" name="preg'. $row['id_task'].' " placeholder="Cost" required>',
                                        '</div>',
                                        '<div class="col-auto" style="padding-top:10px">',
                                        '<button class="btn btn-primary mb-3" type="submit" id="enviar'. $row['id_task'].' ">Enviar Presupost</button>',
                                        '</div>',
                                        '</div>';
                                    };
                                    ?>

                                </label>
                    </form>
                </div>
            </div>
    </main>
    <footer class="bg-black text-center text-lg-center mt-auto">
        <?php require_once("footer.php"); ?>
    </footer>
</body>

</html>