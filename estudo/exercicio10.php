<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
</head>
<body>
    <form action="exercicio10.php" method="POST">
        <h1>Digite um valor de 1 a 10:</h1>
        <input type="number" name="numero"><br>
        <input type="submit">
    </form>
    <?php 
        $nota=$_POST['numero'];
        if($nota>=0 && $nota <= 10){
            echo "Valor válido<br>";
        }else{
            echo "Valor inválido";
        }
    ?>
    
</body>
</html>