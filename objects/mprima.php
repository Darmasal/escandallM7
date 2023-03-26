<?php

include('../model/mprima.php');

class Mprima{

        private $ref;
        private $descripcion;
        private $medida;
        private $precio;
        private $proveedor;
        private $alta;
        private $ultima;

        public function Mprima($re,$de,$me,$pre, $pro){
            $this->ref=$re;
            $this->descripcion=$de;
            $this->medida=$me;
            $this->precio=$pre;
            $this->proveedor=$pro;        
        }
       

        public function imprimir(){
        echo $this->nom;
        echo '<br>';
        }

}




