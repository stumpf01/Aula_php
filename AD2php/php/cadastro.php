<?php
// fim 30/09/2024 - 9:52
include 'db.php'; // inclui o arquivo de conexão com o banco de dados

// verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // captura os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    // prepara a consulta SQL para inserir os dados na tabela alunos
    $sql = "INSERT INTO alunos (nome, idade, email, curso) VALUES ('$nome', '$idade', '$email', '$curso')";
}
    // executa a consulta e verifica se a inserção foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    // redireciona para a página index.php após o cadastro
    header('Location: index.php');
    
if ($conn->query($sql) === TRUE) {
    echo "<div class='success'>Cadastro realizado com sucesso!</div>";
} else {
    echo "<div class='error'>Erro ao cadastrar.</div>";
}
?>
