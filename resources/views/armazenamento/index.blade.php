@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Armazenamento</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('armazenamento.create')}}" class="btn btn-success mb-3">Adicionar Local</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($armazenamento as $local)
                    <tr>
                        <td>{{$local->nome_armazenamento}}</td>
                        <td>{{$local->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('armazenamento.show',$local->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('armazenamento.edit',$local->id)}}" class="btn btn-primary">Editar</a>
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