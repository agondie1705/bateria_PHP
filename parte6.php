<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Strings Cachondas</title>
</head>
<body>

    <h1>Manipulación de Strings en PHP</h1>

    <?php
    $fraseOriginal = "Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío";

    echo "<h3>1. Frase Original:</h3>";
    echo "<p>$fraseOriginal</p>";
    // explode separa el string en palabras usando el espacio como separador
    // y guarda cada palabra en una posición del array
    $palabras = explode(" ", $fraseOriginal);
    $palabrasFiltradas = [];
    for ($i = 0; $i < count($palabras); $i++) {
        if ($i % 2 == 0) {
            $palabrasFiltradas[] = $palabras[$i];
        }
    }
    // implode une los elementos del array en un solo string
    // poniendo un espacio entre cada elemento
    $fraseResultado = implode(" ", $palabrasFiltradas);

    echo "<h3>4. Frase resultante:</h3>";
    echo "<p>$fraseResultado</p>";
    ?>

    <h3>Frase resultante de la opcion B:</h3>
    <?php    
    $palabrasOpcionB = [];
    foreach ($palabras as $palabra) {
        // Guarda todas las palabras excepto "frío"
        if ($palabra !== "frío") {
            $palabrasOpcionB[] = $palabra;
        }
    }
    // Une todas las palabras del array separándolas con espacios
    $fraseOpcionB = implode(" ", $palabrasOpcionB);
    
    echo "<p>$fraseOpcionB</p>";
    ?>

</body>
</html>