<?php
include_once "../conn.php";
class cliente
{
    private $id;
    private $nombre;
    private $direccion;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getDireccion()
    {
        return $this->direccion;
    }


    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function guardar(String $nombre, String $direccion): int{

        try{
            $conn = new Conn();
            $conexion = $conn->conectar();
            $sql = "INSERT INTO cliente(nombre, direccion) VALUES('$nombre','$direccion')";
            $resultado = $conexion->exec($sql);
            $conn->cerrar();

        }catch(PDOExpection $e){
            echo "hubo un error". $e->getMessage();
        }

        return $resultado;
    }

    public function mostrar(){
        try{
            $conn = new Conn();
            $conexion = $conn->conectar();
            $sql ="SELECT * FROM cliente";
            $resultado =$conexion->query($sql);
            $conn->cerrar();
        }catch(PDOExpection $e){
            echo "hubo un error". $e->getMessage();
        }
        return $resultado;

    }



}