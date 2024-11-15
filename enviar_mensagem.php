<?php
// Configuração da conexão ao banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "formulario_db";

// Conectar ao banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO contatos (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem: " . $conn->error;
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>

