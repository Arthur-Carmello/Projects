<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "meu_banco"; 

$conexao = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
  echo "Erro na conexão com o MySQL: ".mysqli_connect_error();
}
?>