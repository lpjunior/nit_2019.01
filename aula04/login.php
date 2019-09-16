<?php

    session_start();

    $username = filter_input(INPUT_POST, 'txtUsername', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'txtPassword', FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SESSION['login'] = login($username, $password)) {
        $_SESSION['msg'] = 'Bem Vindo ao Sistema';
    } else {
        $_SESSION['msg'] = 'Falha ao efetuar login';
        unset($_SESSION['login']); // deleta o valor da variavel
        session_unset(); // remove toda a sessão
    }