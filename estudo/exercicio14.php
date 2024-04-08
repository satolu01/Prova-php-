<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <form action="exercicio14.php" method="POST">
    Digite 5 valores:<br>
        <input type="text" name="um" required><br>
        <input type="text" name="dois" required><br>
        <input type="text" name="tres" required><br>
        <input type="text" name="quatro" required><br>
        <input type="text" name="cinco" required><br>
        <input type="submit">
    </form>
    <?php 
         $valor=$_POST['um'];
         $valor2=$_POST['dois'];
         $valor3=$_POST['tres'];
         $valor4=$_POST['quatro'];
         $valor5=$_POST['cinco'];
        $soma=$valor+$valor2+$valor3+$valor4+$valor5;
        $media=($valor+$valor2+$valor3+$valor4+$valor5)/5;

        echo "A soma dos valores é =".$soma;
        echo "<br> A Média dos valores é =".$media;


         
    ?>
    
</body>
</html>