<?php 
/*
$cursos = file_get_contents("lista-cursos.txt"); //lendo o arquivo todo 

echo $cursos;

*/

$cursos = file("lista-cursos.txt"); //lendo o arquivo todo 

var_dump($cursos);