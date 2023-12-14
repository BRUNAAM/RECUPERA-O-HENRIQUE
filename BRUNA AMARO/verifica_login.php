<?php
// Inclua o arquivo de conexão
include 'conectar.php';

// Inicializa a sessão (se ainda não estiver iniciada)
session_start();

// Verifica se os campos de usuário e senha foram enviados
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    // Obtém os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consulta no banco de dados para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE nome='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    // Verifica se a consulta retornou alguma linha (credenciais válidas)
    if ($result->num_rows > 0) {
        // Credenciais válidas, cria a sessão e redireciona para sistema.php
        $_SESSION['usuario'] = $usuario;
        header("Location: sistema.php");
    } else {
        // Credenciais inválidas, redireciona para index.php
        header("Location: index.php");
    }
} else {
    // Caso os campos não tenham sido enviados, redireciona para index.php
    header("Location: index.php");
}

// Fecha a conexão com o banco de dados e fechar a conexão
$conn->close();
?>
