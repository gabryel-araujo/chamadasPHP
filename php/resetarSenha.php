<?php
include_once "conexao.php";

$sql = "update senha set sits_senha_id = 1 WHERE sits_senha_id = 3;";
$result1 = $conn->prepare($sql);

if ($result1->execute()) {
  echo "Atualização executada com sucesso\n";
} else {
  echo "Erro ao atualizar.";
}

$sql2 = "update senha set sits_senha_id = 1 WHERE sits_senha_id = 2;";
$result2 = $conn->prepare($sql2);

if ($result2->execute()) {
  echo "Atualização executada com sucesso";
} else {
  echo "Erro ao atualizar.";
}
