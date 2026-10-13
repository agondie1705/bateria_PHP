<?php
    if (isset($_GET['valor1']) && isset($_GET['valor2']) && isset($_GET['operador'])) {
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $operador = $_GET['operador'];

        if ($operador == "and") {
            $resultado = $valor1 && $valor2;
        } elseif ($operador == "or") {
            $resultado = $valor1 || $valor2;
        } elseif ($operador == "xor") {
            $resultado = $valor1 xor $valor2;
        } elseif ($operador == "+") {
            $resultado = $valor1 + $valor2;
        } elseif ($operador == "-") {
            $resultado = $valor1 - $valor2;
        } else {
            $resultado = "Operador no válido";
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>$valor1 $operador $valor2 → ";
        

        if (is_bool($resultado)) {
            echo $resultado ? 'true' : 'false';
        } else {
            echo $resultado;
        }
        
        echo "</p>";
    }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comparator</title>
</head>
<body>

    <h1>Formulario Comparator</h1>

    <form method="GET" action="">
        <label for="valor1">Valor 1:</label>
        <input type="text" name="valor1" id="valor1" required>
        <br><br>

        <label for="operador">Operador:</label>
        <select name="operador" id="operador">
            <option value="and">and</option>
            <option value="or">or</option>
            <option value="xor">xor</option>
            <option value="+">+</option>
            <option value="-">-</option>
        </select>
        <br><br>

        <label for="valor2">Valor 2:</label>
        <input type="text" name="valor2" id="valor2" required>
        <br><br>

        <button type="submit" name="calcular">Calcular</button>
    </form>

    

</body>
</html>