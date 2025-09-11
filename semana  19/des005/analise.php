<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Gear Five</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número Real</h1>
        <?php 
        $num = $_REQUEST["n"] ?? 0;
        echo "Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuario:";
        $int = (int) $num;
        $fra = $num - $int;
        echo "<ul><li>A parte interia do numero é <strong>". number_format($int, 0, ",", ".") . "</strong></li></ul>"; 
        echo "<ul><li>A parte Fracionaria do numero é <strong>". number_format($fra, 3, ",", ".") . "</strong></li>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>