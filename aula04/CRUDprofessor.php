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