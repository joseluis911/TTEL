<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/visitas.controlador.php";

require_once "modelos/conexion.modelo.php";
require_once "modelos/visitas.modelo.php";
require_once "modelos/rutas.php";



$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();



 ?>
