<?php

namespace Inscripcion\Models;

class Curso
{
    private  $nombre;

    private $ciclo;

    private $creditos;

    public function __construct($nombre, $ciclo, $creditos)
    {
         $this->nombre = $nombre;
         $this->ciclo = $ciclo;
         $this->creditos = $creditos;
    }

    public function getNombre()
    {
       return $this->nombre;
    }

    public function getCiclo()
    {
        return $this->ciclo;
    }

     public function getCreditos()
    {
        return $this->creditos;
    }

    
}