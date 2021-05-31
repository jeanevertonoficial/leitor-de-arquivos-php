<?php 


$arquivo =  fopen("escritor-cursos.txt", "a"); // criar um aquivo com o nome curso-php.txt , A ele coloca o cursor no final do arquivo e continua escrevendo.


$curso = "Curso de estudo em php na alura por jean everton" .PHP_EOL;

//fwite, função para escrever em um arquivo 
fwrite($arquivo, $curso); 
/*
fwrite($arquivo, $curso, 21); /*escrevendo os primeiros 21 caracteres */

fclose($arquivo); // fecha o arquivo e libera espaço dentro da memoria que era oculpado pela variavel