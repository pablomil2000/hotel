<?php
session_start();
require_once('controladores/plantilla.controlador.php');
require_once('controladores/carrusel.controlador.php');
require_once('controladores/Ruta.controlador.php');
require_once('controladores/Habitacion.controlador.php');
require_once('controladores/serviciosHabitacion.controlador.php');
require_once('controladores/servicios.controlador.php');
require_once('controladores/serviciosHotel.controlador.php');
require_once('controladores/paginacion.controlador.php');

require_once('models/Carrusel.model.php');
require_once('models/Habitacion.model.php');
require_once('models/serviciosHabitacion.model.php');
require_once('models/servicios.model.php');
require_once('models/serviciosHotel.model.php');
require_once('models/paginacion.model.php');
require_once('models/General.model.php');


$plantilla = new controladorPlantilla();

$plantilla->ctrPlantilla();