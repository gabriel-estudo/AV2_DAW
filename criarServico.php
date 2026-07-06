<?php

require_once("conexao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$duracao = $_POST["duracao"];

if (
  empty($nome) ||
  empty($descricao) ||
  empty($preco) ||
  empty($duracao)
) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "INSERT INTO servicos (nome, descricao, preco, duracao) VALUES ('$nome', '$descricao', '$preco', '$duracao')";

if (mysqli_query($conexao, $sql)) {
  echo "Serviço cadastrado com sucesso!";
} else {
  echo "Erro ao cadastrar serviço.";
}

mysqli_close($conexao);
