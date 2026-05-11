<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORGANIZA AÊ</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
    <header>
        <a class="logoimg" href="/index.html">
        <img id="logo" src="/imagens/Organizaaeee.png"> 
        </a>
        <nav>
            <ul>
                <li><a href="painel.html">PAINEL</a></li>
                
            </ul>
        </nav>
    </header>

    <section class="cadastro">
    <form action="banco-de-dados/salvar_produto.php" method="POST">
  
  <ul><label for="nome">Nome do produto:</label>
  <input type="text" id="nome" name="nome"></ul>

  <ul><label for="preco">Preço:</label>
  <input type="number" id="preco" name="preco" step="0.01"></ul>

  <ul><label for="quantidade">Quantidade:</label>
  <input type="number" id="quantidade" name="quantidade"></ul>

  <ul class="ulbtn"><button type="submit">Cadastrar</button></ul>

    </form>

    <?php

    if(isset($_GET['sucesso'])){
    echo "<p class='mensagem-sucesso'>Produto cadastrado com sucesso!</p>";
        }

    ?>
    </section>


<footer>
    <p>&copy; 2026 OrganizaAê. Desenvolvido pela Baguga Team.</p>
  </footer>
</body>
</html>