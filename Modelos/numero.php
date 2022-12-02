<?php

class numero
{
    private $id;
    private $fecha;
    private $resumen;
    private $id_publicacion;


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getFecha()
    {
        return $this->fecha;
    }


    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }


    public function getResumen()
    {
        return $this->resumen;
    }


    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    }


    public function getIdPublicacion()
    {
        return $this->id_publicacion;
    }


    public function setIdPublicacion($id_publicacion)
    {
        $this->id_publicacion = $id_publicacion;
    }


}