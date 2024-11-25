<?php
include_once "./conexao.php";

$query = "SELECT * FROM senha WHERE sits_senha_id = 3";
$result = $conn->prepare($query);

$result->execute();

$data = $result->fetchAll(PDO::FETCH_ASSOC);

if ($result->execute()) {
  echo json_encode($data);
} else {
  echo "Erro ao buscar.";
}
