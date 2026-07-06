<?php

require_once("conexao.php");

$sql = "SELECT agendamentos.id, usuarios.nome AS usuario, funcionarios.nome AS funcionario, servicos.nome AS servico, agendamentos.data, agendamentos.horario FROM agendamentos INNER JOIN usuarios ON agendamentos.usuario_id = usuarios.id INNER JOIN funcionarios ON agendamentos.funcionario_id = funcionarios.id INNER JOIN servicos ON agendamentos.servico_id = servicos.id ORDER BY agendamentos.data, agendamentos.horario";

$resultado = mysqli_query($conexao, $sql);

$agendamentos = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
  $agendamentos[] = $linha;
}

echo json_encode($agendamentos);

mysqli_close($conexao);
