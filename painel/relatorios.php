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

   <section class="relatorios">

    <div class="cards">

        <div class="card">
            <h3>Total de Vendas</h3>
            <p>
                <?php echo $totalVendas; ?>
            </p>
        </div>

        <div class="card">
            <h3>Valor Arrecadado</h3>
            <p>
                R$ <?php echo number_format($totalArrecadado, 2, ',', '.'); ?>
            </p>
        </div>

    </div>

    <table>

        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Data</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>

            <td><?php echo $row['nome']; ?></td>

            <td><?php echo $row['quantidade']; ?></td>

            <td>
                R$ <?php echo number_format($row['total'], 2, ',', '.'); ?>
            </td>

            <td><?php echo $row['data']; ?></td>

        </tr>

        <?php } ?>

    </table>

</section>


<footer>
    <p>&copy; 2026 OrganizaAê. Desenvolvido pela Baguga Team.</p>
  </footer>
</body>
</html>