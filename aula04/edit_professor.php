<?php

    require './CRUDprofessor.php';

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/listar_professor.php' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = filter_input(INPUT_POST, 'txtId');
                $nome = filter_input(INPUT_POST, 'txtNome');
                $cpf = filter_input(INPUT_POST, 'txtCpf');
                $telefone = filter_input(INPUT_POST, 'txtTelefone');
                atualizaProfessor($id, $nome, $cpf, $telefone);
                exit;
        }
    }

    function atualizaProfessor($id, $nome, $cpf, $telefone) {
        if(updateProfessor($id, $nome, $cpf, $telefone)) {
            echo "Professor atualizado com sucesso!";
            echo "<br><a href='listar_professor.php'>Voltar a lista</a>";
        } else {
            echo "falha ao atualizar o Professor.";
            echo "<br><a href='listar_professor.php'>Voltar a lista</a>";
        }
    }

    header('Location: index.php');