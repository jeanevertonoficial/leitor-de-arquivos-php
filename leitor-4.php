<?php 


$arquivo =  fopen("curso-php.txt", "w"); // criar um aquivo com o nome curso-php.txt .


$curso = "Curso de php na aulra o melhor lugar para um programador aprender";

//fwite, função para escrever em um arquivo 
fwrite($arquivo, $curso); 

fclose($arquivo); // fecha o arquivo e libera espaço dentro da memoria que era oculpado pela variavel