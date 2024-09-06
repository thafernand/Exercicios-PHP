<?php

//Criando o Array Cadastro

$cadastro=[];

//Criando uma Array nome, dentro do Array Cadastro

$cadastro ['nome']=['Thays', 'João', 'Maria', 'José', 'Ana'];

//Criando uma Array email, dentro da Array Cadastro

$cadastro ['email']= ['thays.fernandes@gamil.com', 'João.aluno02@gamil.com', 
'Mariafulana@gmail.com', 'Joséalberto@gmail.com', 'Ana.siclana@gmail.com'];

echo'<pre>;
print_r($cadastro);
echo'</pre>;

//alterando o indice 2 na Array nome
$cadastro['nome'][1]=SENAI;

//alteirando o indice 0 na Array email
$cadastro['email'][0]='aluno@senai.br';

echo '<pre>';
print_r($cadastro);
echo '<pre>';

echo '3 indice de nome é ';
echo $cadastro['nome'][2];

echo '<br/>'

echo '4° indice de email é ;'
echo $cadastro['email'][3];

echo '<br/>'

echo '2 indice de nome é ;'
echo $cadastro['email'][1];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

?>

?>