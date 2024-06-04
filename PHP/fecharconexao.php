<?php
// Fechando a conexão
if (isset($pdo)) {
    $pdo = null;
    echo "Conexão fechada.";
} else {
    echo "Não há conexão para fechar.";
}
?>
