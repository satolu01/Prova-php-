<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cumprimento</title>
</head>
<body>
    <form action="exercicio7.php" method="POST">
        <h1>Em qual turno você estuda?</h1>
        <p>Digite:</p>
        <li>M - Matutino</li>
        <li>V - Vespertino</li>
        <li>N - Noturno</li>
        <input type="text" name="horario">
        <input type="submit" value="enviar">
    </form>
    <?php
        $valor=$_POST['horario'];
        if($valor=="M"){
            echo "<br>BOM-DIA";
            }elseif($valor=="V"){
                echo "<br>BOA-TARDE";
                }elseif($valor=="N"){
                    echo "<br>BOA-NOITE"; 
                    }else{
                        echo "<br>Valor inválido!";
                    }
    ?>
</body>
</html>