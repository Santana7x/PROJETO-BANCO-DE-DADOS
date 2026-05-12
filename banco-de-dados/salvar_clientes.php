<?php

include 'conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes(nome, telefone, email)

VALUES ('$nome', '$telefone', '$email')";

if($conn->query($sql) === TRUE){

    header("Location: ../painel/clientes.php?sucesso=1");

}else{

    echo "Erro: " . $conn->error;
}

$conn->close();

?>