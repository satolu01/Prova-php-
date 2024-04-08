<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <h1>Produto</h1>
    <form action="exercicio5.php" method="POST">
        <input type="text" name="valor"><br>
        <input type="submit">
    </form>
    <?php 
        $valor=$_POST['valor'];
        $mais=$valor*0.16;
        $total=$valor+$mais;
        $parcelas=$total/10;

        for($i=1; $i<=10;$i++){
            echo $parcelas."<br>";
        }
        echo "Valor total da compra:".$total;
    ?>
</body>
</html>