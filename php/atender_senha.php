<?php
include_once "conexao.php";

$senha = filter_input(INPUT_GET, "senha", FILTER_DEFAULT);

if ($senha) {
  // Atualizando a situação da senha
  $query = "UPDATE senha SET sits_senha_id = 3 WHERE nome_senha LIKE :nome_senha";
  $result = $conn->prepare($query);
  $result->bindParam(":nome_senha", $senha);

  if ($result->execute()) {
    echo "Atualização executada com sucesso. ";
  } else {
    echo "Erro ao atualizar.";
    exit;
  }

  // consulta para buscar o id da senha atendida
  $query2 = "SELECT id FROM senha WHERE nome_senha LIKE :nome_senha";
  $result2 = $conn->prepare($query2);
  $result2->bindParam(":nome_senha", $senha);

  if ($result2->execute()) {
    $data = $result2->fetch(PDO::FETCH_ASSOC);

    if ($data) {
      $idSenha = $data['id'];

      // inserção na tabela 'senhas_atendidas'
      $queryInsert = "INSERT INTO senhas_atendidas (id_senha) VALUES (:id_senha)";
      $insert = $conn->prepare($queryInsert);
      $insert->bindParam(":id_senha", $idSenha);

      if ($insert->execute()) {
        echo "Senha registrada como atendida com sucesso!";
      } else {
        echo "Erro ao registrar a senha atendida.";
      }
    } else {
      echo "Erro ao buscar o ID da senha.";
    }
  } else {
    echo "Erro ao executar consulta para buscar o ID.";
  }
}
