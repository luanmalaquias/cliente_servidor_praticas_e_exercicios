<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>
    
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Palavra<br>
            <input type = "text" name = "palavra">
            <br>
        </label>
            
        <button type = "submit">Imprimir</button>
    </form>

    <?php

        function imprimir($palavra){
            echo "<br>";
            for($i = 0; $i < 4; $i++){
                for ($j = 0; $j <= $i ; $j++) { 
                    echo "$palavra ";
                }
                echo "<br>";
            }
        }

        if(!empty($_REQUEST["palavra"])){
            imprimir($_REQUEST["palavra"]);
        }
    ?>

</body>
</html>