<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%</title>
</head>
<body>
    <h1>Porcentagem</h1>
    <form action="exercicio3.php" method="POST">
        Ecreva um valor:<br>
        <input type="number" name="nome"><br>
        <input type="submit">
    </form>
    <?php
        $valor=$_POST['nome'];
        $cinquenta=$valor*0.50;
        $cinco=$valor*0.05;

        echo "50%:". $cinquenta;
        echo "<br>5%:". $cinco;
    ?>
</body>
</html>