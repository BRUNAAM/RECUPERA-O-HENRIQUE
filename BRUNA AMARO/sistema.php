<?php
// Inicia a sessão
session_start();

// Verifica se a sessão está ativa (usuário autenticado)
if (!isset($_SESSION['usuario'])) {
    // Se não estiver, redireciona para index.php
    header("Location: index.php");
    exit(); // Encerra o script para evitar a execução do restante do código
}

// Inclui o arquivo de conexão
include 'conectar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>

<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

<!-- Botões para consultar e cadastrar pessoas -->
<button onclick="location.href='formEditarPessoa.php'">Consultar Pessoas</button>
<button onclick="location.href='formNovaPessoa.php'">Cadastrar Nova Pessoa</button>

<!-- Lista de pessoas cadastradas em formato de tabela -->
<h2>Lista de Pessoas Cadastradas</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Sexo</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php
    // Consulta as pessoas cadastradas no banco de dados
    $sql = "SELECT * FROM pessoas";
    $result = $conn->query($sql);

    // Exibe os registros na tabela
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['idPessoa']}</td>";
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['dataNascimento']}</td>";
        echo "<td>{$row['Sexo']}</td>";
        echo "<td>{$row['telefone']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>";
        echo "<button onclick='editarPessoa({$row['idPessoa']})'>Editar</button>";
        echo "<button onclick='excluirPessoa({$row['idPessoa']})'>Excluir</button>";
        echo "</td>";
        echo "</tr>";
    }
    ?>

</table>

<!-- JavaScript para funções de editar e excluir pessoas -->
<script>
    function editarPessoa(idPessoa) {
        // Redireciona para formEditarPessoa.php com o ID da pessoa
        window.location.href = `formEditarPessoa.php?idPessoa=${idPessoa}`;
    }

    function excluirPessoa(idPessoa) {
        // Confirmação antes de excluir a pessoa
        var confirmacao = confirm("Tem certeza que deseja excluir esta pessoa?");

        if (confirmacao) {
            // Implemente a lógica para excluir pessoa (pode usar AJAX para interação com PHP)
            alert('Implemente a lógica de exclusão para o ID: ' + idPessoa);
        }
    }
</script>


</body>
</html>

<?php
// Lembre-se de fechar a conexão
$conn->close();
?>
