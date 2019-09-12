<?php

    require('./disciplinaCRUD.php');

    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE DISCIPLINA

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $descricao = filter_input(INPUT_POST, "txtDescricao") ?? "";
        
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