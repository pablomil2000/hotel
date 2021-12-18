<?php include_once('modulos/header.php') ?>
<?php

$habitaciones= new HabitacionController();
$direcciones = $habitaciones->ctrUrlHabitacion();

if (isset($_GET['ruta'])) {
    if (
        $_GET['ruta'] == 'inicio' ||
        $_GET['ruta'] == 'Rooms' ||
        $_GET['ruta'] == 'about' ||
        $_GET['ruta'] == 'pages' ||
        $_GET['ruta'] == 'news' ||
        $_GET['ruta'] == 'contact'||
        $_GET['ruta'] == 'reservas'
    ) {
        include('modulos/' . $_GET['ruta'] . '.php');
    } else {
        foreach ($direcciones as $direccion) {
            
            // echo $_GET['ruta']." = ".$direccion['direccion']."<br>";
            if ($_GET['ruta'] == $direccion['direccion']) {
                $habitacion = $direccion;

                include('modulos/room-details.php');
                $a=1;
            }

        }

        if (isset($a)) {
            include('modulos/404.php');
        }
    }
} else {
    include('modulos/inicio.php');
}
?>

<!-- Footer Section Begin -->
<?php require_once('modulos/footer.php') ?>
<!-- Footer Section End -->