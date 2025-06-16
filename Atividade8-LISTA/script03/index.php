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
            <h1>Atividade 3 </h1>
        </nav>
    </header>
    <main>


        <form method="post">
            Digite o primeiro numero: <input type="number" name="numero1">
            <!-- <button type="submit">Enviar</button>
        </form> -->
<br>
        <!-- <form method="post"> -->
            Digite o segundo numero: <input type="numer" name="numero2">
            <button type="submit">Enviar</button>

        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $total = $numero1+$numero2;
            echo "Soma: $total";
        ?>
    </main>
</body>

</html>