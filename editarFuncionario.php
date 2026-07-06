<?php

require_once("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$especialidade = $_POST["especialidade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

if (
  empty($id) ||
  empty($nome) ||
  empty($especialidade) ||
  empty($telefone) ||
  empty($email)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "UPDATE funcionarios SET nome = '$nome', especialidade = '$especialidade', telefone = '$telefone', email = '$email' WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Funcionário atualizado com sucesso!";
} else {
  echo "Erro ao atualizar funcionário.";
}

mysqli_close($conexao);
