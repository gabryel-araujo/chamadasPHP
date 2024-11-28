<?php
include_once "./conexao.php";

$query = "SELECT s.nome_senha FROM senhas_atendidas sa JOIN senha s WHERE s.id = sa.id_senha ORDER BY sa.id ASC;";
$result = $conn->prepare($query);

$result->execute();

$data = $result->fetchAll(PDO::FETCH_ASSOC);

if ($result->execute()) {
  echo json_encode($data);
} else {
  echo "Erro ao buscar.";
}
