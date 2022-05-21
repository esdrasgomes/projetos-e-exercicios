<?php
    // ----------------------- Array Range -------------------------
    // $array = range(1, 20);

    // foreach($array as $item) {
    //     echo $item."<br/>";
    // }

    // ---------------------- key_exists ---------------------------
    $array = [
        'nome' => 'Esdras',
        'age' => 22,
        'empresa' => 'MV',
        'cor' => 'Preto',
        'profissao' => 'Desenvolvedor'
    ];

    if(key_exists('idade', $array)) {
        $idade = $array['idade'];
        echo $idade." anos";
    } else {
        echo "Não existe idade!";
    }

?>