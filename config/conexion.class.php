<?php
class Conexion{
    private $dbhost;
    private $usuario;
    private $password;
    private $dbname;
    private $conn;
    
    /*metodo constructor*/
    public function __construct($servidor,$usuario,$password,$dbname){
        $this->dbhost=$servidor;
        $this->usuario=$usuario;
        $this->password=$password;
        $this->dbname=$dbname;
    }
    /*Obtener conexion*/
        public function obtenerConn(){
        $this->conn=mysqli_connect($this->dbhost,
        $this->usuario,
        $this->password,
        $this->dbname);
        //Verificar la conexion
        if( !$this->conn){
            die("<br>Error al establecer la conexión
            a la base de datos :". mysqli_connect_error());
        }else{
            echo "<br> La conexión a la base de datos
            se realizó con exito";

        }
    }
    //Metodo para consultar o realizar una operación
    public function ejecutarQuery($sql){
        return mysqli_query($this->conn,$sql);
    }
    //Para cerrar La conexión a la base de datos
    public function cerrar(){
        mysqli_close($this->conn);
    }
}

?>
