<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>

    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Massa Inicial<br>
            <input type = "number" name = "massa">
            <br>
        </label>
            
        <button type = "submit">Verificar</button>
    </form>

    <?php

        function calcularPerda($massa){
            $tempo = 0;
            for($massa; $massa > 0.10; $massa -= $massa*(25/100)){                
                $tempo+=30;
            }
            echo "$tempo segundos";
        }

        if(!empty($_REQUEST["massa"])){
            calcularPerda($_REQUEST["massa"]);
        }

    ?>
</body>
</html>