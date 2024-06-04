<?php
include('conectaBD.php');

echo '<br>Lendo dados<br>';
$stmt = $pdo->query('SELECT * FROM Alunos');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
    echo '<br>';
}

include('fecharBD.php');
?>
