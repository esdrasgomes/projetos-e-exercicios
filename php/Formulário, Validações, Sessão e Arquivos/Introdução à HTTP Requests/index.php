<?php
    session_start();
    require('header.php');

    if($_SESSION['aviso']) {
        echo $_SESSION['aviso'];
        $_SESSION['aviso'] = '';
    }
?>

<a href="apagar.php">Apagar Cookie</a>
<!-- Método POST -> envia os dados internamente || 
     Método GET -> envia os dados externamente e mostra na URL -->
<form method="POST" action="recebedor.php">

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" autofocus/>
    </label>
    <br/><br/>

    <label>
        Email:
        <br/>
        <input type="text" name="email" />
    </label>
    <br/><br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade" />
    </label>
    <br/><br/>

    <input type="submit" value="Enviar" />

</form>