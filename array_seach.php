<?php

// Cria um array chamado $frutas contendo três elementos: "maça", "banana", "laranja");
$frutas= array("maça", "banana", "laranja"):

// Procura o valor "banana" no array $frutas e armazena o indice correspondente na variável $indice.
$indice = array_seach("banana", $frutas);

// Verifica se $indice não é igual a false, o que significa que "banana" foi enconntrado no array.
if ($indice !==false) {
    // Se "banana" foi encontrada, exibe a mensagem com o indice onde ele está localizado.
    echo "Banana foi encontrada na posição: ". $indice;
    } else {
// Se "banana" não foi encontrada, exibe uma mensagem indicando isso.
echo "Banana não foi encontrado na lista de frutas." ;
    }

    ?>