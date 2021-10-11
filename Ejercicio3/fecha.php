<?php

    class Fecha{

        //Atributos
        private int $d;
        private int $m;
        private int $a;
        private $meses = array(
            1 => array('Enero', 31),
            2 => array('Febrero', 28),
            3 => array('Marzo', 31),
            4 => array('Abril', 31),
            5 => array('Mayo', 31),
            6 => array('Junio', 31),
            7 => array('Julio', 31),
            8 => array('Agosto', 31),
            9 => array('Septiembre', 31),
            10 => array('Octubre', 31),
            11 => array('Noviembre', 31),
            12 => array('Diciembre', 31)
        );

        function __construct($fecha){
            list($this->d, $this->m, $this->a) = explode('/', $fecha);
        }
        function obtenerFecha(){
            return $this->d . '/' . $this->meses[$this->m][0] . '/' . $this->a;
        }
        function obtenerDiasMes(){
            $this->comprobarBisiesto();
            return $this->meses[$this->m][0] . ' de ' . $this->a . ' tiene ' . $this->meses[$this->m][1] . ' días.';
        }
        function comprobarBisiesto(){
            if($this->a % 4 == 0 && $this->a % 100 != 0)
                $this->meses[2][1] = 29;
        }

    }

?>