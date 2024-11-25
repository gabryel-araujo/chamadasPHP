async function gerarSenha(tipoSenha) {
  //chamar o arquivo php para gerar senha
  const dados = await fetch("gerar_senha.php?tipo=" + tipoSenha);

  //ler os dados retornado pelo PHP
  const resposta = await dados.json();

  //Acessar o if quando houver erro no arquivo "gerar_senha.php"
  if (!resposta.status) {
    //Exibir alerta de erro!
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: resposta.msg,
    });
  } else {
    //Exibir popUp com a senha gerada
    Swal.fire({
      title: "Senha gerada!",
      text: resposta.nome_senha,
      icon: "success",
    });
  }
}
