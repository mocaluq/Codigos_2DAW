<?php

class Profesor extends Centro{
 
    private $numSS;
    private $titulAcadPrinc;
    private $telefono;
    private $email;

    public function __construct($numSS, $titulAcadPrinc, $telefono, $email){
        $this->numSS = $numSS;
        $this->titulAcadPrinc = $titulAcadPrinc;
        $this->telefono = $telefono;
        $this-> email = $email;
    }

    public function getNumSS(){
        return $this->numSS;
    }

    public function setNumSS($numSS){
        $this->numSS = $numSS;
    }

    public function getTitulAcadPrinc(){
        return $this->titulAcadPrinc;
    }

    public function setTitulAcadPrinc($titulAcadPrinc){
        $this->titulAcadPrinc = $titulAcadPrinc;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    

}

?>