<?php
include_once "conexao.php";

$senha = filter_input(INPUT_GET, "senha", FILTER_DEFAULT);

if ($senha) {
  $query = "UPDATE senha SET sits_senha_id = 3 WHERE nome_senha like :nome_senha";
  $result = $conn->prepare($query);

  $result->bindParam(":nome_senha", $senha);
  if ($result->execute()) {
    echo "Atualização executada com sucesso";
  } else {
    echo "Erro ao atualizar.";
  }
}
