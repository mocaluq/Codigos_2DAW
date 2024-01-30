<?php

    class Partida extends Jugador{

        private $dia;
        private $etapa;

        public function __construct($dia,$etapa){
            $this->dia = $dia;
            $this->etapa = $etapa;
        }

        public function getDia(){
            return this->dia;
        }

        public function getEtapa(){
            return this->etapa;
        }

        public function armarCartel(){

        }

        public function comprar(){

        }

        public function jugar(){

        }

        public function verCartas(){

        }

        public function verCartasRival(){
            
        }

        public function verCartasTienda(){
            
        }


    }

?>