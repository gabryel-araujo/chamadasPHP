const convencionalButton = document.getElementById("convencionalButton");
const preferencialButton = document.getElementById("preferencialButton");
const qtdConvencional = document.getElementById("qtdConvencional");
const qtdPreferencial = document.getElementById("qtdPreferencial");
const gridConvencional = document.getElementById("gridConvencional");
const gridPreferencial = document.getElementById("gridPreferencial");
const totalAtendidos = document.getElementById("totalAtendidos");

let convencionais = [];
let preferenciais = [];
let atendidos = [];

document.addEventListener("DOMContentLoaded", function () {
  atualizarTela();
});

async function fetchSenhas() {
  try {
    const response = await fetch("exibir_senha.php");
    const data = await response.json();

    convencionais = data.filter((senha) => senha.tipos_senha_id == 1);
    preferenciais = data.filter((senha) => senha.tipos_senha_id == 2);

    atualizarTela();
  } catch (error) {}
}

const fetchAtendidos = async () => {
  const response = await fetch("atendidas.php");
  const atendidos = await response.json();
  return atendidos;
};

setInterval(fetchSenhas, 1000);

function atualizarTela() {
  console.log("Convencionais:", convencionais);
  console.log("Preferenciais:", preferenciais);
  console.log("Atendidos", atendidos);

  qtdConvencional.innerText = convencionais.length;
  qtdPreferencial.innerText = preferenciais.length;

  gridConvencional.innerHTML = "";
  gridPreferencial.innerHTML = "";

  convencionais
    .slice(0, 8)
    .map((senha) =>
      gridConvencional.insertAdjacentHTML(
        "beforeend",
        `<div class='grid-item-convencional'>${senha.nome_senha}</div>`
      )
    )
    .join("");

  preferenciais
    .slice(0, 8)
    .map((senha) =>
      gridPreferencial.insertAdjacentHTML(
        "beforeend",
        `<div class='grid-item-preferencial'>${senha.nome_senha}</div>`
      )
    )
    .join("");

  fetchAtendidos().then((atendimento) => {
    totalAtendidos.innerText = atendimento.length;
    atendidos = atendimento;
  });
}

async function decrementarConvencional() {
  if (convencionais.length > 0) {
    const response = await fetch(
      `atender_senha.php?senha=${convencionais[0].nome_senha}`
    );
    convencionais.shift();
  }
  fetchSenhas();
}

async function decrementarPreferencial() {
  if (preferenciais.length > 0) {
    const response = await fetch(
      `atender_senha.php?senha=${preferenciais[0].nome_senha}`
    );
    preferenciais.shift();
  }
  fetchSenhas();
}

async function resetarSenha() {
  if (
    preferenciais.length === 0 &&
    convencionais.length === 0 &&
    atendidos.length != 0
  ) {
    Swal.fire({
      title: "Deseja resetar todas as senhas?",
      text: "Essa ação não poderá ser desfeita",
      icon: "warning",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: "Sim",
      denyButtonText: `Não, cancelar`,
    }).then(async (result) => {
      if (result.isConfirmed) {
        const response = await fetch("resetarsenha.php");
        Swal.fire({
          title: "Tudo certo!",
          text: "Senhas resetadas!",
          icon: "success",
        });
        atualizarTela();
      }
    });
  } else if (preferenciais.length != 0 || convencionais.length != 0) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Ainda há senhas aguardando atendimento",
    });
  } else if (atendidos.length == 0) {
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "As senhas já foram resetadas",
    });
  }
}
