<?php
header("Content-Type: application/json");

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
  die("Falha na conexão: " . mysqli_connect_error());
}

$id_pessoa = $_GET['id_pessoa'];

$sql = "SELECT SUM(valor) AS total_recebido FROM recebimento WHERE id_pessoa = $id_pessoa";
$resultado = mysqli_query($conexao, $sql);
$total_recebido = mysqli_fetch_array($resultado);

$sql = "SELECT SUM(valor) AS total_gasto FROM despesa WHERE id_pessoa = $id_pessoa";
$resultado = mysqli_query($conexao, $sql);
$total_gasto = mysqli_fetch_array($resultado);

$saldo = $total_recebido['total_recebido'] - $total_gasto['total_gasto'];

echo json_encode(["saldo" => $saldo]);

mysqli_close($conexao);
?>
