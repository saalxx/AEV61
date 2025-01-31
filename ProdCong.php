<?php


class ProdCong{
    protected $FechaEnvasado, $PaisOrg, $Temperatura, $fech1aCaducidad, $NumLote;

    public function __construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote){
        $this->FechaEnvasado = $FechaEnvasado;
        $this->PaisOrg = $PaisOrg;
        $this->Temperatura = $Temperatura;
        $this->fechaCaducidad = $fechaCaducidad;
        $this->NumLote = $NumLote;
    }
    
    public function getFechaEnvasado(){
        return $this->FechaEnvasado;
    }
    
    public function getPaisOrg(){
        return $this->PaisOrg;
    }
    
    public function getTemperatura(){
        return $this->Temperatura;
    }
    
    public function getFechaCaducidad(){
        return $this->fech1aCaducidad;
    }
    
    public function getNumLote(){
        return $this->NumLote;
    }
    
    public function setFechaEnvasado(){
        $this->FechaEnvasado = $FechaEnvasado;

    }
    
    public function setPaisOrg(){
        $this->PaisOrg = $PaisOrg;
    }
    
    public function setTemperatura(){
        $this->Temperatura = $Temperatura;
    }
    
    public function setFechaCaducidad(){
        $this->fech1aCaducidad = $fechaCaducidad;
    }
    
    public function setNumLote(){
        $this->NumLote = $NumLote;
    }
    
}

class ProductoCongAire extends ProdCong{
    private $Nitrogeno, $Oxigeno, $Dioxido, $Vapor;

    public function __construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote, $Nitrogeno, $Oxigeno, $Dioxido, $Vapor){
        parent::__construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote);
        $this->Nitrogeno = $Nitrogeno;
        $this->Oxigeno = $Oxigeno;
        $this->Dioxido = $Dioxido;
        $this->Vapor = $Vapor;
    }
    public function getNitrogeno(){
        return $this->Nitrogeno;
    }
    
    public function getOxigeno(){
        return $this->Oxigeno;
    }
    
    public function getDioxido(){
        return $this->Dioxido;
    }
    
    public function getVapor(){
        return $this->Vapor;
    }
    
    public function setNitrogeno(){
        $this->Nitrogeno = $Nitrogeno;
    }
    
    public function setOxigeno(){
        $this->Oxigeno = $Oxigeno;
    }
    
    public function setDioxido(){
        $this->Dioxido = $Dioxido;
    }
    
    public function setVapor(){
        $this->Vapor = $Vapor;
    }
    
}


class ProductoCongAgua extends ProdCong{
    private $Cloro, $Sulfuro, $Nitrato, $Fosforo;
    
    public function __construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote, $Cloro, $Sulfuro, $Nitrato, $Fosforo){
        parent::__construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote);
        $this->Cloro = $Cloro;
        $this->Sulfuro = $Sulfuro;
        $this->Nitrato = $Nitrato;
        $this->Fosforo = $Fosforo;
    }
    
    public function getCloro(){
        return $this->Cloro;
    }
    
    public function getSulfuro(){
        return $this->Sulfuro;
    }
    
    public function getNitrato(){
        return $this->Nitrato;
    }
    
    public function getFosforo(){
        return $this->Fosforo;
    }
    
    public function setCloro(){
        $this->Cloro = $Cloro;
    }
    
    public function setSulfuro(){
        $this->Sulfuro = $Sulfuro;
    }
    
    public function setNitrato(){
        $this->Nitrato = $Nitrato;
    }
    
    public function setFosforo(){
        $this->Fosforo = $Fosforo;
    }

}

class ProductoCongNitrogeno extends ProdCong{
    private $metodoCongelacion, $tiempoExposicion;

    public function __construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote, $metodoCongelacion, $tiempoExposicion){
        parent::__construct($FechaEnvasado, $PaisOrg, $Temperatura, $fechaCaducidad, $NumLote);
        $this->metodoCongelacion = $metodoCongelacion;
        $this->tiempoExposicion = $tiempoExposicion;
    }

    public function getMetodoCongelacion(){
        return $this->metodoCongelacion;
    }
    
    public function getTiempoExposicion(){
        return $this->tiempoExposicion;
    }
    
    public function setMetodoCongelacion(){
        $this->metodoCongelacion = $metodoCongelacion;
    }
    
    public function setTiempoExposicion(){
        $this->tiempoExposicion = $tiempoExposicion;
    }
    
}
?>