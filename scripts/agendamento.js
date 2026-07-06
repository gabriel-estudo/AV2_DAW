function salvarAgendamento() {
  const id = document.getElementById("idAgendamento")?.value;
  const usuario_id = document.getElementById("usuario_id").value;
  const funcionario_id = document.getElementById("funcionario_id").value;
  const servico_id = document.getElementById("servico_id").value;
  const data = document.getElementById("data").value;
  const horario = document.getElementById("horario").value;

  const url = id ? "editarAgendamento.php" : "criarAgendamento.php";

  const dados = new FormData();
  dados.append("id", id);
  dados.append("usuario_id", usuario_id);
  dados.append("funcionario_id", funcionario_id);
  dados.append("servico_id", servico_id);
  dados.append("data", data);
  dados.append("horario", horario);

  fetch(url, {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarAgendamentos();
    });
}

function listarAgendamentos() {
  fetch("listarAgendamento.php")
    .then((r) => r.json())
    .then((data) => {
      let html = "";

      data.forEach((a) => {
        html += `
          <tr>
            <td>${a.usuario}</td>
            <td>${a.funcionario}</td>
            <td>${a.servico}</td>
            <td>${a.data}</td>
            <td>${a.horario}</td>
          </tr>
        `;
      });

      document.getElementById("listaAgendamentos").innerHTML = html;
    });
}

function excluirAgendamento(id) {
  const dados = new FormData();
  dados.append("id", id);

  fetch("excluirAgendamento.php", {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarAgendamentos();
    });
}
