<?php

    class Habitacion{
        Public Static Function getUrl() {
            $tabla = "categiriahabitacion";
            $respuesta  = CategoriasModel::mdlMostrarCategorias($tabla, $inicio, $porpag);
            return $respuesta;
        }
    }