<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Confirmar Dados</h1>
<?php


$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_GET, 'tel', FILTER_SANITIZE_NUMBER_INT);
$cur = filter_input(INPUT_GET, 'cur', FILTER_SANITIZE_STRING);
$date = filter_input(INPUT_GET, 'date', FILTER_SANITIZE_STRING);

if($email == ""){
  echo "E-mail é obrigatório", "<br><br>";
}
else{
  echo "Email : $email", "<br><br>";

}
if ($tel == ""){
  echo "Telefone é obrigatório", "<br><br>";
}
else{
  echo "telefone : $tel", "<br><br>";
}
if ($cur == ""){
  echo "Curso é obrigatório", "<br><br>";
}
else{
  echo "curso : $cur", "<br><br>";
}
if ($date == ""){
  echo "Data de nascimento é obrigatório", "<br><br>";
}
else{
  echo "data de nascimento : $date", "<br><br>";
}

if($email != "" && $tel != "" && $cur != "" && $date != ""){
  echo "<H1>Você está cadastrado na newsletter</H1>", "<br><br>";
}

?>
<form action="index.php" >

<input type="submit" value="Voltar">
</form>
</body>
</html>