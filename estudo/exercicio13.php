<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
</head>
<body>
    <form action="exercicio13.php" method="POST">
        Digite 5 valores:<br>
        <input type="text" name="um"><br>
        <input type="text" name="dois"><br>
        <input type="text" name="tres"><br>
        <input type="text" name="quatro"><br>
        <input type="text" name="cinco"><br>
        <input type="submit">
    </form>
    <?php 
     $valor=$_POST['um'];
     $valor2=$_POST['dois'];
     $valor3=$_POST['tres'];
     $valor4=$_POST['quatro'];
     $valor5=$_POST['cinco'];

    if($valor>$valor2 && $valor>$valor3 && $valor>$valor4 && $valor>$valor5){
        echo $valor;
    }elseif($valor2>$valor && $valor2>$valor3 && $valor2>$valor4 && $valor2>$valor5){
        echo $valor2;
    }elseif($valor3>$valor && $valor3>$valor2 && $valor3>$valor4 && $valor3>$valor5){
        echo $valor3;
    }elseif($valor4>$valor && $valor4>$valor2 && $valor4>$valor3 && $valor4>$valor5){
        echo $valor4;
    }else{
        echo $valor5;
    }

    ?>
</body>
</html>