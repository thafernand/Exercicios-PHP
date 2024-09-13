<?php

//Cria um array multidimensional chamado $usuarios com subarray que contêm informações de usuarios.
$usuarios = [
    [ "id => 1,
    "nome" => "João",
    "email" => "joao@exemple.com"],
[ "id" => 2,
    "nome" => "Maria",
    "email => "maria@exemple.com"],
[ "id" => 3],
    "nome" => "Pedro",
    "email" => "pedro@exemple.com"]
];

//Define a variável $buscar com o valor que deseja procurar no array.
$busca = "pedro@exemple.com";

// Exibe a estrutura do array $usuarios de forma legível.
echo '<pre>';
print_r($usuarios);
echo '</pre>';

// Procura o valor armazenado na variável $busca no array multidimensional
$usuarios, especificamente no campo 'nome' 
$indice = array_search($busca, array_column($usuarios, 'email'));

// Verifica se $indice não é igual a false, oque significa que o valor em 
$busca foi encontrado no array.
if ($indice !==  false){
 // Se o valor em $busca foi encontrado, exibe o ID do usúario correspondente.
 echo "$busca foi encontrada com o ID: ". $usuarios[$indice]['id'];
} else {
// Se o valor em $busca não foi encontrado, exibe uma mensagem indicando isso.
echo "$busca não foi encontrada na lista de usuários.";
}

?>