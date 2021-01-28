<?php
/*
logica del negocio para la taba de usuarios
*/
interface IntUsuariosService{
    public function guardar($usuario);
    public function buscarPorUsernamePassword($username,$password);
    /*
    public functioon eliminar ($idUsuario);
    Publlic function modificar($usuario);
     Publlic function buscarUsuario($iUsuario);
     */
}
?>
