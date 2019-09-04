<?php
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE PRODUTO

    /*$nome = $_POST['txtNome'];
    $quantidade = $_POST['txtQtd'];
    $preco = $_POST['txtPreco'];
    $imagem = $_POST['flImg'];*/

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $quantidade = filter_input(INPUT_POST, "txtQtd");
        $preco = filter_input(INPUT_POST, "txtPreco");
        $imagem = filter_input(INPUT_POST, "flImg");
    
        echo "$nome<br>$quantidade<br>$preco<br>$imagem<br>";
    } else {
        # redirecionamento de página
        header('Location: cadastrar.php');
    }