<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    
    <!-- Formulário -->
    <form action = <?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <label>
            Salario Bruto (R$)<br>
            <input type = "number" name = "salarioBruto">
            <br>
        </label>
        <label>
            Valo da Prestação (R$)<br>
            <input type = "number" name = valorPrestacao>
            <br>
        </label>
        <button type = "submit">Verificar</button>
    </form>

    <?php


        if(!empty($_REQUEST["salarioBruto"]) && $_REQUEST["valorPrestacao"] != ""){ // verifica se os campos não estão vazios
            
            // variável para calcular a porcentagem
            $porcentagem = ($_REQUEST["valorPrestacao"]/$_REQUEST["salarioBruto"])*100;

            if($_REQUEST["valorPrestacao"] <= ($_REQUEST["salarioBruto"]*30)/100){
                echo "Permitido <br>";
                echo "Valor da prestação: R$ " . $_REQUEST["valorPrestacao"];
                echo "<br> Porcentagem: $porcentagem%";

            }else{
                echo "Ultrapassou o limite de 30% do salário";

            }
        }

    ?>

</body>
</html>