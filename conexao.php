<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aura_beauty";

$conexao = mysqli_connect(
  $host,
  $usuario,
  $senha,
  $banco
);

if (!$conexao) {
  die("Erro na conexão");
}
