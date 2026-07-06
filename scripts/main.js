document.addEventListener("DOMContentLoaded", function () {
  // dashboard
  if (typeof carregarDashboard === "function") {
    carregarDashboard();
  }

  // listas
  if (typeof listarFuncionarios === "function") {
    listarFuncionarios();
  }

  if (typeof listarServicos === "function") {
    listarServicos();
  }

  if (typeof listarAgendamentos === "function") {
    listarAgendamentos();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  carregarDashboard();
  listarFuncionarios();
  listarServicos();
  listarAgendamentos();
});
