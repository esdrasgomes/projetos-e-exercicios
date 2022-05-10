<?php

    $texto = file_get_contents('texto.txt');
    $texto .= "\nEsdras Gomes";
    file_put_contents('texto.txt', $texto);

?>