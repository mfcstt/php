<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>
<body>
        <h1>Resultado: </h1>

  <?php

  $n1 = filter_input(INPUT_GET, "n1", FILTER_SANITIZE_NUMBER_FLOAT);
  $n2 = filter_input(INPUT_GET, "n2", FILTER_SANITIZE_NUMBER_FLOAT);
  $op = filter_input(INPUT_GET, "op", FILTER_SANITIZE_NUMBER_FLOAT);


  if ($n1 == "" || $n2 == "" || $op == "") {
    header("location:index.php");
  }

switch ($op) {
  case 1:
    echo "$n1 + $n2 = " . soma($n1, $n2);
  break;
      
  case 2:
    echo "$n1 - $n2 = " . subtr($n1, $n2);
  break;
      
  case 3:
    echo "$n1 / $n2 = " . divi($n1, $n2);
  break;
      
  case 4:
    echo "$n1 * $n2 = " . mult($n1, $n2);
  break;
      
  default:
  
  break;
}

  function soma($n1, $n2){
    return $n1 + $n2;
  }

  function subtr($n1, $n2){
    return $n1 - $n2;
  }

  function divi($n1, $n2){
    return $n1 / $n2;
  }

  function mult($n1, $n2){
    return $n1 * $n2;
  }

?>

<br><br>

<form action="index.php">
  <input type="submit" value="Voltar"><br><br>
</form>


</body>
</html>