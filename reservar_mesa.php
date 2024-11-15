<?php
// Configuração da conexão ao banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "restaurante_db";

// Conectar ao banco de dados
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter dados do formulário
$nome = $_POST['nome'];
$data_reserva = $_POST['data'];
$hora = $_POST['hora'];
$numero_pessoas = $_POST['pessoas'];
$tipo_mesa = $_POST['mesa'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO reservas (nome, data_reserva, hora, numero_pessoas, tipo_mesa) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssds", $nome, $data_reserva, $hora, $numero_pessoas, $tipo_mesa);

if ($stmt->execute()) {
    echo "Reserva realizada com sucesso!";
} else {
    echo "Erro ao realizar a reserva: " . $conn->error;
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>
