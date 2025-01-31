<?php
require_once("Producto.php");

class ProdFrescos extends Producto{
    private $FechaEnvasado ,  $PaisOrg;
    
    public function __construct($codProducto, $descripcion, $Precio, $stock, $FechaEnvasado, $PaisOrg){
        parent::__construct($codProducto, $descripcion, $Precio, $stock);
        $this->FechaEnvasado = $FechaEnvasado;
        $this->PaisOrg = $PaisOrg;
    }
    
    public function getFechaEnvasado(){
        return $this->FechaEnvasado;
    }
    
    public function setFechaEnvasado($FechaEnvasado){
        $this->FechaEnvasado = $FechaEnvasado;
    }
    
    public function getPaisOrg(){
        return $this->PaisOrg;
    }
    
    public function setPaisOrg($PaisOrg){
        $this->PaisOrg = $PaisOrg;
    }
    
} 

?>