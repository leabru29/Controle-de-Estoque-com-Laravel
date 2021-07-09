@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('produtos.create')}}" class="btn btn-success mb-3">Adicionar Produto</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>QTD</th>
                        <th>Grupo</th>
                        <th>Medida</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->codi}}</td>
                        <td>{{substr($produto->nome, 0, 25)}}...</td>
                        <td>{{$produto->preco}}</td>
                        <td>{{$produto->quant_estoque}}</td>
                        <td>{{$produto->Grupo->nome_grupo}}</td>
                        <td>{{$produto->Medida->sigla}}</td>
                        <td>{{$produto->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('produtos.show',$produto->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('produtos.edit',$produto->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $produtos->render("pagination::bootstrap-4")}}
            </div>
        </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop