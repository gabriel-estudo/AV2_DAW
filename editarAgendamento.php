<?php

require_once("conexao.php");

$id = $_POST["id"];
$usuario_id = $_POST["usuario_id"];
$funcionario_id = $_POST["funcionario_id"];
$servico_id = $_POST["servico_id"];
$data = $_POST["data"];
$horario = $_POST["horario"];

if (
  empty($id) ||
  empty($usuario_id) ||
  empty($funcionario_id) ||
  empty($servico_id) ||
  empty($data) ||
  empty($horario)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "UPDATE agendamentos SET usuario_id = '$usuario_id', funcionario_id = '$funcionario_id', servico_id = '$servico_id', data = '$data', horario = '$horario' WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Agendamento atualizado com sucesso!";
} else {
  echo "Erro ao atualizar agendamento.";
}

mysqli_close($conexao);
