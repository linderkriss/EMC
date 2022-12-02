<?php
include_once "../modelos/sucripcion.php";
class suscripcionControlador
{

    public function guardarControlador(int $id_cliente, int $id_publicacion): string{
        $suscripcion = new suscripcion();
        $resultado = $suscripcion->registrar($id_cliente, $id_publicacion);

        if($resultado !=0){
            echo "guardado";
        }else{
            return "error";
        }
    }

}