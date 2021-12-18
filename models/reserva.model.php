<?php

    class mdlReserva{

        public static function mdlComprobarReserva($tabla, $id, $f1, $f2) {
            $sql = "SELECT distinct(id) FROM $tabla WHERE id = :id AND (fecha_entrada = :fecha_entrada OR fecha_entrada < :fecha_entrada AND fecha_salida > :fecha_salida
                )"
        }

    }