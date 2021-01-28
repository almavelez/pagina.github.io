<?php
//inicializar la variable de sesión
session_start();
//comprobar si la variable de sesion se creo al autentificarme
if(!isset($_SESSION['MIsESION'])){
    //LO REDIRECCIONAMOS A LA PAGINA DE LOGIIN
    header("location:../view/formLogin.html");
    //cerrar el archivo
    exit();
}
?>