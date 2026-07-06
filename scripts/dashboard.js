function carregarDashboard() {
  fetch("listarFuncionario.php")
    .then((r) => r.json())
    .then((data) => {
      document.getElementById("totalFuncionarios").innerText = data.length;
    });

  fetch("listarServico.php")
    .then((r) => r.json())
    .then((data) => {
      document.getElementById("totalServicos").innerText = data.length;
    });

  fetch("listarAgendamento.php")
    .then((r) => r.json())
    .then((data) => {
      document.getElementById("totalAgendamentos").innerText = data.length;
    });
}
