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
            <h1>Atividade 4 </h1>
        </nav>
    </header>
    <main>


        <form method="post">
            Digite o primeiro valor da prova: <input type="number" name="numero1">
            
<br>
            Digite o segundo valor da prova: <input type="number" name="numero2">
            <br>
            Digite o segundo valor da prova: <input type="number" name="numero3">
            <br>
            <button type="submit">Enviar</button>

        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];
            $media = ($numero1+$numero2+$numero3)/3;
            echo "Media do aluno: $media";
        ?>
    </main>
</body>

</html>