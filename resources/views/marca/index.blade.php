@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Lista de Marcas</h1>
    <p>Veja as marcas já cadastradas abaixo.</p>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('marca.create')}}" class="btn btn-success mb-3">Adicionar Marca</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Marca</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                    <tr>
                        <td>{{$marca->nome_marca}}</td>
                        <td>{{$marca->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('marca.show',$marca->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('marca.edit',$marca->id)}}" class="btn btn-primary">Editar</a>
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