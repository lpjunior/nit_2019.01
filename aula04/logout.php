<?php

    session_start();

    unset($_SESSION['login']); // deleta o valor da variavel
    session_unset(); // remove toda a sessão
    session_destroy(); // deleta todas as variaveis de sessaão

    header('Location: index.php');
    exit;