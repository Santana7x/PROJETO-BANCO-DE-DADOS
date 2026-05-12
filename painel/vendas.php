<?php

include '../banco-de-dados/conexao.php';

$sqlprodutos = "SELECT * FROM produtos";
$resultProdutos = $conn->query($sqlprodutos);

$sqlClientes = "SELECT * FROM clientes";
$resultclientes = $conn->query($sqlclientes);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIZA AÊ</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
    <header>
        <a class="logoimg" href="../index.html">
        <img id="logo" src="../imagens/Organizaaeee.png"> 
        </a>
        <nav>
            <ul>
                <li><a href="painel.html">PAINEL</a></li>
                
            </ul>
        </nav>
    </header>


    <section class="vendas">
        <?php

echo "Teste";

?>
    <form action="../banco-de-dados/salvar_venda.php" method="POST">
        
        <ul><label>Produto</label>
        <select name="produto">

<?php

while($produto = $resultProdutos->fetch_assoc()){

    echo "<option value='".$produto['id']."'>".$produto['nome']."</option>";
}

?>

</select></ul>

        <ul><label>Quantidade</label>
        <input type="number" name="quantidade"></ul>

        <ul><label>Cliente</label>
        <select name="cliente">

<?php

while($cliente = $resultClientes->fetch_assoc()){

    echo "<option value='".$cliente['id']."'>".$cliente['nome']."</option>";
}

?>

</select></ul>

        <ul class="ulbtn"><button type="submit">Registrar Venda</button></ul>
    </form>

    <?php

if(isset($_GET['sucesso'])){
    echo "<p class='mensagem-sucesso'>Venda registrada com sucesso!</p>";
}

?>

    </section>

<footer>
    <p>&copy; 2026 OrganizaAê. Desenvolvido pela Baguga Team.</p>
  </footer>
</body>
</html>