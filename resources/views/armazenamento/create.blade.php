@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Cadastro de marca de produtos</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <form class="form-group" action="{{route('armazenamento.store')}}" method="POST">
                @csrf
                <div class="mb-3 form-group col-6">
                    <input type="text" class="form-control foco" name="nome_armazenamento" placeholder="Preencha um local de armazenamento">
                </div>
                <select class="form-select" name="ativo">
                  <option value="1">Ativo</option>
                  <option value="0">Inativo</option>
                </select><br><br>
                <button type="submit" class="btn btn-primary">Adicionar Local</button>
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