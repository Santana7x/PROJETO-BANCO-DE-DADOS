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

<section class="clientes">
<form action="../banco-de-dados/salvar_clientes.php" method="POST">

  <ul><label>Nome:</label>
  <input type="text" name="nome"></ul>

  <ul><label>Telefone:</label>
  <input type="text" name="telefone"></ul>

  <ul><label>Email:</label>
  <input type="email" name="email"></ul>

 <ul class="ulbtn"><button type="submit">Cadastrar</button></ul>

</form>

<?php

if(isset($_GET['sucesso'])){
    echo "<p class='mensagem-sucesso'>Cliente cadastrado com sucesso!</p>";
}

?>

</section>

<footer>
    <p>&copy; 2026 OrganizaAê. Desenvolvido pela Baguga Team.</p>
  </footer>
</body>
</html>