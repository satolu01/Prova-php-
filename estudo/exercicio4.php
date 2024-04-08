<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>%</title>
</head>
<body>
    <h1>Desconto</h1>
    <form action="exercicio4.php" method="POST">
        <input type="text" name="nome"><br>
        <input type="submit">
    </form>
    <?php 
        $valor=$_POST['nome'];
        $porcentagem=$valor*0.09;
        $resultado=$valor-$porcentagem;
        echo "O valor com 9% de desconto:". $resultado;

    ?>
</body>
</html>