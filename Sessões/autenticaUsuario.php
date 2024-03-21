<?php 
session_start();
$nome = filter_input(INPUT_GET, 'user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);


if($nome == "admin" && $senha == "1234"){
    $_SESSION['user'] = $nome;
    $_SESSION['permissão'] = "admin";
    
}elseif ($nome == "user" && $senha == "1234") {
    $_SESSION['user'] = $nome;
    $_SESSION['permissão'] = "user";
}
else{
    unset($_SESSION['user']);
    unset($_SESSION['permissão']);
    header("Location: index.php");
    die();
}
    header("Location: home.php");
?>