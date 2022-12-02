<?php

class suscripcion
{
    private $id;
    private $id_cliente;
    private $id_publicacion;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getIdCliente()
    {
        return $this->id_cliente;
    }


    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }


    public function getIdPublicacion()
    {
        return $this->id_publicacion;
    }


    public function setIdPublicacion($id_publicacion)
    {
        $this->id_publicacion = $id_publicacion;
    }



    public function registrar(String $id_cliente, String $id_publicacion): int{

        try{
            $conn = new Conn();
            $conexion = $conn->conectar();
            $sql = "INSERT INTO susucripcion(id_cliente, id_publicacion) VALUES($id_cliente,$id_publicacion)";
            $resultado = $conexion->exec($sql);
            $conn->cerrar();

        }catch(PDOExpection $e){
            echo "hubo un error". $e->getMessage();
        }

        return $resultado;
    }
}