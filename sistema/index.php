<?php

//CHAMANDO CONEXÃO.PHP
include 'conexao.php';

//COLETANDO AS INFORMAÇÕES DO POST
//@ PARA IGNORAR O ERRO CASO O POST NÃO SEJA ENVIADO

@$cd_convenio= $_POST['frm_cd_convenio'];


?>

<form method= "POST" action="index.php">

Codigo do convenio:<br>
<input type="number" name="frm_cd_convenio">

<button type="submit"> Enviar </button>

</form>

<?php

echo'Convenio selecionado: ' . $cd_convenio . '<br><br>';



        //BUSCANDO DADOS DO CONVENIO
        $consulta_convenio = "SELECT * FROM 
                              banco_iep.convenio
                              WHERE cd_convenio = $cd_convenio";

        //EXECUTANDO COMANDO NO BANCO
        $resultado = mysqli_query($conexao, $consulta_convenio);

        //APENAS PARA O COMANDO SELECT
        //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
        $linha = mysqli_fetch_array($resultado);

        //EXIBINDO INFORMACOES
        echo $linha['cd_convenio'];
        echo ' | ' . $linha['nm_convenio'];
        echo ' | ' . $linha['cooparticipacao'];


       
 ?>
       
       <br><br>
       
       <table>
        
        <tr>
            <style></style>

        <th>cd_convenio </th>
        <th>nm_convenio</th>
        <th>cooparticipacao (%)</th>

        </tr>

        <tr>

        <td><?php echo $linha['cd_convenio'];?></td>
        <td><?php echo $linha['nm_convenio'];?></td>
        <td><?php echo $linha['cooparticipacao'];?></td>

        </tr>
        
        </table>

        <style>

        th{

            border:solid 2px black;
            text-align: center;
            background-color: yellow;
        }

        td{

        border:solid 2px black;
        text-align: center;
    
}


        </style>