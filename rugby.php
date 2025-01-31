<?php
require_once 'Deporte.php';

class Rugby extends Deporte{
    private $H;
    public function __construct($Puntos, $cantJugadores, $tiempo, $H) {
        parent::__construct($Puntos, $cantJugadores, $tiempo);
        $this->H = $H;
    }

    public function getH(){
        echo $this->H;
    }
    public function setH($H){
        $this->H = $H;
    }
   

} 
?>