<?php
$inicio = $_GET["inicio"] ?? "";
$medio = $_GET["medio"] ?? "";
$final = $_GET["final"] ?? "";

$frase = "";

if (isset($_GET["normal"]) || isset($_GET["aleatorio"])) {
    $frase = $inicio . " " . $medio . " " . $final;
}

$inicios = ["yo en tu lugar", "la verdad es que", "tu sabes que", "no hay duda de que", "al final"];
$medios = ["siempre hay que invertir", "lo importante es", "nunca subestimes", "yo siempre digo que", "el secreto esta en"];
$finales = ["la bolsa de valores", "el no tener dinero congelado en el banco", "lo chemtrails", "la nube", "las crypto"];

$fraseAleatoria = "";

if (isset($_GET["aleatorio"])) {
    $inicioa = $inicios[array_rand($inicios)];
    $medioa = $medios[array_rand($medios)];
    $finala = $finales[array_rand($finales)];

    $fraseAleatoria = $inicioa . " " . $medioa . " " . $finala;
}
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
        </select>
        <br>

        <select name="medio" id="medio">
            <option value="siempre hay que invertir">siempre hay que invertir</option>
            <option value="lo importante es">lo importante es</option>
            <option value="nunca subestimes">nunca subestimes</option>
            <option value="yo siempre digo que">yo siempre digo que</option>
            <option value="el secreto esta en">el secreto esta en</option>
        </select>
        <br>

        <select name="final" id="final">
            <option value="la bolsa de valores">la bolsa de valores</option>
            <option value="el no tener dinero congelado en el banco">el no tener dinero congelado en el banco</option>
            <option value="lo chemtrails">lo chemtrails</option>
            <option value="la nube">la nube</option>
            <option value="las crypto">las crypto</option>
        </select>
        <br>

        <button type="submit" name="normal">
            generar frase
        </button>

        <button type="submit" name="aleatorio">
            generar frase aleatoria
        </button>

    </form>

    <br>

    <h2>
        <?php echo $frase; ?>
        <br><br>
        <?php echo $fraseAleatoria; ?>
    </h2>

</body>
</html>