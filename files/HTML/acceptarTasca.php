<?php 
session_start();
$_SESSION['id'] = 2;?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../CSS/style.css">
  <title>Aceptar tareas Presupuesto</title>
  <?php require_once("head.php");?>
</head>

<body class="d-flex flex-column min-vh-100" >
  <header class="sticky-top">
  <?php require_once("header.php");?>
  </header class="sticky-top">


    <div id="container-fluid" style="margin:5%">
        <div id="container1">
            <p >Inseguridad detectada:</p>
            <p class="inseguretat">


              <?php

              // Cal arreglar per a que agafi la ruta i no tenir tot el codi aqui dins

              $db_host="mariadb"; //si no es "mariadb".
              $db="oversegurity"; //nom de la base de dades
              $user="root"; //usuari BDD
              $pass="root"; //pass BDD

              $connexioDB = mysqli_connect($db_host, $user, $pass, $db);

              if ($connexioDB->connect_error) {
                die("Connexió fallida: " . $connexioDB->connect_error);
              }
              $id_user=$_SESSION['id'] ;             
              $query= "
              SELECT name_recommendation 
              FROM recommendations 
              INNER JOIN answers 
              ON recommendations.id_answer = answers.id_answer 
              INNER JOIN questions 
              ON answers.id_question = questions.id_question 
              INNER JOIN questionnaries 
              ON questions.id_questionary = questionnaries.id_questionary 
              WHERE questionnaries.id_user ='$id_user'; 

              ";
              $linies = mysqli_query($connexioDB,$query);
              $linia = mysqli_fetch_array($linies);
              print "$linia[0]";
              ?>
            </p>
            <br>
            <p>Soluciones:</p>
            
            <form >
                <div class="mb-3">
                    <select class="solucio" type="text" id="solucio" class="form-select" placeholder="select">
                    <option value="0">Seleccione la opcion</option>
                    
                    <?php

                    // Cal arreglar per a que agafi la ruta i no tenir tot el codi aqui dins
                    
                    $db_host="mariadb"; //si no es "mariadb".
                    $db="oversegurity"; //nom de la base de dades
                    $user="root"; //usuari BDD
                    $pass="root"; //pass BDD
      
                    $connexioDB = mysqli_connect($db_host, $user, $pass, $db);
      
                    if ($connexioDB->connect_error) {
                      die("Connexió fallida: " . $connexioDB->connect_error);
                    }
                    $id_user=$_SESSION['id'] ;             
                    $query= "
                    SELECT * 
                    FROM recommendations 
                    INNER JOIN answers 
                    ON recommendations.id_answer = answers.id_answer 
                    INNER JOIN questions 
                    ON answers.id_question = questions.id_question 
                    INNER JOIN questionnaries 
                    ON questions.id_questionary = questionnaries.id_questionary 
                    WHERE questionnaries.id_user ='$id_user'
                    ORDER BY recommendations.id_recommendation; 
      
                    ";
                    $linies = mysqli_query($connexioDB,$query);

                    while ($linia = mysqli_fetch_array($linies)) {
                      print '<option value="'.$linia['id_recommendation'].'">'.$linia['description_recommendation'].'</option>';
                    }
                    ?>
                    </select>
                </div>
                <!-- Enviem el form segons si la acepta + id pimeralia o +id empresa Auditada (opcio de crear 2 arxius amb el id de la empresa i crear tasca desde alli)-->
                <button href="seguent tasca a aceptar" class="btn btn-secondary esquerra">Ignore</button>
                <button type="submit" class="btn btn-secondary">Make myself</button>
                <button type="submit" class="btn btn-secondary dreta">Pymeralia</button>
            </form>
        </div>
        <!-- Cambiar contingut info del div de dalt  -->

        <button class="btn btn-danger">Previous</button>
        <button class="btn btn-success dreta">Next</button>
      </div>

    <main>
        <footer class="bg-black text-center text-lg-center mt-auto">
            <?php require_once("footer.php");?>
            </footer>
          </body>
          
          </html>