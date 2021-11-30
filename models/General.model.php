<?php

class General{

    Public static function numRegistros($tabla){
        $conexion = Conexion::conectar();

        $results = $conexion->prepare("SELECT COUNT(*) FROM $tabla");
        $results->execute();
    }

    Public Static function separarArray($array, $separador){
        $resultado =implode($separador, $array);
        return $resultado;
    }

}