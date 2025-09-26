<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC-Pronto</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php 
        function br_currency($value) {
            return 'R$ ' . number_format($value, 2, ',', '.');
        }
    $preco = $quantidade = null;
    $erros= [];
    $subtotal=$taxa=$total_final=$frete=$total_com_frete=null;


    if($_SERVER['REQUEST_METHOD']==='POST'){
    $preco=str_replace([',',' '],['.',''],trim($_POST['preco']??''));
    $quantidade=trim($_POST['quantidade']??'');

    if($preco===''||!is_numeric($preco)||$preco<0){$erros[]='Preço inválido';}
    if($quantidade===''||!ctype_digit($quantidade)||$quantidade<1){$erros[]='Quantidade inválida';}

    if(!$erros){
        $preco=(float)$preco;
        $quantidade=(int)$quantidade;

        $subtotal=$preco*$quantidade;                 
        $taxa=$subtotal*0.125;                      
        $total_final=$subtotal+$taxa;                
        $frete=mt_rand(3000,15000)/100;            
        $total_com_frete=$total_final+$frete;       
    }
}
?>
<main>
  <h1>Orçamento PC-Pronto</h1>
  <section class="box">
<form method="post">
        <p>
        <label for="preco">Preço do produto:</label><br>
        <input type="text" name="preco" id="" value="<?=htmlspecialchars($_POST['preco']??'')?>">
        </p>
        <p>
            <label for="quantidade">Quantidade:</label><br>
            <input type="number" name="quantidade" id="quantidade" min="1" value="<?=htmlspecialchars($_POST['quantidade']??'')?>">
        </p>
        <p>
    <input type="submit" value="Calcular">
        </p>
    </form>
  </section>
<?php if($erros): ?>
    <section class="box error">
      <h2>⚠️ Erro</h2>
      <p><?= implode("<br>", $erros) ?></p>
    </section>
<?php endif; ?>

<?php if($subtotal!==null && !$erros): ?>
    <section class="box result">
      <h2>Proposta 1</h2>
      <p>Produto: <?= br_currency($preco) ?> (x<?= $quantidade ?>)</p>
      <p>Subtotal: <?= br_currency($subtotal) ?></p>
</section>

<section class="box result">
      <h2>Proposta 2</h2>
      <p>Subtotal: <?= br_currency($subtotal) ?></p>
      <p>Imposto (12,5%): <?= br_currency($taxa) ?></p>
      <p><strong>Total Final: <?= br_currency($total_final) ?></strong></p>
</section>
<section class="box result">
      <h2>Proposta 3</h2>
      <p>Subtotal: <?= br_currency($subtotal) ?></p>
      <p>Imposto (12,5%): <?= br_currency($taxa) ?></p>
      <p>Total Final: <?= br_currency($total_final) ?></p>
      <p>Frete: <?= br_currency($frete) ?></p>
      <p><strong>Valor Total com Frete: <?= br_currency($total_com_frete) ?></strong></p>
</section>
  <?php endif; ?>

</body>
</html>