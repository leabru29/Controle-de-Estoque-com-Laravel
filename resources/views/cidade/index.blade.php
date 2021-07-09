@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Estados</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('cidade.create')}}" class="btn btn-success mb-3">Adicionar Estado</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Estado</th>
                        <th>Estado</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->nome}}</td>
                        <td>{{$cidade->Estados->nome}}</td>
                        <td>{{$cidade->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('cidade.show',$cidade->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('cidade.edit',$cidade->id)}}" class="btn btn-primary">Editar</a>
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