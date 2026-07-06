function salvarFuncionario() {
  const id = document.getElementById("idFuncionario").value;
  const nome = document.getElementById("nomeFuncionario").value;
  const especialidade = document.getElementById("especialidade").value;
  const telefone = document.getElementById("telefone").value;
  const email = document.getElementById("emailFuncionario").value;

  const url = id ? "editarFuncionario.php" : "criarFuncionario.php";

  const dados = new FormData();
  dados.append("id", id);
  dados.append("nome", nome);
  dados.append("especialidade", especialidade);
  dados.append("telefone", telefone);
  dados.append("email", email);

  fetch(url, {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarFuncionarios();
    });
}

function listarFuncionarios() {
  fetch("listarFuncionario.php")
    .then((r) => r.json())
    .then((data) => {
      let html = "";

      data.forEach((f) => {
        html += `
          <tr>
            <td>${f.nome}</td>
            <td>${f.especialidade}</td>
            <td>${f.telefone}</td>
            <td>${f.email}</td>
          </tr>
        `;
      });

      document.getElementById("listaFuncionarios").innerHTML = html;
    });
}

function excluirFuncionario(id) {
  const dados = new FormData();
  dados.append("id", id);

  fetch("excluirFuncionario.php", {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarFuncionarios();
    });
}
