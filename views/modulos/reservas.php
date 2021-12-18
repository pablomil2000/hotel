<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);
        if (isset($_POST['Id_Categoria'])) {
            $categoria = $_POST['Id_Categoria'];
            $habitaciones = new HabitacionController();
            $habitacion = $habitaciones->ctrHabitacionId($categoria);
        }
    }
    else {
        echo '<script>window.location="index.php?ruta=Rooms"</script>';
    
}
?>

<section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <img src="<?= $habitacion['imagen_room'] ?>" width="100%">
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="room-booking">
                        <h3>Su Reservation</h3>
                        <form action="reservas" method="POST">
                            <input type="hidden" name="Id_Categoria" value="<?=$habitacion['Id_Categoria']?>">
                            <div class="check-date">
                                <label for="date-in">Fecha de entrada:</label>
                                <input type="text" name="entrada" autocomplete="off" value="<?=$_POST['entrada']?> "readOnly>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Fecha de salida:</label>
                                <input type="text" name="salida" autocomplete="off" value="<?=$_POST['salida']?> "readOnly>
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <input type="text" name="ocupar" autocomplete="off" value="<?=$_POST['ocupar']?> "readOnly>
                                
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>