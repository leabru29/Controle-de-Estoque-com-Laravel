@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Medidas</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('unidade.create')}}" class="btn btn-success mb-3">Adicionar unidade de medida</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Medida</th>
                        <th>Sigla</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medida as $medidas)
                    <tr>
                        <td>{{$medidas->medida}}</td>
                        <td>{{$medidas->sigla}}</td>
                        <td>{{$medidas->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('unidade.show',$medidas->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('unidade.edit',$medidas->id)}}" class="btn btn-primary">Editar</a>
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