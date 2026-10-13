<?php
$inicio = $_GET["inicio"] ?? "";
$medio = $_GET["medio"] ?? "";
$final = $_GET["final"] ?? "";
$frase = $inicio . " " . $medio . " " . $final;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frases de cuñado</title>
</head>
<body>
    <h1>frases de cuñado</h1>
    <form method="GET">
        <select name="inicio" id="inicio">
            <option value="yo en tu lugar">yo en tu lugar</option>
            <option value="la verdad es que">la verdad es que</option>
            <option value="tu sabes que">tu sabes que</option>
            <option value="no hay duda de que">no hay duda de que</option>
            <option value="al final">al final</option>
    </select><br>

    <select name="medio" id="medio">
        <option value="siempre hay que invertir">siempre hay que invertir</option>
        <option value="lo importante es">lo importante es</option>
        <option value="nunca subestimes">nunca subestimes</option>
        <option value="yo siempre digo que">yo siempre digo que</option>
        <option value="el secreto esta en">el secreto esta en</option>
    </select><br>   

    <select name="final" id="final">
        <option value="la bolsa de valores">la bolsa de valores</option>
        <option value="el no tener dinero congelado en el banco">el no tener dinero congelado en el banco</option>
        <option value="lo chemtrails">lo chemtrails</option>
        <option value="la nube">la nube</option>
        <option value="las crypto">las crypto</option>
    </select><br>

    <button type="submit">generar frase</button>
    </form>
    <br>
    <h2>
        <?php echo $frase; ?>
    </h2>
</body>
</html>