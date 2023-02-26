<?php
include('conexao.php');

$id_pessoa = $_GET['id_pessoa'];

$sql = "SELECT * FROM pessoa WHERE id_pessoa = $id_pessoa";
$resultado = mysqli_query($conexao, $sql);
$pessoa = mysqli_fetch_array($resultado);

$sql = "SELECT * FROM recebimento WHERE id_pessoa = $id_pessoa";
$resultado = mysqli_query($conexao, $sql);

echo "<h1>Recebimentos de ".$pessoa['nome']."</h1>";
echo "<table border='1'>";
echo "<tr><th>Valor</th><th>Data</th></tr>";

while($recebimento = mysqli_fetch_array($resultado)){
  echo "<tr>";
  echo "<td>".$recebimento['valor']."</td>";
  echo "<td>".$recebimento['data']."</td>";
  echo "</tr>";
?>