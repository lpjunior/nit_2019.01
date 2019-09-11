<?php

    require './cursoCRUD.php';

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/listar_curso.php' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = filter_input(INPUT_POST, 'txtId');
                $curso = filter_input(INPUT_POST, 'txtNome');
                atualizaCurso($id, $curso)
                exit;
        }
    }

    function atualizaCurso($id, $curso) {
        if(updateCurso($id, $curso)) {
            echo "curso atualizado com sucesso!";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        } else {
            echo "falha ao atualizar o curso.";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }
    }

    header('Location: index.php');