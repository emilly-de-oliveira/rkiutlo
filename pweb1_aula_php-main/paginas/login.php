<?php

if(!empty($_POST)){
    session_start();

    $SESSION["login"]=$_POST['login'];
    $SESSION["senha"]=$_POST['senha'];

    if($SESSION["login"]== "admin" && $SESSION["senha"]=="123"){
        header("location: main.php");
    }

}else if(!empty($_GET['sair'])){
    header("location: login.php?msg=Erro");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sistema academico</h3>
    <form action="login.php" method="post">
    <label>Login</label>
    <input type="text" name="login"/>
    <label>Senha</label>
    <input type="password" name="senha"/>
    <button type="submit">Logar</button>

</body>
</html>