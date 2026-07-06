function salvarServico() {
  const id = document.getElementById("idServico")?.value;
  const nome = document.getElementById("nomeServico").value;
  const descricao = document.getElementById("descricao").value;
  const preco = document.getElementById("preco").value;
  const duracao = document.getElementById("duracao").value;

  const url = id ? "editarServico.php" : "criarServico.php";

  const dados = new FormData();
  dados.append("id", id);
  dados.append("nome", nome);
  dados.append("descricao", descricao);
  dados.append("preco", preco);
  dados.append("duracao", duracao);

  fetch(url, {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarServicos();
    });
}

function listarServicos() {
  fetch("listarServico.php")
    .then((r) => r.json())
    .then((data) => {
      let html = "";

      data.forEach((s) => {
        html += `
          <tr>
            <td>${s.nome}</td>
            <td>${s.descricao}</td>
            <td>${s.preco}</td>
            <td>${s.duracao}</td>
          </tr>
        `;
      });

      document.getElementById("listaServicos").innerHTML = html;
    });
}

function excluirServico(id) {
  const dados = new FormData();
  dados.append("id", id);

  fetch("excluirServico.php", {
    method: "POST",
    body: dados,
  })
    .then((r) => r.text())
    .then((res) => {
      alert(res);
      listarServicos();
    });
}
