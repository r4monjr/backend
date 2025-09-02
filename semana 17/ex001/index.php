<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anoNascimento = $_POST["ano"] ?? null;

    if ($anoNascimento && is_numeric($anoNascimento)) {
        $anoAtual = date("Y");
        $idade = $anoAtual - $anoNascimento;

        echo "<p>Quem nasceu em $anoNascimento tem/terá aproximadamente $idade anos.</p>";
        echo "<a href='idade.php'>Voltar</a>";
    } else {
        echo "<p>Por favor, insira um ano válido.</p>";
        echo "<a href='idade.php'>Tentar novamente</a>";
    }
} else {
   
    ?>
    <form method="post" action="idade.php">
        <label for="ano">Qual seu ano de nascimento?</label>
        <input type="number" name="ano" id="ano" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
}
?>
</body>