<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items=Item::orderBy('id_Item', 'ASC')->paginate(13);
      return view('admin.items.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.items.create');
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
        'cuota' => 'min:1|max:15|exists:Cuota,id_Cuota|required',
        'nombre.*' => 'min:1|max:15|required',
        'monto.*' => 'numeric|required',
      ])->validate();
      for ($i=0; $i < count($request->nombre); $i++) {
        $items[]=new Item(['nombre_Item' => $request->nombre[$i],
                           'monto_Item' => $request->monto[$i]]);
      }
      $cuota=\App\Cuota::find($request->cuota);
      $cuota->items()->saveMany($items);
      flash('Items creados con éxito', 'success');
      return redirect()->route('items.index');
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
      $item=Item::find($id);
      $cuota=$item->cuota();
      return view('admin.items.edit')->with('item',$item);
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
        'nombre' => 'min:1|max:20|required',
        'monto' => 'numeric|required',
      ])->validate();
      $item=Item::find($id);
      $item->fill(['nombre_Item' => $request->nombre,
                    'monto_Item' => $request->monto,
                    ]);
      $item->save();
      flash('Nuevo item creado con éxito', 'success');
      return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item=Item::find($id);
      $item->delete();
      flash('Item '.$id.' eliminado', 'danger');
      return redirect()->route('items.index');
    }
}
