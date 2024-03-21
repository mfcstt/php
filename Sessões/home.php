<?php 
    include_once('verificaUsuario.php');
    $logado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   if(isset($_SESSION['user'])){
       $logado = $_SESSION['user'];
   }
   else{
        $logado = '';
   }
   echo "Bem vindo $logado";
   echo "<br> ";
   // Consulta de informações sobre o cookie
    //  $CookieInfo = session_get_cookie_params();
    //  echo var_dump($CookieInfo);

   echo $hora();
   ?>
   <?php
    if($_SESSION['permissão']== 'admin'){

        ?>
    <p>Exibir para admin</p>;
    <?php 
}
    else{
        ?>
    <p>Exibir para user</p>
    <?php 
    
}
    ?>

    


</body>
</html>