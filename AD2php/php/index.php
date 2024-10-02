<?php include 'db.php';//inclui o arquivo de conexão com o banco de dados ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">  <!-- link para o arquivo CSS -->
    <title>Sistema de Cadastro de Alunos</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br><br>

        <input type="submit" value="Cadastrar"> <!-- botão para enviar o formulário -->
    </form>

<script>
    // fim: 02/10/2024 - 08:25
function validateForm() {
    var email = document.getElementById('email').value;
    var regex = /^\S+@\S+\.\S+$/;  // expressão regular para validar e-mail
    if (!regex.test(email)) {
        alert('Por favor, insira um e-mail válido.'); // mensagem de erro
        return false;
    }
    return true; // retorna verdadeiro se o e-mail for válido
}
</script>

    <!-- Listagem de alunos virá aqui -->
    <?php
    // fim: 02/10/2024 - 09:04
$sql = "SELECT * FROM alunos"; // consulta para selecionar todos os alunos
$result = $conn->query($sql); // executa a consulta
?>

<h2>Lista de Alunos</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Curso</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?> <!-- loop para exibir os alunos -->
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nome']; ?></td>
                <td><?= $row['idade']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['curso']; ?></td>
                <td><a href="deletar.php?id=<?= $row['id']; ?>">Excluir</a></td> <!-- link para excluir o aluno -->
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
