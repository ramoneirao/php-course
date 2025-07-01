<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Operações Aritimética</title>
</head>
<body>
    <?php
        echo "<h1>Aritmética</h1>";
        $comida = "pizza";
        $preco = 30.45;
        $qunatidade = 2;

        $total = null;

        echo "O valor da pizza é R\${$preco}!<br>";
        echo "Você pediu {$qunatidade} {$comida}s!<br>";

        $total = $preco * $qunatidade;
        echo "O total da compra é R\${$total}!<br>";

        # Operações Aritiméticas
        echo "<h2>Operações Aritméticas</h2>";
        echo "<h3>Adição</h3>";
        $a = 10;
        $b = 5;
        $soma = $a + $b;
        echo "{$a} + {$b} = {$soma}<br>";
        
        echo "<h3>Subtração</h3>";
        $subtracao = $a - $b;
        echo "{$a} - {$b} = {$subtracao}<br>";
        
        echo "<h3>Multiplicação</h3>";
        $multiplicacao = $a * $b;
        echo "{$a} * {$b} = {$multiplicacao}<br>";
        
        echo "<h3>Divisão</h3>";
        $divisao = $a / $b;
        echo "{$a} / {$b} = {$divisao}<br>";

        echo "<h2>Operadores de Incremento e Decremento</h2>";
        $contador = 0;
        echo "Valor inicial: {$contador}<br>";
        $contador++; // Incrementa 1
        echo "Após incremento: {$contador}<br>";

        $contador--; // Decrementa 1
        echo "Após decremento: {$contador}<br>";

        echo "<h2>Operadores de Precedência</h2>";
        $x = 10;
        $y = 5;
        $z = 2;
        $resultado = $x + $y * $z; // Multiplicação tem precedência sobre adição
        echo "{$x} + {$y} * {$z} = {$resultado}<br>";
        $resultado = ($x + $y) * $z; // Parênteses alteram a precedência
        echo "({$x} + {$y}) * {$z} = {$resultado}<br>";
        
    ?>
</body>
</html>