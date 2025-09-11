<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $largura = (float) $_POST["largura"];
    $altura = (float) $_POST["altura"];
    $area = $largura * $altura;
    $litros = $area / 2;

    echo "<h2>--- Relatório de Pintura ---</h2>";
    echo "Para uma parede de <strong>{$largura}m</strong> de largura e <strong>{$altura}m</strong> de altura:<br>";
    echo "Área total: <strong>{$area} m²</strong><br>";
    echo "Serão necessários <strong>{$litros} litros</strong> de tinta.";
} else {

    ?>
    <h2>Calculadora de Tinta</h2>
    <form method="post">
        <label>Largura da parede (m):</label>
        <input type="number" step="0.01" name="largura" required>
        <br><br>

        <label>Altura da parede (m):</label>
        <input type="number" step="0.01" name="altura" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>
    <?php
}
?>
