<?php
$dbFile = 'Alunos.SQL';
try {
    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão aberta e OK<br>";
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
    echo 'Conexão não aberta<br>';
    die();
  include('fecharBD.php');
}
?>
