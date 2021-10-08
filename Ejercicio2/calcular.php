<?php

    class Calcular{

        private $mayor;
        private $menor;

        function __construct($num1, $num2){
            if($num1>$num2){
                $this->mayor = $num1;
                $this->menor = $num2;
            }else{
                $this->mayor = $num2;
                $this->menor = $num1;
            }
        }

        function sumar(){
            return $this->mayor + $this->menor;
        }

        function restar(){
            return $this->mayor - $this->menor;
        }

        function multiplicar(){
            return $this->mayor * $this->menor;
        }

        function dividir(){
            return $this->mayor / $this->menor;
        }

    }

?>