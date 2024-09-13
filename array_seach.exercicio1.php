<?php

// Cria um array chamado $nomes contendo 10 registros: "Thays", "Ana", "Maria", "José", "João", "Leonardo", "Beutrano", "Ciclano", "Valter", "Ricardo");
$nomes= array("Thays", "Ana", "Maria", "José", "João", "Leonardo", "Beutrano", "Ciclano", "Valter", "Ricardo"):

// Procura o nome "Thays" no array $nomes e armazena o indice correspondente na variável $registro.
$registro = array_seach("Thays", $nomes);

// Verifica se $registro não é igual a false, o que significa que "Thays" foi encontrado no array.
if ($registro !==false) {
    // Se "Thays" foi encontrada, exibe a mensagem com o indice onde ele está localizado.
    echo "Thays foi encontrada na posição: ". $registro;
    } else {
// Se "Thays" não foi encontrada, exibe uma mensagem indicando isso.
echo "Thays não foi encontrado na lista de nomes." ;
    }

    ?>