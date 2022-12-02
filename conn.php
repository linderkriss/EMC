<?php
class Conn
{
    private $dsn;
	private $usuario; 
	private $pass;
    private $conexion;


    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=idiomas";//Uno de los parametros de conexion siempre va en la DSN
        $this->usuario = "root";
        $this->pass = "1234";
    }

    public function conectar(){
        $this->conexion =  new PDO($this->dsn,$this->usuario,$this->pass);
        return $this->conexion;
    }

    public function cerrar(){
        $this->conexion =  NULL;
    }
}
?>