<?php 
    class Dado{
        private $imagen;
        private $valor;

        public function __construct($imagen, $valor ){  
            $this->imagen = $imagen;
            $this->valor = $valor;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function getValor(){
            return $this->valor;
        }
    }

    $dadosData = array(
        new Dado("./assets/imagenes/dado1.png",1),
        new Dado("./assets/imagenes/dado2.png",2),
        new Dado("./assets/imagenes/dado3.png",3),
        new Dado("./assets/imagenes/dado4.png",4),
        new Dado("./assets/imagenes/dado5.png",5),
        new Dado("./assets/imagenes/dado6.png",6)
    );  

?>