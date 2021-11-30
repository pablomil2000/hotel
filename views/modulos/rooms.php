<?php

if (isset($_SESSION['pagina'])) {
    $pagina = $_SESSION['pagina'];
} else {
    $pagina = 1;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['pag'])) {
        $pagina = $_GET['pag'];
    } else {
        $pagina = 1;
    }
}

$porpag = 3;
$tabla ="Habitacion";

$inicio = $porpag * ($pagina - 1);
$paginacion = new paginacionController($tabla, $porpag, $pagina);
$categorias = new HabitacionController();

$Habitaciones = $categorias->ctrMostrarHabitacion($inicio, $porpag);

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
                        <img src="<?= $Habitacion['imagen_room'] ?>" alt="">
                        <div class="ri-text">
                            <h4><?= $Habitacion['tipo'] ?></h4>
                            <h3><?= $Habitacion['precio'] ?><span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td><?= $Habitacion['tamaño'] ?> ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion <?= $Habitacion['capacidad'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td><?= $Habitacion['tipo_cama'] ?></td>
                                    </tr>
                                    <tr>
                                            <td class="r-o">Services:</td>
                                            <?php
                                            $serviciosHabitaciones = new serviciosHabitacionController();
                                            $servicios2 = $serviciosHabitaciones->ctrMostrarServiciosHabitacion($Habitacion['Id_Categoria']);
                                            $servicio = new ServiciosController();
                                            $resultado=Array();
                                            foreach ($servicios2 as $valor2) {
                                                $servicios = $servicio->ctrSacarServicio($valor2['id_servicio']);
                                                $resultado[] = $servicios['servicio'];
                                            }
                                            if ($resultado) {
                                                $separador =', ';
                                                $mostrar = General::separarArray($resultado,', ');
                                            }else {
                                                $mostrar='No hay servicios para esta habitacion';
                                            }
                                            ?>
                                            <td><?=$mostrar?></td>
                                        </tr>
                                </tbody>
                            </table>
                            <a href="<?= $Habitacion['direccion'] ?>" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-lg-4">
                <div class="room-pagination">
                    <a href="index.php?ruta=Rooms&pag=1"><i class="fa fa-long-arrow-up"></i> Primera</a>
                </div>
            </div>

            <div class="col-lg-4">
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

            <div class="col-lg-4">
                <div class="room-pagination">
                    <a href="index.php?ruta=Rooms&pag=<?= $paginacion->totalPag ?>">Ultima <i class="fa fa-long-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->