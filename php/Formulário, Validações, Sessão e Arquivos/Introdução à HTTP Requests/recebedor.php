<?php
    session_start();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

    if($nome && $email && $idade) {

        $expiracao = time() + (86400 * 30);
        setcookie('nome', $nome, $expiracao);

        echo 'NOME: '.$nome."<br/>";
        echo 'EMAIL: '.$email."<br/>";
        echo 'IDADE: '.$idade;
    } else {
        $_SESSION['aviso'] = '<script>alert("Preencha o formulário corretamente!")</script>';

        header("Location: index.php");
        exit;
    }

?>