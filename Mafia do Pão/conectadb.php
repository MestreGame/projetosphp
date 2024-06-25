<?php
// LOCALIZA ONDE O BANCO DE DADOS 
$servidor = "localhost";

//NOME DO BANCO 
$banco ="mafia";
//QUAL USUSARIO VAI OPERAR NA BASE DE DADOS
$usuario = "root";
// QUAL  A SENHA DO USUARIOS NA BASE DE DADOS
$senha="";

//LINK QUE A FERREMENTA VAI USAR PARA CONECATAR BANCO
$link = mysqli_connrct($servidor,$usuario,$senha ,$banco);


?>