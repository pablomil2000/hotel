<?php

require_once('conexion.php');

class PaginationModel{

    Public static function getTotalReg($tabla, $inicio, $porpag) {
        $conexion = Conexion::conectar();
        $linea = "SELECT * FROM $tabla LIMIT $inicio ,$porpag";    //Consulta para sacar los productos por pagina
        $resultado = $conexion->query($linea);
        $resultados = $resultado->fetchall();

        return count($resultados);
    }

}
