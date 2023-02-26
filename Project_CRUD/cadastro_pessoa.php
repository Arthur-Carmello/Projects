<?php
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO pessoa(nome, email) VALUES ('$nome', '$email')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  echo "Pessoa cadastrada com sucesso";
}else{
  echo "Erro ao cadastrar a pessoa";
}

mysqli_close($conexao);
?>