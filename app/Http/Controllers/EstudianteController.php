<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\EstudianteRequest;

use App\Estudiante;

class EstudianteController extends Controller
{
    public function index(){
    	return view('admin.estudiantes.index');
    }

    public function create(){
    	return view ('admin.estudiantes.create');
    }

    public function store(EstudianteRequest $request){
        $estudiante = new Estudiante(['cedula_estudiante'=> $request->cedula,
                                      'nombre_estudiante'=> $request->nombre,
                                      'apellido_estudiante'=> $request->apellido,
                                      'nacimiento_estudiante'=> $request->nacimiento,
                                      'fecha_inscripcion'=> $request->inscripcion]);
       flash('Estudiante registrado');
        return redirect()->route('estudiantes.index');
    }

}
