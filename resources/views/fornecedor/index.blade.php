@extends('adminlte::page')

@section('title', 'Controle de Estoque')

@section('content_header')
    <h1>Fonecedores</h1>
@stop

@section('content')
    <div class="container">
        <section>
            <a href="{{route('fornecedor.create')}}" class="btn btn-success mb-3">Adicionar Fornecedor</a>
            <table class="table table-striped table-hover center table-bordered">
                <thead>
                    <tr>
                        <th>Nome Fornecedor</th>
                        <th>Razão Social</th>
                        <th>Telefone</th>
                        <th>Contato</th>
                        <th>CEP</th>
                        <th>País</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fornecedores as $fornecedor)
                    <tr>
                        <td>{{$fornecedor->nome}}</td>
                        <td>{{$fornecedor->razao_social}}</td>
                        <td>{{$fornecedor->telefone}}</td>
                        <td>{{$fornecedor->contato}}</td>
                        <td>{{$fornecedor->cep}}</td>
                        <td>{{$fornecedor->Pais->nome}}</td>
                        <td>{{$fornecedor->Estados->nome}}</td>
                        <td>{{$fornecedor->Cidades->nome}}</td>
                        <td>{{$fornecedor->ativo == 1 ? 'Ativo' : 'Inativo'}}</td>
                        <td>
                            <a href="{{route('fornecedor.show',$fornecedor->id)}}" class="btn btn-success">Detalhes</a>
                            <a href="{{route('fornecedor.edit',$fornecedor->id)}}" class="btn btn-primary">Editar</a>
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