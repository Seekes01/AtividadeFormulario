<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetodevweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobrenome']);
    $email = trim($_POST['email']);
    $cpf = trim($_POST['cpf']);
    $celular = trim($_POST['celular']);
    $nascimento = trim($_POST['nascimento']);

    if (empty($nome) || empty($sobrenome) || empty($email) || empty($cpf) || empty($celular) || empty($nascimento)) {
        die('Por favor, preencha todos os campos obrigatórios.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('O email informado é inválido.');
    }

    $sql_verifica = "SELECT email FROM usuarios WHERE email = ?";
    $stmt_verifica = $conn->prepare($sql_verifica);

    if (!$stmt_verifica) {
        die('Erro ao preparar a consulta de verificação: ' . $conn->error);
    }

    $stmt_verifica->bind_param('s', $email);
    $stmt_verifica->execute();
    $stmt_verifica->store_result();

    if ($stmt_verifica->num_rows > 0) {
        $stmt_verifica->close();
        echo "<script>
                alert('Erro: O email informado já está cadastrado no sistema.');
                window.history.back();
              </script>";
        exit();
    }

    $stmt_verifica->close();

    $sql = "INSERT INTO usuarios (nome, sobrenome, email, cpf, celular, nascimento) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Erro ao preparar a query: ' . $conn->error);
    }

    $stmt->bind_param('ssssss', $nome, $sobrenome, $email, $cpf, $celular, $nascimento);

    if ($stmt->execute()) {
        header('Location: ../confirmacao.html');
        exit();
    } else {
        die('Erro ao registrar o usuário: ' . $stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    die('Método de requisição inválido.');
}
?>
