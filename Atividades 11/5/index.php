<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 5</h1></header>
    <main>
        <section>
            <h2>Escolha um número</h2>
            <form method="post">
                <label for="numero">Número:</label>
                <select name="numero" id="numero">
                    <?php
                    for ($i = 1; $i <= 9; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="Ver Tabuada">
            </form>
        </section>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["numero"];
            echo "<section><h2>Tabuada do $n</h2>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$n x $i = " . ($n * $i) . "<br>";
            }
            echo "</section>";
        }
        ?>
    </main>
</body>
</html>