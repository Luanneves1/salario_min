<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php
    $sal = $_GET["sal"] ?? 1640.00;
    $min = 1_640.00;

    ?>

    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="">Salário (R$)</label>
            <input type="number" name="sal" value="<?= $sal ?>" step="0.01">
            <p>Considerando o salário <strong>mínimo de R$<?= number_format($min, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
        $tot = intdiv($sal, $min);
        $diferenca = $sal % $min;
        echo "Quem recebe um salário de <strong>R\$".number_format($sal,2,",",".")."</strong> Ganha <strong> ".$tot." salário mínimo </strong>"."  + R\$".number_format($diferenca,2,",",".")." reais";
    

        ?>
    </section>

</body>

</html>