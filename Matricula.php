<?php

namespace Inscripcion\Controllers;
use Inscripcion\Models\Curso;

class Matricula
{
    private  $fecha;

    private $curso;

    

    public function __construct($fecha)
    {
         $this->fecha = $fecha;
         
        
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getFecha()
    {
       return $this->fecha;
    }

    public function agregar(Curso $curso)
    {
        $this->curso[] = $curso;
    }

    public function listar()
    {
        return $this->curso;
    }


   
}