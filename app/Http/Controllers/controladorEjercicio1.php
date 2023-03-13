<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class controladorEjercicio1 extends Controller
{
    public function ej1Parametro () {

        return 'Esto esta funcionando';
    }  

    public function ej1Parametro2 ($alumno) {
        $txtFinal = "Éste es el resultado del primer ejercicio de la práctica hecha por " .$alumno;
        return view('ej1Parametro2') -> with(['nomAlumne' => $txtFinal]);
    }

    public function ej1Parametro3 ($alumno) {
        $txtFinal = "Éste es el resultado del primer ejercicio de la práctica hecha por " .$alumno;
        return view('primeraView') -> with(['nomAlumne' => $txtFinal]);
    }
}


