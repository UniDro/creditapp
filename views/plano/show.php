<body>
<h1>Plano de Pagamento</h1>

<table>

    <tr>
        <th>N Prestação</th>
        <th>Data</th>
        <th>Valor</th>
        <th>Saldo</th>
    </tr>
    <?php


    $numPrestacao = 1;
    foreach ($planoPagamento as $prestacao){
        echo "<tr>";
        echo "<td>" . $numPrestacao . "</td>";
        echo "<td>" . $prestacao[0] . "</td>";
        echo "<td>" . $prestacao[1] . "</td>";
        echo "<td>" . $prestacao[2] . "</td>";
        echo "</tr>";
        $numPrestacao++;
    }

    ?>


</table>
<a href="index.php?c=auth&a=logout">Logout</a>
<button type="button" class="btn btn-primary">Primary</button>
</body>
