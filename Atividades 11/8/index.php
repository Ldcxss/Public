<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 8</h1></header>
    <main>
        <h2>Calculadora simples</h2>
        <section>
            <form method="POST">
                <label for="num1">Numero 1:</label>
                <input type="text" name="num1" placeholder="Digite o primeiro numero"><br>

                <label for="num2">Numero 2:</label>
                <input type="text" name="num2" placeholder="Digite o segundo numero"><br>

                <label for="operacao">Operacao:</label>
                <select name="operacao">
                    <option value="somar">somar</option>
                    <option value="subtrair">subtrair</option>
                    <option value="multiplicar">multiplicar</option>
                    <option value="dividir">dividir</option>
                </select>

                <input type="submit" value="Calcular">
            </form>
        </section>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $operacao = $_POST["operacao"];

            if ($operacao == "somar") {
                $resultado = $num1 + $num2;
                echo "<p>Resultado da soma: $resultado</p>";
            } else if ($operacao == "subtrair") {
                $resultado = $num1 - $num2;
                echo "<p>Resultado da subtracao: $resultado</p>";
            } else if ($operacao == "multiplicar") {
                $resultado = $num1 * $num2;
                echo "<p>Resultado da multiplicacao: $resultado</p>";
            } else if ($operacao == "dividir") {
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                    echo "<p>Resultado da divisao: $resultado</p>";
                } else {
                    echo "<p>Erro: divisao por zero</p>";
                }
            }
        }
        ?>
    </main>
</body>
</html>
