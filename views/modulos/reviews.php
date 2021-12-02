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
$porpag = 2;
$tabla = 'review';
$inicio = $porpag * ($pagina - 1);
$paginacion = new paginacionController($tabla, $porpag, $pagina);
$review = new Review();

$reviews = $review->getReviewsHabitacionPag($habitacion['Id_Categoria'], $inicio, $porpag);


$_SESSION['pagina'] = $pagina;
?>
<div class="rd-reviews">
    <h4>Reviews</h4>
    <?php
    foreach ($reviews as $opinion) :
    ?>
        <div class="review-item">
            <div class="ri-pic">
                <img src="views/img/room/avatar/avatar-1.jpg" alt="">
            </div>
            <div class="ri-text">
                <span>27 Aug 2019</span>
                <div class="rating">
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star-half_alt"></i>
                </div>
                <h5>Brandon Kelley</h5>
                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                    magnam.</p>
            </div>
        </div>
    <?php endforeach; ?>



</div>

<center>
<div class="col-lg-4">
    <div class="room-pagination">
        <a href="index.php?ruta=<?=$_GET['ruta']?>&pag=1" ><i class="fa fa-long-arrow-up"></i> Primera</a>
    </div>
</div>

<div class="col-lg-4">
    <div class="room-pagination">
        <a href="index.php?ruta=<?=$_GET['ruta']?>&pag=<?= $paginacion->antPagina() ?>"><i class="fa fa-long-arrow-left"></i> Prev</a>

        <?php
        $totalpag = $paginacion->totalPag;
        for ($i = 1; $i <= $totalpag; $i++) {
            echo "<a href='index.php?ruta=".$_GET['ruta']."&pag=" . $i . "'>" . $i . "</a>";
        }
        ?>
        <a href="index.php?ruta=<?=$_GET['ruta']?>&pag=<?= $paginacion->sigPagina() ?>">Next <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>

<div class="col-lg-4">
    <div class="room-pagination">
        <a href="index.php?ruta=<?=$_GET['ruta']?>&pag=<?= $paginacion->totalPag ?>">Ultima <i class="fa fa-long-arrow-down"></i></a>
    </div>
</div>
</center>