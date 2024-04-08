<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
</head>
<body>
    <form action="exercicio11.php" method="POST">
        <h1>Cadastro</h1>
        User:<br>
        <input type="text" name="user" required><br>
        Senha:<br>
        <input type="password" name="senha" required><br>
        <input type="submit" value="cadastrar">

    </form>
    <?php 
        $user=$_POST['user'];
        $senha=$_POST['senha'];
        
        if($user==$senha){
            echo "O nome do usuário não pode ser igual sua senha!";   
        }else{
            echo "Cadastro Realizado!";
        }
    ?>

</body>
</html>