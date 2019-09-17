<?php

    require './CRUDlogin.php';

    session_start();

    $username = filter_input(INPUT_POST, 'txtUsername', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'txtPassword', FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SESSION['login'] = getLogin($username, $password)) {
        $_SESSION['status'] = 'notice'; // Tem o valor do tipo da notificação
        $_SESSION['msg'] = 'Bem Vindo ao Sistema'; // valor da msg a ser notificada
        header('Location: index.php');
    } else {
        unset($_SESSION['login']); // deleta o valor da variavel
        session_unset(); // remove toda a sessão
        $_SESSION['status'] = 'error';
        $_SESSION['msg'] = 'Falha ao efetuar login';
        header('Location: form_login.php');
    }

    exit;