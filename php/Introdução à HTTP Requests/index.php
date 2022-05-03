<?php 
    require('header.php');
?>
<!-- Método POST -> envia os dados internamente || 
     Método GET -> envia os dados externamente e mostra na URL -->
<form method="POST" action="recebedor.php">

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
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