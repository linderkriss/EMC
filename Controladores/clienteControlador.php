<?php
include_once "../modelos/cliente.php";
class clienteControlador
{

    public function guardarControlador(String $nombre, String $direccion): string{
        $cliente = new cliente();
        $resultado = $cliente->guardar($nombre, $direccion);

        if($resultado !=0){
            echo "guardado";
        }else{
            return "error";
        }
    }

    public function mostrarControlador()
    {
        $cliente =new cliente();
        return $cliente->mostrar();
    }

}