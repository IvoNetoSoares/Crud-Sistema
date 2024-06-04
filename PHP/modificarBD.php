<?php
include('conectaBD.php');

if(isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $novoNome = $_POST['nome'];
    $novoEmail = $_POST['email'];

    try {
        $sql = "UPDATE Alunos SET nome = :nome, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $novoNome);
        $stmt->bindParam(':email', $novoEmail);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "Dados modificados com sucesso.";
    } catch (PDOException $e) {
        echo "Erro ao modificar dados: " . $e->getMessage();
    }
} else {
    echo "Todos os campos devem ser preenchidos.";
}

include('../PHP/fechaBD.php');
?>
