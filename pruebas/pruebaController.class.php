<?php
require "../controller/ControllerUsuario.class.php";
$ctr = new ControllerUsuario();
//$ctr->agregar();
$ctr->autentificacion("alma",sha1("A1lma1$"));
?>
