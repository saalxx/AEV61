<?php
require_once("Producto.php");
class ProdRefrigerado extends Producto{
    private $codOrSA , $fechaEnvasado, $Temperatura , $PaisOrg;
    
    public function __construct($codProducto, $descripcion, $stock, $precio, $codMarca, $codOrSA, $fechaEnvasado, $temperatura, $PaisOrg){
        parent::__construct($codProducto, $descripcion, $stock, $precio, $codMarca);
        $this->codOrSA = $codOrSA;
        $this->fechaEnvasado = $fechaEnvasado;
        $this->temperatura = $temperatura;
        $this->PaisOrg = $PaisOrg;
    }
    
    public function getCodOrSA(){
        return $this->codOrSA;
    }
    
    public function getFechaEnvasado(){
        return $this->fechaEnvasado;
    }
    
    public function getTemperatura(){
        return $this->temperatura;
    }
    
    public function getPaisOrg(){
        return $this->PaisOrg;
    }
    
    public function setCodOrSA($codOrSA){
        $this->codOrSA = $codOrSA;
    }

    public function setFechaEnvasado($fechaEnvasado){
        $this->fechaEnvasado = $fechaEnvasado;
    }
    
    public function setTemperatura($temperatura){
        $this->temperatura = $temperatura;
    }
    
    public function setPaisOrg($PaisOrg){
        $this->PaisOrg = $PaisOrg;
    }
    
}


?>