<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheetMain.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projeto</title>
</head>

<body>
  <main>
    <?php include 'aside.php'; ?>
    <div class="divCentral">
      <?php include 'chamadas.php' ?>
      <div class="card flex ">
        <div class="divConvencional flex justify-center">
          <h2 class="underline">Convencional</h2>
        </div>
        <div class="divPreferencial flex justify-center">
          <h2 class="underline">Preferencial</h2>
        </div>
      </div>

      <div class="flex justify-center items-center gap-3">
        <button class="convencionalButton" id="convencionalButton" onclick="decrementarConvencional()">Convencional</button>
        <button class="preferencialButton" id="preferencialButton" onclick="decrementarPreferencial()">Preferencial</button>
      </div>
    </div>
  </main>
  <script src="main.js"></script>
</body>

</html>