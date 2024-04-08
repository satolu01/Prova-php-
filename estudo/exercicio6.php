<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar</title>
</head>
<body>
    <form action="exercicio6.php" method="POST">
        <h1>Mudança</h1>
        <input type="number" name="valor"><br>
        <input type="number" name="valor2"><br>
        <input type="submit" value="trocar">
    </form>
    <?php
        $valor=$_POST['valor'];
        $valor2=$_POST['valor2'];
        echo "Primeiro valor:".$valor;
        echo "<br> Segundo valor:".$valor2;
    ?>
    <form action="exercicio6.php" method="POST">
        <input type="text" name="valor3"><br>
        <input type="text" name="valor4"><br>
        <input type="submit">
    </form>
    <?php 
        $valor=$_POST['valor3'];
        $valor2=$_POST['valor4'];
        echo "Primeiro valor:".$valor;
        echo "<br> Segundo valor:".$valor2;
        

    ?>
</body>
</html>