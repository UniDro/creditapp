<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
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
</body>
</html>