<?php

include './model/mprima.php';

class ControlMprima {


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

        if (isset($_POST)){
            if ($_POST["accio"]=="altaconf"){
                $_POST["accio"]=this.alta($_POST);
            }
        }

        include ('./view/mprima.view');
    }


}

?>