async function gerarSenha(tipoSenha) {

    //chamar o arquivo php para gerar senha
    const dados = await fetch('gerar_senha.php?tipo=' + tipoSenha)

    //ler os dados retornado pelo PHP
    const resposta = await dados.json();
    console.log(resposta);

    //Acessar o if quando houver erro no arquivo "gerar_senha.php"
    if(resposta['status']){
        //Enviar a mensagem de erro para o SELETOR "msgAlerta""
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    }
}
