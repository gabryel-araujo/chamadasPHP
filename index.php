<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Senha</title>
</head>
<body>

    <h2>Gerar senhas de atendimento</h2>

    <!-- Receber a mensagem de erro do JavaScript -->
    <span id="msgAlerta"></span>

    <!--Chamar a função "gerarSenha" do javascript para gerar senha de atendimento convencional -->
    <p><button type="button" onclick="gerarSenha(1)">Convencional</button></p>

    <!--Chamar a função "gerarSenha" do javascript para gerar senha de atendimento preferencial -->
    <p><button type="button" onclick="gerarSenha(2)">Preferencial</button></p>

    <script src="custom.js"></script>
</body>
</html>