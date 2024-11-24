<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheetPainel.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Projeto</title>
</head>

<body>
  <main>
    <?php include 'asidePainel.php'; ?>
    <div class="divCentral">
      <div class="card flex">
        <!-- topo da div -->
        <div class="topo bg-sky-700">
          <img src="Ticket.png" width="5%" class="ml-2">
          <h1 class="text-2xl text-white">ATENDIMENTOS</h1>
        </div>
        <!-- corpo da div -->

        <div class="h-full flex shadow-md rounded-md">
          <div class="w-1/2 flex flex-col justify-center items-center gap-4 p-4">
            <div class="bg-sky-200 h-full w-full rounded-md flex flex-col justify-center items-center">
              <p class="text-4xl">Senha</p>
              <p class="text-4xl" id="numeroSenha"></p>
            </div>
            <div class="bg-sky-700 h-full w-full rounded-md flex flex-col justify-center items-center">
              <p class="text-4xl text-white">Guichê</p>
              <p class="text-4xl text-white">01</p>
            </div>
          </div>
          <div class="w-1/2 flex flex-col justify-center items-center">
            <img src="previsao.png" alt="previsao do tempo" class="w-96">
          </div>
        </div>

      </div>

      <div class="cardNoticias shadow-md">
        <!-- Está vazio pois é inserido um conteúdo dinâmico -->
      </div>


    </div>
  </main>
  <script src="painel.js"></script>
</body>

</html>