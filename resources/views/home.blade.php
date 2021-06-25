@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Controle de Estoque</h1>
    <p>Bem vindo ao painel administrativo.</p>
@stop

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->codi}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->preco}}</td>
                    <td>{{$produto->quant_estoque}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <div class="d-flex justify-content-center">
                {{ $produtos->render("pagination::bootstrap-4")}}
            </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
