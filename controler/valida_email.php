<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetodevweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Erro de conexão com o banco de dados.']));
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Email inválido.']);
    exit();
}

$sql = "SELECT id FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['status' => 'exists', 'message' => 'O email já está cadastrado.']);
} else {
    echo json_encode(['status' => 'available', 'message' => 'Email disponível.']);
}

$stmt->close();
$conn->close();
?>
