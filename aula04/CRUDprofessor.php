<?php

    require('./conexao.php');
    ## ARQUIVO RESPONSAVEL POR FAZER AS TRANSAÇÕES COM O BANCO DE DADOS ##

    # Função responsável por inserir os dados no banco
    function createProfessor($nome, $cpf, $telefone) {
        // recebe o retorno da função com a conexão aberta
        $link = abreConexao();

        // variavel responsável por definir a query SQL a ser disparada no banco
        $query = "insert into tb_professor(cpf, nome) values ('{$cpf}', '{$nome}')";
        try{ // Tenta executar
            if(mysqli_query($link, $query)) { // registra o professor
                $id = mysqli_insert_id($link); // resgata o ID gerado para o professor
                $query = "insert into tb_telefone(numero, professor_id) values ('{$telefone}', {$id})";
                if(mysqli_query($link, $query)) { // insere o telefone do professor
                    return true;
                }
            }
        } catch(\Throwable $th) { // entra nesse bloco caso ocorra erro
            throw new \Exception("Erro ao gravar no banco", 1);
            return false;
        } finally { // executa sempre indiferente de funcionar ou ocorrer um erro
            mysqli_close($link);
        }
    }

    # Função responsável por listar todos os professores
    function getProfessores() {

        $link = abreConexao();
        $query = "select idprofessor, nome, cpf, numero as telefone from tb_professor inner join tb_telefone on tb_telefone.professor_id = tb_professor.idprofessor";
        try{

            $rs = mysqli_query($link, $query);
            $listaCursos = Array();

            while($linha = mysqli_fetch_assoc($rs)) {
                array_push($listaCursos, $linha);
            }

            return $listaCursos;
        } catch(\Throwable $th) {
            throw new \Exception("Erro ao listar do banco", 1);
            return Array();
        } finally {
            mysqli_close($link);
        }
    }

# Função responsável por atualizar os dados no banco
function updateProfessor($id, $nome, $cpf, $telefone) {

    $link = abreConexao();

    $query = "update tb_professor set cpf = '{$cpf}', nome = '{$nome}' where idprofessor = '{$id}'";
    try{
        if(mysqli_query($link, $query)) {
            $query = "update tb_telefone set numero = '{$telefone}' where professor_id = '{$id}'";
            if(mysqli_query($link, $query)) {
                return true;
            }
        }
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao atualizar no banco", 1);
        return false;
    } finally {
        mysqli_close($link);
    }
}

# Função responsável por deletar os dados no banco
function deleteProfessor($id) {

    $link = abreConexao();

    $query = "delete from tb_professor where idprofessor = '{$id}'";
    try{
        if(mysqli_query($link, $query)) {
            $query = "delete from tb_telefone where professor_id = '{$id}'";
            if(mysqli_query($link, $query)) {
                return true;
            }
        }
    } catch(\Throwable $th) {
        throw new \Exception("Erro ao atualizar no banco", 1);
        return false;
    } finally {
        mysqli_close($link);
    }
}