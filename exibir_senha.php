<?php
include_once './conexao.php';

$querySenha = "SELECT * FROM senha WHERE sits_senha_id = 2";
$result = $conn->prepare($querySenha);

// Executa a consulta
$result->execute();

// Obtem todas as linhas do resultado
$data = $result->fetchAll(PDO::FETCH_ASSOC);

// Verifica se houve resultado e retorna
if ($data) {
  echo json_encode($data);
} else {
  echo json_encode(["error" => "Nenhum dado encontrado"]);
}
