<?php

    class Review{

        Public function getReviewsHabitacionPag($habitacion, $inicio, $porpag) {
            $tabla = "review";
            $respuesta  = mdlReview::mdlReviewHabitacion($habitacion, $tabla, $inicio, $porpag);

            return $respuesta;
        }

    }