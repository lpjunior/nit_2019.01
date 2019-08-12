<?php
    /*
    1.	Escreva um programa que declare uma variável inteira e atribua o valor 10 a mesma. 
    Declare uma variável real e atribua para a mesma o valor 20.3. Como saída o programa deverá 
    imprimir, usando as variáveis declaradas, o seguinte resultado:
    a.	O valor inteiro é 10.
    b.	O valor real é 20.3.
*/

    $inteiro = 10;
    $real = 20.3;

    echo "valor inteiro {$inteiro} e o valor real {$real}";

    echo '<br><br><hr><br><br>';


    /*
        2.	Escreva um programa que declare 6 variáveis do tipo caractere e atribua a elas as 
        letras a, l, u, n, o, s. O programa deverá imprimir, usando todas as variáveis declaradas, 
        o seguinte resultado: alunos.
    */

    $a = "a";
    $l = "l";
    $u = "u";
    $n = "n";
    $o = "o";
    $s = "s";

    echo "$a$l$u$n$o$s";

    /*
    3.	Uma conta telefônica é composta dos seguintes custos:
    Assinatura: R$ 32,00
    Impulsos: R$ 0,09 por impulso que exceder a 90
    Chamadas p/ celular: R$0,35 por impulso 

    Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 
    chamadas para celular imprimindo o resultado obtido.
    */

    $assinatura = 32;
    $impulso = 0.09;
    $celular = 0.35;
    
    $excedido = 254 - 90;
    
    $fatura = $assinatura + ($excedido * $impulso) + ($celular * 23);

    echo $fatura;

