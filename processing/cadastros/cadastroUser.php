<?php
require_once '../user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmarSenha'];

    if ($senha === $confirmar_senha) {

        $user = new User();

        if ($user->cadastrar($nome, $email, $telefone, $senha)) {
            echo "Usuário registrado com sucesso!";
            header("location:../../pages/login.php");
            die();
        } else {
            echo "Falha ao registrar o usuário.";
        }
    } else {
        echo "As senhas não coincidem!";
    }
}
?>