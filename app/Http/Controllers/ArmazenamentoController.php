<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armazenamento;

class ArmazenamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armazenamento = Armazenamento::all();
        return view('armazenamento.index', ['armazenamento'=>$armazenamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('armazenamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Armazenamento::create($request->all());
        return redirect()->route('armazenamento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $local = Armazenamento::findOrFail($id);
        return view('armazenamento.show',['local'=>$local]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localEdit = Armazenamento::findOrFail($id);
        if (!$localEdit) {
            return redirect()->route('armazenamento.index');
        }
        return view('armazenamento.edit',['local'=>$localEdit]);
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
        $editLocal = Armazenamento::findOrFail($id);

        if (!$editLocal) {
            return redirect()->route('armazenamento.index');
        }
        $editLocal->update($request->all());
        return redirect()->route('armazenamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteLocal = Armazenamento::findOrFail($id);
        if (!$deleteLocal) {
            return redirect()->route('armazenamento.index');
        }

        $deleteLocal->delete();

        return redirect()->route('armazenamento.index');
    }
}
