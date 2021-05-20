<?php 

$arquivo = fopen('lista-cursos.txt', 'r'); //pegando o arquivo e abrindo com a função fopen
 

$tamanhoDOArquivo = 10; //lendo somento 10 caracter
$tamanhoDOArquivo = filesize("lista-cursos.txt"); // lendo o arquivo todo
$cursos = fread($arquivo, $tamanhoDOArquivo);

    echo $cursos; 


fclose($arquivo); // fclose para fechar o arquivo após a execução "boa Prática"

