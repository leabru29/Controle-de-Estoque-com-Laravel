@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Adicionando saída</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <form class="form-group" action="{{route('saida.store')}}" method="POST">
                @csrf
                <div class="mb-3 form-group col-6">
                    <select class="form-control form-select" name="id_produto">
                        <option value="">Escolha um produto</option>
                        @foreach($produto as $produtos)
                        <option value="{{$produtos->id}}">{{$produtos->codi}} - {{$produtos->nome}}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control foco" name="quant" placeholder="Quantidade produto">
                    <input type="hidden" class="form-control foco" name="data" value="{{date('Y-m-d H:i:s')}}">
                    <br><br>
                </div>
                <button type="submit" class="btn btn-primary">Adicionar saída de produto</button>
            </form>
        </section>
        <a href="{{route('saida.index')}}" class="btn btn-success">Voltar</a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop