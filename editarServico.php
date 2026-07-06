<?php

require_once("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$duracao = $_POST["duracao"];

if (
  empty($id) ||
  empty($nome) ||
  empty($descricao) ||
  empty($preco) ||
  empty($duracao)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "UPDATE servicos SET nome = '$nome', descricao = '$descricao', preco = '$preco', duracao = '$duracao' WHERE id = '$id'";

if (mysqli_query($conexao, $sql)) {
  echo "Serviço atualizado com sucesso!";
} else {
  echo "Erro ao atualizar serviço.";
}

mysqli_close($conexao);
