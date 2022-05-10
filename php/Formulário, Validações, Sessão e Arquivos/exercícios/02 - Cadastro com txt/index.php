<form action="./index.php" method="POST">
<label>Novo Nome:</label><br/>
<input type="text" name="nome">
<input type="submit" value="Adicionar"><br/><br/>
<h2>Lista de Nomes</h2>
<ul>
<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $lista = file_get_contents("lista.txt");
    //Verifica se foi digitado algum nome no campo    
    if($nome){
        //verifica se o nome já existe no arquivo
        $arrayList = explode("\n", $lista);
        if(in_array($nome, $arrayList)){
            echo "<strong>Nome já cadastrado! </strong><br/><br/>";
        }else {
            //Adiciona o novo nome à lista 
            $lista .= "\n$nome";
            file_put_contents("lista.txt", "$lista");
        }
        //Mostra a lista como lista não ordenada                
        $lista = explode("\n",$lista);
        foreach ($lista as $key => $item) {
            echo "<li>".$item."</li>";
        }
    } else {
        //Mostra a lista caso o nenhum nome tenha sido digitado
        $lista = explode("\n",$lista);
        foreach ($lista as $key => $item) {
            echo "<li>".$item."</li>";
        }            
        exit;
    }
?>
</ul>
</form>
