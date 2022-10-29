
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  
<?php

$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];

$media = ($nota1 + $nota2) /2;

print "Nome: " . $nome ."<br>";
print "Nota 1º Bim: " . $nota1 ."<br>";
print "Nota 2º Bim: " . $nota2 ."<br>";
print "Média: " . $media ."<br>";

if($media<4)
 print "Reprovado";

 elseif($media>=6)
   print "Aprovado";
   elseif($media<=6)
   print "Exame Final"


  
?>
