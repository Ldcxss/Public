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
            <h1>Atividade 1 - calculadora do circulo</h1>
        </nav>
    </header>
    <main>


        <form method="post">
            <input type="number" name="raio">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            $raio = $_POST["raio"];
            $perimetro = 2*M_PI*$raio;
            $area = M_PI* pow($raio,2);


            echo "Raio: $raio <br>";
            echo "Perimetro: $perimetro <br>";
            echo "area: $area <br>";
        ?>
    </main>
</body>

</html>