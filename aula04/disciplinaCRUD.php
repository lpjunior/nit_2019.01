<?php

    require('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##


# Função responsável por inserir os dados no banco
function createDisciplina($nome, $descricao) {
    $link = abreConexao();

    $query = "insert into tb_disciplina(nome, descricao) values ('{$nome}', '{$descricao}')";
    try{
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao gravar no banco", 1);
        return false;
    } finally {
        mysqli_close($link);
    }
}

# Função responsável por listar todos os Disciplinas
function getDisciplinas() {
    $link = abreConexao();
    $query = "select * from tb_disciplina";
    try{
        $rs = mysqli_query($link, $query);
        $listaDisciplinas = Array();

        while($linha = mysqli_fetch_assoc($rs)) {
            array_push($listaDisciplinas, $linha);
        }

        return $listaDisciplinas;
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao listar do banco", 1);
        return Array();
    } finally {
        mysqli_close($link);
    }
}

# Função responsável por excluir o Disciplina
function deleteDisciplina($id) {
    $link = abreConexao();

    $query = "delete from tb_disciplina where iddisciplina = {$id}";
    try{
        if(mysqli_query($link, $query)) {
            return true;
        }
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao deletar no banco", 1);
        return false;
    } finally {
        mysqli_close($link);
    }
}

# Função responsável por atualizar o Disciplina

function updateDisciplina($iddisciplina, $nome, $descricao) {
   $link = abreConexao();

   $query = "update tb_disciplina set nome = '{$nome}', descricao = '{$descricao}' where iddisciplina = {$iddisciplina}";
   try{
       if(mysqli_query($link, $query)) {
           return true;
       }
   } catch(\Throwable $th) {
       throw new \Exception("Erro ao atualizar no banco", 1);
       return false;
   } finally {
       mysqli_close($link);
   }
}