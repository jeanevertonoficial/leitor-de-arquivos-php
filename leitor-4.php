<?php 


$arquivo =  fopen("escritor-cursos.txt", "w"); // criar um aquivo com o nome curso-php.txt, o  W sobreescreve do inicio do arquivo.


$curso = "Curso de php na aulra o melhor lugar para um programador aprender";

//fwite, função para escrever em um arquivo 
fwrite($arquivo, $curso); 
/*
fwrite($arquivo, $curso, 21); /*escrevendo os primeiros 21 caracteres */

fclose($arquivo); // fecha o arquivo e libera espaço dentro da memoria que era oculpado pela variavel