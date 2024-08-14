<?php

//Exemplo com variavel numerico
/*$idade = 20;
$resultado = ($idade >=18) ? "Maior de idade" : "Menor de idade";
echo $resultado; // Saída: Maior de idade
*/

/*$nome = "Thays";
$mensagem = ($nome == "Thays") ? "Olá, Ana!" : "Olá, visitante";
echo $mensagem; // Saida: Olá Thays!
*/

$is_logged_in = true;

$mensagem = $is_logged_in ? 'Bem-vindo de volta!' : 'Por favor, faça login';
echo $mensagem;


?>