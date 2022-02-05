<?php

    // CRIANDO VARIAVEL
    $nome = "João Paulo";
    $sobrenome= "Fidelis";

    //UTILIZANDO O PONTO PARA CONCATENAR VALORES EM UMA NOVA VARIÁVEL
    $nome_completo = $nome . ' ' . $sobrenome;

    // EXIBINDO VALOR DA VARIAVEL
    echo $nome_completo;

    //VARIAVEL IDADE

    $idade = 43;
 
    //VERIFICANDO SE E MAIOR DE IDADE

    //SE (IF) A VARIAVEL IDADE FOR MAIOR QUE 18 DE IDADE
    //SENAO (ELSE) MENOR DE IDADE
    
    if($idade >= 18){
        $resultadoidade = "Maior de idade";
    }else{
        $resultadoidade = "Menor de idade";
    }
    
    echo '</br>';
    echo $resultadoidade;

?>

<
