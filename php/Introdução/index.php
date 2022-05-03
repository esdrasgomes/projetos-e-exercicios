<?php  
// -----------------------------    Concatenando Variáveis    ---------------------------------------
//     $nome = 'Esdras';
//     $sobrenome = 'Gomes';
//     $idade = 22;

//     $nomeCompleto = "$nome $sobrenome tem $idade anos";
//    // $nomeCompleto = $nome.' '.$sobrenome;
//     echo $nomeCompleto;

// ------------------------------    ARRAYS   ------------------------------------------------

// $ingredientes = [
//     'açúcar', 
//     'farinha de trigo', 
//     'ovo', 
//     'leite', 
//     'fermento em pó', 
//     'chocolate em pó', 
//     'manteiga'
// ];

// $ingredientesNovos = [
//     ...$ingredientes,
//     'corante'
// ];

// echo $ingredientesNovos[7];

// ----------------------------------- EXERCÍCIO --------------------------------------------------

$lista = [
    'nome' => 'Esdras',
    'idade' => '22',
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "FORCA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$lista['vida']."<br/>";

?>