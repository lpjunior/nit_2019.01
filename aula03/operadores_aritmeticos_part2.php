<?php 

    /*
        Operadores aritméticos de atribuição
        += acumula o valor de uma variável somando-a de um novo valor
        -= acumula o valor de uma variável subtraindo-a de um valor
        *= acumula o valor de uma variável multiplicando-a de um valor
        /= acumula o valor de uma variável dividindo-a de um valor
        %= atualiza o valor de uma variável com o resto de sua 
        divisão por um outro valor dividindo-a de um valor
        ++ incrementador (soma + 1 ao valor da variável)
        -- decrementador (subtrai - 1 ao valor da variável)
    */

    # atribuição (multiplicar)
    // exemplo: x *= y

    // declaração da variável
    $x = 10;
    // forma normal
    $x = $x * 5;
    // forma simplificada (atribuição com multiplicar)
    $x *= 5;
    // impressão
    echo $x;

    echo "<br><br><hr><br><br>";

    # atribuição (divisão)
    // exemplo: x /= y

    // declaração da variável
    $y = 10;
    // operação de atribuição com divisão
    $y /= 5;
    // impressão
    echo $y;

    echo "<br><br><hr><br><br>";
    
    # atribuição (soma)
    // exemplo: x += y

    // declaração da variável
    $z = 10;
    // operação de atribuição com soma
    $z += 5;
    // impressão
    echo $z;

    echo "<br><br><hr><br><br>";

    # incrementador
    // exemplo x++ ou ++x

    ## 1º exemplo

    // declaração da variável
    $a = 18;

    // operação de incrementação
    $a++; // $a += 1; --> $a = $a + 1;
    ++$a;

    // impressão
    echo $a;

    ## 2º exemplo
    $b = 3;
    $c = $b++;
    $d = ++$b;

    echo $b;
    echo "<br>$c";
    echo "<br>$d";