<?php
include_once './conexao.php';

$querySenha = "SELECT * FROM senha WHERE sits_senha_id = 2";
$result = $conn->prepare($querySenha);

$result->execute();

$data = $result->fetchAll(PDO::FETCH_ASSOC);

if ($data) {
  echo json_encode($data);
} else {
  echo json_encode(["error" => "Nenhum dado encontrado"]);
}
