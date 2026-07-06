<?php

require_once("conexao.php");

$id = $_POST["id"];

if (empty($id)) {
  echo "ID inválido.";
  exit;
}

$sql = "DELETE FROM funcionarios WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Funcionário excluído com sucesso!";
} else {
  echo "Erro ao excluir funcionário.";
}

mysqli_close($conexao);
