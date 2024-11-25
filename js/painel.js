const cardNoticias = document.querySelector(".cardNoticias");
const horaHTML = document.getElementById("hora");
const ultimosChamados = document.getElementById("ultimosChamados");
const senhaHTML = document.getElementById("numeroSenha");

let start = 0;
let end = 1;

const fetchHora = () => {
  const hora = new Date().getHours();
  const minutos = new Date().getMinutes();
  let horaAtual = `${hora}:${minutos < 10 ? `0${minutos}` : minutos}`;
  horaHTML.innerText = horaAtual;
};
setInterval(fetchHora, 500);
fetchHora();

const fecthNoticias = async () => {
  const response = await fetch("../js/noticias.json");

  const noticias = await response.json();
  return noticias;
};

fecthNoticias().then((noticiasJSON) => {
  let start = 0;
  let end = 1;

  const updateNoticias = () => {
    cardNoticias.innerHTML = "";

    const noticiasAtuais = noticiasJSON.slice(start, end);

    noticiasAtuais.forEach((noticia) => {
      cardNoticias.insertAdjacentHTML(
        "beforeend",
        `<div class="flex h-full w-full p-4 gap-2">
          <img src="${noticia["url-imagem"]}" class="img-noticia">
          <div class="flex flex-col justify-between">
            <section>
            <p class="text-sky-700 text-xl font-bold">${noticia.manchete}</p>
            <p class="text-slate-500 mt-4">${noticia.noticia}</p>
            </section>
            <p class="text-slate-500">${noticia.publicado}</p>
          </div>
        </div>`
      );
    });

    end === noticiasJSON.length
      ? ((start = 0), (end = 1))
      : ((start += 1), (end += 1));
  };

  setInterval(updateNoticias, 10000);
  updateNoticias();
});

const fetchAtendidos = async () => {
  const response = await fetch("atendidas.php");
  const atendidos = await response.json();
  console.log(atendidos);
  return atendidos;
};

const atualizarAtendidos = async () => {
  const atendidosJSON = await fetchAtendidos();

  ultimosChamados.innerHTML = "";

  atendidosJSON
    .reverse()
    .slice(0, 5)
    .forEach((senha) => {
      senha.nome_senha.includes("C")
        ? ultimosChamados.insertAdjacentHTML(
            "beforeend",
            `<div class='grid-item-convencional mt-2'>${senha.nome_senha}</div>`
          )
        : ultimosChamados.insertAdjacentHTML(
            "beforeend",
            `<div class='grid-item-preferencial mt-2'>${senha.nome_senha}</div>`
          );
    });

  atendidosJSON[0].nome_senha != null
    ? (senhaHTML.innerText = atendidosJSON[0].nome_senha)
    : (senhaHTML.innerText = "");
};

setInterval(atualizarAtendidos, 1000);
atualizarAtendidos();
