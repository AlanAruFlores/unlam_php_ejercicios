<?php 
    class Saludar{
        private $nombre;
        private $apellido;

        public function __construct($nombre,$apellido){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function saludarFormal($horario){
            if(!is_integer($horario))
               return "Error : El horario debe estar expresado en un numero";
            if($horario < 1 || $horario >24)
                return "Error: El horario debe estar entre  0  y 24 "; 
               

            $saludo = ($horario >=5 && $horario < 13) ? "Buenos Dias":
                        (($horario >= 13 && $horario < 21) ? "Buenas tardes": 
                        (($horario >= 21 || $horario < 5) ? "Buenas Noches"  : ""));

            return $saludo." ".$this->nombre." ".$this->apellido;
        }
   
        public function saludarInformal($horario){
            if(!is_integer($horario))
               return "Error : El horario debe estar expresado en un numero";
            if($horario < 1 || $horario >24)
               return "Error: El horario debe estar entre  0  y 24 "; 
                
            $saludo = ($horario >=5 && $horario < 13) ? "un buen dia": 
                        (($horario >= 13 && $horario < 21) ? "una buena tarde":
                        (($horario >= 21 || $horario < 5) ? "buenas noches"  : ""));

            return "Hola ".$this->nombre." Que tengas ".$saludo;
        }
    }

?>