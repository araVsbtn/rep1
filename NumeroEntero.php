<?php
    //
    class NumeroEntero{
        private $ne;
        public function _contruct($ne){
            $this->ne = $ne;
        }
        public function setNe($ne){
            $this->ne = $ne;
        }
        public function getNe(){
            return $this->ne;
        }
    }
?>