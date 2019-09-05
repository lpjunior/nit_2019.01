<?php

    ## DEFINICAO DAS VARIAVEIS DE CONEXAO

    define("SERVER", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "db_curso");
    define("PORT", 3306);

    function abreConexao() {
        // entregar(retornar) o contexto da conexão
        $link = mysqli_connect(SERVER, USER, PASS, DB, PORT);
        // set encode UTF-8
        mysqli_set_charset($link, "utf8");
        return $link;
    }

    $con = abreConexao();

    if(!$con) {
        echo "Erro ao estabelecer uma conexão com o banco de dados<br>";
        echo "Código do erro: " . mysqli_connect_errno() . "<br>"; // exibe o código de erro
        echo "Msg de erro: " . mysqli_connect_error();
        exit;
    }

    #echo "Conexão estabelecida com sucesso.<br>";
    #echo "Informações do servidor: " . mysqli_get_host_info($con);

    #mysqli_close($con);