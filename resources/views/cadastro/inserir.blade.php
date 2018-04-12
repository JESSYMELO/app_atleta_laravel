<?php $titulo="inserir";?>
@extends('principal')
@section('conteudo')
        <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">

    <h1 class="mt-2">Inserir Atleta</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success">Atleta inserido com sucesso!</div>
    @endif

    <form action="/cadastro/inserir" method="post" class="mt-2">
        <input type="hidden" name="_token" value="{{{csrf_token()}}}">
        <div class="form-group">
            <label for="nome">Nome: <span class="text-danger">*</span></label>
            <input type="text" id="nome" name="nome" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="idade">Idade:<span class="text-danger"></span>*</label>
            <input type="number" id="idade" name="idade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data nascimento:<span class="text-danger">*</span></label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="posicao">Posição</label>
            <input type="text" id="posicao" name="posicao" class="form-control">
        </div>
        <div>Os campos marcados com<span class="text-danger">*</span>não podem estar em branco</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir">
    </form>
</div>

</body>
</html>
@stop