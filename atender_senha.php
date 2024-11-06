<?php
include_once "conexao.php";

$query = "UPDATE senha SET sits_senha_id = 3 WHERE nome_senha like 'C1'";
$result = $conn->prepare($query);

$result->execute();
