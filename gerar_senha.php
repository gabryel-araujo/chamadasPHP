<?php

//Incluir a conexao com o Banco de Dados
include_once './conexao.php';

//receber o tipo que a senha deve ser gerada
$tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);

//verifica se vem o tipo de senha que deve ser gerada
if (!empty($tipo)) {
    //criar QUERY para recuperar os registros do BD
    $query_senha = "SELECT id, nome_senha
                    FROM senha
                    WHERE sits_senha_id=:sits_senha_id
                    AND tipos_senha_id=:tipo_senha_id
                    ORDER BY id ASC
                    LIMIT 1";
    //preparando a query
    $result_senha = $conn->prepare($query_senha);

    //substituir o link pelo valor
    $result_senha->bindValue(':sits_senha_id', 1, PDO::PARAM_INT);
    $result_senha->bindParam(':tipo_senha_id', $tipo, PDO::PARAM_INT);

    //Executar a query
    $result_senha->execute();

    //verificar se encontrou encontrou algum registro no BD
    if (($result_senha) and ($result_senha->rowCount() != 0)) {

        //Ler as informacoes retornadas do Banco de Dados
        $row_senha = $result_senha->fetch(PDO::FETCH_ASSOC);

        //Extrair para imprimir atraves da chave no array
        extract($row_senha);

        //Criar a QUERY cadastrar a senhas gerada
        $query_senha_gerada = "INSERT INTO senhas_geradas (senha_id, sits_senha_id, created) VALUE($id, 2, NOW())";

        //Prepara Query
        $query_senha_gerada = $conn->prepare($query_senha_gerada);

        //Executar a Query
        $query_senha_gerada->execute();

        //Verficar se foi cadastrado com seucesso
        if ($query_senha_gerada->rowCount()) {

            //Alterar o status da senha "para nao ser utilizada mais de uma vez"
            $query_edit_senha = "UPDATE senha SET sits_senha_id=2 WHERE id=$id LIMIT 1";

            //Preparar a query
            $edit_senha = $conn->prepare($query_edit_senha);

            //Executar a query "update"
            $edit_senha->execute();

            //cria o array posicao indicando que não houve erro e a mensagem de erro e retorna a senha gerada
            $retorno = ['status' => true, 'nome_senha' => $nome_senha];
        } else {
            //cria o array posicao indicando que houve erro e a mensagem de erro
            $retorno = ['status' => false, 'msg' => "Senha não gerada!"];
        }
    } else {
        //cria o array posicao indicando que houve erro e a mensagem de erro
        $retorno = ['status' => false, 'msg' => "Senhas Esgotadas!"];
    }
} else {
    //cria o array posicao indicando que houve erro e a mensagem de erro
    $retorno = ['status' => false, 'msg' => "Senha não gerada!"];
}

//retorna os dados para o JavaScript
echo json_encode($retorno);
