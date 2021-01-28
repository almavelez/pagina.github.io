<?php
require "../controller/ControllerUsuario.class.php";
$ctr= new ControllerUsuario();
if(isset($_POST['login'])){
    //definir dos variables locales con trim limpia
    $username=trim($_POST['username']);
    $password=sha1(trim($_POST['password']));
    $ctr->autentificacion($username,$password);
}else{
    header("location:../view/formLogin.html");
}
?>