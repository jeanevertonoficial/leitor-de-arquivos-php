<?php 


$arquivo =  fopen("escritor.txt", "a"); // criar um aquivo com o nome curso-php.txt , A ele coloca o cursor no final do arquivo e continua escrevendo.


$curso = "PHP_INT_MIN (int), O menor inteiro suportado nesta compilação do PHP. Geralmente int(-2147483648) em sistemas 32 bits e int(-9223372036854775808) em sistemas 64 bit. Normalmente PHP_INT_MIN === ~PHP_INT_MAX." .PHP_EOL.
"PHP_EOL (string), O símbolo correto de 'Fim de linha' para esta plataforma." .PHP_EOL.
"PHP_INT_MAX (int), O maior inteiro suportado nesta compilação do PHP. Geralmente int(2147483647) em sistemas de 32 bit e int(9223372036854775807) em sistemas de 64 bits.";

//fwite, função para escrever em um arquivo 
fwrite($arquivo, $curso); 
/*
fwrite($arquivo, $curso, 21); /*escrevendo os primeiros 21 caracteres */

fclose($arquivo); // fecha o arquivo e libera espaço dentro da memoria que era oculpado pela variavel