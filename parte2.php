<?php
    $resultados=$_GET["resultados"]??"";
    $lanzamiento=rand(1, 6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Los resultados anteriores: <?= $resultados ?></h1>
<?php
    if($resultados!=""){
        $resultados=$resultados . "," . $lanzamiento;
    }else{
        $resultados=$lanzamiento;
    }
?>
    <br><button type="submit" name="lanzar"><a href="parte2.php?resultados=<?= $resultados ?>">lanzar dado</a></button> 
</body>
</html>