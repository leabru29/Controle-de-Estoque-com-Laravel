@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Cadastro de grupo de produto</h1>
    <p>Veja os grupos já cadastrados abaixo.</p>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{url('grupo/create')}}" class="btn btn-success mb-3">Adicionar Grupo</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Grupo</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grupos as $grupo)
                    <tr>
                        <td>{{$grupo->nome_grupo}}</td>
                        <td>{{$grupo->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('grupo.show',$grupo->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('grupo.edit',$grupo->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $grupos->render("pagination::bootstrap-4")}}
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