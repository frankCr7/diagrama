<?php

namespace Inscripcion\Models;

class Estudiante
{
    private  $nombre;

    private $apellido;

    private $codigo;

    public function __construct($nombre, $apellido, $codigo)
    {
         $this->nombre = $nombre;
         $this->apellido = $apellido;
         $this->codigo = $codigo;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
       return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
       return $this->codigo;
    }

    
}