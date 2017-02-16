<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cuota;

class CuotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuotas=Cuota::orderBy('id_Cuota', 'ASC')->paginate(13);
        return view('admin.cuotas.index')->with('cuotas',$cuotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cuotas.create');
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
          'plan' => 'min:1|max:15|exists:Plan,id_Plan|required',
          'nombre.*' => 'min:1|max:15|required',
          'vencimiento.*' => 'required',
          'estatus.*' => 'required'
        ])->validate();
        for ($i=0; $i < count($request->nombre); $i++) {
          $cuotas[]=new Cuota(['nombre_Cuota' => $request->nombre[$i],
                               'vencimiento_Cuota' => $request->vencimiento[$i],
                               'estatus_Cuota' => $request->estatus[$i]]);
        }
        $plan=\App\Plan::find($request->plan);
        $plan->cuotas()->saveMany($cuotas);
        flash('Cuotas creadas con éxito', 'success');
        return redirect()->route('cuotas.index');
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
      $cuota=Cuota::find($id);
      $plan=$cuota->plan();
      return view('admin.cuotas.edit')->with('cuota',$cuota);
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
        'nombre' => 'min:1|max:15|required',
        'vencimiento' => 'required',
        'estatus' => 'required',
      ])->validate();
      $cuota=Cuota::find($id);
      $cuota->fill(['nombre_Cuota' => $request->nombre,
                    'vencimiento_Cuota' => $request->vencimiento,
                    'estatus_Cuota' => $request->estatus,
                    ]);
      $cuota->save();
      flash('Nueva cuota creado con éxito', 'success');
      return redirect()->route('cuotas.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cuota=Cuota::find($id);
      $cuota->delete();
      flash('Cuota '.$id.' eliminado', 'danger');
      return redirect()->route('cuotas.index');
    }
}
