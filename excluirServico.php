<?php

require_once("conexao.php");

$id = $_POST["id"];

if (empty($id)) {
  echo "ID inválido.";
  exit;
}

$sql = "DELETE FROM servicos WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Serviço excluído com sucesso!";
} else {
  echo "Erro ao excluir serviço.";
}

mysqli_close($conexao);
