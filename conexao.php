<?php
$host = 'localhost';
$port = '';
$dbname = '';
$user = 'postgres';
$password = '';

try {
    $conexao = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    exit();
}
?>
