<?php 
include "/../../TascaClas.php";
# VARIABLES GLOBALS
session_start();
$_SESSION['id'] = 1;
$count = 0;
$numlinesReals= contarLinies();
$numPagActual= 1;

# Consulta les dades necessaries
function consultaDades(){
    include_once 'connexioBDD.php';
    $linies = array(mysqli_query ($query= "
        SELECT * 
        FROM Tasca
        WHERE id='$this->idUsuari'; 

    "));
    $connexioDB->close();
    return $linies;
}

# Mostrar dades 
function mostrarDades(){
    $linies = array(consultaDades());
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
    $numlines = mysqli_query ($query= "
        SELECT COUNT(column_name)
        FROM table_name
        WHERE condition; 
    
    ");
    $connexioDB->close();
    return $numlines; 
}



?>