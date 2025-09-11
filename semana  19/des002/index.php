<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge two</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        //rand
        //mt_rand
        //radon_int() gera numeros aleatorios criptografados e seguros.
        
        echo "Gerando um número aleatório entre $min e $max... \n";
        echo "O número gerado foi $num";
        ?>
        <button><a href="index.php">&#x1f504; Gerar outro</a></button>
    </main>
    
</body>
</html>