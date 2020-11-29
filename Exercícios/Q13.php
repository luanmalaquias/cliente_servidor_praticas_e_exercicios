<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <?php

        $chico = 1.50;
        $juca = 1.10;

        for($ano = 0; $juca<$chico; $ano++){            
            $chico += 0.02;
            $juca += 0.03;

        }
        
        echo "É necessário $ano anos para que Juca seja maior que Chico";
        echo "<br> Chico: $chico <br> Juca: $juca";

    ?>
</body>
</html>