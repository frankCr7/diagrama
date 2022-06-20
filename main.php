<?php

require_once __DIR__.'/../vendor/autoload.php';

use Inscripcion\Models\Estudiante;
use Inscripcion\Models\Curso;
use Inscripcion\Controllers\Matricula;

$matricula = new Matricula(" ");

$estudiante = new Estudiante('Frank ', 'Nieto Espinoza');

echo 'NOMBRE: '.$estudiante->getNombre()."<br>";
echo 'APELLIDO: '.$estudiante->getApellido()."<br>";
echo 'CODIGO: '.$estudiante->getCodigo()."<br>"."<br>";

$matricula->setfecha('20/06/22')."<br>";


echo 'FECHA DE LA MATRICULA: '.$matricula->getFecha()."<br>"."<br>";


$matricula->agregar(new Curso('Programacion Orientada a Objetos', 'V', '4'));
$matricula->agregar(new Curso('BASE DE DATOS', 'V', '3'));
$matricula->agregar(new Curso('SISTEMAS OPERATIVOS', 'V', '4'));

foreach($matricula->listar() as $curso)
{
    echo "CURSO: ".$curso->getNombre()."<br>";
    echo "CICLO: ".$curso->getCiclo()."<br>";
    echo "CREDITOS: ".$curso->getCreditos()."<br>";

}




#use Inscripcion\Models\Curso;

#$curso = new Curso();
#$curso->setNombre('Programacion Orientada a Objetos');
#echo 'Curso: '.$curso->getNombre();
#$curso->setCiclo('V');
#echo 'Curso: '.$curso->getCiclo();
#$curso->setCreditos('4');
#echo 'Curso: '.$curso->getCreditos();


