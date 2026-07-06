<?php

require_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($nome) || empty($email) || empty($senha)) {
  echo "Preencha todos os campos.";
  exit;
}

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
  echo "Este e-mail já está cadastrado.";
  exit;
}

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
  echo "Usuário cadastrado com sucesso!";
} else {
  echo "Erro ao cadastrar usuário.";
}

mysqli_close($conexao);
