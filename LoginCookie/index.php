<!DOCTYPE html>
<?php 
 if(isset($_COOKIE["Cookie"])){
    if($_COOKIE["Cookie"] == "CookieAdm"){
        header("location:adm.php");
    }
    elseif($_COOKIE["Cookie"] == "CookieUsuario"){
        header("location:user.php");
    }
    else{
        
    }
 }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="validar.php" method="POST">
            <h1>Login</h1>
            <input type="email" name="email" placeholder="User">
            <br><br>
            <input type="password" name="senha" placeholder="Password">
            <br><br>
            <input type="submit" value="Login">
            <br><br>
        </form>
    </main>
    
    <?php 
    $erro = false;
    $msg = filter_input(INPUT_GET,"msg", FILTER_SANITIZE_SPECIAL_CHARS);

    if(!empty($msg)){
        $erro = true;
    }
    if($erro){
        echo "<span>Email ou Senha inválidos</span>";

    }
    ?>

</body>
</html>