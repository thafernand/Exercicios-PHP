<?php

//Criando a array Lista de frutas
$lista_frutas = ["Banana", "Maça", "Morango", "Uva"];

echo '<pre';
print_r ($lista_frutas);
echo $lista_frutas[0];
echo "<hr>";
echo '</pre>';

echo '<pre>';
//Alterando o valor 0 -> Banana para Melancia
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";

echo $lista_frutas[0];

?>