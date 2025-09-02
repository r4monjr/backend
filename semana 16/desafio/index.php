<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Conversão</title>
</head>
<body>
    <?php
const VALOR = 5.45;
$dolar1 = 10.00;
$dolar2 = 50.00;
$dolar3 = 100.00;
$real1= 54.50;
$real2 = 272.50;
$real3 = 545.00;
echo "+-------------------------------------+";
echo "|   TABELA DE CONVERSÃO DE MOEDAS   |";
echo "| Cotação do Dólar:" . VALOR . "         |";
echo "+-------------------------------------+";
echo "| Dólar (US$)   | Real (R$)         |";
echo "+---------------+---------------------+";
echo "| US$ $dolar1     | R$ $real1          |";
echo "| US$ $dolar2     | R$ $real2         |";
echo "| US$ $dolar3    | R$ $real3         |";
echo "+-------------------------------------+";
?>
</body>
</html>