<?php
include('conexao.php');

$id_pessoa = $_POST['id_pessoa'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$sql = "INSERT INTO despesa (id_pessoa, valor, data) VALUES ('$id_pessoa', '$valor', '$data')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  echo "Despesa cadastrada com sucesso";
}else{
  echo "Erro ao cadastrar a despesa";
}

mysqli_close($conexao);
?>