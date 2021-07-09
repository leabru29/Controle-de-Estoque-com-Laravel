@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Cadastro de unidade de medida</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <form class="form-group" action="{{route('unidade.store')}}" method="POST">
                @csrf
                <div class="mb-3 form-group col-6">
                    <input type="text" class="form-control foco" name="medida" placeholder="Medida">
                    <input type="text" class="form-control foco" name="sigla" placeholder="Sigla">
                    <select class="form-control form-select" name="ativo">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                    <br><br>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar Marca</button>
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