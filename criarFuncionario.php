<?php

require_once("conexao.php");

$nome = $_POST["nome"];
$especialidade = $_POST["especialidade"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

if (
  empty($nome) ||
  empty($especialidade) ||
  empty($telefone) ||
  empty($email)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "INSERT INTO funcionarios
(nome, especialidade, telefone, email)

VALUES

('$nome','$especialidade','$telefone','$email')";

if (mysqli_query($conexao, $sql)) {
  echo "Funcionário cadastrado com sucesso!";
} else {
  echo "Erro ao cadastrar funcionário.";
}

mysqli_close($conexao);
