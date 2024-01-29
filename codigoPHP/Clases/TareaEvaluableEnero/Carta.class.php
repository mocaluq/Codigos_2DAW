<?php

class Carta extends Jugador{

    private $tipo;
    private $puntos;

    public function __constructor($tipo, $puntos){

        $this->tipo = $tipo;
        $this->puntos = $puntos;

    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getPuntos(){
        return $this->puntos;
    }

}

?>