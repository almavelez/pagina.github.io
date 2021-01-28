<?php
   session_start();
   //elimino la variable se sesion
   unset($_SESSION['miSesion']);
   //lo redirecioono a la página principal
   header("location:../index.html");
?>