@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Países</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('paises.create')}}" class="btn btn-success mb-3">Adicionar País</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome País</th>
                        <th>Código do País</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pais as $paises)
                    <tr>
                        <td>{{$paises->nome}}</td>
                        <td>{{$paises->codi}}</td>
                        <td>{{$paises->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('paises.show',$paises->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('paises.edit',$paises->id)}}" class="btn btn-primary">Editar</a>
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