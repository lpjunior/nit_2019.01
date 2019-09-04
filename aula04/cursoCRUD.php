<?php

    require('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##


# Função responsável por inserir os dados no banco
function createCurso($nome) {
    // recebe o retorno da função com a conexão aberta
    $link = abreConexao();

    // variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_curso(nome) values ({$nome})";

    try{
        mysqli_query($link, $query);
        return true;
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    }
}