<?php 

$imagens = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// 
if(!empty($imagens)){
    foreach ($imagens as $linha) {
        foreach ($linha as $key => $value) {
        echo $key , "->" , $value ,"<br>";
        unlink($value);
    }
}
}
header("Location: index.php");

?>