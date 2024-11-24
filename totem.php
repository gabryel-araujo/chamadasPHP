<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheetTotem.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Gerar senha</title>
</head>

<body>
  <nav class="bg-sky-700 flex items-center justify-between">
    <img src="Ticket.png" width="8%" class="rounded-md">
    <div class="flex gap-2 mr-8">
      <p class="buttonItems text-white">Solicitar Senha</p>
      <p class="buttonItems text-white">Ajuda</p>
    </div>
  </nav>

  <main class="main">

    <h1 id="senhaGerada"></h1>
    <p id="msgAlerta"></p>


    <div class="card shadow-md">
      <button class="convencionalButton button shadow-md" onclick="gerarSenha(1)">Atendimento Convencional</button>
      <button class="preferencialButton button shadow-md" onclick="gerarSenha(2)">Atendimento Preferencial</button>
    </div>
  </main>
  <script src="custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>