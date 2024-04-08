<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana</title>
</head>
<body>
    <form action="exercicio8.php" method="POST">
        <h1>Escreva o numero correspondete ao dia de hoje:</h1>
        <li>1- Domingo</li>
        <li>2- Segunda-Feira</li>
        <li>3- Terça-feira</li>
        <li>4- Quarta-Feira</li>
        <li>5- Quinta-Feira</li>
        <li>6- Sexta-Feira</li>
        <li>7- Sábado</li><br>
        <input type="text" name="numero">
        <input type="submit">
    </form>
    <?php
        $valor=$_POST['numero'];
        if($valor==1){
            echo "<br>Domingo";
            }elseif($valor==2){
                echo "<br>Segunda-Feira";
            }elseif($valor==3){
                echo "<br>Terça-Feira";
            }elseif($valor==4){
                echo "<br>Quarta-Feira";
            }elseif($valor==5){
                echo "<br>Quinta-Feira";
            }elseif($valor==6){
                echo "<br>Sexta-Feira";
            }elseif($valor==7){
                echo "<br>Sábado";
                }else{
                    echo "<br>Valor inválido";
                }
            
    ?>
    
</body>
</html>