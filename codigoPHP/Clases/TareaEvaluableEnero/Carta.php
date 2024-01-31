<?php

class Carta extends Jugador{

    private $tipo;
    private $puntos;

    public function __construct($tipo, $puntos){

        $this->tipo = $tipo;
        $this->puntos = $puntos;

    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        return $this->tipo = $tipo;
    }

    public function getPuntos(){
        return $this->puntos;
    }

    public function setPuntos($puntos){
        return $this->puntos = $puntos;
    }

    public function jugar(){
        echo "la carta esta en juego";
    }

}

?>