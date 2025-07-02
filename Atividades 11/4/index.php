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
        <h2>Titulo da atividade</h2>
        <section>
            <form method="POST">
                <label for="user">Digite seu user</label>
                <input type="text" name="user" id="iduser" placeholder="Digite aqui">

                <label for="senha">Digite sua senha</label>
                <input type="text" name="senha" id="idsenha" placeholder="Digite aqui">

                <input type="submit" value="Enviar">
            </form>
        </section>


        
    <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST["user"];
            $senha = $_POST["senha"];
            
                if($user === "maria" and $senha === "1234")

echo "Parabens voce entrou no site.";

else 
    echo "Ta errado n vai entrar."; 
        } 
        
        ?>
    </main>
</body>
</html>