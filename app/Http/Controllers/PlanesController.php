<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes=Plan::orderBy('id_Plan', 'ASC')->paginate(5);
        return view('admin.planes.index')->with('planes',$planes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.planes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      \Validator::make($request->all(), [
        'nombre' => 'min:1|max:40|unique:Plan,nombre_Plan|required',
        'descripcion' => 'required',
      ])->validate();
      $plan=new Plan(['nombre_Plan' => $request->nombre,
                      'descripcion_Plan' => $request->descripcion]);
      $plan->save();
      flash('Nuevo plan creado con éxito', 'success');
      return redirect()->route('planes.index');
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
      $plan=Plan::find($id);
      return view('admin.planes.edit')->with('plan',$plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      \Validator::make($request->all(), [
        'nombre' => 'min:1|max:40|required',
        'descripcion' => 'required',
      ])->validate();
      $plan=Plan::find($id);
      $plan->fill(['nombre_Plan' => $request->nombre,
                      'descripcion_Plan' => $request->descripcion]);
      $plan->save();
      flash('Nuevo plan creado con éxito', 'success');
      return redirect()->route('planes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $plan=Plan::find($id);
      $plan->delete();
      flash('Plan '.$id.' eliminado', 'danger');
      return redirect()->route('planes.index');
    }
}
