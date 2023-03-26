<?php

//TEST D'ACCÉS A DADES:

//evitar mostrar warnings
error_reporting(E_ERROR | E_PARSE);

//INICIALITZACIÓ D'INCLUDES I VARIABLES GLOBALS

include './config.php';
include './model/dbconnection.php';
//include './control/mprima.php';

function render($ruta){
    include ("./view/".$ruta);
}

function toControl($control){
    return 'Control'. ucfirst($control);
}

$data["view"] = "";

DBlink::openDBlink();

//CÀRREGA DE CONTROL A TRACTAR
//Usem index "destí" com a indicador del control a usar
//Si no rebem "destí" per paràmetre rederitzem "inici.html"
if (isset($_GET['desti']))
{
    include ('./control/'.$_GET['desti'].'.php');
    toControl($_GET['desti'])::render($_GET);
}
else{

    render('inici.view');

}

//CREACIÓ DE FUNCIONS PER TEST:




/*
MMprima::reinitDB();

MMprima::altaMprima('15','litre', 13, 'Adidas');
MMprima::altaMprima('17','metre', 132, 'soler');
MMprima::altaMprima('23','metre2', 32, 'puma');
MMprima::altaMprima('43','litre', 33, 'pascual');
MMprima::altaMprima('22','kilo', 663, 'hacendado');
MMprima::altaMprima('13','kilo', 56, 'nestle');
MMprima::altaMprima('25','metre', 55, 'frigo');
MMprima::altaMprima('15','parell', 63, 'nike');
MMprima::altaMprima('55','peça', 553, 'Adidas');

MMprima::totMprima();

MMprima::cercaMprima('13');
MMprima::cercaMprima('33');

MMprima::modificaMprima('55','peça', 33, 'Adidas');
MMprima::modificaMprima('43','peça', 553, 'pascual');
MMprima::modificaMprima('23','metre2', 657, 'puma');
MMprima::modificaMprima('27','kilo', 88, 'Alteza');

MMprima::totMprima();

MMprima::baixaMPrima('23');
MMprima::baixaMPrima('22');
MMprima::baixaMPrima('15');
MMprima::baixaMPrima('55');

MMprima::totMprima();
*/
?>
