
<?php
/*
while (expr)
statement
O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true. 
O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida 
até o final da iteração ( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Se a expressão do while for avaliada como false desde o início, as declarações 
aninhadas não serão executadas nenhuma vez.

Similar a declaração if, pode-se agrupar múltiplas declarações no mesmo laço while delimitando o grupo de declarações por chaves, ou utilizando a sintaxe alternativa:
    */
$i= 0;
while ($i <=10){

    echo "<br>dentro do laço, contador = ".$i;
    $i++;
}

$i= 0;
while ($i <=10){

    echo "<br>dentro do laço, contador = ".$i;
    $i++; //encrementa 
}


$i= 1;
do{
    echo "<br>dentro do laço, contador = ".$i;
    $i++;
} while ($i < 1);

?>
<ul><a href="index.php"><button>Voltar</button></a></ul>