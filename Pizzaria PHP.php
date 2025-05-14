<!DOCTYPE html>
<html>
<body>

<?php
$nome = "Felipe";
$fone = 999156898;
$endereco = "rua leonildo tusseti, n°48";
$sabor = "pizza de calabresa e de quatro queijos";
$tamanho = "M";
$bebida = "Coca Cola 1L";
$pizza = "45";
$pbebida = "5.99";
$taxa = "15";
$preco = $pizza + $pbebida + $taxa;
echo "<h1>bem vindo a Pizzaria Mamma, $nome</h1>";
echo "<br>";
echo "<h2>Escreva seu fone:</h2>";
echo ("<h3>o fone é:</h3> $fone");
echo "<br>";
echo "<h2>Escreva seu endereço:</h2>";
echo ("<h3>o endereço é:</h3> $endereco");
echo "<br>";
echo "<h2>Escolha o sabor:</h2>";
echo ("<h3>Os sabores são:</h3> $sabor");
echo "<br>";
echo "<h2>Escolha o tamanho:</h2>";
echo ("<h3>O tamanho é:</h3> $tamanho");
echo "<br>";
echo "<h2>Escolha a bebida:</h2>";
echo ("<h3>A bebida é:</h3> $bebida");
echo "<h1>O valor total é: R$ $preco</h1>";
?> 

</body>
</html>
