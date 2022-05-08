<?php   
     session_start();
     
     $_SESSION['nome'] = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
     if($_SESSION['nome']){
        echo "<h3>"."Olá ".$_SESSION['nome']."</h3>".'<a href ="login.php">Sair</a>';
       
     } else {
        header("Location: login.php");
        exit;
    }