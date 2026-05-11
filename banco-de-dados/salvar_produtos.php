<?php

include 'conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO produtos(nome, preco, quantidade)
VALUES ('$nome', '$preco', '$quantidade')";

if($conn->query($sql) === TRUE){

    header("Location: ../painel/produtos.php?sucesso=1");

}else{

    echo "Erro: " . $conn->error;
}

$conn->close();

?>