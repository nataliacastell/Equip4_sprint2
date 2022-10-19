<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Presupost/CSS/estils.css">
    <link href="./Presupost/CSS/bootstrap.min.css" rel="stylesheet">
    <title>Tudor Constantin</title>
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="./Img/PymeShieldLiteTransparent.png" alt="" width="172" height="137">
                <h2>Formulari Presupost</h2>
                <p class="lead">Emplena el formulari per a enviar el presupost.</p>
            </div>

            <div class="row g-5">
                <div class="">
                    <h4 class="mb-3">Presupost</h4>

                    <form action="" method="post" class="needs-validation" novalidate>
                        <div class="row g-3 ">

                            <div class="col-12">
                                <label for="preg1" class="form-label">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Similique expedita sapiente fuga, distinctio numquam quis repellendus aut
                                    nesciunt et quo. Nostrum maiores quia velit cupiditate quisquam nulla culpa
                                    veritatis voluptatum?</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg1" placeholder="Cost" required>
                                    <div class="invalid-feedback">
                                        Ingresa un presupost válid, en cas contrari posa un 0.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="preg2" class="form-label">Lorem, ipsum dolor sit amet consectetur
                                    adipisicing elit. Sequi doloremque a dolore obcaecati ipsam porro, aliquam minus,
                                    ratione repellat fugiat, alias dicta sunt velit tempore laudantium eum quae
                                    voluptatum asperiores?</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg2" placeholder="Cost" required>
                                    <div class="invalid-feedback">
                                        Ingresa un presupost válid, en cas contrari posa un 0.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="preg3" class="form-label">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Asperiores facere consequuntur odio temporibus magnam libero, ullam neque
                                    eaque, molestias in quis deleniti rem modi tempora vitae! Exercitationem quam
                                    voluptas officia.</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">€</span>
                                    <input type="text" class="form-control" name="preg3" placeholder="Cost" required>
                                    <div class="invalid-feedback">
                                        Ingresa un presupost válid, en cas contrari posa un 0.
                                    </div>
                                </div>
                            </div>

                            <?php
                            $presupost1 = $_POST['preg1'];
                            $presupost2 = $_POST['preg2'];
                            $presupost3 = $_POST['preg3'];
                            
                            $total_presupost = $presupost1 + $presupost2 + $presupost3;

                            echo "<p> Total Presupost: ".$total_presupost. "</p>"
                            ?>
                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Formulari</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 PYMERALIA</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacidad</a></li>
                <li class="list-inline-item"><a href="#">Términos y Condiciones</a></li>
                <li class="list-inline-item"><a href="#">Soporte</a></li>
            </ul>
        </footer>
    </div>


    <script src="./Presupost/CSS/bootstrap.bundle.min.js"></script>
    <script src="./Presupost/JS/form-validation.js"></script>

</body>

</html>