<?php
require "../config/configdb.class.php";
require "../config/conexion.class.php";
require "intUsuariosService.class.php";
require "../model/usuarios.class.php";

class UsuariosServiceImp implements intUsuariosService{
    //sobreescribir los metodos

    public function guardar($usuario){
        //imprimir de forma indiviadual los datos del objeto
        echo "<br>Nombre : ".$usuario->getNombre();
        echo "<br>Correo : ".$usuario->getEmail();
        echo "<br>";
        //imprimir todo el objeto
        var_dump($usuario);
        //asignacion a variables locales
        $nom = $usuario->getNombre();
        $correo = $usuario->getEmail();
        $user = $usuario->getUsername();
        $pass = $usuario->getPassword();
        $estatus = $usuario->getEstatus();
        $fecha = $usuario->getFecha();
        //formamos la sentencia sql
        echo "<br>";
        $sql = "insert into usuarios values(null,'$nom',
                                         '$correo','$user',
                                         '$pass','$estatus','$fecha')";
          //imprimir la sentencia
          echo $sql;
          //crear ina una instancia u objeto
          $objeto = new Conexion("localhost:3308","root","","appweb");
          $objeto->obtenerConn();
          //ejecutar la sentencia sql
          $objeto->ejecutarQuery($sql);
          //cerrar la base de datos
          $objeto->cerrar();                              

    }
    public function buscarPorUsernamePassword($username,$password){
        //frmar ña sentecnia sql
        $sql = "select * from usuarios where username like '$username'
                                         and password like '$password'";
                                   
      //una instancia de la case conexion
      $objeto = new Conexion("localhost:3308","root","","appweb");
       //establecer conexion
       $objeto->obtenerConn();
       //ejecutar la sentencia en la actu conexcion
       $resultado = $objeto-> ejecutarQuery($sql);
       if(mysqli_num_rows($resultado) > 0){
           //definimos un arreglo
           $arreglo =  array();
           //obtengo el regsitro con todos sus campos
           $arreglo =mysqli_fetch_array($resultado);
           //creamos arreglo de tipo usuario
           $usuario = new Usuarios();
           //fromar objeto
           $usuario->setId($arreglo[0]);
           $usuario->setNombre($arreglo[1]);
           $usuario->setEmail($arreglo[2]);
           $usuario->setUsername($arreglo[3]);
           $usuario->setPassword($arreglo[4]);
           $usuario->setEstatus($arreglo[5]);
           $usuario->setfecha($arreglo[6]);
             //cerrar la conexion
             $objeto->cerrar();
             //regreso el objeto
             return$usuario;
       }else{
           //cerrar la conexion
           return null;
       }
    }
    
}
?>