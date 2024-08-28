<?php

//Criando a array Números
$numeros = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"]

echo '<pre';
print_r ($numeros);
echo $numeros[10];
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o valor 0 -> 0 a 10
$numeros[10] = "";
print_r ($numeros);
echo '</pre>';

echo "<br>";

echo $numeros[0];

?>
