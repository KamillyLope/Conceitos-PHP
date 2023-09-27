<?php
    echo "Hello World!"; //mostra na tela
     
    //variaveis na tela
    //toda variavel começa com $

    $a = 10;
    $b = 20;

    //operador de atribuição =
    //todo final de comando precisa terminar com ;

    $soma = $a + $b;

    echo "<br>".$soma; // HTML concateando com variavel PHP

    /* 
    Operadores Aritméticos:
    $a + $b	Adição	Soma de $a e $b.
    $a - $b	Subtração	Diferença entre $a e $b.
    $a * $b	Multiplicação	Produto de $a e $b.
    $a / $b	Divisão	Quociente de $a e $b.
    $a % $b	Módulo	Resto de $a dividido por $b.
    $a ** $b	Exponencial	Resultado de $a elevado a $b.
    */

    //Exemplos:
    $sub = $a - $b;
    echo "<br>Subtração: ". $sub; //-10

    $mult = $a * $b;
    echo "<br>Subtração: ". $mult; //200

    $div = $a / $b;
    echo "<br>Divisão: ". $div; //0.5

    $modulo = $a % $b;
    echo "<br>Módulo: ". $modulo; //10

    $exp = $a ** 3;
    echo "<br>Exponenciação:". $exp; //1000
    
    // desvio condicional
    // laços de repetição
    // função
    // vetor e matriz
?>
   <ul><a href="index.php"><button>Voltar</button></a></ul>