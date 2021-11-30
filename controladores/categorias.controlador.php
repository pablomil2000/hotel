<?php

    class CategoriasController{
        Public function ctrMostrarCategorias($inicio, $porpag){
            $tabla = "categiriahabitacion";
            $respuesta  = CategoriasModel::mdlMostrarCategorias($tabla, $inicio, $porpag);
            return $respuesta;
        }

        Public function ctrUrlCategorias(){
            $tabla = "categiriahabitacion";
            $respuesta  = CategoriasModel::mdlUrlCategorias($tabla);
            return $respuesta;
        }
    }