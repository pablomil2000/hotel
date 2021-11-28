<?php

CLASS General{

    Public static function numRegistros($tabla){
        $conexion = Conexion::conectar();

        $results = $conexion->prepare("SELECT COUNT(*) FROM $tabla");
        $results->execute();
    }

}