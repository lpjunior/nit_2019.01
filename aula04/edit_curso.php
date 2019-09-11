<?php

    require './cursoCRUD.php';

    function atualizaCurso($id, $curso) {
        if(updateCurso($id, $curso)) {
            echo "curso atualizado com sucesso!";
        } else {
            echo "falha ao atualizar o curso.";
        }
    }