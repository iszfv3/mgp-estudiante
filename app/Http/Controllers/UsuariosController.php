<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UsuarioRequest;

use App\Usuario;

use App\Persona;

use App\Telefono;

use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios= Usuario::orderBy('id_Usuario', 'ASC')->paginate(5);
        $personas=$usuarios;
        return view('admin.usuarios.index')->with('usuarios',$usuarios)->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $persona=new Persona(['cedula_Persona' => $request->cedula,
                       'nombres_Persona' => $request->nombres,
                       'apellidos_Persona' => $request->apellidos,
                       'sexo_Persona' => $request->sexo,
                       'nacimiento_Persona' => $request->nacimiento,
                       'direccion_Persona' => $request->direccion]);
        foreach ($request->telefono as $numero) {
          $telefonos[]=new Telefono(['numero_Telefono' => $numero]);
        }
        $usuario=new Usuario();
        DB::beginTransaction();
        try {
          $persona->save();
          $persona->telefonos()->saveMany($telefonos);
          $usuario->id_Persona_Usuario=$persona->id_Persona;
          $usuario->clave_Usuario=bcrypt($request->password);
          $usuario->save();
          DB::commit();
          flash('Usuario creado con éxito', 'success');
        } catch (\Exception $e) {
          DB::rollback();
          flash('Error, no se pudo realizar operacion', 'warning');
        }
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=Usuario::find($id);
        $persona=Persona::find($usuario->id_Persona_Usuario);
        $telefonos=Telefono::where('id_Persona_Telefono',$usuario->id_Persona_Usuario)->get();
        return view('admin.usuarios.edit')->with('usuario',$usuario)->with('persona',$persona)->with('telefonos',$telefonos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

      $usuario=Usuario::find($id);
      $usuario->fill(['clave_Usuario' => bcrypt($request->password)]);

      $persona=Persona::find($usuario->id_Persona_Usuario);
      $persona->fill(['cedula_Persona' => $request->cedula,
                     'nombres_Persona' => $request->nombres,
                     'apellidos_Persona' => $request->apellidos,
                     'sexo_Persona' => $request->sexo,
                     'nacimiento_Persona' => $request->nacimiento,
                     'direccion_Persona' => $request->direccion]);

      foreach ($request->telefono as $numero) {
        $telefonos[]=new Telefono(['numero_Telefono' => $numero]);
      }
      DB::beginTransaction();
      try {
        $usuario->push();
        $persona->push();
        $persona->telefonos()->delete();
        $persona->telefonos()->saveMany($telefonos);
        DB::commit();
        flash('Usuario '.$id.' Actualizado', 'success');
      } catch (\Exception $e) {
        DB::rollback();
          flash('Error, no se pudo realizar operacion', 'warning');
      }
      return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario=Usuario::find($id);
      $usuario->delete();
      flash('Usuario '.$id.' eliminado', 'danger');
      return redirect()->route('usuarios.index');
    }
}
