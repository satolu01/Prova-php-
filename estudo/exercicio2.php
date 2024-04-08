<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%</title>
</head>
<body>
    <h1>Porcentagem:</h1><br>
    <form action="exercicio2.php" method="POST">
        <input type="number" name="valor"><br>
        <input type="submit">
    </form>
    <?php
        $valor=$_POST['valor'];
        $resultado=$valor*0.15;
        echo $resultado;
    ?>
</body>
</html>