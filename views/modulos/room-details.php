<!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="<?= $habitacion['imagen_room'] ?>" width="100%">
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3><?= $habitacion['tipo'] ?></h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <a href="#">Booking Now</a>
                                </div>
                            </div>
                            <h2><?= $habitacion['precio'] ?>$<span>/Pernight</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td><?= $habitacion['tamaño'] ?> ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion <?= $habitacion['capacidad'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td><?= $habitacion['tipo_cama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <?php
                                        $serviciosHabitaciones = new serviciosHabitacionController();
                                        $servicios2 = $serviciosHabitaciones->ctrMostrarServiciosHabitacion($habitacion['Id_Categoria']);
                                        $servicio = new ServiciosController();
                                        $resultado = array();
                                        foreach ($servicios2 as $valor2) {
                                            $servicios = $servicio->ctrSacarServicio($valor2['id_servicio']);
                                            $resultado[] = $servicios['servicio'];
                                        }
                                        if ($resultado) {
                                            $separador = ', ';
                                            $mostrar = General::separarArray($resultado, ', ');
                                        } else {
                                            $mostrar = 'No hay servicios para esta habitacion';
                                        }
                                        ?>
                                        <td><?= $mostrar ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Your Reservation</h3>
                        <form action="reservas" method="POST">
                            <input type="hidden" name="Id_Categoria" value="<?=$habitacion['Id_Categoria']?>">
                            <div class="check-date">
                                <label for="date-in">Fecha de entrada:</label>
                                <input type="text" class="date-input" id="date-in" name="entrada" autocomplete="off">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Fecha de salida:</label>
                                <input type="text" class="date-input" id="date-out" name="salida" autocomplete="off">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest" name="ocupar">
                                    <?php
                                        for ($i=1; $i <= $habitacion['capacidad']; $i++) { 
                                            echo '<option value="'.$i.'">'.$i.' Persona</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    <?php include_once('reviews.php'); ?>