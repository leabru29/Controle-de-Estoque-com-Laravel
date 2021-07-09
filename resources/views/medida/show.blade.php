@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Detalhes medida</h1>
@stop

@section('content')
    <div class="container">
        <section>
            
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Local de armazenamento</th>
                        <th>Sigla</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$deltalhesMedida->medida}}</td>
                        <td>{{$deltalhesMedida->sigla}}</td>
                        <td>{{$deltalhesMedida->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{route('unidade.destroy',$deltalhesMedida->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('unidade.index')}}" class="btn btn-success">Voltar</a>
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </section>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop