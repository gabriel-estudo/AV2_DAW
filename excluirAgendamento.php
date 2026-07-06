<?php

require_once("conexao.php");

$id = $_POST["id"];

if (empty($id)) {
  echo "ID inválido.";
  exit;
}

$sql = "DELETE FROM agendamentos WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Agendamento excluído com sucesso!";
} else {
  echo "Erro ao excluir agendamento.";
}

mysqli_close($conexao);
