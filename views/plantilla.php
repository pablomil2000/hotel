<?php include_once('modulos/header.php') ?>

<!-- Hero Section Begin -->
<?php include_once('modulos/hero.php'); ?>
<!-- Hero Section End -->

<!-- About Us Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Intercontinental LA <br />Westlake Hotel</h2>
                    </div>
                    <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about
                        travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                        languages.</p>
                    <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                        apartment, guest house, or tree house, we’ve got you covered.</p>
                    <a href="#" class="primary-btn about-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="img/about/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- Servicios Inicio -->
<?php require_once('modulos/serviciosHotel.php') ?>
<!-- Servicios Fin -->


<?php

// if (isset($_GET['ruta'])) {
//     if (
//         $_GET['ruta'] == 'inicio' ||
//         $_GET['ruta'] == 'rooms' ||
//         $_GET['ruta'] == 'about' ||
//         $_GET['ruta'] == 'pages' ||
//         $_GET['ruta'] == 'news' ||
//         $_GET['ruta'] == 'contact'
//     ) {
//         include('modulos/' . $_GET['ruta'] . '.php');
//     } else {
//         include('modulos/404.php');
//     }
// } else {
//     include('modulos/inicio.php');
// }
?>


<!-- Habitaciones Inicio -->
<?php include_once('modulos/habitaciones.php'); ?>
<!-- Habitaciones Fin -->

<!-- Testimonios Inicio -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Customers Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p>After a construction project took longer than expected, my husband, my daughter and I
                            needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                            city, neighborhood and the types of housing options available and absolutely love our
                            vacation at Sona Hotel.</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Alexander Vasquez</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                    <div class="ts-item">
                        <p>After a construction project took longer than expected, my husband, my daughter and I
                            needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                            city, neighborhood and the types of housing options available and absolutely love our
                            vacation at Sona Hotel.</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Alexander Vasquez</h5>
                        </div>
                        <img src="img/testimonial-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonios Fin -->

<!-- Blog Inicio -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Hotel News</span>
                    <h2>Our Blog & Event</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel Trip</span>
                        <h4><a href="#">Tremblant In Canada</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Camping</span>
                        <h4><a href="#">Choosing A Static Caravan</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Copper Canyon</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel</span>
                        <h4><a href="#">Traveling To Barcelona</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Fin -->

<!-- Footer Section Begin -->
<?php require_once('modulos/footer.php') ?>
<!-- Footer Section End -->