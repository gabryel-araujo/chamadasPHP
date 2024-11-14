<!DOCTYPE html>
<html lang="pt-br">

<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="stylesheetPainel.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projeto</title>
</head>

<body>
  <main>
    <?php include 'asidePainel.php'; ?>
    <div class="divCentral">
      <div class="card flex ">
        <!-- topo da div -->
        <div class="topo">
          <img src="Queue-bro.png" alt="imagem de pessoas na fila">
          <h1>ATENDIMENTOS</h1>
        </div>
        <!-- corpo da div -->

        <div class="divMain">
          <div class="chamados">
            <div class="senhaChamada">
              <p>teste</p>
            </div>
            <div class="guiche">
              <p>teste2</p>
            </div>

          </div>
          <div class="previsao">2</div>
        </div>

      </div>

      <div class="cardNoticias"></div>


    </div>
  </main>
  <!-- <script src="main.js"></script> -->
</body>

</html>