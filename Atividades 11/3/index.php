<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 3</h1></header>
    <main>
        <h2>Calculadora IMC</h2>
        <section>
            <form method="POST">
                <label for="altura">Digite sua altura</label>
                <input type="text" name="altura" id="idaltura" placeholder="Digite aqui">
            
                <label for="peso">Digite seu peso</label>
                <input type="text" name="peso" id="idpeso" placeholder="Digite aqui">

                <input type="submit" value="Enviar">
            </form>
        </section>


        
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
            $altura = $_POST["altura"];
            $peso = $_POST["peso"];

            $imc = $peso/($altura*$altura);
            echo "Seu imc é: ", $imc;

        } else {
            echo "Digite e envie os valores";
        }
        ?>
    </main>
</body>
</html>