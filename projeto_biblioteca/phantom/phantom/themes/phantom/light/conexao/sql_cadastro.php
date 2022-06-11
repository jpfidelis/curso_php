<?php

include "conexao.php";

$nm_cliente = $_POST['nm_cliente'];
$senha = md5($_POST['senha']);
$dt_nascimento = $_POST['dt_nascimento'];
$CPF = $_POST['CPF'];
$Sexo = $_POST['Sexo'];
$Celular = $_POST['Celular'];
$CEP = $_POST['CEP'];
$Rua = $_POST['Rua'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cidade = $_POST['Cidade'];
$Estado = $_POST['Estado'];
$Email = $_POST['Email'];




$insert_cad = "INSERT INTO `cadastro`(`nm_cliente`, `dt_nascimento`, `CPF`, `Sexo`, `Celular`, `CEP`,
 `Rua`, `Numero`, `Bairro`, `Cidade`, `Estado`, `Email`, `Senha`, `id_cliente`) 
VALUES ('$nm_cliente','$dt_nascimento','$CPF','$Sexo','$Celular','$CEP','$Rua','$Numero','$Bairro','$Cidade','$Estado','$Email','$senha','[value-14]')";

$result = mysqli_query($conn, $insert_cad);

mysqli_close($conn);

header('location: form.php');


?>
