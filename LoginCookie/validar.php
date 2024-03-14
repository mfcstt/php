<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

    if($email == "adm@gmail.com" && $senha == "0123") {
        setcookie("Cookie","CookieAdm", time() + 30);
        header("location:adm.php");
    }
    elseif ($email == "mahcosta54@gmail.com" && $senha == "mafe") {
        setcookie("Cookie","CookieUsuario", time() + 30);
        header("location: user.php");
    }
    else{
        header("location:index.php?msg=erro");
    }
    
    ?>
</body>
</html>