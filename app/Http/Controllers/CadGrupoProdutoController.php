<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadGrupoProduto;
use App\Models\Home;

class CadGrupoProdutoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produtos = Home::all();
        $grupo = CadGrupoProduto::paginate(5);
        return view('GrupoProduto.index',['grupos'=>$grupo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GrupoProduto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cadGrupo = CadGrupoProduto::create($request->all());

        return redirect()->route('grupo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalhesGrupo = CadGrupoProduto::findOrFail($id);
        if (!$detalhesGrupo) {
            return redirect()->route('GrupoProduto.index');
        }

        return view('GrupoProduto.show', [
            'grupo_detalhes' => CadGrupoProduto::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editarGrupo = CadGrupoProduto::findOrFail($id);
        if (!$editarGrupo) {
            return redirect()->route('GrupoProduto.index');
        }

        return view('GrupoProduto.edit', [
            'grupo_editar' => CadGrupoProduto::findOrFail($id)
        ]);
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
        $editarGrupo = CadGrupoProduto::findOrFail($id);
        if (!$editarGrupo) {
            return redirect()->route('GrupoProduto.index');
        }

        $editarGrupo->update($request->all());

        return redirect()->route('grupo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalhesGrupo = CadGrupoProduto::findOrFail($id);
        if (!$detalhesGrupo) {
            return redirect()->route('grupo.index');
        }

        $detalhesGrupo->delete();
        return redirect()->route('grupo.index');
    }
}
