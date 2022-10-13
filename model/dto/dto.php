<?php
    class Registros{

        private $cedula;
        private $nombre;
        private $tipo;
        private $direccion;
        private $fechaDeNaci;

        public function __construct($cedula, $nombre, $tipo, $direccion, $fechaDeNaci) {
            $this-> cedula = $cedula;
            $this-> nombre = $nombre;
            $this-> tipo = $tipo;
            $this-> direccion = $direccion;
            $this-> fechaDeNaci = $fechaDeNaci;

        }
        public function getCedula(){
            return $this -> cedula;
        }
        public function getNombre(){
            return $this -> nombre;
        }
        public function getTipo(){
            return $this -> tipo;
        }
        public function getDireccion(){
            return $this -> direccion;
        }
        public function getFechaDeNaci(){
            return $this -> fechaDeNaci;
        }
      /*   set */
        public function setCedula($cedula){
            $this -> cedula = $cedula;
        }
        public function setNombre($nombre){
            $this -> nombre = $nombre;
        }
        public function setTipo($tipo){
            $this -> tipo = $tipo;
        }
        public function setDireccion($direccion){
            $this -> direccion = $direccion;
        }
        public function setFechaDeNaci($fechaDeNaci){
            $this -> fechaDeNaci = $fechaDeNaci;
        }
   

    }
?>