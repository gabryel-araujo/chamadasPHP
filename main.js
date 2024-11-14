const convencionalButton = document.getElementById("convencionalButton");
const preferencialButton = document.getElementById("preferencialButton");
const qtdConvencional = document.getElementById("qtdConvencional");
const qtdPreferencial = document.getElementById("qtdPreferencial");
const teste = document.getElementById("teste");
const gridConvencional = document.getElementById("gridConvencional");
const gridPreferencial = document.getElementById("gridPreferencial");

let convencionais = [];
let preferenciais = [];

document.addEventListener("DOMContentLoaded", function () {
  console.log("JavaScript carregado!");
});

async function fetchSenhas() {
  try {
    const response = await fetch("exibir_senha.php");
    const data = await response.json();
    console.log(data); // Mostra os dados no console para verificar

    convencionais = data.filter((senha) => senha.tipos_senha_id == 1);
    preferenciais = data.filter((senha) => senha.tipos_senha_id == 2);

    atualizarTela();
  } catch (error) {
    console.error("Erro ao buscar os dados:", error); // Mensagem de erro, se falhar
  }
}

setInterval(fetchSenhas, 1000);

function atualizarTela() {
  console.log("Convencionais:", convencionais);
  console.log("Preferenciais:", preferenciais);

  document.getElementById("qtdConvencional").innerText = convencionais.length;
  document.getElementById("qtdPreferencial").innerText = preferenciais.length;

  gridConvencional.innerHTML = "";
  gridPreferencial.innerHTML = "";

  convencionais
    .slice(0, 8)
    .map((senha) =>
      gridConvencional.insertAdjacentHTML(
        "beforeend",
        `<div class='grid-item-convencional'>${senha.nome_senha}</div>`
      )
    );

  preferenciais
    .slice(0, 8)
    .map((senha) =>
      gridPreferencial.insertAdjacentHTML(
        "beforeend",
        `<div class='grid-item-preferencial'>${senha.nome_senha}</div>`
      )
    );
}

async function decrementarConvencional() {
  const response = await fetch(
    `atender_senha.php?senha=${convencionais[0].nome_senha}`
  );
  fetchSenhas();
}

async function decrementarPreferencial() {
  const response = await fetch(
    `atender_senha.php?senha=${preferenciais[0].nome_senha}`
  );
  fetchSenhas();
}
