<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Func Matematicas</title>
</head>
<body>
    <form action="index.php" method="post">
        <labe>Raio:</label>
        <input type="text" name="raio">
        <!-- <label>y:</label>
        <input type="text" name="y"> -->
        <input type="submit" value="Calcular">
        </lable>
    </form>
</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST ["y"];

    // $total = null;

    // echo "<br>Soma: {$x}  + {$y} = " . ($x + $y) . "<br>";
    // echo "Subtração: {$x} - {$y} = " . ($x - $y) . "<br>";
    // echo "Multiplicação: {$x} * {$y} = " . ($x * $y) . "<br>";
    // echo "Divisão: {$x} / {$y} = " . ($x / $y) . "<br>";
    // echo "Módulo: {$x} % {$y} = " . ($x % $y) . "<br>";
    // echo "Exponenciação: {$x} ** {$y} = " . ($x ** $y) . "<br>";
    // echo "Raiz quadrada de {$x} = " . sqrt($x) . "<br>";
    // echo "Raiz quadrada de {$y} = " . sqrt($y) ."<br>";
    // echo "Valor absoluto de {$x} = " . abs($x) . "<br>";
    // echo "Valor absoluto de {$y} = " . abs($y) . "<br>";
    // echo "Média: ({$x} + {$y}) / 2 = " . (($x + $y) / 2) . "<br>";

    $raio = $_POST["raio"];

    $circunferencia = null;
    $area = null;
    $volume = null;
    
    $circunferencia = 2 * pi() * $raio;
    $circunferencia = round($circunferencia, 2);
    $area = pi() * ($raio ** 2);
    $area = round($area, 2);
    $volume = (4/3) * pi() * ($raio ** 3);
    $volume = round($volume, 2);

    echo "<br>A circunferência do círculo com raio {$raio} é: {$circunferencia} cm<br>";
    echo "A área do círculo com raio {$raio} é: {$area} cm²<br>";
    echo "O volume da esfera com raio {$raio} é: {$volume} cm³<br>";

?>