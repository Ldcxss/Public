<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 2</h1></header>
    <main>
        <h2>Area e perimetro</h2>
        <section>
            <form method="POST">
                <label for="variavel">Digite o primeiro lado</label>
                <input type="text" name="variavel" id="idvariavel" placeholder="Digite aqui">

                <label for="variavel2">Digite o segundo lado</label>
                <input type="text" name="variavel2" id="idvariavel2" placeholder="Digite aqui">

                <input type="submit" value="Enviar">
            </form>
        </section>


        
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            $variavel = $_POST["variavel"];
            $variavel2 = $_POST["variavel2"];
            

            echo "Area: ", $variavel*$variavel2;} else {
                echo "Digite os dois valores.";
            }
        ?>
    </main>
</body>
</html>