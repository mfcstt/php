<?php 
session_start();
function verificaUsuario(){
    if(!isset($_SESSION['logado'])){
        header("Location: index.php");
    }
}
function logoff(){
    unset($_SESSION['user']);
    unset($_SESSION['permissão']);
    header("Location: index.php");
}

$hora = function(){return date('h m s', time());};

?>