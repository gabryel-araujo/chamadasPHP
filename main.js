const convencionalButton = document.getElementById("convencionalButton");
const preferencialButton = document.getElementById("preferencialButton");
const qtdConvencional = document.getElementById("qtdConvencional");
const qtdPreferencial = document.getElementById("qtdPreferencial");

function decrementarConvencional() {
  let totalConvencional = parseInt(qtdConvencional.innerText);

  totalConvencional -= 1;

  qtdConvencional.innerText = totalConvencional;
}

function decrementarPreferencial() {
  let totalPreferencial = parseInt(qtdPreferencial.innerText);

  totalPreferencial -= 1;

  qtdPreferencial.innerText = totalPreferencial;
}
