<?php

    require('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##


# Função responsável por inserir os dados no banco
function createCurso($nome) {
    // recebe o retorno da função com a conexão aberta
    $link = abreConexao();

    // variavel responsável por definir a query SQL a ser disparada no banco
    $query = "insert into tb_curso(nome) values ('{$nome}')";
    try{ // Tenta executar
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
        mysqli_close($link);
    }
}

# Função responsável por listar todos os cursos
function getCursos() {
    $link = abreConexao();
    $query = "select * from tb_curso";
    try{
        /** @$rs - ResultSet: variavel responsável por guardar o resultado vindo do banco de dados */
        $rs = mysqli_query($link, $query); // O que vier de resultado será entregue a variavel $rs
        $listaCursos = Array(); // conter todos os cursos que estão registrados na tb_curso

        // caso tenha resultado $linha recebe registro do curso(linha), caso não tenha mais registros receberá null
        while($linha = mysqli_fetch_assoc($rs)) {
            array_push($listaCursos, $linha);
        }

        return $listaCursos;
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao gravar no banco", 1);
        return Array(); // retorna uma estrutura de array vazio
    } finally {
        mysqli_close($link);
    }
}