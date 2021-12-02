<?php
    $carrusel = new CarruselControler();
    $imagenes = $carrusel->ctrMostrarCarrusel();
?>
<section class="hero-section">
    <div class="container">
        <div class="row">
            <!-- texto carrusel inicio -->
            <div class="col-lg-6">
                <div class="hero-text">
                    <h1>Sona A Luxury Hotel</h1>
                    <p>Here are the best hotel booking sites, including recommendations for international
                        travel and for finding low-priced hotel rooms.</p>
                    <a href="#" class="primary-btn">Discover Now</a>
                </div>
            </div>
            <!-- texto carrusel fin -->

            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Hotel</h3>
                    <!-- Formu reserva inicio -->
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">2 Adults</option>
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                    <!-- Formu reserva fin -->
                </div>
            </div>
        </div>
    </div>
    <!-- Carrusel inicio -->
    <div class="hero-slider owl-carousel">
        <?php
        $ruta = RutaController::ctrRuta();
        foreach ($imagenes as $clave => $valor){  ?>
            <div class="hs-item set-bg" data-setbg="<?=$ruta.$valor['img']?>"></div>
        <?php } ?>
    </div>
    <!-- Carrusel fin -->
</section>

