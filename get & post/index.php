<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    <h1>Pedir Pizza</h1>
    <!-- <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Entrar"><br>
    </form> -->
    <form action="index.php" method="post">
        <label>quantidade: </label><br>
        <input type="text" name="quantidade"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

    $item = "pizza";
    $preco = 50;
    $quantidade = $_POST["quantidade"]; 
    $total = null;

    $total = $preco * $quantidade;

    echo "Você comprou {$quantidade} {$item}s <br>";
    echo "No valor de R$ {$total}";
    
?>

<!-- 
$_GET = Dado é  enviado via URL
        ÑÃO SEGURO 
        limnite de caracteres 
        Bookmark é possível com valores 
        GET request pode ser armazenado 
        Melhor para a busca de dados
-->

<!-- 
$_POST = Dado é guardado no corpo da requisição
        MAIS SEGURO 
        Sem limite de caracteres 
        Bookmark não é possível com valores 
        POST request não pode ser armazenado 
        Melhor para o envio de dados
-->