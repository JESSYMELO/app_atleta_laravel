<?php $titulo="pesquisar";?>
@extends('principal')
@section('conteudo')
        <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesquisar atleta</title>
</head>
<body>
<div class="container">
    <h1 class="mt-2">Pesquisa de Atletas</h1>

    @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{$mensagem}}</div>
    @endif


    @if(count($atletas)==0)
        <div class="alert alert-danger mt-2">Nenhum Atleta encontrado!</div>
    @else


        <form action="/cadastro/pesquisar" method="post" class="form-inline mt-2">
            <input type="hidden" name="_token" value="{{{csrf_token()}}}">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>

        <table class="table mt-2 text-center">
            <tr>
                <th>id</th>
                <th class="text-left">Nome</th>
                <th>Idade</th>
                <th>Data Nascimento</th>
                <th>Posição</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($atletas as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td class="text-left">{{$a->nome}}</td>
                    <td>{{$a->idade}}</td>
                    <td>{{$a->data_nascimento}}</td>
                    <td>{{$a->posicao}}</td>
                    <td><a href="/cadastro/excluir/{{$a->id}}"><button class="btn btn-danger">Excluir</button></a></td>
                    <td><a href="/cadastro/alterar/{{$a->id}}"><button class="btn btn-warning">Alterar</button></a></td>
                </tr>
            @endforeach
        </table>
    @endif
</div>

</body>
</html>
@stop