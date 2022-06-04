<?php 

    $array = [
        'nome' =>'Esdras',
        'idade' => 22,
        'empresa' => 'MV',
        'cor' => 'Preto',
        'profissao' => 'Desenvolvedor'
    ];

    $chaves = array_keys($array);
    $valores = array_values($array);

?>

<!-- TABELA HORIZONTAL -->
<table border="1">
    <tr>
        <?php foreach($chaves as $chave): ?>
            <th><?php echo $chave; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
    <?php foreach($valores as $valor): ?>
            <td><?php echo $valor; ?></td>
        <?php endforeach; ?>
    </tr>
</table>






