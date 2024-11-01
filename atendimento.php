<?php 
include_once "./conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script
    src="https://kit.fontawesome.com/f1952cfd14.js"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projeto</title>
</head>

<body>
  <a href="index.php">Gerar Senha</a>
  <a href="atendimento.php">Chamar senha</a>

  <h2>Chamar Senha</h2>

<!-- Receber mensagem de erro do JavaScript -->
  <span id="msgAlerta">Senha chamada</span>

  <?php 
  //Botao para chamar a funcao "chamarSenha", tipo ( Convencional )
  echo "<p><button type='button' onclick='chamarSenha(1)'>Convencional</button></p>";

  //Botao para chamar a funcao "chamarSenha", tipo ( Preferencial )
  echo "<p><button type='button' onclick='chamarSenha(2)'>Preferencial</button></p>";

  //Recuperar as senhas geradas que estão salvas na tabela "senhas_geradas", com a situação 2 "Emitida"
  $query_senhas_geradas = "SELECT senger.id,
                sen.nome_senha,
                tip.nome
                FROM senhas_geradas AS senger
                INNER JOIN senha AS sen ON sen.id=senger.senha_id
                INNER JOIN tipo_senhas AS tip ON tip.id=sen.tipos_senha_id
                WHERE senger.sits_senha_id = 2
                ORDER BY senger.id ASC";
  
  //Preparando a QUERY
  $result_senhas_geradas = $conn->prepare($query_senhas_geradas);

  //Executar a QUERY
  $result_senhas_geradas->execute();

  //Ler os dados retornado do banco de dados
  while ($row_senha_gerada = $result_senhas_geradas->fetch(PDO::FETCH_ASSOC)){
    var_dump($row_senha_gerada);
  }
  
  ?>


  <script src="custom.js"></script>
</body>

</html>