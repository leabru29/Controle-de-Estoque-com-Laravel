@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Cadastro de grupo de produto</h1>
    <p>Veja os grupos já cadastrados abaixo.</p>
@stop

@section('content')
    <div class="container">
        <section>
            
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Grupo</th>
                        <th>Ativo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$grupo_detalhes->nome_grupo}}</td>
                        <td>{{$grupo_detalhes->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{route('grupo.destroy',$grupo_detalhes->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('grupo.index')}}" class="btn btn-success">Voltar</a>
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