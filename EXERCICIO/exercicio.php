<?php
    //QUANTIDADE DE CAIXAS
    $qtd_caixas = 5;

    //UNIDADE POR CAIXAS
    $uni_caixas = 10;

    //QUANTIDADE TOTAL
    $qtd_total = $qtd_caixas * $uni_caixas;
    

?>


<!-- TR = LINHA
     TH = COLUNA DE TITULO
     TD = COLUNA DE RESULTADO -->

<table>
    <tr>
        <th>Qtd Caixas</th>

        <th>Uni caixas</th>

        <th>qtd total</th>

    </tr>

    <tr>
        <td><?php echo  $qtd_caixas;?></td>

        <td><?php echo  $uni_caixas;?></td>

        <td><?php echo  $qtd_total = $qtd_caixas * $uni_caixas;?></td>

    </tr>

    

</table>

<!--resumo do exercicio 

CRIE DUAS VARIAVEIS

1º QUANTIDADE DE CAIXAS ($qtd_caixas)
2º UNIDADES POR CAIXA ($uni_caixas)

CRIAR uma nova variavel para calcular quantas unidades contém no total

3º Quantidade total ($qtd_total)

EXIBIR OS RESULTADOS DO PHP
DENTRO DE UMA TABLE HTML

QUANTIADE DE CAIXAS | UNIDADES POR CAIXA | QUANTIDADE TOTAL

       10                      5                   50 -->