<?php

class Cartel extends Carta{

    private $borde;
    private $color;
    private $efecto;
    private $mensaje;

    public function __constructor($borde, $color, $efecto, $mensaje){
        $this->borde = $borde;
        $this->color = $color;
        $this->efecto = $efecto;
        $this->mensaje = $mensaje;
    }

    public function getBorde(){
        return $this->borde;
    }

    public function getColor(){
        return $this->color;
    }
    
    public function getEfecto(){
        return $this->efecto;
    }

    public function getMensaje(){
        return $this->mensaje;
    }
    
    public function obtenerPuntos(){
        $puntos = "Borde: ".$this->borde->getPuntos().
            "Color: ".$this->color->getPuntos().
            "Efecto: ".$this->efecto->getPuntos().
            "Mensaje: ".$this->mensaje->getPuntos();
    
        return $puntos;
    }


}

?>