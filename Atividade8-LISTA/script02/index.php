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
            <h1>Atividade 2 </h1>
        </nav>
    </header>
    <main>


        <form method="post">
            Digite um numero: <input type="number" name="numero">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            $numero = $_POST["numero"];

            echo "numero: $numero <br>";
        ?>
    </main>
</body>

</html>