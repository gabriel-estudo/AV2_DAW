function cadastrarUsuario() {
  const nome = document.getElementById("nome").value;
  const email = document.getElementById("email").value;
  const senha = document.getElementById("senha").value;

  const dados = new FormData();
  dados.append("nome", nome);
  dados.append("email", email);
  dados.append("senha", senha);

  fetch("cadastrarUsuario.php", {
    method: "POST",
    body: dados,
  })
    .then((res) => res.text())
    .then((resposta) => {
      alert(resposta);

      // se cadastrou com sucesso
      if (resposta.includes("sucesso")) {
        localStorage.setItem("usuarioLogado", nome);

        document.getElementById("navCadastro").style.display = "none";
        document.getElementById("navPerfil").style.display = "inline-block";
      }
    });
}

window.onload = function () {
  const usuario = localStorage.getItem("usuarioLogado");

  if (usuario) {
    document.getElementById("navCadastro").style.display = "none";
    document.getElementById("navPerfil").style.display = "inline-block";
  }
};
