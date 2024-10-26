<?php

//inicio da conexao com o banco de dados utilizando pdo
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "atendimento";
$port = 3306;

try {
    //conexao com a porta
    //$conm = new PDO("mysql:host;port=$port;dbname=" . $dbname, $user, $pass);

    //conexao sem porta
    $conm = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com o banco de dados realizado com sucesso.";
} catch (PDOException $err) {
    echo "Erro: Conexão com o banco de dados não realizado com sucesso. Erro Gerado.";
    $err->getMessage();
}

//fim da conexão com o banco de dados utilizando PDO

?>