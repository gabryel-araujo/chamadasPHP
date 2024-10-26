<?php

//receber o tipo que a senha deve ser gerada
$tipo = filter_input(INPUT_GET, 'tipo', FILTER_SANITIZE_NUMBER_INT);

//verifica se vem o tipo de senha que deve ser gerada
if(!empty($tipo)) {
    //criar QUERY para recuperar os registros do BD

}else{
    //cria o array posição indicando que houve erro e a mensagem de erro
    $retono = ['status' => true, 'msg' => "<p style='color: #f00;'>Erro: Senha não gerada !</p>"];
}

//retorna os dados para o JavaScript
echo json_encode($retono);

?>