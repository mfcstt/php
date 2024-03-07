<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operações</title>
</head>
<body>

<main>
        <form action="operacoes.php" method="get">

        <h1>Operações</h1>

            <input type="number" name="n1" step="0.1" placeholder="Insira o 1º número">
            <br><br>
            <input type="number" name="n2"step="0.1" placeholder="Insira o 2º número">

            <br><br>
      
            <input type="radio" name="op" value="1"> Soma
            <input type="radio" name="op" value="2"> Subtração
            <input type="radio" name="op" value="3"> Divisão
            <input type="radio" name="op" value="4"> Multiplicação

            <br><br>
            
            <input type="submit" value="Calcular"><br><br>
            
          </form>
          
          <form action="tabuada.php" method="get">
            
            <h1>Tabuada</h1>
            
            <input type="number" name="n3
            " step="0.1" placeholder="Gerar tabuada do número">
            
            <br><br>
            <input type="submit" value="Gerar"><br><br>

        </form>

</main>

</body>
</html>