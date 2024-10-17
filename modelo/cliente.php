<?php

    /*public*/ class Cliente{
        //nombre
        private $nombre;

        //constructor
        public function __construct($nombre){
            this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }
        //
    }

?>