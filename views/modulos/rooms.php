<?php

if (isset($_SESSION['pagina'])) {
    $pagina = $_SESSION['pagina'];
} else {
    $pagina = 1;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['pag'])) {
        $pagina = $_GET['pag'];
    }else {
        $pagina = 1;
    }
}

$porpag =3 ;

$inicio = $porpag*($pagina-1);

$paginacion = new paginacionController("categiriahabitacion", $porpag, $pagina);
$categorias = new CategoriasController();

$Habitaciones = $categorias->ctrMostrarCategorias($inicio, $porpag);

$_SESSION['pagina'] = $pagina;
?>
<!-- Hero Section Begin -->
<?php include_once('hero.php'); ?>
<!-- Hero Section End -->
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="inicio">Home</a>
                        <span>Rooms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            <?php foreach ($Habitaciones as $Habitacion) : ?>
                
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="<?=$Habitacion['imagen_room']?>" alt="">
                        <div class="ri-text">
                            <h4><?=$Habitacion['tipo']?></h4>
                            <h3><?=$Habitacion['precio']?><span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td><?=$Habitacion['tamaño']?> ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion <?=$Habitacion['capacidad']?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td><?=$Habitacion['tipo_cama']?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <?php
                                            $serviciosHabitaciones = new serviciosHabitacionController();
                                            $servicios2 = $serviciosHabitaciones->ctrMostrarServiciosHabitacion($Habitacion['Id_Categoria']);
                                            $servicio = new ServiciosController();
                                            $mostrar ='';
                                            foreach ($servicios2 as $valor) {
                                                $servicios = $servicio->ctrSacarServicio($valor['id_servicio']);
                                                $mostrar.= $servicios['servicio'].",";
                                            }
                                            if ($mostrar == '') {
                                                $mostrar = "No hay servicios para esta habitaciones";
                                            }
                                            ?>
                                        <td><?=$mostrar?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-lg-12">
                <div class="room-pagination">
                    <a href="index.php?ruta=Rooms&pag=<?= $paginacion->antPagina() ?>"><i class="fa fa-long-arrow-left"></i> Prev</a>

                    <?php
                    $totalpag = $paginacion->totalPag;
                    for ($i = 1; $i <= $totalpag; $i++) {
                        echo '<a href="index.php?ruta=Rooms&pag=' . $i . '">' . $i . '</a>';
                    }
                    ?>

                    <a href="index.php?ruta=Rooms&pag=<?= $paginacion->sigPagina() ?>">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->