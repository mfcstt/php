<?php

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo']; // Array com informações do arquivo
    $diretorio = "imagens/"; // Diretório onde o arquivo será salvo
    $nome = $arquivo['name']; // Nome do arquivo
    $nomeTemporario = $arquivo['tmp_name']; // Nome temporário do arquivo
    $tamanho = $arquivo['size']; // Tamanho do arquivo
    $erro = $arquivo['error']; // Código de erro

    switch($erro){
        case UPLOAD_ERR_OK:
            move_uploaded_file($nomeTemporario, $diretorio.$nome.time());
            header("location: index.php");
            break;
        case UPLOAD_ERR_INI_SIZE:
            echo "Tamnho do arquivo excede o limite definido no php.ini";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            echo "O arquivo excede o limite definido no formulário HTML";
            break;
    }

}
else{
    header("Location: index.php");
}

?>

