<?php
    session_start();
    $_SESSION['nome']= " ";
?>
<form method ="POST" action = "index.php">
    <label>
        <h2> Qual o seu nome?</h2>
        <input type="text" name="valor"><br/>
    </label>
    <input type ="submit" value="Salvar" >
</form>