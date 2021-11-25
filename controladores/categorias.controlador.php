<?php

    class CategoriasController{
        Public function ctrMostrarCategorias(){
            $tabla = "categiriahabitacion";
            $respuesta  = CategoriasModel::mdlMostrarCategorias($tabla);
            return $respuesta;
        }
    }