<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo</title>
</head>
<body>
    <form action="exercicio16.php" method="POST">
        Escreva um valor:<br>
        <input type="text" name="valor" required><br>
        Escreva outro:<br>
        <input type="text" name="valor2" required><br>
        <input type="submit">
    </form>
    <?php 
        $valor=$_POST['valor'];
        $valor2=$_POST['valor2'];
        
        if($valor>$valor2){
            for($i=$valor2+1;$i<=$valor-1;$i++){
                echo "<br> $i";
            }
            }else{
                for($i=$valor+1;$i<=$valor2-1;$i++){
                    echo "<br> $i";
                }
            }
        
    
    ?>

</body>
</html>