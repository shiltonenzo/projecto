<?php
// Configuração da conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "restaurantes_db";

// Conectar ao banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verificar se o comentário foi enviado
if (isset($_POST['comentario']) && !empty($_POST['comentario'])) {
    $comentario = $_POST['comentario'];

    // Inserir o comentário na tabela
    $sql = "INSERT INTO depoimentos (comentario) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $comentario);

    if ($stmt->execute()) {
        echo "Comentário enviado com sucesso!";
    } else {
        echo "Erro ao enviar comentário: " . $conn->error;
    }

    // Fechar a conexão
    $stmt->close();
} else {
    echo "O campo de comentário não pode estar vazio.";
}

$conn->close();
?>
