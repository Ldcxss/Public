<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 6</h1></header>
    <main>
        <h2>Ordem alfabetica</h2>
        <section>
            <form method="POST">
                <label for="nome1">Nome 1:</label>
                <input type="text" name="nome1" placeholder="Digite um nome"><br>

                <label for="nome2">Nome 2:</label>
                <input type="text" name="nome2" placeholder="Digite um nome"><br>

                <label for="nome3">Nome 3:</label>
                <input type="text" name="nome3" placeholder="Digite um nome"><br>

                <label for="nome4">Nome 4:</label>
                <input type="text" name="nome4" placeholder="Digite um nome"><br>

                <label for="nome5">Nome 5:</label>
                <input type="text" name="nome5" placeholder="Digite um nome"><br>

                <input type="submit" value="Enviar">
            </form>
        </section>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome1 = $_POST["nome1"];
            $nome2 = $_POST["nome2"];
            $nome3 = $_POST["nome3"];
            $nome4 = $_POST["nome4"];
            $nome5 = $_POST["nome5"];

            // coloca os nomes em um array
            $nomes = array($nome1, $nome2, $nome3, $nome4, $nome5);

            // ordena os nomes em ordem alfabetica
            sort($nomes);

            echo "<h3>Nomes em ordem alfabetica:</h3>";
            foreach($nomes as $nome) {
                echo $nome . "<br>";
            }
        }
        ?>
    </main>
</body>
</html>
