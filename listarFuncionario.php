<?php

require_once("conexao.php");

$sql = "SELECT * FROM funcionarios ORDER BY nome";

$resultado = mysqli_query($conexao, $sql);

$funcionarios = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
  $funcionarios[] = $linha;
}

echo json_encode($funcionarios);

mysqli_close($conexao);
