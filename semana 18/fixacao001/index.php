<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   $precoProduto = 150.00;
   $percentualDesconto = 10 / 100 * 150;
  $resto = 150 - $percentualDesconto;
   
   echo "Preco Original: R$ $precoProduto"; 
   echo "Desconto de 10%: R$ $percentualDesconto";
   echo "PReço Final: R$ $resto";


   ?> 
</body>
</html>