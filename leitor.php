<?php 

$arquivo = fopen('lista-cursos.txt', 'r'); //pegando o arquivo e abrindo com a função fopen
 
while (!feof($arquivo)) { // ler o arquivo linha por linha 
    $curso = fgets($arquivo); // função fgets, vai lendo o arquivo e deixa o cursor no final do aquivo 

    echo $curso; 
}

fclose($arquivo); // fclose para fechar o arquivo após a execução "boa Prática"

