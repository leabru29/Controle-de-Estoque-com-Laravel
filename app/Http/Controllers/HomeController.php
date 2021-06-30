<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produto = DB::table('produto')
                        ->join('grupo_produto','produto.id_grupo','=','grupo_produto.id')
                        ->where('quant_estoque','>','0')
                        ->orderBy('nome','asc')
                        ->paginate(5);
        $vendas = DB::table('produto')
                    ->join('saida_produto','produto.id','=','saida_produto.id_produto')
                    ->sum('preco');

        $quantidadeProduto = DB::table('produto')
                    ->where('quant_estoque','>',0)
                    ->sum('preco');
        $valorCompra = DB::table('produto')
                    ->join('entrada_produto','produto.id','=','entrada_produto.id_produto')
                    ->where('quant_estoque','>',0)
                    ->sum('preco');
        //dd($quantidadeProduto);
        return view('home', [
            'produtos'=>$produto,
            'vendas'=>$vendas,
            'quantidadeProduto'=>$quantidadeProduto,
            'valorEntrada'=>$valorCompra
        ]);
    }
}
