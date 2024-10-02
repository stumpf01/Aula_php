<?php
// fim: 30/09/2024 - 11:02
include 'db.php'; // inclui o arquivo de conexão com o banco de dados

$id = $_GET['id']; // captura o ID do aluno a ser excluído via URL
$sql = "DELETE FROM alunos WHERE id = $id"; // prepara a consulta SQL para excluir o aluno

// executa a consulta e verifica se a exclusão foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Aluno excluído com sucesso!";
} else {
    echo "Erro ao excluir: " . $conn->error;
}

// redireciona para a página index.php após a exclusão
header('Location: index.php');

if ($conn->query($sql) === TRUE) {
    echo "<div class='success'>Cadastro realizado com sucesso!</div>";
} else {
    echo "<div class='error'>Erro ao cadastrar.</div>";
}
?>
