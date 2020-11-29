<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Quantidade<br>
            <input type = "number" name = "quantidade">
            <br>
        </label>
            
        <button type = "submit">Imprimir</button>
    </form>

    <?php

        function imprimir($quantidade){
            echo "<br>";
            for($i = 0; $i < $quantidade; $i++){
                echo "SOL ";
            }
        }

        if(!empty($_REQUEST["quantidade"])){
            imprimir($_REQUEST["quantidade"]);
        }
    ?>

</body>
</html>