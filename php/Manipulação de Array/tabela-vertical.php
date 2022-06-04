<?php 

    $array = [
        'nome' =>'Esdras',
        'idade' => 22,
        'empresa' => 'MV',
        'cor' => 'Preto',
        'profissao' => 'Desenvolvedor'
    ];

    //print_r($array['nome']);
?>

<!-- TABELA VERTICAL -->
<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr> 
            <th><?php echo $chave; ?></th> <!-- th deixa em negrito -->
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- TABELA HORIZONTAL -->





