<?php
    session_start();
    require('./CRUDcurso.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE CURSO

    // verifica se a sessão está ativa
    if(isset($_SESSION['login'])) {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        
        if(createCurso($nome)) {
            // cria uma sessão com chave 'msg' e atribui um valor
            $_SESSION['msg'] = "Curso gravado com sucesso";
        } else {
            $_SESSION['msg'] = "Falha ao gravar o curso";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_curso.php');
    }