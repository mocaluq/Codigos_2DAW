<?php

class Cartel extends Carta{

    private $borde;
    private $color;
    private $efecto;
    private $mensaje;

    public function __construct($borde, $color, $efecto, $mensaje){
        $this->borde = $borde;
        $this->color = $color;
        $this->efecto = $efecto;
        $this->mensaje = $mensaje;
    }

    public function getBorde(){
        return $this->borde;
    }

    public function setBorde($borde){
        return $this->borde = $borde;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        return $this->color = $color;
    }
    
    public function getEfecto(){
        return $this->efecto;
    }

    public function setEfecto($efecto){
        return $this->efecto = $efecto;
    }

    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($mensaje){
        return $this->mensaje = $mensaje;
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