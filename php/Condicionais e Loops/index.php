<?php 

// --------------------------- CONDICIONAL IF -----------------------------------------------------
    // $idade = 17;

    // if ($idade >= 18) {
    //     echo "Você é de maior!";
    // } else {
    //     echo "Você é de menor!";
    // }

//X < Y
// X > Y
// X == Y
// X >= Y
// X <= Y
// X != Y 

// --------------------------- CONDICIONAL TERNÁRIO  -----------------------------------------------------

//     $idade = 20;

//     echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
// ___________________________________________________________________________________________

    // $idade = 23;
    // $menorDeIdade = ($idade < 18) ? true : false;

    // if($menorDeIdade) {
    //     echo 'MENOR';
    // }else {
    //     echo 'MAIOR';
    // }

// --------------------------- CONDICIONAL NULL CAO  -----------------------------------------------------

    // $nome = 'Esdras';
    // $sobrenome = 'Gomes';

    // $nomeCompleto = $nome;
    // //$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
    // $nomeCompleto .= $sobrenome ?? '';

    // echo $nomeCompleto;

// --------------------------- CONDICIONAL SWITCH  -----------------------------------------------------

// $tipo = 'texto';

// switch($tipo) {
//     case 'foto':
//         echo 'Exibindo FOTO';
//         break;
//     case 'video':
//         echo 'Exibindo VIDEO';
//         break;
//     case 'texto':
//         echo 'Exibindo TEXTO';
//         break;
// }

// -------------------------------------- LOOP WHILE  -----------------------------------------------------
// $numero = 0;

// while($numero <= 10) {
//     echo "N: ".$numero."<br/>";

//     $numero += 1;
// }

// -------------------------------------- LOOP FOR  -----------------------------------------------------

// for($i = 0; $i <= 10; $i++) {
//     echo "N: ".$i."<br/>";
// }

// -------------------------------------- LOOP FOREACH  -------------------------------------------------

// $ingredientes = [
//     'Açúcar',
//     'Farinha de trigo',
//     'Ovo',
//     'Leite',
//     'Fermento em pó'
// ];

// echo '<h2>Ingredientes</h2>';

// // foreach($ingredientes as $chave => $valor) {
// //     echo "Item ".($chave + 1).": ".$valor."<br/>";
// // }

// echo '<ul>';
// foreach($ingredientes as $chave => $valor) {
//     echo '<li>'.$valor.'</li>';
// }
// echo '</ul>';

// -------------------------------- EXERCÍCIOS ----------------------------------------------
//EXERCÍCIO 1
// for ($i=0; $i < 10 ; $i++) {
//     for ($x=0; $x < 10; $x++) {
//           echo '-';
//    }  
// echo '</br>';
// }

// EXERCICIO 2
// for ($i=0; $i < 20 ; $i++) {
//     for ($x=0; $x <= $i; $x++) {
//         echo '-';
//    }  
//     echo '</br>';
// }

?>
