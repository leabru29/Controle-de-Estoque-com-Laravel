@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Saídas Produtos</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('saida.create')}}" class="btn btn-success mb-3">Adicionar Saída</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>QTD</th>
                        <th>Valor</th>
                        <th>Data saída</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($saidas as $saida)
                    @php
                    $valorSaida = $saida->quant * $saida->Produto->preco;
                    @endphp
                    <tr>
                        <td>{{$saida->Produto->codi}}</td>
                        <td>{{$saida->Produto->nome}}</td>
                        <td>{{$saida->quant}}</td>
                        <td>{{$valorSaida}}</td>
                        <td>{{date('d/m/Y', strtotime($saida->data))}}</td>
                        <td>
                            <a href="" class="btn btn-success">Detalhes</a>
                            <a href="" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
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