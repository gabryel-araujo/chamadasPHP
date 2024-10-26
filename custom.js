async function gerarSenha(tipoSenha) {

    //chamar o arquivo php para gerar senha
    const dados = await fetch('gerar_senha.php?tipo=' + tipoSenha)

    //ler os dados retornado pelo PHP
    await dados.json();
}
