<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else até RegEx</title>
</head>
<style>
    body {
        text-align: center;
    }
    .ifelse {
        text-decoration: none;
    }

    .switch {
        text-decoration: none;
    }
</style>
<body>
<div class="ifelse">
    <h1>IF AND Else</h1>
    <?php
     echo"são utilizados para determinar uma condição especifica. EX: <br><br>";

    //  se a hora do dia for maior ou igual a 18, exibira boa noite, caso contrario, bom dia
$t = date("H");
if ($t >= 18) {
    echo"Tenha uma boa noite!";
} else {
    echo "Tenha um bom dia! <br> <br>";
}

echo "se a hora do dia for maior ou igual a 18, exibira boa noite, caso contrario, bom dia";
?>
<br>
<p>A condição elseif, pode ser utilizada para colocar mais de uma condição ao termo.</p>
</div> 
<hr>
<!-- Aqui está primeiro o formulario perguntando a cor e depois o comando do php -->




<div class="switch">
    <h1>switch</h1>
    <p>O switch é utilizado para escolher uma opção dentre várias em uma determinada condição.</p>
    <!-- formulario para armazenar a resposta do usuario -->
    <form method="post">
  <label>Digite sua cor favorita:</label>
  <input type="text" name="favcolor">
  <input type="submit" value="Enviar">
</form>
    <?php 
    // input do usuario para a variavel $favcolor é resgatado por esse comando
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $favcolor = $_POST['favcolor']; }

        echo "Sua cor favorita é: $favcolor";
?>
<hr>
<?php   
echo "<br> agora com o switch, ele pega sua resposta e coloca direto nos casos ja prontos, se não tiver, ele não exibe o que foi escrito tente digitando com verde e vermelho. <br> <br>";
switch ($favcolor) {
case "vermelho":
    echo "Opção vermelha - 1";
    break;
    case "verde":
        echo "Opção verde - 2";
break;
default: echo "Escolha entre verde e vermelho por favor";
}
?>
</div>
<hr>

<div class="loops">
<h1>Loops</h1>
<p>os loops são utilizados para fazer uma ação até que uma condição seja atingida</p> <br>
<p>No codigo a seguir, a variavel I vai rodar o codigo até que seu valor seja menor que 6, adicionando 1 a cada vez que ela se repete.</p>
<br> <br>
<?php
echo  '$i = 1; <br>
while ($i < 6) <br>
  echo $i; <br>
  $i++; <br><br> exibe: <br>';
    $i = 1;
    while ($i < 6) {
      echo $i;
      $i++;
    }
?>
</div>

<hr>

<div class="function">
    <h1>Functions</h1>
    <p>As functions são utilizadas para determinar um parametro de um dado.</p>
    <?php
            
        function familyName($fname, $year) {
            echo "$fname Refsnes. Born in $year <br>";
          }
          
          familyName("Hege", "1975");
          familyName("Stale", "1978");
          familyName("Kai Jim", "1983");
    ?>
</div>
<hr> 
<div class="superglobal">
    <h1>Superglobals</h1>
    <p>variaveis predefinidas do php, abra o codigo p entender.</p><br>
    <?php
        $x = 75;
  
        function myfunction() {
          echo $GLOBALS['x'];
        }
        
        myfunction()
    ?>
</div>

 <hr>
 <div class="regex">
    <h1>REGEX</h1>
    <p>Uma regex é uma sequência de caracteres que forma um padrão de busca. Quando você procura algo em um texto, usa esse padrão para dizer o que quer encontrar.</p>
    <?php
      $str = "Visit W3Schools";
      $pattern = "/w3schools/i";
      echo preg_match($pattern, $str);  
    ?>
</div>
 



</body>
</html>
