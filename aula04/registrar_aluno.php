<?php

    require('./CRUDaluno.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE ALUNO

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        
        if(createCurso($nome)) {
            echo "Curso gravado com sucesso";
        } else {
            echo "Falha ao gravar o curso";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_curso.php');
    }