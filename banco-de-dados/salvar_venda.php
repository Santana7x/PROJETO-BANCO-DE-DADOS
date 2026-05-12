<?php

include 'conexao.php';

$produto = $_POST['produto'];
$cliente = $_POST['cliente'];
$quantidade = $_POST['quantidade'];

$sqlPreco = "SELECT preco FROM produtos WHERE id = '$produto'";

$resultPreco = $conn->query($sqlPreco);

$dadosProduto = $resultPreco->fetch_assoc();

$preco = $dadosProduto['preco'];

$total = $preco * $quantidade;

$sql = "INSERT INTO vendas(cliente_id, produto_id, quantidade, total)

VALUES ('$cliente', '$produto', '$quantidade', '$total')";

if($conn->query($sql) === TRUE){

    header("Location: ../painel/vendas.php?sucesso=1");

}else{

    echo "Erro: " . $conn->error;
}

$conn->close();

?>