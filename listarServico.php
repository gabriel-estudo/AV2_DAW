<?php

require_once("conexao.php");

$sql = "SELECT * FROM servicos ORDER BY nome";

$resultado = mysqli_query($conexao, $sql);

$servicos = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
  $servicos[] = $linha;
}

echo json_encode($servicos);

mysqli_close($conexao);
