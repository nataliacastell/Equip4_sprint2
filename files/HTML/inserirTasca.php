<?php 
include "/../../TascaClas.php";
include_once '../PHP/connexioBDD.php';

    # VARIABLES GLOBALS
    session_start();
    $_SESSION['id'] = 2;
    $pymeralia=1;
    $count = 0;
    $numlinesReals= contarLinies();
    $numPagActual= 1;

    $solucio=$_POST["solucio"];
    $gridcheck=$_POST["gridcheck"];
    $gestio=$_POST["gestio"];
    $id_user=$_SESSION['id'] ;             

    $trues='SI';
    $falces='NO';
    if($gridcheck!=$falces){
        $gridcheck=TRUE;
      }else if($gridcheck==$falses){
        $gridcheck=FALSE;
      }

    if($gestio=="Que lo gestione Pymeralia"){
        $gestio=$pymeralia;
    }else{
        $empresa="SELECT id_company FROM users WHERE id_user=$id_user";
        $linies = mysqli_query($connexioDB,$empresa);
        $linia = mysqli_fetch_array($linies);
        $gestio = $linia['id_company'];
    }
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
            AND recommendations.description_recommendation ='$solucio'
            ORDER BY recommendations.id_recommendation; 
            ";
    $linies = mysqli_query($connexioDB,$query);
    $linia = mysqli_fetch_array($linies);
    $solucio= $linia['id_recommendation'];
    $descripcio = $linia['description_recommendation'];
    $nom = $linia['name_recommendation'];
    $inserir="
            INSERT INTO tasks(NULL,$nom,$descripcio,$gridcheck,'','','',$id_user,'',$solucio,'','',NULL)
        ";
    if(mysqli_query($connexioDB,$inserir)){
        echo '<script language="javascript">alert("GUARDADO");</script>';
    }else{
        echo '<script language="javascript">alert("ERROR");</script>';
    }

?>