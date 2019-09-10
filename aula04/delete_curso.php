<?php

    require './cursoCRUD.php';

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/listar_curso.php' && $_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = filter_input(INPUT_GET, 'id');
                excluirCurso($id);
                exit;
        }
    }

    header('Location: index.php');

    function excluirCurso($id) {
        if(deleteCurso($id)) {
            echo "Excluído com sucesso";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        } else {
            echo "Erro ao excluir";
            echo "<a href='listar_curso.php'>Voltar a lista</a>";
        }
    }