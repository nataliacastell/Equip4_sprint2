<?php 
include "/../../TascaClas.php";
# VARIABLES GLOBALS
session_start();
$_SESSION['id'] = 2;

$count = 0;
$numlinesReals= contarLinies();
$numPagActual= 1;
# Consulta insidencia
function consultaincidencia(){
    include_once 'connexioBDD.php';
    $id_user= $SESSION["id"];
    $query= "
    SELECT description_recommendation 
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
    $connexioDB->close();
    $linies=mysqli_fetch_array($linies);
    $text="<p> $linies </p>";
    echo $text;

}


# Consulta les dades necessaries
function consultaDades(){
    include_once 'connexioBDD.php';
    $id_user= $SESSION["id"];

    $query= "
    SELECT description_recommendation 
    FROM recommendations 
    INNER JOIN answers 
    ON recommendations.id_answer = answers.id_answer 
    INNER JOIN questions 
    ON answers.id_question = questions.id_question 
    INNER JOIN questionnaries 
    ON questions.id_questionary = questionnaries.id_user 
    WHERE questionnaries.id_user ='$id_user'; 

    ";
    $linies = mysqli_query($connexioDB,$query);
    $connexioDB->close();
    $linies=mysqli_fetch_array($linies);
    return $linies;
}

# Mostrar dades 
function mostrarDades(){
    $linies = consultaDades();
    if ($count === 0){
        printf($linies[$numPagActual-1]);
    }else{
        $count ++;
        printf($linies[$numPagActual-1]);
    }
}

# Mostra la info seguent del div
function seguentDataDiv($linies){
    $numPagActual+1;
    mostrarDades();
}

# Mostra la info anterior del div
function anteriorDataDiv($linies){
    $numPagActual-1;
    mostrarDades();
    }

# Conta cuantes linies te la consulta per mostrar el num de pag
function contarLinies(){
    include_once 'connexioBDD.php';
    $query= "
        SELECT COUNT(column_name)
        FROM table_name
        WHERE condition; 
    
    ";
    $numlines = mysqli_query ();
    $connexioDB->close();
    return $numlines; 
}



?>
//

