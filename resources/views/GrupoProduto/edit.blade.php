@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Editar produto</h1>
@stop

@section('content')
    <div class="container">
        <section>
            
            <form class="form-group" action="{{route('grupo.update',$grupo_editar->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3 form-group col-6">
                    <input type="text" class="form-control foco" name="nome_grupo" value="{{$grupo_editar->nome_grupo}}" placeholder="Preencha o nome do grupo">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-group" name="ativo" value="{{$grupo_editar->ativo}}">
                    <label class="form-check-label" for="exampleCheck1">Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </section>
        <a href="{{route('grupo.index')}}" class="btn btn-success">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop