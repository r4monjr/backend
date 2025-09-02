<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Produto</title>
</head>
<body>
<?php
const NOME_EMPRESA = 'InfoTech';
$nomeProduto = 'Processador i9';
$quantidadeEstoque = 15;
$precoUnitario = 2750.99;
$emPromocao = false;
echo "*** Relatório de Inventário da" . NOME_EMPRESA . "3° Ano ***";
echo "Produto: $nomeProduto";
print "Quantidade em Estoque: $quantidadeEstoque unidades";
print "Preço por Unidade: R$$precoUnitario";
echo "Status da Promocao $emPromocao";
?>


</body>
</html>