<?php
/*
1- Crie uma variavel do tipo array com o nome frutas
    Ele deve ter os seguintes elementos: mamão, maçã, melão
2- Utilizando as funções de array faça;
   a- inclusão de uma nova fruta no inicio da array //pronto
   b- inclusão de uma nova fruta no final da array // pronto
   c- exclusão da fruta que está na posição 1 //pronto
   d- exclusão da fruta que está na última posição do array //pronto
   e- alteração da fruta que está na posição 01 por maracujá
3- A cada alteração do array realize um print_r ou um var_dump para  comprovar os resultados obtidos
*/

$array = ["mamão", "maçã", "melão"];

array_unshift($array, "Morango"); //Adiciona um ou mais elementos no início de um array 
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_push($array, "Melancia"); 
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_splice($array, 1, 1,); //Remove uma parte array e a substitui por outra coisa
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_pop($array); //Extrai um elemento do final do array
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";

array_splice($array, 1,1, ["maracujá"]); //Remove uma parte array e a substitui por outra coisa
echo "<pre>"; //formata a saída
print_r($array); //mostra o conteúdo simplificado array
echo "</pre>";
?>
<ul><a href="index.php"><button>Voltar</button></a></ul>