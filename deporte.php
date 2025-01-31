<?php

class Deporte{
    protected $Puntos, $CantJugadores , $Tiempo;
    
    public function __construct($Puntos, $cantJugadores, $tiempo){
        $this->Puntos = $Puntos;
        $this->CantJugadores = $cantJugadores;
        $this->Tiempo = $tiempo;
    }
    
    public function getPuntos(){
    
        return $this->Puntos;
    }
    
    public function getCantJugadores(){
    
        return $this->CantJugadores;
    }
    
    public function getTiempo(){
    
        return $this->Tiempo;
    }
    
    public function setTiempo($tiempo){
    
        $this->Tiempo = $tiempo;
    }
    
    public function setCantJugadores($cantJugadores){
    
        $this->CantJugadores = $cantJugadores;
    }
    
    public function setPuntos($Puntos){
    
        $this->Puntos = $Puntos;
    }
}   
?>