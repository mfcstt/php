<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <form action="download.php" method="POST" enctype="multipart/form-data">
            <div>
                <label >Arquivo</label>
                <input type="file" name="arquivo" id="arquivo" accept="image/png,image/jpeg">
            </div>
            <br><br>
                <input type="submit" value="Enviar">
        </form>
    </main>

    <hr>
        <div>
            <form action="delete.php" method="POST">
                <?php 
                    const CAMINHO = "imagens/";
                    $diretorio = opendir(CAMINHO);
                    while(($nomeArquivo = readdir($diretorio)) !== false){
                        if(filetype(CAMINHO.$nomeArquivo) == "file"){

                ?>
                <img src="<?=CAMINHO.$nomeArquivo?>" alt="" width="80px">
                <input type="checkbox" name="image[]" value="<?=CAMINHO.$nomeArquivo?>">
                <?php 
                    }
                }
                ?>
                <br><br>
                <input type="submit" value="Deletar">
            </form>
        </div>

</body>
</html>