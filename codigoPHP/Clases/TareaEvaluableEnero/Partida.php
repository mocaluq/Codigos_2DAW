<?php

    class Partida extends Jugador{

        private $dia;
        private $etapa;
        private $arrayVerCartas;
        private $arrayCartasRival;
        private $arrayCartasTienda;

        public function __construct($dia,$etapa){
            $this->dia = $dia;
            $this->etapa = $etapa;
            $this->arrayVerCartas = [];
            $this->arrayCartasRival = [];
            $this->arrayCartasTienda = [];

        }

        public function getDia(){
            return $this->dia;
        }

        public function setDia($dia){
            return $this->dia = $dia;
        }

        public function getEtapa(){
            return $this->etapa;
        }

        public function setEtapa($etapa){
            return $this->etapa = $etapa;
        }

        public function armarCartel(){

        }

        public function comprar(){

        }

        public function jugar(){

        }

        public function verCartas(){
            return $this->arrayVerCartas;
        }

        public function verCartasRival(){
            return $this->$arrayCartasRival;
        }

        public function verCartasTienda(){
            return $this->$arrayCartaTienda;
        }


    }

?>