<?php

    echo '<pre>';
    print_r( $_FILES );

    $permitidos = ['image/jpeg', 'image/jpg', 'image/png'];
    
    // validando para aceitar apenas arquivos do tipo jpeg, jpg e png
    if(in_array($_FILES['arquivo']['type'], $permitidos)) {

        // $nome = $_FILES['arquivo']['name']; 
        $nome = md5(time().rand(0, 1000)).'.jpg'; // gerando um nome diferente para cada arquivo enviado
        
        move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome); // movendo o arquivo da pasta temporária "temp" para o local desejado "/arquivos"

        echo 'Arquivo enviado com sucesso!';
    } else {
        echo 'Arquivo não permitido!';
    }

?>