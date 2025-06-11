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

        <?php
// Initialize variable
$raio = '';

// Check if form was submitted
if (isset($_POST['raio'])) {
    // Store the input directly in variable
    $raio = $_POST['raio'];
}
?>

        <form method="post">
            Digite o raio: <input type="text" name="raio">
            <input type="submit" value="Store">
        </form>

        <?php
// Display stored value
if ($raio != '') {
    echo "Stored value: $raio";
}
?>
    </main>
</body>

</html>