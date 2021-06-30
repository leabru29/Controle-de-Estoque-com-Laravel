@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Cadastro de grupo de produto</h1>
    <p>Veja os grupos já cadastrados abaixo.</p>
@stop

@section('content')
    <div class="container">
        <section>
            <form class="form-group" action="{{route('grupo.store')}}" method="POST">
                @csrf
                <div class="mb-3 form-group col-6">
                    <input type="text" class="form-control foco" name="nome_grupo" placeholder="Preencha o nome do grupo">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-group" name="ativo" value="1">
                    <label class="form-check-label" for="exampleCheck1" checked>Ativo</label>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar Grupo</button>
            </form>
        </section>
        <a href="" class="btn btn-success">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop