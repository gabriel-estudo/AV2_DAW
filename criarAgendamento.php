<?php

require_once("conexao.php");

$usuario_id = $_POST["usuario_id"];
$funcionario_id = $_POST["funcionario_id"];
$servico_id = $_POST["servico_id"];
$data = $_POST["data"];
$horario = $_POST["horario"];

if (
  empty($usuario_id) ||
  empty($funcionario_id) ||
  empty($servico_id) ||
  empty($data) ||
  empty($horario)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "INSERT INTO agendamentos
(usuario_id, funcionario_id, servico_id, data, horario)

VALUES

('$usuario_id', '$funcionario_id', '$servico_id', '$data', '$horario')";

if (mysqli_query($conexao, $sql)) {
  echo "Agendamento realizado com sucesso!";
} else {
  echo "Erro ao realizar o agendamento.";
}

mysqli_close($conexao);
