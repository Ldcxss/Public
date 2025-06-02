<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body  style="text-align: center;">
    
    <h1>
    <?php
echo "Atividade - HOME até OPERATOR";
?>
    </h1>
    <h1> LUCAS DOMINGOS COSTA</h1>
 <h2>
    <p>PHP SYNTAX</p>
 <?php
$color = "red";
echo "My car is " . $color . "<br>";
?>
 </h2>

 // Assim é o comentário 

/* Assim é o comentario 
de varias 
linhas */

<hr>

<h2>
    <p>PHP VARIAVEIS</p>
 <?php
$var = "$ é usado pra fazer a definicao da variavel var no codigo";
echo "teste tem que exibir: " . $var . "<br>";
?>
 </h2>

<hr>
 <h2>
    <p>PHP DATA TYPE</p>
 <?php
$x = "Jõao";
var_dump($x);
echo "O var dump mostra o tipo da variavel, sem precisar que seja definida";
?>
 </h2>

 <hr>

 <h2>
    <p>PHP STRING</p>
 <?php
echo strlen("Hello world! ");
echo " retorna o tamanho da strng";
echo str_word_count("Hello world! ");
echo " retorna a quantidade de palavras";

?>
 </h2>

<hr>

 <h2>
    <p>PHP CAST</p>
    <p>consegue alterar o tipo de arquivo </p>    
 <?php
    $str = "Teste p str"; // String
    $str = (string) $str;
    // testando
    var_dump($str);
?>

<hr>

<?php 
echo "Abra o codigo para entender";
echo(round(0.60)); // arredonda o numero
echo(sqrt(64)); // raiz quadrada 
echo(rand()); // coloca numeros aleatorios 
echo(rand(10, 100)); // numero aleatorio entre numeros 
?>

<hr>

<h2>
    <p>constants</p>
    <?php 
    echo " para definir uma constante use: define(name, value)";
    const MYCAR = "Volvo";
echo MYCAR;
echo "Define uma constante com o nome do carro";
    
    ?>
</h2>
    <hr>

    <h2>OPERATOR</h2>
    <p>São usados para fazer operações entre variaveis e valores</p>
    <p>exemplo: <br>
    $num1 = 5; <br>
    $num2 = 35; <br>
    echo ($num1 * $num2) <br>
    Resposta:</p>
    <?php
    $num1 = 5;
    $num2 = 35;

    echo ($num1 * $num2);
    ?>





</body>
</html>