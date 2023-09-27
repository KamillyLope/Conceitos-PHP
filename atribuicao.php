<h2>Operadores de Atribuição</h2>

<?php

/*
$a += $b	$a = $a + $b	Adição
$a -= $b	$a = $a - $b	Subtração
$a *= $b	$a = $a * $b	Multiplicação
$a /= $b	$a = $a / $b	Divisão
$a %= $b	$a = $a % $b	Módulo
$a **= $b	$a = $a ** $b	Exponenciação
*/

echo "<h3>Exemplos</h3>";
$a = 5;

echo "<br>Atribuição com soma :". $a +=3 . "\n"; //8
echo "<br>Atribuição com subtração :". $a -=2 . "\n"; //6
echo "<br>Atribuição com Multiplicação :". $a *=5 . "\n"; //30
echo "<br>Atribuição com Divisão :". $a /=10 . "\n"; //3
echo "<br>Atribuição com Módulo :". $a %=2 . "\n"; //1
echo "<br>Atribuição com Exponenciação :". $a **=2 . "\n"; //1
?>
<ul><a href="index.php"><button>Voltar</button></a></ul>
   