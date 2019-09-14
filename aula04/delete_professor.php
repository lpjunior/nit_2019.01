<?php

    require './CRUDprofessor.php';

    $page = '';

    if(isset($_SERVER['HTTP_REFERER'])) {
        if($_SERVER['HTTP_REFERER'] == 'http://localhost/aula_php/aula04/listar_professor.php' && $_SERVER['REQUEST_METHOD'] === 'GET') {
                $id = filter_input(INPUT_GET, 'id');
                deleteProfessor($id);
                $page = 'listar_professor.php';
        }
    } else {
        $page = 'index.php';
    }

    header("Location: {$page}");
    exit;