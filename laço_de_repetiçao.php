/*
Os laços for são os mais complexo no PHP. Possui comportamento semelhante ao C. A sintaxe do laço for é:

for (expr1; expr2; expr3)
    statement
A primeira expressão (expr1) é avaliada (executada), uma vez, incondicionalmente, no início do laço.

No começo de cada iteração a expr2 é avaliada. Se a avaliada como true, o laço continuará e as instruções aninhada serão executadas. Se avaliada como false, a execução do laço terminará.

No final de cada iteração, a expr3 é avaliada (executada).

Cada uma das expressões podem ser vazias ou conter múltiplas expressões separadas por vírgulas. Na expr2, todas as expressões separadas por vírgula são avaliadas mas o resultado é obtido da última parte. Se a expr2 estiver vazia significa que o laço deve ser executado indefinidamente (O PHP considera implicitamente como true, igual ao C). Isto não é inútil como se imagina, pois muitas vezes deseja-se interromper o laço utilizando a instrução break ao invés de usar a expressão verdade do for.

<?php
// laço de repetição for

// for( $i=1 ; $i<100 ; $i+=2 ){
// // inicial compara saida

//     echo "<br>i = ". $i;
//     if( $i == 11){ 
//         // break; interrompe o laço
//         $i = 100;

//     } 
// }


for( $i=1 ; $i<10 ; $i++ ){
// inicial compara saida
    if( $i == 5 || $i == 8){ //se for 5 ou 8 ele vai ignorar e pular e vai continuar o laço,  essas "||" barrinhas é "ou". 
        // break; interrompe o laço
        //$i = 100;
        continue; //continua o laço, a hora que atinge o continue ele volta para o inicio do laço, nada dps dele continua 
    }else{
        echo "<br>i = ". $i;
    }
}
?>
<ul><a href="index.php"><button>Voltar</button></a></ul>