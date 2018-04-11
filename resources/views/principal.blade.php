<?php $titulo="";?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="../../css/app.css">
    <script lang="text/javascript" src="/js/app.js"></script>
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/cadastro/pesquisar">Pesquisar atleta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cadastro/inserir">Inserir atleta</a>
            </li>
        </ul>
<section class="conteudo">
    @yield('conteudo')
</section>

    </div>
</body>
</html>