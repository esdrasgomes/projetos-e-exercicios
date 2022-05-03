<?php
// -------------------------------- FUNÇÕES ANÔNIMAS ----------------------------------------------

    // $dizimo = function(int $valor) {
    //     return $valor * 0.1;
    // };

    // $funcao = $dizimo;

    // echo $dizimo(82);

// -------------------------------- ARROW FUNCTION ----------------------------------------------

        // $dizimo = fn($valor) => $valor * 0.1;
        
        // echo $dizimo(500);

// ----------------------------- Funções Nativas de Matemática --------------------------------------


// $numero = 5.7683910;
// echo abs($numero);  --- retorna o número positivo
// echo floor($numero); --- arredonda para baixo   
// echo ceil($numero);  --- arredonda para cima  
// echo round($numero)  --- arredonda para cima ou para baixo (o que estiver mais próximo)
// echo round($numero, 2)  //--- arredonda para cima ou para baixo (o que estiver mais próximo) com casas decimais

/*  $aleatorio = rand(1,7); // retorna um número aleatório entre "1" e "7"
    echo $aleatorio; */

// $lista = [1, 4, 7, 9]; // retorna o maior número da lista
// echo max($lista);

// $lista = [1, 4, 7, 9]; // retorna o menor número da lista
// echo min($lista);

// -------------------------------------- Funções Nativas de String --------------------------------------

    // $nomeSujo = '     Esdras     ';
    // $nomeLimpo = trim($nomeSujo); // "trim" -> tira o espaçamento
    // echo "NOME SUJO: ".strlen($nomeSujo)."<br>"; // "strlen" -> mostra a quantidade de caracteres
    // echo "NOME LIMPO: ".strlen($nomeLimpo);

    // $nome = 'Esdras Gomes';
    // echo strtolower($nome); // retorna todas as letras em minúsculo
    // echo strtoupper($nome); // retorna todas as letras em maiúsculo

    // $nome = 'Esdras Gomes';
    // $nomeAlterado = str_replace('Gomes', 'Santiago', $nome); // altera "Gomes" por "Santiago" na variável "$nome"
    // echo $nomeAlterado;

// -------------------------------------- Funções Nativas de String 2 ------------------------------------

    // $nomeCompleto = 'Esdras Gomes';

    // $posicao = strpos($nomeCompleto, 'a'); // retorna a posição da letra

    // echo $posicao;

    // if($posicao > -1) {
    //     echo "";
    // } else {
    //     echo "Letra não encontrada!";
    // }
    /////////////////////////////////////////////////

    // $nomeCompleto = 'esdras gomes santiago';
    // echo ucwords($nomeCompleto);
    /* ucfirst -> Altera a primeira letra para maiúscula
       ucwords -> Altera a primeira letra de cada palavra para maiúscula
    */
    ////////////////////////////////////////////////////

    // $numero = 147958.2214;
    // echo 'R$ '.number_format($numero, 2, ',', '.'); // formatar número
    ////////////////////////////////////////////////////

    // $lista = ['nome1', 'nome2', 'nome3', 'nome4'];
    // echo "TOTAL: ".count($lista); // contar quantos itens tem no array
    ////////////////////////////////////////////////////

    // $lista = ['Esdras', 'Lilian', 'José', 'Marcela', 'Felipe', 'Amanda'];
    // $aprovados = ['Esdras', 'Felipe', 'Lilian'];

    // $reprovados = array_diff($lista, $aprovados); // retorna a diferença de "$lista" e "$aprovados"

    // print_r($reprovados);
    ////////////////////////////////////////////////////

    // $numeros = [10, 20, 24, 91, 18];

    // $filtrados = array_filter($numeros, function($item) {
    //     if($item < 30) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // });

    // print_r($filtrados);
    ////////////////////////////////////////////////////

    //$numeros = [10, 20, 24, 91, 18];
    //array_pop($numeros); // remove o último item do array
    //array_shift($numeros); // remove o primeiro item do array
    ////////////////////////////////////////////////////

    //$numeros = [10, 20, 24, 91, 18];
    // if(in_array(25, $numeros)) { // verifica se existe "25" no array
    //     echo 'Existe';
    // } else {
    //     echo 'Não existe';
    // }
    ////////////////////////////////////////////////////

    // $numeros = [10, 20, 24, 91, 18];
    // $posicao = array_search(24, $numeros); // retorna a posição do item no array
    // echo $posicao;
    ////////////////////////////////////////////////////

    // $numeros = [10, 20, 24, 91, 18]; // ordena o array em ordem crescente
    // sort($numeros);
    // print_r($numeros);

    // $numeros = [10, 20, 24, 91, 18]; // ordena o array em ordem decrescente mas muda as chaves 
    // rsort($numeros);
    // print_r($numeros);

    // $numeros = [10, 20, 24, 91, 18]; // ordena o array em ordem crescente e não muda as chaves 
    // asort($numeros);
    // print_r($numeros);

    // $numeros = [10, 20, 24, 91, 18]; // ordena o array em ordem decrescente e não muda as chaves 
    // arsort($numeros);
    // print_r($numeros);
    ////////////////////////////////////////////////////

    // echo date('d/m/Y H:i:s');
    //    $data = '2022-04-27';
    //    $time = strtotime($data);
    //    echo date('d/m/Y', $time);

    ////////////////////////////////////////////////////
    // EXERCÍCIO - mostrar a data e o dia da semana atual

    // function diaDaSemana() {
    //     echo date('d-m-Y'.' - l');
    // }
    // diaDaSemana();

    // ------------------------------- Trabalhando com múltiplos arquivos --------------------------------

    

?>