<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/stylesheetMain.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Projeto PWEB</title>
</head>

<body>
  <main>
    <?php include 'aside.php'; ?>
    <div class="divCentral">
      <?php include 'chamadas.php' ?>
      <div class="card flex shadow-md">
        <div class="divConvencional flex justify-center column">
          <h2 class="underline">Convencional</h2>
          <div class="grid" id="gridConvencional">
          </div>
        </div>
        <div class="divPreferencial flex justify-center column">
          <h2 class="underline">Preferencial</h2>
          <div class="grid" id="gridPreferencial">
          </div>
        </div>
      </div>

      <div class="flex flex-col items-center">
        <p class="mb-2 font-semibold text-lg">Realizar Chamada:</p>
        <div class="flex gap-3 justify-between">
          <button
            class="bg-green-400 shadow-md h-16 rounded-md w-48 hover:cursor-pointer hover:bg-green-300 ease-in duration-300"
            id="convencionalButton"
            onclick="decrementarConvencional()">
            Convencional
          </button>
          <button
            class="bg-red-400 shadow-md h-16 rounded-md w-48 hover:cursor-pointer hover:bg-red-300 ease-in duration-300"
            id="preferencialButton"
            onclick="decrementarPreferencial()">
            Preferencial
          </button>

          <button class="hover:text-red-900 text-gray-400 hover:bg-red-200 ease-in duration-300 h-16 rounded-md w-48" onclick="resetarSenha()">Resetar senhas <i class="fa-solid fa-trash"></i></button>
        </div>
      </div>
    </div>
    </div>
  </main>
  <script src="../js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>