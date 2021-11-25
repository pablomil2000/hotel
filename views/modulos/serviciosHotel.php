<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What We Do</span>
                    <h2>Discover Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $serviciosHotel = new serviciosHotelController();
            $servicios = $serviciosHotel->ctrMostrarServiciosHotel();
            foreach ($servicios as $servicio) {
            ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="<?=$servicio['icono']?>"></i>
                        <h4><?=$servicio['servicio']?></h4>
                        <p><?=$servicio['texto']?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>