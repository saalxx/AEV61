<?php
require_once 'Deporte.php';
class Futbol extends deporte{
    private $estadio;

    public function __construct($Puntos, $CantJugadores,  $tiempo ,$estadio) {
        parent::__construct($Puntos, $CantJugadores, $tiempo);
        $this->estadio = $estadio;
    }
    public function getEstadio() {
        echo $this->estadio;
    }
    public function setEstadio($estadio) {
        $this->estadio = $estadio;
    }
}


?>