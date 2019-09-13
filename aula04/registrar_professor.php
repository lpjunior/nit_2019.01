<?php
    require('./CRUDprofessor.php');
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE PROFESSOR

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "txtNome") ?? "";
        $cpf = filter_input(INPUT_POST, "txtCpf");
        $telefone = filter_input(INPUT_POST, "txtTelefone");
    
        if(createProfessor($nome, $cpf, $telefone)) {
            echo "gravado com sucesso";
        } else {
            echo "falha ao gravar";
        }
    } else {
        # redirecionamento de página
        header('Location: cadastrar_professor.php');
    }