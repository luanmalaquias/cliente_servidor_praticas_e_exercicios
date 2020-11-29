<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Mês<br>
            <input type = "number" name = "mes">
            <br>
        </label>
            
        <button type = "submit">Verificar</button>
    </form>

    <?php

        function verificarMes($mes){
            switch($mes){
                case 1: echo "Janeiro"; break;
                case 2: echo "Fevereiro"; break;
                case 3: echo "Março"; break;
                case 4: echo "Abril"; break;
                case 5: echo "Maio"; break;
                case 6: echo "Junho"; break;
                case 7: echo "Julho"; break;
                case 8: echo "Agosto"; break;
                case 9: echo "Setembro"; break;
                case 10: echo "Outubro"; break;
                case 11: echo "Novembro"; break;
                case 12: echo "Dezembro"; break;
                default: echo "Mês invalido"; break;
            }
        }

        if(!empty($_REQUEST["mes"])){
            verificarmes($_REQUEST["mes"]);
        }
    ?>

</body>
</html>