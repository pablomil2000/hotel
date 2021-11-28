<?php include_once('modulos/header.php') ?>

<?php

if (isset($_GET['ruta'])) {
    if (
        $_GET['ruta'] == 'inicio' ||
        $_GET['ruta'] == 'Rooms' ||
        $_GET['ruta'] == 'about' ||
        $_GET['ruta'] == 'pages' ||
        $_GET['ruta'] == 'news' ||
        $_GET['ruta'] == 'contact'
    ) {
        include('modulos/' . $_GET['ruta'] . '.php');
    } else {
        include('modulos/404.php');
    }
} else {
    include('modulos/inicio.php');
}
?>

<!-- Footer Section Begin -->
<?php require_once('modulos/footer.php') ?>
<!-- Footer Section End -->