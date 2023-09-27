
<?php

/*
   Funções de Array
array_push — Adiciona um ou mais elementos no final de um array
array_pop — Extrai um elemento do final do array
array_shift — Retira o primeiro elemento de um array 
array_unshift — Adiciona um ou mais elementos no início de um array 
array_splice — Remove uma parte array e a substitui por outra coisa
count — Conta o número de elementos de uma variável, ou propriedades de um objeto
*/

$array = []; // uma variavel que recebe uma array, mas está vazia
$vazio =  "";


array_push($array, "Senac", "TAU");

array_push($array, ["Igor", "Samuel", "Evelyn", "Matheus", "Estevan"]);
array_push($array [2],"Caua");

array_push($array, "teste"); //Adiciona um ou mais elementos no final de um array
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

echo "<br> A variável array possui " .count($array)." posições. "; //conta quantas variaveis tem na array

array_pop($array); //Extrai um elemento do final do array
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_shift($array); //Retira o primeiro elemento de um array 
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_unshift($array, "Glauco"); //Adiciona um ou mais elementos no início de um array 
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_splice($array, 1, 1, [[teste1, teste2]]); //Remove uma parte array e a substitui por outra coisa
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";


?>

<ul><a href="index.php"><button>Voltar</button></a></ul>