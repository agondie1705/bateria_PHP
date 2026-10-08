<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"> 
        <button type="submit" name="lanzar">lanzar dado</button> 
    </form>
    <?php
        $resultado=NULL;

        if(isset($_POST["lanzar"])){
         $resultado=rand(1, 6);
          echo"<h1>El resultado del dado es: $resultado</h1>";
        }
        
    ?>
   
</body>
</html>