<?php
require_once 'Deporte.php';
class Basketball extends Deporte{
    private $altura;

    public function __construct($Puntos, $cantJugadores, $tiempo, $altura) {
        parent::__construct($Puntos, $cantJugadores, $tiempo);
        $this->altura = $altura;
    }
    public function getAltura() {
        echo $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
   
}
?>