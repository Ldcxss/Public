<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <h1>Atividade 5 </h1>
        </nav>
    </header>
    <main>
<form method="post">
    Digite o tamanho em metros: <input type="number" name="metro">
    <button type="submit">Enviar</button>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    $metro = $_POST["metro"];
    $convert = $metro*100;

    echo "O tamanho em centimetros é: $convert"
?>
    </main>
</body>

</html>