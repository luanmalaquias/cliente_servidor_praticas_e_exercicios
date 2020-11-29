<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>

    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Valor<br>
            <input type = "number" name = "valor">
            <br>
        </label>
            
        <button type = "submit">Verificar</button>
    </form>

    <?php

        $valor = 0;
        $entre100e200 = 0;

        while($_REQUEST["valor"]!=0){
            echo "a";
        }
      
    ?>

</body>
</html>