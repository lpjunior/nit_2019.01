<?php

require('./conexao.php');

$link = abreConexao();

# Função responsável por efetuar o login
function getLogin($username, $password) {

    $link = abreConexao();

    $query = "select idlogin, username from login where username = '{$username}' and password = md5('{$password}')";
    try{
        $rs = mysqli_query($link, $query);

        if($linha = mysqli_fetch_assoc($rs)) {
          return $linha;
        }

        return NULL;
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao consultar o login do banco", 1);
        return NULL;
    } finally {
        mysqli_close($link);
    }
}