    <?php

    class Dado{

        //Creamos los atributos

        private $minNumDado;
        private $maxNumDado;

        //Creamos el constructor

        public function __construct($numMin, $numMax){
            $this->minNumDado = $numMin;
            $this->maxNumDado = $numMax;
        }

        //Creamos los metodos getters y setters

        public function getMinNumDado(){
            return $this->minNumDado;
        }

        public function setMinNumDado($numMin){
            $this->minNumDado = $numMin;
        }

        public function getMaxNumDado(){
            return $this->maxNumDado;
        }

        public function setMaxNumDado($numMax){
            $this->maxNumDado = $numMax;
        }

        //Creamos el metodo tirar dado

        public function tirarDado(){
            return rand($this->minNumDado, $this->maxNumDado);
        }


    }
?>