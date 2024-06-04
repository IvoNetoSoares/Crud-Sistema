<?php
include('../PHP/conectaBD.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:../PHP/validalogin.php');
    exit;
}

$db = new SQLite3('database.db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aluno_id = $_POST['aluno'];

    $query = "DELETE FROM alunos WHERE id = :aluno_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':aluno_id', $aluno_id, SQLITE3_INTEGER);
    $stmt->execute();

    header('Location: index.html');
    include('../PHP/fecharBD.php');
}
?>
