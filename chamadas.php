<div class="upperSection">
  <p>Main/Dashboard</p>
  <div class="row">
    <div class="informativeField">
      <div>
        <p>Atendidos</p>
        <p class="labelText">Total</p>
      </div>
      <div class="informativeNumber">
        <p class="number" id="total">0</p>
      </div>
    </div>
    <div class="informativeField">
      <div>
        <p>Aguardando</p>
        <p class="labelText">Convencional</p>
      </div>
      <div class="informativeNumber">
        <p class="number" id="qtdConvencional">10</p>
      </div>
    </div>
    <div class="informativeField">
      <div>
        <p>Aguardando</p>
        <p class="labelText">Preferencial</p>
      </div>
      <div class="informativeNumber">
        <p class="number" id="qtdPreferencial">20</p>
      </div>
    </div>
  </div>
</div>

<?php 

function resetSenhasDiario() { // Resetar as senhas diariamente
  global $pdo;

  $hora_atual = date('H:i:s');
  $query = "SELECT hora_reset FROM configuracao LIMIT 1";
  $stmt = $pdo->prepare($query);
  $stmt->execute();
  $config = $stmt->fetch();

  if ($hora_atual >= $config['hora_reset']) {
      // Limpa as senhas
      $query = "DELETE FROM senhas";
      $pdo->prepare($query)->execute();
  }
}

?>