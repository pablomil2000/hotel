<?php

    Class CarruselControler{
        Public function ctrMostrarCarrusel(){
            $tabla = "carrusel";
            $resultado = CarruselModel::mdlMostrarCarrusel($tabla);
            return $resultado;
        }
    }