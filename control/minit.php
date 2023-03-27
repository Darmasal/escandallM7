<?php

include './model/mprima.php';

class ControlInit {


    public static function alta($post){

        //Aqui hauria d'haver controls o algo
        if ((isset($post["nom"])) && (isset($post["referencia"])) && (isset($post["mesura"])) && (isset($post["preu"])) && (isset($post["proveidor"]))){
            MMprima::altaMprima($post["referencia"], $post["nom"], $post["mesura"], $post["preu"], $post["proveidor"]);
            return "altadone";
        }
        else{
            return "altaerror"; 
        }
    }

    public static function render($var){

        MMprima::reinitDB();

        include ('./view/mprima.view');
    }


}

?>