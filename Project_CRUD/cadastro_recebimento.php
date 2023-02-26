<?php
include('conexao.php');

$id_pessoa = $_POST['id_pessoa'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$sql = "INSERT INTO recebimento (id_pessoa, valor, data) VALUES ('$id_pessoa', '$valor', '$data')";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  echo "Recebimento cadastrado com sucesso";
}else{
  echo "Erro ao cadastrar o recebimento";
}

mysqli_close($conexao);
?>