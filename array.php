<?php
$array01 =['Senac',20,True,['teste', 'posição array']];
//            0     1  2   3
//                             0           1

echo "<pre>";
var_dump($array01);
echo "</pre>";

echo "<p>";

echo "<pre>";
print_r($array01);
echo "</pre>";

echo "<br>Posição 0 do array01:" . $array01[0];

    //atividade
//20
echo "<br>Posição 1 do array01:" . $array01[1]; // certo 
//teste
echo "<br>Posição 3-0 do array01:" . $array01[3][0]; //certo
//true
echo "<br>Posição 2 do array01:" . $array01[2]; // certo 
//posição array
echo "<br>Posição 3-1 do array01:" . $array01[3][1]; //certo

?>
<ul><a href="index.php"><button>Voltar</button></a></ul>