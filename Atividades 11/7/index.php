<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
<header>
    <h1>Pesquisa Eleitoral</h1>
    </header>
    <main>
        <section>
        <form method="post">
        Nome (opcional):<br>
        <input type="text" name="nome"><br><br>

        Idade:<br>
        <select name="idade">
            <option value="16-18">16 a 18</option>
            <option value="19-25">19 a 25</option>
            <option value="26-35">26 a 35</option>
            <option value="36-50">36 a 50</option>
            <option value="51+">51 ou mais</option>
        </select><br><br>

        Naturalidade:<br>
        <input type="text" name="naturalidade"><br><br>

        Nacionalidade:<br>
        <input type="text" name="nacionalidade"><br><br>

        Votou na eleição anterior?<br>
        <label><input type="radio" name="votou" value="Sim"> Sim</label>
        <label><input type="radio" name="votou" value="Não"> Não</label><br><br>

        Partidos com os quais se identifica:<br>
        <label><input type="checkbox" name="partidos[]" value="PT"> PT</label>
        <label><input type="checkbox" name="partidos[]" value="PSDB"> PSDB</label>
        <label><input type="checkbox" name="partidos[]" value="Democratas"> Democratas</label>
        <label><input type="checkbox" name="partidos[]" value="PSTU"> PSTU</label>
        <label><input type="checkbox" name="partidos[]" value="Outro"> Outro</label><br><br>

        Como classifica a administração atual?<br>
        <label><input type="radio" name="admin" value="Ótima"> Ótima</label>
        <label><input type="radio" name="admin" value="Boa"> Boa</label>
        <label><input type="radio" name="admin" value="Regular"> Regular</label>
        <label><input type="radio" name="admin" value="Péssima"> Péssima</label><br><br>

        Principais problemas da cidade:<br>
        <textarea name="problemas" rows="4" cols="40"></textarea><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'] ?? '(não informado)';
        $idade = $_POST['idade'] ?? '(não informado)';
        $naturalidade = $_POST['naturalidade'] ?? '(não informado)';
        $nacionalidade = $_POST['nacionalidade'] ?? '(não informado)';
        $votou = $_POST['votou'] ?? '(não informado)';
        $partidos = $_POST['partidos'] ?? [];
        $admin = $_POST['admin'] ?? '(não informado)';
        $problemas = $_POST['problemas'] ?? '(não informado)';

        echo "<h2>Dados recebidos:</h2>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
        echo "<p><strong>Idade:</strong> " . htmlspecialchars($idade) . "</p>";
        echo "<p><strong>Naturalidade:</strong> " . htmlspecialchars($naturalidade) . "</p>";
        echo "<p><strong>Nacionalidade:</strong> " . htmlspecialchars($nacionalidade) . "</p>";
        echo "<p><strong>Votou na eleição anterior?</strong> " . htmlspecialchars($votou) . "</p>";
        echo "<p><strong>Partidos:</strong> " . (!empty($partidos) ? htmlspecialchars(implode(", ", $partidos)) : "Nenhum selecionado") . "</p>";
        echo "<p><strong>Administração atual:</strong> " . htmlspecialchars($admin) . "</p>";
        echo "<p><strong>Problemas da cidade:</strong> " . nl2br(htmlspecialchars($problemas)) . "</p>";
    }
    ?>
        </section>
    </main>

</body>
</html>