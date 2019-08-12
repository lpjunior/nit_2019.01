<?php

    /*
        Estrutura de decisão. Na programação temos algumas forma de desenvolver a estrutura de decisão:
            Tais como:
                - Estrutura simples
                - Estrutura composta
                - Estrutura encadeada
                - Estrutura compacta
                - Estrutura ternária
                - Decisão múltipla
    */

    # Estrutura simples: É dada por uma única ação.

    $idade = 18;

    // no portugues estruturado (portugol) SE
    if($idade >= 18) {
        echo "Pode ir a festa";
    }

    echo "<br><br><hr><br><br>";

    # Estrutura composta: É dada por mais de uma ação

    // no portugues estruturado (portugol) SE, SENÃO

    if($idade >= 18) {
        echo "Pode ir a festa";
    } else {
        echo "Não tem idade apropriada";
    }

    echo "<br><br><hr><br><br>";

    # Estrutura encadeada: É dada por muitas ações com testes

    // no portugues estruturado (portugol) SE,SENÃO-SE,[SENÃO]

    $materia = "PHP com Banco de Dados";

    if($materia == "Java") {
        echo "Linguagem orientada a objetos";
    } else if($materia == "Linguagem de scripts") {
        echo "Linguagem web para aplicações";
    } elseif($materia == "PHP com Banco de Dados") {
        echo "Linguagem procedural web";
    } else {
        echo "Não é uma materia de programação";
    }

    echo "<br><br><hr><br><br>";

    # Estrutura compacta: É dada pela ausencia das chaves

    // pode ser usada em estruturas: simples, composta, encadeada e estruturas de repetição

    if($idade >= 18) 
        echo "Pode ir a festa";
    else
        echo "Não tem idade apropriada";

    // OBS: Essa estrutura só funciona QUANDO o conteúdo de linha do bloco do if/else é somente 1 linha

    echo "<br><br><hr><br><br>";

    # Estrutura ternária: É dada por definir a estrutura composta em 1 única linha

    echo ($idade >= 18) ? "Pode ir a festa" : "Não tem idade apropriada";

    echo "<br><br><hr><br><br>";


    # Decisão múltipla: É dada definir casos de teste
    
    $opcao = 5;
    switch($opcao) {
        case 1:
            echo "A soma dos valores é: " . (1 + 2);
            break;
        case 2:
            echo "A multiplicação dos valores é: " . (1 * 2);
            break;
        case 3:
            echo "O modulo dos valores é: " . (1 % 2);
            break;
        default:
            echo "Opção inválida";
            break;
    }
