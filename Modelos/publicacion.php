<?php
include_once "../conn.php";
class publicacion
{
    private $id;
    private $nombre;
    private $tema;
    private $descripcion;


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


    public function getTema()
    {
        return $this->tema;
    }


    public function setTema($tema)
    {
        $this->tema = $tema;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function mostrar(){
        try{
            $conn = new Conn();
            $conexion = $conn->conectar();
            $sql ="SELECT * FROM publicacion";
            $resultado =$conexion->query($sql);
            $conn->cerrar();
        }catch(PDOExpection $e){
            echo "hubo un error". $e->getMessage();
        }
        return $resultado;

    }


}