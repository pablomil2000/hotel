<?php
$categorias = new HabitacionController();
$Habitaciones = $categorias->ctrMostrarHabitacion(0, 4);
?>
<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <?php foreach ($Habitaciones as $clave => $valor) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="hp-room-item set-bg" data-setbg="<?= $ruta . $valor['imagen'] ?>">
                            <div class="hr-text">
                                <h3><?= "Habitacion" . $valor['tipo'] ?></h3>
                                <h2><?= $valor['precio'] . " €" ?><span>/Pernight</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td><?= $valor['tamaño'] ?> ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max persion <?= $valor['capacidad'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td><?= $valor['tipo_cama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <?php
                                            $serviciosHabitaciones = new serviciosHabitacionController();
                                            $servicios2 = $serviciosHabitaciones->ctrMostrarServiciosHabitacion($valor['Id_Categoria']);
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
                                <a href="<?=$valor['direccion']?>" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
