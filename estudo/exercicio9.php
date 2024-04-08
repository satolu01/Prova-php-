<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior</title>
</head>
<body>
    <form action="exercicio9.php" method="POST">
        <h1>Digite 2 valores:</h1>
        <input type="text" name="valor"><br>
        <input type="text" name="valor2"><br>
        <input type="submit">
    </form>
    <?php
        $valor1=$_POST['valor'];
        $valor2=$_POST['valor2'];

        if($valor1>$valor2){
            echo $valor1;
        }else{
            echo $valor2;
        }
    ?>
</body>
</html>