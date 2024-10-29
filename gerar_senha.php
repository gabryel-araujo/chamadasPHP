<?php

//Incluir a conexao com o Banco de Dados
include_once './conexao.php';

//receber o tipo que a senha deve ser gerada
$tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);

//verifica se vem o tipo de senha que deve ser gerada
if(!empty($tipo)) {
    //criar QUERY para recuperar os registros do BD
    $query_senha = "SELECT id, nome_senha
                    FROM senha
                    WHERE sits_senha_id=:sits_senha_id
                    AND tipos_senha_id=:tipo_senha_id
                    ORDER BY id ASC
                    LIMIT 1";
    //preparando a query
    $result_senha = $conn ->prepare($query_senha);

    //substituir o link pelo valor
    $result_senha->bindValue(':sits_senha_id', 1, PDO::PARAM_INT);
    $result_senha->bindParam(':tipo_senha_id', $tipo, PDO::PARAM_INT);

    //Executar a query
    $result_senha->execute();

    //verificar se encontrou encontrou algum registro no BD
    if(($result_senha) and ($result_senha->rowCount() != 0)) {

        //Ler as informacoes retornadas do Banco de Dados
        $row_senha = $result_senha->fetch(PDO::FETCH_ASSOC);

        //Extrair para imprimir atraves da chave no array
        extract($row_senha);


        $retorno = ['status' => false, 'msg' => "<p style='color: green;'>Senha Gerada!</p>"];
    } else {
    //cria o array posicao indicando que houve erro e a mensagem de erro
        $retorno = ['status' => true, 'msg' => "<p style='color: #f00;'>Erro: Senhas Esgotadas!</p>"];
    }

} else {
    //cria o array posicao indicando que houve erro e a mensagem de erro
    $retorno = ['status' => true, 'msg' => "<p style='color: #f00;'>Erro: Senha não gerada!</p>"];
}

//retorna os dados para o JavaScript
echo json_encode($retorno);
?>