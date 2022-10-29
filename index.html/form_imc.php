<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    
    function imc($altura, $peso){
    $altura = str_replace(',', '.', $altura);
    $result = $peso/pow($altura, 2);
    return $result;
    
    }
    
    $dicionario = [
        "17" => "Muito abaixo do peso",
        "18.49" => "Abaixo do peso",
        "24.99" => "Peso normal",
        "29.99" => "Acima do peso",
        "34.99" => "Obesidade I",
        "39.99" => "Obesidade II (severa)",
        "40.00" => "Obesidade III (mórbida)",
    ];
    
    foreach($dicionario as $key => $value){
        
        if((float) $key < 40.0){
                echo PHP_EOL."$value";
                if($dicionario <= (float) $key){
                break;
            }
        }else{ 
            echo PHP_EOL."$value";
        }
    }
    ?>
    
</body>
</html>