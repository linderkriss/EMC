<?php
include_once "../modelos/publicacion.php";
class publicacionControlador
{
    public function mostrarControlador()
    {
        $publicacion = new publicacion();
        return $publicacion->mostrar();
    }
}