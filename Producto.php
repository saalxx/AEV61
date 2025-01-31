
    <?php
    class Producto {
        protected $FechaCad, $NumLote;

         public function __construct($FechaCad, $NumLote) {
            $this->FechaCad = $FechaCad;
            $this->NumLote = $NumLote;

    }
    public function getFechaCad() {
            return $this->FechaCad;

    }
        public function setNumLote($NumLote) {
            $this->NumLote = $NumLote;
        }
        public function getNumLote() {
            return $this->NumLote;
        }
        public function setFechaCad($FechaCad) {
            $this->FechaCad = $FechaCad;
        }
}
   ?>


