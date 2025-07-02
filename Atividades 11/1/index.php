<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <header><h1>Atividade 1</h1></header>
    <main>
        <h2>Calculando idade em 2024</h2>
        <section>
            <form method="POST">
                <label for="variavel">Digite seu ano de nascimento</label>
                <input type="text" name="variavel" id="idvariavel" placeholder="Digite aqui">

                <input type="submit" value="Enviar">
            </form>
        </section>


        
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" )
            $variavel = $_POST["variavel"] ;
            
            echo "Sua idade em 2024 é: ", 2024-(int)$variavel ;
        ?>
    </main>
</body>
</html>