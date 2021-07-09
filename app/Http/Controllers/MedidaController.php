<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medida;

class MedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medida = Medida::paginate();
        return view('medida.index',['medida'=>$medida]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medida::create($request->all());

        return redirect()->route('unidade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhesMedida = Medida::findOrFail($id);

        return view('medida.show',['deltalhesMedida'=>$detalhesMedida]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editMedida = Medida::findOrFail($id);
        if (!$editMedida) {
            return redirect()->route('unidade.index');
        }
        return view('medida.edit',['unidade'=>$editMedida]);
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
        $editMedida = Medida::findOrFail($id);

        if (!$editMedida) {
            return redirect()->route('unidade.index');
        }
        $editMedida->update($request->all());
        return redirect()->route('unidade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletaMedida = Medida::findOrFail($id);
        if (!$deletaMedida) {
            return redirect()->route('unidade.index');
        }
        $deletaMedida->delete();
        return redirect()->route('unidade.index');
    }
}
