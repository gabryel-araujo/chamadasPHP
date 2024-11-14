<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheetTotem.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerar senha</title>
</head>

<body>
  <nav class="navBar">
    <div class="navItems">
      <img src="Queue-bro.png" width="10%">
      <div class="items">
        <p class="buttonItems">Solicitar Senha</p>
        <p class="buttonItems">Ajuda</p>
      </div>
    </div>
  </nav>

  <main class="main">

    <h1 id="senhaGerada"></h1>
    <p id="msgAlerta"></p>


    <div class="card">
      <button class="convencionalButton button" onclick="gerarSenha(1)">Atendimento Convencional</button>
      <button class="preferencialButton button" onclick="gerarSenha(2)">Atendimento Preferencial</button>
    </div>
  </main>
  <script src="custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>