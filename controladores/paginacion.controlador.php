<?php

class paginacionController
{
    public $totalPag;
    public $pagActual;
    public $totalPorPag;
    public $tabla;

    public function __construct($tabla, $porpag, $pagActual)
    {
        $inicio = $porpag * $pagActual;
        $inicio = 1;
        $totalReg = PaginationModel::getTotalReg($tabla, $inicio, $porpag);
        $totalReg = 6;
        $this->totalPag = (INT)ceil($totalReg / $porpag);
        $this->pagActual = $pagActual;
        $this->tabla = $tabla;
    }

    public function sigPagina()
    {
        $totalPag = $this->totalPag;
        $pagActual = $this->pagActual;
        $pagina = $pagActual+1;
        if ($pagina > $totalPag) {
            $pagina = $totalPag;
        }
        
        return $pagina;
    }

    Public function antPagina(){
        $pagActual = $this->pagActual;
        if ($pagActual==1) {
            $pagina = 1;
        }else {
            $pagina = $pagActual-1;
        }
        return $pagina;
    }

    Public function irPagina($ir){
        $pagTotal = $this->totalPag;
        if ($ir > 0 && $ir < $pagTotal) {
            $pagina = $ir;
        }else {
            $pagina = 1;
        }
        return $pagina;
    }

}
