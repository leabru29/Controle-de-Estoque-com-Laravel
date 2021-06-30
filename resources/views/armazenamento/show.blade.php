@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Detalhes do local</h1>
@stop

@section('content')
    <div class="container">
        <section>
            
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Local de armazenamento</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$local->nome_armazenamento}}</td>
                        <td>{{$local->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{route('armazenamento.destroy',$local->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('armazenamento.index')}}" class="btn btn-success">Voltar</a>
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