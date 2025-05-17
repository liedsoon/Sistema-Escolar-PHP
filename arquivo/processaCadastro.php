<?php
session_start();
include "conexao.php";

if (isset($_POST["cadastrar"])) {
    $nome = htmlspecialchars($_POST["nome"]);
    $matricula = htmlspecialchars($_POST["matricula"]);
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    // Validação
    if (!filter_var($nota1, FILTER_VALIDATE_FLOAT)) {
        $_SESSION["mensagem"] = "Nota 1 inválida!";
        header("Location: formularioArq.php");
        exit();
    }

    if (!filter_var($nota2, FILTER_VALIDATE_FLOAT)) {
        $_SESSION["mensagem"] = "Nota 2 inválida!";
        header("Location: formularioArq.php");
        exit();
    }

    $media = ($nota1 + $nota2) / 2;

    $stmt = $conexao->prepare("INSERT INTO alunos (nome, matricula, nota1, nota2, media) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssddd", $nome, $matricula, $nota1, $nota2, $media);

    if ($stmt->execute()) {
        $_SESSION["mensagem"] = "Aluno cadastrado com sucesso!";
    } else {
        $_SESSION["mensagem"] = "Erro ao cadastrar aluno!";
    }

    $stmt->close();
    $conexao->close();

    header("Location: formularioArq.php");
    exit();
} else {
    $_SESSION["mensagem"] = "Requisição inválida.";
    header("Location: formularioArq.php");
    exit();
}
