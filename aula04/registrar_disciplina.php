<?php

    require('./CRUDdisciplina.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE DISCIPLINA

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/cadastrar_disciplina.php' && $_SERVER['REQUEST_METHOD'] === 'POST') {

            $nome = filter_input(INPUT_POST, "txtNome");
            $descricao = filter_input(INPUT_POST, "txtDescricao");
            
            if(createDisciplina($nome, $descricao)) {
                echo "Disciplina gravado com sucesso";
                echo "<br><a href='listar_disciplina.php'>Voltar a lista</a>";
            } else {
                echo "Falha ao gravar a disciplina";
                echo "<br><a href='listar_disciplina.php'>Voltar a lista</a>";
            }
        } else {
            # redirecionamento de página
            header('Location: cadastrar_disciplina.php');
        }
    }