@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
<h1>Detalhes do produto {{$produto->codi}}</h1>
<hr>
@stop

@section('content')
    <div class="container">
        <section>
            <div class="row form-group">
                <div class="col-6">
                    <h5><strong>Código</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->codi}}">
                    <br>
                    <h5><strong>Descrição</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->nome}}">
                    <br>
                    <h5><strong>preço</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->preco}}">
                    <br>
                    <h5><strong>Quantidade</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->quant_estoque}}">
                    <br>
                    <h5><strong>Medida</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->Medida->medida}}">
                </div>
                <div class="col-6">
                    <h5><strong>Grupo</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->Grupo->nome_grupo}}"><br>
                    <h5><strong>Marca</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->Marca->nome_marca}}"><br>
                    <h5><strong>Fornecedor</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->Fornecedores->nome}}"><br>
                    <h5><strong>Local Armazenamento</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->Armazenamento->nome_armazenamento}}"><br>
                    <h5><strong>Status</strong></h5>
                    <input class="form-control" type="text" value="{{$produto->ativo == 1 ? 'Ativo' : 'Inativo'}}">
                </div>
            </div>
            <form action="{{route('produtos.destroy',$produto->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('produtos.index')}}" class="btn btn-success">Voltar</a>
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop