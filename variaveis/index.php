<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Estudo de Variáveis </title>
</head>
<body>
    <?php
        $nome = "Ramon";
        $idade = 23;
        $email = "ramon@email.com";
        $online = true;

        echo "Olá, {$nome}!<br>";
        echo "Sua idade é {$idade} anos!<br>";
        echo "Seu e-mail é {$email}!<br>";
        echo "Você está online? " . ($online ? "Sim" : "Não") . "<br>";
    ?>
</body>
</html>

