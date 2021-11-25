<?php

    class serviciosController{
        Public function ctrSacarServicio($id){
            $tabla = "servicios";
            $respuesta  = serviciosModel::mdlMostrarServicios($tabla,$id);
            return $respuesta;
        }
    }