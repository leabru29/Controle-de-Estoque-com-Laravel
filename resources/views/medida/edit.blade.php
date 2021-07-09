@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Editar marca</h1>
@stop

@section('content')
    <div class="container">
        <section>
            
            <form class="form-group" action="{{route('unidade.update', $unidade->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3 form-group col-6">
                    <input type="text" class="form-control foco" name="medida" value="{{$unidade->medida}}" placeholder="Preencha o nome do grupo">
                    <input type="text" class="form-control foco" name="sigla" value="{{$unidade->sigla}}" placeholder="Preencha o nome do grupo">
                    <select class="form-select form-control" name="ativo">
                    @if($unidade->ativo > 0)
                        <option value="1" selected>Ativo</option>
                        <option value="0">Inativo</option>
                    @else
                        <option value="1">Ativo</option>
                        <option value="0" selected>Inativo</option>
                    @endif	
	                </select><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </section>
        <a href="{{route('unidade.index')}}" class="btn btn-success">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop